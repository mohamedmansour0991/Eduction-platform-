<?php //14e2911cb87ac8df2eaa9e49a08d65cb
/** @noinspection all */

namespace Tzsk\Payu\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\Tzsk\Payu\Models\_IH_PayuTransaction_C;
    use LaravelIdea\Helper\Tzsk\Payu\Models\_IH_PayuTransaction_QB;

    /**
     * @property int $id
     * @property int|null $paid_for_id
     * @property string|null $paid_for_type
     * @property string $transaction_id
     * @property $gateway
     * @property $body
     * @property string $destination
     * @property string $hash
     * @property array|null $response
     * @property string $status
     * @property Carbon|null $verified_at
     * @property Carbon|null $deleted_at
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @property Model $paidFor
     * @method MorphTo paidFor()
     * @method static _IH_PayuTransaction_QB onWriteConnection()
     * @method _IH_PayuTransaction_QB newQuery()
     * @method static _IH_PayuTransaction_QB on(null|string $connection = null)
     * @method static _IH_PayuTransaction_QB query()
     * @method static _IH_PayuTransaction_QB with(array|string $relations)
     * @method _IH_PayuTransaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PayuTransaction_C|PayuTransaction[] all()
     * @mixin _IH_PayuTransaction_QB
     */
    class PayuTransaction extends Model {}
}
