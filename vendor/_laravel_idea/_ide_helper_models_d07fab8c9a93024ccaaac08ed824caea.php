<?php //1dc276236c794ed381d52cf0b9a74c84
/** @noinspection all */

namespace SebaCarrasco93\LaravelPayku\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuPayment_C;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuPayment_QB;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuTransaction_C;
    use LaravelIdea\Helper\SebaCarrasco93\LaravelPayku\Models\_IH_PaykuTransaction_QB;

    /**
     * @property string $transaction_id
     * @property Carbon $start
     * @property Carbon $end
     * @property string $media
     * @property string $verification_key
     * @property string $authorization_code
     * @property int|null $last_4_digits
     * @property string|null $installments
     * @property string|null $card_type
     * @property string|null $additional_parameters
     * @property string $currency
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $payment_key
     * @property string|null $transaction_key
     * @property Carbon|null $deposit_date
     * @method static _IH_PaykuPayment_QB onWriteConnection()
     * @method _IH_PaykuPayment_QB newQuery()
     * @method static _IH_PaykuPayment_QB on(null|string $connection = null)
     * @method static _IH_PaykuPayment_QB query()
     * @method static _IH_PaykuPayment_QB with(array|string $relations)
     * @method _IH_PaykuPayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaykuPayment_C|PaykuPayment[] all()
     * @ownLinks transaction_id,\SebaCarrasco93\LaravelPayku\Models\PaykuTransaction,id
     * @mixin _IH_PaykuPayment_QB
     */
    class PaykuPayment extends Model {}

    /**
     * @property string $id
     * @property string|null $status
     * @property string|null $order
     * @property string|null $email
     * @property string|null $subject
     * @property string|null $url
     * @property int|null $amount
     * @property Carbon|null $notified_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property string|null $full_name
     * @property PaykuPayment $payment
     * @method HasOne|_IH_PaykuPayment_QB payment()
     * @method static _IH_PaykuTransaction_QB onWriteConnection()
     * @method _IH_PaykuTransaction_QB newQuery()
     * @method static _IH_PaykuTransaction_QB on(null|string $connection = null)
     * @method static _IH_PaykuTransaction_QB query()
     * @method static _IH_PaykuTransaction_QB with(array|string $relations)
     * @method _IH_PaykuTransaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaykuTransaction_C|PaykuTransaction[] all()
     * @foreignLinks id,\SebaCarrasco93\LaravelPayku\Models\PaykuPayment,transaction_id
     * @mixin _IH_PaykuTransaction_QB
     */
    class PaykuTransaction extends Model {}
}
