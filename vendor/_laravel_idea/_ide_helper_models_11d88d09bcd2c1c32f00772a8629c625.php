<?php //4f2a2cf965248def209f11a33ffd4621
/** @noinspection all */

namespace MacsiDigital\OAuth2 {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\MacsiDigital\OAuth2\_IH_Integration_C;
    use LaravelIdea\Helper\MacsiDigital\OAuth2\_IH_Integration_QB;

    /**
     * @method static _IH_Integration_QB onWriteConnection()
     * @method _IH_Integration_QB newQuery()
     * @method static _IH_Integration_QB on(null|string $connection = null)
     * @method static _IH_Integration_QB query()
     * @method static _IH_Integration_QB with(array|string $relations)
     * @method _IH_Integration_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Integration_C|Integration[] all()
     * @mixin _IH_Integration_QB
     */
    class Integration extends Model {}
}
