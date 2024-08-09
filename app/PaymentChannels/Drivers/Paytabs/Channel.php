<?php

namespace App\PaymentChannels\Drivers\Paytabs;

use App\Models\Order;
use App\Models\PaymentChannel;
use App\PaymentChannels\BasePaymentChannel;
use App\PaymentChannels\IChannel;
use Illuminate\Http\Request;
use Paytabscom\Laravel_paytabs\Facades\paypage;


class Channel extends BasePaymentChannel implements IChannel
{
    protected $currency;
    protected $test_mode;
    protected $profile_id;
    protected $server_key;
    protected $region;

    protected array $credentialItems = [
        'profile_id',
        'server_key',
    ];

    // https://github.com/paytabscom/paytabs-php-laravel-package

    public function __construct(PaymentChannel $paymentChannel)
    {
        $this->currency = currency(); // ['AED','EGP','SAR','OMR','JOD','US']
        $this->region = "GLOBAL"; //['ARE','EGY','SAU','OMN','JOR','GLOBAL']
        $this->setCredentialItems($paymentChannel);
    }

    private function handleConfigs()
    {
        \Config::set('paytabs.profile_id', $this->profile_id);
        \Config::set('paytabs.server_key', $this->server_key);
        \Config::set('paytabs.currency', $this->currency);
        \Config::set('paytabs.region', $this->region);
        \Config::set('paytabs.callback', $this->makeCallbackUrl());
    }


    public function paymentRequest(Order $order)
    {
        $this->handleConfigs();

        $generalSettings = getGeneralSettings();
        $user = $order->user;
        $price = $this->makeAmountByCurrency($order->total_amount, $this->currency);

        try {
            $pay = paypage::sendPaymentCode('all')
                ->sendTransaction('sale')
                ->sendCart($order->id, $price, $generalSettings['site_name'] . ' payment')
                ->sendCustomerDetails($user->full_name, $user->email, $user->mobile, '', '', '', '', '', '')
                ->sendShippingDetails($generalSettings['site_name'], $generalSettings['site_email'] ?? '', $generalSettings['site_phone'] ?? '', '', '', '', '', '', '')
                ->sendURLs($this->makeCallbackUrl(), $this->makeCallbackUrl())
                ->sendLanguage('en')
                ->create_pay_page();

            dd($pay);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }

    private function makeCallbackUrl()
    {
        $callbackUrl = route('payment_verify', [
            'gateway' => 'Paytabs'
        ]);

        return $callbackUrl;
    }

    public function verify(Request $request)
    {
        $this->handleConfigs();

        $data = $request->all();
        dd($data);

        /*$order = Order::where('id', $orderId)
            ->where('user_id', $userId)
            ->first();

        if (!empty($order)) {
            $orderStatus = Order::$fail;
            Auth::loginUsingId($userId);

            if ($response->isSuccess()) {
                $orderStatus = Order::$paying;
            }

            $order->update([
                'status' => $orderStatus,
            ]);
        }

        return $order;*/
    }

}
