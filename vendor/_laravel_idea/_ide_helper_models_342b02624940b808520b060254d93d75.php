<?php //e4596fb37282fe73a5b49b31b8ff3618
/** @noinspection all */

namespace AKCybex\JazzCash\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\AKCybex\JazzCash\Models\_IH_JazzCashTransaction_C;
    use LaravelIdea\Helper\AKCybex\JazzCash\Models\_IH_JazzCashTransaction_QB;

    /**
     * @property int $id
     * @property string $txn_ref_no
     * @property array $order Order data fields and values
     * @property array $request Jazzcash request data fields and values
     * @property array|null $response Jazzcash response data fields and values
     * @property string $status
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_JazzCashTransaction_QB onWriteConnection()
     * @method _IH_JazzCashTransaction_QB newQuery()
     * @method static _IH_JazzCashTransaction_QB on(null|string $connection = null)
     * @method static _IH_JazzCashTransaction_QB query()
     * @method static _IH_JazzCashTransaction_QB with(array|string $relations)
     * @method _IH_JazzCashTransaction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_JazzCashTransaction_C|JazzCashTransaction[] all()
     * @mixin _IH_JazzCashTransaction_QB
     */
    class JazzCashTransaction extends Model {}
}
