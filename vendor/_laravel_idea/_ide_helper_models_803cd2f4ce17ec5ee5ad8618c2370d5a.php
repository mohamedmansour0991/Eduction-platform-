<?php //d71196800c4a05159e53f4f51375b75b
/** @noinspection all */

namespace Illuminate\Notifications {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int|null $group_id
     * @property int|null $webinar_id
     * @property string $title
     * @property string $message
     * @property string|null $sender
     * @property string $type
     * @property int $created_at
     * @property int|null $sender_id
     * @property Model $notifiable
     * @method MorphTo notifiable()
     * @method static _IH_DatabaseNotification_QB onWriteConnection()
     * @method _IH_DatabaseNotification_QB newQuery()
     * @method static _IH_DatabaseNotification_QB on(null|string $connection = null)
     * @method static _IH_DatabaseNotification_QB query()
     * @method static _IH_DatabaseNotification_QB with(array|string $relations)
     * @method _IH_DatabaseNotification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static DatabaseNotificationCollection|DatabaseNotification[] all()
     * @ownLinks group_id,\App\Models\Group,id|webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\NotificationStatus,notification_id
     * @mixin _IH_DatabaseNotification_QB
     */
    class DatabaseNotification extends Model {}
}