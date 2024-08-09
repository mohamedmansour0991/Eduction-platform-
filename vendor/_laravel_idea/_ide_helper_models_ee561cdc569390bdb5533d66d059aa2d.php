<?php //6c9bb0cc8cb7ff197f2e7840a3aa8f88
/** @noinspection all */

namespace App {

    use App\Models\Accounting;
    use App\Models\Affiliate;
    use App\Models\AffiliateCode;
    use App\Models\Blog;
    use App\Models\Cart;
    use App\Models\Certificate;
    use App\Models\DeleteAccountRequest;
    use App\Models\ForumTopic;
    use App\Models\ForumTopicPost;
    use App\Models\GroupUser;
    use App\Models\InstallmentOrder;
    use App\Models\Meeting;
    use App\Models\Product;
    use App\Models\ProductOrder;
    use App\Models\ReserveMeeting;
    use App\Models\Role;
    use App\Models\Support;
    use App\Models\UserBadge;
    use App\Models\UserLoginHistory;
    use App\Models\UserMeta;
    use App\Models\UserOccupation;
    use App\Models\UserProfileAttachment;
    use App\Models\UserRegistrationPackage;
    use App\Models\UserSelectedBank;
    use App\Models\UserZoomApi;
    use App\Models\Webinar;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_C;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateCode_QB;
    use LaravelIdea\Helper\App\Models\_IH_Affiliate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeleteAccountRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_QB;
    use LaravelIdea\Helper\App\Models\_IH_GroupUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_C;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_Support_C;
    use LaravelIdea\Helper\App\Models\_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_C;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_C;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_C;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserRegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserZoomApi_QB;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_QB;
    use LaravelIdea\Helper\App\_IH_User_C;
    use LaravelIdea\Helper\App\_IH_User_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string|null $full_name
     * @property string $role_name
     * @property int $role_id
     * @property string|null $avatar
     * @property string|null $mobile
     * @property string $email
     * @property string $password
     * @property string|null $google_id
     * @property string|null $facebook_id
     * @property string|null $remember_token
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property string|null $headline
     * @property string|null $about
     * @property int|null $organ_id
     * @property bool $identity
     * @property string|null $cover_img
     * @property string|null $language
     * @property bool $newsletter
     * @property bool $public_message
     * @property string|null $account_type
     * @property string|null $iban
     * @property string|null $account_id
     * @property string|null $identity_scan
     * @property string|null $address
     * @property string|null $bio
     * @property bool $ban
     * @property int|null $ban_start_at
     * @property int|null $ban_end_at
     * @property int|null $commission
     * @property bool $offline
     * @property string|null $offline_message
     * @property bool $financial_approval
     * @property bool $installment_approval
     * @property bool $enable_installments
     * @property bool $disable_cashback
     * @property string|null $certificate
     * @property bool $affiliate
     * @property int|null $country_id
     * @property int|null $province_id
     * @property int|null $city_id
     * @property int|null $district_id
     * @property object|null $location
     * @property bool $group_meeting
     * @property string $meeting_type
     * @property string|null $timezone
     * @property bool $can_create_store Despite disabling the store feature in the settings, we can enable this feature for that user through the edit page of a user and turning on the store toggle.
     * @property bool $access_content
     * @property string|null $avatar_settings
     * @property int $logged_count
     * @property string|null $currency
     * @property bool $enable_registration_bonus
     * @property float|null $registration_bonus_amount
     * @property bool $enable_ai_content
     * @property bool $enable_profile_statistics
     * @property string|null $profile_video
     * @property-read array|null $level_of_training attribute
     * @property _IH_ReserveMeeting_C|ReserveMeeting[] $ReserveMeetings
     * @property-read int $reserve_meetings_count
     * @method HasMany|_IH_ReserveMeeting_QB ReserveMeetings()
     * @property _IH_Accounting_C|Accounting[] $accounting
     * @property-read int $accounting_count
     * @method HasMany|_IH_Accounting_QB accounting()
     * @property AffiliateCode $affiliateCode
     * @method HasOne|_IH_AffiliateCode_QB affiliateCode()
     * @property Affiliate $affiliates
     * @method HasOne|_IH_Affiliate_QB affiliates()
     * @property _IH_Blog_C|Blog[] $blog
     * @property-read int $blog_count
     * @method HasMany|_IH_Blog_QB blog()
     * @property _IH_Cart_C|Cart[] $carts
     * @property-read int $carts_count
     * @method HasMany|_IH_Cart_QB carts()
     * @property _IH_Certificate_C|Certificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|_IH_Certificate_QB certificates()
     * @property _IH_UserBadge_C|UserBadge[] $customBadges
     * @property-read int $custom_badges_count
     * @method HasMany|_IH_UserBadge_QB customBadges()
     * @property DeleteAccountRequest $deleteAccountRequest
     * @method HasOne|_IH_DeleteAccountRequest_QB deleteAccountRequest()
     * @property _IH_ForumTopicPost_C|ForumTopicPost[] $forumTopicPosts
     * @property-read int $forum_topic_posts_count
     * @method HasMany|_IH_ForumTopicPost_QB forumTopicPosts()
     * @property _IH_ForumTopic_C|ForumTopic[] $forumTopics
     * @property-read int $forum_topics_count
     * @method HasMany|_IH_ForumTopic_QB forumTopics()
     * @property _IH_InstallmentOrder_C|InstallmentOrder[] $installmentOrders
     * @property-read int $installment_orders_count
     * @method HasMany|_IH_InstallmentOrder_QB installmentOrders()
     * @property _IH_UserLoginHistory_C|UserLoginHistory[] $loginHistories
     * @property-read int $login_histories_count
     * @method HasMany|_IH_UserLoginHistory_QB loginHistories()
     * @property Meeting $meeting
     * @method HasOne|_IH_Meeting_QB meeting()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property _IH_UserOccupation_C|UserOccupation[] $occupations
     * @property-read int $occupations_count
     * @method HasMany|_IH_UserOccupation_QB occupations()
     * @property _IH_ProductOrder_C|ProductOrder[] $productOrdersAsBuyer
     * @property-read int $product_orders_as_buyer_count
     * @method HasMany|_IH_ProductOrder_QB productOrdersAsBuyer()
     * @property _IH_ProductOrder_C|ProductOrder[] $productOrdersAsSeller
     * @property-read int $product_orders_as_seller_count
     * @method HasMany|_IH_ProductOrder_QB productOrdersAsSeller()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @property _IH_UserProfileAttachment_C|UserProfileAttachment[] $profileAttachments
     * @property-read int $profile_attachments_count
     * @method HasMany|_IH_UserProfileAttachment_QB profileAttachments()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property Role $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property UserSelectedBank $selectedBank
     * @method HasOne|_IH_UserSelectedBank_QB selectedBank()
     * @property _IH_Support_C|Support[] $supports
     * @property-read int $supports_count
     * @method HasMany|_IH_Support_QB supports()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @property GroupUser $userGroup
     * @method BelongsTo|_IH_GroupUser_QB userGroup()
     * @property _IH_UserMeta_C|UserMeta[] $userMetas
     * @property-read int $user_metas_count
     * @method HasMany|_IH_UserMeta_QB userMetas()
     * @property UserRegistrationPackage $userRegistrationPackage
     * @method HasOne|_IH_UserRegistrationPackage_QB userRegistrationPackage()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method HasMany|_IH_Webinar_QB webinars()
     * @property UserZoomApi $zoomApi
     * @method HasOne|_IH_UserZoomApi_QB zoomApi()
     * @method static _IH_User_QB onWriteConnection()
     * @method _IH_User_QB newQuery()
     * @method static _IH_User_QB on(null|string $connection = null)
     * @method static _IH_User_QB query()
     * @method static _IH_User_QB with(array|string $relations)
     * @method _IH_User_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_User_C|User[] all()
     * @ownLinks country_id,\App\Models\Region,id|province_id,\App\Models\Region,id|city_id,\App\Models\Region,id|district_id,\App\Models\Region,id|role_id,\App\Models\Role,id
     * @foreignLinks id,\App\Models\Api\Webinar,teacher_id|id,\App\Models\Api\Webinar,creator_user_id|id,\App\Models\WebinarPartnerTeacher,teacher_id|id,\App\Models\Api\Certificate,student_id|id,\App\Models\Purchase,user_id|id,\App\Models\Api\Favorite,user_id|id,\App\Models\Api\Comment,user_id|id,\App\Models\Api\QuizzesResult,user_id|id,\App\Models\Api\QuizzesQuestionsAnswer,creator_user_id|id,\App\Models\Api\QuizzesQuestion,creator_user_id|id,\App\Models\Api\WebinarReview,creator_user_id|id,\App\Models\Api\Meeting,creator_id|id,\App\Models\Api\Meeting,teacher_id|id,\App\Models\Api\ReserveMeeting,user_id|id,\App\Models\Api\Follow,follower|id,\App\Models\Api\Follow,user_id|id,\App\Models\Api\Webinar,creator_id|id,\App\Models\Api\WebinarReview,creator_id|id,\App\Models\Api\QuizzesQuestionsAnswer,creator_id|id,\App\Models\Api\QuizzesQuestion,creator_id|id,\App\Models\Api\Quiz,creator_id|id,\App\Models\UserMeta,user_id|id,\App\Models\Api\Cart,creator_id|id,\App\Models\Order,user_id|id,\App\Models\OrderItem,user_id|id,\App\Models\Api\Sale,user_id|id,\App\Models\Discount,creator_id|id,\App\Models\DiscountUser,user_id|id,\App\Models\TicketUser,user_id|id,\App\Models\Group,creator_id|id,\App\Models\Api\GroupUser,user_id|id,\App\Models\UserBadge,user_id|id,\App\Models\Api\Payout,user_id|id,\App\Models\Api\Sale,buyer_id|id,\App\Models\Api\Sale,seller_id|id,\App\Models\Api\Support,user_id|id,\App\Models\OfflinePayment,user_id|id,\App\Models\Api\SupportConversation,sender_id|id,\App\Models\Api\SupportConversation,supporter_id|id,\App\Models\UserOccupation,user_id|id,\App\Models\Api\File,creator_id|id,\App\Models\Api\Ticket,creator_id|id,\App\Models\Api\Session,creator_id|id,\App\Models\Api\Faq,creator_id|id,\App\Models\Api\TextLesson,creator_id|id,\App\Models\SubscribeUse,user_id|id,\App\Models\CourseLearning,user_id|id,\App\Models\BecomeInstructor,user_id|id,\Illuminate\Notifications\DatabaseNotification,user_id|id,\App\Models\SpecialOffer,creator_id|id,\App\Models\Api\SupportConversation,sender_id|id,\App\Models\Verification,user_id|id,\App\Models\Noticeboard,organ_id|id,\App\Models\Noticeboard,user_id|id,\App\Models\SessionRemind,user_id|id,\App\Models\UserZoomApi,user_id|id,\App\Models\Api\WebinarChapter,user_id|id,\App\Models\AffiliateCode,user_id|id,\App\Models\Affiliate,affiliate_user_id|id,\App\Models\Affiliate,referred_user_id|id,\App\Models\UserRegistrationPackage,user_id|id,\App\Models\Api\Product,creator_id|id,\App\Models\ProductDiscount,creator_id|id,\App\Models\ProductFile,creator_id|id,\App\Models\ProductMedia,creator_id|id,\App\Models\ProductSelectedSpecification,creator_id|id,\App\Models\ProductFaq,creator_id|id,\App\Models\ProductReview,creator_id|id,\App\Models\Api\WebinarChapterItem,user_id|id,\App\Models\Api\WebinarAssignment,creator_id|id,\App\Models\Api\WebinarAssignmentHistory,instructor_id|id,\App\Models\Api\WebinarAssignmentHistory,student_id|id,\App\Models\Api\Bundle,creator_id|id,\App\Models\Api\Bundle,teacher_id|id,\App\Models\CourseNoticeboard,creator_id|id,\App\Models\Api\CourseForum,user_id|id,\App\Models\Api\CourseForumAnswer,user_id|id,\App\Models\ForumTopic,creator_id|id,\App\Models\ForumTopicAttachment,creator_id|id,\App\Models\ForumTopicPost,user_id|id,\App\Models\ForumTopicReport,user_id|id,\App\Models\ForumTopicBookmark,user_id|id,\App\Models\ForumTopicLike,user_id|id,\App\Models\UserCookieSecurity,user_id|id,\App\Models\SubscribeRemind,user_id|id,\App\Models\Noticeboard,instructor_id|id,\App\Models\WebinarExtraDescription,creator_id|id,\App\Models\DeleteAccountRequest,user_id|id,\App\Models\UpcomingCourse,creator_id|id,\App\Models\UpcomingCourse,teacher_id|id,\App\Models\UpcomingCourseFollower,user_id|id,\App\Models\UpcomingCourseReport,user_id|id,\App\Models\InstallmentSpecificationItem,instructor_id|id,\App\Models\InstallmentSpecificationItem,seller_id|id,\App\Models\InstallmentOrder,user_id|id,\App\Models\CashbackRuleSpecificationItem,instructor_id|id,\App\Models\CashbackRuleSpecificationItem,seller_id|id,\App\Models\CashbackRuleUserGroup,user_id|id,\App\Models\InstallmentReminder,user_id|id,\App\Models\Waitlist,user_id|id,\App\Models\UserSelectedBank,user_id|id,\App\Models\Gift,user_id|id,\App\Models\SelectedInstallment,user_id|id,\App\Models\FormRoleUserGroup,user_id|id,\App\Models\FormSubmission,user_id|id,\App\Models\UserFormField,user_id|id,\App\Models\AiContent,user_id|id,\App\Models\RelatedCourse,creator_id|id,\App\Models\PurchaseNotificationHistory,user_id|id,\App\Models\CoursePersonalNote,user_id|id,\App\Models\ContentDeleteRequest,user_id|id,\App\Models\UserLoginHistory,user_id|id,\App\Models\CourseLearningLastView,user_id|id,\App\Models\AbandonedCartRuleUserGroup,user_id|id,\App\Models\AbandonedCartRuleSpecificationItem,instructor_id|id,\App\Models\AbandonedCartRuleSpecificationItem,seller_id|id,\App\Models\Api\Accounting,user_id|id,\App\Models\CommentReport,user_id|id,\App\Models\Api\WebinarReport,user_id|id,\App\Models\NotificationStatus,user_id|id,\App\Models\NoticeboardStatus,user_id|id,\App\Models\Newsletter,user_id|id,\App\Models\Api\RewardAccounting,user_id|id,\App\Models\CourseNoticeboardStatus,user_id|id,\App\Models\UserProfileAttachment,user_id|id,\App\Models\AbandonedCartRuleHistory,user_id
     * @mixin _IH_User_QB
     */
    class User extends Model {}
}