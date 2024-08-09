<?php

namespace App\PaymentChannels\Drivers\Payu;

use App\Models\Order;
use App\Models\PaymentChannel;
use App\PaymentChannels\BasePaymentChannel;
use App\PaymentChannels\IChannel;
use Illuminate\Http\Request;
use Tzsk\Payu\Concerns\Attributes;
use Tzsk\Payu\Concerns\Customer;
use Tzsk\Payu\Concerns\Transaction;
use Tzsk\Payu\Facades\Payu;
use Tzsk\Payu\Gateway\Gateway;
use Tzsk\Payu\Gateway\PayuBiz;
use Tzsk\Payu\Gateway\PayuMoney;


class Channel extends BasePaymentChannel implements IChannel
{
    protected $currency;
    protected $test_mode;
    protected $default_gateway;
    protected $money_key;
    protected $money_salt;
    protected $money_auth;


    protected array $credentialItems = [
        'money_key',
        'money_salt',
        'money_auth',
    ];

    /**
     * Channel constructor.
     * @param PaymentChannel $paymentChannel
     */
    public function __construct(PaymentChannel $paymentChannel)
    {
        $this->currency = currency();
        $this->default_gateway = "money";

        $this->setCredentialItems($paymentChannel);
    }

    private function handleConfigs()
    {
        $gateway = [
            'money' => new PayuMoney([
                'mode' => $this->test_mode ? Gateway::TEST_MODE : Gateway::LIVE_MODE,
                'key' => $this->money_key,
                'salt' => $this->money_salt,
                'auth' => $this->money_auth,
            ]),

            'biz' => new PayuBiz([
                'mode' => $this->test_mode ? Gateway::TEST_MODE : Gateway::LIVE_MODE,
                'key' => '',
                'salt' => '',
            ]),
        ];

        \Config::set('payu.default', $this->default_gateway);
        \Config::set('payu.gateways', $gateway);
    }

    public function paymentRequest(Order $order)
    {
        $this->handleConfigs();

        $customer = Customer::make()
            ->firstName($order->user->full_name)
            ->email(!empty($order->user->email) ? $order->user->email : 'john@example.com');

        $attributes = Attributes::make()
            ->udf1($order->id)
            ->udf2($order->user->id);

        $transaction = Transaction::make()
            ->charge($this->makeAmountByCurrency($order->total_amount, $this->currency))
            ->for('Product')
            ->with($attributes)
            ->to($customer);

        try {
            return Payu::initiate($transaction)->redirect($this->makeCallbackUrl());
        } catch (\Exception $exception) {
            //dd($exception);
        }

        $toastData = [
            'title' => trans('cart.fail_purchase'),
            'msg' => '',
            'status' => 'error'
        ];
        return redirect()->back()->with(['toast' => $toastData])->withInput();
    }

    private function makeCallbackUrl()
    {
        $callbackUrl = route('payment_verify', [
            'gateway' => 'Payu'
        ]);

        return $callbackUrl;
    }


    public function verify(Request $request)
    {
        $this->handleConfigs();

        $transaction = Payu::capture();

        $order_id = $transaction->response('udf1');
        $user_id = $transaction->response('udf2');

        $order = Order::where('id', $order_id)
            ->where('user_id', $user_id)
            ->first();

        if (!empty($order)) {
            if ($transaction->successful()) {
                $order->update(['status' => Order::$paying]);
            } elseif ($transaction->failed()) {
                $order->update(['status' => Order::$fail]);
            } elseif ($transaction->pending()) {
                $order->update(['status' => Order::$pending]);
            }
        }

        return $order;
    }
}
