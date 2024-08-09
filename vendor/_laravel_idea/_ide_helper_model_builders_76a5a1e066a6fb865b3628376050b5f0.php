<?php //125c95ef05b147e7fdaadd3d9f9df96e
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models {

    use App\Models\AbandonedCartRule;
    use App\Models\AbandonedCartRuleHistory;
    use App\Models\AbandonedCartRuleSpecificationItem;
    use App\Models\AbandonedCartRuleUserGroup;
    use App\Models\Accounting;
    use App\Models\AdvertisingBanner;
    use App\Models\Affiliate;
    use App\Models\AffiliateCode;
    use App\Models\AgoraHistory;
    use App\Models\AiContent;
    use App\Models\AiContentTemplate;
    use App\Models\Badge;
    use App\Models\BecomeInstructor;
    use App\Models\Blog;
    use App\Models\BlogCategory;
    use App\Models\BundleFilterOption;
    use App\Models\BundleWebinar;
    use App\Models\Cart;
    use App\Models\CartDiscount;
    use App\Models\CashbackRule;
    use App\Models\CashbackRuleSpecificationItem;
    use App\Models\CashbackRuleUserGroup;
    use App\Models\Category;
    use App\Models\Certificate;
    use App\Models\CertificateTemplate;
    use App\Models\Comment;
    use App\Models\CommentReport;
    use App\Models\Contact;
    use App\Models\ContentDeleteRequest;
    use App\Models\CourseForum;
    use App\Models\CourseForumAnswer;
    use App\Models\CourseLearning;
    use App\Models\CourseLearningLastView;
    use App\Models\CourseNoticeboard;
    use App\Models\CourseNoticeboardStatus;
    use App\Models\CoursePersonalNote;
    use App\Models\Currency;
    use App\Models\DeleteAccountRequest;
    use App\Models\Discount;
    use App\Models\DiscountBundle;
    use App\Models\DiscountCategory;
    use App\Models\DiscountCourse;
    use App\Models\DiscountGroup;
    use App\Models\DiscountUser;
    use App\Models\Faq;
    use App\Models\Favorite;
    use App\Models\FeatureWebinar;
    use App\Models\File;
    use App\Models\Filter;
    use App\Models\FilterOption;
    use App\Models\FloatingBar;
    use App\Models\Follow;
    use App\Models\Form;
    use App\Models\FormField;
    use App\Models\FormFieldOption;
    use App\Models\FormRoleUserGroup;
    use App\Models\FormSubmission;
    use App\Models\FormSubmissionItem;
    use App\Models\Forum;
    use App\Models\ForumFeaturedTopic;
    use App\Models\ForumRecommendedTopic;
    use App\Models\ForumRecommendedTopicItem;
    use App\Models\ForumTopic;
    use App\Models\ForumTopicAttachment;
    use App\Models\ForumTopicBookmark;
    use App\Models\ForumTopicLike;
    use App\Models\ForumTopicPost;
    use App\Models\ForumTopicReport;
    use App\Models\Gift;
    use App\Models\Group;
    use App\Models\GroupRegistrationPackage;
    use App\Models\GroupUser;
    use App\Models\HomePageStatistic;
    use App\Models\HomeSection;
    use App\Models\Installment;
    use App\Models\InstallmentOrder;
    use App\Models\InstallmentOrderAttachment;
    use App\Models\InstallmentOrderPayment;
    use App\Models\InstallmentReminder;
    use App\Models\InstallmentSpecificationItem;
    use App\Models\InstallmentStep;
    use App\Models\InstallmentUserGroup;
    use App\Models\IpRestriction;
    use App\Models\Meeting;
    use App\Models\MeetingTime;
    use App\Models\NavbarButton;
    use App\Models\Newsletter;
    use App\Models\NewsletterHistory;
    use App\Models\Noticeboard;
    use App\Models\NoticeboardStatus;
    use App\Models\Notification;
    use App\Models\NotificationStatus;
    use App\Models\NotificationTemplate;
    use App\Models\OfflineBank;
    use App\Models\OfflineBankSpecification;
    use App\Models\OfflinePayment;
    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\Page;
    use App\Models\PaymentChannel;
    use App\Models\Payout;
    use App\Models\Permission;
    use App\Models\Prerequisite;
    use App\Models\Product;
    use App\Models\ProductBadge;
    use App\Models\ProductBadgeContent;
    use App\Models\ProductCategory;
    use App\Models\ProductDiscount;
    use App\Models\ProductFaq;
    use App\Models\ProductFile;
    use App\Models\ProductFilter;
    use App\Models\ProductFilterOption;
    use App\Models\ProductMedia;
    use App\Models\ProductOrder;
    use App\Models\ProductReview;
    use App\Models\ProductSelectedFilterOption;
    use App\Models\ProductSelectedSpecification;
    use App\Models\ProductSelectedSpecificationMultiValue;
    use App\Models\ProductSpecification;
    use App\Models\ProductSpecificationCategory;
    use App\Models\ProductSpecificationMultiValue;
    use App\Models\Promotion;
    use App\Models\Purchase;
    use App\Models\PurchaseNotification;
    use App\Models\PurchaseNotificationHistory;
    use App\Models\PurchaseNotificationRoleGroupContent;
    use App\Models\Quiz;
    use App\Models\QuizzesQuestion;
    use App\Models\QuizzesQuestionsAnswer;
    use App\Models\QuizzesResult;
    use App\Models\Region;
    use App\Models\RegistrationPackage;
    use App\Models\RelatedCourse;
    use App\Models\ReserveMeeting;
    use App\Models\Reward;
    use App\Models\RewardAccounting;
    use App\Models\Role;
    use App\Models\Sale;
    use App\Models\SaleLog;
    use App\Models\Section;
    use App\Models\SelectedInstallment;
    use App\Models\SelectedInstallmentStep;
    use App\Models\Session;
    use App\Models\SessionRemind;
    use App\Models\Setting;
    use App\Models\SpecialOffer;
    use App\Models\Subscribe;
    use App\Models\SubscribeRemind;
    use App\Models\SubscribeUse;
    use App\Models\Support;
    use App\Models\SupportConversation;
    use App\Models\SupportDepartment;
    use App\Models\Tag;
    use App\Models\Testimonial;
    use App\Models\TextLesson;
    use App\Models\TextLessonAttachment;
    use App\Models\Ticket;
    use App\Models\TicketUser;
    use App\Models\TrendCategory;
    use App\Models\UpcomingCourse;
    use App\Models\UpcomingCourseFilterOption;
    use App\Models\UpcomingCourseFollower;
    use App\Models\UpcomingCourseReport;
    use App\Models\UserBadge;
    use App\Models\UserBank;
    use App\Models\UserBankSpecification;
    use App\Models\UserCommission;
    use App\Models\UserCookieSecurity;
    use App\Models\UserFormField;
    use App\Models\UserLoginHistory;
    use App\Models\UserMeta;
    use App\Models\UserOccupation;
    use App\Models\UserProfileAttachment;
    use App\Models\UserRegistrationPackage;
    use App\Models\UserSelectedBank;
    use App\Models\UserSelectedBankSpecification;
    use App\Models\UserZoomApi;
    use App\Models\Verification;
    use App\Models\Waitlist;
    use App\Models\Webinar;
    use App\Models\WebinarAssignment;
    use App\Models\WebinarAssignmentAttachment;
    use App\Models\WebinarAssignmentHistory;
    use App\Models\WebinarAssignmentHistoryMessage;
    use App\Models\WebinarChapter;
    use App\Models\WebinarChapterItem;
    use App\Models\WebinarExtraDescription;
    use App\Models\WebinarFilterOption;
    use App\Models\WebinarPartnerTeacher;
    use App\Models\WebinarReport;
    use App\Models\WebinarReview;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method AbandonedCartRuleHistory|null getOrPut($key, $value)
     * @method AbandonedCartRuleHistory|$this shift(int $count = 1)
     * @method AbandonedCartRuleHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleHistory|$this pop(int $count = 1)
     * @method AbandonedCartRuleHistory|null pull($key, \Closure $default = null)
     * @method AbandonedCartRuleHistory|null last(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleHistory|$this random(callable|int|null $number = null)
     * @method AbandonedCartRuleHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleHistory|null get($key, \Closure $default = null)
     * @method AbandonedCartRuleHistory|null first(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AbandonedCartRuleHistory|null find($key, $default = null)
     * @method AbandonedCartRuleHistory[] all()
     */
    class _IH_AbandonedCartRuleHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AbandonedCartRuleHistory[][]|Collection<_IH_AbandonedCartRuleHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AbandonedCartRuleHistory_QB whereId($value)
     * @method _IH_AbandonedCartRuleHistory_QB whereUserId($value)
     * @method _IH_AbandonedCartRuleHistory_QB whereCartRuleId($value)
     * @method _IH_AbandonedCartRuleHistory_QB whereRuleAction($value)
     * @method _IH_AbandonedCartRuleHistory_QB whereType($value)
     * @method _IH_AbandonedCartRuleHistory_QB whereCreatedAt($value)
     * @method AbandonedCartRuleHistory baseSole(array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory create(array $attributes = [])
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] cursor()
     * @method AbandonedCartRuleHistory|null|_IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory|_IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleHistory|_IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory|_IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory first(array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleHistory firstOrFail(array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory firstOrNew(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AbandonedCartRuleHistory forceCreate(array $attributes)
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] get(array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory getModel()
     * @method AbandonedCartRuleHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] hydrate(array $items)
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AbandonedCartRuleHistory make(array $attributes = [])
     * @method AbandonedCartRuleHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AbandonedCartRuleHistory[]|_IH_AbandonedCartRuleHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AbandonedCartRuleHistory[]|_IH_AbandonedCartRuleHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleHistory sole(array|string $columns = ['*'])
     * @method AbandonedCartRuleHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AbandonedCartRuleHistory_QB extends _BaseBuilder {}
    
    /**
     * @method AbandonedCartRuleSpecificationItem|null getOrPut($key, $value)
     * @method AbandonedCartRuleSpecificationItem|$this shift(int $count = 1)
     * @method AbandonedCartRuleSpecificationItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleSpecificationItem|$this pop(int $count = 1)
     * @method AbandonedCartRuleSpecificationItem|null pull($key, \Closure $default = null)
     * @method AbandonedCartRuleSpecificationItem|null last(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleSpecificationItem|$this random(callable|int|null $number = null)
     * @method AbandonedCartRuleSpecificationItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleSpecificationItem|null get($key, \Closure $default = null)
     * @method AbandonedCartRuleSpecificationItem|null first(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleSpecificationItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AbandonedCartRuleSpecificationItem|null find($key, $default = null)
     * @method AbandonedCartRuleSpecificationItem[] all()
     */
    class _IH_AbandonedCartRuleSpecificationItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AbandonedCartRuleSpecificationItem[][]|Collection<_IH_AbandonedCartRuleSpecificationItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereAbandonedCartRuleId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereCategoryId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereInstructorId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereSellerId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereWebinarId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereProductId($value)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB whereBundleId($value)
     * @method AbandonedCartRuleSpecificationItem baseSole(array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem create(array $attributes = [])
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] cursor()
     * @method AbandonedCartRuleSpecificationItem|null|_IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] find($id, array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem|_IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleSpecificationItem|_IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] findOrFail($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem|_IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] findOrNew($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem first(array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleSpecificationItem firstOrCreate(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleSpecificationItem firstOrFail(array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem firstOrNew(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleSpecificationItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AbandonedCartRuleSpecificationItem forceCreate(array $attributes)
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] get(array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem getModel()
     * @method AbandonedCartRuleSpecificationItem[] getModels(array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] hydrate(array $items)
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] lazy(int $chunkSize = 1000)
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AbandonedCartRuleSpecificationItem make(array $attributes = [])
     * @method AbandonedCartRuleSpecificationItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AbandonedCartRuleSpecificationItem[]|_IH_AbandonedCartRuleSpecificationItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleSpecificationItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AbandonedCartRuleSpecificationItem[]|_IH_AbandonedCartRuleSpecificationItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleSpecificationItem sole(array|string $columns = ['*'])
     * @method AbandonedCartRuleSpecificationItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AbandonedCartRuleSpecificationItem_QB extends _BaseBuilder {}
    
    /**
     * @method AbandonedCartRuleUserGroup|null getOrPut($key, $value)
     * @method AbandonedCartRuleUserGroup|$this shift(int $count = 1)
     * @method AbandonedCartRuleUserGroup|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleUserGroup|$this pop(int $count = 1)
     * @method AbandonedCartRuleUserGroup|null pull($key, \Closure $default = null)
     * @method AbandonedCartRuleUserGroup|null last(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleUserGroup|$this random(callable|int|null $number = null)
     * @method AbandonedCartRuleUserGroup|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleUserGroup|null get($key, \Closure $default = null)
     * @method AbandonedCartRuleUserGroup|null first(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleUserGroup|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AbandonedCartRuleUserGroup|null find($key, $default = null)
     * @method AbandonedCartRuleUserGroup[] all()
     */
    class _IH_AbandonedCartRuleUserGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AbandonedCartRuleUserGroup[][]|Collection<_IH_AbandonedCartRuleUserGroup_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AbandonedCartRuleUserGroup_QB whereId($value)
     * @method _IH_AbandonedCartRuleUserGroup_QB whereAbandonedCartRuleId($value)
     * @method _IH_AbandonedCartRuleUserGroup_QB whereGroupId($value)
     * @method _IH_AbandonedCartRuleUserGroup_QB whereUserId($value)
     * @method AbandonedCartRuleUserGroup baseSole(array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup create(array $attributes = [])
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] cursor()
     * @method AbandonedCartRuleUserGroup|null|_IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] find($id, array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup|_IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleUserGroup|_IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] findOrFail($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup|_IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] findOrNew($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup first(array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleUserGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleUserGroup firstOrFail(array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup firstOrNew(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleUserGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AbandonedCartRuleUserGroup forceCreate(array $attributes)
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] get(array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup getModel()
     * @method AbandonedCartRuleUserGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] hydrate(array $items)
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] lazy(int $chunkSize = 1000)
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AbandonedCartRuleUserGroup make(array $attributes = [])
     * @method AbandonedCartRuleUserGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AbandonedCartRuleUserGroup[]|_IH_AbandonedCartRuleUserGroup_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleUserGroup restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AbandonedCartRuleUserGroup[]|_IH_AbandonedCartRuleUserGroup_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleUserGroup sole(array|string $columns = ['*'])
     * @method AbandonedCartRuleUserGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AbandonedCartRuleUserGroup_QB extends _BaseBuilder {}
    
    /**
     * @method AbandonedCartRule|null getOrPut($key, $value)
     * @method AbandonedCartRule|$this shift(int $count = 1)
     * @method AbandonedCartRule|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRule|$this pop(int $count = 1)
     * @method AbandonedCartRule|null pull($key, \Closure $default = null)
     * @method AbandonedCartRule|null last(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRule|$this random(callable|int|null $number = null)
     * @method AbandonedCartRule|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRule|null get($key, \Closure $default = null)
     * @method AbandonedCartRule|null first(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRule|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AbandonedCartRule|null find($key, $default = null)
     * @method AbandonedCartRule[] all()
     */
    class _IH_AbandonedCartRule_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AbandonedCartRule[][]|Collection<_IH_AbandonedCartRule_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AbandonedCartRule_QB whereId($value)
     * @method _IH_AbandonedCartRule_QB whereAction($value)
     * @method _IH_AbandonedCartRule_QB whereDiscountId($value)
     * @method _IH_AbandonedCartRule_QB whereActionCycle($value)
     * @method _IH_AbandonedCartRule_QB whereMinimumCartAmount($value)
     * @method _IH_AbandonedCartRule_QB whereMaximumCartAmount($value)
     * @method _IH_AbandonedCartRule_QB whereStartAt($value)
     * @method _IH_AbandonedCartRule_QB whereEndAt($value)
     * @method _IH_AbandonedCartRule_QB whereEnable($value)
     * @method _IH_AbandonedCartRule_QB whereCreatedAt($value)
     * @method _IH_AbandonedCartRule_QB whereTargetType($value)
     * @method _IH_AbandonedCartRule_QB whereTarget($value)
     * @method _IH_AbandonedCartRule_QB whereRepeatAction($value)
     * @method _IH_AbandonedCartRule_QB whereRepeatActionCount($value)
     * @method AbandonedCartRule baseSole(array|string $columns = ['*'])
     * @method AbandonedCartRule create(array $attributes = [])
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] cursor()
     * @method AbandonedCartRule|null|_IH_AbandonedCartRule_C|AbandonedCartRule[] find($id, array|string $columns = ['*'])
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AbandonedCartRule|_IH_AbandonedCartRule_C|AbandonedCartRule[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRule|_IH_AbandonedCartRule_C|AbandonedCartRule[] findOrFail($id, array|string $columns = ['*'])
     * @method AbandonedCartRule|_IH_AbandonedCartRule_C|AbandonedCartRule[] findOrNew($id, array|string $columns = ['*'])
     * @method AbandonedCartRule first(array|string $columns = ['*'])
     * @method AbandonedCartRule firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRule firstOrCreate(array $attributes = [], array $values = [])
     * @method AbandonedCartRule firstOrFail(array|string $columns = ['*'])
     * @method AbandonedCartRule firstOrNew(array $attributes = [], array $values = [])
     * @method AbandonedCartRule firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AbandonedCartRule forceCreate(array $attributes)
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] get(array|string $columns = ['*'])
     * @method AbandonedCartRule getModel()
     * @method AbandonedCartRule[] getModels(array|string $columns = ['*'])
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] hydrate(array $items)
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] lazy(int $chunkSize = 1000)
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AbandonedCartRule_C|AbandonedCartRule[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AbandonedCartRule make(array $attributes = [])
     * @method AbandonedCartRule newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AbandonedCartRule[]|_IH_AbandonedCartRule_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRule restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AbandonedCartRule[]|_IH_AbandonedCartRule_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRule sole(array|string $columns = ['*'])
     * @method AbandonedCartRule updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AbandonedCartRule_QB listsTranslations(string $translationField)
     * @method _IH_AbandonedCartRule_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_AbandonedCartRule_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_AbandonedCartRule_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AbandonedCartRule_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_AbandonedCartRule_QB translated()
     * @method _IH_AbandonedCartRule_QB translatedIn(null|string $locale = null)
     * @method _IH_AbandonedCartRule_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_AbandonedCartRule_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AbandonedCartRule_QB withTranslation()
     */
    class _IH_AbandonedCartRule_QB extends _BaseBuilder {}
    
    /**
     * @method Accounting|null getOrPut($key, $value)
     * @method Accounting|$this shift(int $count = 1)
     * @method Accounting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Accounting|$this pop(int $count = 1)
     * @method Accounting|null pull($key, \Closure $default = null)
     * @method Accounting|null last(callable $callback = null, \Closure $default = null)
     * @method Accounting|$this random(callable|int|null $number = null)
     * @method Accounting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Accounting|null get($key, \Closure $default = null)
     * @method Accounting|null first(callable $callback = null, \Closure $default = null)
     * @method Accounting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Accounting|null find($key, $default = null)
     * @method Accounting[] all()
     */
    class _IH_Accounting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Accounting[][]|Collection<_IH_Accounting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Accounting_QB whereId($value)
     * @method _IH_Accounting_QB whereUserId($value)
     * @method _IH_Accounting_QB whereCreatorId($value)
     * @method _IH_Accounting_QB whereWebinarId($value)
     * @method _IH_Accounting_QB whereMeetingId($value)
     * @method _IH_Accounting_QB whereSystem($value)
     * @method _IH_Accounting_QB whereTax($value)
     * @method _IH_Accounting_QB whereAmount($value)
     * @method _IH_Accounting_QB whereType($value)
     * @method _IH_Accounting_QB whereTypeAccount($value)
     * @method _IH_Accounting_QB whereDescription($value)
     * @method _IH_Accounting_QB whereCreatedAt($value)
     * @method _IH_Accounting_QB whereSubscribeId($value)
     * @method _IH_Accounting_QB wherePromotionId($value)
     * @method _IH_Accounting_QB whereStoreType($value)
     * @method _IH_Accounting_QB whereReferredUserId($value)
     * @method _IH_Accounting_QB whereIsAffiliateAmount($value)
     * @method _IH_Accounting_QB whereIsAffiliateCommission($value)
     * @method _IH_Accounting_QB whereRegistrationPackageId($value)
     * @method _IH_Accounting_QB whereProductId($value)
     * @method _IH_Accounting_QB whereBundleId($value)
     * @method _IH_Accounting_QB whereInstallmentPaymentId($value)
     * @method _IH_Accounting_QB whereIsRegistrationBonus($value)
     * @method _IH_Accounting_QB whereOrderItemId($value)
     * @method _IH_Accounting_QB whereIsCashback($value)
     * @method _IH_Accounting_QB whereGiftId($value)
     * @method _IH_Accounting_QB whereInstallmentOrderId($value)
     * @method Accounting baseSole(array|string $columns = ['*'])
     * @method Accounting create(array $attributes = [])
     * @method _IH_Accounting_C|Accounting[] cursor()
     * @method Accounting|null|_IH_Accounting_C|Accounting[] find($id, array|string $columns = ['*'])
     * @method _IH_Accounting_C|Accounting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Accounting|_IH_Accounting_C|Accounting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Accounting|_IH_Accounting_C|Accounting[] findOrFail($id, array|string $columns = ['*'])
     * @method Accounting|_IH_Accounting_C|Accounting[] findOrNew($id, array|string $columns = ['*'])
     * @method Accounting first(array|string $columns = ['*'])
     * @method Accounting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Accounting firstOrCreate(array $attributes = [], array $values = [])
     * @method Accounting firstOrFail(array|string $columns = ['*'])
     * @method Accounting firstOrNew(array $attributes = [], array $values = [])
     * @method Accounting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Accounting forceCreate(array $attributes)
     * @method _IH_Accounting_C|Accounting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Accounting_C|Accounting[] get(array|string $columns = ['*'])
     * @method Accounting getModel()
     * @method Accounting[] getModels(array|string $columns = ['*'])
     * @method _IH_Accounting_C|Accounting[] hydrate(array $items)
     * @method _IH_Accounting_C|Accounting[] lazy(int $chunkSize = 1000)
     * @method _IH_Accounting_C|Accounting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Accounting_C|Accounting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Accounting make(array $attributes = [])
     * @method Accounting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Accounting[]|_IH_Accounting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Accounting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Accounting[]|_IH_Accounting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Accounting sole(array|string $columns = ['*'])
     * @method Accounting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Accounting_QB extends _BaseBuilder {}
    
    /**
     * @method AdvertisingBanner|null getOrPut($key, $value)
     * @method AdvertisingBanner|$this shift(int $count = 1)
     * @method AdvertisingBanner|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AdvertisingBanner|$this pop(int $count = 1)
     * @method AdvertisingBanner|null pull($key, \Closure $default = null)
     * @method AdvertisingBanner|null last(callable $callback = null, \Closure $default = null)
     * @method AdvertisingBanner|$this random(callable|int|null $number = null)
     * @method AdvertisingBanner|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AdvertisingBanner|null get($key, \Closure $default = null)
     * @method AdvertisingBanner|null first(callable $callback = null, \Closure $default = null)
     * @method AdvertisingBanner|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AdvertisingBanner|null find($key, $default = null)
     * @method AdvertisingBanner[] all()
     */
    class _IH_AdvertisingBanner_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AdvertisingBanner[][]|Collection<_IH_AdvertisingBanner_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AdvertisingBanner_QB whereId($value)
     * @method _IH_AdvertisingBanner_QB wherePosition($value)
     * @method _IH_AdvertisingBanner_QB whereSize($value)
     * @method _IH_AdvertisingBanner_QB whereLink($value)
     * @method _IH_AdvertisingBanner_QB wherePublished($value)
     * @method _IH_AdvertisingBanner_QB whereCreatedAt($value)
     * @method AdvertisingBanner baseSole(array|string $columns = ['*'])
     * @method AdvertisingBanner create(array $attributes = [])
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] cursor()
     * @method AdvertisingBanner|null|_IH_AdvertisingBanner_C|AdvertisingBanner[] find($id, array|string $columns = ['*'])
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AdvertisingBanner|_IH_AdvertisingBanner_C|AdvertisingBanner[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdvertisingBanner|_IH_AdvertisingBanner_C|AdvertisingBanner[] findOrFail($id, array|string $columns = ['*'])
     * @method AdvertisingBanner|_IH_AdvertisingBanner_C|AdvertisingBanner[] findOrNew($id, array|string $columns = ['*'])
     * @method AdvertisingBanner first(array|string $columns = ['*'])
     * @method AdvertisingBanner firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdvertisingBanner firstOrCreate(array $attributes = [], array $values = [])
     * @method AdvertisingBanner firstOrFail(array|string $columns = ['*'])
     * @method AdvertisingBanner firstOrNew(array $attributes = [], array $values = [])
     * @method AdvertisingBanner firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AdvertisingBanner forceCreate(array $attributes)
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] get(array|string $columns = ['*'])
     * @method AdvertisingBanner getModel()
     * @method AdvertisingBanner[] getModels(array|string $columns = ['*'])
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] hydrate(array $items)
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] lazy(int $chunkSize = 1000)
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AdvertisingBanner_C|AdvertisingBanner[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AdvertisingBanner make(array $attributes = [])
     * @method AdvertisingBanner newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AdvertisingBanner[]|_IH_AdvertisingBanner_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AdvertisingBanner restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AdvertisingBanner[]|_IH_AdvertisingBanner_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AdvertisingBanner sole(array|string $columns = ['*'])
     * @method AdvertisingBanner updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AdvertisingBanner_QB listsTranslations(string $translationField)
     * @method _IH_AdvertisingBanner_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_AdvertisingBanner_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_AdvertisingBanner_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AdvertisingBanner_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_AdvertisingBanner_QB translated()
     * @method _IH_AdvertisingBanner_QB translatedIn(null|string $locale = null)
     * @method _IH_AdvertisingBanner_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_AdvertisingBanner_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AdvertisingBanner_QB withTranslation()
     */
    class _IH_AdvertisingBanner_QB extends _BaseBuilder {}
    
    /**
     * @method AffiliateCode|null getOrPut($key, $value)
     * @method AffiliateCode|$this shift(int $count = 1)
     * @method AffiliateCode|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AffiliateCode|$this pop(int $count = 1)
     * @method AffiliateCode|null pull($key, \Closure $default = null)
     * @method AffiliateCode|null last(callable $callback = null, \Closure $default = null)
     * @method AffiliateCode|$this random(callable|int|null $number = null)
     * @method AffiliateCode|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AffiliateCode|null get($key, \Closure $default = null)
     * @method AffiliateCode|null first(callable $callback = null, \Closure $default = null)
     * @method AffiliateCode|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AffiliateCode|null find($key, $default = null)
     * @method AffiliateCode[] all()
     */
    class _IH_AffiliateCode_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AffiliateCode[][]|Collection<_IH_AffiliateCode_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AffiliateCode_QB whereId($value)
     * @method _IH_AffiliateCode_QB whereUserId($value)
     * @method _IH_AffiliateCode_QB whereCode($value)
     * @method _IH_AffiliateCode_QB whereCreatedAt($value)
     * @method AffiliateCode baseSole(array|string $columns = ['*'])
     * @method AffiliateCode create(array $attributes = [])
     * @method _IH_AffiliateCode_C|AffiliateCode[] cursor()
     * @method AffiliateCode|null|_IH_AffiliateCode_C|AffiliateCode[] find($id, array|string $columns = ['*'])
     * @method _IH_AffiliateCode_C|AffiliateCode[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AffiliateCode|_IH_AffiliateCode_C|AffiliateCode[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AffiliateCode|_IH_AffiliateCode_C|AffiliateCode[] findOrFail($id, array|string $columns = ['*'])
     * @method AffiliateCode|_IH_AffiliateCode_C|AffiliateCode[] findOrNew($id, array|string $columns = ['*'])
     * @method AffiliateCode first(array|string $columns = ['*'])
     * @method AffiliateCode firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AffiliateCode firstOrCreate(array $attributes = [], array $values = [])
     * @method AffiliateCode firstOrFail(array|string $columns = ['*'])
     * @method AffiliateCode firstOrNew(array $attributes = [], array $values = [])
     * @method AffiliateCode firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AffiliateCode forceCreate(array $attributes)
     * @method _IH_AffiliateCode_C|AffiliateCode[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AffiliateCode_C|AffiliateCode[] get(array|string $columns = ['*'])
     * @method AffiliateCode getModel()
     * @method AffiliateCode[] getModels(array|string $columns = ['*'])
     * @method _IH_AffiliateCode_C|AffiliateCode[] hydrate(array $items)
     * @method _IH_AffiliateCode_C|AffiliateCode[] lazy(int $chunkSize = 1000)
     * @method _IH_AffiliateCode_C|AffiliateCode[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AffiliateCode_C|AffiliateCode[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AffiliateCode make(array $attributes = [])
     * @method AffiliateCode newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AffiliateCode[]|_IH_AffiliateCode_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateCode restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AffiliateCode[]|_IH_AffiliateCode_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AffiliateCode sole(array|string $columns = ['*'])
     * @method AffiliateCode updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AffiliateCode_QB extends _BaseBuilder {}
    
    /**
     * @method Affiliate|null getOrPut($key, $value)
     * @method Affiliate|$this shift(int $count = 1)
     * @method Affiliate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Affiliate|$this pop(int $count = 1)
     * @method Affiliate|null pull($key, \Closure $default = null)
     * @method Affiliate|null last(callable $callback = null, \Closure $default = null)
     * @method Affiliate|$this random(callable|int|null $number = null)
     * @method Affiliate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Affiliate|null get($key, \Closure $default = null)
     * @method Affiliate|null first(callable $callback = null, \Closure $default = null)
     * @method Affiliate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Affiliate|null find($key, $default = null)
     * @method Affiliate[] all()
     */
    class _IH_Affiliate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Affiliate[][]|Collection<_IH_Affiliate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Affiliate_QB whereId($value)
     * @method _IH_Affiliate_QB whereAffiliateUserId($value)
     * @method _IH_Affiliate_QB whereReferredUserId($value)
     * @method _IH_Affiliate_QB whereCreatedAt($value)
     * @method Affiliate baseSole(array|string $columns = ['*'])
     * @method Affiliate create(array $attributes = [])
     * @method _IH_Affiliate_C|Affiliate[] cursor()
     * @method Affiliate|null|_IH_Affiliate_C|Affiliate[] find($id, array|string $columns = ['*'])
     * @method _IH_Affiliate_C|Affiliate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Affiliate|_IH_Affiliate_C|Affiliate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Affiliate|_IH_Affiliate_C|Affiliate[] findOrFail($id, array|string $columns = ['*'])
     * @method Affiliate|_IH_Affiliate_C|Affiliate[] findOrNew($id, array|string $columns = ['*'])
     * @method Affiliate first(array|string $columns = ['*'])
     * @method Affiliate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Affiliate firstOrCreate(array $attributes = [], array $values = [])
     * @method Affiliate firstOrFail(array|string $columns = ['*'])
     * @method Affiliate firstOrNew(array $attributes = [], array $values = [])
     * @method Affiliate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Affiliate forceCreate(array $attributes)
     * @method _IH_Affiliate_C|Affiliate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Affiliate_C|Affiliate[] get(array|string $columns = ['*'])
     * @method Affiliate getModel()
     * @method Affiliate[] getModels(array|string $columns = ['*'])
     * @method _IH_Affiliate_C|Affiliate[] hydrate(array $items)
     * @method _IH_Affiliate_C|Affiliate[] lazy(int $chunkSize = 1000)
     * @method _IH_Affiliate_C|Affiliate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Affiliate_C|Affiliate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Affiliate make(array $attributes = [])
     * @method Affiliate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Affiliate[]|_IH_Affiliate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Affiliate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Affiliate[]|_IH_Affiliate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Affiliate sole(array|string $columns = ['*'])
     * @method Affiliate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Affiliate_QB extends _BaseBuilder {}
    
    /**
     * @method AgoraHistory|null getOrPut($key, $value)
     * @method AgoraHistory|$this shift(int $count = 1)
     * @method AgoraHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AgoraHistory|$this pop(int $count = 1)
     * @method AgoraHistory|null pull($key, \Closure $default = null)
     * @method AgoraHistory|null last(callable $callback = null, \Closure $default = null)
     * @method AgoraHistory|$this random(callable|int|null $number = null)
     * @method AgoraHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AgoraHistory|null get($key, \Closure $default = null)
     * @method AgoraHistory|null first(callable $callback = null, \Closure $default = null)
     * @method AgoraHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AgoraHistory|null find($key, $default = null)
     * @method AgoraHistory[] all()
     */
    class _IH_AgoraHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AgoraHistory[][]|Collection<_IH_AgoraHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AgoraHistory_QB whereId($value)
     * @method _IH_AgoraHistory_QB whereSessionId($value)
     * @method _IH_AgoraHistory_QB whereStartAt($value)
     * @method _IH_AgoraHistory_QB whereEndAt($value)
     * @method AgoraHistory baseSole(array|string $columns = ['*'])
     * @method AgoraHistory create(array $attributes = [])
     * @method _IH_AgoraHistory_C|AgoraHistory[] cursor()
     * @method AgoraHistory|null|_IH_AgoraHistory_C|AgoraHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_AgoraHistory_C|AgoraHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AgoraHistory|_IH_AgoraHistory_C|AgoraHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AgoraHistory|_IH_AgoraHistory_C|AgoraHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method AgoraHistory|_IH_AgoraHistory_C|AgoraHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method AgoraHistory first(array|string $columns = ['*'])
     * @method AgoraHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AgoraHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method AgoraHistory firstOrFail(array|string $columns = ['*'])
     * @method AgoraHistory firstOrNew(array $attributes = [], array $values = [])
     * @method AgoraHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AgoraHistory forceCreate(array $attributes)
     * @method _IH_AgoraHistory_C|AgoraHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AgoraHistory_C|AgoraHistory[] get(array|string $columns = ['*'])
     * @method AgoraHistory getModel()
     * @method AgoraHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_AgoraHistory_C|AgoraHistory[] hydrate(array $items)
     * @method _IH_AgoraHistory_C|AgoraHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_AgoraHistory_C|AgoraHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AgoraHistory_C|AgoraHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AgoraHistory make(array $attributes = [])
     * @method AgoraHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AgoraHistory[]|_IH_AgoraHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AgoraHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AgoraHistory[]|_IH_AgoraHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AgoraHistory sole(array|string $columns = ['*'])
     * @method AgoraHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AgoraHistory_QB extends _BaseBuilder {}
    
    /**
     * @method AiContentTemplate|null getOrPut($key, $value)
     * @method AiContentTemplate|$this shift(int $count = 1)
     * @method AiContentTemplate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AiContentTemplate|$this pop(int $count = 1)
     * @method AiContentTemplate|null pull($key, \Closure $default = null)
     * @method AiContentTemplate|null last(callable $callback = null, \Closure $default = null)
     * @method AiContentTemplate|$this random(callable|int|null $number = null)
     * @method AiContentTemplate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AiContentTemplate|null get($key, \Closure $default = null)
     * @method AiContentTemplate|null first(callable $callback = null, \Closure $default = null)
     * @method AiContentTemplate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AiContentTemplate|null find($key, $default = null)
     * @method AiContentTemplate[] all()
     */
    class _IH_AiContentTemplate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AiContentTemplate[][]|Collection<_IH_AiContentTemplate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AiContentTemplate_QB whereId($value)
     * @method _IH_AiContentTemplate_QB whereType($value)
     * @method _IH_AiContentTemplate_QB whereEnableLength($value)
     * @method _IH_AiContentTemplate_QB whereLength($value)
     * @method _IH_AiContentTemplate_QB whereImageSize($value)
     * @method _IH_AiContentTemplate_QB whereEnable($value)
     * @method _IH_AiContentTemplate_QB whereCreatedAt($value)
     * @method AiContentTemplate baseSole(array|string $columns = ['*'])
     * @method AiContentTemplate create(array $attributes = [])
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] cursor()
     * @method AiContentTemplate|null|_IH_AiContentTemplate_C|AiContentTemplate[] find($id, array|string $columns = ['*'])
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AiContentTemplate|_IH_AiContentTemplate_C|AiContentTemplate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContentTemplate|_IH_AiContentTemplate_C|AiContentTemplate[] findOrFail($id, array|string $columns = ['*'])
     * @method AiContentTemplate|_IH_AiContentTemplate_C|AiContentTemplate[] findOrNew($id, array|string $columns = ['*'])
     * @method AiContentTemplate first(array|string $columns = ['*'])
     * @method AiContentTemplate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContentTemplate firstOrCreate(array $attributes = [], array $values = [])
     * @method AiContentTemplate firstOrFail(array|string $columns = ['*'])
     * @method AiContentTemplate firstOrNew(array $attributes = [], array $values = [])
     * @method AiContentTemplate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AiContentTemplate forceCreate(array $attributes)
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] get(array|string $columns = ['*'])
     * @method AiContentTemplate getModel()
     * @method AiContentTemplate[] getModels(array|string $columns = ['*'])
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] hydrate(array $items)
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] lazy(int $chunkSize = 1000)
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AiContentTemplate_C|AiContentTemplate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AiContentTemplate make(array $attributes = [])
     * @method AiContentTemplate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AiContentTemplate[]|_IH_AiContentTemplate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContentTemplate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AiContentTemplate[]|_IH_AiContentTemplate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContentTemplate sole(array|string $columns = ['*'])
     * @method AiContentTemplate updateOrCreate(array $attributes, array $values = [])
     * @method _IH_AiContentTemplate_QB listsTranslations(string $translationField)
     * @method _IH_AiContentTemplate_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_AiContentTemplate_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_AiContentTemplate_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AiContentTemplate_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_AiContentTemplate_QB translated()
     * @method _IH_AiContentTemplate_QB translatedIn(null|string $locale = null)
     * @method _IH_AiContentTemplate_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_AiContentTemplate_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_AiContentTemplate_QB withTranslation()
     */
    class _IH_AiContentTemplate_QB extends _BaseBuilder {}
    
    /**
     * @method AiContent|null getOrPut($key, $value)
     * @method AiContent|$this shift(int $count = 1)
     * @method AiContent|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AiContent|$this pop(int $count = 1)
     * @method AiContent|null pull($key, \Closure $default = null)
     * @method AiContent|null last(callable $callback = null, \Closure $default = null)
     * @method AiContent|$this random(callable|int|null $number = null)
     * @method AiContent|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AiContent|null get($key, \Closure $default = null)
     * @method AiContent|null first(callable $callback = null, \Closure $default = null)
     * @method AiContent|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AiContent|null find($key, $default = null)
     * @method AiContent[] all()
     */
    class _IH_AiContent_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AiContent[][]|Collection<_IH_AiContent_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AiContent_QB whereId($value)
     * @method _IH_AiContent_QB whereUserId($value)
     * @method _IH_AiContent_QB whereServiceType($value)
     * @method _IH_AiContent_QB whereServiceId($value)
     * @method _IH_AiContent_QB whereKeyword($value)
     * @method _IH_AiContent_QB whereLanguage($value)
     * @method _IH_AiContent_QB wherePrompt($value)
     * @method _IH_AiContent_QB whereResult($value)
     * @method _IH_AiContent_QB whereCreatedAt($value)
     * @method AiContent baseSole(array|string $columns = ['*'])
     * @method AiContent create(array $attributes = [])
     * @method _IH_AiContent_C|AiContent[] cursor()
     * @method AiContent|null|_IH_AiContent_C|AiContent[] find($id, array|string $columns = ['*'])
     * @method _IH_AiContent_C|AiContent[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AiContent|_IH_AiContent_C|AiContent[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContent|_IH_AiContent_C|AiContent[] findOrFail($id, array|string $columns = ['*'])
     * @method AiContent|_IH_AiContent_C|AiContent[] findOrNew($id, array|string $columns = ['*'])
     * @method AiContent first(array|string $columns = ['*'])
     * @method AiContent firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContent firstOrCreate(array $attributes = [], array $values = [])
     * @method AiContent firstOrFail(array|string $columns = ['*'])
     * @method AiContent firstOrNew(array $attributes = [], array $values = [])
     * @method AiContent firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AiContent forceCreate(array $attributes)
     * @method _IH_AiContent_C|AiContent[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AiContent_C|AiContent[] get(array|string $columns = ['*'])
     * @method AiContent getModel()
     * @method AiContent[] getModels(array|string $columns = ['*'])
     * @method _IH_AiContent_C|AiContent[] hydrate(array $items)
     * @method _IH_AiContent_C|AiContent[] lazy(int $chunkSize = 1000)
     * @method _IH_AiContent_C|AiContent[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AiContent_C|AiContent[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AiContent make(array $attributes = [])
     * @method AiContent newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AiContent[]|_IH_AiContent_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContent restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AiContent[]|_IH_AiContent_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContent sole(array|string $columns = ['*'])
     * @method AiContent updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AiContent_QB extends _BaseBuilder {}
    
    /**
     * @method Badge|null getOrPut($key, $value)
     * @method Badge|$this shift(int $count = 1)
     * @method Badge|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Badge|$this pop(int $count = 1)
     * @method Badge|null pull($key, \Closure $default = null)
     * @method Badge|null last(callable $callback = null, \Closure $default = null)
     * @method Badge|$this random(callable|int|null $number = null)
     * @method Badge|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Badge|null get($key, \Closure $default = null)
     * @method Badge|null first(callable $callback = null, \Closure $default = null)
     * @method Badge|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Badge|null find($key, $default = null)
     * @method Badge[] all()
     */
    class _IH_Badge_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Badge[][]|Collection<_IH_Badge_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Badge_QB whereId($value)
     * @method _IH_Badge_QB whereImage($value)
     * @method _IH_Badge_QB whereType($value)
     * @method _IH_Badge_QB whereCondition($value)
     * @method _IH_Badge_QB whereCreatedAt($value)
     * @method _IH_Badge_QB whereScore($value)
     * @method Badge baseSole(array|string $columns = ['*'])
     * @method Badge create(array $attributes = [])
     * @method _IH_Badge_C|Badge[] cursor()
     * @method Badge|null|_IH_Badge_C|Badge[] find($id, array|string $columns = ['*'])
     * @method _IH_Badge_C|Badge[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Badge|_IH_Badge_C|Badge[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Badge|_IH_Badge_C|Badge[] findOrFail($id, array|string $columns = ['*'])
     * @method Badge|_IH_Badge_C|Badge[] findOrNew($id, array|string $columns = ['*'])
     * @method Badge first(array|string $columns = ['*'])
     * @method Badge firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Badge firstOrCreate(array $attributes = [], array $values = [])
     * @method Badge firstOrFail(array|string $columns = ['*'])
     * @method Badge firstOrNew(array $attributes = [], array $values = [])
     * @method Badge firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Badge forceCreate(array $attributes)
     * @method _IH_Badge_C|Badge[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Badge_C|Badge[] get(array|string $columns = ['*'])
     * @method Badge getModel()
     * @method Badge[] getModels(array|string $columns = ['*'])
     * @method _IH_Badge_C|Badge[] hydrate(array $items)
     * @method _IH_Badge_C|Badge[] lazy(int $chunkSize = 1000)
     * @method _IH_Badge_C|Badge[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Badge_C|Badge[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Badge make(array $attributes = [])
     * @method Badge newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Badge[]|_IH_Badge_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Badge restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Badge[]|_IH_Badge_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Badge sole(array|string $columns = ['*'])
     * @method Badge updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Badge_QB listsTranslations(string $translationField)
     * @method _IH_Badge_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Badge_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Badge_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Badge_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Badge_QB translated()
     * @method _IH_Badge_QB translatedIn(null|string $locale = null)
     * @method _IH_Badge_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Badge_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Badge_QB withTranslation()
     */
    class _IH_Badge_QB extends _BaseBuilder {}
    
    /**
     * @method BecomeInstructor|null getOrPut($key, $value)
     * @method BecomeInstructor|$this shift(int $count = 1)
     * @method BecomeInstructor|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BecomeInstructor|$this pop(int $count = 1)
     * @method BecomeInstructor|null pull($key, \Closure $default = null)
     * @method BecomeInstructor|null last(callable $callback = null, \Closure $default = null)
     * @method BecomeInstructor|$this random(callable|int|null $number = null)
     * @method BecomeInstructor|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BecomeInstructor|null get($key, \Closure $default = null)
     * @method BecomeInstructor|null first(callable $callback = null, \Closure $default = null)
     * @method BecomeInstructor|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BecomeInstructor|null find($key, $default = null)
     * @method BecomeInstructor[] all()
     */
    class _IH_BecomeInstructor_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BecomeInstructor[][]|Collection<_IH_BecomeInstructor_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BecomeInstructor_QB whereId($value)
     * @method _IH_BecomeInstructor_QB whereUserId($value)
     * @method _IH_BecomeInstructor_QB whereCertificate($value)
     * @method _IH_BecomeInstructor_QB whereDescription($value)
     * @method _IH_BecomeInstructor_QB whereStatus($value)
     * @method _IH_BecomeInstructor_QB whereCreatedAt($value)
     * @method _IH_BecomeInstructor_QB whereRole($value)
     * @method _IH_BecomeInstructor_QB wherePackageId($value)
     * @method BecomeInstructor baseSole(array|string $columns = ['*'])
     * @method BecomeInstructor create(array $attributes = [])
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] cursor()
     * @method BecomeInstructor|null|_IH_BecomeInstructor_C|BecomeInstructor[] find($id, array|string $columns = ['*'])
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BecomeInstructor|_IH_BecomeInstructor_C|BecomeInstructor[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BecomeInstructor|_IH_BecomeInstructor_C|BecomeInstructor[] findOrFail($id, array|string $columns = ['*'])
     * @method BecomeInstructor|_IH_BecomeInstructor_C|BecomeInstructor[] findOrNew($id, array|string $columns = ['*'])
     * @method BecomeInstructor first(array|string $columns = ['*'])
     * @method BecomeInstructor firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BecomeInstructor firstOrCreate(array $attributes = [], array $values = [])
     * @method BecomeInstructor firstOrFail(array|string $columns = ['*'])
     * @method BecomeInstructor firstOrNew(array $attributes = [], array $values = [])
     * @method BecomeInstructor firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BecomeInstructor forceCreate(array $attributes)
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] get(array|string $columns = ['*'])
     * @method BecomeInstructor getModel()
     * @method BecomeInstructor[] getModels(array|string $columns = ['*'])
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] hydrate(array $items)
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] lazy(int $chunkSize = 1000)
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BecomeInstructor_C|BecomeInstructor[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BecomeInstructor make(array $attributes = [])
     * @method BecomeInstructor newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BecomeInstructor[]|_IH_BecomeInstructor_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BecomeInstructor restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BecomeInstructor[]|_IH_BecomeInstructor_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BecomeInstructor sole(array|string $columns = ['*'])
     * @method BecomeInstructor updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BecomeInstructor_QB extends _BaseBuilder {}
    
    /**
     * @method BlogCategory|null getOrPut($key, $value)
     * @method BlogCategory|$this shift(int $count = 1)
     * @method BlogCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategory|$this pop(int $count = 1)
     * @method BlogCategory|null pull($key, \Closure $default = null)
     * @method BlogCategory|null last(callable $callback = null, \Closure $default = null)
     * @method BlogCategory|$this random(callable|int|null $number = null)
     * @method BlogCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategory|null get($key, \Closure $default = null)
     * @method BlogCategory|null first(callable $callback = null, \Closure $default = null)
     * @method BlogCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogCategory|null find($key, $default = null)
     * @method BlogCategory[] all()
     */
    class _IH_BlogCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogCategory[][]|Collection<_IH_BlogCategory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BlogCategory_QB whereId($value)
     * @method _IH_BlogCategory_QB whereSlug($value)
     * @method BlogCategory baseSole(array|string $columns = ['*'])
     * @method BlogCategory create(array $attributes = [])
     * @method _IH_BlogCategory_C|BlogCategory[] cursor()
     * @method BlogCategory|null|_IH_BlogCategory_C|BlogCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogCategory|_IH_BlogCategory_C|BlogCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogCategory first(array|string $columns = ['*'])
     * @method BlogCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogCategory firstOrFail(array|string $columns = ['*'])
     * @method BlogCategory firstOrNew(array $attributes = [], array $values = [])
     * @method BlogCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogCategory forceCreate(array $attributes)
     * @method _IH_BlogCategory_C|BlogCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogCategory_C|BlogCategory[] get(array|string $columns = ['*'])
     * @method BlogCategory getModel()
     * @method BlogCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogCategory_C|BlogCategory[] hydrate(array $items)
     * @method _IH_BlogCategory_C|BlogCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_BlogCategory_C|BlogCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BlogCategory_C|BlogCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BlogCategory make(array $attributes = [])
     * @method BlogCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogCategory[]|_IH_BlogCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BlogCategory[]|_IH_BlogCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategory sole(array|string $columns = ['*'])
     * @method BlogCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_BlogCategory_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_BlogCategory_QB listsTranslations(string $translationField)
     * @method _IH_BlogCategory_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_BlogCategory_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_BlogCategory_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_BlogCategory_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_BlogCategory_QB translated()
     * @method _IH_BlogCategory_QB translatedIn(null|string $locale = null)
     * @method _IH_BlogCategory_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_BlogCategory_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_BlogCategory_QB withTranslation()
     * @method _IH_BlogCategory_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_BlogCategory_QB extends _BaseBuilder {}
    
    /**
     * @method Blog|null getOrPut($key, $value)
     * @method Blog|$this shift(int $count = 1)
     * @method Blog|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|$this pop(int $count = 1)
     * @method Blog|null pull($key, \Closure $default = null)
     * @method Blog|null last(callable $callback = null, \Closure $default = null)
     * @method Blog|$this random(callable|int|null $number = null)
     * @method Blog|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Blog|null get($key, \Closure $default = null)
     * @method Blog|null first(callable $callback = null, \Closure $default = null)
     * @method Blog|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Blog|null find($key, $default = null)
     * @method Blog[] all()
     */
    class _IH_Blog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Blog[][]|Collection<_IH_Blog_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Blog_QB whereId($value)
     * @method _IH_Blog_QB whereCategoryId($value)
     * @method _IH_Blog_QB whereAuthorId($value)
     * @method _IH_Blog_QB whereSlug($value)
     * @method _IH_Blog_QB whereImage($value)
     * @method _IH_Blog_QB whereVisitCount($value)
     * @method _IH_Blog_QB whereEnableComment($value)
     * @method _IH_Blog_QB whereStatus($value)
     * @method _IH_Blog_QB whereCreatedAt($value)
     * @method _IH_Blog_QB whereUpdatedAt($value)
     * @method Blog baseSole(array|string $columns = ['*'])
     * @method Blog create(array $attributes = [])
     * @method _IH_Blog_C|Blog[] cursor()
     * @method Blog|null|_IH_Blog_C|Blog[] find($id, array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog|_IH_Blog_C|Blog[] findOrFail($id, array|string $columns = ['*'])
     * @method Blog|_IH_Blog_C|Blog[] findOrNew($id, array|string $columns = ['*'])
     * @method Blog first(array|string $columns = ['*'])
     * @method Blog firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Blog firstOrCreate(array $attributes = [], array $values = [])
     * @method Blog firstOrFail(array|string $columns = ['*'])
     * @method Blog firstOrNew(array $attributes = [], array $values = [])
     * @method Blog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Blog forceCreate(array $attributes)
     * @method _IH_Blog_C|Blog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Blog_C|Blog[] get(array|string $columns = ['*'])
     * @method Blog getModel()
     * @method Blog[] getModels(array|string $columns = ['*'])
     * @method _IH_Blog_C|Blog[] hydrate(array $items)
     * @method _IH_Blog_C|Blog[] lazy(int $chunkSize = 1000)
     * @method _IH_Blog_C|Blog[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Blog_C|Blog[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Blog make(array $attributes = [])
     * @method Blog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Blog[]|_IH_Blog_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Blog[]|_IH_Blog_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Blog sole(array|string $columns = ['*'])
     * @method Blog updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Blog_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Blog_QB listsTranslations(string $translationField)
     * @method _IH_Blog_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Blog_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Blog_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Blog_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Blog_QB translated()
     * @method _IH_Blog_QB translatedIn(null|string $locale = null)
     * @method _IH_Blog_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Blog_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Blog_QB withTranslation()
     * @method _IH_Blog_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Blog_QB extends _BaseBuilder {}
    
    /**
     * @method BundleFilterOption|null getOrPut($key, $value)
     * @method BundleFilterOption|$this shift(int $count = 1)
     * @method BundleFilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BundleFilterOption|$this pop(int $count = 1)
     * @method BundleFilterOption|null pull($key, \Closure $default = null)
     * @method BundleFilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method BundleFilterOption|$this random(callable|int|null $number = null)
     * @method BundleFilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BundleFilterOption|null get($key, \Closure $default = null)
     * @method BundleFilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method BundleFilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BundleFilterOption|null find($key, $default = null)
     * @method BundleFilterOption[] all()
     */
    class _IH_BundleFilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BundleFilterOption[][]|Collection<_IH_BundleFilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BundleFilterOption_QB whereId($value)
     * @method _IH_BundleFilterOption_QB whereBundleId($value)
     * @method _IH_BundleFilterOption_QB whereFilterOptionId($value)
     * @method BundleFilterOption baseSole(array|string $columns = ['*'])
     * @method BundleFilterOption create(array $attributes = [])
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] cursor()
     * @method BundleFilterOption|null|_IH_BundleFilterOption_C|BundleFilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BundleFilterOption|_IH_BundleFilterOption_C|BundleFilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleFilterOption|_IH_BundleFilterOption_C|BundleFilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method BundleFilterOption|_IH_BundleFilterOption_C|BundleFilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method BundleFilterOption first(array|string $columns = ['*'])
     * @method BundleFilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleFilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method BundleFilterOption firstOrFail(array|string $columns = ['*'])
     * @method BundleFilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method BundleFilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BundleFilterOption forceCreate(array $attributes)
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] get(array|string $columns = ['*'])
     * @method BundleFilterOption getModel()
     * @method BundleFilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] hydrate(array $items)
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BundleFilterOption_C|BundleFilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BundleFilterOption make(array $attributes = [])
     * @method BundleFilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BundleFilterOption[]|_IH_BundleFilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleFilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BundleFilterOption[]|_IH_BundleFilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleFilterOption sole(array|string $columns = ['*'])
     * @method BundleFilterOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BundleFilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method BundleWebinar|null getOrPut($key, $value)
     * @method BundleWebinar|$this shift(int $count = 1)
     * @method BundleWebinar|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BundleWebinar|$this pop(int $count = 1)
     * @method BundleWebinar|null pull($key, \Closure $default = null)
     * @method BundleWebinar|null last(callable $callback = null, \Closure $default = null)
     * @method BundleWebinar|$this random(callable|int|null $number = null)
     * @method BundleWebinar|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BundleWebinar|null get($key, \Closure $default = null)
     * @method BundleWebinar|null first(callable $callback = null, \Closure $default = null)
     * @method BundleWebinar|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BundleWebinar|null find($key, $default = null)
     * @method BundleWebinar[] all()
     */
    class _IH_BundleWebinar_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BundleWebinar[][]|Collection<_IH_BundleWebinar_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BundleWebinar_QB whereId($value)
     * @method _IH_BundleWebinar_QB whereCreatorId($value)
     * @method _IH_BundleWebinar_QB whereBundleId($value)
     * @method _IH_BundleWebinar_QB whereWebinarId($value)
     * @method _IH_BundleWebinar_QB whereOrder($value)
     * @method BundleWebinar baseSole(array|string $columns = ['*'])
     * @method BundleWebinar create(array $attributes = [])
     * @method _IH_BundleWebinar_C|BundleWebinar[] cursor()
     * @method BundleWebinar|null|_IH_BundleWebinar_C|BundleWebinar[] find($id, array|string $columns = ['*'])
     * @method _IH_BundleWebinar_C|BundleWebinar[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BundleWebinar|_IH_BundleWebinar_C|BundleWebinar[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleWebinar|_IH_BundleWebinar_C|BundleWebinar[] findOrFail($id, array|string $columns = ['*'])
     * @method BundleWebinar|_IH_BundleWebinar_C|BundleWebinar[] findOrNew($id, array|string $columns = ['*'])
     * @method BundleWebinar first(array|string $columns = ['*'])
     * @method BundleWebinar firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleWebinar firstOrCreate(array $attributes = [], array $values = [])
     * @method BundleWebinar firstOrFail(array|string $columns = ['*'])
     * @method BundleWebinar firstOrNew(array $attributes = [], array $values = [])
     * @method BundleWebinar firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BundleWebinar forceCreate(array $attributes)
     * @method _IH_BundleWebinar_C|BundleWebinar[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BundleWebinar_C|BundleWebinar[] get(array|string $columns = ['*'])
     * @method BundleWebinar getModel()
     * @method BundleWebinar[] getModels(array|string $columns = ['*'])
     * @method _IH_BundleWebinar_C|BundleWebinar[] hydrate(array $items)
     * @method _IH_BundleWebinar_C|BundleWebinar[] lazy(int $chunkSize = 1000)
     * @method _IH_BundleWebinar_C|BundleWebinar[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BundleWebinar_C|BundleWebinar[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BundleWebinar make(array $attributes = [])
     * @method BundleWebinar newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BundleWebinar[]|_IH_BundleWebinar_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleWebinar restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BundleWebinar[]|_IH_BundleWebinar_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleWebinar sole(array|string $columns = ['*'])
     * @method BundleWebinar updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BundleWebinar_QB extends _BaseBuilder {}
    
    /**
     * @method CartDiscount|null getOrPut($key, $value)
     * @method CartDiscount|$this shift(int $count = 1)
     * @method CartDiscount|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CartDiscount|$this pop(int $count = 1)
     * @method CartDiscount|null pull($key, \Closure $default = null)
     * @method CartDiscount|null last(callable $callback = null, \Closure $default = null)
     * @method CartDiscount|$this random(callable|int|null $number = null)
     * @method CartDiscount|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CartDiscount|null get($key, \Closure $default = null)
     * @method CartDiscount|null first(callable $callback = null, \Closure $default = null)
     * @method CartDiscount|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CartDiscount|null find($key, $default = null)
     * @method CartDiscount[] all()
     */
    class _IH_CartDiscount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CartDiscount[][]|Collection<_IH_CartDiscount_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CartDiscount_QB whereId($value)
     * @method _IH_CartDiscount_QB whereDiscountId($value)
     * @method _IH_CartDiscount_QB whereShowOnlyOnEmptyCart($value)
     * @method _IH_CartDiscount_QB whereEnable($value)
     * @method _IH_CartDiscount_QB whereCreatedAt($value)
     * @method CartDiscount baseSole(array|string $columns = ['*'])
     * @method CartDiscount create(array $attributes = [])
     * @method _IH_CartDiscount_C|CartDiscount[] cursor()
     * @method CartDiscount|null|_IH_CartDiscount_C|CartDiscount[] find($id, array|string $columns = ['*'])
     * @method _IH_CartDiscount_C|CartDiscount[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CartDiscount|_IH_CartDiscount_C|CartDiscount[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CartDiscount|_IH_CartDiscount_C|CartDiscount[] findOrFail($id, array|string $columns = ['*'])
     * @method CartDiscount|_IH_CartDiscount_C|CartDiscount[] findOrNew($id, array|string $columns = ['*'])
     * @method CartDiscount first(array|string $columns = ['*'])
     * @method CartDiscount firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CartDiscount firstOrCreate(array $attributes = [], array $values = [])
     * @method CartDiscount firstOrFail(array|string $columns = ['*'])
     * @method CartDiscount firstOrNew(array $attributes = [], array $values = [])
     * @method CartDiscount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CartDiscount forceCreate(array $attributes)
     * @method _IH_CartDiscount_C|CartDiscount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CartDiscount_C|CartDiscount[] get(array|string $columns = ['*'])
     * @method CartDiscount getModel()
     * @method CartDiscount[] getModels(array|string $columns = ['*'])
     * @method _IH_CartDiscount_C|CartDiscount[] hydrate(array $items)
     * @method _IH_CartDiscount_C|CartDiscount[] lazy(int $chunkSize = 1000)
     * @method _IH_CartDiscount_C|CartDiscount[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CartDiscount_C|CartDiscount[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CartDiscount make(array $attributes = [])
     * @method CartDiscount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CartDiscount[]|_IH_CartDiscount_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CartDiscount restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CartDiscount[]|_IH_CartDiscount_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CartDiscount sole(array|string $columns = ['*'])
     * @method CartDiscount updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CartDiscount_QB listsTranslations(string $translationField)
     * @method _IH_CartDiscount_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_CartDiscount_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_CartDiscount_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CartDiscount_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_CartDiscount_QB translated()
     * @method _IH_CartDiscount_QB translatedIn(null|string $locale = null)
     * @method _IH_CartDiscount_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_CartDiscount_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CartDiscount_QB withTranslation()
     */
    class _IH_CartDiscount_QB extends _BaseBuilder {}
    
    /**
     * @method Cart|null getOrPut($key, $value)
     * @method Cart|$this shift(int $count = 1)
     * @method Cart|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Cart|$this pop(int $count = 1)
     * @method Cart|null pull($key, \Closure $default = null)
     * @method Cart|null last(callable $callback = null, \Closure $default = null)
     * @method Cart|$this random(callable|int|null $number = null)
     * @method Cart|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Cart|null get($key, \Closure $default = null)
     * @method Cart|null first(callable $callback = null, \Closure $default = null)
     * @method Cart|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Cart|null find($key, $default = null)
     * @method Cart[] all()
     */
    class _IH_Cart_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Cart[][]|Collection<_IH_Cart_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Cart_QB whereId($value)
     * @method _IH_Cart_QB whereCreatorId($value)
     * @method _IH_Cart_QB whereWebinarId($value)
     * @method _IH_Cart_QB whereTicketId($value)
     * @method _IH_Cart_QB whereCreatedAt($value)
     * @method _IH_Cart_QB whereReserveMeetingId($value)
     * @method _IH_Cart_QB whereSubscribeId($value)
     * @method _IH_Cart_QB wherePromotionId($value)
     * @method _IH_Cart_QB whereSpecialOfferId($value)
     * @method _IH_Cart_QB whereProductOrderId($value)
     * @method _IH_Cart_QB whereProductDiscountId($value)
     * @method _IH_Cart_QB whereBundleId($value)
     * @method _IH_Cart_QB whereInstallmentPaymentId($value)
     * @method _IH_Cart_QB whereGiftId($value)
     * @method Cart baseSole(array|string $columns = ['*'])
     * @method Cart create(array $attributes = [])
     * @method _IH_Cart_C|Cart[] cursor()
     * @method Cart|null|_IH_Cart_C|Cart[] find($id, array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Cart|_IH_Cart_C|Cart[] findOrFail($id, array|string $columns = ['*'])
     * @method Cart|_IH_Cart_C|Cart[] findOrNew($id, array|string $columns = ['*'])
     * @method Cart first(array|string $columns = ['*'])
     * @method Cart firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Cart firstOrCreate(array $attributes = [], array $values = [])
     * @method Cart firstOrFail(array|string $columns = ['*'])
     * @method Cart firstOrNew(array $attributes = [], array $values = [])
     * @method Cart firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Cart forceCreate(array $attributes)
     * @method _IH_Cart_C|Cart[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Cart_C|Cart[] get(array|string $columns = ['*'])
     * @method Cart getModel()
     * @method Cart[] getModels(array|string $columns = ['*'])
     * @method _IH_Cart_C|Cart[] hydrate(array $items)
     * @method _IH_Cart_C|Cart[] lazy(int $chunkSize = 1000)
     * @method _IH_Cart_C|Cart[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Cart_C|Cart[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Cart make(array $attributes = [])
     * @method Cart newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Cart[]|_IH_Cart_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Cart restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Cart[]|_IH_Cart_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Cart sole(array|string $columns = ['*'])
     * @method Cart updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Cart_QB extends _BaseBuilder {}
    
    /**
     * @method CashbackRuleSpecificationItem|null getOrPut($key, $value)
     * @method CashbackRuleSpecificationItem|$this shift(int $count = 1)
     * @method CashbackRuleSpecificationItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleSpecificationItem|$this pop(int $count = 1)
     * @method CashbackRuleSpecificationItem|null pull($key, \Closure $default = null)
     * @method CashbackRuleSpecificationItem|null last(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleSpecificationItem|$this random(callable|int|null $number = null)
     * @method CashbackRuleSpecificationItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleSpecificationItem|null get($key, \Closure $default = null)
     * @method CashbackRuleSpecificationItem|null first(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleSpecificationItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CashbackRuleSpecificationItem|null find($key, $default = null)
     * @method CashbackRuleSpecificationItem[] all()
     */
    class _IH_CashbackRuleSpecificationItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CashbackRuleSpecificationItem[][]|Collection<_IH_CashbackRuleSpecificationItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CashbackRuleSpecificationItem_QB whereId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereCashbackRuleId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereCategoryId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereInstructorId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereSellerId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereWebinarId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereProductId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereBundleId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereSubscribeId($value)
     * @method _IH_CashbackRuleSpecificationItem_QB whereRegistrationPackageId($value)
     * @method CashbackRuleSpecificationItem baseSole(array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem create(array $attributes = [])
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] cursor()
     * @method CashbackRuleSpecificationItem|null|_IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] find($id, array|string $columns = ['*'])
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem|_IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleSpecificationItem|_IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] findOrFail($id, array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem|_IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] findOrNew($id, array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem first(array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleSpecificationItem firstOrCreate(array $attributes = [], array $values = [])
     * @method CashbackRuleSpecificationItem firstOrFail(array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem firstOrNew(array $attributes = [], array $values = [])
     * @method CashbackRuleSpecificationItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CashbackRuleSpecificationItem forceCreate(array $attributes)
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] get(array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem getModel()
     * @method CashbackRuleSpecificationItem[] getModels(array|string $columns = ['*'])
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] hydrate(array $items)
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] lazy(int $chunkSize = 1000)
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CashbackRuleSpecificationItem make(array $attributes = [])
     * @method CashbackRuleSpecificationItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CashbackRuleSpecificationItem[]|_IH_CashbackRuleSpecificationItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleSpecificationItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CashbackRuleSpecificationItem[]|_IH_CashbackRuleSpecificationItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleSpecificationItem sole(array|string $columns = ['*'])
     * @method CashbackRuleSpecificationItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CashbackRuleSpecificationItem_QB extends _BaseBuilder {}
    
    /**
     * @method CashbackRuleUserGroup|null getOrPut($key, $value)
     * @method CashbackRuleUserGroup|$this shift(int $count = 1)
     * @method CashbackRuleUserGroup|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleUserGroup|$this pop(int $count = 1)
     * @method CashbackRuleUserGroup|null pull($key, \Closure $default = null)
     * @method CashbackRuleUserGroup|null last(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleUserGroup|$this random(callable|int|null $number = null)
     * @method CashbackRuleUserGroup|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleUserGroup|null get($key, \Closure $default = null)
     * @method CashbackRuleUserGroup|null first(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleUserGroup|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CashbackRuleUserGroup|null find($key, $default = null)
     * @method CashbackRuleUserGroup[] all()
     */
    class _IH_CashbackRuleUserGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CashbackRuleUserGroup[][]|Collection<_IH_CashbackRuleUserGroup_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CashbackRuleUserGroup_QB whereId($value)
     * @method _IH_CashbackRuleUserGroup_QB whereCashbackRuleId($value)
     * @method _IH_CashbackRuleUserGroup_QB whereGroupId($value)
     * @method _IH_CashbackRuleUserGroup_QB whereUserId($value)
     * @method CashbackRuleUserGroup baseSole(array|string $columns = ['*'])
     * @method CashbackRuleUserGroup create(array $attributes = [])
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] cursor()
     * @method CashbackRuleUserGroup|null|_IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] find($id, array|string $columns = ['*'])
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CashbackRuleUserGroup|_IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleUserGroup|_IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] findOrFail($id, array|string $columns = ['*'])
     * @method CashbackRuleUserGroup|_IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] findOrNew($id, array|string $columns = ['*'])
     * @method CashbackRuleUserGroup first(array|string $columns = ['*'])
     * @method CashbackRuleUserGroup firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleUserGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method CashbackRuleUserGroup firstOrFail(array|string $columns = ['*'])
     * @method CashbackRuleUserGroup firstOrNew(array $attributes = [], array $values = [])
     * @method CashbackRuleUserGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CashbackRuleUserGroup forceCreate(array $attributes)
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] get(array|string $columns = ['*'])
     * @method CashbackRuleUserGroup getModel()
     * @method CashbackRuleUserGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] hydrate(array $items)
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] lazy(int $chunkSize = 1000)
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CashbackRuleUserGroup make(array $attributes = [])
     * @method CashbackRuleUserGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CashbackRuleUserGroup[]|_IH_CashbackRuleUserGroup_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleUserGroup restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CashbackRuleUserGroup[]|_IH_CashbackRuleUserGroup_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleUserGroup sole(array|string $columns = ['*'])
     * @method CashbackRuleUserGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CashbackRuleUserGroup_QB extends _BaseBuilder {}
    
    /**
     * @method CashbackRule|null getOrPut($key, $value)
     * @method CashbackRule|$this shift(int $count = 1)
     * @method CashbackRule|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRule|$this pop(int $count = 1)
     * @method CashbackRule|null pull($key, \Closure $default = null)
     * @method CashbackRule|null last(callable $callback = null, \Closure $default = null)
     * @method CashbackRule|$this random(callable|int|null $number = null)
     * @method CashbackRule|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRule|null get($key, \Closure $default = null)
     * @method CashbackRule|null first(callable $callback = null, \Closure $default = null)
     * @method CashbackRule|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CashbackRule|null find($key, $default = null)
     * @method CashbackRule[] all()
     */
    class _IH_CashbackRule_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CashbackRule[][]|Collection<_IH_CashbackRule_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CashbackRule_QB whereId($value)
     * @method _IH_CashbackRule_QB whereTargetType($value)
     * @method _IH_CashbackRule_QB whereTarget($value)
     * @method _IH_CashbackRule_QB whereStartDate($value)
     * @method _IH_CashbackRule_QB whereEndDate($value)
     * @method _IH_CashbackRule_QB whereAmount($value)
     * @method _IH_CashbackRule_QB whereAmountType($value)
     * @method _IH_CashbackRule_QB whereApplyCashbackPerItem($value)
     * @method _IH_CashbackRule_QB whereMaxAmount($value)
     * @method _IH_CashbackRule_QB whereMinAmount($value)
     * @method _IH_CashbackRule_QB whereEnable($value)
     * @method _IH_CashbackRule_QB whereCreatedAt($value)
     * @method CashbackRule baseSole(array|string $columns = ['*'])
     * @method CashbackRule create(array $attributes = [])
     * @method _IH_CashbackRule_C|CashbackRule[] cursor()
     * @method CashbackRule|null|_IH_CashbackRule_C|CashbackRule[] find($id, array|string $columns = ['*'])
     * @method _IH_CashbackRule_C|CashbackRule[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CashbackRule|_IH_CashbackRule_C|CashbackRule[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRule|_IH_CashbackRule_C|CashbackRule[] findOrFail($id, array|string $columns = ['*'])
     * @method CashbackRule|_IH_CashbackRule_C|CashbackRule[] findOrNew($id, array|string $columns = ['*'])
     * @method CashbackRule first(array|string $columns = ['*'])
     * @method CashbackRule firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRule firstOrCreate(array $attributes = [], array $values = [])
     * @method CashbackRule firstOrFail(array|string $columns = ['*'])
     * @method CashbackRule firstOrNew(array $attributes = [], array $values = [])
     * @method CashbackRule firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CashbackRule forceCreate(array $attributes)
     * @method _IH_CashbackRule_C|CashbackRule[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CashbackRule_C|CashbackRule[] get(array|string $columns = ['*'])
     * @method CashbackRule getModel()
     * @method CashbackRule[] getModels(array|string $columns = ['*'])
     * @method _IH_CashbackRule_C|CashbackRule[] hydrate(array $items)
     * @method _IH_CashbackRule_C|CashbackRule[] lazy(int $chunkSize = 1000)
     * @method _IH_CashbackRule_C|CashbackRule[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CashbackRule_C|CashbackRule[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CashbackRule make(array $attributes = [])
     * @method CashbackRule newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CashbackRule[]|_IH_CashbackRule_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRule restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CashbackRule[]|_IH_CashbackRule_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRule sole(array|string $columns = ['*'])
     * @method CashbackRule updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CashbackRule_QB listsTranslations(string $translationField)
     * @method _IH_CashbackRule_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_CashbackRule_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_CashbackRule_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CashbackRule_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_CashbackRule_QB translated()
     * @method _IH_CashbackRule_QB translatedIn(null|string $locale = null)
     * @method _IH_CashbackRule_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_CashbackRule_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CashbackRule_QB withTranslation()
     */
    class _IH_CashbackRule_QB extends _BaseBuilder {}
    
    /**
     * @method Category|null getOrPut($key, $value)
     * @method Category|$this shift(int $count = 1)
     * @method Category|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Category|$this pop(int $count = 1)
     * @method Category|null pull($key, \Closure $default = null)
     * @method Category|null last(callable $callback = null, \Closure $default = null)
     * @method Category|$this random(callable|int|null $number = null)
     * @method Category|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Category|null get($key, \Closure $default = null)
     * @method Category|null first(callable $callback = null, \Closure $default = null)
     * @method Category|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Category|null find($key, $default = null)
     * @method Category[] all()
     */
    class _IH_Category_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Category[][]|Collection<_IH_Category_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Category_QB whereId($value)
     * @method _IH_Category_QB whereParentId($value)
     * @method _IH_Category_QB whereOrder($value)
     * @method _IH_Category_QB whereIcon($value)
     * @method _IH_Category_QB whereSlug($value)
     * @method Category baseSole(array|string $columns = ['*'])
     * @method Category create(array $attributes = [])
     * @method _IH_Category_C|Category[] cursor()
     * @method Category|null|_IH_Category_C|Category[] find($id, array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category|_IH_Category_C|Category[] findOrFail($id, array|string $columns = ['*'])
     * @method Category|_IH_Category_C|Category[] findOrNew($id, array|string $columns = ['*'])
     * @method Category first(array|string $columns = ['*'])
     * @method Category firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Category firstOrCreate(array $attributes = [], array $values = [])
     * @method Category firstOrFail(array|string $columns = ['*'])
     * @method Category firstOrNew(array $attributes = [], array $values = [])
     * @method Category firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Category forceCreate(array $attributes)
     * @method _IH_Category_C|Category[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Category_C|Category[] get(array|string $columns = ['*'])
     * @method Category getModel()
     * @method Category[] getModels(array|string $columns = ['*'])
     * @method _IH_Category_C|Category[] hydrate(array $items)
     * @method _IH_Category_C|Category[] lazy(int $chunkSize = 1000)
     * @method _IH_Category_C|Category[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Category_C|Category[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Category make(array $attributes = [])
     * @method Category newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Category[]|_IH_Category_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Category[]|_IH_Category_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Category sole(array|string $columns = ['*'])
     * @method Category updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Category_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Category_QB listsTranslations(string $translationField)
     * @method _IH_Category_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Category_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Category_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Category_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Category_QB translated()
     * @method _IH_Category_QB translatedIn(null|string $locale = null)
     * @method _IH_Category_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Category_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Category_QB withTranslation()
     * @method _IH_Category_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Category_QB extends _BaseBuilder {}
    
    /**
     * @method CertificateTemplate|null getOrPut($key, $value)
     * @method CertificateTemplate|$this shift(int $count = 1)
     * @method CertificateTemplate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CertificateTemplate|$this pop(int $count = 1)
     * @method CertificateTemplate|null pull($key, \Closure $default = null)
     * @method CertificateTemplate|null last(callable $callback = null, \Closure $default = null)
     * @method CertificateTemplate|$this random(callable|int|null $number = null)
     * @method CertificateTemplate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CertificateTemplate|null get($key, \Closure $default = null)
     * @method CertificateTemplate|null first(callable $callback = null, \Closure $default = null)
     * @method CertificateTemplate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CertificateTemplate|null find($key, $default = null)
     * @method CertificateTemplate[] all()
     */
    class _IH_CertificateTemplate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CertificateTemplate[][]|Collection<_IH_CertificateTemplate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CertificateTemplate_QB whereId($value)
     * @method _IH_CertificateTemplate_QB whereImage($value)
     * @method _IH_CertificateTemplate_QB wherePositionX($value)
     * @method _IH_CertificateTemplate_QB wherePositionY($value)
     * @method _IH_CertificateTemplate_QB whereFontSize($value)
     * @method _IH_CertificateTemplate_QB whereTextColor($value)
     * @method _IH_CertificateTemplate_QB whereStatus($value)
     * @method _IH_CertificateTemplate_QB whereCreatedAt($value)
     * @method _IH_CertificateTemplate_QB whereUpdatedAt($value)
     * @method CertificateTemplate baseSole(array|string $columns = ['*'])
     * @method CertificateTemplate create(array $attributes = [])
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] cursor()
     * @method CertificateTemplate|null|_IH_CertificateTemplate_C|CertificateTemplate[] find($id, array|string $columns = ['*'])
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CertificateTemplate|_IH_CertificateTemplate_C|CertificateTemplate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CertificateTemplate|_IH_CertificateTemplate_C|CertificateTemplate[] findOrFail($id, array|string $columns = ['*'])
     * @method CertificateTemplate|_IH_CertificateTemplate_C|CertificateTemplate[] findOrNew($id, array|string $columns = ['*'])
     * @method CertificateTemplate first(array|string $columns = ['*'])
     * @method CertificateTemplate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CertificateTemplate firstOrCreate(array $attributes = [], array $values = [])
     * @method CertificateTemplate firstOrFail(array|string $columns = ['*'])
     * @method CertificateTemplate firstOrNew(array $attributes = [], array $values = [])
     * @method CertificateTemplate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CertificateTemplate forceCreate(array $attributes)
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] get(array|string $columns = ['*'])
     * @method CertificateTemplate getModel()
     * @method CertificateTemplate[] getModels(array|string $columns = ['*'])
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] hydrate(array $items)
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] lazy(int $chunkSize = 1000)
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CertificateTemplate_C|CertificateTemplate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CertificateTemplate make(array $attributes = [])
     * @method CertificateTemplate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CertificateTemplate[]|_IH_CertificateTemplate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CertificateTemplate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CertificateTemplate[]|_IH_CertificateTemplate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CertificateTemplate sole(array|string $columns = ['*'])
     * @method CertificateTemplate updateOrCreate(array $attributes, array $values = [])
     * @method _IH_CertificateTemplate_QB listsTranslations(string $translationField)
     * @method _IH_CertificateTemplate_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_CertificateTemplate_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_CertificateTemplate_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CertificateTemplate_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_CertificateTemplate_QB translated()
     * @method _IH_CertificateTemplate_QB translatedIn(null|string $locale = null)
     * @method _IH_CertificateTemplate_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_CertificateTemplate_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_CertificateTemplate_QB withTranslation()
     */
    class _IH_CertificateTemplate_QB extends _BaseBuilder {}
    
    /**
     * @method Certificate|null getOrPut($key, $value)
     * @method Certificate|$this shift(int $count = 1)
     * @method Certificate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Certificate|$this pop(int $count = 1)
     * @method Certificate|null pull($key, \Closure $default = null)
     * @method Certificate|null last(callable $callback = null, \Closure $default = null)
     * @method Certificate|$this random(callable|int|null $number = null)
     * @method Certificate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Certificate|null get($key, \Closure $default = null)
     * @method Certificate|null first(callable $callback = null, \Closure $default = null)
     * @method Certificate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Certificate|null find($key, $default = null)
     * @method Certificate[] all()
     */
    class _IH_Certificate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Certificate[][]|Collection<_IH_Certificate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Certificate_QB whereId($value)
     * @method _IH_Certificate_QB whereQuizId($value)
     * @method _IH_Certificate_QB whereQuizResultId($value)
     * @method _IH_Certificate_QB whereStudentId($value)
     * @method _IH_Certificate_QB whereUserGrade($value)
     * @method _IH_Certificate_QB whereFile($value)
     * @method _IH_Certificate_QB whereCreatedAt($value)
     * @method _IH_Certificate_QB whereType($value)
     * @method _IH_Certificate_QB whereWebinarId($value)
     * @method _IH_Certificate_QB whereBundleId($value)
     * @method Certificate baseSole(array|string $columns = ['*'])
     * @method Certificate create(array $attributes = [])
     * @method _IH_Certificate_C|Certificate[] cursor()
     * @method Certificate|null|_IH_Certificate_C|Certificate[] find($id, array|string $columns = ['*'])
     * @method _IH_Certificate_C|Certificate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Certificate|_IH_Certificate_C|Certificate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Certificate|_IH_Certificate_C|Certificate[] findOrFail($id, array|string $columns = ['*'])
     * @method Certificate|_IH_Certificate_C|Certificate[] findOrNew($id, array|string $columns = ['*'])
     * @method Certificate first(array|string $columns = ['*'])
     * @method Certificate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Certificate firstOrCreate(array $attributes = [], array $values = [])
     * @method Certificate firstOrFail(array|string $columns = ['*'])
     * @method Certificate firstOrNew(array $attributes = [], array $values = [])
     * @method Certificate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Certificate forceCreate(array $attributes)
     * @method _IH_Certificate_C|Certificate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Certificate_C|Certificate[] get(array|string $columns = ['*'])
     * @method Certificate getModel()
     * @method Certificate[] getModels(array|string $columns = ['*'])
     * @method _IH_Certificate_C|Certificate[] hydrate(array $items)
     * @method _IH_Certificate_C|Certificate[] lazy(int $chunkSize = 1000)
     * @method _IH_Certificate_C|Certificate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Certificate_C|Certificate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Certificate make(array $attributes = [])
     * @method Certificate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Certificate[]|_IH_Certificate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Certificate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Certificate[]|_IH_Certificate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Certificate sole(array|string $columns = ['*'])
     * @method Certificate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Certificate_QB extends _BaseBuilder {}
    
    /**
     * @method CommentReport|null getOrPut($key, $value)
     * @method CommentReport|$this shift(int $count = 1)
     * @method CommentReport|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CommentReport|$this pop(int $count = 1)
     * @method CommentReport|null pull($key, \Closure $default = null)
     * @method CommentReport|null last(callable $callback = null, \Closure $default = null)
     * @method CommentReport|$this random(callable|int|null $number = null)
     * @method CommentReport|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CommentReport|null get($key, \Closure $default = null)
     * @method CommentReport|null first(callable $callback = null, \Closure $default = null)
     * @method CommentReport|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CommentReport|null find($key, $default = null)
     * @method CommentReport[] all()
     */
    class _IH_CommentReport_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CommentReport[][]|Collection<_IH_CommentReport_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CommentReport_QB whereId($value)
     * @method _IH_CommentReport_QB whereUserId($value)
     * @method _IH_CommentReport_QB whereBlogId($value)
     * @method _IH_CommentReport_QB whereWebinarId($value)
     * @method _IH_CommentReport_QB whereBundleId($value)
     * @method _IH_CommentReport_QB whereCommentId($value)
     * @method _IH_CommentReport_QB whereMessage($value)
     * @method _IH_CommentReport_QB whereCreatedAt($value)
     * @method _IH_CommentReport_QB whereProductId($value)
     * @method CommentReport baseSole(array|string $columns = ['*'])
     * @method CommentReport create(array $attributes = [])
     * @method _IH_CommentReport_C|CommentReport[] cursor()
     * @method CommentReport|null|_IH_CommentReport_C|CommentReport[] find($id, array|string $columns = ['*'])
     * @method _IH_CommentReport_C|CommentReport[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CommentReport|_IH_CommentReport_C|CommentReport[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CommentReport|_IH_CommentReport_C|CommentReport[] findOrFail($id, array|string $columns = ['*'])
     * @method CommentReport|_IH_CommentReport_C|CommentReport[] findOrNew($id, array|string $columns = ['*'])
     * @method CommentReport first(array|string $columns = ['*'])
     * @method CommentReport firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CommentReport firstOrCreate(array $attributes = [], array $values = [])
     * @method CommentReport firstOrFail(array|string $columns = ['*'])
     * @method CommentReport firstOrNew(array $attributes = [], array $values = [])
     * @method CommentReport firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CommentReport forceCreate(array $attributes)
     * @method _IH_CommentReport_C|CommentReport[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CommentReport_C|CommentReport[] get(array|string $columns = ['*'])
     * @method CommentReport getModel()
     * @method CommentReport[] getModels(array|string $columns = ['*'])
     * @method _IH_CommentReport_C|CommentReport[] hydrate(array $items)
     * @method _IH_CommentReport_C|CommentReport[] lazy(int $chunkSize = 1000)
     * @method _IH_CommentReport_C|CommentReport[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CommentReport_C|CommentReport[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CommentReport make(array $attributes = [])
     * @method CommentReport newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CommentReport[]|_IH_CommentReport_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CommentReport restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CommentReport[]|_IH_CommentReport_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CommentReport sole(array|string $columns = ['*'])
     * @method CommentReport updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CommentReport_QB extends _BaseBuilder {}
    
    /**
     * @method Comment|null getOrPut($key, $value)
     * @method Comment|$this shift(int $count = 1)
     * @method Comment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Comment|$this pop(int $count = 1)
     * @method Comment|null pull($key, \Closure $default = null)
     * @method Comment|null last(callable $callback = null, \Closure $default = null)
     * @method Comment|$this random(callable|int|null $number = null)
     * @method Comment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Comment|null get($key, \Closure $default = null)
     * @method Comment|null first(callable $callback = null, \Closure $default = null)
     * @method Comment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Comment|null find($key, $default = null)
     * @method Comment[] all()
     */
    class _IH_Comment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Comment[][]|Collection<_IH_Comment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Comment_QB whereId($value)
     * @method _IH_Comment_QB whereUserId($value)
     * @method _IH_Comment_QB whereReplyId($value)
     * @method _IH_Comment_QB whereComment($value)
     * @method _IH_Comment_QB whereStatus($value)
     * @method _IH_Comment_QB whereCreatedAt($value)
     * @method _IH_Comment_QB whereWebinarId($value)
     * @method _IH_Comment_QB whereReport($value)
     * @method _IH_Comment_QB whereDisabled($value)
     * @method _IH_Comment_QB whereReviewId($value)
     * @method _IH_Comment_QB whereBlogId($value)
     * @method _IH_Comment_QB whereViewedAt($value)
     * @method _IH_Comment_QB whereProductId($value)
     * @method _IH_Comment_QB whereProductReviewId($value)
     * @method _IH_Comment_QB whereBundleId($value)
     * @method _IH_Comment_QB whereUpcomingCourseId($value)
     * @method Comment baseSole(array|string $columns = ['*'])
     * @method Comment create(array $attributes = [])
     * @method _IH_Comment_C|Comment[] cursor()
     * @method Comment|null|_IH_Comment_C|Comment[] find($id, array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Comment|_IH_Comment_C|Comment[] findOrFail($id, array|string $columns = ['*'])
     * @method Comment|_IH_Comment_C|Comment[] findOrNew($id, array|string $columns = ['*'])
     * @method Comment first(array|string $columns = ['*'])
     * @method Comment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Comment firstOrCreate(array $attributes = [], array $values = [])
     * @method Comment firstOrFail(array|string $columns = ['*'])
     * @method Comment firstOrNew(array $attributes = [], array $values = [])
     * @method Comment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Comment forceCreate(array $attributes)
     * @method _IH_Comment_C|Comment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Comment_C|Comment[] get(array|string $columns = ['*'])
     * @method Comment getModel()
     * @method Comment[] getModels(array|string $columns = ['*'])
     * @method _IH_Comment_C|Comment[] hydrate(array $items)
     * @method _IH_Comment_C|Comment[] lazy(int $chunkSize = 1000)
     * @method _IH_Comment_C|Comment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Comment_C|Comment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Comment make(array $attributes = [])
     * @method Comment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Comment[]|_IH_Comment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Comment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Comment[]|_IH_Comment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Comment sole(array|string $columns = ['*'])
     * @method Comment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Comment_QB extends _BaseBuilder {}
    
    /**
     * @method Contact|null getOrPut($key, $value)
     * @method Contact|$this shift(int $count = 1)
     * @method Contact|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Contact|$this pop(int $count = 1)
     * @method Contact|null pull($key, \Closure $default = null)
     * @method Contact|null last(callable $callback = null, \Closure $default = null)
     * @method Contact|$this random(callable|int|null $number = null)
     * @method Contact|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Contact|null get($key, \Closure $default = null)
     * @method Contact|null first(callable $callback = null, \Closure $default = null)
     * @method Contact|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Contact|null find($key, $default = null)
     * @method Contact[] all()
     */
    class _IH_Contact_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Contact[][]|Collection<_IH_Contact_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Contact_QB whereId($value)
     * @method _IH_Contact_QB whereName($value)
     * @method _IH_Contact_QB whereEmail($value)
     * @method _IH_Contact_QB wherePhone($value)
     * @method _IH_Contact_QB whereSubject($value)
     * @method _IH_Contact_QB whereMessage($value)
     * @method _IH_Contact_QB whereStatus($value)
     * @method _IH_Contact_QB whereCreatedAt($value)
     * @method _IH_Contact_QB whereReply($value)
     * @method Contact baseSole(array|string $columns = ['*'])
     * @method Contact create(array $attributes = [])
     * @method _IH_Contact_C|Contact[] cursor()
     * @method Contact|null|_IH_Contact_C|Contact[] find($id, array|string $columns = ['*'])
     * @method _IH_Contact_C|Contact[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Contact|_IH_Contact_C|Contact[] findOrFail($id, array|string $columns = ['*'])
     * @method Contact|_IH_Contact_C|Contact[] findOrNew($id, array|string $columns = ['*'])
     * @method Contact first(array|string $columns = ['*'])
     * @method Contact firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Contact firstOrCreate(array $attributes = [], array $values = [])
     * @method Contact firstOrFail(array|string $columns = ['*'])
     * @method Contact firstOrNew(array $attributes = [], array $values = [])
     * @method Contact firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Contact forceCreate(array $attributes)
     * @method _IH_Contact_C|Contact[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Contact_C|Contact[] get(array|string $columns = ['*'])
     * @method Contact getModel()
     * @method Contact[] getModels(array|string $columns = ['*'])
     * @method _IH_Contact_C|Contact[] hydrate(array $items)
     * @method _IH_Contact_C|Contact[] lazy(int $chunkSize = 1000)
     * @method _IH_Contact_C|Contact[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Contact_C|Contact[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Contact make(array $attributes = [])
     * @method Contact newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Contact[]|_IH_Contact_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Contact restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Contact[]|_IH_Contact_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Contact sole(array|string $columns = ['*'])
     * @method Contact updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Contact_QB extends _BaseBuilder {}
    
    /**
     * @method ContentDeleteRequest|null getOrPut($key, $value)
     * @method ContentDeleteRequest|$this shift(int $count = 1)
     * @method ContentDeleteRequest|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ContentDeleteRequest|$this pop(int $count = 1)
     * @method ContentDeleteRequest|null pull($key, \Closure $default = null)
     * @method ContentDeleteRequest|null last(callable $callback = null, \Closure $default = null)
     * @method ContentDeleteRequest|$this random(callable|int|null $number = null)
     * @method ContentDeleteRequest|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ContentDeleteRequest|null get($key, \Closure $default = null)
     * @method ContentDeleteRequest|null first(callable $callback = null, \Closure $default = null)
     * @method ContentDeleteRequest|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ContentDeleteRequest|null find($key, $default = null)
     * @method ContentDeleteRequest[] all()
     */
    class _IH_ContentDeleteRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ContentDeleteRequest[][]|Collection<_IH_ContentDeleteRequest_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ContentDeleteRequest_QB whereId($value)
     * @method _IH_ContentDeleteRequest_QB whereUserId($value)
     * @method _IH_ContentDeleteRequest_QB whereTargetableId($value)
     * @method _IH_ContentDeleteRequest_QB whereTargetableType($value)
     * @method _IH_ContentDeleteRequest_QB whereDescription($value)
     * @method _IH_ContentDeleteRequest_QB whereContentTitle($value)
     * @method _IH_ContentDeleteRequest_QB whereContentPublishedDate($value)
     * @method _IH_ContentDeleteRequest_QB whereCustomersCount($value)
     * @method _IH_ContentDeleteRequest_QB whereSales($value)
     * @method _IH_ContentDeleteRequest_QB whereStatus($value)
     * @method _IH_ContentDeleteRequest_QB whereCreatedAt($value)
     * @method ContentDeleteRequest baseSole(array|string $columns = ['*'])
     * @method ContentDeleteRequest create(array $attributes = [])
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] cursor()
     * @method ContentDeleteRequest|null|_IH_ContentDeleteRequest_C|ContentDeleteRequest[] find($id, array|string $columns = ['*'])
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ContentDeleteRequest|_IH_ContentDeleteRequest_C|ContentDeleteRequest[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContentDeleteRequest|_IH_ContentDeleteRequest_C|ContentDeleteRequest[] findOrFail($id, array|string $columns = ['*'])
     * @method ContentDeleteRequest|_IH_ContentDeleteRequest_C|ContentDeleteRequest[] findOrNew($id, array|string $columns = ['*'])
     * @method ContentDeleteRequest first(array|string $columns = ['*'])
     * @method ContentDeleteRequest firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ContentDeleteRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method ContentDeleteRequest firstOrFail(array|string $columns = ['*'])
     * @method ContentDeleteRequest firstOrNew(array $attributes = [], array $values = [])
     * @method ContentDeleteRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ContentDeleteRequest forceCreate(array $attributes)
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] get(array|string $columns = ['*'])
     * @method ContentDeleteRequest getModel()
     * @method ContentDeleteRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] hydrate(array $items)
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] lazy(int $chunkSize = 1000)
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ContentDeleteRequest_C|ContentDeleteRequest[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ContentDeleteRequest make(array $attributes = [])
     * @method ContentDeleteRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ContentDeleteRequest[]|_IH_ContentDeleteRequest_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ContentDeleteRequest restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ContentDeleteRequest[]|_IH_ContentDeleteRequest_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ContentDeleteRequest sole(array|string $columns = ['*'])
     * @method ContentDeleteRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ContentDeleteRequest_QB extends _BaseBuilder {}
    
    /**
     * @method CourseForumAnswer|null getOrPut($key, $value)
     * @method CourseForumAnswer|$this shift(int $count = 1)
     * @method CourseForumAnswer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseForumAnswer|$this pop(int $count = 1)
     * @method CourseForumAnswer|null pull($key, \Closure $default = null)
     * @method CourseForumAnswer|null last(callable $callback = null, \Closure $default = null)
     * @method CourseForumAnswer|$this random(callable|int|null $number = null)
     * @method CourseForumAnswer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseForumAnswer|null get($key, \Closure $default = null)
     * @method CourseForumAnswer|null first(callable $callback = null, \Closure $default = null)
     * @method CourseForumAnswer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseForumAnswer|null find($key, $default = null)
     * @method CourseForumAnswer[] all()
     */
    class _IH_CourseForumAnswer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseForumAnswer[][]|Collection<_IH_CourseForumAnswer_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseForumAnswer_QB whereId($value)
     * @method _IH_CourseForumAnswer_QB whereForumId($value)
     * @method _IH_CourseForumAnswer_QB whereUserId($value)
     * @method _IH_CourseForumAnswer_QB whereDescription($value)
     * @method _IH_CourseForumAnswer_QB wherePin($value)
     * @method _IH_CourseForumAnswer_QB whereResolved($value)
     * @method _IH_CourseForumAnswer_QB whereCreatedAt($value)
     * @method CourseForumAnswer baseSole(array|string $columns = ['*'])
     * @method CourseForumAnswer create(array $attributes = [])
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] cursor()
     * @method CourseForumAnswer|null|_IH_CourseForumAnswer_C|CourseForumAnswer[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseForumAnswer|_IH_CourseForumAnswer_C|CourseForumAnswer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseForumAnswer|_IH_CourseForumAnswer_C|CourseForumAnswer[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseForumAnswer|_IH_CourseForumAnswer_C|CourseForumAnswer[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseForumAnswer first(array|string $columns = ['*'])
     * @method CourseForumAnswer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseForumAnswer firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseForumAnswer firstOrFail(array|string $columns = ['*'])
     * @method CourseForumAnswer firstOrNew(array $attributes = [], array $values = [])
     * @method CourseForumAnswer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseForumAnswer forceCreate(array $attributes)
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] get(array|string $columns = ['*'])
     * @method CourseForumAnswer getModel()
     * @method CourseForumAnswer[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] hydrate(array $items)
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseForumAnswer_C|CourseForumAnswer[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseForumAnswer make(array $attributes = [])
     * @method CourseForumAnswer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseForumAnswer[]|_IH_CourseForumAnswer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseForumAnswer restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseForumAnswer[]|_IH_CourseForumAnswer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseForumAnswer sole(array|string $columns = ['*'])
     * @method CourseForumAnswer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseForumAnswer_QB extends _BaseBuilder {}
    
    /**
     * @method CourseForum|null getOrPut($key, $value)
     * @method CourseForum|$this shift(int $count = 1)
     * @method CourseForum|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseForum|$this pop(int $count = 1)
     * @method CourseForum|null pull($key, \Closure $default = null)
     * @method CourseForum|null last(callable $callback = null, \Closure $default = null)
     * @method CourseForum|$this random(callable|int|null $number = null)
     * @method CourseForum|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseForum|null get($key, \Closure $default = null)
     * @method CourseForum|null first(callable $callback = null, \Closure $default = null)
     * @method CourseForum|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseForum|null find($key, $default = null)
     * @method CourseForum[] all()
     */
    class _IH_CourseForum_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseForum[][]|Collection<_IH_CourseForum_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseForum_QB whereId($value)
     * @method _IH_CourseForum_QB whereWebinarId($value)
     * @method _IH_CourseForum_QB whereUserId($value)
     * @method _IH_CourseForum_QB whereTitle($value)
     * @method _IH_CourseForum_QB whereDescription($value)
     * @method _IH_CourseForum_QB whereAttach($value)
     * @method _IH_CourseForum_QB wherePin($value)
     * @method _IH_CourseForum_QB whereCreatedAt($value)
     * @method CourseForum baseSole(array|string $columns = ['*'])
     * @method CourseForum create(array $attributes = [])
     * @method _IH_CourseForum_C|CourseForum[] cursor()
     * @method CourseForum|null|_IH_CourseForum_C|CourseForum[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseForum_C|CourseForum[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseForum|_IH_CourseForum_C|CourseForum[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseForum|_IH_CourseForum_C|CourseForum[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseForum|_IH_CourseForum_C|CourseForum[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseForum first(array|string $columns = ['*'])
     * @method CourseForum firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseForum firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseForum firstOrFail(array|string $columns = ['*'])
     * @method CourseForum firstOrNew(array $attributes = [], array $values = [])
     * @method CourseForum firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseForum forceCreate(array $attributes)
     * @method _IH_CourseForum_C|CourseForum[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseForum_C|CourseForum[] get(array|string $columns = ['*'])
     * @method CourseForum getModel()
     * @method CourseForum[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseForum_C|CourseForum[] hydrate(array $items)
     * @method _IH_CourseForum_C|CourseForum[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseForum_C|CourseForum[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseForum_C|CourseForum[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseForum make(array $attributes = [])
     * @method CourseForum newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseForum[]|_IH_CourseForum_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseForum restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseForum[]|_IH_CourseForum_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseForum sole(array|string $columns = ['*'])
     * @method CourseForum updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseForum_QB extends _BaseBuilder {}
    
    /**
     * @method CourseLearningLastView|null getOrPut($key, $value)
     * @method CourseLearningLastView|$this shift(int $count = 1)
     * @method CourseLearningLastView|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseLearningLastView|$this pop(int $count = 1)
     * @method CourseLearningLastView|null pull($key, \Closure $default = null)
     * @method CourseLearningLastView|null last(callable $callback = null, \Closure $default = null)
     * @method CourseLearningLastView|$this random(callable|int|null $number = null)
     * @method CourseLearningLastView|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseLearningLastView|null get($key, \Closure $default = null)
     * @method CourseLearningLastView|null first(callable $callback = null, \Closure $default = null)
     * @method CourseLearningLastView|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseLearningLastView|null find($key, $default = null)
     * @method CourseLearningLastView[] all()
     */
    class _IH_CourseLearningLastView_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseLearningLastView[][]|Collection<_IH_CourseLearningLastView_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseLearningLastView_QB whereId($value)
     * @method _IH_CourseLearningLastView_QB whereUserId($value)
     * @method _IH_CourseLearningLastView_QB whereItemId($value)
     * @method _IH_CourseLearningLastView_QB whereItemType($value)
     * @method _IH_CourseLearningLastView_QB whereVisitedAt($value)
     * @method _IH_CourseLearningLastView_QB whereWebinarId($value)
     * @method CourseLearningLastView baseSole(array|string $columns = ['*'])
     * @method CourseLearningLastView create(array $attributes = [])
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] cursor()
     * @method CourseLearningLastView|null|_IH_CourseLearningLastView_C|CourseLearningLastView[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseLearningLastView|_IH_CourseLearningLastView_C|CourseLearningLastView[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseLearningLastView|_IH_CourseLearningLastView_C|CourseLearningLastView[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseLearningLastView|_IH_CourseLearningLastView_C|CourseLearningLastView[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseLearningLastView first(array|string $columns = ['*'])
     * @method CourseLearningLastView firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseLearningLastView firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseLearningLastView firstOrFail(array|string $columns = ['*'])
     * @method CourseLearningLastView firstOrNew(array $attributes = [], array $values = [])
     * @method CourseLearningLastView firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseLearningLastView forceCreate(array $attributes)
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] get(array|string $columns = ['*'])
     * @method CourseLearningLastView getModel()
     * @method CourseLearningLastView[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] hydrate(array $items)
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseLearningLastView_C|CourseLearningLastView[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseLearningLastView make(array $attributes = [])
     * @method CourseLearningLastView newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseLearningLastView[]|_IH_CourseLearningLastView_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseLearningLastView restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseLearningLastView[]|_IH_CourseLearningLastView_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseLearningLastView sole(array|string $columns = ['*'])
     * @method CourseLearningLastView updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseLearningLastView_QB extends _BaseBuilder {}
    
    /**
     * @method CourseLearning|null getOrPut($key, $value)
     * @method CourseLearning|$this shift(int $count = 1)
     * @method CourseLearning|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseLearning|$this pop(int $count = 1)
     * @method CourseLearning|null pull($key, \Closure $default = null)
     * @method CourseLearning|null last(callable $callback = null, \Closure $default = null)
     * @method CourseLearning|$this random(callable|int|null $number = null)
     * @method CourseLearning|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseLearning|null get($key, \Closure $default = null)
     * @method CourseLearning|null first(callable $callback = null, \Closure $default = null)
     * @method CourseLearning|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseLearning|null find($key, $default = null)
     * @method CourseLearning[] all()
     */
    class _IH_CourseLearning_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseLearning[][]|Collection<_IH_CourseLearning_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseLearning_QB whereId($value)
     * @method _IH_CourseLearning_QB whereUserId($value)
     * @method _IH_CourseLearning_QB whereTextLessonId($value)
     * @method _IH_CourseLearning_QB whereFileId($value)
     * @method _IH_CourseLearning_QB whereSessionId($value)
     * @method _IH_CourseLearning_QB whereCreatedAt($value)
     * @method CourseLearning baseSole(array|string $columns = ['*'])
     * @method CourseLearning create(array $attributes = [])
     * @method _IH_CourseLearning_C|CourseLearning[] cursor()
     * @method CourseLearning|null|_IH_CourseLearning_C|CourseLearning[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseLearning_C|CourseLearning[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseLearning|_IH_CourseLearning_C|CourseLearning[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseLearning|_IH_CourseLearning_C|CourseLearning[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseLearning|_IH_CourseLearning_C|CourseLearning[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseLearning first(array|string $columns = ['*'])
     * @method CourseLearning firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseLearning firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseLearning firstOrFail(array|string $columns = ['*'])
     * @method CourseLearning firstOrNew(array $attributes = [], array $values = [])
     * @method CourseLearning firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseLearning forceCreate(array $attributes)
     * @method _IH_CourseLearning_C|CourseLearning[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseLearning_C|CourseLearning[] get(array|string $columns = ['*'])
     * @method CourseLearning getModel()
     * @method CourseLearning[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseLearning_C|CourseLearning[] hydrate(array $items)
     * @method _IH_CourseLearning_C|CourseLearning[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseLearning_C|CourseLearning[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseLearning_C|CourseLearning[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseLearning make(array $attributes = [])
     * @method CourseLearning newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseLearning[]|_IH_CourseLearning_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseLearning restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseLearning[]|_IH_CourseLearning_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseLearning sole(array|string $columns = ['*'])
     * @method CourseLearning updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseLearning_QB extends _BaseBuilder {}
    
    /**
     * @method CourseNoticeboardStatus|null getOrPut($key, $value)
     * @method CourseNoticeboardStatus|$this shift(int $count = 1)
     * @method CourseNoticeboardStatus|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseNoticeboardStatus|$this pop(int $count = 1)
     * @method CourseNoticeboardStatus|null pull($key, \Closure $default = null)
     * @method CourseNoticeboardStatus|null last(callable $callback = null, \Closure $default = null)
     * @method CourseNoticeboardStatus|$this random(callable|int|null $number = null)
     * @method CourseNoticeboardStatus|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseNoticeboardStatus|null get($key, \Closure $default = null)
     * @method CourseNoticeboardStatus|null first(callable $callback = null, \Closure $default = null)
     * @method CourseNoticeboardStatus|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseNoticeboardStatus|null find($key, $default = null)
     * @method CourseNoticeboardStatus[] all()
     */
    class _IH_CourseNoticeboardStatus_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseNoticeboardStatus[][]|Collection<_IH_CourseNoticeboardStatus_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseNoticeboardStatus_QB whereId($value)
     * @method _IH_CourseNoticeboardStatus_QB whereUserId($value)
     * @method _IH_CourseNoticeboardStatus_QB whereNoticeboardId($value)
     * @method _IH_CourseNoticeboardStatus_QB whereSeenAt($value)
     * @method CourseNoticeboardStatus baseSole(array|string $columns = ['*'])
     * @method CourseNoticeboardStatus create(array $attributes = [])
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] cursor()
     * @method CourseNoticeboardStatus|null|_IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseNoticeboardStatus|_IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseNoticeboardStatus|_IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseNoticeboardStatus|_IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseNoticeboardStatus first(array|string $columns = ['*'])
     * @method CourseNoticeboardStatus firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseNoticeboardStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseNoticeboardStatus firstOrFail(array|string $columns = ['*'])
     * @method CourseNoticeboardStatus firstOrNew(array $attributes = [], array $values = [])
     * @method CourseNoticeboardStatus firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseNoticeboardStatus forceCreate(array $attributes)
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] get(array|string $columns = ['*'])
     * @method CourseNoticeboardStatus getModel()
     * @method CourseNoticeboardStatus[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] hydrate(array $items)
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseNoticeboardStatus make(array $attributes = [])
     * @method CourseNoticeboardStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseNoticeboardStatus[]|_IH_CourseNoticeboardStatus_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseNoticeboardStatus restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseNoticeboardStatus[]|_IH_CourseNoticeboardStatus_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseNoticeboardStatus sole(array|string $columns = ['*'])
     * @method CourseNoticeboardStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseNoticeboardStatus_QB extends _BaseBuilder {}
    
    /**
     * @method CourseNoticeboard|null getOrPut($key, $value)
     * @method CourseNoticeboard|$this shift(int $count = 1)
     * @method CourseNoticeboard|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CourseNoticeboard|$this pop(int $count = 1)
     * @method CourseNoticeboard|null pull($key, \Closure $default = null)
     * @method CourseNoticeboard|null last(callable $callback = null, \Closure $default = null)
     * @method CourseNoticeboard|$this random(callable|int|null $number = null)
     * @method CourseNoticeboard|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CourseNoticeboard|null get($key, \Closure $default = null)
     * @method CourseNoticeboard|null first(callable $callback = null, \Closure $default = null)
     * @method CourseNoticeboard|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CourseNoticeboard|null find($key, $default = null)
     * @method CourseNoticeboard[] all()
     */
    class _IH_CourseNoticeboard_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CourseNoticeboard[][]|Collection<_IH_CourseNoticeboard_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CourseNoticeboard_QB whereId($value)
     * @method _IH_CourseNoticeboard_QB whereCreatorId($value)
     * @method _IH_CourseNoticeboard_QB whereWebinarId($value)
     * @method _IH_CourseNoticeboard_QB whereColor($value)
     * @method _IH_CourseNoticeboard_QB whereTitle($value)
     * @method _IH_CourseNoticeboard_QB whereMessage($value)
     * @method _IH_CourseNoticeboard_QB whereCreatedAt($value)
     * @method CourseNoticeboard baseSole(array|string $columns = ['*'])
     * @method CourseNoticeboard create(array $attributes = [])
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] cursor()
     * @method CourseNoticeboard|null|_IH_CourseNoticeboard_C|CourseNoticeboard[] find($id, array|string $columns = ['*'])
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CourseNoticeboard|_IH_CourseNoticeboard_C|CourseNoticeboard[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseNoticeboard|_IH_CourseNoticeboard_C|CourseNoticeboard[] findOrFail($id, array|string $columns = ['*'])
     * @method CourseNoticeboard|_IH_CourseNoticeboard_C|CourseNoticeboard[] findOrNew($id, array|string $columns = ['*'])
     * @method CourseNoticeboard first(array|string $columns = ['*'])
     * @method CourseNoticeboard firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CourseNoticeboard firstOrCreate(array $attributes = [], array $values = [])
     * @method CourseNoticeboard firstOrFail(array|string $columns = ['*'])
     * @method CourseNoticeboard firstOrNew(array $attributes = [], array $values = [])
     * @method CourseNoticeboard firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CourseNoticeboard forceCreate(array $attributes)
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] get(array|string $columns = ['*'])
     * @method CourseNoticeboard getModel()
     * @method CourseNoticeboard[] getModels(array|string $columns = ['*'])
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] hydrate(array $items)
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] lazy(int $chunkSize = 1000)
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CourseNoticeboard_C|CourseNoticeboard[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CourseNoticeboard make(array $attributes = [])
     * @method CourseNoticeboard newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CourseNoticeboard[]|_IH_CourseNoticeboard_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseNoticeboard restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CourseNoticeboard[]|_IH_CourseNoticeboard_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CourseNoticeboard sole(array|string $columns = ['*'])
     * @method CourseNoticeboard updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CourseNoticeboard_QB extends _BaseBuilder {}
    
    /**
     * @method CoursePersonalNote|null getOrPut($key, $value)
     * @method CoursePersonalNote|$this shift(int $count = 1)
     * @method CoursePersonalNote|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CoursePersonalNote|$this pop(int $count = 1)
     * @method CoursePersonalNote|null pull($key, \Closure $default = null)
     * @method CoursePersonalNote|null last(callable $callback = null, \Closure $default = null)
     * @method CoursePersonalNote|$this random(callable|int|null $number = null)
     * @method CoursePersonalNote|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CoursePersonalNote|null get($key, \Closure $default = null)
     * @method CoursePersonalNote|null first(callable $callback = null, \Closure $default = null)
     * @method CoursePersonalNote|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CoursePersonalNote|null find($key, $default = null)
     * @method CoursePersonalNote[] all()
     */
    class _IH_CoursePersonalNote_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CoursePersonalNote[][]|Collection<_IH_CoursePersonalNote_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CoursePersonalNote_QB whereId($value)
     * @method _IH_CoursePersonalNote_QB whereUserId($value)
     * @method _IH_CoursePersonalNote_QB whereCourseId($value)
     * @method _IH_CoursePersonalNote_QB whereTargetableId($value)
     * @method _IH_CoursePersonalNote_QB whereTargetableType($value)
     * @method _IH_CoursePersonalNote_QB whereNote($value)
     * @method _IH_CoursePersonalNote_QB whereAttachment($value)
     * @method _IH_CoursePersonalNote_QB whereCreatedAt($value)
     * @method CoursePersonalNote baseSole(array|string $columns = ['*'])
     * @method CoursePersonalNote create(array $attributes = [])
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] cursor()
     * @method CoursePersonalNote|null|_IH_CoursePersonalNote_C|CoursePersonalNote[] find($id, array|string $columns = ['*'])
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CoursePersonalNote|_IH_CoursePersonalNote_C|CoursePersonalNote[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CoursePersonalNote|_IH_CoursePersonalNote_C|CoursePersonalNote[] findOrFail($id, array|string $columns = ['*'])
     * @method CoursePersonalNote|_IH_CoursePersonalNote_C|CoursePersonalNote[] findOrNew($id, array|string $columns = ['*'])
     * @method CoursePersonalNote first(array|string $columns = ['*'])
     * @method CoursePersonalNote firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CoursePersonalNote firstOrCreate(array $attributes = [], array $values = [])
     * @method CoursePersonalNote firstOrFail(array|string $columns = ['*'])
     * @method CoursePersonalNote firstOrNew(array $attributes = [], array $values = [])
     * @method CoursePersonalNote firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CoursePersonalNote forceCreate(array $attributes)
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] get(array|string $columns = ['*'])
     * @method CoursePersonalNote getModel()
     * @method CoursePersonalNote[] getModels(array|string $columns = ['*'])
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] hydrate(array $items)
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] lazy(int $chunkSize = 1000)
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CoursePersonalNote_C|CoursePersonalNote[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CoursePersonalNote make(array $attributes = [])
     * @method CoursePersonalNote newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CoursePersonalNote[]|_IH_CoursePersonalNote_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CoursePersonalNote restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CoursePersonalNote[]|_IH_CoursePersonalNote_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CoursePersonalNote sole(array|string $columns = ['*'])
     * @method CoursePersonalNote updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CoursePersonalNote_QB extends _BaseBuilder {}
    
    /**
     * @method Currency|null getOrPut($key, $value)
     * @method Currency|$this shift(int $count = 1)
     * @method Currency|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Currency|$this pop(int $count = 1)
     * @method Currency|null pull($key, \Closure $default = null)
     * @method Currency|null last(callable $callback = null, \Closure $default = null)
     * @method Currency|$this random(callable|int|null $number = null)
     * @method Currency|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Currency|null get($key, \Closure $default = null)
     * @method Currency|null first(callable $callback = null, \Closure $default = null)
     * @method Currency|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Currency|null find($key, $default = null)
     * @method Currency[] all()
     */
    class _IH_Currency_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Currency[][]|Collection<_IH_Currency_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Currency_QB whereId($value)
     * @method _IH_Currency_QB whereCurrency($value)
     * @method _IH_Currency_QB whereCurrencyPosition($value)
     * @method _IH_Currency_QB whereCurrencySeparator($value)
     * @method _IH_Currency_QB whereCurrencyDecimal($value)
     * @method _IH_Currency_QB whereExchangeRate($value)
     * @method _IH_Currency_QB whereOrder($value)
     * @method _IH_Currency_QB whereCreatedAt($value)
     * @method Currency baseSole(array|string $columns = ['*'])
     * @method Currency create(array $attributes = [])
     * @method _IH_Currency_C|Currency[] cursor()
     * @method Currency|null|_IH_Currency_C|Currency[] find($id, array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Currency|_IH_Currency_C|Currency[] findOrFail($id, array|string $columns = ['*'])
     * @method Currency|_IH_Currency_C|Currency[] findOrNew($id, array|string $columns = ['*'])
     * @method Currency first(array|string $columns = ['*'])
     * @method Currency firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Currency firstOrCreate(array $attributes = [], array $values = [])
     * @method Currency firstOrFail(array|string $columns = ['*'])
     * @method Currency firstOrNew(array $attributes = [], array $values = [])
     * @method Currency firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Currency forceCreate(array $attributes)
     * @method _IH_Currency_C|Currency[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Currency_C|Currency[] get(array|string $columns = ['*'])
     * @method Currency getModel()
     * @method Currency[] getModels(array|string $columns = ['*'])
     * @method _IH_Currency_C|Currency[] hydrate(array $items)
     * @method _IH_Currency_C|Currency[] lazy(int $chunkSize = 1000)
     * @method _IH_Currency_C|Currency[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Currency_C|Currency[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Currency make(array $attributes = [])
     * @method Currency newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Currency[]|_IH_Currency_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Currency restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Currency[]|_IH_Currency_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Currency sole(array|string $columns = ['*'])
     * @method Currency updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Currency_QB extends _BaseBuilder {}
    
    /**
     * @method DeleteAccountRequest|null getOrPut($key, $value)
     * @method DeleteAccountRequest|$this shift(int $count = 1)
     * @method DeleteAccountRequest|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DeleteAccountRequest|$this pop(int $count = 1)
     * @method DeleteAccountRequest|null pull($key, \Closure $default = null)
     * @method DeleteAccountRequest|null last(callable $callback = null, \Closure $default = null)
     * @method DeleteAccountRequest|$this random(callable|int|null $number = null)
     * @method DeleteAccountRequest|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DeleteAccountRequest|null get($key, \Closure $default = null)
     * @method DeleteAccountRequest|null first(callable $callback = null, \Closure $default = null)
     * @method DeleteAccountRequest|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DeleteAccountRequest|null find($key, $default = null)
     * @method DeleteAccountRequest[] all()
     */
    class _IH_DeleteAccountRequest_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DeleteAccountRequest[][]|Collection<_IH_DeleteAccountRequest_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DeleteAccountRequest_QB whereId($value)
     * @method _IH_DeleteAccountRequest_QB whereUserId($value)
     * @method _IH_DeleteAccountRequest_QB whereCreatedAt($value)
     * @method DeleteAccountRequest baseSole(array|string $columns = ['*'])
     * @method DeleteAccountRequest create(array $attributes = [])
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] cursor()
     * @method DeleteAccountRequest|null|_IH_DeleteAccountRequest_C|DeleteAccountRequest[] find($id, array|string $columns = ['*'])
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DeleteAccountRequest|_IH_DeleteAccountRequest_C|DeleteAccountRequest[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DeleteAccountRequest|_IH_DeleteAccountRequest_C|DeleteAccountRequest[] findOrFail($id, array|string $columns = ['*'])
     * @method DeleteAccountRequest|_IH_DeleteAccountRequest_C|DeleteAccountRequest[] findOrNew($id, array|string $columns = ['*'])
     * @method DeleteAccountRequest first(array|string $columns = ['*'])
     * @method DeleteAccountRequest firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DeleteAccountRequest firstOrCreate(array $attributes = [], array $values = [])
     * @method DeleteAccountRequest firstOrFail(array|string $columns = ['*'])
     * @method DeleteAccountRequest firstOrNew(array $attributes = [], array $values = [])
     * @method DeleteAccountRequest firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DeleteAccountRequest forceCreate(array $attributes)
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] get(array|string $columns = ['*'])
     * @method DeleteAccountRequest getModel()
     * @method DeleteAccountRequest[] getModels(array|string $columns = ['*'])
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] hydrate(array $items)
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] lazy(int $chunkSize = 1000)
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DeleteAccountRequest_C|DeleteAccountRequest[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DeleteAccountRequest make(array $attributes = [])
     * @method DeleteAccountRequest newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DeleteAccountRequest[]|_IH_DeleteAccountRequest_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeleteAccountRequest restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DeleteAccountRequest[]|_IH_DeleteAccountRequest_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DeleteAccountRequest sole(array|string $columns = ['*'])
     * @method DeleteAccountRequest updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DeleteAccountRequest_QB extends _BaseBuilder {}
    
    /**
     * @method DiscountBundle|null getOrPut($key, $value)
     * @method DiscountBundle|$this shift(int $count = 1)
     * @method DiscountBundle|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountBundle|$this pop(int $count = 1)
     * @method DiscountBundle|null pull($key, \Closure $default = null)
     * @method DiscountBundle|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountBundle|$this random(callable|int|null $number = null)
     * @method DiscountBundle|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountBundle|null get($key, \Closure $default = null)
     * @method DiscountBundle|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountBundle|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountBundle|null find($key, $default = null)
     * @method DiscountBundle[] all()
     */
    class _IH_DiscountBundle_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountBundle[][]|Collection<_IH_DiscountBundle_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DiscountBundle_QB whereId($value)
     * @method _IH_DiscountBundle_QB whereDiscountId($value)
     * @method _IH_DiscountBundle_QB whereBundleId($value)
     * @method _IH_DiscountBundle_QB whereCreatedAt($value)
     * @method DiscountBundle baseSole(array|string $columns = ['*'])
     * @method DiscountBundle create(array $attributes = [])
     * @method _IH_DiscountBundle_C|DiscountBundle[] cursor()
     * @method DiscountBundle|null|_IH_DiscountBundle_C|DiscountBundle[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountBundle_C|DiscountBundle[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountBundle|_IH_DiscountBundle_C|DiscountBundle[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountBundle|_IH_DiscountBundle_C|DiscountBundle[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountBundle|_IH_DiscountBundle_C|DiscountBundle[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountBundle first(array|string $columns = ['*'])
     * @method DiscountBundle firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountBundle firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountBundle firstOrFail(array|string $columns = ['*'])
     * @method DiscountBundle firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountBundle firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountBundle forceCreate(array $attributes)
     * @method _IH_DiscountBundle_C|DiscountBundle[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountBundle_C|DiscountBundle[] get(array|string $columns = ['*'])
     * @method DiscountBundle getModel()
     * @method DiscountBundle[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountBundle_C|DiscountBundle[] hydrate(array $items)
     * @method _IH_DiscountBundle_C|DiscountBundle[] lazy(int $chunkSize = 1000)
     * @method _IH_DiscountBundle_C|DiscountBundle[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DiscountBundle_C|DiscountBundle[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DiscountBundle make(array $attributes = [])
     * @method DiscountBundle newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountBundle[]|_IH_DiscountBundle_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountBundle restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DiscountBundle[]|_IH_DiscountBundle_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountBundle sole(array|string $columns = ['*'])
     * @method DiscountBundle updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountBundle_QB extends _BaseBuilder {}
    
    /**
     * @method DiscountCategory|null getOrPut($key, $value)
     * @method DiscountCategory|$this shift(int $count = 1)
     * @method DiscountCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCategory|$this pop(int $count = 1)
     * @method DiscountCategory|null pull($key, \Closure $default = null)
     * @method DiscountCategory|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountCategory|$this random(callable|int|null $number = null)
     * @method DiscountCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCategory|null get($key, \Closure $default = null)
     * @method DiscountCategory|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountCategory|null find($key, $default = null)
     * @method DiscountCategory[] all()
     */
    class _IH_DiscountCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountCategory[][]|Collection<_IH_DiscountCategory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DiscountCategory_QB whereId($value)
     * @method _IH_DiscountCategory_QB whereDiscountId($value)
     * @method _IH_DiscountCategory_QB whereCategoryId($value)
     * @method _IH_DiscountCategory_QB whereCreatedAt($value)
     * @method DiscountCategory baseSole(array|string $columns = ['*'])
     * @method DiscountCategory create(array $attributes = [])
     * @method _IH_DiscountCategory_C|DiscountCategory[] cursor()
     * @method DiscountCategory|null|_IH_DiscountCategory_C|DiscountCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountCategory_C|DiscountCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountCategory|_IH_DiscountCategory_C|DiscountCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCategory|_IH_DiscountCategory_C|DiscountCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountCategory|_IH_DiscountCategory_C|DiscountCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountCategory first(array|string $columns = ['*'])
     * @method DiscountCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountCategory firstOrFail(array|string $columns = ['*'])
     * @method DiscountCategory firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountCategory forceCreate(array $attributes)
     * @method _IH_DiscountCategory_C|DiscountCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountCategory_C|DiscountCategory[] get(array|string $columns = ['*'])
     * @method DiscountCategory getModel()
     * @method DiscountCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountCategory_C|DiscountCategory[] hydrate(array $items)
     * @method _IH_DiscountCategory_C|DiscountCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_DiscountCategory_C|DiscountCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DiscountCategory_C|DiscountCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DiscountCategory make(array $attributes = [])
     * @method DiscountCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountCategory[]|_IH_DiscountCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountCategory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DiscountCategory[]|_IH_DiscountCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountCategory sole(array|string $columns = ['*'])
     * @method DiscountCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountCategory_QB extends _BaseBuilder {}
    
    /**
     * @method DiscountCourse|null getOrPut($key, $value)
     * @method DiscountCourse|$this shift(int $count = 1)
     * @method DiscountCourse|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCourse|$this pop(int $count = 1)
     * @method DiscountCourse|null pull($key, \Closure $default = null)
     * @method DiscountCourse|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountCourse|$this random(callable|int|null $number = null)
     * @method DiscountCourse|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountCourse|null get($key, \Closure $default = null)
     * @method DiscountCourse|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountCourse|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountCourse|null find($key, $default = null)
     * @method DiscountCourse[] all()
     */
    class _IH_DiscountCourse_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountCourse[][]|Collection<_IH_DiscountCourse_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DiscountCourse_QB whereId($value)
     * @method _IH_DiscountCourse_QB whereDiscountId($value)
     * @method _IH_DiscountCourse_QB whereCourseId($value)
     * @method _IH_DiscountCourse_QB whereCreatedAt($value)
     * @method DiscountCourse baseSole(array|string $columns = ['*'])
     * @method DiscountCourse create(array $attributes = [])
     * @method _IH_DiscountCourse_C|DiscountCourse[] cursor()
     * @method DiscountCourse|null|_IH_DiscountCourse_C|DiscountCourse[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountCourse_C|DiscountCourse[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountCourse|_IH_DiscountCourse_C|DiscountCourse[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCourse|_IH_DiscountCourse_C|DiscountCourse[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountCourse|_IH_DiscountCourse_C|DiscountCourse[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountCourse first(array|string $columns = ['*'])
     * @method DiscountCourse firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountCourse firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountCourse firstOrFail(array|string $columns = ['*'])
     * @method DiscountCourse firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountCourse firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountCourse forceCreate(array $attributes)
     * @method _IH_DiscountCourse_C|DiscountCourse[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountCourse_C|DiscountCourse[] get(array|string $columns = ['*'])
     * @method DiscountCourse getModel()
     * @method DiscountCourse[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountCourse_C|DiscountCourse[] hydrate(array $items)
     * @method _IH_DiscountCourse_C|DiscountCourse[] lazy(int $chunkSize = 1000)
     * @method _IH_DiscountCourse_C|DiscountCourse[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DiscountCourse_C|DiscountCourse[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DiscountCourse make(array $attributes = [])
     * @method DiscountCourse newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountCourse[]|_IH_DiscountCourse_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountCourse restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DiscountCourse[]|_IH_DiscountCourse_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountCourse sole(array|string $columns = ['*'])
     * @method DiscountCourse updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountCourse_QB extends _BaseBuilder {}
    
    /**
     * @method DiscountGroup|null getOrPut($key, $value)
     * @method DiscountGroup|$this shift(int $count = 1)
     * @method DiscountGroup|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountGroup|$this pop(int $count = 1)
     * @method DiscountGroup|null pull($key, \Closure $default = null)
     * @method DiscountGroup|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountGroup|$this random(callable|int|null $number = null)
     * @method DiscountGroup|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountGroup|null get($key, \Closure $default = null)
     * @method DiscountGroup|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountGroup|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountGroup|null find($key, $default = null)
     * @method DiscountGroup[] all()
     */
    class _IH_DiscountGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountGroup[][]|Collection<_IH_DiscountGroup_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DiscountGroup_QB whereId($value)
     * @method _IH_DiscountGroup_QB whereDiscountId($value)
     * @method _IH_DiscountGroup_QB whereGroupId($value)
     * @method _IH_DiscountGroup_QB whereCreatedAt($value)
     * @method DiscountGroup baseSole(array|string $columns = ['*'])
     * @method DiscountGroup create(array $attributes = [])
     * @method _IH_DiscountGroup_C|DiscountGroup[] cursor()
     * @method DiscountGroup|null|_IH_DiscountGroup_C|DiscountGroup[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountGroup_C|DiscountGroup[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountGroup|_IH_DiscountGroup_C|DiscountGroup[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountGroup|_IH_DiscountGroup_C|DiscountGroup[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountGroup|_IH_DiscountGroup_C|DiscountGroup[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountGroup first(array|string $columns = ['*'])
     * @method DiscountGroup firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountGroup firstOrFail(array|string $columns = ['*'])
     * @method DiscountGroup firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountGroup forceCreate(array $attributes)
     * @method _IH_DiscountGroup_C|DiscountGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountGroup_C|DiscountGroup[] get(array|string $columns = ['*'])
     * @method DiscountGroup getModel()
     * @method DiscountGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountGroup_C|DiscountGroup[] hydrate(array $items)
     * @method _IH_DiscountGroup_C|DiscountGroup[] lazy(int $chunkSize = 1000)
     * @method _IH_DiscountGroup_C|DiscountGroup[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DiscountGroup_C|DiscountGroup[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DiscountGroup make(array $attributes = [])
     * @method DiscountGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountGroup[]|_IH_DiscountGroup_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountGroup restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DiscountGroup[]|_IH_DiscountGroup_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountGroup sole(array|string $columns = ['*'])
     * @method DiscountGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountGroup_QB extends _BaseBuilder {}
    
    /**
     * @method DiscountUser|null getOrPut($key, $value)
     * @method DiscountUser|$this shift(int $count = 1)
     * @method DiscountUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountUser|$this pop(int $count = 1)
     * @method DiscountUser|null pull($key, \Closure $default = null)
     * @method DiscountUser|null last(callable $callback = null, \Closure $default = null)
     * @method DiscountUser|$this random(callable|int|null $number = null)
     * @method DiscountUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method DiscountUser|null get($key, \Closure $default = null)
     * @method DiscountUser|null first(callable $callback = null, \Closure $default = null)
     * @method DiscountUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method DiscountUser|null find($key, $default = null)
     * @method DiscountUser[] all()
     */
    class _IH_DiscountUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @return DiscountUser[][]|Collection<_IH_DiscountUser_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_DiscountUser_QB whereId($value)
     * @method _IH_DiscountUser_QB whereDiscountId($value)
     * @method _IH_DiscountUser_QB whereUserId($value)
     * @method _IH_DiscountUser_QB whereCreatedAt($value)
     * @method _IH_DiscountUser_QB whereCount($value)
     * @method DiscountUser baseSole(array|string $columns = ['*'])
     * @method DiscountUser create(array $attributes = [])
     * @method _IH_DiscountUser_C|DiscountUser[] cursor()
     * @method DiscountUser|null|_IH_DiscountUser_C|DiscountUser[] find($id, array|string $columns = ['*'])
     * @method _IH_DiscountUser_C|DiscountUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method DiscountUser|_IH_DiscountUser_C|DiscountUser[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountUser|_IH_DiscountUser_C|DiscountUser[] findOrFail($id, array|string $columns = ['*'])
     * @method DiscountUser|_IH_DiscountUser_C|DiscountUser[] findOrNew($id, array|string $columns = ['*'])
     * @method DiscountUser first(array|string $columns = ['*'])
     * @method DiscountUser firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method DiscountUser firstOrCreate(array $attributes = [], array $values = [])
     * @method DiscountUser firstOrFail(array|string $columns = ['*'])
     * @method DiscountUser firstOrNew(array $attributes = [], array $values = [])
     * @method DiscountUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method DiscountUser forceCreate(array $attributes)
     * @method _IH_DiscountUser_C|DiscountUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_DiscountUser_C|DiscountUser[] get(array|string $columns = ['*'])
     * @method DiscountUser getModel()
     * @method DiscountUser[] getModels(array|string $columns = ['*'])
     * @method _IH_DiscountUser_C|DiscountUser[] hydrate(array $items)
     * @method _IH_DiscountUser_C|DiscountUser[] lazy(int $chunkSize = 1000)
     * @method _IH_DiscountUser_C|DiscountUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_DiscountUser_C|DiscountUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method DiscountUser make(array $attributes = [])
     * @method DiscountUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|DiscountUser[]|_IH_DiscountUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountUser restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|DiscountUser[]|_IH_DiscountUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method DiscountUser sole(array|string $columns = ['*'])
     * @method DiscountUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_DiscountUser_QB extends _BaseBuilder {}
    
    /**
     * @method Discount|null getOrPut($key, $value)
     * @method Discount|$this shift(int $count = 1)
     * @method Discount|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Discount|$this pop(int $count = 1)
     * @method Discount|null pull($key, \Closure $default = null)
     * @method Discount|null last(callable $callback = null, \Closure $default = null)
     * @method Discount|$this random(callable|int|null $number = null)
     * @method Discount|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Discount|null get($key, \Closure $default = null)
     * @method Discount|null first(callable $callback = null, \Closure $default = null)
     * @method Discount|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Discount|null find($key, $default = null)
     * @method Discount[] all()
     */
    class _IH_Discount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Discount[][]|Collection<_IH_Discount_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Discount_QB whereId($value)
     * @method _IH_Discount_QB whereCreatorId($value)
     * @method _IH_Discount_QB whereName($value)
     * @method _IH_Discount_QB wherePercent($value)
     * @method _IH_Discount_QB whereAmount($value)
     * @method _IH_Discount_QB whereCount($value)
     * @method _IH_Discount_QB whereCreatedAt($value)
     * @method _IH_Discount_QB whereExpiredAt($value)
     * @method _IH_Discount_QB whereTitle($value)
     * @method _IH_Discount_QB whereCode($value)
     * @method _IH_Discount_QB whereType($value)
     * @method _IH_Discount_QB whereSubtitle($value)
     * @method _IH_Discount_QB whereDiscountType($value)
     * @method _IH_Discount_QB whereSource($value)
     * @method _IH_Discount_QB whereMaxAmount($value)
     * @method _IH_Discount_QB whereMinimumOrder($value)
     * @method _IH_Discount_QB whereForFirstPurchase($value)
     * @method _IH_Discount_QB wherePrivate($value)
     * @method _IH_Discount_QB whereProductType($value)
     * @method Discount baseSole(array|string $columns = ['*'])
     * @method Discount create(array $attributes = [])
     * @method _IH_Discount_C|Discount[] cursor()
     * @method Discount|null|_IH_Discount_C|Discount[] find($id, array|string $columns = ['*'])
     * @method _IH_Discount_C|Discount[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Discount|_IH_Discount_C|Discount[] findOrFail($id, array|string $columns = ['*'])
     * @method Discount|_IH_Discount_C|Discount[] findOrNew($id, array|string $columns = ['*'])
     * @method Discount first(array|string $columns = ['*'])
     * @method Discount firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Discount firstOrCreate(array $attributes = [], array $values = [])
     * @method Discount firstOrFail(array|string $columns = ['*'])
     * @method Discount firstOrNew(array $attributes = [], array $values = [])
     * @method Discount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Discount forceCreate(array $attributes)
     * @method _IH_Discount_C|Discount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Discount_C|Discount[] get(array|string $columns = ['*'])
     * @method Discount getModel()
     * @method Discount[] getModels(array|string $columns = ['*'])
     * @method _IH_Discount_C|Discount[] hydrate(array $items)
     * @method _IH_Discount_C|Discount[] lazy(int $chunkSize = 1000)
     * @method _IH_Discount_C|Discount[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Discount_C|Discount[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Discount make(array $attributes = [])
     * @method Discount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Discount[]|_IH_Discount_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Discount restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Discount[]|_IH_Discount_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Discount sole(array|string $columns = ['*'])
     * @method Discount updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Discount_QB extends _BaseBuilder {}
    
    /**
     * @method Faq|null getOrPut($key, $value)
     * @method Faq|$this shift(int $count = 1)
     * @method Faq|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Faq|$this pop(int $count = 1)
     * @method Faq|null pull($key, \Closure $default = null)
     * @method Faq|null last(callable $callback = null, \Closure $default = null)
     * @method Faq|$this random(callable|int|null $number = null)
     * @method Faq|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Faq|null get($key, \Closure $default = null)
     * @method Faq|null first(callable $callback = null, \Closure $default = null)
     * @method Faq|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Faq|null find($key, $default = null)
     * @method Faq[] all()
     */
    class _IH_Faq_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Faq[][]|Collection<_IH_Faq_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Faq_QB whereId($value)
     * @method _IH_Faq_QB whereWebinarId($value)
     * @method _IH_Faq_QB whereCreatorId($value)
     * @method _IH_Faq_QB whereCreatedAt($value)
     * @method _IH_Faq_QB whereUpdatedAt($value)
     * @method _IH_Faq_QB whereOrder($value)
     * @method _IH_Faq_QB whereBundleId($value)
     * @method _IH_Faq_QB whereUpcomingCourseId($value)
     * @method Faq baseSole(array|string $columns = ['*'])
     * @method Faq create(array $attributes = [])
     * @method _IH_Faq_C|Faq[] cursor()
     * @method Faq|null|_IH_Faq_C|Faq[] find($id, array|string $columns = ['*'])
     * @method _IH_Faq_C|Faq[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Faq|_IH_Faq_C|Faq[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Faq|_IH_Faq_C|Faq[] findOrFail($id, array|string $columns = ['*'])
     * @method Faq|_IH_Faq_C|Faq[] findOrNew($id, array|string $columns = ['*'])
     * @method Faq first(array|string $columns = ['*'])
     * @method Faq firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Faq firstOrCreate(array $attributes = [], array $values = [])
     * @method Faq firstOrFail(array|string $columns = ['*'])
     * @method Faq firstOrNew(array $attributes = [], array $values = [])
     * @method Faq firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Faq forceCreate(array $attributes)
     * @method _IH_Faq_C|Faq[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Faq_C|Faq[] get(array|string $columns = ['*'])
     * @method Faq getModel()
     * @method Faq[] getModels(array|string $columns = ['*'])
     * @method _IH_Faq_C|Faq[] hydrate(array $items)
     * @method _IH_Faq_C|Faq[] lazy(int $chunkSize = 1000)
     * @method _IH_Faq_C|Faq[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Faq_C|Faq[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Faq make(array $attributes = [])
     * @method Faq newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Faq[]|_IH_Faq_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Faq restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Faq[]|_IH_Faq_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Faq sole(array|string $columns = ['*'])
     * @method Faq updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Faq_QB listsTranslations(string $translationField)
     * @method _IH_Faq_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Faq_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Faq_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Faq_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Faq_QB translated()
     * @method _IH_Faq_QB translatedIn(null|string $locale = null)
     * @method _IH_Faq_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Faq_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Faq_QB withTranslation()
     */
    class _IH_Faq_QB extends _BaseBuilder {}
    
    /**
     * @method Favorite|null getOrPut($key, $value)
     * @method Favorite|$this shift(int $count = 1)
     * @method Favorite|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Favorite|$this pop(int $count = 1)
     * @method Favorite|null pull($key, \Closure $default = null)
     * @method Favorite|null last(callable $callback = null, \Closure $default = null)
     * @method Favorite|$this random(callable|int|null $number = null)
     * @method Favorite|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Favorite|null get($key, \Closure $default = null)
     * @method Favorite|null first(callable $callback = null, \Closure $default = null)
     * @method Favorite|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Favorite|null find($key, $default = null)
     * @method Favorite[] all()
     */
    class _IH_Favorite_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Favorite[][]|Collection<_IH_Favorite_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Favorite_QB whereId($value)
     * @method _IH_Favorite_QB whereUserId($value)
     * @method _IH_Favorite_QB whereCreatedAt($value)
     * @method _IH_Favorite_QB whereWebinarId($value)
     * @method _IH_Favorite_QB whereBundleId($value)
     * @method _IH_Favorite_QB whereUpcomingCourseId($value)
     * @method Favorite baseSole(array|string $columns = ['*'])
     * @method Favorite create(array $attributes = [])
     * @method _IH_Favorite_C|Favorite[] cursor()
     * @method Favorite|null|_IH_Favorite_C|Favorite[] find($id, array|string $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrFail($id, array|string $columns = ['*'])
     * @method Favorite|_IH_Favorite_C|Favorite[] findOrNew($id, array|string $columns = ['*'])
     * @method Favorite first(array|string $columns = ['*'])
     * @method Favorite firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Favorite firstOrCreate(array $attributes = [], array $values = [])
     * @method Favorite firstOrFail(array|string $columns = ['*'])
     * @method Favorite firstOrNew(array $attributes = [], array $values = [])
     * @method Favorite firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Favorite forceCreate(array $attributes)
     * @method _IH_Favorite_C|Favorite[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Favorite_C|Favorite[] get(array|string $columns = ['*'])
     * @method Favorite getModel()
     * @method Favorite[] getModels(array|string $columns = ['*'])
     * @method _IH_Favorite_C|Favorite[] hydrate(array $items)
     * @method _IH_Favorite_C|Favorite[] lazy(int $chunkSize = 1000)
     * @method _IH_Favorite_C|Favorite[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Favorite_C|Favorite[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Favorite make(array $attributes = [])
     * @method Favorite newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Favorite[]|_IH_Favorite_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Favorite restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Favorite[]|_IH_Favorite_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Favorite sole(array|string $columns = ['*'])
     * @method Favorite updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Favorite_QB extends _BaseBuilder {}
    
    /**
     * @method FeatureWebinar|null getOrPut($key, $value)
     * @method FeatureWebinar|$this shift(int $count = 1)
     * @method FeatureWebinar|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FeatureWebinar|$this pop(int $count = 1)
     * @method FeatureWebinar|null pull($key, \Closure $default = null)
     * @method FeatureWebinar|null last(callable $callback = null, \Closure $default = null)
     * @method FeatureWebinar|$this random(callable|int|null $number = null)
     * @method FeatureWebinar|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FeatureWebinar|null get($key, \Closure $default = null)
     * @method FeatureWebinar|null first(callable $callback = null, \Closure $default = null)
     * @method FeatureWebinar|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FeatureWebinar|null find($key, $default = null)
     * @method FeatureWebinar[] all()
     */
    class _IH_FeatureWebinar_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FeatureWebinar[][]|Collection<_IH_FeatureWebinar_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FeatureWebinar_QB whereId($value)
     * @method _IH_FeatureWebinar_QB whereWebinarId($value)
     * @method _IH_FeatureWebinar_QB wherePage($value)
     * @method _IH_FeatureWebinar_QB whereStatus($value)
     * @method _IH_FeatureWebinar_QB whereUpdatedAt($value)
     * @method FeatureWebinar baseSole(array|string $columns = ['*'])
     * @method FeatureWebinar create(array $attributes = [])
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] cursor()
     * @method FeatureWebinar|null|_IH_FeatureWebinar_C|FeatureWebinar[] find($id, array|string $columns = ['*'])
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FeatureWebinar|_IH_FeatureWebinar_C|FeatureWebinar[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FeatureWebinar|_IH_FeatureWebinar_C|FeatureWebinar[] findOrFail($id, array|string $columns = ['*'])
     * @method FeatureWebinar|_IH_FeatureWebinar_C|FeatureWebinar[] findOrNew($id, array|string $columns = ['*'])
     * @method FeatureWebinar first(array|string $columns = ['*'])
     * @method FeatureWebinar firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FeatureWebinar firstOrCreate(array $attributes = [], array $values = [])
     * @method FeatureWebinar firstOrFail(array|string $columns = ['*'])
     * @method FeatureWebinar firstOrNew(array $attributes = [], array $values = [])
     * @method FeatureWebinar firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FeatureWebinar forceCreate(array $attributes)
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] get(array|string $columns = ['*'])
     * @method FeatureWebinar getModel()
     * @method FeatureWebinar[] getModels(array|string $columns = ['*'])
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] hydrate(array $items)
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] lazy(int $chunkSize = 1000)
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FeatureWebinar_C|FeatureWebinar[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FeatureWebinar make(array $attributes = [])
     * @method FeatureWebinar newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FeatureWebinar[]|_IH_FeatureWebinar_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FeatureWebinar restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FeatureWebinar[]|_IH_FeatureWebinar_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FeatureWebinar sole(array|string $columns = ['*'])
     * @method FeatureWebinar updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FeatureWebinar_QB listsTranslations(string $translationField)
     * @method _IH_FeatureWebinar_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_FeatureWebinar_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_FeatureWebinar_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FeatureWebinar_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_FeatureWebinar_QB translated()
     * @method _IH_FeatureWebinar_QB translatedIn(null|string $locale = null)
     * @method _IH_FeatureWebinar_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_FeatureWebinar_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FeatureWebinar_QB withTranslation()
     */
    class _IH_FeatureWebinar_QB extends _BaseBuilder {}
    
    /**
     * @method File|null getOrPut($key, $value)
     * @method File|$this shift(int $count = 1)
     * @method File|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method File|$this pop(int $count = 1)
     * @method File|null pull($key, \Closure $default = null)
     * @method File|null last(callable $callback = null, \Closure $default = null)
     * @method File|$this random(callable|int|null $number = null)
     * @method File|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method File|null get($key, \Closure $default = null)
     * @method File|null first(callable $callback = null, \Closure $default = null)
     * @method File|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method File|null find($key, $default = null)
     * @method File[] all()
     */
    class _IH_File_C extends _BaseCollection {
        /**
         * @param int $size
         * @return File[][]|Collection<_IH_File_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_File_QB whereId($value)
     * @method _IH_File_QB whereAccessibility($value)
     * @method _IH_File_QB whereFile($value)
     * @method _IH_File_QB whereVolume($value)
     * @method _IH_File_QB whereFileType($value)
     * @method _IH_File_QB whereCreatedAt($value)
     * @method _IH_File_QB whereUpdatedAt($value)
     * @method _IH_File_QB whereDeletedAt($value)
     * @method _IH_File_QB whereWebinarId($value)
     * @method _IH_File_QB whereCreatorId($value)
     * @method _IH_File_QB whereDownloadable($value)
     * @method _IH_File_QB whereOrder($value)
     * @method _IH_File_QB whereStorage($value)
     * @method _IH_File_QB whereChapterId($value)
     * @method _IH_File_QB whereStatus($value)
     * @method _IH_File_QB whereInteractiveType($value)
     * @method _IH_File_QB whereInteractiveFileName($value)
     * @method _IH_File_QB whereInteractiveFilePath($value)
     * @method _IH_File_QB whereCheckPreviousParts($value)
     * @method _IH_File_QB whereAccessAfterDay($value)
     * @method _IH_File_QB whereOnlineViewer($value)
     * @method _IH_File_QB whereSecureHostUploadType($value)
     * @method File baseSole(array|string $columns = ['*'])
     * @method File create(array $attributes = [])
     * @method _IH_File_C|File[] cursor()
     * @method File|null|_IH_File_C|File[] find($id, array|string $columns = ['*'])
     * @method _IH_File_C|File[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method File|_IH_File_C|File[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method File|_IH_File_C|File[] findOrFail($id, array|string $columns = ['*'])
     * @method File|_IH_File_C|File[] findOrNew($id, array|string $columns = ['*'])
     * @method File first(array|string $columns = ['*'])
     * @method File firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method File firstOrCreate(array $attributes = [], array $values = [])
     * @method File firstOrFail(array|string $columns = ['*'])
     * @method File firstOrNew(array $attributes = [], array $values = [])
     * @method File firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method File forceCreate(array $attributes)
     * @method _IH_File_C|File[] fromQuery(string $query, array $bindings = [])
     * @method _IH_File_C|File[] get(array|string $columns = ['*'])
     * @method File getModel()
     * @method File[] getModels(array|string $columns = ['*'])
     * @method _IH_File_C|File[] hydrate(array $items)
     * @method _IH_File_C|File[] lazy(int $chunkSize = 1000)
     * @method _IH_File_C|File[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_File_C|File[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method File make(array $attributes = [])
     * @method File newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|File[]|_IH_File_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method File restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|File[]|_IH_File_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method File sole(array|string $columns = ['*'])
     * @method File updateOrCreate(array $attributes, array $values = [])
     * @method _IH_File_QB listsTranslations(string $translationField)
     * @method _IH_File_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_File_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_File_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_File_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_File_QB translated()
     * @method _IH_File_QB translatedIn(null|string $locale = null)
     * @method _IH_File_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_File_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_File_QB withTranslation()
     */
    class _IH_File_QB extends _BaseBuilder {}
    
    /**
     * @method FilterOption|null getOrPut($key, $value)
     * @method FilterOption|$this shift(int $count = 1)
     * @method FilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FilterOption|$this pop(int $count = 1)
     * @method FilterOption|null pull($key, \Closure $default = null)
     * @method FilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method FilterOption|$this random(callable|int|null $number = null)
     * @method FilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FilterOption|null get($key, \Closure $default = null)
     * @method FilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method FilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FilterOption|null find($key, $default = null)
     * @method FilterOption[] all()
     */
    class _IH_FilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilterOption[][]|Collection<_IH_FilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilterOption_QB whereId($value)
     * @method _IH_FilterOption_QB whereFilterId($value)
     * @method _IH_FilterOption_QB whereOrder($value)
     * @method FilterOption baseSole(array|string $columns = ['*'])
     * @method FilterOption create(array $attributes = [])
     * @method _IH_FilterOption_C|FilterOption[] cursor()
     * @method FilterOption|null|_IH_FilterOption_C|FilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_FilterOption_C|FilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FilterOption|_IH_FilterOption_C|FilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterOption|_IH_FilterOption_C|FilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method FilterOption|_IH_FilterOption_C|FilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method FilterOption first(array|string $columns = ['*'])
     * @method FilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method FilterOption firstOrFail(array|string $columns = ['*'])
     * @method FilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method FilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilterOption forceCreate(array $attributes)
     * @method _IH_FilterOption_C|FilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilterOption_C|FilterOption[] get(array|string $columns = ['*'])
     * @method FilterOption getModel()
     * @method FilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_FilterOption_C|FilterOption[] hydrate(array $items)
     * @method _IH_FilterOption_C|FilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_FilterOption_C|FilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FilterOption_C|FilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FilterOption make(array $attributes = [])
     * @method FilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilterOption[]|_IH_FilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FilterOption[]|_IH_FilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterOption sole(array|string $columns = ['*'])
     * @method FilterOption updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FilterOption_QB listsTranslations(string $translationField)
     * @method _IH_FilterOption_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_FilterOption_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_FilterOption_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FilterOption_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_FilterOption_QB translated()
     * @method _IH_FilterOption_QB translatedIn(null|string $locale = null)
     * @method _IH_FilterOption_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_FilterOption_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FilterOption_QB withTranslation()
     */
    class _IH_FilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method Filter|null getOrPut($key, $value)
     * @method Filter|$this shift(int $count = 1)
     * @method Filter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Filter|$this pop(int $count = 1)
     * @method Filter|null pull($key, \Closure $default = null)
     * @method Filter|null last(callable $callback = null, \Closure $default = null)
     * @method Filter|$this random(callable|int|null $number = null)
     * @method Filter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Filter|null get($key, \Closure $default = null)
     * @method Filter|null first(callable $callback = null, \Closure $default = null)
     * @method Filter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Filter|null find($key, $default = null)
     * @method Filter[] all()
     */
    class _IH_Filter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Filter[][]|Collection<_IH_Filter_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Filter_QB whereId($value)
     * @method _IH_Filter_QB whereCategoryId($value)
     * @method Filter baseSole(array|string $columns = ['*'])
     * @method Filter create(array $attributes = [])
     * @method _IH_Filter_C|Filter[] cursor()
     * @method Filter|null|_IH_Filter_C|Filter[] find($id, array|string $columns = ['*'])
     * @method _IH_Filter_C|Filter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Filter|_IH_Filter_C|Filter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Filter|_IH_Filter_C|Filter[] findOrFail($id, array|string $columns = ['*'])
     * @method Filter|_IH_Filter_C|Filter[] findOrNew($id, array|string $columns = ['*'])
     * @method Filter first(array|string $columns = ['*'])
     * @method Filter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Filter firstOrCreate(array $attributes = [], array $values = [])
     * @method Filter firstOrFail(array|string $columns = ['*'])
     * @method Filter firstOrNew(array $attributes = [], array $values = [])
     * @method Filter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Filter forceCreate(array $attributes)
     * @method _IH_Filter_C|Filter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Filter_C|Filter[] get(array|string $columns = ['*'])
     * @method Filter getModel()
     * @method Filter[] getModels(array|string $columns = ['*'])
     * @method _IH_Filter_C|Filter[] hydrate(array $items)
     * @method _IH_Filter_C|Filter[] lazy(int $chunkSize = 1000)
     * @method _IH_Filter_C|Filter[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Filter_C|Filter[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Filter make(array $attributes = [])
     * @method Filter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Filter[]|_IH_Filter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Filter restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Filter[]|_IH_Filter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Filter sole(array|string $columns = ['*'])
     * @method Filter updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Filter_QB listsTranslations(string $translationField)
     * @method _IH_Filter_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Filter_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Filter_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Filter_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Filter_QB translated()
     * @method _IH_Filter_QB translatedIn(null|string $locale = null)
     * @method _IH_Filter_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Filter_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Filter_QB withTranslation()
     */
    class _IH_Filter_QB extends _BaseBuilder {}
    
    /**
     * @method FloatingBar|null getOrPut($key, $value)
     * @method FloatingBar|$this shift(int $count = 1)
     * @method FloatingBar|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FloatingBar|$this pop(int $count = 1)
     * @method FloatingBar|null pull($key, \Closure $default = null)
     * @method FloatingBar|null last(callable $callback = null, \Closure $default = null)
     * @method FloatingBar|$this random(callable|int|null $number = null)
     * @method FloatingBar|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FloatingBar|null get($key, \Closure $default = null)
     * @method FloatingBar|null first(callable $callback = null, \Closure $default = null)
     * @method FloatingBar|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FloatingBar|null find($key, $default = null)
     * @method FloatingBar[] all()
     */
    class _IH_FloatingBar_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FloatingBar[][]|Collection<_IH_FloatingBar_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FloatingBar_QB whereId($value)
     * @method _IH_FloatingBar_QB whereStartAt($value)
     * @method _IH_FloatingBar_QB whereEndAt($value)
     * @method _IH_FloatingBar_QB whereTitleColor($value)
     * @method _IH_FloatingBar_QB whereDescriptionColor($value)
     * @method _IH_FloatingBar_QB whereIcon($value)
     * @method _IH_FloatingBar_QB whereBackgroundColor($value)
     * @method _IH_FloatingBar_QB whereBackgroundImage($value)
     * @method _IH_FloatingBar_QB whereBtnUrl($value)
     * @method _IH_FloatingBar_QB whereBtnColor($value)
     * @method _IH_FloatingBar_QB whereBtnTextColor($value)
     * @method _IH_FloatingBar_QB whereBarHeight($value)
     * @method _IH_FloatingBar_QB wherePosition($value)
     * @method _IH_FloatingBar_QB whereFixed($value)
     * @method _IH_FloatingBar_QB whereEnable($value)
     * @method FloatingBar baseSole(array|string $columns = ['*'])
     * @method FloatingBar create(array $attributes = [])
     * @method _IH_FloatingBar_C|FloatingBar[] cursor()
     * @method FloatingBar|null|_IH_FloatingBar_C|FloatingBar[] find($id, array|string $columns = ['*'])
     * @method _IH_FloatingBar_C|FloatingBar[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FloatingBar|_IH_FloatingBar_C|FloatingBar[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FloatingBar|_IH_FloatingBar_C|FloatingBar[] findOrFail($id, array|string $columns = ['*'])
     * @method FloatingBar|_IH_FloatingBar_C|FloatingBar[] findOrNew($id, array|string $columns = ['*'])
     * @method FloatingBar first(array|string $columns = ['*'])
     * @method FloatingBar firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FloatingBar firstOrCreate(array $attributes = [], array $values = [])
     * @method FloatingBar firstOrFail(array|string $columns = ['*'])
     * @method FloatingBar firstOrNew(array $attributes = [], array $values = [])
     * @method FloatingBar firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FloatingBar forceCreate(array $attributes)
     * @method _IH_FloatingBar_C|FloatingBar[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FloatingBar_C|FloatingBar[] get(array|string $columns = ['*'])
     * @method FloatingBar getModel()
     * @method FloatingBar[] getModels(array|string $columns = ['*'])
     * @method _IH_FloatingBar_C|FloatingBar[] hydrate(array $items)
     * @method _IH_FloatingBar_C|FloatingBar[] lazy(int $chunkSize = 1000)
     * @method _IH_FloatingBar_C|FloatingBar[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FloatingBar_C|FloatingBar[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FloatingBar make(array $attributes = [])
     * @method FloatingBar newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FloatingBar[]|_IH_FloatingBar_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FloatingBar restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FloatingBar[]|_IH_FloatingBar_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FloatingBar sole(array|string $columns = ['*'])
     * @method FloatingBar updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FloatingBar_QB listsTranslations(string $translationField)
     * @method _IH_FloatingBar_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_FloatingBar_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_FloatingBar_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FloatingBar_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_FloatingBar_QB translated()
     * @method _IH_FloatingBar_QB translatedIn(null|string $locale = null)
     * @method _IH_FloatingBar_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_FloatingBar_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FloatingBar_QB withTranslation()
     */
    class _IH_FloatingBar_QB extends _BaseBuilder {}
    
    /**
     * @method Follow|null getOrPut($key, $value)
     * @method Follow|$this shift(int $count = 1)
     * @method Follow|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Follow|$this pop(int $count = 1)
     * @method Follow|null pull($key, \Closure $default = null)
     * @method Follow|null last(callable $callback = null, \Closure $default = null)
     * @method Follow|$this random(callable|int|null $number = null)
     * @method Follow|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Follow|null get($key, \Closure $default = null)
     * @method Follow|null first(callable $callback = null, \Closure $default = null)
     * @method Follow|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Follow|null find($key, $default = null)
     * @method Follow[] all()
     */
    class _IH_Follow_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Follow[][]|Collection<_IH_Follow_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Follow_QB whereId($value)
     * @method _IH_Follow_QB whereFollower($value)
     * @method _IH_Follow_QB whereUserId($value)
     * @method _IH_Follow_QB whereStatus($value)
     * @method Follow baseSole(array|string $columns = ['*'])
     * @method Follow create(array $attributes = [])
     * @method _IH_Follow_C|Follow[] cursor()
     * @method Follow|null|_IH_Follow_C|Follow[] find($id, array|string $columns = ['*'])
     * @method _IH_Follow_C|Follow[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Follow|_IH_Follow_C|Follow[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Follow|_IH_Follow_C|Follow[] findOrFail($id, array|string $columns = ['*'])
     * @method Follow|_IH_Follow_C|Follow[] findOrNew($id, array|string $columns = ['*'])
     * @method Follow first(array|string $columns = ['*'])
     * @method Follow firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Follow firstOrCreate(array $attributes = [], array $values = [])
     * @method Follow firstOrFail(array|string $columns = ['*'])
     * @method Follow firstOrNew(array $attributes = [], array $values = [])
     * @method Follow firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Follow forceCreate(array $attributes)
     * @method _IH_Follow_C|Follow[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Follow_C|Follow[] get(array|string $columns = ['*'])
     * @method Follow getModel()
     * @method Follow[] getModels(array|string $columns = ['*'])
     * @method _IH_Follow_C|Follow[] hydrate(array $items)
     * @method _IH_Follow_C|Follow[] lazy(int $chunkSize = 1000)
     * @method _IH_Follow_C|Follow[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Follow_C|Follow[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Follow make(array $attributes = [])
     * @method Follow newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Follow[]|_IH_Follow_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Follow restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Follow[]|_IH_Follow_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Follow sole(array|string $columns = ['*'])
     * @method Follow updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Follow_QB extends _BaseBuilder {}
    
    /**
     * @method FormFieldOption|null getOrPut($key, $value)
     * @method FormFieldOption|$this shift(int $count = 1)
     * @method FormFieldOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldOption|$this pop(int $count = 1)
     * @method FormFieldOption|null pull($key, \Closure $default = null)
     * @method FormFieldOption|null last(callable $callback = null, \Closure $default = null)
     * @method FormFieldOption|$this random(callable|int|null $number = null)
     * @method FormFieldOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldOption|null get($key, \Closure $default = null)
     * @method FormFieldOption|null first(callable $callback = null, \Closure $default = null)
     * @method FormFieldOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormFieldOption|null find($key, $default = null)
     * @method FormFieldOption[] all()
     */
    class _IH_FormFieldOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormFieldOption[][]|Collection<_IH_FormFieldOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormFieldOption_QB whereId($value)
     * @method _IH_FormFieldOption_QB whereFormFieldId($value)
     * @method _IH_FormFieldOption_QB whereOrder($value)
     * @method FormFieldOption baseSole(array|string $columns = ['*'])
     * @method FormFieldOption create(array $attributes = [])
     * @method _IH_FormFieldOption_C|FormFieldOption[] cursor()
     * @method FormFieldOption|null|_IH_FormFieldOption_C|FormFieldOption[] find($id, array|string $columns = ['*'])
     * @method _IH_FormFieldOption_C|FormFieldOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormFieldOption|_IH_FormFieldOption_C|FormFieldOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldOption|_IH_FormFieldOption_C|FormFieldOption[] findOrFail($id, array|string $columns = ['*'])
     * @method FormFieldOption|_IH_FormFieldOption_C|FormFieldOption[] findOrNew($id, array|string $columns = ['*'])
     * @method FormFieldOption first(array|string $columns = ['*'])
     * @method FormFieldOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldOption firstOrCreate(array $attributes = [], array $values = [])
     * @method FormFieldOption firstOrFail(array|string $columns = ['*'])
     * @method FormFieldOption firstOrNew(array $attributes = [], array $values = [])
     * @method FormFieldOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormFieldOption forceCreate(array $attributes)
     * @method _IH_FormFieldOption_C|FormFieldOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormFieldOption_C|FormFieldOption[] get(array|string $columns = ['*'])
     * @method FormFieldOption getModel()
     * @method FormFieldOption[] getModels(array|string $columns = ['*'])
     * @method _IH_FormFieldOption_C|FormFieldOption[] hydrate(array $items)
     * @method _IH_FormFieldOption_C|FormFieldOption[] lazy(int $chunkSize = 1000)
     * @method _IH_FormFieldOption_C|FormFieldOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormFieldOption_C|FormFieldOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormFieldOption make(array $attributes = [])
     * @method FormFieldOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormFieldOption[]|_IH_FormFieldOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormFieldOption[]|_IH_FormFieldOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldOption sole(array|string $columns = ['*'])
     * @method FormFieldOption updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FormFieldOption_QB listsTranslations(string $translationField)
     * @method _IH_FormFieldOption_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_FormFieldOption_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormFieldOption_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormFieldOption_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_FormFieldOption_QB translated()
     * @method _IH_FormFieldOption_QB translatedIn(null|string $locale = null)
     * @method _IH_FormFieldOption_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_FormFieldOption_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormFieldOption_QB withTranslation()
     */
    class _IH_FormFieldOption_QB extends _BaseBuilder {}
    
    /**
     * @method FormField|null getOrPut($key, $value)
     * @method FormField|$this shift(int $count = 1)
     * @method FormField|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormField|$this pop(int $count = 1)
     * @method FormField|null pull($key, \Closure $default = null)
     * @method FormField|null last(callable $callback = null, \Closure $default = null)
     * @method FormField|$this random(callable|int|null $number = null)
     * @method FormField|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormField|null get($key, \Closure $default = null)
     * @method FormField|null first(callable $callback = null, \Closure $default = null)
     * @method FormField|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormField|null find($key, $default = null)
     * @method FormField[] all()
     */
    class _IH_FormField_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormField[][]|Collection<_IH_FormField_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormField_QB whereId($value)
     * @method _IH_FormField_QB whereFormId($value)
     * @method _IH_FormField_QB whereType($value)
     * @method _IH_FormField_QB whereOrder($value)
     * @method _IH_FormField_QB whereRequired($value)
     * @method FormField baseSole(array|string $columns = ['*'])
     * @method FormField create(array $attributes = [])
     * @method _IH_FormField_C|FormField[] cursor()
     * @method FormField|null|_IH_FormField_C|FormField[] find($id, array|string $columns = ['*'])
     * @method _IH_FormField_C|FormField[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormField|_IH_FormField_C|FormField[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormField|_IH_FormField_C|FormField[] findOrFail($id, array|string $columns = ['*'])
     * @method FormField|_IH_FormField_C|FormField[] findOrNew($id, array|string $columns = ['*'])
     * @method FormField first(array|string $columns = ['*'])
     * @method FormField firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormField firstOrCreate(array $attributes = [], array $values = [])
     * @method FormField firstOrFail(array|string $columns = ['*'])
     * @method FormField firstOrNew(array $attributes = [], array $values = [])
     * @method FormField firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormField forceCreate(array $attributes)
     * @method _IH_FormField_C|FormField[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormField_C|FormField[] get(array|string $columns = ['*'])
     * @method FormField getModel()
     * @method FormField[] getModels(array|string $columns = ['*'])
     * @method _IH_FormField_C|FormField[] hydrate(array $items)
     * @method _IH_FormField_C|FormField[] lazy(int $chunkSize = 1000)
     * @method _IH_FormField_C|FormField[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormField_C|FormField[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormField make(array $attributes = [])
     * @method FormField newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormField[]|_IH_FormField_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormField restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormField[]|_IH_FormField_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormField sole(array|string $columns = ['*'])
     * @method FormField updateOrCreate(array $attributes, array $values = [])
     * @method _IH_FormField_QB listsTranslations(string $translationField)
     * @method _IH_FormField_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_FormField_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormField_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormField_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_FormField_QB translated()
     * @method _IH_FormField_QB translatedIn(null|string $locale = null)
     * @method _IH_FormField_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_FormField_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_FormField_QB withTranslation()
     */
    class _IH_FormField_QB extends _BaseBuilder {}
    
    /**
     * @method FormRoleUserGroup|null getOrPut($key, $value)
     * @method FormRoleUserGroup|$this shift(int $count = 1)
     * @method FormRoleUserGroup|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormRoleUserGroup|$this pop(int $count = 1)
     * @method FormRoleUserGroup|null pull($key, \Closure $default = null)
     * @method FormRoleUserGroup|null last(callable $callback = null, \Closure $default = null)
     * @method FormRoleUserGroup|$this random(callable|int|null $number = null)
     * @method FormRoleUserGroup|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormRoleUserGroup|null get($key, \Closure $default = null)
     * @method FormRoleUserGroup|null first(callable $callback = null, \Closure $default = null)
     * @method FormRoleUserGroup|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormRoleUserGroup|null find($key, $default = null)
     * @method FormRoleUserGroup[] all()
     */
    class _IH_FormRoleUserGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormRoleUserGroup[][]|Collection<_IH_FormRoleUserGroup_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormRoleUserGroup_QB whereId($value)
     * @method _IH_FormRoleUserGroup_QB whereFormId($value)
     * @method _IH_FormRoleUserGroup_QB whereRoleId($value)
     * @method _IH_FormRoleUserGroup_QB whereUserId($value)
     * @method _IH_FormRoleUserGroup_QB whereGroupId($value)
     * @method FormRoleUserGroup baseSole(array|string $columns = ['*'])
     * @method FormRoleUserGroup create(array $attributes = [])
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] cursor()
     * @method FormRoleUserGroup|null|_IH_FormRoleUserGroup_C|FormRoleUserGroup[] find($id, array|string $columns = ['*'])
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormRoleUserGroup|_IH_FormRoleUserGroup_C|FormRoleUserGroup[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormRoleUserGroup|_IH_FormRoleUserGroup_C|FormRoleUserGroup[] findOrFail($id, array|string $columns = ['*'])
     * @method FormRoleUserGroup|_IH_FormRoleUserGroup_C|FormRoleUserGroup[] findOrNew($id, array|string $columns = ['*'])
     * @method FormRoleUserGroup first(array|string $columns = ['*'])
     * @method FormRoleUserGroup firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormRoleUserGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method FormRoleUserGroup firstOrFail(array|string $columns = ['*'])
     * @method FormRoleUserGroup firstOrNew(array $attributes = [], array $values = [])
     * @method FormRoleUserGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormRoleUserGroup forceCreate(array $attributes)
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] get(array|string $columns = ['*'])
     * @method FormRoleUserGroup getModel()
     * @method FormRoleUserGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] hydrate(array $items)
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] lazy(int $chunkSize = 1000)
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormRoleUserGroup_C|FormRoleUserGroup[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormRoleUserGroup make(array $attributes = [])
     * @method FormRoleUserGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormRoleUserGroup[]|_IH_FormRoleUserGroup_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormRoleUserGroup restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormRoleUserGroup[]|_IH_FormRoleUserGroup_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormRoleUserGroup sole(array|string $columns = ['*'])
     * @method FormRoleUserGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormRoleUserGroup_QB extends _BaseBuilder {}
    
    /**
     * @method FormSubmissionItem|null getOrPut($key, $value)
     * @method FormSubmissionItem|$this shift(int $count = 1)
     * @method FormSubmissionItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormSubmissionItem|$this pop(int $count = 1)
     * @method FormSubmissionItem|null pull($key, \Closure $default = null)
     * @method FormSubmissionItem|null last(callable $callback = null, \Closure $default = null)
     * @method FormSubmissionItem|$this random(callable|int|null $number = null)
     * @method FormSubmissionItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormSubmissionItem|null get($key, \Closure $default = null)
     * @method FormSubmissionItem|null first(callable $callback = null, \Closure $default = null)
     * @method FormSubmissionItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormSubmissionItem|null find($key, $default = null)
     * @method FormSubmissionItem[] all()
     */
    class _IH_FormSubmissionItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormSubmissionItem[][]|Collection<_IH_FormSubmissionItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormSubmissionItem_QB whereId($value)
     * @method _IH_FormSubmissionItem_QB whereSubmissionId($value)
     * @method _IH_FormSubmissionItem_QB whereFormFieldId($value)
     * @method _IH_FormSubmissionItem_QB whereValue($value)
     * @method FormSubmissionItem baseSole(array|string $columns = ['*'])
     * @method FormSubmissionItem create(array $attributes = [])
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] cursor()
     * @method FormSubmissionItem|null|_IH_FormSubmissionItem_C|FormSubmissionItem[] find($id, array|string $columns = ['*'])
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormSubmissionItem|_IH_FormSubmissionItem_C|FormSubmissionItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormSubmissionItem|_IH_FormSubmissionItem_C|FormSubmissionItem[] findOrFail($id, array|string $columns = ['*'])
     * @method FormSubmissionItem|_IH_FormSubmissionItem_C|FormSubmissionItem[] findOrNew($id, array|string $columns = ['*'])
     * @method FormSubmissionItem first(array|string $columns = ['*'])
     * @method FormSubmissionItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormSubmissionItem firstOrCreate(array $attributes = [], array $values = [])
     * @method FormSubmissionItem firstOrFail(array|string $columns = ['*'])
     * @method FormSubmissionItem firstOrNew(array $attributes = [], array $values = [])
     * @method FormSubmissionItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormSubmissionItem forceCreate(array $attributes)
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] get(array|string $columns = ['*'])
     * @method FormSubmissionItem getModel()
     * @method FormSubmissionItem[] getModels(array|string $columns = ['*'])
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] hydrate(array $items)
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] lazy(int $chunkSize = 1000)
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormSubmissionItem_C|FormSubmissionItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormSubmissionItem make(array $attributes = [])
     * @method FormSubmissionItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormSubmissionItem[]|_IH_FormSubmissionItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormSubmissionItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormSubmissionItem[]|_IH_FormSubmissionItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormSubmissionItem sole(array|string $columns = ['*'])
     * @method FormSubmissionItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormSubmissionItem_QB extends _BaseBuilder {}
    
    /**
     * @method FormSubmission|null getOrPut($key, $value)
     * @method FormSubmission|$this shift(int $count = 1)
     * @method FormSubmission|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormSubmission|$this pop(int $count = 1)
     * @method FormSubmission|null pull($key, \Closure $default = null)
     * @method FormSubmission|null last(callable $callback = null, \Closure $default = null)
     * @method FormSubmission|$this random(callable|int|null $number = null)
     * @method FormSubmission|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormSubmission|null get($key, \Closure $default = null)
     * @method FormSubmission|null first(callable $callback = null, \Closure $default = null)
     * @method FormSubmission|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormSubmission|null find($key, $default = null)
     * @method FormSubmission[] all()
     */
    class _IH_FormSubmission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormSubmission[][]|Collection<_IH_FormSubmission_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormSubmission_QB whereId($value)
     * @method _IH_FormSubmission_QB whereUserId($value)
     * @method _IH_FormSubmission_QB whereFormId($value)
     * @method _IH_FormSubmission_QB whereCreatedAt($value)
     * @method FormSubmission baseSole(array|string $columns = ['*'])
     * @method FormSubmission create(array $attributes = [])
     * @method _IH_FormSubmission_C|FormSubmission[] cursor()
     * @method FormSubmission|null|_IH_FormSubmission_C|FormSubmission[] find($id, array|string $columns = ['*'])
     * @method _IH_FormSubmission_C|FormSubmission[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormSubmission|_IH_FormSubmission_C|FormSubmission[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormSubmission|_IH_FormSubmission_C|FormSubmission[] findOrFail($id, array|string $columns = ['*'])
     * @method FormSubmission|_IH_FormSubmission_C|FormSubmission[] findOrNew($id, array|string $columns = ['*'])
     * @method FormSubmission first(array|string $columns = ['*'])
     * @method FormSubmission firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormSubmission firstOrCreate(array $attributes = [], array $values = [])
     * @method FormSubmission firstOrFail(array|string $columns = ['*'])
     * @method FormSubmission firstOrNew(array $attributes = [], array $values = [])
     * @method FormSubmission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormSubmission forceCreate(array $attributes)
     * @method _IH_FormSubmission_C|FormSubmission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormSubmission_C|FormSubmission[] get(array|string $columns = ['*'])
     * @method FormSubmission getModel()
     * @method FormSubmission[] getModels(array|string $columns = ['*'])
     * @method _IH_FormSubmission_C|FormSubmission[] hydrate(array $items)
     * @method _IH_FormSubmission_C|FormSubmission[] lazy(int $chunkSize = 1000)
     * @method _IH_FormSubmission_C|FormSubmission[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormSubmission_C|FormSubmission[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormSubmission make(array $attributes = [])
     * @method FormSubmission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormSubmission[]|_IH_FormSubmission_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormSubmission restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormSubmission[]|_IH_FormSubmission_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormSubmission sole(array|string $columns = ['*'])
     * @method FormSubmission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormSubmission_QB extends _BaseBuilder {}
    
    /**
     * @method Form|null getOrPut($key, $value)
     * @method Form|$this shift(int $count = 1)
     * @method Form|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Form|$this pop(int $count = 1)
     * @method Form|null pull($key, \Closure $default = null)
     * @method Form|null last(callable $callback = null, \Closure $default = null)
     * @method Form|$this random(callable|int|null $number = null)
     * @method Form|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Form|null get($key, \Closure $default = null)
     * @method Form|null first(callable $callback = null, \Closure $default = null)
     * @method Form|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Form|null find($key, $default = null)
     * @method Form[] all()
     */
    class _IH_Form_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Form[][]|Collection<_IH_Form_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Form_QB whereId($value)
     * @method _IH_Form_QB whereUrl($value)
     * @method _IH_Form_QB whereCover($value)
     * @method _IH_Form_QB whereImage($value)
     * @method _IH_Form_QB whereEnableLogin($value)
     * @method _IH_Form_QB whereEnableResubmission($value)
     * @method _IH_Form_QB whereEnableWelcomeMessage($value)
     * @method _IH_Form_QB whereEnableTankYouMessage($value)
     * @method _IH_Form_QB whereWelcomeMessageImage($value)
     * @method _IH_Form_QB whereTankYouMessageImage($value)
     * @method _IH_Form_QB whereStartDate($value)
     * @method _IH_Form_QB whereEndDate($value)
     * @method _IH_Form_QB whereEnable($value)
     * @method _IH_Form_QB whereCreatedAt($value)
     * @method Form baseSole(array|string $columns = ['*'])
     * @method Form create(array $attributes = [])
     * @method _IH_Form_C|Form[] cursor()
     * @method Form|null|_IH_Form_C|Form[] find($id, array|string $columns = ['*'])
     * @method _IH_Form_C|Form[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Form|_IH_Form_C|Form[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Form|_IH_Form_C|Form[] findOrFail($id, array|string $columns = ['*'])
     * @method Form|_IH_Form_C|Form[] findOrNew($id, array|string $columns = ['*'])
     * @method Form first(array|string $columns = ['*'])
     * @method Form firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Form firstOrCreate(array $attributes = [], array $values = [])
     * @method Form firstOrFail(array|string $columns = ['*'])
     * @method Form firstOrNew(array $attributes = [], array $values = [])
     * @method Form firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Form forceCreate(array $attributes)
     * @method _IH_Form_C|Form[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Form_C|Form[] get(array|string $columns = ['*'])
     * @method Form getModel()
     * @method Form[] getModels(array|string $columns = ['*'])
     * @method _IH_Form_C|Form[] hydrate(array $items)
     * @method _IH_Form_C|Form[] lazy(int $chunkSize = 1000)
     * @method _IH_Form_C|Form[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Form_C|Form[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Form make(array $attributes = [])
     * @method Form newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Form[]|_IH_Form_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Form restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Form[]|_IH_Form_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Form sole(array|string $columns = ['*'])
     * @method Form updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Form_QB listsTranslations(string $translationField)
     * @method _IH_Form_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Form_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Form_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Form_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Form_QB translated()
     * @method _IH_Form_QB translatedIn(null|string $locale = null)
     * @method _IH_Form_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Form_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Form_QB withTranslation()
     */
    class _IH_Form_QB extends _BaseBuilder {}
    
    /**
     * @method ForumFeaturedTopic|null getOrPut($key, $value)
     * @method ForumFeaturedTopic|$this shift(int $count = 1)
     * @method ForumFeaturedTopic|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumFeaturedTopic|$this pop(int $count = 1)
     * @method ForumFeaturedTopic|null pull($key, \Closure $default = null)
     * @method ForumFeaturedTopic|null last(callable $callback = null, \Closure $default = null)
     * @method ForumFeaturedTopic|$this random(callable|int|null $number = null)
     * @method ForumFeaturedTopic|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumFeaturedTopic|null get($key, \Closure $default = null)
     * @method ForumFeaturedTopic|null first(callable $callback = null, \Closure $default = null)
     * @method ForumFeaturedTopic|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumFeaturedTopic|null find($key, $default = null)
     * @method ForumFeaturedTopic[] all()
     */
    class _IH_ForumFeaturedTopic_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumFeaturedTopic[][]|Collection<_IH_ForumFeaturedTopic_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumFeaturedTopic_QB whereId($value)
     * @method _IH_ForumFeaturedTopic_QB whereTopicId($value)
     * @method _IH_ForumFeaturedTopic_QB whereIcon($value)
     * @method _IH_ForumFeaturedTopic_QB whereCreatedAt($value)
     * @method ForumFeaturedTopic baseSole(array|string $columns = ['*'])
     * @method ForumFeaturedTopic create(array $attributes = [])
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] cursor()
     * @method ForumFeaturedTopic|null|_IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumFeaturedTopic|_IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumFeaturedTopic|_IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumFeaturedTopic|_IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumFeaturedTopic first(array|string $columns = ['*'])
     * @method ForumFeaturedTopic firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumFeaturedTopic firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumFeaturedTopic firstOrFail(array|string $columns = ['*'])
     * @method ForumFeaturedTopic firstOrNew(array $attributes = [], array $values = [])
     * @method ForumFeaturedTopic firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumFeaturedTopic forceCreate(array $attributes)
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] get(array|string $columns = ['*'])
     * @method ForumFeaturedTopic getModel()
     * @method ForumFeaturedTopic[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] hydrate(array $items)
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumFeaturedTopic make(array $attributes = [])
     * @method ForumFeaturedTopic newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumFeaturedTopic[]|_IH_ForumFeaturedTopic_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumFeaturedTopic restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumFeaturedTopic[]|_IH_ForumFeaturedTopic_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumFeaturedTopic sole(array|string $columns = ['*'])
     * @method ForumFeaturedTopic updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumFeaturedTopic_QB extends _BaseBuilder {}
    
    /**
     * @method ForumRecommendedTopicItem|null getOrPut($key, $value)
     * @method ForumRecommendedTopicItem|$this shift(int $count = 1)
     * @method ForumRecommendedTopicItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumRecommendedTopicItem|$this pop(int $count = 1)
     * @method ForumRecommendedTopicItem|null pull($key, \Closure $default = null)
     * @method ForumRecommendedTopicItem|null last(callable $callback = null, \Closure $default = null)
     * @method ForumRecommendedTopicItem|$this random(callable|int|null $number = null)
     * @method ForumRecommendedTopicItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumRecommendedTopicItem|null get($key, \Closure $default = null)
     * @method ForumRecommendedTopicItem|null first(callable $callback = null, \Closure $default = null)
     * @method ForumRecommendedTopicItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumRecommendedTopicItem|null find($key, $default = null)
     * @method ForumRecommendedTopicItem[] all()
     */
    class _IH_ForumRecommendedTopicItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumRecommendedTopicItem[][]|Collection<_IH_ForumRecommendedTopicItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumRecommendedTopicItem_QB whereId($value)
     * @method _IH_ForumRecommendedTopicItem_QB whereRecommendedTopicId($value)
     * @method _IH_ForumRecommendedTopicItem_QB whereTopicId($value)
     * @method _IH_ForumRecommendedTopicItem_QB whereCreatedAt($value)
     * @method ForumRecommendedTopicItem baseSole(array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem create(array $attributes = [])
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] cursor()
     * @method ForumRecommendedTopicItem|null|_IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem|_IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumRecommendedTopicItem|_IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem|_IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem first(array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumRecommendedTopicItem firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumRecommendedTopicItem firstOrFail(array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem firstOrNew(array $attributes = [], array $values = [])
     * @method ForumRecommendedTopicItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumRecommendedTopicItem forceCreate(array $attributes)
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] get(array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem getModel()
     * @method ForumRecommendedTopicItem[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] hydrate(array $items)
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumRecommendedTopicItem make(array $attributes = [])
     * @method ForumRecommendedTopicItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumRecommendedTopicItem[]|_IH_ForumRecommendedTopicItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumRecommendedTopicItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumRecommendedTopicItem[]|_IH_ForumRecommendedTopicItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumRecommendedTopicItem sole(array|string $columns = ['*'])
     * @method ForumRecommendedTopicItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumRecommendedTopicItem_QB extends _BaseBuilder {}
    
    /**
     * @method ForumRecommendedTopic|null getOrPut($key, $value)
     * @method ForumRecommendedTopic|$this shift(int $count = 1)
     * @method ForumRecommendedTopic|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumRecommendedTopic|$this pop(int $count = 1)
     * @method ForumRecommendedTopic|null pull($key, \Closure $default = null)
     * @method ForumRecommendedTopic|null last(callable $callback = null, \Closure $default = null)
     * @method ForumRecommendedTopic|$this random(callable|int|null $number = null)
     * @method ForumRecommendedTopic|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumRecommendedTopic|null get($key, \Closure $default = null)
     * @method ForumRecommendedTopic|null first(callable $callback = null, \Closure $default = null)
     * @method ForumRecommendedTopic|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumRecommendedTopic|null find($key, $default = null)
     * @method ForumRecommendedTopic[] all()
     */
    class _IH_ForumRecommendedTopic_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumRecommendedTopic[][]|Collection<_IH_ForumRecommendedTopic_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumRecommendedTopic_QB whereId($value)
     * @method _IH_ForumRecommendedTopic_QB whereTitle($value)
     * @method _IH_ForumRecommendedTopic_QB whereIcon($value)
     * @method _IH_ForumRecommendedTopic_QB whereCreatedAt($value)
     * @method ForumRecommendedTopic baseSole(array|string $columns = ['*'])
     * @method ForumRecommendedTopic create(array $attributes = [])
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] cursor()
     * @method ForumRecommendedTopic|null|_IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumRecommendedTopic|_IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumRecommendedTopic|_IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumRecommendedTopic|_IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumRecommendedTopic first(array|string $columns = ['*'])
     * @method ForumRecommendedTopic firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumRecommendedTopic firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumRecommendedTopic firstOrFail(array|string $columns = ['*'])
     * @method ForumRecommendedTopic firstOrNew(array $attributes = [], array $values = [])
     * @method ForumRecommendedTopic firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumRecommendedTopic forceCreate(array $attributes)
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] get(array|string $columns = ['*'])
     * @method ForumRecommendedTopic getModel()
     * @method ForumRecommendedTopic[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] hydrate(array $items)
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumRecommendedTopic make(array $attributes = [])
     * @method ForumRecommendedTopic newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumRecommendedTopic[]|_IH_ForumRecommendedTopic_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumRecommendedTopic restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumRecommendedTopic[]|_IH_ForumRecommendedTopic_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumRecommendedTopic sole(array|string $columns = ['*'])
     * @method ForumRecommendedTopic updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumRecommendedTopic_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopicAttachment|null getOrPut($key, $value)
     * @method ForumTopicAttachment|$this shift(int $count = 1)
     * @method ForumTopicAttachment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicAttachment|$this pop(int $count = 1)
     * @method ForumTopicAttachment|null pull($key, \Closure $default = null)
     * @method ForumTopicAttachment|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopicAttachment|$this random(callable|int|null $number = null)
     * @method ForumTopicAttachment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicAttachment|null get($key, \Closure $default = null)
     * @method ForumTopicAttachment|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopicAttachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopicAttachment|null find($key, $default = null)
     * @method ForumTopicAttachment[] all()
     */
    class _IH_ForumTopicAttachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopicAttachment[][]|Collection<_IH_ForumTopicAttachment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopicAttachment_QB whereId($value)
     * @method _IH_ForumTopicAttachment_QB whereCreatorId($value)
     * @method _IH_ForumTopicAttachment_QB whereTopicId($value)
     * @method _IH_ForumTopicAttachment_QB wherePath($value)
     * @method ForumTopicAttachment baseSole(array|string $columns = ['*'])
     * @method ForumTopicAttachment create(array $attributes = [])
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] cursor()
     * @method ForumTopicAttachment|null|_IH_ForumTopicAttachment_C|ForumTopicAttachment[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopicAttachment|_IH_ForumTopicAttachment_C|ForumTopicAttachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicAttachment|_IH_ForumTopicAttachment_C|ForumTopicAttachment[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopicAttachment|_IH_ForumTopicAttachment_C|ForumTopicAttachment[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopicAttachment first(array|string $columns = ['*'])
     * @method ForumTopicAttachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicAttachment firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopicAttachment firstOrFail(array|string $columns = ['*'])
     * @method ForumTopicAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopicAttachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopicAttachment forceCreate(array $attributes)
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] get(array|string $columns = ['*'])
     * @method ForumTopicAttachment getModel()
     * @method ForumTopicAttachment[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] hydrate(array $items)
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopicAttachment_C|ForumTopicAttachment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopicAttachment make(array $attributes = [])
     * @method ForumTopicAttachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopicAttachment[]|_IH_ForumTopicAttachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicAttachment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopicAttachment[]|_IH_ForumTopicAttachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicAttachment sole(array|string $columns = ['*'])
     * @method ForumTopicAttachment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTopicAttachment_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopicBookmark|null getOrPut($key, $value)
     * @method ForumTopicBookmark|$this shift(int $count = 1)
     * @method ForumTopicBookmark|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicBookmark|$this pop(int $count = 1)
     * @method ForumTopicBookmark|null pull($key, \Closure $default = null)
     * @method ForumTopicBookmark|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopicBookmark|$this random(callable|int|null $number = null)
     * @method ForumTopicBookmark|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicBookmark|null get($key, \Closure $default = null)
     * @method ForumTopicBookmark|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopicBookmark|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopicBookmark|null find($key, $default = null)
     * @method ForumTopicBookmark[] all()
     */
    class _IH_ForumTopicBookmark_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopicBookmark[][]|Collection<_IH_ForumTopicBookmark_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopicBookmark_QB whereId($value)
     * @method _IH_ForumTopicBookmark_QB whereUserId($value)
     * @method _IH_ForumTopicBookmark_QB whereTopicId($value)
     * @method _IH_ForumTopicBookmark_QB whereCreatedAt($value)
     * @method ForumTopicBookmark baseSole(array|string $columns = ['*'])
     * @method ForumTopicBookmark create(array $attributes = [])
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] cursor()
     * @method ForumTopicBookmark|null|_IH_ForumTopicBookmark_C|ForumTopicBookmark[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopicBookmark|_IH_ForumTopicBookmark_C|ForumTopicBookmark[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicBookmark|_IH_ForumTopicBookmark_C|ForumTopicBookmark[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopicBookmark|_IH_ForumTopicBookmark_C|ForumTopicBookmark[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopicBookmark first(array|string $columns = ['*'])
     * @method ForumTopicBookmark firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicBookmark firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopicBookmark firstOrFail(array|string $columns = ['*'])
     * @method ForumTopicBookmark firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopicBookmark firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopicBookmark forceCreate(array $attributes)
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] get(array|string $columns = ['*'])
     * @method ForumTopicBookmark getModel()
     * @method ForumTopicBookmark[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] hydrate(array $items)
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopicBookmark_C|ForumTopicBookmark[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopicBookmark make(array $attributes = [])
     * @method ForumTopicBookmark newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopicBookmark[]|_IH_ForumTopicBookmark_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicBookmark restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopicBookmark[]|_IH_ForumTopicBookmark_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicBookmark sole(array|string $columns = ['*'])
     * @method ForumTopicBookmark updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTopicBookmark_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopicLike|null getOrPut($key, $value)
     * @method ForumTopicLike|$this shift(int $count = 1)
     * @method ForumTopicLike|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicLike|$this pop(int $count = 1)
     * @method ForumTopicLike|null pull($key, \Closure $default = null)
     * @method ForumTopicLike|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopicLike|$this random(callable|int|null $number = null)
     * @method ForumTopicLike|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicLike|null get($key, \Closure $default = null)
     * @method ForumTopicLike|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopicLike|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopicLike|null find($key, $default = null)
     * @method ForumTopicLike[] all()
     */
    class _IH_ForumTopicLike_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopicLike[][]|Collection<_IH_ForumTopicLike_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopicLike_QB whereId($value)
     * @method _IH_ForumTopicLike_QB whereUserId($value)
     * @method _IH_ForumTopicLike_QB whereTopicId($value)
     * @method _IH_ForumTopicLike_QB whereTopicPostId($value)
     * @method ForumTopicLike baseSole(array|string $columns = ['*'])
     * @method ForumTopicLike create(array $attributes = [])
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] cursor()
     * @method ForumTopicLike|null|_IH_ForumTopicLike_C|ForumTopicLike[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopicLike|_IH_ForumTopicLike_C|ForumTopicLike[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicLike|_IH_ForumTopicLike_C|ForumTopicLike[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopicLike|_IH_ForumTopicLike_C|ForumTopicLike[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopicLike first(array|string $columns = ['*'])
     * @method ForumTopicLike firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicLike firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopicLike firstOrFail(array|string $columns = ['*'])
     * @method ForumTopicLike firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopicLike firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopicLike forceCreate(array $attributes)
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] get(array|string $columns = ['*'])
     * @method ForumTopicLike getModel()
     * @method ForumTopicLike[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] hydrate(array $items)
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopicLike_C|ForumTopicLike[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopicLike make(array $attributes = [])
     * @method ForumTopicLike newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopicLike[]|_IH_ForumTopicLike_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicLike restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopicLike[]|_IH_ForumTopicLike_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicLike sole(array|string $columns = ['*'])
     * @method ForumTopicLike updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTopicLike_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopicPost|null getOrPut($key, $value)
     * @method ForumTopicPost|$this shift(int $count = 1)
     * @method ForumTopicPost|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicPost|$this pop(int $count = 1)
     * @method ForumTopicPost|null pull($key, \Closure $default = null)
     * @method ForumTopicPost|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopicPost|$this random(callable|int|null $number = null)
     * @method ForumTopicPost|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicPost|null get($key, \Closure $default = null)
     * @method ForumTopicPost|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopicPost|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopicPost|null find($key, $default = null)
     * @method ForumTopicPost[] all()
     */
    class _IH_ForumTopicPost_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopicPost[][]|Collection<_IH_ForumTopicPost_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopicPost_QB whereId($value)
     * @method _IH_ForumTopicPost_QB whereUserId($value)
     * @method _IH_ForumTopicPost_QB whereTopicId($value)
     * @method _IH_ForumTopicPost_QB whereParentId($value)
     * @method _IH_ForumTopicPost_QB whereDescription($value)
     * @method _IH_ForumTopicPost_QB whereAttach($value)
     * @method _IH_ForumTopicPost_QB wherePin($value)
     * @method _IH_ForumTopicPost_QB whereCreatedAt($value)
     * @method ForumTopicPost baseSole(array|string $columns = ['*'])
     * @method ForumTopicPost create(array $attributes = [])
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] cursor()
     * @method ForumTopicPost|null|_IH_ForumTopicPost_C|ForumTopicPost[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopicPost|_IH_ForumTopicPost_C|ForumTopicPost[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicPost|_IH_ForumTopicPost_C|ForumTopicPost[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopicPost|_IH_ForumTopicPost_C|ForumTopicPost[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopicPost first(array|string $columns = ['*'])
     * @method ForumTopicPost firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicPost firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopicPost firstOrFail(array|string $columns = ['*'])
     * @method ForumTopicPost firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopicPost firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopicPost forceCreate(array $attributes)
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] get(array|string $columns = ['*'])
     * @method ForumTopicPost getModel()
     * @method ForumTopicPost[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] hydrate(array $items)
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopicPost_C|ForumTopicPost[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopicPost make(array $attributes = [])
     * @method ForumTopicPost newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopicPost[]|_IH_ForumTopicPost_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicPost restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopicPost[]|_IH_ForumTopicPost_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicPost sole(array|string $columns = ['*'])
     * @method ForumTopicPost updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTopicPost_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopicReport|null getOrPut($key, $value)
     * @method ForumTopicReport|$this shift(int $count = 1)
     * @method ForumTopicReport|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicReport|$this pop(int $count = 1)
     * @method ForumTopicReport|null pull($key, \Closure $default = null)
     * @method ForumTopicReport|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopicReport|$this random(callable|int|null $number = null)
     * @method ForumTopicReport|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopicReport|null get($key, \Closure $default = null)
     * @method ForumTopicReport|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopicReport|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopicReport|null find($key, $default = null)
     * @method ForumTopicReport[] all()
     */
    class _IH_ForumTopicReport_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopicReport[][]|Collection<_IH_ForumTopicReport_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopicReport_QB whereId($value)
     * @method _IH_ForumTopicReport_QB whereUserId($value)
     * @method _IH_ForumTopicReport_QB whereTopicId($value)
     * @method _IH_ForumTopicReport_QB whereTopicPostId($value)
     * @method _IH_ForumTopicReport_QB whereMessage($value)
     * @method _IH_ForumTopicReport_QB whereCreatedAt($value)
     * @method ForumTopicReport baseSole(array|string $columns = ['*'])
     * @method ForumTopicReport create(array $attributes = [])
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] cursor()
     * @method ForumTopicReport|null|_IH_ForumTopicReport_C|ForumTopicReport[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopicReport|_IH_ForumTopicReport_C|ForumTopicReport[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicReport|_IH_ForumTopicReport_C|ForumTopicReport[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopicReport|_IH_ForumTopicReport_C|ForumTopicReport[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopicReport first(array|string $columns = ['*'])
     * @method ForumTopicReport firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopicReport firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopicReport firstOrFail(array|string $columns = ['*'])
     * @method ForumTopicReport firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopicReport firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopicReport forceCreate(array $attributes)
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] get(array|string $columns = ['*'])
     * @method ForumTopicReport getModel()
     * @method ForumTopicReport[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] hydrate(array $items)
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopicReport_C|ForumTopicReport[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopicReport make(array $attributes = [])
     * @method ForumTopicReport newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopicReport[]|_IH_ForumTopicReport_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicReport restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopicReport[]|_IH_ForumTopicReport_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopicReport sole(array|string $columns = ['*'])
     * @method ForumTopicReport updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTopicReport_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTopic|null getOrPut($key, $value)
     * @method ForumTopic|$this shift(int $count = 1)
     * @method ForumTopic|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopic|$this pop(int $count = 1)
     * @method ForumTopic|null pull($key, \Closure $default = null)
     * @method ForumTopic|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTopic|$this random(callable|int|null $number = null)
     * @method ForumTopic|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTopic|null get($key, \Closure $default = null)
     * @method ForumTopic|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTopic|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTopic|null find($key, $default = null)
     * @method ForumTopic[] all()
     */
    class _IH_ForumTopic_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTopic[][]|Collection<_IH_ForumTopic_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTopic_QB whereId($value)
     * @method _IH_ForumTopic_QB whereCreatorId($value)
     * @method _IH_ForumTopic_QB whereForumId($value)
     * @method _IH_ForumTopic_QB whereSlug($value)
     * @method _IH_ForumTopic_QB whereTitle($value)
     * @method _IH_ForumTopic_QB whereDescription($value)
     * @method _IH_ForumTopic_QB wherePin($value)
     * @method _IH_ForumTopic_QB whereClose($value)
     * @method _IH_ForumTopic_QB whereCreatedAt($value)
     * @method ForumTopic baseSole(array|string $columns = ['*'])
     * @method ForumTopic create(array $attributes = [])
     * @method _IH_ForumTopic_C|ForumTopic[] cursor()
     * @method ForumTopic|null|_IH_ForumTopic_C|ForumTopic[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTopic_C|ForumTopic[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTopic|_IH_ForumTopic_C|ForumTopic[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopic|_IH_ForumTopic_C|ForumTopic[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTopic|_IH_ForumTopic_C|ForumTopic[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTopic first(array|string $columns = ['*'])
     * @method ForumTopic firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTopic firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTopic firstOrFail(array|string $columns = ['*'])
     * @method ForumTopic firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTopic firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTopic forceCreate(array $attributes)
     * @method _IH_ForumTopic_C|ForumTopic[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTopic_C|ForumTopic[] get(array|string $columns = ['*'])
     * @method ForumTopic getModel()
     * @method ForumTopic[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTopic_C|ForumTopic[] hydrate(array $items)
     * @method _IH_ForumTopic_C|ForumTopic[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTopic_C|ForumTopic[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTopic_C|ForumTopic[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTopic make(array $attributes = [])
     * @method ForumTopic newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTopic[]|_IH_ForumTopic_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopic restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTopic[]|_IH_ForumTopic_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTopic sole(array|string $columns = ['*'])
     * @method ForumTopic updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ForumTopic_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_ForumTopic_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_ForumTopic_QB extends _BaseBuilder {}
    
    /**
     * @method Forum|null getOrPut($key, $value)
     * @method Forum|$this shift(int $count = 1)
     * @method Forum|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Forum|$this pop(int $count = 1)
     * @method Forum|null pull($key, \Closure $default = null)
     * @method Forum|null last(callable $callback = null, \Closure $default = null)
     * @method Forum|$this random(callable|int|null $number = null)
     * @method Forum|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Forum|null get($key, \Closure $default = null)
     * @method Forum|null first(callable $callback = null, \Closure $default = null)
     * @method Forum|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Forum|null find($key, $default = null)
     * @method Forum[] all()
     */
    class _IH_Forum_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Forum[][]|Collection<_IH_Forum_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Forum_QB whereId($value)
     * @method _IH_Forum_QB whereSlug($value)
     * @method _IH_Forum_QB whereRoleId($value)
     * @method _IH_Forum_QB whereGroupId($value)
     * @method _IH_Forum_QB whereParentId($value)
     * @method _IH_Forum_QB whereIcon($value)
     * @method _IH_Forum_QB whereStatus($value)
     * @method _IH_Forum_QB whereClose($value)
     * @method _IH_Forum_QB whereOrder($value)
     * @method Forum baseSole(array|string $columns = ['*'])
     * @method Forum create(array $attributes = [])
     * @method _IH_Forum_C|Forum[] cursor()
     * @method Forum|null|_IH_Forum_C|Forum[] find($id, array|string $columns = ['*'])
     * @method _IH_Forum_C|Forum[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Forum|_IH_Forum_C|Forum[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Forum|_IH_Forum_C|Forum[] findOrFail($id, array|string $columns = ['*'])
     * @method Forum|_IH_Forum_C|Forum[] findOrNew($id, array|string $columns = ['*'])
     * @method Forum first(array|string $columns = ['*'])
     * @method Forum firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Forum firstOrCreate(array $attributes = [], array $values = [])
     * @method Forum firstOrFail(array|string $columns = ['*'])
     * @method Forum firstOrNew(array $attributes = [], array $values = [])
     * @method Forum firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Forum forceCreate(array $attributes)
     * @method _IH_Forum_C|Forum[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Forum_C|Forum[] get(array|string $columns = ['*'])
     * @method Forum getModel()
     * @method Forum[] getModels(array|string $columns = ['*'])
     * @method _IH_Forum_C|Forum[] hydrate(array $items)
     * @method _IH_Forum_C|Forum[] lazy(int $chunkSize = 1000)
     * @method _IH_Forum_C|Forum[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Forum_C|Forum[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Forum make(array $attributes = [])
     * @method Forum newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Forum[]|_IH_Forum_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Forum restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Forum[]|_IH_Forum_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Forum sole(array|string $columns = ['*'])
     * @method Forum updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Forum_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Forum_QB listsTranslations(string $translationField)
     * @method _IH_Forum_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Forum_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Forum_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Forum_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Forum_QB translated()
     * @method _IH_Forum_QB translatedIn(null|string $locale = null)
     * @method _IH_Forum_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Forum_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Forum_QB withTranslation()
     * @method _IH_Forum_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Forum_QB extends _BaseBuilder {}
    
    /**
     * @method Gift|null getOrPut($key, $value)
     * @method Gift|$this shift(int $count = 1)
     * @method Gift|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Gift|$this pop(int $count = 1)
     * @method Gift|null pull($key, \Closure $default = null)
     * @method Gift|null last(callable $callback = null, \Closure $default = null)
     * @method Gift|$this random(callable|int|null $number = null)
     * @method Gift|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Gift|null get($key, \Closure $default = null)
     * @method Gift|null first(callable $callback = null, \Closure $default = null)
     * @method Gift|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Gift|null find($key, $default = null)
     * @method Gift[] all()
     */
    class _IH_Gift_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Gift[][]|Collection<_IH_Gift_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Gift_QB whereId($value)
     * @method _IH_Gift_QB whereUserId($value)
     * @method _IH_Gift_QB whereWebinarId($value)
     * @method _IH_Gift_QB whereBundleId($value)
     * @method _IH_Gift_QB whereProductId($value)
     * @method _IH_Gift_QB whereName($value)
     * @method _IH_Gift_QB whereEmail($value)
     * @method _IH_Gift_QB whereDescription($value)
     * @method _IH_Gift_QB whereViewed($value)
     * @method _IH_Gift_QB whereStatus($value)
     * @method _IH_Gift_QB whereCreatedAt($value)
     * @method Gift baseSole(array|string $columns = ['*'])
     * @method Gift create(array $attributes = [])
     * @method _IH_Gift_C|Gift[] cursor()
     * @method Gift|null|_IH_Gift_C|Gift[] find($id, array|string $columns = ['*'])
     * @method _IH_Gift_C|Gift[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Gift|_IH_Gift_C|Gift[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Gift|_IH_Gift_C|Gift[] findOrFail($id, array|string $columns = ['*'])
     * @method Gift|_IH_Gift_C|Gift[] findOrNew($id, array|string $columns = ['*'])
     * @method Gift first(array|string $columns = ['*'])
     * @method Gift firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Gift firstOrCreate(array $attributes = [], array $values = [])
     * @method Gift firstOrFail(array|string $columns = ['*'])
     * @method Gift firstOrNew(array $attributes = [], array $values = [])
     * @method Gift firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Gift forceCreate(array $attributes)
     * @method _IH_Gift_C|Gift[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Gift_C|Gift[] get(array|string $columns = ['*'])
     * @method Gift getModel()
     * @method Gift[] getModels(array|string $columns = ['*'])
     * @method _IH_Gift_C|Gift[] hydrate(array $items)
     * @method _IH_Gift_C|Gift[] lazy(int $chunkSize = 1000)
     * @method _IH_Gift_C|Gift[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Gift_C|Gift[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Gift make(array $attributes = [])
     * @method Gift newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Gift[]|_IH_Gift_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Gift restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Gift[]|_IH_Gift_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Gift sole(array|string $columns = ['*'])
     * @method Gift updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Gift_QB extends _BaseBuilder {}
    
    /**
     * @method GroupRegistrationPackage|null getOrPut($key, $value)
     * @method GroupRegistrationPackage|$this shift(int $count = 1)
     * @method GroupRegistrationPackage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method GroupRegistrationPackage|$this pop(int $count = 1)
     * @method GroupRegistrationPackage|null pull($key, \Closure $default = null)
     * @method GroupRegistrationPackage|null last(callable $callback = null, \Closure $default = null)
     * @method GroupRegistrationPackage|$this random(callable|int|null $number = null)
     * @method GroupRegistrationPackage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method GroupRegistrationPackage|null get($key, \Closure $default = null)
     * @method GroupRegistrationPackage|null first(callable $callback = null, \Closure $default = null)
     * @method GroupRegistrationPackage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method GroupRegistrationPackage|null find($key, $default = null)
     * @method GroupRegistrationPackage[] all()
     */
    class _IH_GroupRegistrationPackage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GroupRegistrationPackage[][]|Collection<_IH_GroupRegistrationPackage_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_GroupRegistrationPackage_QB whereId($value)
     * @method _IH_GroupRegistrationPackage_QB whereGroupId($value)
     * @method _IH_GroupRegistrationPackage_QB whereInstructorsCount($value)
     * @method _IH_GroupRegistrationPackage_QB whereStudentsCount($value)
     * @method _IH_GroupRegistrationPackage_QB whereCoursesCapacity($value)
     * @method _IH_GroupRegistrationPackage_QB whereCoursesCount($value)
     * @method _IH_GroupRegistrationPackage_QB whereMeetingCount($value)
     * @method _IH_GroupRegistrationPackage_QB whereStatus($value)
     * @method _IH_GroupRegistrationPackage_QB whereCreatedAt($value)
     * @method GroupRegistrationPackage baseSole(array|string $columns = ['*'])
     * @method GroupRegistrationPackage create(array $attributes = [])
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] cursor()
     * @method GroupRegistrationPackage|null|_IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] find($id, array|string $columns = ['*'])
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method GroupRegistrationPackage|_IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupRegistrationPackage|_IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] findOrFail($id, array|string $columns = ['*'])
     * @method GroupRegistrationPackage|_IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] findOrNew($id, array|string $columns = ['*'])
     * @method GroupRegistrationPackage first(array|string $columns = ['*'])
     * @method GroupRegistrationPackage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupRegistrationPackage firstOrCreate(array $attributes = [], array $values = [])
     * @method GroupRegistrationPackage firstOrFail(array|string $columns = ['*'])
     * @method GroupRegistrationPackage firstOrNew(array $attributes = [], array $values = [])
     * @method GroupRegistrationPackage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GroupRegistrationPackage forceCreate(array $attributes)
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] get(array|string $columns = ['*'])
     * @method GroupRegistrationPackage getModel()
     * @method GroupRegistrationPackage[] getModels(array|string $columns = ['*'])
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] hydrate(array $items)
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] lazy(int $chunkSize = 1000)
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method GroupRegistrationPackage make(array $attributes = [])
     * @method GroupRegistrationPackage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GroupRegistrationPackage[]|_IH_GroupRegistrationPackage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GroupRegistrationPackage restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|GroupRegistrationPackage[]|_IH_GroupRegistrationPackage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GroupRegistrationPackage sole(array|string $columns = ['*'])
     * @method GroupRegistrationPackage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GroupRegistrationPackage_QB extends _BaseBuilder {}
    
    /**
     * @method GroupUser|null getOrPut($key, $value)
     * @method GroupUser|$this shift(int $count = 1)
     * @method GroupUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method GroupUser|$this pop(int $count = 1)
     * @method GroupUser|null pull($key, \Closure $default = null)
     * @method GroupUser|null last(callable $callback = null, \Closure $default = null)
     * @method GroupUser|$this random(callable|int|null $number = null)
     * @method GroupUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method GroupUser|null get($key, \Closure $default = null)
     * @method GroupUser|null first(callable $callback = null, \Closure $default = null)
     * @method GroupUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method GroupUser|null find($key, $default = null)
     * @method GroupUser[] all()
     */
    class _IH_GroupUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @return GroupUser[][]|Collection<_IH_GroupUser_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_GroupUser_QB whereId($value)
     * @method _IH_GroupUser_QB whereGroupId($value)
     * @method _IH_GroupUser_QB whereUserId($value)
     * @method _IH_GroupUser_QB whereCreatedAt($value)
     * @method GroupUser baseSole(array|string $columns = ['*'])
     * @method GroupUser create(array $attributes = [])
     * @method _IH_GroupUser_C|GroupUser[] cursor()
     * @method GroupUser|null|_IH_GroupUser_C|GroupUser[] find($id, array|string $columns = ['*'])
     * @method _IH_GroupUser_C|GroupUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method GroupUser|_IH_GroupUser_C|GroupUser[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupUser|_IH_GroupUser_C|GroupUser[] findOrFail($id, array|string $columns = ['*'])
     * @method GroupUser|_IH_GroupUser_C|GroupUser[] findOrNew($id, array|string $columns = ['*'])
     * @method GroupUser first(array|string $columns = ['*'])
     * @method GroupUser firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method GroupUser firstOrCreate(array $attributes = [], array $values = [])
     * @method GroupUser firstOrFail(array|string $columns = ['*'])
     * @method GroupUser firstOrNew(array $attributes = [], array $values = [])
     * @method GroupUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method GroupUser forceCreate(array $attributes)
     * @method _IH_GroupUser_C|GroupUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_GroupUser_C|GroupUser[] get(array|string $columns = ['*'])
     * @method GroupUser getModel()
     * @method GroupUser[] getModels(array|string $columns = ['*'])
     * @method _IH_GroupUser_C|GroupUser[] hydrate(array $items)
     * @method _IH_GroupUser_C|GroupUser[] lazy(int $chunkSize = 1000)
     * @method _IH_GroupUser_C|GroupUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_GroupUser_C|GroupUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method GroupUser make(array $attributes = [])
     * @method GroupUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|GroupUser[]|_IH_GroupUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GroupUser restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|GroupUser[]|_IH_GroupUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method GroupUser sole(array|string $columns = ['*'])
     * @method GroupUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_GroupUser_QB extends _BaseBuilder {}
    
    /**
     * @method Group|null getOrPut($key, $value)
     * @method Group|$this shift(int $count = 1)
     * @method Group|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Group|$this pop(int $count = 1)
     * @method Group|null pull($key, \Closure $default = null)
     * @method Group|null last(callable $callback = null, \Closure $default = null)
     * @method Group|$this random(callable|int|null $number = null)
     * @method Group|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Group|null get($key, \Closure $default = null)
     * @method Group|null first(callable $callback = null, \Closure $default = null)
     * @method Group|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Group|null find($key, $default = null)
     * @method Group[] all()
     */
    class _IH_Group_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Group[][]|Collection<_IH_Group_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Group_QB whereId($value)
     * @method _IH_Group_QB whereCreatorId($value)
     * @method _IH_Group_QB whereName($value)
     * @method _IH_Group_QB wherePercent($value)
     * @method _IH_Group_QB whereCreatedAt($value)
     * @method _IH_Group_QB whereDiscount($value)
     * @method _IH_Group_QB whereCommission($value)
     * @method _IH_Group_QB whereStatus($value)
     * @method Group baseSole(array|string $columns = ['*'])
     * @method Group create(array $attributes = [])
     * @method _IH_Group_C|Group[] cursor()
     * @method Group|null|_IH_Group_C|Group[] find($id, array|string $columns = ['*'])
     * @method _IH_Group_C|Group[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Group|_IH_Group_C|Group[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Group|_IH_Group_C|Group[] findOrFail($id, array|string $columns = ['*'])
     * @method Group|_IH_Group_C|Group[] findOrNew($id, array|string $columns = ['*'])
     * @method Group first(array|string $columns = ['*'])
     * @method Group firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Group firstOrCreate(array $attributes = [], array $values = [])
     * @method Group firstOrFail(array|string $columns = ['*'])
     * @method Group firstOrNew(array $attributes = [], array $values = [])
     * @method Group firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Group forceCreate(array $attributes)
     * @method _IH_Group_C|Group[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Group_C|Group[] get(array|string $columns = ['*'])
     * @method Group getModel()
     * @method Group[] getModels(array|string $columns = ['*'])
     * @method _IH_Group_C|Group[] hydrate(array $items)
     * @method _IH_Group_C|Group[] lazy(int $chunkSize = 1000)
     * @method _IH_Group_C|Group[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Group_C|Group[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Group make(array $attributes = [])
     * @method Group newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Group[]|_IH_Group_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Group restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Group[]|_IH_Group_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Group sole(array|string $columns = ['*'])
     * @method Group updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Group_QB extends _BaseBuilder {}
    
    /**
     * @method HomePageStatistic|null getOrPut($key, $value)
     * @method HomePageStatistic|$this shift(int $count = 1)
     * @method HomePageStatistic|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method HomePageStatistic|$this pop(int $count = 1)
     * @method HomePageStatistic|null pull($key, \Closure $default = null)
     * @method HomePageStatistic|null last(callable $callback = null, \Closure $default = null)
     * @method HomePageStatistic|$this random(callable|int|null $number = null)
     * @method HomePageStatistic|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method HomePageStatistic|null get($key, \Closure $default = null)
     * @method HomePageStatistic|null first(callable $callback = null, \Closure $default = null)
     * @method HomePageStatistic|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method HomePageStatistic|null find($key, $default = null)
     * @method HomePageStatistic[] all()
     */
    class _IH_HomePageStatistic_C extends _BaseCollection {
        /**
         * @param int $size
         * @return HomePageStatistic[][]|Collection<_IH_HomePageStatistic_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_HomePageStatistic_QB whereId($value)
     * @method _IH_HomePageStatistic_QB whereIcon($value)
     * @method _IH_HomePageStatistic_QB whereColor($value)
     * @method _IH_HomePageStatistic_QB whereCount($value)
     * @method _IH_HomePageStatistic_QB whereOrder($value)
     * @method _IH_HomePageStatistic_QB whereCreatedAt($value)
     * @method HomePageStatistic baseSole(array|string $columns = ['*'])
     * @method HomePageStatistic create(array $attributes = [])
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] cursor()
     * @method HomePageStatistic|null|_IH_HomePageStatistic_C|HomePageStatistic[] find($id, array|string $columns = ['*'])
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method HomePageStatistic|_IH_HomePageStatistic_C|HomePageStatistic[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomePageStatistic|_IH_HomePageStatistic_C|HomePageStatistic[] findOrFail($id, array|string $columns = ['*'])
     * @method HomePageStatistic|_IH_HomePageStatistic_C|HomePageStatistic[] findOrNew($id, array|string $columns = ['*'])
     * @method HomePageStatistic first(array|string $columns = ['*'])
     * @method HomePageStatistic firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomePageStatistic firstOrCreate(array $attributes = [], array $values = [])
     * @method HomePageStatistic firstOrFail(array|string $columns = ['*'])
     * @method HomePageStatistic firstOrNew(array $attributes = [], array $values = [])
     * @method HomePageStatistic firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method HomePageStatistic forceCreate(array $attributes)
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] fromQuery(string $query, array $bindings = [])
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] get(array|string $columns = ['*'])
     * @method HomePageStatistic getModel()
     * @method HomePageStatistic[] getModels(array|string $columns = ['*'])
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] hydrate(array $items)
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] lazy(int $chunkSize = 1000)
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_HomePageStatistic_C|HomePageStatistic[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method HomePageStatistic make(array $attributes = [])
     * @method HomePageStatistic newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|HomePageStatistic[]|_IH_HomePageStatistic_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomePageStatistic restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|HomePageStatistic[]|_IH_HomePageStatistic_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomePageStatistic sole(array|string $columns = ['*'])
     * @method HomePageStatistic updateOrCreate(array $attributes, array $values = [])
     * @method _IH_HomePageStatistic_QB listsTranslations(string $translationField)
     * @method _IH_HomePageStatistic_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_HomePageStatistic_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_HomePageStatistic_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_HomePageStatistic_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_HomePageStatistic_QB translated()
     * @method _IH_HomePageStatistic_QB translatedIn(null|string $locale = null)
     * @method _IH_HomePageStatistic_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_HomePageStatistic_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_HomePageStatistic_QB withTranslation()
     */
    class _IH_HomePageStatistic_QB extends _BaseBuilder {}
    
    /**
     * @method HomeSection|null getOrPut($key, $value)
     * @method HomeSection|$this shift(int $count = 1)
     * @method HomeSection|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method HomeSection|$this pop(int $count = 1)
     * @method HomeSection|null pull($key, \Closure $default = null)
     * @method HomeSection|null last(callable $callback = null, \Closure $default = null)
     * @method HomeSection|$this random(callable|int|null $number = null)
     * @method HomeSection|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method HomeSection|null get($key, \Closure $default = null)
     * @method HomeSection|null first(callable $callback = null, \Closure $default = null)
     * @method HomeSection|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method HomeSection|null find($key, $default = null)
     * @method HomeSection[] all()
     */
    class _IH_HomeSection_C extends _BaseCollection {
        /**
         * @param int $size
         * @return HomeSection[][]|Collection<_IH_HomeSection_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_HomeSection_QB whereId($value)
     * @method _IH_HomeSection_QB whereName($value)
     * @method _IH_HomeSection_QB whereOrder($value)
     * @method HomeSection baseSole(array|string $columns = ['*'])
     * @method HomeSection create(array $attributes = [])
     * @method _IH_HomeSection_C|HomeSection[] cursor()
     * @method HomeSection|null|_IH_HomeSection_C|HomeSection[] find($id, array|string $columns = ['*'])
     * @method _IH_HomeSection_C|HomeSection[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method HomeSection|_IH_HomeSection_C|HomeSection[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomeSection|_IH_HomeSection_C|HomeSection[] findOrFail($id, array|string $columns = ['*'])
     * @method HomeSection|_IH_HomeSection_C|HomeSection[] findOrNew($id, array|string $columns = ['*'])
     * @method HomeSection first(array|string $columns = ['*'])
     * @method HomeSection firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomeSection firstOrCreate(array $attributes = [], array $values = [])
     * @method HomeSection firstOrFail(array|string $columns = ['*'])
     * @method HomeSection firstOrNew(array $attributes = [], array $values = [])
     * @method HomeSection firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method HomeSection forceCreate(array $attributes)
     * @method _IH_HomeSection_C|HomeSection[] fromQuery(string $query, array $bindings = [])
     * @method _IH_HomeSection_C|HomeSection[] get(array|string $columns = ['*'])
     * @method HomeSection getModel()
     * @method HomeSection[] getModels(array|string $columns = ['*'])
     * @method _IH_HomeSection_C|HomeSection[] hydrate(array $items)
     * @method _IH_HomeSection_C|HomeSection[] lazy(int $chunkSize = 1000)
     * @method _IH_HomeSection_C|HomeSection[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_HomeSection_C|HomeSection[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method HomeSection make(array $attributes = [])
     * @method HomeSection newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|HomeSection[]|_IH_HomeSection_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomeSection restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|HomeSection[]|_IH_HomeSection_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomeSection sole(array|string $columns = ['*'])
     * @method HomeSection updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_HomeSection_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentOrderAttachment|null getOrPut($key, $value)
     * @method InstallmentOrderAttachment|$this shift(int $count = 1)
     * @method InstallmentOrderAttachment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrderAttachment|$this pop(int $count = 1)
     * @method InstallmentOrderAttachment|null pull($key, \Closure $default = null)
     * @method InstallmentOrderAttachment|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrderAttachment|$this random(callable|int|null $number = null)
     * @method InstallmentOrderAttachment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrderAttachment|null get($key, \Closure $default = null)
     * @method InstallmentOrderAttachment|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrderAttachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentOrderAttachment|null find($key, $default = null)
     * @method InstallmentOrderAttachment[] all()
     */
    class _IH_InstallmentOrderAttachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentOrderAttachment[][]|Collection<_IH_InstallmentOrderAttachment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentOrderAttachment_QB whereId($value)
     * @method _IH_InstallmentOrderAttachment_QB whereInstallmentOrderId($value)
     * @method _IH_InstallmentOrderAttachment_QB whereTitle($value)
     * @method _IH_InstallmentOrderAttachment_QB whereFile($value)
     * @method InstallmentOrderAttachment baseSole(array|string $columns = ['*'])
     * @method InstallmentOrderAttachment create(array $attributes = [])
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] cursor()
     * @method InstallmentOrderAttachment|null|_IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentOrderAttachment|_IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrderAttachment|_IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentOrderAttachment|_IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentOrderAttachment first(array|string $columns = ['*'])
     * @method InstallmentOrderAttachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrderAttachment firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentOrderAttachment firstOrFail(array|string $columns = ['*'])
     * @method InstallmentOrderAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentOrderAttachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentOrderAttachment forceCreate(array $attributes)
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] get(array|string $columns = ['*'])
     * @method InstallmentOrderAttachment getModel()
     * @method InstallmentOrderAttachment[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] hydrate(array $items)
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentOrderAttachment make(array $attributes = [])
     * @method InstallmentOrderAttachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentOrderAttachment[]|_IH_InstallmentOrderAttachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrderAttachment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentOrderAttachment[]|_IH_InstallmentOrderAttachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrderAttachment sole(array|string $columns = ['*'])
     * @method InstallmentOrderAttachment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentOrderAttachment_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentOrderPayment|null getOrPut($key, $value)
     * @method InstallmentOrderPayment|$this shift(int $count = 1)
     * @method InstallmentOrderPayment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrderPayment|$this pop(int $count = 1)
     * @method InstallmentOrderPayment|null pull($key, \Closure $default = null)
     * @method InstallmentOrderPayment|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrderPayment|$this random(callable|int|null $number = null)
     * @method InstallmentOrderPayment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrderPayment|null get($key, \Closure $default = null)
     * @method InstallmentOrderPayment|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrderPayment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentOrderPayment|null find($key, $default = null)
     * @method InstallmentOrderPayment[] all()
     */
    class _IH_InstallmentOrderPayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentOrderPayment[][]|Collection<_IH_InstallmentOrderPayment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentOrderPayment_QB whereId($value)
     * @method _IH_InstallmentOrderPayment_QB whereInstallmentOrderId($value)
     * @method _IH_InstallmentOrderPayment_QB whereSaleId($value)
     * @method _IH_InstallmentOrderPayment_QB whereType($value)
     * @method _IH_InstallmentOrderPayment_QB whereStepId($value)
     * @method _IH_InstallmentOrderPayment_QB whereAmount($value)
     * @method _IH_InstallmentOrderPayment_QB whereStatus($value)
     * @method _IH_InstallmentOrderPayment_QB whereCreatedAt($value)
     * @method _IH_InstallmentOrderPayment_QB whereSelectedInstallmentStepId($value)
     * @method InstallmentOrderPayment baseSole(array|string $columns = ['*'])
     * @method InstallmentOrderPayment create(array $attributes = [])
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] cursor()
     * @method InstallmentOrderPayment|null|_IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentOrderPayment|_IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrderPayment|_IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentOrderPayment|_IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentOrderPayment first(array|string $columns = ['*'])
     * @method InstallmentOrderPayment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrderPayment firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentOrderPayment firstOrFail(array|string $columns = ['*'])
     * @method InstallmentOrderPayment firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentOrderPayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentOrderPayment forceCreate(array $attributes)
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] get(array|string $columns = ['*'])
     * @method InstallmentOrderPayment getModel()
     * @method InstallmentOrderPayment[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] hydrate(array $items)
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentOrderPayment make(array $attributes = [])
     * @method InstallmentOrderPayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentOrderPayment[]|_IH_InstallmentOrderPayment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrderPayment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentOrderPayment[]|_IH_InstallmentOrderPayment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrderPayment sole(array|string $columns = ['*'])
     * @method InstallmentOrderPayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentOrderPayment_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentOrder|null getOrPut($key, $value)
     * @method InstallmentOrder|$this shift(int $count = 1)
     * @method InstallmentOrder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrder|$this pop(int $count = 1)
     * @method InstallmentOrder|null pull($key, \Closure $default = null)
     * @method InstallmentOrder|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrder|$this random(callable|int|null $number = null)
     * @method InstallmentOrder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentOrder|null get($key, \Closure $default = null)
     * @method InstallmentOrder|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentOrder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentOrder|null find($key, $default = null)
     * @method InstallmentOrder[] all()
     */
    class _IH_InstallmentOrder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentOrder[][]|Collection<_IH_InstallmentOrder_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentOrder_QB whereId($value)
     * @method _IH_InstallmentOrder_QB whereInstallmentId($value)
     * @method _IH_InstallmentOrder_QB whereUserId($value)
     * @method _IH_InstallmentOrder_QB whereWebinarId($value)
     * @method _IH_InstallmentOrder_QB whereProductId($value)
     * @method _IH_InstallmentOrder_QB whereBundleId($value)
     * @method _IH_InstallmentOrder_QB whereSubscribeId($value)
     * @method _IH_InstallmentOrder_QB whereRegistrationPackageId($value)
     * @method _IH_InstallmentOrder_QB whereProductOrderId($value)
     * @method _IH_InstallmentOrder_QB whereStatus($value)
     * @method _IH_InstallmentOrder_QB whereCreatedAt($value)
     * @method _IH_InstallmentOrder_QB whereRefundAt($value)
     * @method _IH_InstallmentOrder_QB whereItemPrice($value)
     * @method InstallmentOrder baseSole(array|string $columns = ['*'])
     * @method InstallmentOrder create(array $attributes = [])
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] cursor()
     * @method InstallmentOrder|null|_IH_InstallmentOrder_C|InstallmentOrder[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentOrder|_IH_InstallmentOrder_C|InstallmentOrder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrder|_IH_InstallmentOrder_C|InstallmentOrder[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentOrder|_IH_InstallmentOrder_C|InstallmentOrder[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentOrder first(array|string $columns = ['*'])
     * @method InstallmentOrder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentOrder firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentOrder firstOrFail(array|string $columns = ['*'])
     * @method InstallmentOrder firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentOrder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentOrder forceCreate(array $attributes)
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] get(array|string $columns = ['*'])
     * @method InstallmentOrder getModel()
     * @method InstallmentOrder[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] hydrate(array $items)
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentOrder_C|InstallmentOrder[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentOrder make(array $attributes = [])
     * @method InstallmentOrder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentOrder[]|_IH_InstallmentOrder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrder restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentOrder[]|_IH_InstallmentOrder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentOrder sole(array|string $columns = ['*'])
     * @method InstallmentOrder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentOrder_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentReminder|null getOrPut($key, $value)
     * @method InstallmentReminder|$this shift(int $count = 1)
     * @method InstallmentReminder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentReminder|$this pop(int $count = 1)
     * @method InstallmentReminder|null pull($key, \Closure $default = null)
     * @method InstallmentReminder|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentReminder|$this random(callable|int|null $number = null)
     * @method InstallmentReminder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentReminder|null get($key, \Closure $default = null)
     * @method InstallmentReminder|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentReminder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentReminder|null find($key, $default = null)
     * @method InstallmentReminder[] all()
     */
    class _IH_InstallmentReminder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentReminder[][]|Collection<_IH_InstallmentReminder_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentReminder_QB whereId($value)
     * @method _IH_InstallmentReminder_QB whereUserId($value)
     * @method _IH_InstallmentReminder_QB whereInstallmentOrderId($value)
     * @method _IH_InstallmentReminder_QB whereInstallmentStepId($value)
     * @method _IH_InstallmentReminder_QB whereType($value)
     * @method _IH_InstallmentReminder_QB whereCreatedAt($value)
     * @method InstallmentReminder baseSole(array|string $columns = ['*'])
     * @method InstallmentReminder create(array $attributes = [])
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] cursor()
     * @method InstallmentReminder|null|_IH_InstallmentReminder_C|InstallmentReminder[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentReminder|_IH_InstallmentReminder_C|InstallmentReminder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentReminder|_IH_InstallmentReminder_C|InstallmentReminder[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentReminder|_IH_InstallmentReminder_C|InstallmentReminder[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentReminder first(array|string $columns = ['*'])
     * @method InstallmentReminder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentReminder firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentReminder firstOrFail(array|string $columns = ['*'])
     * @method InstallmentReminder firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentReminder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentReminder forceCreate(array $attributes)
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] get(array|string $columns = ['*'])
     * @method InstallmentReminder getModel()
     * @method InstallmentReminder[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] hydrate(array $items)
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentReminder_C|InstallmentReminder[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentReminder make(array $attributes = [])
     * @method InstallmentReminder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentReminder[]|_IH_InstallmentReminder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentReminder restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentReminder[]|_IH_InstallmentReminder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentReminder sole(array|string $columns = ['*'])
     * @method InstallmentReminder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentReminder_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentSpecificationItem|null getOrPut($key, $value)
     * @method InstallmentSpecificationItem|$this shift(int $count = 1)
     * @method InstallmentSpecificationItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentSpecificationItem|$this pop(int $count = 1)
     * @method InstallmentSpecificationItem|null pull($key, \Closure $default = null)
     * @method InstallmentSpecificationItem|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentSpecificationItem|$this random(callable|int|null $number = null)
     * @method InstallmentSpecificationItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentSpecificationItem|null get($key, \Closure $default = null)
     * @method InstallmentSpecificationItem|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentSpecificationItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentSpecificationItem|null find($key, $default = null)
     * @method InstallmentSpecificationItem[] all()
     */
    class _IH_InstallmentSpecificationItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentSpecificationItem[][]|Collection<_IH_InstallmentSpecificationItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentSpecificationItem_QB whereId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereInstallmentId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereCategoryId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereInstructorId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereSellerId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereWebinarId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereProductId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereBundleId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereSubscribeId($value)
     * @method _IH_InstallmentSpecificationItem_QB whereRegistrationPackageId($value)
     * @method InstallmentSpecificationItem baseSole(array|string $columns = ['*'])
     * @method InstallmentSpecificationItem create(array $attributes = [])
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] cursor()
     * @method InstallmentSpecificationItem|null|_IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentSpecificationItem|_IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentSpecificationItem|_IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentSpecificationItem|_IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentSpecificationItem first(array|string $columns = ['*'])
     * @method InstallmentSpecificationItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentSpecificationItem firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentSpecificationItem firstOrFail(array|string $columns = ['*'])
     * @method InstallmentSpecificationItem firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentSpecificationItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentSpecificationItem forceCreate(array $attributes)
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] get(array|string $columns = ['*'])
     * @method InstallmentSpecificationItem getModel()
     * @method InstallmentSpecificationItem[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] hydrate(array $items)
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentSpecificationItem make(array $attributes = [])
     * @method InstallmentSpecificationItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentSpecificationItem[]|_IH_InstallmentSpecificationItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentSpecificationItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentSpecificationItem[]|_IH_InstallmentSpecificationItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentSpecificationItem sole(array|string $columns = ['*'])
     * @method InstallmentSpecificationItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentSpecificationItem_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentStep|null getOrPut($key, $value)
     * @method InstallmentStep|$this shift(int $count = 1)
     * @method InstallmentStep|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentStep|$this pop(int $count = 1)
     * @method InstallmentStep|null pull($key, \Closure $default = null)
     * @method InstallmentStep|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentStep|$this random(callable|int|null $number = null)
     * @method InstallmentStep|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentStep|null get($key, \Closure $default = null)
     * @method InstallmentStep|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentStep|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentStep|null find($key, $default = null)
     * @method InstallmentStep[] all()
     */
    class _IH_InstallmentStep_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentStep[][]|Collection<_IH_InstallmentStep_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentStep_QB whereId($value)
     * @method _IH_InstallmentStep_QB whereInstallmentId($value)
     * @method _IH_InstallmentStep_QB whereDeadline($value)
     * @method _IH_InstallmentStep_QB whereAmount($value)
     * @method _IH_InstallmentStep_QB whereAmountType($value)
     * @method _IH_InstallmentStep_QB whereOrder($value)
     * @method InstallmentStep baseSole(array|string $columns = ['*'])
     * @method InstallmentStep create(array $attributes = [])
     * @method _IH_InstallmentStep_C|InstallmentStep[] cursor()
     * @method InstallmentStep|null|_IH_InstallmentStep_C|InstallmentStep[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentStep_C|InstallmentStep[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentStep|_IH_InstallmentStep_C|InstallmentStep[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentStep|_IH_InstallmentStep_C|InstallmentStep[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentStep|_IH_InstallmentStep_C|InstallmentStep[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentStep first(array|string $columns = ['*'])
     * @method InstallmentStep firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentStep firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentStep firstOrFail(array|string $columns = ['*'])
     * @method InstallmentStep firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentStep firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentStep forceCreate(array $attributes)
     * @method _IH_InstallmentStep_C|InstallmentStep[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentStep_C|InstallmentStep[] get(array|string $columns = ['*'])
     * @method InstallmentStep getModel()
     * @method InstallmentStep[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentStep_C|InstallmentStep[] hydrate(array $items)
     * @method _IH_InstallmentStep_C|InstallmentStep[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentStep_C|InstallmentStep[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentStep_C|InstallmentStep[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentStep make(array $attributes = [])
     * @method InstallmentStep newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentStep[]|_IH_InstallmentStep_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentStep restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentStep[]|_IH_InstallmentStep_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentStep sole(array|string $columns = ['*'])
     * @method InstallmentStep updateOrCreate(array $attributes, array $values = [])
     * @method _IH_InstallmentStep_QB listsTranslations(string $translationField)
     * @method _IH_InstallmentStep_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_InstallmentStep_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_InstallmentStep_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_InstallmentStep_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_InstallmentStep_QB translated()
     * @method _IH_InstallmentStep_QB translatedIn(null|string $locale = null)
     * @method _IH_InstallmentStep_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_InstallmentStep_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_InstallmentStep_QB withTranslation()
     */
    class _IH_InstallmentStep_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentUserGroup|null getOrPut($key, $value)
     * @method InstallmentUserGroup|$this shift(int $count = 1)
     * @method InstallmentUserGroup|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentUserGroup|$this pop(int $count = 1)
     * @method InstallmentUserGroup|null pull($key, \Closure $default = null)
     * @method InstallmentUserGroup|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentUserGroup|$this random(callable|int|null $number = null)
     * @method InstallmentUserGroup|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentUserGroup|null get($key, \Closure $default = null)
     * @method InstallmentUserGroup|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentUserGroup|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentUserGroup|null find($key, $default = null)
     * @method InstallmentUserGroup[] all()
     */
    class _IH_InstallmentUserGroup_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentUserGroup[][]|Collection<_IH_InstallmentUserGroup_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentUserGroup_QB whereId($value)
     * @method _IH_InstallmentUserGroup_QB whereInstallmentId($value)
     * @method _IH_InstallmentUserGroup_QB whereGroupId($value)
     * @method InstallmentUserGroup baseSole(array|string $columns = ['*'])
     * @method InstallmentUserGroup create(array $attributes = [])
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] cursor()
     * @method InstallmentUserGroup|null|_IH_InstallmentUserGroup_C|InstallmentUserGroup[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentUserGroup|_IH_InstallmentUserGroup_C|InstallmentUserGroup[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentUserGroup|_IH_InstallmentUserGroup_C|InstallmentUserGroup[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentUserGroup|_IH_InstallmentUserGroup_C|InstallmentUserGroup[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentUserGroup first(array|string $columns = ['*'])
     * @method InstallmentUserGroup firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentUserGroup firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentUserGroup firstOrFail(array|string $columns = ['*'])
     * @method InstallmentUserGroup firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentUserGroup firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentUserGroup forceCreate(array $attributes)
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] get(array|string $columns = ['*'])
     * @method InstallmentUserGroup getModel()
     * @method InstallmentUserGroup[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] hydrate(array $items)
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentUserGroup_C|InstallmentUserGroup[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentUserGroup make(array $attributes = [])
     * @method InstallmentUserGroup newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentUserGroup[]|_IH_InstallmentUserGroup_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentUserGroup restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentUserGroup[]|_IH_InstallmentUserGroup_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentUserGroup sole(array|string $columns = ['*'])
     * @method InstallmentUserGroup updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentUserGroup_QB extends _BaseBuilder {}
    
    /**
     * @method Installment|null getOrPut($key, $value)
     * @method Installment|$this shift(int $count = 1)
     * @method Installment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Installment|$this pop(int $count = 1)
     * @method Installment|null pull($key, \Closure $default = null)
     * @method Installment|null last(callable $callback = null, \Closure $default = null)
     * @method Installment|$this random(callable|int|null $number = null)
     * @method Installment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Installment|null get($key, \Closure $default = null)
     * @method Installment|null first(callable $callback = null, \Closure $default = null)
     * @method Installment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Installment|null find($key, $default = null)
     * @method Installment[] all()
     */
    class _IH_Installment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Installment[][]|Collection<_IH_Installment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Installment_QB whereId($value)
     * @method _IH_Installment_QB whereTargetType($value)
     * @method _IH_Installment_QB whereTarget($value)
     * @method _IH_Installment_QB whereCapacity($value)
     * @method _IH_Installment_QB whereStartDate($value)
     * @method _IH_Installment_QB whereEndDate($value)
     * @method _IH_Installment_QB whereVerification($value)
     * @method _IH_Installment_QB whereRequestUploads($value)
     * @method _IH_Installment_QB whereBypassVerificationForVerifiedUsers($value)
     * @method _IH_Installment_QB whereUpfront($value)
     * @method _IH_Installment_QB whereUpfrontType($value)
     * @method _IH_Installment_QB whereEnable($value)
     * @method _IH_Installment_QB whereCreatedAt($value)
     * @method Installment baseSole(array|string $columns = ['*'])
     * @method Installment create(array $attributes = [])
     * @method _IH_Installment_C|Installment[] cursor()
     * @method Installment|null|_IH_Installment_C|Installment[] find($id, array|string $columns = ['*'])
     * @method _IH_Installment_C|Installment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Installment|_IH_Installment_C|Installment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Installment|_IH_Installment_C|Installment[] findOrFail($id, array|string $columns = ['*'])
     * @method Installment|_IH_Installment_C|Installment[] findOrNew($id, array|string $columns = ['*'])
     * @method Installment first(array|string $columns = ['*'])
     * @method Installment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Installment firstOrCreate(array $attributes = [], array $values = [])
     * @method Installment firstOrFail(array|string $columns = ['*'])
     * @method Installment firstOrNew(array $attributes = [], array $values = [])
     * @method Installment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Installment forceCreate(array $attributes)
     * @method _IH_Installment_C|Installment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Installment_C|Installment[] get(array|string $columns = ['*'])
     * @method Installment getModel()
     * @method Installment[] getModels(array|string $columns = ['*'])
     * @method _IH_Installment_C|Installment[] hydrate(array $items)
     * @method _IH_Installment_C|Installment[] lazy(int $chunkSize = 1000)
     * @method _IH_Installment_C|Installment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Installment_C|Installment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Installment make(array $attributes = [])
     * @method Installment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Installment[]|_IH_Installment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Installment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Installment[]|_IH_Installment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Installment sole(array|string $columns = ['*'])
     * @method Installment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Installment_QB listsTranslations(string $translationField)
     * @method _IH_Installment_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Installment_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Installment_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Installment_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Installment_QB translated()
     * @method _IH_Installment_QB translatedIn(null|string $locale = null)
     * @method _IH_Installment_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Installment_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Installment_QB withTranslation()
     */
    class _IH_Installment_QB extends _BaseBuilder {}
    
    /**
     * @method IpRestriction|null getOrPut($key, $value)
     * @method IpRestriction|$this shift(int $count = 1)
     * @method IpRestriction|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method IpRestriction|$this pop(int $count = 1)
     * @method IpRestriction|null pull($key, \Closure $default = null)
     * @method IpRestriction|null last(callable $callback = null, \Closure $default = null)
     * @method IpRestriction|$this random(callable|int|null $number = null)
     * @method IpRestriction|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method IpRestriction|null get($key, \Closure $default = null)
     * @method IpRestriction|null first(callable $callback = null, \Closure $default = null)
     * @method IpRestriction|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method IpRestriction|null find($key, $default = null)
     * @method IpRestriction[] all()
     */
    class _IH_IpRestriction_C extends _BaseCollection {
        /**
         * @param int $size
         * @return IpRestriction[][]|Collection<_IH_IpRestriction_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_IpRestriction_QB whereId($value)
     * @method _IH_IpRestriction_QB whereType($value)
     * @method _IH_IpRestriction_QB whereValue($value)
     * @method _IH_IpRestriction_QB whereReason($value)
     * @method _IH_IpRestriction_QB whereCreatedAt($value)
     * @method IpRestriction baseSole(array|string $columns = ['*'])
     * @method IpRestriction create(array $attributes = [])
     * @method _IH_IpRestriction_C|IpRestriction[] cursor()
     * @method IpRestriction|null|_IH_IpRestriction_C|IpRestriction[] find($id, array|string $columns = ['*'])
     * @method _IH_IpRestriction_C|IpRestriction[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method IpRestriction|_IH_IpRestriction_C|IpRestriction[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method IpRestriction|_IH_IpRestriction_C|IpRestriction[] findOrFail($id, array|string $columns = ['*'])
     * @method IpRestriction|_IH_IpRestriction_C|IpRestriction[] findOrNew($id, array|string $columns = ['*'])
     * @method IpRestriction first(array|string $columns = ['*'])
     * @method IpRestriction firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method IpRestriction firstOrCreate(array $attributes = [], array $values = [])
     * @method IpRestriction firstOrFail(array|string $columns = ['*'])
     * @method IpRestriction firstOrNew(array $attributes = [], array $values = [])
     * @method IpRestriction firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method IpRestriction forceCreate(array $attributes)
     * @method _IH_IpRestriction_C|IpRestriction[] fromQuery(string $query, array $bindings = [])
     * @method _IH_IpRestriction_C|IpRestriction[] get(array|string $columns = ['*'])
     * @method IpRestriction getModel()
     * @method IpRestriction[] getModels(array|string $columns = ['*'])
     * @method _IH_IpRestriction_C|IpRestriction[] hydrate(array $items)
     * @method _IH_IpRestriction_C|IpRestriction[] lazy(int $chunkSize = 1000)
     * @method _IH_IpRestriction_C|IpRestriction[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_IpRestriction_C|IpRestriction[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method IpRestriction make(array $attributes = [])
     * @method IpRestriction newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|IpRestriction[]|_IH_IpRestriction_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method IpRestriction restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|IpRestriction[]|_IH_IpRestriction_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method IpRestriction sole(array|string $columns = ['*'])
     * @method IpRestriction updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_IpRestriction_QB extends _BaseBuilder {}
    
    /**
     * @method MeetingTime|null getOrPut($key, $value)
     * @method MeetingTime|$this shift(int $count = 1)
     * @method MeetingTime|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method MeetingTime|$this pop(int $count = 1)
     * @method MeetingTime|null pull($key, \Closure $default = null)
     * @method MeetingTime|null last(callable $callback = null, \Closure $default = null)
     * @method MeetingTime|$this random(callable|int|null $number = null)
     * @method MeetingTime|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method MeetingTime|null get($key, \Closure $default = null)
     * @method MeetingTime|null first(callable $callback = null, \Closure $default = null)
     * @method MeetingTime|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method MeetingTime|null find($key, $default = null)
     * @method MeetingTime[] all()
     */
    class _IH_MeetingTime_C extends _BaseCollection {
        /**
         * @param int $size
         * @return MeetingTime[][]|Collection<_IH_MeetingTime_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_MeetingTime_QB whereId($value)
     * @method _IH_MeetingTime_QB whereMeetingId($value)
     * @method _IH_MeetingTime_QB whereDayLabel($value)
     * @method _IH_MeetingTime_QB whereCreatedAt($value)
     * @method _IH_MeetingTime_QB whereMeetingType($value)
     * @method _IH_MeetingTime_QB whereDescription($value)
     * @method MeetingTime baseSole(array|string $columns = ['*'])
     * @method MeetingTime create(array $attributes = [])
     * @method _IH_MeetingTime_C|MeetingTime[] cursor()
     * @method MeetingTime|null|_IH_MeetingTime_C|MeetingTime[] find($id, array|string $columns = ['*'])
     * @method _IH_MeetingTime_C|MeetingTime[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method MeetingTime|_IH_MeetingTime_C|MeetingTime[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MeetingTime|_IH_MeetingTime_C|MeetingTime[] findOrFail($id, array|string $columns = ['*'])
     * @method MeetingTime|_IH_MeetingTime_C|MeetingTime[] findOrNew($id, array|string $columns = ['*'])
     * @method MeetingTime first(array|string $columns = ['*'])
     * @method MeetingTime firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method MeetingTime firstOrCreate(array $attributes = [], array $values = [])
     * @method MeetingTime firstOrFail(array|string $columns = ['*'])
     * @method MeetingTime firstOrNew(array $attributes = [], array $values = [])
     * @method MeetingTime firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method MeetingTime forceCreate(array $attributes)
     * @method _IH_MeetingTime_C|MeetingTime[] fromQuery(string $query, array $bindings = [])
     * @method _IH_MeetingTime_C|MeetingTime[] get(array|string $columns = ['*'])
     * @method MeetingTime getModel()
     * @method MeetingTime[] getModels(array|string $columns = ['*'])
     * @method _IH_MeetingTime_C|MeetingTime[] hydrate(array $items)
     * @method _IH_MeetingTime_C|MeetingTime[] lazy(int $chunkSize = 1000)
     * @method _IH_MeetingTime_C|MeetingTime[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_MeetingTime_C|MeetingTime[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method MeetingTime make(array $attributes = [])
     * @method MeetingTime newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|MeetingTime[]|_IH_MeetingTime_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MeetingTime restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|MeetingTime[]|_IH_MeetingTime_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method MeetingTime sole(array|string $columns = ['*'])
     * @method MeetingTime updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_MeetingTime_QB extends _BaseBuilder {}
    
    /**
     * @method Meeting|null getOrPut($key, $value)
     * @method Meeting|$this shift(int $count = 1)
     * @method Meeting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Meeting|$this pop(int $count = 1)
     * @method Meeting|null pull($key, \Closure $default = null)
     * @method Meeting|null last(callable $callback = null, \Closure $default = null)
     * @method Meeting|$this random(callable|int|null $number = null)
     * @method Meeting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Meeting|null get($key, \Closure $default = null)
     * @method Meeting|null first(callable $callback = null, \Closure $default = null)
     * @method Meeting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Meeting|null find($key, $default = null)
     * @method Meeting[] all()
     */
    class _IH_Meeting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Meeting[][]|Collection<_IH_Meeting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Meeting_QB whereId($value)
     * @method _IH_Meeting_QB whereCreatorId($value)
     * @method _IH_Meeting_QB whereAmount($value)
     * @method _IH_Meeting_QB whereDiscount($value)
     * @method _IH_Meeting_QB whereDisabled($value)
     * @method _IH_Meeting_QB whereCreatedAt($value)
     * @method _IH_Meeting_QB whereInPerson($value)
     * @method _IH_Meeting_QB whereInPersonAmount($value)
     * @method _IH_Meeting_QB whereGroupMeeting($value)
     * @method _IH_Meeting_QB whereOnlineGroupMinStudent($value)
     * @method _IH_Meeting_QB whereOnlineGroupMaxStudent($value)
     * @method _IH_Meeting_QB whereOnlineGroupAmount($value)
     * @method _IH_Meeting_QB whereInPersonGroupMinStudent($value)
     * @method _IH_Meeting_QB whereInPersonGroupMaxStudent($value)
     * @method _IH_Meeting_QB whereInPersonGroupAmount($value)
     * @method Meeting baseSole(array|string $columns = ['*'])
     * @method Meeting create(array $attributes = [])
     * @method _IH_Meeting_C|Meeting[] cursor()
     * @method Meeting|null|_IH_Meeting_C|Meeting[] find($id, array|string $columns = ['*'])
     * @method _IH_Meeting_C|Meeting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Meeting|_IH_Meeting_C|Meeting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Meeting|_IH_Meeting_C|Meeting[] findOrFail($id, array|string $columns = ['*'])
     * @method Meeting|_IH_Meeting_C|Meeting[] findOrNew($id, array|string $columns = ['*'])
     * @method Meeting first(array|string $columns = ['*'])
     * @method Meeting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Meeting firstOrCreate(array $attributes = [], array $values = [])
     * @method Meeting firstOrFail(array|string $columns = ['*'])
     * @method Meeting firstOrNew(array $attributes = [], array $values = [])
     * @method Meeting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Meeting forceCreate(array $attributes)
     * @method _IH_Meeting_C|Meeting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Meeting_C|Meeting[] get(array|string $columns = ['*'])
     * @method Meeting getModel()
     * @method Meeting[] getModels(array|string $columns = ['*'])
     * @method _IH_Meeting_C|Meeting[] hydrate(array $items)
     * @method _IH_Meeting_C|Meeting[] lazy(int $chunkSize = 1000)
     * @method _IH_Meeting_C|Meeting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Meeting_C|Meeting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Meeting make(array $attributes = [])
     * @method Meeting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Meeting[]|_IH_Meeting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Meeting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Meeting[]|_IH_Meeting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Meeting sole(array|string $columns = ['*'])
     * @method Meeting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Meeting_QB extends _BaseBuilder {}
    
    /**
     * @method NavbarButton|null getOrPut($key, $value)
     * @method NavbarButton|$this shift(int $count = 1)
     * @method NavbarButton|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NavbarButton|$this pop(int $count = 1)
     * @method NavbarButton|null pull($key, \Closure $default = null)
     * @method NavbarButton|null last(callable $callback = null, \Closure $default = null)
     * @method NavbarButton|$this random(callable|int|null $number = null)
     * @method NavbarButton|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NavbarButton|null get($key, \Closure $default = null)
     * @method NavbarButton|null first(callable $callback = null, \Closure $default = null)
     * @method NavbarButton|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NavbarButton|null find($key, $default = null)
     * @method NavbarButton[] all()
     */
    class _IH_NavbarButton_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NavbarButton[][]|Collection<_IH_NavbarButton_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NavbarButton_QB whereId($value)
     * @method _IH_NavbarButton_QB whereRoleId($value)
     * @method _IH_NavbarButton_QB whereForGuest($value)
     * @method NavbarButton baseSole(array|string $columns = ['*'])
     * @method NavbarButton create(array $attributes = [])
     * @method _IH_NavbarButton_C|NavbarButton[] cursor()
     * @method NavbarButton|null|_IH_NavbarButton_C|NavbarButton[] find($id, array|string $columns = ['*'])
     * @method _IH_NavbarButton_C|NavbarButton[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NavbarButton|_IH_NavbarButton_C|NavbarButton[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NavbarButton|_IH_NavbarButton_C|NavbarButton[] findOrFail($id, array|string $columns = ['*'])
     * @method NavbarButton|_IH_NavbarButton_C|NavbarButton[] findOrNew($id, array|string $columns = ['*'])
     * @method NavbarButton first(array|string $columns = ['*'])
     * @method NavbarButton firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NavbarButton firstOrCreate(array $attributes = [], array $values = [])
     * @method NavbarButton firstOrFail(array|string $columns = ['*'])
     * @method NavbarButton firstOrNew(array $attributes = [], array $values = [])
     * @method NavbarButton firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NavbarButton forceCreate(array $attributes)
     * @method _IH_NavbarButton_C|NavbarButton[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NavbarButton_C|NavbarButton[] get(array|string $columns = ['*'])
     * @method NavbarButton getModel()
     * @method NavbarButton[] getModels(array|string $columns = ['*'])
     * @method _IH_NavbarButton_C|NavbarButton[] hydrate(array $items)
     * @method _IH_NavbarButton_C|NavbarButton[] lazy(int $chunkSize = 1000)
     * @method _IH_NavbarButton_C|NavbarButton[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NavbarButton_C|NavbarButton[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NavbarButton make(array $attributes = [])
     * @method NavbarButton newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NavbarButton[]|_IH_NavbarButton_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NavbarButton restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NavbarButton[]|_IH_NavbarButton_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NavbarButton sole(array|string $columns = ['*'])
     * @method NavbarButton updateOrCreate(array $attributes, array $values = [])
     * @method _IH_NavbarButton_QB listsTranslations(string $translationField)
     * @method _IH_NavbarButton_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_NavbarButton_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_NavbarButton_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_NavbarButton_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_NavbarButton_QB translated()
     * @method _IH_NavbarButton_QB translatedIn(null|string $locale = null)
     * @method _IH_NavbarButton_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_NavbarButton_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_NavbarButton_QB withTranslation()
     */
    class _IH_NavbarButton_QB extends _BaseBuilder {}
    
    /**
     * @method NewsletterHistory|null getOrPut($key, $value)
     * @method NewsletterHistory|$this shift(int $count = 1)
     * @method NewsletterHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NewsletterHistory|$this pop(int $count = 1)
     * @method NewsletterHistory|null pull($key, \Closure $default = null)
     * @method NewsletterHistory|null last(callable $callback = null, \Closure $default = null)
     * @method NewsletterHistory|$this random(callable|int|null $number = null)
     * @method NewsletterHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NewsletterHistory|null get($key, \Closure $default = null)
     * @method NewsletterHistory|null first(callable $callback = null, \Closure $default = null)
     * @method NewsletterHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NewsletterHistory|null find($key, $default = null)
     * @method NewsletterHistory[] all()
     */
    class _IH_NewsletterHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NewsletterHistory[][]|Collection<_IH_NewsletterHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NewsletterHistory_QB whereId($value)
     * @method _IH_NewsletterHistory_QB whereTitle($value)
     * @method _IH_NewsletterHistory_QB whereDescription($value)
     * @method _IH_NewsletterHistory_QB whereSendMethod($value)
     * @method _IH_NewsletterHistory_QB whereBccEmail($value)
     * @method _IH_NewsletterHistory_QB whereEmailCount($value)
     * @method _IH_NewsletterHistory_QB whereCreatedAt($value)
     * @method NewsletterHistory baseSole(array|string $columns = ['*'])
     * @method NewsletterHistory create(array $attributes = [])
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] cursor()
     * @method NewsletterHistory|null|_IH_NewsletterHistory_C|NewsletterHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NewsletterHistory|_IH_NewsletterHistory_C|NewsletterHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NewsletterHistory|_IH_NewsletterHistory_C|NewsletterHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method NewsletterHistory|_IH_NewsletterHistory_C|NewsletterHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method NewsletterHistory first(array|string $columns = ['*'])
     * @method NewsletterHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NewsletterHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method NewsletterHistory firstOrFail(array|string $columns = ['*'])
     * @method NewsletterHistory firstOrNew(array $attributes = [], array $values = [])
     * @method NewsletterHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NewsletterHistory forceCreate(array $attributes)
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] get(array|string $columns = ['*'])
     * @method NewsletterHistory getModel()
     * @method NewsletterHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] hydrate(array $items)
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NewsletterHistory_C|NewsletterHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NewsletterHistory make(array $attributes = [])
     * @method NewsletterHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NewsletterHistory[]|_IH_NewsletterHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NewsletterHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NewsletterHistory[]|_IH_NewsletterHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NewsletterHistory sole(array|string $columns = ['*'])
     * @method NewsletterHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NewsletterHistory_QB extends _BaseBuilder {}
    
    /**
     * @method Newsletter|null getOrPut($key, $value)
     * @method Newsletter|$this shift(int $count = 1)
     * @method Newsletter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|$this pop(int $count = 1)
     * @method Newsletter|null pull($key, \Closure $default = null)
     * @method Newsletter|null last(callable $callback = null, \Closure $default = null)
     * @method Newsletter|$this random(callable|int|null $number = null)
     * @method Newsletter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Newsletter|null get($key, \Closure $default = null)
     * @method Newsletter|null first(callable $callback = null, \Closure $default = null)
     * @method Newsletter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Newsletter|null find($key, $default = null)
     * @method Newsletter[] all()
     */
    class _IH_Newsletter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Newsletter[][]|Collection<_IH_Newsletter_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Newsletter_QB whereId($value)
     * @method _IH_Newsletter_QB whereEmail($value)
     * @method _IH_Newsletter_QB whereCreatedAt($value)
     * @method _IH_Newsletter_QB whereUserId($value)
     * @method Newsletter baseSole(array|string $columns = ['*'])
     * @method Newsletter create(array $attributes = [])
     * @method _IH_Newsletter_C|Newsletter[] cursor()
     * @method Newsletter|null|_IH_Newsletter_C|Newsletter[] find($id, array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrFail($id, array|string $columns = ['*'])
     * @method Newsletter|_IH_Newsletter_C|Newsletter[] findOrNew($id, array|string $columns = ['*'])
     * @method Newsletter first(array|string $columns = ['*'])
     * @method Newsletter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Newsletter firstOrCreate(array $attributes = [], array $values = [])
     * @method Newsletter firstOrFail(array|string $columns = ['*'])
     * @method Newsletter firstOrNew(array $attributes = [], array $values = [])
     * @method Newsletter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Newsletter forceCreate(array $attributes)
     * @method _IH_Newsletter_C|Newsletter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Newsletter_C|Newsletter[] get(array|string $columns = ['*'])
     * @method Newsletter getModel()
     * @method Newsletter[] getModels(array|string $columns = ['*'])
     * @method _IH_Newsletter_C|Newsletter[] hydrate(array $items)
     * @method _IH_Newsletter_C|Newsletter[] lazy(int $chunkSize = 1000)
     * @method _IH_Newsletter_C|Newsletter[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Newsletter_C|Newsletter[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Newsletter make(array $attributes = [])
     * @method Newsletter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Newsletter[]|_IH_Newsletter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Newsletter restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Newsletter[]|_IH_Newsletter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Newsletter sole(array|string $columns = ['*'])
     * @method Newsletter updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Newsletter_QB extends _BaseBuilder {}
    
    /**
     * @method NoticeboardStatus|null getOrPut($key, $value)
     * @method NoticeboardStatus|$this shift(int $count = 1)
     * @method NoticeboardStatus|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NoticeboardStatus|$this pop(int $count = 1)
     * @method NoticeboardStatus|null pull($key, \Closure $default = null)
     * @method NoticeboardStatus|null last(callable $callback = null, \Closure $default = null)
     * @method NoticeboardStatus|$this random(callable|int|null $number = null)
     * @method NoticeboardStatus|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NoticeboardStatus|null get($key, \Closure $default = null)
     * @method NoticeboardStatus|null first(callable $callback = null, \Closure $default = null)
     * @method NoticeboardStatus|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NoticeboardStatus|null find($key, $default = null)
     * @method NoticeboardStatus[] all()
     */
    class _IH_NoticeboardStatus_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NoticeboardStatus[][]|Collection<_IH_NoticeboardStatus_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NoticeboardStatus_QB whereId($value)
     * @method _IH_NoticeboardStatus_QB whereUserId($value)
     * @method _IH_NoticeboardStatus_QB whereNoticeboardId($value)
     * @method _IH_NoticeboardStatus_QB whereSeenAt($value)
     * @method NoticeboardStatus baseSole(array|string $columns = ['*'])
     * @method NoticeboardStatus create(array $attributes = [])
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] cursor()
     * @method NoticeboardStatus|null|_IH_NoticeboardStatus_C|NoticeboardStatus[] find($id, array|string $columns = ['*'])
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NoticeboardStatus|_IH_NoticeboardStatus_C|NoticeboardStatus[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NoticeboardStatus|_IH_NoticeboardStatus_C|NoticeboardStatus[] findOrFail($id, array|string $columns = ['*'])
     * @method NoticeboardStatus|_IH_NoticeboardStatus_C|NoticeboardStatus[] findOrNew($id, array|string $columns = ['*'])
     * @method NoticeboardStatus first(array|string $columns = ['*'])
     * @method NoticeboardStatus firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NoticeboardStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method NoticeboardStatus firstOrFail(array|string $columns = ['*'])
     * @method NoticeboardStatus firstOrNew(array $attributes = [], array $values = [])
     * @method NoticeboardStatus firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NoticeboardStatus forceCreate(array $attributes)
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] get(array|string $columns = ['*'])
     * @method NoticeboardStatus getModel()
     * @method NoticeboardStatus[] getModels(array|string $columns = ['*'])
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] hydrate(array $items)
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] lazy(int $chunkSize = 1000)
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NoticeboardStatus_C|NoticeboardStatus[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NoticeboardStatus make(array $attributes = [])
     * @method NoticeboardStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NoticeboardStatus[]|_IH_NoticeboardStatus_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NoticeboardStatus restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NoticeboardStatus[]|_IH_NoticeboardStatus_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NoticeboardStatus sole(array|string $columns = ['*'])
     * @method NoticeboardStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NoticeboardStatus_QB extends _BaseBuilder {}
    
    /**
     * @method Noticeboard|null getOrPut($key, $value)
     * @method Noticeboard|$this shift(int $count = 1)
     * @method Noticeboard|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Noticeboard|$this pop(int $count = 1)
     * @method Noticeboard|null pull($key, \Closure $default = null)
     * @method Noticeboard|null last(callable $callback = null, \Closure $default = null)
     * @method Noticeboard|$this random(callable|int|null $number = null)
     * @method Noticeboard|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Noticeboard|null get($key, \Closure $default = null)
     * @method Noticeboard|null first(callable $callback = null, \Closure $default = null)
     * @method Noticeboard|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Noticeboard|null find($key, $default = null)
     * @method Noticeboard[] all()
     */
    class _IH_Noticeboard_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Noticeboard[][]|Collection<_IH_Noticeboard_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Noticeboard_QB whereId($value)
     * @method _IH_Noticeboard_QB whereOrganId($value)
     * @method _IH_Noticeboard_QB whereUserId($value)
     * @method _IH_Noticeboard_QB whereType($value)
     * @method _IH_Noticeboard_QB whereSender($value)
     * @method _IH_Noticeboard_QB whereTitle($value)
     * @method _IH_Noticeboard_QB whereMessage($value)
     * @method _IH_Noticeboard_QB whereCreatedAt($value)
     * @method _IH_Noticeboard_QB whereInstructorId($value)
     * @method _IH_Noticeboard_QB whereWebinarId($value)
     * @method Noticeboard baseSole(array|string $columns = ['*'])
     * @method Noticeboard create(array $attributes = [])
     * @method _IH_Noticeboard_C|Noticeboard[] cursor()
     * @method Noticeboard|null|_IH_Noticeboard_C|Noticeboard[] find($id, array|string $columns = ['*'])
     * @method _IH_Noticeboard_C|Noticeboard[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Noticeboard|_IH_Noticeboard_C|Noticeboard[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Noticeboard|_IH_Noticeboard_C|Noticeboard[] findOrFail($id, array|string $columns = ['*'])
     * @method Noticeboard|_IH_Noticeboard_C|Noticeboard[] findOrNew($id, array|string $columns = ['*'])
     * @method Noticeboard first(array|string $columns = ['*'])
     * @method Noticeboard firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Noticeboard firstOrCreate(array $attributes = [], array $values = [])
     * @method Noticeboard firstOrFail(array|string $columns = ['*'])
     * @method Noticeboard firstOrNew(array $attributes = [], array $values = [])
     * @method Noticeboard firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Noticeboard forceCreate(array $attributes)
     * @method _IH_Noticeboard_C|Noticeboard[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Noticeboard_C|Noticeboard[] get(array|string $columns = ['*'])
     * @method Noticeboard getModel()
     * @method Noticeboard[] getModels(array|string $columns = ['*'])
     * @method _IH_Noticeboard_C|Noticeboard[] hydrate(array $items)
     * @method _IH_Noticeboard_C|Noticeboard[] lazy(int $chunkSize = 1000)
     * @method _IH_Noticeboard_C|Noticeboard[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Noticeboard_C|Noticeboard[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Noticeboard make(array $attributes = [])
     * @method Noticeboard newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Noticeboard[]|_IH_Noticeboard_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Noticeboard restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Noticeboard[]|_IH_Noticeboard_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Noticeboard sole(array|string $columns = ['*'])
     * @method Noticeboard updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Noticeboard_QB extends _BaseBuilder {}
    
    /**
     * @method NotificationStatus|null getOrPut($key, $value)
     * @method NotificationStatus|$this shift(int $count = 1)
     * @method NotificationStatus|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NotificationStatus|$this pop(int $count = 1)
     * @method NotificationStatus|null pull($key, \Closure $default = null)
     * @method NotificationStatus|null last(callable $callback = null, \Closure $default = null)
     * @method NotificationStatus|$this random(callable|int|null $number = null)
     * @method NotificationStatus|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NotificationStatus|null get($key, \Closure $default = null)
     * @method NotificationStatus|null first(callable $callback = null, \Closure $default = null)
     * @method NotificationStatus|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NotificationStatus|null find($key, $default = null)
     * @method NotificationStatus[] all()
     */
    class _IH_NotificationStatus_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NotificationStatus[][]|Collection<_IH_NotificationStatus_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NotificationStatus_QB whereId($value)
     * @method _IH_NotificationStatus_QB whereUserId($value)
     * @method _IH_NotificationStatus_QB whereNotificationId($value)
     * @method _IH_NotificationStatus_QB whereSeenAt($value)
     * @method NotificationStatus baseSole(array|string $columns = ['*'])
     * @method NotificationStatus create(array $attributes = [])
     * @method _IH_NotificationStatus_C|NotificationStatus[] cursor()
     * @method NotificationStatus|null|_IH_NotificationStatus_C|NotificationStatus[] find($id, array|string $columns = ['*'])
     * @method _IH_NotificationStatus_C|NotificationStatus[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NotificationStatus|_IH_NotificationStatus_C|NotificationStatus[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NotificationStatus|_IH_NotificationStatus_C|NotificationStatus[] findOrFail($id, array|string $columns = ['*'])
     * @method NotificationStatus|_IH_NotificationStatus_C|NotificationStatus[] findOrNew($id, array|string $columns = ['*'])
     * @method NotificationStatus first(array|string $columns = ['*'])
     * @method NotificationStatus firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NotificationStatus firstOrCreate(array $attributes = [], array $values = [])
     * @method NotificationStatus firstOrFail(array|string $columns = ['*'])
     * @method NotificationStatus firstOrNew(array $attributes = [], array $values = [])
     * @method NotificationStatus firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NotificationStatus forceCreate(array $attributes)
     * @method _IH_NotificationStatus_C|NotificationStatus[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NotificationStatus_C|NotificationStatus[] get(array|string $columns = ['*'])
     * @method NotificationStatus getModel()
     * @method NotificationStatus[] getModels(array|string $columns = ['*'])
     * @method _IH_NotificationStatus_C|NotificationStatus[] hydrate(array $items)
     * @method _IH_NotificationStatus_C|NotificationStatus[] lazy(int $chunkSize = 1000)
     * @method _IH_NotificationStatus_C|NotificationStatus[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NotificationStatus_C|NotificationStatus[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NotificationStatus make(array $attributes = [])
     * @method NotificationStatus newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NotificationStatus[]|_IH_NotificationStatus_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NotificationStatus restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NotificationStatus[]|_IH_NotificationStatus_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NotificationStatus sole(array|string $columns = ['*'])
     * @method NotificationStatus updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NotificationStatus_QB extends _BaseBuilder {}
    
    /**
     * @method NotificationTemplate|null getOrPut($key, $value)
     * @method NotificationTemplate|$this shift(int $count = 1)
     * @method NotificationTemplate|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NotificationTemplate|$this pop(int $count = 1)
     * @method NotificationTemplate|null pull($key, \Closure $default = null)
     * @method NotificationTemplate|null last(callable $callback = null, \Closure $default = null)
     * @method NotificationTemplate|$this random(callable|int|null $number = null)
     * @method NotificationTemplate|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NotificationTemplate|null get($key, \Closure $default = null)
     * @method NotificationTemplate|null first(callable $callback = null, \Closure $default = null)
     * @method NotificationTemplate|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NotificationTemplate|null find($key, $default = null)
     * @method NotificationTemplate[] all()
     */
    class _IH_NotificationTemplate_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NotificationTemplate[][]|Collection<_IH_NotificationTemplate_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NotificationTemplate_QB whereId($value)
     * @method _IH_NotificationTemplate_QB whereTitle($value)
     * @method _IH_NotificationTemplate_QB whereTemplate($value)
     * @method NotificationTemplate baseSole(array|string $columns = ['*'])
     * @method NotificationTemplate create(array $attributes = [])
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] cursor()
     * @method NotificationTemplate|null|_IH_NotificationTemplate_C|NotificationTemplate[] find($id, array|string $columns = ['*'])
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NotificationTemplate|_IH_NotificationTemplate_C|NotificationTemplate[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NotificationTemplate|_IH_NotificationTemplate_C|NotificationTemplate[] findOrFail($id, array|string $columns = ['*'])
     * @method NotificationTemplate|_IH_NotificationTemplate_C|NotificationTemplate[] findOrNew($id, array|string $columns = ['*'])
     * @method NotificationTemplate first(array|string $columns = ['*'])
     * @method NotificationTemplate firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NotificationTemplate firstOrCreate(array $attributes = [], array $values = [])
     * @method NotificationTemplate firstOrFail(array|string $columns = ['*'])
     * @method NotificationTemplate firstOrNew(array $attributes = [], array $values = [])
     * @method NotificationTemplate firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NotificationTemplate forceCreate(array $attributes)
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] get(array|string $columns = ['*'])
     * @method NotificationTemplate getModel()
     * @method NotificationTemplate[] getModels(array|string $columns = ['*'])
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] hydrate(array $items)
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] lazy(int $chunkSize = 1000)
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NotificationTemplate_C|NotificationTemplate[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NotificationTemplate make(array $attributes = [])
     * @method NotificationTemplate newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NotificationTemplate[]|_IH_NotificationTemplate_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NotificationTemplate restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NotificationTemplate[]|_IH_NotificationTemplate_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NotificationTemplate sole(array|string $columns = ['*'])
     * @method NotificationTemplate updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NotificationTemplate_QB extends _BaseBuilder {}
    
    /**
     * @method Notification|null getOrPut($key, $value)
     * @method Notification|$this shift(int $count = 1)
     * @method Notification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Notification|$this pop(int $count = 1)
     * @method Notification|null pull($key, \Closure $default = null)
     * @method Notification|null last(callable $callback = null, \Closure $default = null)
     * @method Notification|$this random(callable|int|null $number = null)
     * @method Notification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Notification|null get($key, \Closure $default = null)
     * @method Notification|null first(callable $callback = null, \Closure $default = null)
     * @method Notification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Notification|null find($key, $default = null)
     * @method Notification[] all()
     */
    class _IH_Notification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Notification[][]|Collection<_IH_Notification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Notification_QB whereId($value)
     * @method _IH_Notification_QB whereUserId($value)
     * @method _IH_Notification_QB whereGroupId($value)
     * @method _IH_Notification_QB whereWebinarId($value)
     * @method _IH_Notification_QB whereTitle($value)
     * @method _IH_Notification_QB whereMessage($value)
     * @method _IH_Notification_QB whereSender($value)
     * @method _IH_Notification_QB whereType($value)
     * @method _IH_Notification_QB whereCreatedAt($value)
     * @method _IH_Notification_QB whereSenderId($value)
     * @method Notification baseSole(array|string $columns = ['*'])
     * @method Notification create(array $attributes = [])
     * @method _IH_Notification_C|Notification[] cursor()
     * @method Notification|null|_IH_Notification_C|Notification[] find($id, array|string $columns = ['*'])
     * @method _IH_Notification_C|Notification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Notification|_IH_Notification_C|Notification[] findOrFail($id, array|string $columns = ['*'])
     * @method Notification|_IH_Notification_C|Notification[] findOrNew($id, array|string $columns = ['*'])
     * @method Notification first(array|string $columns = ['*'])
     * @method Notification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Notification firstOrCreate(array $attributes = [], array $values = [])
     * @method Notification firstOrFail(array|string $columns = ['*'])
     * @method Notification firstOrNew(array $attributes = [], array $values = [])
     * @method Notification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Notification forceCreate(array $attributes)
     * @method _IH_Notification_C|Notification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Notification_C|Notification[] get(array|string $columns = ['*'])
     * @method Notification getModel()
     * @method Notification[] getModels(array|string $columns = ['*'])
     * @method _IH_Notification_C|Notification[] hydrate(array $items)
     * @method _IH_Notification_C|Notification[] lazy(int $chunkSize = 1000)
     * @method _IH_Notification_C|Notification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Notification_C|Notification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Notification make(array $attributes = [])
     * @method Notification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Notification[]|_IH_Notification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Notification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Notification[]|_IH_Notification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Notification sole(array|string $columns = ['*'])
     * @method Notification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Notification_QB extends _BaseBuilder {}
    
    /**
     * @method OfflineBankSpecification|null getOrPut($key, $value)
     * @method OfflineBankSpecification|$this shift(int $count = 1)
     * @method OfflineBankSpecification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankSpecification|$this pop(int $count = 1)
     * @method OfflineBankSpecification|null pull($key, \Closure $default = null)
     * @method OfflineBankSpecification|null last(callable $callback = null, \Closure $default = null)
     * @method OfflineBankSpecification|$this random(callable|int|null $number = null)
     * @method OfflineBankSpecification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankSpecification|null get($key, \Closure $default = null)
     * @method OfflineBankSpecification|null first(callable $callback = null, \Closure $default = null)
     * @method OfflineBankSpecification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OfflineBankSpecification|null find($key, $default = null)
     * @method OfflineBankSpecification[] all()
     */
    class _IH_OfflineBankSpecification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OfflineBankSpecification[][]|Collection<_IH_OfflineBankSpecification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OfflineBankSpecification_QB whereId($value)
     * @method _IH_OfflineBankSpecification_QB whereOfflineBankId($value)
     * @method _IH_OfflineBankSpecification_QB whereValue($value)
     * @method OfflineBankSpecification baseSole(array|string $columns = ['*'])
     * @method OfflineBankSpecification create(array $attributes = [])
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] cursor()
     * @method OfflineBankSpecification|null|_IH_OfflineBankSpecification_C|OfflineBankSpecification[] find($id, array|string $columns = ['*'])
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OfflineBankSpecification|_IH_OfflineBankSpecification_C|OfflineBankSpecification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankSpecification|_IH_OfflineBankSpecification_C|OfflineBankSpecification[] findOrFail($id, array|string $columns = ['*'])
     * @method OfflineBankSpecification|_IH_OfflineBankSpecification_C|OfflineBankSpecification[] findOrNew($id, array|string $columns = ['*'])
     * @method OfflineBankSpecification first(array|string $columns = ['*'])
     * @method OfflineBankSpecification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankSpecification firstOrCreate(array $attributes = [], array $values = [])
     * @method OfflineBankSpecification firstOrFail(array|string $columns = ['*'])
     * @method OfflineBankSpecification firstOrNew(array $attributes = [], array $values = [])
     * @method OfflineBankSpecification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OfflineBankSpecification forceCreate(array $attributes)
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] get(array|string $columns = ['*'])
     * @method OfflineBankSpecification getModel()
     * @method OfflineBankSpecification[] getModels(array|string $columns = ['*'])
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] hydrate(array $items)
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] lazy(int $chunkSize = 1000)
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OfflineBankSpecification_C|OfflineBankSpecification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OfflineBankSpecification make(array $attributes = [])
     * @method OfflineBankSpecification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OfflineBankSpecification[]|_IH_OfflineBankSpecification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankSpecification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OfflineBankSpecification[]|_IH_OfflineBankSpecification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankSpecification sole(array|string $columns = ['*'])
     * @method OfflineBankSpecification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_OfflineBankSpecification_QB listsTranslations(string $translationField)
     * @method _IH_OfflineBankSpecification_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_OfflineBankSpecification_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBankSpecification_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBankSpecification_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_OfflineBankSpecification_QB translated()
     * @method _IH_OfflineBankSpecification_QB translatedIn(null|string $locale = null)
     * @method _IH_OfflineBankSpecification_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_OfflineBankSpecification_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBankSpecification_QB withTranslation()
     */
    class _IH_OfflineBankSpecification_QB extends _BaseBuilder {}
    
    /**
     * @method OfflineBank|null getOrPut($key, $value)
     * @method OfflineBank|$this shift(int $count = 1)
     * @method OfflineBank|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBank|$this pop(int $count = 1)
     * @method OfflineBank|null pull($key, \Closure $default = null)
     * @method OfflineBank|null last(callable $callback = null, \Closure $default = null)
     * @method OfflineBank|$this random(callable|int|null $number = null)
     * @method OfflineBank|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBank|null get($key, \Closure $default = null)
     * @method OfflineBank|null first(callable $callback = null, \Closure $default = null)
     * @method OfflineBank|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OfflineBank|null find($key, $default = null)
     * @method OfflineBank[] all()
     */
    class _IH_OfflineBank_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OfflineBank[][]|Collection<_IH_OfflineBank_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OfflineBank_QB whereId($value)
     * @method _IH_OfflineBank_QB whereLogo($value)
     * @method _IH_OfflineBank_QB whereCreatedAt($value)
     * @method OfflineBank baseSole(array|string $columns = ['*'])
     * @method OfflineBank create(array $attributes = [])
     * @method _IH_OfflineBank_C|OfflineBank[] cursor()
     * @method OfflineBank|null|_IH_OfflineBank_C|OfflineBank[] find($id, array|string $columns = ['*'])
     * @method _IH_OfflineBank_C|OfflineBank[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OfflineBank|_IH_OfflineBank_C|OfflineBank[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBank|_IH_OfflineBank_C|OfflineBank[] findOrFail($id, array|string $columns = ['*'])
     * @method OfflineBank|_IH_OfflineBank_C|OfflineBank[] findOrNew($id, array|string $columns = ['*'])
     * @method OfflineBank first(array|string $columns = ['*'])
     * @method OfflineBank firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBank firstOrCreate(array $attributes = [], array $values = [])
     * @method OfflineBank firstOrFail(array|string $columns = ['*'])
     * @method OfflineBank firstOrNew(array $attributes = [], array $values = [])
     * @method OfflineBank firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OfflineBank forceCreate(array $attributes)
     * @method _IH_OfflineBank_C|OfflineBank[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OfflineBank_C|OfflineBank[] get(array|string $columns = ['*'])
     * @method OfflineBank getModel()
     * @method OfflineBank[] getModels(array|string $columns = ['*'])
     * @method _IH_OfflineBank_C|OfflineBank[] hydrate(array $items)
     * @method _IH_OfflineBank_C|OfflineBank[] lazy(int $chunkSize = 1000)
     * @method _IH_OfflineBank_C|OfflineBank[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OfflineBank_C|OfflineBank[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OfflineBank make(array $attributes = [])
     * @method OfflineBank newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OfflineBank[]|_IH_OfflineBank_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBank restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OfflineBank[]|_IH_OfflineBank_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBank sole(array|string $columns = ['*'])
     * @method OfflineBank updateOrCreate(array $attributes, array $values = [])
     * @method _IH_OfflineBank_QB listsTranslations(string $translationField)
     * @method _IH_OfflineBank_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_OfflineBank_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBank_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBank_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_OfflineBank_QB translated()
     * @method _IH_OfflineBank_QB translatedIn(null|string $locale = null)
     * @method _IH_OfflineBank_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_OfflineBank_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_OfflineBank_QB withTranslation()
     */
    class _IH_OfflineBank_QB extends _BaseBuilder {}
    
    /**
     * @method OfflinePayment|null getOrPut($key, $value)
     * @method OfflinePayment|$this shift(int $count = 1)
     * @method OfflinePayment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OfflinePayment|$this pop(int $count = 1)
     * @method OfflinePayment|null pull($key, \Closure $default = null)
     * @method OfflinePayment|null last(callable $callback = null, \Closure $default = null)
     * @method OfflinePayment|$this random(callable|int|null $number = null)
     * @method OfflinePayment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OfflinePayment|null get($key, \Closure $default = null)
     * @method OfflinePayment|null first(callable $callback = null, \Closure $default = null)
     * @method OfflinePayment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OfflinePayment|null find($key, $default = null)
     * @method OfflinePayment[] all()
     */
    class _IH_OfflinePayment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OfflinePayment[][]|Collection<_IH_OfflinePayment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OfflinePayment_QB whereId($value)
     * @method _IH_OfflinePayment_QB whereUserId($value)
     * @method _IH_OfflinePayment_QB whereAmount($value)
     * @method _IH_OfflinePayment_QB whereBank($value)
     * @method _IH_OfflinePayment_QB whereReferenceNumber($value)
     * @method _IH_OfflinePayment_QB whereStatus($value)
     * @method _IH_OfflinePayment_QB whereCreatedAt($value)
     * @method _IH_OfflinePayment_QB wherePayDate($value)
     * @method _IH_OfflinePayment_QB whereAttachment($value)
     * @method _IH_OfflinePayment_QB whereOfflineBankId($value)
     * @method OfflinePayment baseSole(array|string $columns = ['*'])
     * @method OfflinePayment create(array $attributes = [])
     * @method _IH_OfflinePayment_C|OfflinePayment[] cursor()
     * @method OfflinePayment|null|_IH_OfflinePayment_C|OfflinePayment[] find($id, array|string $columns = ['*'])
     * @method _IH_OfflinePayment_C|OfflinePayment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OfflinePayment|_IH_OfflinePayment_C|OfflinePayment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflinePayment|_IH_OfflinePayment_C|OfflinePayment[] findOrFail($id, array|string $columns = ['*'])
     * @method OfflinePayment|_IH_OfflinePayment_C|OfflinePayment[] findOrNew($id, array|string $columns = ['*'])
     * @method OfflinePayment first(array|string $columns = ['*'])
     * @method OfflinePayment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflinePayment firstOrCreate(array $attributes = [], array $values = [])
     * @method OfflinePayment firstOrFail(array|string $columns = ['*'])
     * @method OfflinePayment firstOrNew(array $attributes = [], array $values = [])
     * @method OfflinePayment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OfflinePayment forceCreate(array $attributes)
     * @method _IH_OfflinePayment_C|OfflinePayment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OfflinePayment_C|OfflinePayment[] get(array|string $columns = ['*'])
     * @method OfflinePayment getModel()
     * @method OfflinePayment[] getModels(array|string $columns = ['*'])
     * @method _IH_OfflinePayment_C|OfflinePayment[] hydrate(array $items)
     * @method _IH_OfflinePayment_C|OfflinePayment[] lazy(int $chunkSize = 1000)
     * @method _IH_OfflinePayment_C|OfflinePayment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OfflinePayment_C|OfflinePayment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OfflinePayment make(array $attributes = [])
     * @method OfflinePayment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OfflinePayment[]|_IH_OfflinePayment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflinePayment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OfflinePayment[]|_IH_OfflinePayment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflinePayment sole(array|string $columns = ['*'])
     * @method OfflinePayment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OfflinePayment_QB extends _BaseBuilder {}
    
    /**
     * @method OrderItem|null getOrPut($key, $value)
     * @method OrderItem|$this shift(int $count = 1)
     * @method OrderItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OrderItem|$this pop(int $count = 1)
     * @method OrderItem|null pull($key, \Closure $default = null)
     * @method OrderItem|null last(callable $callback = null, \Closure $default = null)
     * @method OrderItem|$this random(callable|int|null $number = null)
     * @method OrderItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OrderItem|null get($key, \Closure $default = null)
     * @method OrderItem|null first(callable $callback = null, \Closure $default = null)
     * @method OrderItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OrderItem|null find($key, $default = null)
     * @method OrderItem[] all()
     */
    class _IH_OrderItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OrderItem[][]|Collection<_IH_OrderItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OrderItem_QB whereId($value)
     * @method _IH_OrderItem_QB whereUserId($value)
     * @method _IH_OrderItem_QB whereOrderId($value)
     * @method _IH_OrderItem_QB whereWebinarId($value)
     * @method _IH_OrderItem_QB whereMeetingId($value)
     * @method _IH_OrderItem_QB whereTicketId($value)
     * @method _IH_OrderItem_QB whereAmount($value)
     * @method _IH_OrderItem_QB whereTax($value)
     * @method _IH_OrderItem_QB whereCommission($value)
     * @method _IH_OrderItem_QB whereDiscount($value)
     * @method _IH_OrderItem_QB whereTotalAmount($value)
     * @method _IH_OrderItem_QB whereCreatedAt($value)
     * @method _IH_OrderItem_QB whereTaxPrice($value)
     * @method _IH_OrderItem_QB whereCommissionPrice($value)
     * @method _IH_OrderItem_QB whereDiscountId($value)
     * @method _IH_OrderItem_QB whereSubscribeId($value)
     * @method _IH_OrderItem_QB wherePromotionId($value)
     * @method _IH_OrderItem_QB whereRegistrationPackageId($value)
     * @method _IH_OrderItem_QB whereBecomeInstructorId($value)
     * @method _IH_OrderItem_QB whereProductOrderId($value)
     * @method _IH_OrderItem_QB whereBundleId($value)
     * @method _IH_OrderItem_QB whereProductDeliveryFee($value)
     * @method _IH_OrderItem_QB whereInstallmentPaymentId($value)
     * @method _IH_OrderItem_QB whereGiftId($value)
     * @method OrderItem baseSole(array|string $columns = ['*'])
     * @method OrderItem create(array $attributes = [])
     * @method _IH_OrderItem_C|OrderItem[] cursor()
     * @method OrderItem|null|_IH_OrderItem_C|OrderItem[] find($id, array|string $columns = ['*'])
     * @method _IH_OrderItem_C|OrderItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OrderItem|_IH_OrderItem_C|OrderItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderItem|_IH_OrderItem_C|OrderItem[] findOrFail($id, array|string $columns = ['*'])
     * @method OrderItem|_IH_OrderItem_C|OrderItem[] findOrNew($id, array|string $columns = ['*'])
     * @method OrderItem first(array|string $columns = ['*'])
     * @method OrderItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OrderItem firstOrCreate(array $attributes = [], array $values = [])
     * @method OrderItem firstOrFail(array|string $columns = ['*'])
     * @method OrderItem firstOrNew(array $attributes = [], array $values = [])
     * @method OrderItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OrderItem forceCreate(array $attributes)
     * @method _IH_OrderItem_C|OrderItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OrderItem_C|OrderItem[] get(array|string $columns = ['*'])
     * @method OrderItem getModel()
     * @method OrderItem[] getModels(array|string $columns = ['*'])
     * @method _IH_OrderItem_C|OrderItem[] hydrate(array $items)
     * @method _IH_OrderItem_C|OrderItem[] lazy(int $chunkSize = 1000)
     * @method _IH_OrderItem_C|OrderItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OrderItem_C|OrderItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OrderItem make(array $attributes = [])
     * @method OrderItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OrderItem[]|_IH_OrderItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OrderItem[]|_IH_OrderItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OrderItem sole(array|string $columns = ['*'])
     * @method OrderItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OrderItem_QB extends _BaseBuilder {}
    
    /**
     * @method Order|null getOrPut($key, $value)
     * @method Order|$this shift(int $count = 1)
     * @method Order|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Order|$this pop(int $count = 1)
     * @method Order|null pull($key, \Closure $default = null)
     * @method Order|null last(callable $callback = null, \Closure $default = null)
     * @method Order|$this random(callable|int|null $number = null)
     * @method Order|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Order|null get($key, \Closure $default = null)
     * @method Order|null first(callable $callback = null, \Closure $default = null)
     * @method Order|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Order|null find($key, $default = null)
     * @method Order[] all()
     */
    class _IH_Order_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Order[][]|Collection<_IH_Order_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Order_QB whereId($value)
     * @method _IH_Order_QB whereUserId($value)
     * @method _IH_Order_QB whereStatus($value)
     * @method _IH_Order_QB wherePaymentMethod($value)
     * @method _IH_Order_QB whereAmount($value)
     * @method _IH_Order_QB whereTax($value)
     * @method _IH_Order_QB whereTotalDiscount($value)
     * @method _IH_Order_QB whereTotalAmount($value)
     * @method _IH_Order_QB whereReferenceId($value)
     * @method _IH_Order_QB whereCreatedAt($value)
     * @method _IH_Order_QB whereType($value)
     * @method _IH_Order_QB whereIsChargeAccount($value)
     * @method _IH_Order_QB wherePaymentData($value)
     * @method _IH_Order_QB whereProductDeliveryFee($value)
     * @method Order baseSole(array|string $columns = ['*'])
     * @method Order create(array $attributes = [])
     * @method _IH_Order_C|Order[] cursor()
     * @method Order|null|_IH_Order_C|Order[] find($id, array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order|_IH_Order_C|Order[] findOrFail($id, array|string $columns = ['*'])
     * @method Order|_IH_Order_C|Order[] findOrNew($id, array|string $columns = ['*'])
     * @method Order first(array|string $columns = ['*'])
     * @method Order firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Order firstOrCreate(array $attributes = [], array $values = [])
     * @method Order firstOrFail(array|string $columns = ['*'])
     * @method Order firstOrNew(array $attributes = [], array $values = [])
     * @method Order firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Order forceCreate(array $attributes)
     * @method _IH_Order_C|Order[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Order_C|Order[] get(array|string $columns = ['*'])
     * @method Order getModel()
     * @method Order[] getModels(array|string $columns = ['*'])
     * @method _IH_Order_C|Order[] hydrate(array $items)
     * @method _IH_Order_C|Order[] lazy(int $chunkSize = 1000)
     * @method _IH_Order_C|Order[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Order_C|Order[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Order make(array $attributes = [])
     * @method Order newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Order[]|_IH_Order_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Order[]|_IH_Order_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Order sole(array|string $columns = ['*'])
     * @method Order updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Order_QB extends _BaseBuilder {}
    
    /**
     * @method Page|null getOrPut($key, $value)
     * @method Page|$this shift(int $count = 1)
     * @method Page|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Page|$this pop(int $count = 1)
     * @method Page|null pull($key, \Closure $default = null)
     * @method Page|null last(callable $callback = null, \Closure $default = null)
     * @method Page|$this random(callable|int|null $number = null)
     * @method Page|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Page|null get($key, \Closure $default = null)
     * @method Page|null first(callable $callback = null, \Closure $default = null)
     * @method Page|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Page|null find($key, $default = null)
     * @method Page[] all()
     */
    class _IH_Page_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Page[][]|Collection<_IH_Page_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Page_QB whereId($value)
     * @method _IH_Page_QB whereLink($value)
     * @method _IH_Page_QB whereName($value)
     * @method _IH_Page_QB whereRobot($value)
     * @method _IH_Page_QB whereStatus($value)
     * @method _IH_Page_QB whereCreatedAt($value)
     * @method Page baseSole(array|string $columns = ['*'])
     * @method Page create(array $attributes = [])
     * @method _IH_Page_C|Page[] cursor()
     * @method Page|null|_IH_Page_C|Page[] find($id, array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page|_IH_Page_C|Page[] findOrFail($id, array|string $columns = ['*'])
     * @method Page|_IH_Page_C|Page[] findOrNew($id, array|string $columns = ['*'])
     * @method Page first(array|string $columns = ['*'])
     * @method Page firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Page firstOrCreate(array $attributes = [], array $values = [])
     * @method Page firstOrFail(array|string $columns = ['*'])
     * @method Page firstOrNew(array $attributes = [], array $values = [])
     * @method Page firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Page forceCreate(array $attributes)
     * @method _IH_Page_C|Page[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Page_C|Page[] get(array|string $columns = ['*'])
     * @method Page getModel()
     * @method Page[] getModels(array|string $columns = ['*'])
     * @method _IH_Page_C|Page[] hydrate(array $items)
     * @method _IH_Page_C|Page[] lazy(int $chunkSize = 1000)
     * @method _IH_Page_C|Page[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Page_C|Page[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Page make(array $attributes = [])
     * @method Page newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Page[]|_IH_Page_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Page[]|_IH_Page_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Page sole(array|string $columns = ['*'])
     * @method Page updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Page_QB listsTranslations(string $translationField)
     * @method _IH_Page_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Page_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Page_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Page_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Page_QB translated()
     * @method _IH_Page_QB translatedIn(null|string $locale = null)
     * @method _IH_Page_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Page_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Page_QB withTranslation()
     */
    class _IH_Page_QB extends _BaseBuilder {}
    
    /**
     * @method PaymentChannel|null getOrPut($key, $value)
     * @method PaymentChannel|$this shift(int $count = 1)
     * @method PaymentChannel|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentChannel|$this pop(int $count = 1)
     * @method PaymentChannel|null pull($key, \Closure $default = null)
     * @method PaymentChannel|null last(callable $callback = null, \Closure $default = null)
     * @method PaymentChannel|$this random(callable|int|null $number = null)
     * @method PaymentChannel|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PaymentChannel|null get($key, \Closure $default = null)
     * @method PaymentChannel|null first(callable $callback = null, \Closure $default = null)
     * @method PaymentChannel|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PaymentChannel|null find($key, $default = null)
     * @method PaymentChannel[] all()
     */
    class _IH_PaymentChannel_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PaymentChannel[][]|Collection<_IH_PaymentChannel_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PaymentChannel_QB whereId($value)
     * @method _IH_PaymentChannel_QB whereTitle($value)
     * @method _IH_PaymentChannel_QB whereClassName($value)
     * @method _IH_PaymentChannel_QB whereImage($value)
     * @method _IH_PaymentChannel_QB whereCredentials($value)
     * @method _IH_PaymentChannel_QB whereCreatedAt($value)
     * @method _IH_PaymentChannel_QB whereDisabledAt($value)
     * @method _IH_PaymentChannel_QB whereStatus($value)
     * @method _IH_PaymentChannel_QB whereCurrencies($value)
     * @method PaymentChannel baseSole(array|string $columns = ['*'])
     * @method PaymentChannel create(array $attributes = [])
     * @method _IH_PaymentChannel_C|PaymentChannel[] cursor()
     * @method PaymentChannel|null|_IH_PaymentChannel_C|PaymentChannel[] find($id, array|string $columns = ['*'])
     * @method _IH_PaymentChannel_C|PaymentChannel[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PaymentChannel|_IH_PaymentChannel_C|PaymentChannel[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentChannel|_IH_PaymentChannel_C|PaymentChannel[] findOrFail($id, array|string $columns = ['*'])
     * @method PaymentChannel|_IH_PaymentChannel_C|PaymentChannel[] findOrNew($id, array|string $columns = ['*'])
     * @method PaymentChannel first(array|string $columns = ['*'])
     * @method PaymentChannel firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PaymentChannel firstOrCreate(array $attributes = [], array $values = [])
     * @method PaymentChannel firstOrFail(array|string $columns = ['*'])
     * @method PaymentChannel firstOrNew(array $attributes = [], array $values = [])
     * @method PaymentChannel firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PaymentChannel forceCreate(array $attributes)
     * @method _IH_PaymentChannel_C|PaymentChannel[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PaymentChannel_C|PaymentChannel[] get(array|string $columns = ['*'])
     * @method PaymentChannel getModel()
     * @method PaymentChannel[] getModels(array|string $columns = ['*'])
     * @method _IH_PaymentChannel_C|PaymentChannel[] hydrate(array $items)
     * @method _IH_PaymentChannel_C|PaymentChannel[] lazy(int $chunkSize = 1000)
     * @method _IH_PaymentChannel_C|PaymentChannel[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PaymentChannel_C|PaymentChannel[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PaymentChannel make(array $attributes = [])
     * @method PaymentChannel newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PaymentChannel[]|_IH_PaymentChannel_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentChannel restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PaymentChannel[]|_IH_PaymentChannel_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PaymentChannel sole(array|string $columns = ['*'])
     * @method PaymentChannel updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PaymentChannel_QB extends _BaseBuilder {}
    
    /**
     * @method Payout|null getOrPut($key, $value)
     * @method Payout|$this shift(int $count = 1)
     * @method Payout|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Payout|$this pop(int $count = 1)
     * @method Payout|null pull($key, \Closure $default = null)
     * @method Payout|null last(callable $callback = null, \Closure $default = null)
     * @method Payout|$this random(callable|int|null $number = null)
     * @method Payout|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Payout|null get($key, \Closure $default = null)
     * @method Payout|null first(callable $callback = null, \Closure $default = null)
     * @method Payout|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Payout|null find($key, $default = null)
     * @method Payout[] all()
     */
    class _IH_Payout_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Payout[][]|Collection<_IH_Payout_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Payout_QB whereId($value)
     * @method _IH_Payout_QB whereUserId($value)
     * @method _IH_Payout_QB whereAmount($value)
     * @method _IH_Payout_QB whereAccountName($value)
     * @method _IH_Payout_QB whereAccountNumber($value)
     * @method _IH_Payout_QB whereAccountBankName($value)
     * @method _IH_Payout_QB whereStatus($value)
     * @method _IH_Payout_QB whereCreatedAt($value)
     * @method _IH_Payout_QB whereUserSelectedBankId($value)
     * @method Payout baseSole(array|string $columns = ['*'])
     * @method Payout create(array $attributes = [])
     * @method _IH_Payout_C|Payout[] cursor()
     * @method Payout|null|_IH_Payout_C|Payout[] find($id, array|string $columns = ['*'])
     * @method _IH_Payout_C|Payout[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Payout|_IH_Payout_C|Payout[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Payout|_IH_Payout_C|Payout[] findOrFail($id, array|string $columns = ['*'])
     * @method Payout|_IH_Payout_C|Payout[] findOrNew($id, array|string $columns = ['*'])
     * @method Payout first(array|string $columns = ['*'])
     * @method Payout firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Payout firstOrCreate(array $attributes = [], array $values = [])
     * @method Payout firstOrFail(array|string $columns = ['*'])
     * @method Payout firstOrNew(array $attributes = [], array $values = [])
     * @method Payout firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Payout forceCreate(array $attributes)
     * @method _IH_Payout_C|Payout[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Payout_C|Payout[] get(array|string $columns = ['*'])
     * @method Payout getModel()
     * @method Payout[] getModels(array|string $columns = ['*'])
     * @method _IH_Payout_C|Payout[] hydrate(array $items)
     * @method _IH_Payout_C|Payout[] lazy(int $chunkSize = 1000)
     * @method _IH_Payout_C|Payout[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Payout_C|Payout[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Payout make(array $attributes = [])
     * @method Payout newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Payout[]|_IH_Payout_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payout restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Payout[]|_IH_Payout_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Payout sole(array|string $columns = ['*'])
     * @method Payout updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Payout_QB extends _BaseBuilder {}
    
    /**
     * @method Permission|null getOrPut($key, $value)
     * @method Permission|$this shift(int $count = 1)
     * @method Permission|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Permission|$this pop(int $count = 1)
     * @method Permission|null pull($key, \Closure $default = null)
     * @method Permission|null last(callable $callback = null, \Closure $default = null)
     * @method Permission|$this random(callable|int|null $number = null)
     * @method Permission|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Permission|null get($key, \Closure $default = null)
     * @method Permission|null first(callable $callback = null, \Closure $default = null)
     * @method Permission|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Permission|null find($key, $default = null)
     * @method Permission[] all()
     */
    class _IH_Permission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Permission[][]|Collection<_IH_Permission_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Permission_QB whereId($value)
     * @method _IH_Permission_QB whereRoleId($value)
     * @method _IH_Permission_QB whereSectionId($value)
     * @method _IH_Permission_QB whereAllow($value)
     * @method Permission baseSole(array|string $columns = ['*'])
     * @method Permission create(array $attributes = [])
     * @method _IH_Permission_C|Permission[] cursor()
     * @method Permission|null|_IH_Permission_C|Permission[] find($id, array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Permission|_IH_Permission_C|Permission[] findOrFail($id, array|string $columns = ['*'])
     * @method Permission|_IH_Permission_C|Permission[] findOrNew($id, array|string $columns = ['*'])
     * @method Permission first(array|string $columns = ['*'])
     * @method Permission firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Permission firstOrCreate(array $attributes = [], array $values = [])
     * @method Permission firstOrFail(array|string $columns = ['*'])
     * @method Permission firstOrNew(array $attributes = [], array $values = [])
     * @method Permission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Permission forceCreate(array $attributes)
     * @method _IH_Permission_C|Permission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Permission_C|Permission[] get(array|string $columns = ['*'])
     * @method Permission getModel()
     * @method Permission[] getModels(array|string $columns = ['*'])
     * @method _IH_Permission_C|Permission[] hydrate(array $items)
     * @method _IH_Permission_C|Permission[] lazy(int $chunkSize = 1000)
     * @method _IH_Permission_C|Permission[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Permission_C|Permission[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Permission make(array $attributes = [])
     * @method Permission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Permission[]|_IH_Permission_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Permission[]|_IH_Permission_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Permission sole(array|string $columns = ['*'])
     * @method Permission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Permission_QB extends _BaseBuilder {}
    
    /**
     * @method Prerequisite|null getOrPut($key, $value)
     * @method Prerequisite|$this shift(int $count = 1)
     * @method Prerequisite|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Prerequisite|$this pop(int $count = 1)
     * @method Prerequisite|null pull($key, \Closure $default = null)
     * @method Prerequisite|null last(callable $callback = null, \Closure $default = null)
     * @method Prerequisite|$this random(callable|int|null $number = null)
     * @method Prerequisite|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Prerequisite|null get($key, \Closure $default = null)
     * @method Prerequisite|null first(callable $callback = null, \Closure $default = null)
     * @method Prerequisite|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Prerequisite|null find($key, $default = null)
     * @method Prerequisite[] all()
     */
    class _IH_Prerequisite_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Prerequisite[][]|Collection<_IH_Prerequisite_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Prerequisite_QB whereId($value)
     * @method _IH_Prerequisite_QB whereWebinarId($value)
     * @method _IH_Prerequisite_QB wherePrerequisiteId($value)
     * @method _IH_Prerequisite_QB whereRequired($value)
     * @method _IH_Prerequisite_QB whereCreatedAt($value)
     * @method _IH_Prerequisite_QB whereUpdatedAt($value)
     * @method _IH_Prerequisite_QB whereOrder($value)
     * @method Prerequisite baseSole(array|string $columns = ['*'])
     * @method Prerequisite create(array $attributes = [])
     * @method _IH_Prerequisite_C|Prerequisite[] cursor()
     * @method Prerequisite|null|_IH_Prerequisite_C|Prerequisite[] find($id, array|string $columns = ['*'])
     * @method _IH_Prerequisite_C|Prerequisite[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Prerequisite|_IH_Prerequisite_C|Prerequisite[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Prerequisite|_IH_Prerequisite_C|Prerequisite[] findOrFail($id, array|string $columns = ['*'])
     * @method Prerequisite|_IH_Prerequisite_C|Prerequisite[] findOrNew($id, array|string $columns = ['*'])
     * @method Prerequisite first(array|string $columns = ['*'])
     * @method Prerequisite firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Prerequisite firstOrCreate(array $attributes = [], array $values = [])
     * @method Prerequisite firstOrFail(array|string $columns = ['*'])
     * @method Prerequisite firstOrNew(array $attributes = [], array $values = [])
     * @method Prerequisite firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Prerequisite forceCreate(array $attributes)
     * @method _IH_Prerequisite_C|Prerequisite[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Prerequisite_C|Prerequisite[] get(array|string $columns = ['*'])
     * @method Prerequisite getModel()
     * @method Prerequisite[] getModels(array|string $columns = ['*'])
     * @method _IH_Prerequisite_C|Prerequisite[] hydrate(array $items)
     * @method _IH_Prerequisite_C|Prerequisite[] lazy(int $chunkSize = 1000)
     * @method _IH_Prerequisite_C|Prerequisite[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Prerequisite_C|Prerequisite[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Prerequisite make(array $attributes = [])
     * @method Prerequisite newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Prerequisite[]|_IH_Prerequisite_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Prerequisite restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Prerequisite[]|_IH_Prerequisite_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Prerequisite sole(array|string $columns = ['*'])
     * @method Prerequisite updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Prerequisite_QB extends _BaseBuilder {}
    
    /**
     * @method ProductBadgeContent|null getOrPut($key, $value)
     * @method ProductBadgeContent|$this shift(int $count = 1)
     * @method ProductBadgeContent|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadgeContent|$this pop(int $count = 1)
     * @method ProductBadgeContent|null pull($key, \Closure $default = null)
     * @method ProductBadgeContent|null last(callable $callback = null, \Closure $default = null)
     * @method ProductBadgeContent|$this random(callable|int|null $number = null)
     * @method ProductBadgeContent|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadgeContent|null get($key, \Closure $default = null)
     * @method ProductBadgeContent|null first(callable $callback = null, \Closure $default = null)
     * @method ProductBadgeContent|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductBadgeContent|null find($key, $default = null)
     * @method ProductBadgeContent[] all()
     */
    class _IH_ProductBadgeContent_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductBadgeContent[][]|Collection<_IH_ProductBadgeContent_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductBadgeContent_QB whereId($value)
     * @method _IH_ProductBadgeContent_QB whereProductBadgeId($value)
     * @method _IH_ProductBadgeContent_QB whereTargetableId($value)
     * @method _IH_ProductBadgeContent_QB whereTargetableType($value)
     * @method ProductBadgeContent baseSole(array|string $columns = ['*'])
     * @method ProductBadgeContent create(array $attributes = [])
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] cursor()
     * @method ProductBadgeContent|null|_IH_ProductBadgeContent_C|ProductBadgeContent[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductBadgeContent|_IH_ProductBadgeContent_C|ProductBadgeContent[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadgeContent|_IH_ProductBadgeContent_C|ProductBadgeContent[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductBadgeContent|_IH_ProductBadgeContent_C|ProductBadgeContent[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductBadgeContent first(array|string $columns = ['*'])
     * @method ProductBadgeContent firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadgeContent firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductBadgeContent firstOrFail(array|string $columns = ['*'])
     * @method ProductBadgeContent firstOrNew(array $attributes = [], array $values = [])
     * @method ProductBadgeContent firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductBadgeContent forceCreate(array $attributes)
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] get(array|string $columns = ['*'])
     * @method ProductBadgeContent getModel()
     * @method ProductBadgeContent[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] hydrate(array $items)
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductBadgeContent_C|ProductBadgeContent[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductBadgeContent make(array $attributes = [])
     * @method ProductBadgeContent newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductBadgeContent[]|_IH_ProductBadgeContent_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadgeContent restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductBadgeContent[]|_IH_ProductBadgeContent_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadgeContent sole(array|string $columns = ['*'])
     * @method ProductBadgeContent updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductBadgeContent_QB extends _BaseBuilder {}
    
    /**
     * @method ProductBadge|null getOrPut($key, $value)
     * @method ProductBadge|$this shift(int $count = 1)
     * @method ProductBadge|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadge|$this pop(int $count = 1)
     * @method ProductBadge|null pull($key, \Closure $default = null)
     * @method ProductBadge|null last(callable $callback = null, \Closure $default = null)
     * @method ProductBadge|$this random(callable|int|null $number = null)
     * @method ProductBadge|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadge|null get($key, \Closure $default = null)
     * @method ProductBadge|null first(callable $callback = null, \Closure $default = null)
     * @method ProductBadge|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductBadge|null find($key, $default = null)
     * @method ProductBadge[] all()
     */
    class _IH_ProductBadge_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductBadge[][]|Collection<_IH_ProductBadge_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductBadge_QB whereId($value)
     * @method _IH_ProductBadge_QB whereIcon($value)
     * @method _IH_ProductBadge_QB whereColor($value)
     * @method _IH_ProductBadge_QB whereBackground($value)
     * @method _IH_ProductBadge_QB whereStartAt($value)
     * @method _IH_ProductBadge_QB whereEndAt($value)
     * @method _IH_ProductBadge_QB whereEnable($value)
     * @method _IH_ProductBadge_QB whereCreatedAt($value)
     * @method ProductBadge baseSole(array|string $columns = ['*'])
     * @method ProductBadge create(array $attributes = [])
     * @method _IH_ProductBadge_C|ProductBadge[] cursor()
     * @method ProductBadge|null|_IH_ProductBadge_C|ProductBadge[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductBadge_C|ProductBadge[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductBadge|_IH_ProductBadge_C|ProductBadge[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadge|_IH_ProductBadge_C|ProductBadge[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductBadge|_IH_ProductBadge_C|ProductBadge[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductBadge first(array|string $columns = ['*'])
     * @method ProductBadge firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadge firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductBadge firstOrFail(array|string $columns = ['*'])
     * @method ProductBadge firstOrNew(array $attributes = [], array $values = [])
     * @method ProductBadge firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductBadge forceCreate(array $attributes)
     * @method _IH_ProductBadge_C|ProductBadge[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductBadge_C|ProductBadge[] get(array|string $columns = ['*'])
     * @method ProductBadge getModel()
     * @method ProductBadge[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductBadge_C|ProductBadge[] hydrate(array $items)
     * @method _IH_ProductBadge_C|ProductBadge[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductBadge_C|ProductBadge[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductBadge_C|ProductBadge[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductBadge make(array $attributes = [])
     * @method ProductBadge newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductBadge[]|_IH_ProductBadge_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadge restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductBadge[]|_IH_ProductBadge_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadge sole(array|string $columns = ['*'])
     * @method ProductBadge updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductBadge_QB listsTranslations(string $translationField)
     * @method _IH_ProductBadge_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductBadge_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductBadge_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductBadge_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductBadge_QB translated()
     * @method _IH_ProductBadge_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductBadge_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductBadge_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductBadge_QB withTranslation()
     */
    class _IH_ProductBadge_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCategory|null getOrPut($key, $value)
     * @method ProductCategory|$this shift(int $count = 1)
     * @method ProductCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|$this pop(int $count = 1)
     * @method ProductCategory|null pull($key, \Closure $default = null)
     * @method ProductCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|$this random(callable|int|null $number = null)
     * @method ProductCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategory|null get($key, \Closure $default = null)
     * @method ProductCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCategory|null find($key, $default = null)
     * @method ProductCategory[] all()
     */
    class _IH_ProductCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategory[][]|Collection<_IH_ProductCategory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCategory_QB whereId($value)
     * @method _IH_ProductCategory_QB whereParentId($value)
     * @method _IH_ProductCategory_QB whereIcon($value)
     * @method _IH_ProductCategory_QB whereOrder($value)
     * @method ProductCategory baseSole(array|string $columns = ['*'])
     * @method ProductCategory create(array $attributes = [])
     * @method _IH_ProductCategory_C|ProductCategory[] cursor()
     * @method ProductCategory|null|_IH_ProductCategory_C|ProductCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCategory|_IH_ProductCategory_C|ProductCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCategory first(array|string $columns = ['*'])
     * @method ProductCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategory forceCreate(array $attributes)
     * @method _IH_ProductCategory_C|ProductCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategory_C|ProductCategory[] get(array|string $columns = ['*'])
     * @method ProductCategory getModel()
     * @method ProductCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategory_C|ProductCategory[] hydrate(array $items)
     * @method _IH_ProductCategory_C|ProductCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductCategory_C|ProductCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductCategory_C|ProductCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductCategory make(array $attributes = [])
     * @method ProductCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategory[]|_IH_ProductCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductCategory[]|_IH_ProductCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategory sole(array|string $columns = ['*'])
     * @method ProductCategory updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductCategory_QB listsTranslations(string $translationField)
     * @method _IH_ProductCategory_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductCategory_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductCategory_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductCategory_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductCategory_QB translated()
     * @method _IH_ProductCategory_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductCategory_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductCategory_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductCategory_QB withTranslation()
     */
    class _IH_ProductCategory_QB extends _BaseBuilder {}
    
    /**
     * @method ProductDiscount|null getOrPut($key, $value)
     * @method ProductDiscount|$this shift(int $count = 1)
     * @method ProductDiscount|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductDiscount|$this pop(int $count = 1)
     * @method ProductDiscount|null pull($key, \Closure $default = null)
     * @method ProductDiscount|null last(callable $callback = null, \Closure $default = null)
     * @method ProductDiscount|$this random(callable|int|null $number = null)
     * @method ProductDiscount|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductDiscount|null get($key, \Closure $default = null)
     * @method ProductDiscount|null first(callable $callback = null, \Closure $default = null)
     * @method ProductDiscount|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductDiscount|null find($key, $default = null)
     * @method ProductDiscount[] all()
     */
    class _IH_ProductDiscount_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductDiscount[][]|Collection<_IH_ProductDiscount_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductDiscount_QB whereId($value)
     * @method _IH_ProductDiscount_QB whereCreatorId($value)
     * @method _IH_ProductDiscount_QB whereProductId($value)
     * @method _IH_ProductDiscount_QB whereName($value)
     * @method _IH_ProductDiscount_QB wherePercent($value)
     * @method _IH_ProductDiscount_QB whereCount($value)
     * @method _IH_ProductDiscount_QB whereStatus($value)
     * @method _IH_ProductDiscount_QB whereStartDate($value)
     * @method _IH_ProductDiscount_QB whereEndDate($value)
     * @method _IH_ProductDiscount_QB whereCreatedAt($value)
     * @method ProductDiscount baseSole(array|string $columns = ['*'])
     * @method ProductDiscount create(array $attributes = [])
     * @method _IH_ProductDiscount_C|ProductDiscount[] cursor()
     * @method ProductDiscount|null|_IH_ProductDiscount_C|ProductDiscount[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductDiscount_C|ProductDiscount[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductDiscount|_IH_ProductDiscount_C|ProductDiscount[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductDiscount|_IH_ProductDiscount_C|ProductDiscount[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductDiscount|_IH_ProductDiscount_C|ProductDiscount[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductDiscount first(array|string $columns = ['*'])
     * @method ProductDiscount firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductDiscount firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductDiscount firstOrFail(array|string $columns = ['*'])
     * @method ProductDiscount firstOrNew(array $attributes = [], array $values = [])
     * @method ProductDiscount firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductDiscount forceCreate(array $attributes)
     * @method _IH_ProductDiscount_C|ProductDiscount[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductDiscount_C|ProductDiscount[] get(array|string $columns = ['*'])
     * @method ProductDiscount getModel()
     * @method ProductDiscount[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductDiscount_C|ProductDiscount[] hydrate(array $items)
     * @method _IH_ProductDiscount_C|ProductDiscount[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductDiscount_C|ProductDiscount[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductDiscount_C|ProductDiscount[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductDiscount make(array $attributes = [])
     * @method ProductDiscount newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductDiscount[]|_IH_ProductDiscount_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductDiscount restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductDiscount[]|_IH_ProductDiscount_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductDiscount sole(array|string $columns = ['*'])
     * @method ProductDiscount updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductDiscount_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFaq|null getOrPut($key, $value)
     * @method ProductFaq|$this shift(int $count = 1)
     * @method ProductFaq|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFaq|$this pop(int $count = 1)
     * @method ProductFaq|null pull($key, \Closure $default = null)
     * @method ProductFaq|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFaq|$this random(callable|int|null $number = null)
     * @method ProductFaq|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFaq|null get($key, \Closure $default = null)
     * @method ProductFaq|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFaq|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFaq|null find($key, $default = null)
     * @method ProductFaq[] all()
     */
    class _IH_ProductFaq_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFaq[][]|Collection<_IH_ProductFaq_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFaq_QB whereId($value)
     * @method _IH_ProductFaq_QB whereCreatorId($value)
     * @method _IH_ProductFaq_QB whereProductId($value)
     * @method _IH_ProductFaq_QB whereOrder($value)
     * @method _IH_ProductFaq_QB whereCreatedAt($value)
     * @method ProductFaq baseSole(array|string $columns = ['*'])
     * @method ProductFaq create(array $attributes = [])
     * @method _IH_ProductFaq_C|ProductFaq[] cursor()
     * @method ProductFaq|null|_IH_ProductFaq_C|ProductFaq[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFaq_C|ProductFaq[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFaq|_IH_ProductFaq_C|ProductFaq[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFaq|_IH_ProductFaq_C|ProductFaq[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFaq|_IH_ProductFaq_C|ProductFaq[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFaq first(array|string $columns = ['*'])
     * @method ProductFaq firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFaq firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFaq firstOrFail(array|string $columns = ['*'])
     * @method ProductFaq firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFaq firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFaq forceCreate(array $attributes)
     * @method _IH_ProductFaq_C|ProductFaq[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFaq_C|ProductFaq[] get(array|string $columns = ['*'])
     * @method ProductFaq getModel()
     * @method ProductFaq[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFaq_C|ProductFaq[] hydrate(array $items)
     * @method _IH_ProductFaq_C|ProductFaq[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFaq_C|ProductFaq[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFaq_C|ProductFaq[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFaq make(array $attributes = [])
     * @method ProductFaq newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFaq[]|_IH_ProductFaq_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFaq restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFaq[]|_IH_ProductFaq_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFaq sole(array|string $columns = ['*'])
     * @method ProductFaq updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductFaq_QB listsTranslations(string $translationField)
     * @method _IH_ProductFaq_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductFaq_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFaq_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFaq_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductFaq_QB translated()
     * @method _IH_ProductFaq_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductFaq_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductFaq_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFaq_QB withTranslation()
     */
    class _IH_ProductFaq_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFile|null getOrPut($key, $value)
     * @method ProductFile|$this shift(int $count = 1)
     * @method ProductFile|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFile|$this pop(int $count = 1)
     * @method ProductFile|null pull($key, \Closure $default = null)
     * @method ProductFile|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFile|$this random(callable|int|null $number = null)
     * @method ProductFile|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFile|null get($key, \Closure $default = null)
     * @method ProductFile|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFile|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFile|null find($key, $default = null)
     * @method ProductFile[] all()
     */
    class _IH_ProductFile_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFile[][]|Collection<_IH_ProductFile_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFile_QB whereId($value)
     * @method _IH_ProductFile_QB whereCreatorId($value)
     * @method _IH_ProductFile_QB whereProductId($value)
     * @method _IH_ProductFile_QB wherePath($value)
     * @method _IH_ProductFile_QB whereOrder($value)
     * @method _IH_ProductFile_QB whereStatus($value)
     * @method _IH_ProductFile_QB whereCreatedAt($value)
     * @method _IH_ProductFile_QB whereFileType($value)
     * @method _IH_ProductFile_QB whereVolume($value)
     * @method _IH_ProductFile_QB whereOnlineViewer($value)
     * @method ProductFile baseSole(array|string $columns = ['*'])
     * @method ProductFile create(array $attributes = [])
     * @method _IH_ProductFile_C|ProductFile[] cursor()
     * @method ProductFile|null|_IH_ProductFile_C|ProductFile[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFile_C|ProductFile[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFile|_IH_ProductFile_C|ProductFile[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFile first(array|string $columns = ['*'])
     * @method ProductFile firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFile firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFile firstOrFail(array|string $columns = ['*'])
     * @method ProductFile firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFile firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFile forceCreate(array $attributes)
     * @method _IH_ProductFile_C|ProductFile[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFile_C|ProductFile[] get(array|string $columns = ['*'])
     * @method ProductFile getModel()
     * @method ProductFile[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFile_C|ProductFile[] hydrate(array $items)
     * @method _IH_ProductFile_C|ProductFile[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFile_C|ProductFile[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFile_C|ProductFile[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFile make(array $attributes = [])
     * @method ProductFile newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFile[]|_IH_ProductFile_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFile restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFile[]|_IH_ProductFile_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFile sole(array|string $columns = ['*'])
     * @method ProductFile updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductFile_QB listsTranslations(string $translationField)
     * @method _IH_ProductFile_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductFile_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFile_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFile_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductFile_QB translated()
     * @method _IH_ProductFile_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductFile_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductFile_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFile_QB withTranslation()
     */
    class _IH_ProductFile_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFilterOption|null getOrPut($key, $value)
     * @method ProductFilterOption|$this shift(int $count = 1)
     * @method ProductFilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterOption|$this pop(int $count = 1)
     * @method ProductFilterOption|null pull($key, \Closure $default = null)
     * @method ProductFilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFilterOption|$this random(callable|int|null $number = null)
     * @method ProductFilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterOption|null get($key, \Closure $default = null)
     * @method ProductFilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFilterOption|null find($key, $default = null)
     * @method ProductFilterOption[] all()
     */
    class _IH_ProductFilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFilterOption[][]|Collection<_IH_ProductFilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFilterOption_QB whereId($value)
     * @method _IH_ProductFilterOption_QB whereFilterId($value)
     * @method _IH_ProductFilterOption_QB whereOrder($value)
     * @method ProductFilterOption baseSole(array|string $columns = ['*'])
     * @method ProductFilterOption create(array $attributes = [])
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] cursor()
     * @method ProductFilterOption|null|_IH_ProductFilterOption_C|ProductFilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFilterOption|_IH_ProductFilterOption_C|ProductFilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterOption|_IH_ProductFilterOption_C|ProductFilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFilterOption|_IH_ProductFilterOption_C|ProductFilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFilterOption first(array|string $columns = ['*'])
     * @method ProductFilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFilterOption firstOrFail(array|string $columns = ['*'])
     * @method ProductFilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFilterOption forceCreate(array $attributes)
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] get(array|string $columns = ['*'])
     * @method ProductFilterOption getModel()
     * @method ProductFilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] hydrate(array $items)
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFilterOption_C|ProductFilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFilterOption make(array $attributes = [])
     * @method ProductFilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFilterOption[]|_IH_ProductFilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFilterOption[]|_IH_ProductFilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterOption sole(array|string $columns = ['*'])
     * @method ProductFilterOption updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductFilterOption_QB listsTranslations(string $translationField)
     * @method _IH_ProductFilterOption_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductFilterOption_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilterOption_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilterOption_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductFilterOption_QB translated()
     * @method _IH_ProductFilterOption_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductFilterOption_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductFilterOption_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilterOption_QB withTranslation()
     */
    class _IH_ProductFilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFilter|null getOrPut($key, $value)
     * @method ProductFilter|$this shift(int $count = 1)
     * @method ProductFilter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilter|$this pop(int $count = 1)
     * @method ProductFilter|null pull($key, \Closure $default = null)
     * @method ProductFilter|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFilter|$this random(callable|int|null $number = null)
     * @method ProductFilter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilter|null get($key, \Closure $default = null)
     * @method ProductFilter|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFilter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFilter|null find($key, $default = null)
     * @method ProductFilter[] all()
     */
    class _IH_ProductFilter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFilter[][]|Collection<_IH_ProductFilter_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFilter_QB whereId($value)
     * @method _IH_ProductFilter_QB whereCategoryId($value)
     * @method ProductFilter baseSole(array|string $columns = ['*'])
     * @method ProductFilter create(array $attributes = [])
     * @method _IH_ProductFilter_C|ProductFilter[] cursor()
     * @method ProductFilter|null|_IH_ProductFilter_C|ProductFilter[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFilter_C|ProductFilter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFilter|_IH_ProductFilter_C|ProductFilter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilter|_IH_ProductFilter_C|ProductFilter[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFilter|_IH_ProductFilter_C|ProductFilter[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFilter first(array|string $columns = ['*'])
     * @method ProductFilter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilter firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFilter firstOrFail(array|string $columns = ['*'])
     * @method ProductFilter firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFilter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFilter forceCreate(array $attributes)
     * @method _IH_ProductFilter_C|ProductFilter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFilter_C|ProductFilter[] get(array|string $columns = ['*'])
     * @method ProductFilter getModel()
     * @method ProductFilter[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFilter_C|ProductFilter[] hydrate(array $items)
     * @method _IH_ProductFilter_C|ProductFilter[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFilter_C|ProductFilter[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFilter_C|ProductFilter[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFilter make(array $attributes = [])
     * @method ProductFilter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFilter[]|_IH_ProductFilter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilter restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFilter[]|_IH_ProductFilter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilter sole(array|string $columns = ['*'])
     * @method ProductFilter updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductFilter_QB listsTranslations(string $translationField)
     * @method _IH_ProductFilter_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductFilter_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilter_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilter_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductFilter_QB translated()
     * @method _IH_ProductFilter_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductFilter_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductFilter_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductFilter_QB withTranslation()
     */
    class _IH_ProductFilter_QB extends _BaseBuilder {}
    
    /**
     * @method ProductMedia|null getOrPut($key, $value)
     * @method ProductMedia|$this shift(int $count = 1)
     * @method ProductMedia|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductMedia|$this pop(int $count = 1)
     * @method ProductMedia|null pull($key, \Closure $default = null)
     * @method ProductMedia|null last(callable $callback = null, \Closure $default = null)
     * @method ProductMedia|$this random(callable|int|null $number = null)
     * @method ProductMedia|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductMedia|null get($key, \Closure $default = null)
     * @method ProductMedia|null first(callable $callback = null, \Closure $default = null)
     * @method ProductMedia|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductMedia|null find($key, $default = null)
     * @method ProductMedia[] all()
     */
    class _IH_ProductMedia_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductMedia[][]|Collection<_IH_ProductMedia_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductMedia_QB whereId($value)
     * @method _IH_ProductMedia_QB whereCreatorId($value)
     * @method _IH_ProductMedia_QB whereProductId($value)
     * @method _IH_ProductMedia_QB whereType($value)
     * @method _IH_ProductMedia_QB wherePath($value)
     * @method _IH_ProductMedia_QB whereOrder($value)
     * @method _IH_ProductMedia_QB whereCreatedAt($value)
     * @method ProductMedia baseSole(array|string $columns = ['*'])
     * @method ProductMedia create(array $attributes = [])
     * @method _IH_ProductMedia_C|ProductMedia[] cursor()
     * @method ProductMedia|null|_IH_ProductMedia_C|ProductMedia[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductMedia_C|ProductMedia[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductMedia|_IH_ProductMedia_C|ProductMedia[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductMedia|_IH_ProductMedia_C|ProductMedia[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductMedia|_IH_ProductMedia_C|ProductMedia[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductMedia first(array|string $columns = ['*'])
     * @method ProductMedia firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductMedia firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductMedia firstOrFail(array|string $columns = ['*'])
     * @method ProductMedia firstOrNew(array $attributes = [], array $values = [])
     * @method ProductMedia firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductMedia forceCreate(array $attributes)
     * @method _IH_ProductMedia_C|ProductMedia[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductMedia_C|ProductMedia[] get(array|string $columns = ['*'])
     * @method ProductMedia getModel()
     * @method ProductMedia[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductMedia_C|ProductMedia[] hydrate(array $items)
     * @method _IH_ProductMedia_C|ProductMedia[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductMedia_C|ProductMedia[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductMedia_C|ProductMedia[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductMedia make(array $attributes = [])
     * @method ProductMedia newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductMedia[]|_IH_ProductMedia_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductMedia restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductMedia[]|_IH_ProductMedia_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductMedia sole(array|string $columns = ['*'])
     * @method ProductMedia updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductMedia_QB extends _BaseBuilder {}
    
    /**
     * @method ProductOrder|null getOrPut($key, $value)
     * @method ProductOrder|$this shift(int $count = 1)
     * @method ProductOrder|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductOrder|$this pop(int $count = 1)
     * @method ProductOrder|null pull($key, \Closure $default = null)
     * @method ProductOrder|null last(callable $callback = null, \Closure $default = null)
     * @method ProductOrder|$this random(callable|int|null $number = null)
     * @method ProductOrder|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductOrder|null get($key, \Closure $default = null)
     * @method ProductOrder|null first(callable $callback = null, \Closure $default = null)
     * @method ProductOrder|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductOrder|null find($key, $default = null)
     * @method ProductOrder[] all()
     */
    class _IH_ProductOrder_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductOrder[][]|Collection<_IH_ProductOrder_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductOrder_QB whereId($value)
     * @method _IH_ProductOrder_QB whereProductId($value)
     * @method _IH_ProductOrder_QB whereSellerId($value)
     * @method _IH_ProductOrder_QB whereBuyerId($value)
     * @method _IH_ProductOrder_QB whereSaleId($value)
     * @method _IH_ProductOrder_QB whereSpecifications($value)
     * @method _IH_ProductOrder_QB whereQuantity($value)
     * @method _IH_ProductOrder_QB whereDiscountId($value)
     * @method _IH_ProductOrder_QB whereMessageToSeller($value)
     * @method _IH_ProductOrder_QB whereTrackingCode($value)
     * @method _IH_ProductOrder_QB whereStatus($value)
     * @method _IH_ProductOrder_QB whereCreatedAt($value)
     * @method _IH_ProductOrder_QB whereInstallmentOrderId($value)
     * @method _IH_ProductOrder_QB whereGiftId($value)
     * @method ProductOrder baseSole(array|string $columns = ['*'])
     * @method ProductOrder create(array $attributes = [])
     * @method _IH_ProductOrder_C|ProductOrder[] cursor()
     * @method ProductOrder|null|_IH_ProductOrder_C|ProductOrder[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductOrder_C|ProductOrder[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductOrder|_IH_ProductOrder_C|ProductOrder[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductOrder|_IH_ProductOrder_C|ProductOrder[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductOrder|_IH_ProductOrder_C|ProductOrder[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductOrder first(array|string $columns = ['*'])
     * @method ProductOrder firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductOrder firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductOrder firstOrFail(array|string $columns = ['*'])
     * @method ProductOrder firstOrNew(array $attributes = [], array $values = [])
     * @method ProductOrder firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductOrder forceCreate(array $attributes)
     * @method _IH_ProductOrder_C|ProductOrder[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductOrder_C|ProductOrder[] get(array|string $columns = ['*'])
     * @method ProductOrder getModel()
     * @method ProductOrder[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductOrder_C|ProductOrder[] hydrate(array $items)
     * @method _IH_ProductOrder_C|ProductOrder[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductOrder_C|ProductOrder[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductOrder_C|ProductOrder[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductOrder make(array $attributes = [])
     * @method ProductOrder newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductOrder[]|_IH_ProductOrder_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductOrder restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductOrder[]|_IH_ProductOrder_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductOrder sole(array|string $columns = ['*'])
     * @method ProductOrder updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductOrder_QB extends _BaseBuilder {}
    
    /**
     * @method ProductReview|null getOrPut($key, $value)
     * @method ProductReview|$this shift(int $count = 1)
     * @method ProductReview|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductReview|$this pop(int $count = 1)
     * @method ProductReview|null pull($key, \Closure $default = null)
     * @method ProductReview|null last(callable $callback = null, \Closure $default = null)
     * @method ProductReview|$this random(callable|int|null $number = null)
     * @method ProductReview|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductReview|null get($key, \Closure $default = null)
     * @method ProductReview|null first(callable $callback = null, \Closure $default = null)
     * @method ProductReview|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductReview|null find($key, $default = null)
     * @method ProductReview[] all()
     */
    class _IH_ProductReview_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductReview[][]|Collection<_IH_ProductReview_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductReview_QB whereId($value)
     * @method _IH_ProductReview_QB whereProductId($value)
     * @method _IH_ProductReview_QB whereCreatorId($value)
     * @method _IH_ProductReview_QB whereProductQuality($value)
     * @method _IH_ProductReview_QB wherePurchaseWorth($value)
     * @method _IH_ProductReview_QB whereDeliveryQuality($value)
     * @method _IH_ProductReview_QB whereSellerQuality($value)
     * @method _IH_ProductReview_QB whereRates($value)
     * @method _IH_ProductReview_QB whereDescription($value)
     * @method _IH_ProductReview_QB whereCreatedAt($value)
     * @method _IH_ProductReview_QB whereStatus($value)
     * @method ProductReview baseSole(array|string $columns = ['*'])
     * @method ProductReview create(array $attributes = [])
     * @method _IH_ProductReview_C|ProductReview[] cursor()
     * @method ProductReview|null|_IH_ProductReview_C|ProductReview[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductReview_C|ProductReview[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductReview|_IH_ProductReview_C|ProductReview[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductReview|_IH_ProductReview_C|ProductReview[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductReview|_IH_ProductReview_C|ProductReview[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductReview first(array|string $columns = ['*'])
     * @method ProductReview firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductReview firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductReview firstOrFail(array|string $columns = ['*'])
     * @method ProductReview firstOrNew(array $attributes = [], array $values = [])
     * @method ProductReview firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductReview forceCreate(array $attributes)
     * @method _IH_ProductReview_C|ProductReview[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductReview_C|ProductReview[] get(array|string $columns = ['*'])
     * @method ProductReview getModel()
     * @method ProductReview[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductReview_C|ProductReview[] hydrate(array $items)
     * @method _IH_ProductReview_C|ProductReview[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductReview_C|ProductReview[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductReview_C|ProductReview[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductReview make(array $attributes = [])
     * @method ProductReview newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductReview[]|_IH_ProductReview_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductReview restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductReview[]|_IH_ProductReview_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductReview sole(array|string $columns = ['*'])
     * @method ProductReview updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductReview_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSelectedFilterOption|null getOrPut($key, $value)
     * @method ProductSelectedFilterOption|$this shift(int $count = 1)
     * @method ProductSelectedFilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedFilterOption|$this pop(int $count = 1)
     * @method ProductSelectedFilterOption|null pull($key, \Closure $default = null)
     * @method ProductSelectedFilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedFilterOption|$this random(callable|int|null $number = null)
     * @method ProductSelectedFilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedFilterOption|null get($key, \Closure $default = null)
     * @method ProductSelectedFilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedFilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSelectedFilterOption|null find($key, $default = null)
     * @method ProductSelectedFilterOption[] all()
     */
    class _IH_ProductSelectedFilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSelectedFilterOption[][]|Collection<_IH_ProductSelectedFilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSelectedFilterOption_QB whereId($value)
     * @method _IH_ProductSelectedFilterOption_QB whereProductId($value)
     * @method _IH_ProductSelectedFilterOption_QB whereFilterOptionId($value)
     * @method ProductSelectedFilterOption baseSole(array|string $columns = ['*'])
     * @method ProductSelectedFilterOption create(array $attributes = [])
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] cursor()
     * @method ProductSelectedFilterOption|null|_IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSelectedFilterOption|_IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedFilterOption|_IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSelectedFilterOption|_IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSelectedFilterOption first(array|string $columns = ['*'])
     * @method ProductSelectedFilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedFilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSelectedFilterOption firstOrFail(array|string $columns = ['*'])
     * @method ProductSelectedFilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSelectedFilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSelectedFilterOption forceCreate(array $attributes)
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] get(array|string $columns = ['*'])
     * @method ProductSelectedFilterOption getModel()
     * @method ProductSelectedFilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] hydrate(array $items)
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSelectedFilterOption make(array $attributes = [])
     * @method ProductSelectedFilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSelectedFilterOption[]|_IH_ProductSelectedFilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedFilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSelectedFilterOption[]|_IH_ProductSelectedFilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedFilterOption sole(array|string $columns = ['*'])
     * @method ProductSelectedFilterOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSelectedFilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSelectedSpecificationMultiValue|null getOrPut($key, $value)
     * @method ProductSelectedSpecificationMultiValue|$this shift(int $count = 1)
     * @method ProductSelectedSpecificationMultiValue|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecificationMultiValue|$this pop(int $count = 1)
     * @method ProductSelectedSpecificationMultiValue|null pull($key, \Closure $default = null)
     * @method ProductSelectedSpecificationMultiValue|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecificationMultiValue|$this random(callable|int|null $number = null)
     * @method ProductSelectedSpecificationMultiValue|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecificationMultiValue|null get($key, \Closure $default = null)
     * @method ProductSelectedSpecificationMultiValue|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecificationMultiValue|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSelectedSpecificationMultiValue|null find($key, $default = null)
     * @method ProductSelectedSpecificationMultiValue[] all()
     */
    class _IH_ProductSelectedSpecificationMultiValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSelectedSpecificationMultiValue[][]|Collection<_IH_ProductSelectedSpecificationMultiValue_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSelectedSpecificationMultiValue_QB whereId($value)
     * @method _IH_ProductSelectedSpecificationMultiValue_QB whereSelectedSpecificationId($value)
     * @method _IH_ProductSelectedSpecificationMultiValue_QB whereSpecificationMultiValueId($value)
     * @method ProductSelectedSpecificationMultiValue baseSole(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue create(array $attributes = [])
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] cursor()
     * @method ProductSelectedSpecificationMultiValue|null|_IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue|_IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecificationMultiValue|_IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue|_IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue first(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecificationMultiValue firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecificationMultiValue firstOrFail(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecificationMultiValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSelectedSpecificationMultiValue forceCreate(array $attributes)
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] get(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue getModel()
     * @method ProductSelectedSpecificationMultiValue[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] hydrate(array $items)
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSelectedSpecificationMultiValue make(array $attributes = [])
     * @method ProductSelectedSpecificationMultiValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSelectedSpecificationMultiValue[]|_IH_ProductSelectedSpecificationMultiValue_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecificationMultiValue restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSelectedSpecificationMultiValue[]|_IH_ProductSelectedSpecificationMultiValue_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecificationMultiValue sole(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationMultiValue updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSelectedSpecificationMultiValue_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSelectedSpecification|null getOrPut($key, $value)
     * @method ProductSelectedSpecification|$this shift(int $count = 1)
     * @method ProductSelectedSpecification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecification|$this pop(int $count = 1)
     * @method ProductSelectedSpecification|null pull($key, \Closure $default = null)
     * @method ProductSelectedSpecification|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecification|$this random(callable|int|null $number = null)
     * @method ProductSelectedSpecification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecification|null get($key, \Closure $default = null)
     * @method ProductSelectedSpecification|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSelectedSpecification|null find($key, $default = null)
     * @method ProductSelectedSpecification[] all()
     */
    class _IH_ProductSelectedSpecification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSelectedSpecification[][]|Collection<_IH_ProductSelectedSpecification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSelectedSpecification_QB whereId($value)
     * @method _IH_ProductSelectedSpecification_QB whereCreatorId($value)
     * @method _IH_ProductSelectedSpecification_QB whereProductId($value)
     * @method _IH_ProductSelectedSpecification_QB whereProductSpecificationId($value)
     * @method _IH_ProductSelectedSpecification_QB whereType($value)
     * @method _IH_ProductSelectedSpecification_QB whereAllowSelection($value)
     * @method _IH_ProductSelectedSpecification_QB whereOrder($value)
     * @method _IH_ProductSelectedSpecification_QB whereStatus($value)
     * @method _IH_ProductSelectedSpecification_QB whereCreatedAt($value)
     * @method ProductSelectedSpecification baseSole(array|string $columns = ['*'])
     * @method ProductSelectedSpecification create(array $attributes = [])
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] cursor()
     * @method ProductSelectedSpecification|null|_IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSelectedSpecification|_IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecification|_IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecification|_IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecification first(array|string $columns = ['*'])
     * @method ProductSelectedSpecification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecification firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecification firstOrFail(array|string $columns = ['*'])
     * @method ProductSelectedSpecification firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSelectedSpecification forceCreate(array $attributes)
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] get(array|string $columns = ['*'])
     * @method ProductSelectedSpecification getModel()
     * @method ProductSelectedSpecification[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] hydrate(array $items)
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSelectedSpecification make(array $attributes = [])
     * @method ProductSelectedSpecification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSelectedSpecification[]|_IH_ProductSelectedSpecification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSelectedSpecification[]|_IH_ProductSelectedSpecification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecification sole(array|string $columns = ['*'])
     * @method ProductSelectedSpecification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductSelectedSpecification_QB listsTranslations(string $translationField)
     * @method _IH_ProductSelectedSpecification_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductSelectedSpecification_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSelectedSpecification_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSelectedSpecification_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductSelectedSpecification_QB translated()
     * @method _IH_ProductSelectedSpecification_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductSelectedSpecification_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductSelectedSpecification_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSelectedSpecification_QB withTranslation()
     */
    class _IH_ProductSelectedSpecification_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSpecificationCategory|null getOrPut($key, $value)
     * @method ProductSpecificationCategory|$this shift(int $count = 1)
     * @method ProductSpecificationCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationCategory|$this pop(int $count = 1)
     * @method ProductSpecificationCategory|null pull($key, \Closure $default = null)
     * @method ProductSpecificationCategory|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationCategory|$this random(callable|int|null $number = null)
     * @method ProductSpecificationCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationCategory|null get($key, \Closure $default = null)
     * @method ProductSpecificationCategory|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSpecificationCategory|null find($key, $default = null)
     * @method ProductSpecificationCategory[] all()
     */
    class _IH_ProductSpecificationCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSpecificationCategory[][]|Collection<_IH_ProductSpecificationCategory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSpecificationCategory_QB whereId($value)
     * @method _IH_ProductSpecificationCategory_QB whereSpecificationId($value)
     * @method _IH_ProductSpecificationCategory_QB whereCategoryId($value)
     * @method ProductSpecificationCategory baseSole(array|string $columns = ['*'])
     * @method ProductSpecificationCategory create(array $attributes = [])
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] cursor()
     * @method ProductSpecificationCategory|null|_IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSpecificationCategory|_IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationCategory|_IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSpecificationCategory|_IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSpecificationCategory first(array|string $columns = ['*'])
     * @method ProductSpecificationCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSpecificationCategory firstOrFail(array|string $columns = ['*'])
     * @method ProductSpecificationCategory firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSpecificationCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSpecificationCategory forceCreate(array $attributes)
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] get(array|string $columns = ['*'])
     * @method ProductSpecificationCategory getModel()
     * @method ProductSpecificationCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] hydrate(array $items)
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSpecificationCategory make(array $attributes = [])
     * @method ProductSpecificationCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSpecificationCategory[]|_IH_ProductSpecificationCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationCategory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSpecificationCategory[]|_IH_ProductSpecificationCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationCategory sole(array|string $columns = ['*'])
     * @method ProductSpecificationCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSpecificationCategory_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSpecificationMultiValue|null getOrPut($key, $value)
     * @method ProductSpecificationMultiValue|$this shift(int $count = 1)
     * @method ProductSpecificationMultiValue|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationMultiValue|$this pop(int $count = 1)
     * @method ProductSpecificationMultiValue|null pull($key, \Closure $default = null)
     * @method ProductSpecificationMultiValue|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationMultiValue|$this random(callable|int|null $number = null)
     * @method ProductSpecificationMultiValue|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationMultiValue|null get($key, \Closure $default = null)
     * @method ProductSpecificationMultiValue|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationMultiValue|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSpecificationMultiValue|null find($key, $default = null)
     * @method ProductSpecificationMultiValue[] all()
     */
    class _IH_ProductSpecificationMultiValue_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSpecificationMultiValue[][]|Collection<_IH_ProductSpecificationMultiValue_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSpecificationMultiValue_QB whereId($value)
     * @method _IH_ProductSpecificationMultiValue_QB whereSpecificationId($value)
     * @method ProductSpecificationMultiValue baseSole(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue create(array $attributes = [])
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] cursor()
     * @method ProductSpecificationMultiValue|null|_IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue|_IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationMultiValue|_IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue|_IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue first(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationMultiValue firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSpecificationMultiValue firstOrFail(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSpecificationMultiValue firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSpecificationMultiValue forceCreate(array $attributes)
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] get(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue getModel()
     * @method ProductSpecificationMultiValue[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] hydrate(array $items)
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSpecificationMultiValue make(array $attributes = [])
     * @method ProductSpecificationMultiValue newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSpecificationMultiValue[]|_IH_ProductSpecificationMultiValue_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationMultiValue restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSpecificationMultiValue[]|_IH_ProductSpecificationMultiValue_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationMultiValue sole(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValue updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductSpecificationMultiValue_QB listsTranslations(string $translationField)
     * @method _IH_ProductSpecificationMultiValue_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductSpecificationMultiValue_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecificationMultiValue_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecificationMultiValue_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductSpecificationMultiValue_QB translated()
     * @method _IH_ProductSpecificationMultiValue_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductSpecificationMultiValue_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductSpecificationMultiValue_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecificationMultiValue_QB withTranslation()
     */
    class _IH_ProductSpecificationMultiValue_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSpecification|null getOrPut($key, $value)
     * @method ProductSpecification|$this shift(int $count = 1)
     * @method ProductSpecification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecification|$this pop(int $count = 1)
     * @method ProductSpecification|null pull($key, \Closure $default = null)
     * @method ProductSpecification|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSpecification|$this random(callable|int|null $number = null)
     * @method ProductSpecification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecification|null get($key, \Closure $default = null)
     * @method ProductSpecification|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSpecification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSpecification|null find($key, $default = null)
     * @method ProductSpecification[] all()
     */
    class _IH_ProductSpecification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSpecification[][]|Collection<_IH_ProductSpecification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSpecification_QB whereId($value)
     * @method _IH_ProductSpecification_QB whereInputType($value)
     * @method ProductSpecification baseSole(array|string $columns = ['*'])
     * @method ProductSpecification create(array $attributes = [])
     * @method _IH_ProductSpecification_C|ProductSpecification[] cursor()
     * @method ProductSpecification|null|_IH_ProductSpecification_C|ProductSpecification[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSpecification_C|ProductSpecification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSpecification|_IH_ProductSpecification_C|ProductSpecification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecification|_IH_ProductSpecification_C|ProductSpecification[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSpecification|_IH_ProductSpecification_C|ProductSpecification[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSpecification first(array|string $columns = ['*'])
     * @method ProductSpecification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecification firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSpecification firstOrFail(array|string $columns = ['*'])
     * @method ProductSpecification firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSpecification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSpecification forceCreate(array $attributes)
     * @method _IH_ProductSpecification_C|ProductSpecification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSpecification_C|ProductSpecification[] get(array|string $columns = ['*'])
     * @method ProductSpecification getModel()
     * @method ProductSpecification[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSpecification_C|ProductSpecification[] hydrate(array $items)
     * @method _IH_ProductSpecification_C|ProductSpecification[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSpecification_C|ProductSpecification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSpecification_C|ProductSpecification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSpecification make(array $attributes = [])
     * @method ProductSpecification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSpecification[]|_IH_ProductSpecification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSpecification[]|_IH_ProductSpecification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecification sole(array|string $columns = ['*'])
     * @method ProductSpecification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_ProductSpecification_QB listsTranslations(string $translationField)
     * @method _IH_ProductSpecification_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_ProductSpecification_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecification_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecification_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_ProductSpecification_QB translated()
     * @method _IH_ProductSpecification_QB translatedIn(null|string $locale = null)
     * @method _IH_ProductSpecification_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_ProductSpecification_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_ProductSpecification_QB withTranslation()
     */
    class _IH_ProductSpecification_QB extends _BaseBuilder {}
    
    /**
     * @method Product|null getOrPut($key, $value)
     * @method Product|$this shift(int $count = 1)
     * @method Product|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Product|$this pop(int $count = 1)
     * @method Product|null pull($key, \Closure $default = null)
     * @method Product|null last(callable $callback = null, \Closure $default = null)
     * @method Product|$this random(callable|int|null $number = null)
     * @method Product|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Product|null get($key, \Closure $default = null)
     * @method Product|null first(callable $callback = null, \Closure $default = null)
     * @method Product|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Product|null find($key, $default = null)
     * @method Product[] all()
     */
    class _IH_Product_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Product[][]|Collection<_IH_Product_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Product_QB whereId($value)
     * @method _IH_Product_QB whereCreatorId($value)
     * @method _IH_Product_QB whereType($value)
     * @method _IH_Product_QB whereSlug($value)
     * @method _IH_Product_QB whereCategoryId($value)
     * @method _IH_Product_QB wherePrice($value)
     * @method _IH_Product_QB wherePoint($value)
     * @method _IH_Product_QB whereUnlimitedInventory($value)
     * @method _IH_Product_QB whereOrdering($value)
     * @method _IH_Product_QB whereInventory($value)
     * @method _IH_Product_QB whereInventoryWarning($value)
     * @method _IH_Product_QB whereInventoryUpdatedAt($value)
     * @method _IH_Product_QB whereDeliveryFee($value)
     * @method _IH_Product_QB whereDeliveryEstimatedTime($value)
     * @method _IH_Product_QB whereMessageForReviewer($value)
     * @method _IH_Product_QB whereTax($value)
     * @method _IH_Product_QB whereCommission($value)
     * @method _IH_Product_QB whereStatus($value)
     * @method _IH_Product_QB whereUpdatedAt($value)
     * @method _IH_Product_QB whereCreatedAt($value)
     * @method _IH_Product_QB whereCommissionType($value)
     * @method Product baseSole(array|string $columns = ['*'])
     * @method Product create(array $attributes = [])
     * @method _IH_Product_C|Product[] cursor()
     * @method Product|null|_IH_Product_C|Product[] find($id, array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product|_IH_Product_C|Product[] findOrFail($id, array|string $columns = ['*'])
     * @method Product|_IH_Product_C|Product[] findOrNew($id, array|string $columns = ['*'])
     * @method Product first(array|string $columns = ['*'])
     * @method Product firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Product firstOrCreate(array $attributes = [], array $values = [])
     * @method Product firstOrFail(array|string $columns = ['*'])
     * @method Product firstOrNew(array $attributes = [], array $values = [])
     * @method Product firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Product forceCreate(array $attributes)
     * @method _IH_Product_C|Product[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Product_C|Product[] get(array|string $columns = ['*'])
     * @method Product getModel()
     * @method Product[] getModels(array|string $columns = ['*'])
     * @method _IH_Product_C|Product[] hydrate(array $items)
     * @method _IH_Product_C|Product[] lazy(int $chunkSize = 1000)
     * @method _IH_Product_C|Product[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Product_C|Product[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Product make(array $attributes = [])
     * @method Product newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Product[]|_IH_Product_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Product[]|_IH_Product_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Product sole(array|string $columns = ['*'])
     * @method Product updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Product_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Product_QB listsTranslations(string $translationField)
     * @method _IH_Product_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Product_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Product_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Product_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Product_QB translated()
     * @method _IH_Product_QB translatedIn(null|string $locale = null)
     * @method _IH_Product_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Product_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Product_QB withTranslation()
     * @method _IH_Product_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Product_QB extends _BaseBuilder {}
    
    /**
     * @method Promotion|null getOrPut($key, $value)
     * @method Promotion|$this shift(int $count = 1)
     * @method Promotion|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Promotion|$this pop(int $count = 1)
     * @method Promotion|null pull($key, \Closure $default = null)
     * @method Promotion|null last(callable $callback = null, \Closure $default = null)
     * @method Promotion|$this random(callable|int|null $number = null)
     * @method Promotion|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Promotion|null get($key, \Closure $default = null)
     * @method Promotion|null first(callable $callback = null, \Closure $default = null)
     * @method Promotion|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Promotion|null find($key, $default = null)
     * @method Promotion[] all()
     */
    class _IH_Promotion_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Promotion[][]|Collection<_IH_Promotion_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Promotion_QB whereId($value)
     * @method _IH_Promotion_QB whereDays($value)
     * @method _IH_Promotion_QB wherePrice($value)
     * @method _IH_Promotion_QB whereIcon($value)
     * @method _IH_Promotion_QB whereIsPopular($value)
     * @method _IH_Promotion_QB whereCreatedAt($value)
     * @method Promotion baseSole(array|string $columns = ['*'])
     * @method Promotion create(array $attributes = [])
     * @method _IH_Promotion_C|Promotion[] cursor()
     * @method Promotion|null|_IH_Promotion_C|Promotion[] find($id, array|string $columns = ['*'])
     * @method _IH_Promotion_C|Promotion[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Promotion|_IH_Promotion_C|Promotion[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Promotion|_IH_Promotion_C|Promotion[] findOrFail($id, array|string $columns = ['*'])
     * @method Promotion|_IH_Promotion_C|Promotion[] findOrNew($id, array|string $columns = ['*'])
     * @method Promotion first(array|string $columns = ['*'])
     * @method Promotion firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Promotion firstOrCreate(array $attributes = [], array $values = [])
     * @method Promotion firstOrFail(array|string $columns = ['*'])
     * @method Promotion firstOrNew(array $attributes = [], array $values = [])
     * @method Promotion firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Promotion forceCreate(array $attributes)
     * @method _IH_Promotion_C|Promotion[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Promotion_C|Promotion[] get(array|string $columns = ['*'])
     * @method Promotion getModel()
     * @method Promotion[] getModels(array|string $columns = ['*'])
     * @method _IH_Promotion_C|Promotion[] hydrate(array $items)
     * @method _IH_Promotion_C|Promotion[] lazy(int $chunkSize = 1000)
     * @method _IH_Promotion_C|Promotion[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Promotion_C|Promotion[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Promotion make(array $attributes = [])
     * @method Promotion newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Promotion[]|_IH_Promotion_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Promotion restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Promotion[]|_IH_Promotion_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Promotion sole(array|string $columns = ['*'])
     * @method Promotion updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Promotion_QB listsTranslations(string $translationField)
     * @method _IH_Promotion_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Promotion_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Promotion_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Promotion_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Promotion_QB translated()
     * @method _IH_Promotion_QB translatedIn(null|string $locale = null)
     * @method _IH_Promotion_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Promotion_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Promotion_QB withTranslation()
     */
    class _IH_Promotion_QB extends _BaseBuilder {}
    
    /**
     * @method PurchaseNotificationHistory|null getOrPut($key, $value)
     * @method PurchaseNotificationHistory|$this shift(int $count = 1)
     * @method PurchaseNotificationHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationHistory|$this pop(int $count = 1)
     * @method PurchaseNotificationHistory|null pull($key, \Closure $default = null)
     * @method PurchaseNotificationHistory|null last(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationHistory|$this random(callable|int|null $number = null)
     * @method PurchaseNotificationHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationHistory|null get($key, \Closure $default = null)
     * @method PurchaseNotificationHistory|null first(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PurchaseNotificationHistory|null find($key, $default = null)
     * @method PurchaseNotificationHistory[] all()
     */
    class _IH_PurchaseNotificationHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PurchaseNotificationHistory[][]|Collection<_IH_PurchaseNotificationHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PurchaseNotificationHistory_QB whereId($value)
     * @method _IH_PurchaseNotificationHistory_QB whereUserId($value)
     * @method _IH_PurchaseNotificationHistory_QB wherePurchaseNotificationId($value)
     * @method _IH_PurchaseNotificationHistory_QB whereDisplayType($value)
     * @method _IH_PurchaseNotificationHistory_QB whereCountView($value)
     * @method _IH_PurchaseNotificationHistory_QB whereSessionEnded($value)
     * @method PurchaseNotificationHistory baseSole(array|string $columns = ['*'])
     * @method PurchaseNotificationHistory create(array $attributes = [])
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] cursor()
     * @method PurchaseNotificationHistory|null|_IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PurchaseNotificationHistory|_IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationHistory|_IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method PurchaseNotificationHistory|_IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method PurchaseNotificationHistory first(array|string $columns = ['*'])
     * @method PurchaseNotificationHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method PurchaseNotificationHistory firstOrFail(array|string $columns = ['*'])
     * @method PurchaseNotificationHistory firstOrNew(array $attributes = [], array $values = [])
     * @method PurchaseNotificationHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PurchaseNotificationHistory forceCreate(array $attributes)
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] get(array|string $columns = ['*'])
     * @method PurchaseNotificationHistory getModel()
     * @method PurchaseNotificationHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] hydrate(array $items)
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PurchaseNotificationHistory make(array $attributes = [])
     * @method PurchaseNotificationHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PurchaseNotificationHistory[]|_IH_PurchaseNotificationHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PurchaseNotificationHistory[]|_IH_PurchaseNotificationHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationHistory sole(array|string $columns = ['*'])
     * @method PurchaseNotificationHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PurchaseNotificationHistory_QB extends _BaseBuilder {}
    
    /**
     * @method PurchaseNotificationRoleGroupContent|null getOrPut($key, $value)
     * @method PurchaseNotificationRoleGroupContent|$this shift(int $count = 1)
     * @method PurchaseNotificationRoleGroupContent|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationRoleGroupContent|$this pop(int $count = 1)
     * @method PurchaseNotificationRoleGroupContent|null pull($key, \Closure $default = null)
     * @method PurchaseNotificationRoleGroupContent|null last(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationRoleGroupContent|$this random(callable|int|null $number = null)
     * @method PurchaseNotificationRoleGroupContent|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationRoleGroupContent|null get($key, \Closure $default = null)
     * @method PurchaseNotificationRoleGroupContent|null first(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationRoleGroupContent|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PurchaseNotificationRoleGroupContent|null find($key, $default = null)
     * @method PurchaseNotificationRoleGroupContent[] all()
     */
    class _IH_PurchaseNotificationRoleGroupContent_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PurchaseNotificationRoleGroupContent[][]|Collection<_IH_PurchaseNotificationRoleGroupContent_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB wherePurchaseNotificationId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereRoleId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereGroupId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereWebinarId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereBundleId($value)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB whereProductId($value)
     * @method PurchaseNotificationRoleGroupContent baseSole(array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent create(array $attributes = [])
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] cursor()
     * @method PurchaseNotificationRoleGroupContent|null|_IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] find($id, array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent|_IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationRoleGroupContent|_IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] findOrFail($id, array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent|_IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] findOrNew($id, array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent first(array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationRoleGroupContent firstOrCreate(array $attributes = [], array $values = [])
     * @method PurchaseNotificationRoleGroupContent firstOrFail(array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent firstOrNew(array $attributes = [], array $values = [])
     * @method PurchaseNotificationRoleGroupContent firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PurchaseNotificationRoleGroupContent forceCreate(array $attributes)
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] get(array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent getModel()
     * @method PurchaseNotificationRoleGroupContent[] getModels(array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] hydrate(array $items)
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] lazy(int $chunkSize = 1000)
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PurchaseNotificationRoleGroupContent make(array $attributes = [])
     * @method PurchaseNotificationRoleGroupContent newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PurchaseNotificationRoleGroupContent[]|_IH_PurchaseNotificationRoleGroupContent_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationRoleGroupContent restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PurchaseNotificationRoleGroupContent[]|_IH_PurchaseNotificationRoleGroupContent_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationRoleGroupContent sole(array|string $columns = ['*'])
     * @method PurchaseNotificationRoleGroupContent updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PurchaseNotificationRoleGroupContent_QB extends _BaseBuilder {}
    
    /**
     * @method PurchaseNotification|null getOrPut($key, $value)
     * @method PurchaseNotification|$this shift(int $count = 1)
     * @method PurchaseNotification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotification|$this pop(int $count = 1)
     * @method PurchaseNotification|null pull($key, \Closure $default = null)
     * @method PurchaseNotification|null last(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotification|$this random(callable|int|null $number = null)
     * @method PurchaseNotification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotification|null get($key, \Closure $default = null)
     * @method PurchaseNotification|null first(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PurchaseNotification|null find($key, $default = null)
     * @method PurchaseNotification[] all()
     */
    class _IH_PurchaseNotification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PurchaseNotification[][]|Collection<_IH_PurchaseNotification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PurchaseNotification_QB whereId($value)
     * @method _IH_PurchaseNotification_QB whereStartAt($value)
     * @method _IH_PurchaseNotification_QB whereEndAt($value)
     * @method _IH_PurchaseNotification_QB wherePopupDuration($value)
     * @method _IH_PurchaseNotification_QB wherePopupDelay($value)
     * @method _IH_PurchaseNotification_QB whereMaximumPurchaseAmount($value)
     * @method _IH_PurchaseNotification_QB whereMaximumCommunityAge($value)
     * @method _IH_PurchaseNotification_QB whereDisplayType($value)
     * @method _IH_PurchaseNotification_QB whereDisplayTime($value)
     * @method _IH_PurchaseNotification_QB whereDisplayForLoggedOutUsers($value)
     * @method _IH_PurchaseNotification_QB whereEnable($value)
     * @method _IH_PurchaseNotification_QB whereCreatedAt($value)
     * @method PurchaseNotification baseSole(array|string $columns = ['*'])
     * @method PurchaseNotification create(array $attributes = [])
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] cursor()
     * @method PurchaseNotification|null|_IH_PurchaseNotification_C|PurchaseNotification[] find($id, array|string $columns = ['*'])
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PurchaseNotification|_IH_PurchaseNotification_C|PurchaseNotification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotification|_IH_PurchaseNotification_C|PurchaseNotification[] findOrFail($id, array|string $columns = ['*'])
     * @method PurchaseNotification|_IH_PurchaseNotification_C|PurchaseNotification[] findOrNew($id, array|string $columns = ['*'])
     * @method PurchaseNotification first(array|string $columns = ['*'])
     * @method PurchaseNotification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotification firstOrCreate(array $attributes = [], array $values = [])
     * @method PurchaseNotification firstOrFail(array|string $columns = ['*'])
     * @method PurchaseNotification firstOrNew(array $attributes = [], array $values = [])
     * @method PurchaseNotification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PurchaseNotification forceCreate(array $attributes)
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] get(array|string $columns = ['*'])
     * @method PurchaseNotification getModel()
     * @method PurchaseNotification[] getModels(array|string $columns = ['*'])
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] hydrate(array $items)
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] lazy(int $chunkSize = 1000)
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PurchaseNotification_C|PurchaseNotification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PurchaseNotification make(array $attributes = [])
     * @method PurchaseNotification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PurchaseNotification[]|_IH_PurchaseNotification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PurchaseNotification[]|_IH_PurchaseNotification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotification sole(array|string $columns = ['*'])
     * @method PurchaseNotification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_PurchaseNotification_QB listsTranslations(string $translationField)
     * @method _IH_PurchaseNotification_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_PurchaseNotification_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_PurchaseNotification_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_PurchaseNotification_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_PurchaseNotification_QB translated()
     * @method _IH_PurchaseNotification_QB translatedIn(null|string $locale = null)
     * @method _IH_PurchaseNotification_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_PurchaseNotification_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_PurchaseNotification_QB withTranslation()
     */
    class _IH_PurchaseNotification_QB extends _BaseBuilder {}
    
    /**
     * @method Purchase|null getOrPut($key, $value)
     * @method Purchase|$this shift(int $count = 1)
     * @method Purchase|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Purchase|$this pop(int $count = 1)
     * @method Purchase|null pull($key, \Closure $default = null)
     * @method Purchase|null last(callable $callback = null, \Closure $default = null)
     * @method Purchase|$this random(callable|int|null $number = null)
     * @method Purchase|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Purchase|null get($key, \Closure $default = null)
     * @method Purchase|null first(callable $callback = null, \Closure $default = null)
     * @method Purchase|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Purchase|null find($key, $default = null)
     * @method Purchase[] all()
     */
    class _IH_Purchase_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Purchase[][]|Collection<_IH_Purchase_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Purchase_QB whereId($value)
     * @method _IH_Purchase_QB whereWebinarId($value)
     * @method _IH_Purchase_QB whereUserId($value)
     * @method _IH_Purchase_QB whereCreatedAt($value)
     * @method Purchase baseSole(array|string $columns = ['*'])
     * @method Purchase create(array $attributes = [])
     * @method _IH_Purchase_C|Purchase[] cursor()
     * @method Purchase|null|_IH_Purchase_C|Purchase[] find($id, array|string $columns = ['*'])
     * @method _IH_Purchase_C|Purchase[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Purchase|_IH_Purchase_C|Purchase[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Purchase|_IH_Purchase_C|Purchase[] findOrFail($id, array|string $columns = ['*'])
     * @method Purchase|_IH_Purchase_C|Purchase[] findOrNew($id, array|string $columns = ['*'])
     * @method Purchase first(array|string $columns = ['*'])
     * @method Purchase firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Purchase firstOrCreate(array $attributes = [], array $values = [])
     * @method Purchase firstOrFail(array|string $columns = ['*'])
     * @method Purchase firstOrNew(array $attributes = [], array $values = [])
     * @method Purchase firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Purchase forceCreate(array $attributes)
     * @method _IH_Purchase_C|Purchase[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Purchase_C|Purchase[] get(array|string $columns = ['*'])
     * @method Purchase getModel()
     * @method Purchase[] getModels(array|string $columns = ['*'])
     * @method _IH_Purchase_C|Purchase[] hydrate(array $items)
     * @method _IH_Purchase_C|Purchase[] lazy(int $chunkSize = 1000)
     * @method _IH_Purchase_C|Purchase[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Purchase_C|Purchase[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Purchase make(array $attributes = [])
     * @method Purchase newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Purchase[]|_IH_Purchase_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Purchase restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Purchase[]|_IH_Purchase_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Purchase sole(array|string $columns = ['*'])
     * @method Purchase updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Purchase_QB extends _BaseBuilder {}
    
    /**
     * @method Quiz|null getOrPut($key, $value)
     * @method Quiz|$this shift(int $count = 1)
     * @method Quiz|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Quiz|$this pop(int $count = 1)
     * @method Quiz|null pull($key, \Closure $default = null)
     * @method Quiz|null last(callable $callback = null, \Closure $default = null)
     * @method Quiz|$this random(callable|int|null $number = null)
     * @method Quiz|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Quiz|null get($key, \Closure $default = null)
     * @method Quiz|null first(callable $callback = null, \Closure $default = null)
     * @method Quiz|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Quiz|null find($key, $default = null)
     * @method Quiz[] all()
     */
    class _IH_Quiz_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Quiz[][]|Collection<_IH_Quiz_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Quiz_QB whereId($value)
     * @method _IH_Quiz_QB whereCreatorUserId($value)
     * @method _IH_Quiz_QB whereAttempt($value)
     * @method _IH_Quiz_QB wherePassMark($value)
     * @method _IH_Quiz_QB whereCertificate($value)
     * @method _IH_Quiz_QB whereStatus($value)
     * @method _IH_Quiz_QB whereCreatedAt($value)
     * @method _IH_Quiz_QB whereUpdatedAt($value)
     * @method _IH_Quiz_QB whereWebinarTitle($value)
     * @method _IH_Quiz_QB whereTotalMark($value)
     * @method _IH_Quiz_QB whereWebinarId($value)
     * @method _IH_Quiz_QB whereChapterId($value)
     * @method _IH_Quiz_QB whereDisplayLimitedQuestions($value)
     * @method _IH_Quiz_QB whereDisplayNumberOfQuestions($value)
     * @method _IH_Quiz_QB whereDisplayQuestionsRandomly($value)
     * @method _IH_Quiz_QB whereExpiryDays($value)
     * @method _IH_Quiz_QB whereIcon($value)
     * @method Quiz baseSole(array|string $columns = ['*'])
     * @method Quiz create(array $attributes = [])
     * @method _IH_Quiz_C|Quiz[] cursor()
     * @method Quiz|null|_IH_Quiz_C|Quiz[] find($id, array|string $columns = ['*'])
     * @method _IH_Quiz_C|Quiz[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Quiz|_IH_Quiz_C|Quiz[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Quiz|_IH_Quiz_C|Quiz[] findOrFail($id, array|string $columns = ['*'])
     * @method Quiz|_IH_Quiz_C|Quiz[] findOrNew($id, array|string $columns = ['*'])
     * @method Quiz first(array|string $columns = ['*'])
     * @method Quiz firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Quiz firstOrCreate(array $attributes = [], array $values = [])
     * @method Quiz firstOrFail(array|string $columns = ['*'])
     * @method Quiz firstOrNew(array $attributes = [], array $values = [])
     * @method Quiz firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Quiz forceCreate(array $attributes)
     * @method _IH_Quiz_C|Quiz[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Quiz_C|Quiz[] get(array|string $columns = ['*'])
     * @method Quiz getModel()
     * @method Quiz[] getModels(array|string $columns = ['*'])
     * @method _IH_Quiz_C|Quiz[] hydrate(array $items)
     * @method _IH_Quiz_C|Quiz[] lazy(int $chunkSize = 1000)
     * @method _IH_Quiz_C|Quiz[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Quiz_C|Quiz[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Quiz make(array $attributes = [])
     * @method Quiz newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Quiz[]|_IH_Quiz_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Quiz restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Quiz[]|_IH_Quiz_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Quiz sole(array|string $columns = ['*'])
     * @method Quiz updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Quiz_QB listsTranslations(string $translationField)
     * @method _IH_Quiz_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Quiz_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Quiz_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Quiz_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Quiz_QB translated()
     * @method _IH_Quiz_QB translatedIn(null|string $locale = null)
     * @method _IH_Quiz_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Quiz_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Quiz_QB withTranslation()
     */
    class _IH_Quiz_QB extends _BaseBuilder {}
    
    /**
     * @method QuizzesQuestion|null getOrPut($key, $value)
     * @method QuizzesQuestion|$this shift(int $count = 1)
     * @method QuizzesQuestion|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestion|$this pop(int $count = 1)
     * @method QuizzesQuestion|null pull($key, \Closure $default = null)
     * @method QuizzesQuestion|null last(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestion|$this random(callable|int|null $number = null)
     * @method QuizzesQuestion|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestion|null get($key, \Closure $default = null)
     * @method QuizzesQuestion|null first(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestion|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizzesQuestion|null find($key, $default = null)
     * @method QuizzesQuestion[] all()
     */
    class _IH_QuizzesQuestion_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizzesQuestion[][]|Collection<_IH_QuizzesQuestion_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizzesQuestion_QB whereId($value)
     * @method _IH_QuizzesQuestion_QB whereQuizId($value)
     * @method _IH_QuizzesQuestion_QB whereCreatorUserId($value)
     * @method _IH_QuizzesQuestion_QB whereGrade($value)
     * @method _IH_QuizzesQuestion_QB whereType($value)
     * @method _IH_QuizzesQuestion_QB whereCreatedAt($value)
     * @method _IH_QuizzesQuestion_QB whereUpdatedAt($value)
     * @method _IH_QuizzesQuestion_QB whereImage($value)
     * @method _IH_QuizzesQuestion_QB whereVideo($value)
     * @method _IH_QuizzesQuestion_QB whereOrder($value)
     * @method QuizzesQuestion baseSole(array|string $columns = ['*'])
     * @method QuizzesQuestion create(array $attributes = [])
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] cursor()
     * @method QuizzesQuestion|null|_IH_QuizzesQuestion_C|QuizzesQuestion[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizzesQuestion|_IH_QuizzesQuestion_C|QuizzesQuestion[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestion|_IH_QuizzesQuestion_C|QuizzesQuestion[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizzesQuestion|_IH_QuizzesQuestion_C|QuizzesQuestion[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizzesQuestion first(array|string $columns = ['*'])
     * @method QuizzesQuestion firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestion firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizzesQuestion firstOrFail(array|string $columns = ['*'])
     * @method QuizzesQuestion firstOrNew(array $attributes = [], array $values = [])
     * @method QuizzesQuestion firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizzesQuestion forceCreate(array $attributes)
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] get(array|string $columns = ['*'])
     * @method QuizzesQuestion getModel()
     * @method QuizzesQuestion[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] hydrate(array $items)
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizzesQuestion_C|QuizzesQuestion[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizzesQuestion make(array $attributes = [])
     * @method QuizzesQuestion newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizzesQuestion[]|_IH_QuizzesQuestion_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestion restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizzesQuestion[]|_IH_QuizzesQuestion_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestion sole(array|string $columns = ['*'])
     * @method QuizzesQuestion updateOrCreate(array $attributes, array $values = [])
     * @method _IH_QuizzesQuestion_QB listsTranslations(string $translationField)
     * @method _IH_QuizzesQuestion_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_QuizzesQuestion_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestion_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestion_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_QuizzesQuestion_QB translated()
     * @method _IH_QuizzesQuestion_QB translatedIn(null|string $locale = null)
     * @method _IH_QuizzesQuestion_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_QuizzesQuestion_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestion_QB withTranslation()
     */
    class _IH_QuizzesQuestion_QB extends _BaseBuilder {}
    
    /**
     * @method QuizzesQuestionsAnswer|null getOrPut($key, $value)
     * @method QuizzesQuestionsAnswer|$this shift(int $count = 1)
     * @method QuizzesQuestionsAnswer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswer|$this pop(int $count = 1)
     * @method QuizzesQuestionsAnswer|null pull($key, \Closure $default = null)
     * @method QuizzesQuestionsAnswer|null last(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionsAnswer|$this random(callable|int|null $number = null)
     * @method QuizzesQuestionsAnswer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswer|null get($key, \Closure $default = null)
     * @method QuizzesQuestionsAnswer|null first(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionsAnswer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswer|null find($key, $default = null)
     * @method QuizzesQuestionsAnswer[] all()
     */
    class _IH_QuizzesQuestionsAnswer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizzesQuestionsAnswer[][]|Collection<_IH_QuizzesQuestionsAnswer_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizzesQuestionsAnswer_QB whereId($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereCreatorUserId($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereQuestionId($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereImage($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereCorrect($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereCreatedAt($value)
     * @method _IH_QuizzesQuestionsAnswer_QB whereUpdatedAt($value)
     * @method QuizzesQuestionsAnswer baseSole(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer create(array $attributes = [])
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] cursor()
     * @method QuizzesQuestionsAnswer|null|_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer|_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionsAnswer|_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer|_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer first(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionsAnswer firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizzesQuestionsAnswer firstOrFail(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer firstOrNew(array $attributes = [], array $values = [])
     * @method QuizzesQuestionsAnswer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizzesQuestionsAnswer forceCreate(array $attributes)
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] get(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer getModel()
     * @method QuizzesQuestionsAnswer[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] hydrate(array $items)
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizzesQuestionsAnswer make(array $attributes = [])
     * @method QuizzesQuestionsAnswer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizzesQuestionsAnswer[]|_IH_QuizzesQuestionsAnswer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionsAnswer restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizzesQuestionsAnswer[]|_IH_QuizzesQuestionsAnswer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionsAnswer sole(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswer updateOrCreate(array $attributes, array $values = [])
     * @method _IH_QuizzesQuestionsAnswer_QB listsTranslations(string $translationField)
     * @method _IH_QuizzesQuestionsAnswer_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_QuizzesQuestionsAnswer_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestionsAnswer_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestionsAnswer_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_QuizzesQuestionsAnswer_QB translated()
     * @method _IH_QuizzesQuestionsAnswer_QB translatedIn(null|string $locale = null)
     * @method _IH_QuizzesQuestionsAnswer_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_QuizzesQuestionsAnswer_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_QuizzesQuestionsAnswer_QB withTranslation()
     */
    class _IH_QuizzesQuestionsAnswer_QB extends _BaseBuilder {}
    
    /**
     * @method QuizzesResult|null getOrPut($key, $value)
     * @method QuizzesResult|$this shift(int $count = 1)
     * @method QuizzesResult|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesResult|$this pop(int $count = 1)
     * @method QuizzesResult|null pull($key, \Closure $default = null)
     * @method QuizzesResult|null last(callable $callback = null, \Closure $default = null)
     * @method QuizzesResult|$this random(callable|int|null $number = null)
     * @method QuizzesResult|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesResult|null get($key, \Closure $default = null)
     * @method QuizzesResult|null first(callable $callback = null, \Closure $default = null)
     * @method QuizzesResult|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizzesResult|null find($key, $default = null)
     * @method QuizzesResult[] all()
     */
    class _IH_QuizzesResult_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizzesResult[][]|Collection<_IH_QuizzesResult_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizzesResult_QB whereId($value)
     * @method _IH_QuizzesResult_QB whereQuizId($value)
     * @method _IH_QuizzesResult_QB whereUserId($value)
     * @method _IH_QuizzesResult_QB whereResults($value)
     * @method _IH_QuizzesResult_QB whereUserGrade($value)
     * @method _IH_QuizzesResult_QB whereStatus($value)
     * @method _IH_QuizzesResult_QB whereCreatedAt($value)
     * @method QuizzesResult baseSole(array|string $columns = ['*'])
     * @method QuizzesResult create(array $attributes = [])
     * @method _IH_QuizzesResult_C|QuizzesResult[] cursor()
     * @method QuizzesResult|null|_IH_QuizzesResult_C|QuizzesResult[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizzesResult_C|QuizzesResult[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizzesResult|_IH_QuizzesResult_C|QuizzesResult[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesResult|_IH_QuizzesResult_C|QuizzesResult[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizzesResult|_IH_QuizzesResult_C|QuizzesResult[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizzesResult first(array|string $columns = ['*'])
     * @method QuizzesResult firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesResult firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizzesResult firstOrFail(array|string $columns = ['*'])
     * @method QuizzesResult firstOrNew(array $attributes = [], array $values = [])
     * @method QuizzesResult firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizzesResult forceCreate(array $attributes)
     * @method _IH_QuizzesResult_C|QuizzesResult[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizzesResult_C|QuizzesResult[] get(array|string $columns = ['*'])
     * @method QuizzesResult getModel()
     * @method QuizzesResult[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizzesResult_C|QuizzesResult[] hydrate(array $items)
     * @method _IH_QuizzesResult_C|QuizzesResult[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizzesResult_C|QuizzesResult[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizzesResult_C|QuizzesResult[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizzesResult make(array $attributes = [])
     * @method QuizzesResult newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizzesResult[]|_IH_QuizzesResult_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesResult restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizzesResult[]|_IH_QuizzesResult_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesResult sole(array|string $columns = ['*'])
     * @method QuizzesResult updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_QuizzesResult_QB extends _BaseBuilder {}
    
    /**
     * @method Region|null getOrPut($key, $value)
     * @method Region|$this shift(int $count = 1)
     * @method Region|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Region|$this pop(int $count = 1)
     * @method Region|null pull($key, \Closure $default = null)
     * @method Region|null last(callable $callback = null, \Closure $default = null)
     * @method Region|$this random(callable|int|null $number = null)
     * @method Region|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Region|null get($key, \Closure $default = null)
     * @method Region|null first(callable $callback = null, \Closure $default = null)
     * @method Region|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Region|null find($key, $default = null)
     * @method Region[] all()
     */
    class _IH_Region_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Region[][]|Collection<_IH_Region_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Region_QB whereId($value)
     * @method _IH_Region_QB whereCountryId($value)
     * @method _IH_Region_QB whereProvinceId($value)
     * @method _IH_Region_QB whereCityId($value)
     * @method _IH_Region_QB whereGeoCenter($value)
     * @method _IH_Region_QB whereType($value)
     * @method _IH_Region_QB whereTitle($value)
     * @method _IH_Region_QB whereCreatedAt($value)
     * @method Region baseSole(array|string $columns = ['*'])
     * @method Region create(array $attributes = [])
     * @method _IH_Region_C|Region[] cursor()
     * @method Region|null|_IH_Region_C|Region[] find($id, array|string $columns = ['*'])
     * @method _IH_Region_C|Region[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Region|_IH_Region_C|Region[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Region|_IH_Region_C|Region[] findOrFail($id, array|string $columns = ['*'])
     * @method Region|_IH_Region_C|Region[] findOrNew($id, array|string $columns = ['*'])
     * @method Region first(array|string $columns = ['*'])
     * @method Region firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Region firstOrCreate(array $attributes = [], array $values = [])
     * @method Region firstOrFail(array|string $columns = ['*'])
     * @method Region firstOrNew(array $attributes = [], array $values = [])
     * @method Region firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Region forceCreate(array $attributes)
     * @method _IH_Region_C|Region[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Region_C|Region[] get(array|string $columns = ['*'])
     * @method Region getModel()
     * @method Region[] getModels(array|string $columns = ['*'])
     * @method _IH_Region_C|Region[] hydrate(array $items)
     * @method _IH_Region_C|Region[] lazy(int $chunkSize = 1000)
     * @method _IH_Region_C|Region[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Region_C|Region[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Region make(array $attributes = [])
     * @method Region newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Region[]|_IH_Region_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Region restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Region[]|_IH_Region_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Region sole(array|string $columns = ['*'])
     * @method Region updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Region_QB extends _BaseBuilder {}
    
    /**
     * @method RegistrationPackage|null getOrPut($key, $value)
     * @method RegistrationPackage|$this shift(int $count = 1)
     * @method RegistrationPackage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method RegistrationPackage|$this pop(int $count = 1)
     * @method RegistrationPackage|null pull($key, \Closure $default = null)
     * @method RegistrationPackage|null last(callable $callback = null, \Closure $default = null)
     * @method RegistrationPackage|$this random(callable|int|null $number = null)
     * @method RegistrationPackage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method RegistrationPackage|null get($key, \Closure $default = null)
     * @method RegistrationPackage|null first(callable $callback = null, \Closure $default = null)
     * @method RegistrationPackage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method RegistrationPackage|null find($key, $default = null)
     * @method RegistrationPackage[] all()
     */
    class _IH_RegistrationPackage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RegistrationPackage[][]|Collection<_IH_RegistrationPackage_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RegistrationPackage_QB whereId($value)
     * @method _IH_RegistrationPackage_QB whereDays($value)
     * @method _IH_RegistrationPackage_QB wherePrice($value)
     * @method _IH_RegistrationPackage_QB whereIcon($value)
     * @method _IH_RegistrationPackage_QB whereRole($value)
     * @method _IH_RegistrationPackage_QB whereInstructorsCount($value)
     * @method _IH_RegistrationPackage_QB whereStudentsCount($value)
     * @method _IH_RegistrationPackage_QB whereCoursesCapacity($value)
     * @method _IH_RegistrationPackage_QB whereCoursesCount($value)
     * @method _IH_RegistrationPackage_QB whereMeetingCount($value)
     * @method _IH_RegistrationPackage_QB whereStatus($value)
     * @method _IH_RegistrationPackage_QB whereCreatedAt($value)
     * @method _IH_RegistrationPackage_QB whereProductCount($value)
     * @method _IH_RegistrationPackage_QB whereAiContentAccess($value)
     * @method RegistrationPackage baseSole(array|string $columns = ['*'])
     * @method RegistrationPackage create(array $attributes = [])
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] cursor()
     * @method RegistrationPackage|null|_IH_RegistrationPackage_C|RegistrationPackage[] find($id, array|string $columns = ['*'])
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method RegistrationPackage|_IH_RegistrationPackage_C|RegistrationPackage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RegistrationPackage|_IH_RegistrationPackage_C|RegistrationPackage[] findOrFail($id, array|string $columns = ['*'])
     * @method RegistrationPackage|_IH_RegistrationPackage_C|RegistrationPackage[] findOrNew($id, array|string $columns = ['*'])
     * @method RegistrationPackage first(array|string $columns = ['*'])
     * @method RegistrationPackage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RegistrationPackage firstOrCreate(array $attributes = [], array $values = [])
     * @method RegistrationPackage firstOrFail(array|string $columns = ['*'])
     * @method RegistrationPackage firstOrNew(array $attributes = [], array $values = [])
     * @method RegistrationPackage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RegistrationPackage forceCreate(array $attributes)
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] get(array|string $columns = ['*'])
     * @method RegistrationPackage getModel()
     * @method RegistrationPackage[] getModels(array|string $columns = ['*'])
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] hydrate(array $items)
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] lazy(int $chunkSize = 1000)
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_RegistrationPackage_C|RegistrationPackage[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method RegistrationPackage make(array $attributes = [])
     * @method RegistrationPackage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RegistrationPackage[]|_IH_RegistrationPackage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RegistrationPackage restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|RegistrationPackage[]|_IH_RegistrationPackage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RegistrationPackage sole(array|string $columns = ['*'])
     * @method RegistrationPackage updateOrCreate(array $attributes, array $values = [])
     * @method _IH_RegistrationPackage_QB listsTranslations(string $translationField)
     * @method _IH_RegistrationPackage_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_RegistrationPackage_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_RegistrationPackage_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_RegistrationPackage_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_RegistrationPackage_QB translated()
     * @method _IH_RegistrationPackage_QB translatedIn(null|string $locale = null)
     * @method _IH_RegistrationPackage_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_RegistrationPackage_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_RegistrationPackage_QB withTranslation()
     */
    class _IH_RegistrationPackage_QB extends _BaseBuilder {}
    
    /**
     * @method RelatedCourse|null getOrPut($key, $value)
     * @method RelatedCourse|$this shift(int $count = 1)
     * @method RelatedCourse|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method RelatedCourse|$this pop(int $count = 1)
     * @method RelatedCourse|null pull($key, \Closure $default = null)
     * @method RelatedCourse|null last(callable $callback = null, \Closure $default = null)
     * @method RelatedCourse|$this random(callable|int|null $number = null)
     * @method RelatedCourse|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method RelatedCourse|null get($key, \Closure $default = null)
     * @method RelatedCourse|null first(callable $callback = null, \Closure $default = null)
     * @method RelatedCourse|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method RelatedCourse|null find($key, $default = null)
     * @method RelatedCourse[] all()
     */
    class _IH_RelatedCourse_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RelatedCourse[][]|Collection<_IH_RelatedCourse_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RelatedCourse_QB whereId($value)
     * @method _IH_RelatedCourse_QB whereCreatorId($value)
     * @method _IH_RelatedCourse_QB whereTargetableId($value)
     * @method _IH_RelatedCourse_QB whereTargetableType($value)
     * @method _IH_RelatedCourse_QB whereCourseId($value)
     * @method _IH_RelatedCourse_QB whereOrder($value)
     * @method RelatedCourse baseSole(array|string $columns = ['*'])
     * @method RelatedCourse create(array $attributes = [])
     * @method _IH_RelatedCourse_C|RelatedCourse[] cursor()
     * @method RelatedCourse|null|_IH_RelatedCourse_C|RelatedCourse[] find($id, array|string $columns = ['*'])
     * @method _IH_RelatedCourse_C|RelatedCourse[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method RelatedCourse|_IH_RelatedCourse_C|RelatedCourse[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RelatedCourse|_IH_RelatedCourse_C|RelatedCourse[] findOrFail($id, array|string $columns = ['*'])
     * @method RelatedCourse|_IH_RelatedCourse_C|RelatedCourse[] findOrNew($id, array|string $columns = ['*'])
     * @method RelatedCourse first(array|string $columns = ['*'])
     * @method RelatedCourse firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RelatedCourse firstOrCreate(array $attributes = [], array $values = [])
     * @method RelatedCourse firstOrFail(array|string $columns = ['*'])
     * @method RelatedCourse firstOrNew(array $attributes = [], array $values = [])
     * @method RelatedCourse firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RelatedCourse forceCreate(array $attributes)
     * @method _IH_RelatedCourse_C|RelatedCourse[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RelatedCourse_C|RelatedCourse[] get(array|string $columns = ['*'])
     * @method RelatedCourse getModel()
     * @method RelatedCourse[] getModels(array|string $columns = ['*'])
     * @method _IH_RelatedCourse_C|RelatedCourse[] hydrate(array $items)
     * @method _IH_RelatedCourse_C|RelatedCourse[] lazy(int $chunkSize = 1000)
     * @method _IH_RelatedCourse_C|RelatedCourse[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_RelatedCourse_C|RelatedCourse[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method RelatedCourse make(array $attributes = [])
     * @method RelatedCourse newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RelatedCourse[]|_IH_RelatedCourse_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RelatedCourse restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|RelatedCourse[]|_IH_RelatedCourse_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RelatedCourse sole(array|string $columns = ['*'])
     * @method RelatedCourse updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RelatedCourse_QB extends _BaseBuilder {}
    
    /**
     * @method ReserveMeeting|null getOrPut($key, $value)
     * @method ReserveMeeting|$this shift(int $count = 1)
     * @method ReserveMeeting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ReserveMeeting|$this pop(int $count = 1)
     * @method ReserveMeeting|null pull($key, \Closure $default = null)
     * @method ReserveMeeting|null last(callable $callback = null, \Closure $default = null)
     * @method ReserveMeeting|$this random(callable|int|null $number = null)
     * @method ReserveMeeting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ReserveMeeting|null get($key, \Closure $default = null)
     * @method ReserveMeeting|null first(callable $callback = null, \Closure $default = null)
     * @method ReserveMeeting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ReserveMeeting|null find($key, $default = null)
     * @method ReserveMeeting[] all()
     */
    class _IH_ReserveMeeting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ReserveMeeting[][]|Collection<_IH_ReserveMeeting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ReserveMeeting_QB whereId($value)
     * @method _IH_ReserveMeeting_QB whereMeetingTimeId($value)
     * @method _IH_ReserveMeeting_QB whereUserId($value)
     * @method _IH_ReserveMeeting_QB wherePaidAmount($value)
     * @method _IH_ReserveMeeting_QB whereLink($value)
     * @method _IH_ReserveMeeting_QB wherePassword($value)
     * @method _IH_ReserveMeeting_QB whereStatus($value)
     * @method _IH_ReserveMeeting_QB whereCreatedAt($value)
     * @method _IH_ReserveMeeting_QB whereLockedAt($value)
     * @method _IH_ReserveMeeting_QB whereReservedAt($value)
     * @method _IH_ReserveMeeting_QB whereDiscount($value)
     * @method _IH_ReserveMeeting_QB whereSaleId($value)
     * @method _IH_ReserveMeeting_QB whereMeetingType($value)
     * @method _IH_ReserveMeeting_QB whereStudentCount($value)
     * @method _IH_ReserveMeeting_QB whereStartAt($value)
     * @method _IH_ReserveMeeting_QB whereEndAt($value)
     * @method _IH_ReserveMeeting_QB whereDescription($value)
     * @method ReserveMeeting baseSole(array|string $columns = ['*'])
     * @method ReserveMeeting create(array $attributes = [])
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] cursor()
     * @method ReserveMeeting|null|_IH_ReserveMeeting_C|ReserveMeeting[] find($id, array|string $columns = ['*'])
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ReserveMeeting|_IH_ReserveMeeting_C|ReserveMeeting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReserveMeeting|_IH_ReserveMeeting_C|ReserveMeeting[] findOrFail($id, array|string $columns = ['*'])
     * @method ReserveMeeting|_IH_ReserveMeeting_C|ReserveMeeting[] findOrNew($id, array|string $columns = ['*'])
     * @method ReserveMeeting first(array|string $columns = ['*'])
     * @method ReserveMeeting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ReserveMeeting firstOrCreate(array $attributes = [], array $values = [])
     * @method ReserveMeeting firstOrFail(array|string $columns = ['*'])
     * @method ReserveMeeting firstOrNew(array $attributes = [], array $values = [])
     * @method ReserveMeeting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ReserveMeeting forceCreate(array $attributes)
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] get(array|string $columns = ['*'])
     * @method ReserveMeeting getModel()
     * @method ReserveMeeting[] getModels(array|string $columns = ['*'])
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] hydrate(array $items)
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] lazy(int $chunkSize = 1000)
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ReserveMeeting_C|ReserveMeeting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ReserveMeeting make(array $attributes = [])
     * @method ReserveMeeting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ReserveMeeting[]|_IH_ReserveMeeting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReserveMeeting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ReserveMeeting[]|_IH_ReserveMeeting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ReserveMeeting sole(array|string $columns = ['*'])
     * @method ReserveMeeting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ReserveMeeting_QB extends _BaseBuilder {}
    
    /**
     * @method RewardAccounting|null getOrPut($key, $value)
     * @method RewardAccounting|$this shift(int $count = 1)
     * @method RewardAccounting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method RewardAccounting|$this pop(int $count = 1)
     * @method RewardAccounting|null pull($key, \Closure $default = null)
     * @method RewardAccounting|null last(callable $callback = null, \Closure $default = null)
     * @method RewardAccounting|$this random(callable|int|null $number = null)
     * @method RewardAccounting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method RewardAccounting|null get($key, \Closure $default = null)
     * @method RewardAccounting|null first(callable $callback = null, \Closure $default = null)
     * @method RewardAccounting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method RewardAccounting|null find($key, $default = null)
     * @method RewardAccounting[] all()
     */
    class _IH_RewardAccounting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RewardAccounting[][]|Collection<_IH_RewardAccounting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RewardAccounting_QB whereId($value)
     * @method _IH_RewardAccounting_QB whereUserId($value)
     * @method _IH_RewardAccounting_QB whereItemId($value)
     * @method _IH_RewardAccounting_QB whereType($value)
     * @method _IH_RewardAccounting_QB whereScore($value)
     * @method _IH_RewardAccounting_QB whereStatus($value)
     * @method _IH_RewardAccounting_QB whereCreatedAt($value)
     * @method RewardAccounting baseSole(array|string $columns = ['*'])
     * @method RewardAccounting create(array $attributes = [])
     * @method _IH_RewardAccounting_C|RewardAccounting[] cursor()
     * @method RewardAccounting|null|_IH_RewardAccounting_C|RewardAccounting[] find($id, array|string $columns = ['*'])
     * @method _IH_RewardAccounting_C|RewardAccounting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method RewardAccounting|_IH_RewardAccounting_C|RewardAccounting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RewardAccounting|_IH_RewardAccounting_C|RewardAccounting[] findOrFail($id, array|string $columns = ['*'])
     * @method RewardAccounting|_IH_RewardAccounting_C|RewardAccounting[] findOrNew($id, array|string $columns = ['*'])
     * @method RewardAccounting first(array|string $columns = ['*'])
     * @method RewardAccounting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RewardAccounting firstOrCreate(array $attributes = [], array $values = [])
     * @method RewardAccounting firstOrFail(array|string $columns = ['*'])
     * @method RewardAccounting firstOrNew(array $attributes = [], array $values = [])
     * @method RewardAccounting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RewardAccounting forceCreate(array $attributes)
     * @method _IH_RewardAccounting_C|RewardAccounting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RewardAccounting_C|RewardAccounting[] get(array|string $columns = ['*'])
     * @method RewardAccounting getModel()
     * @method RewardAccounting[] getModels(array|string $columns = ['*'])
     * @method _IH_RewardAccounting_C|RewardAccounting[] hydrate(array $items)
     * @method _IH_RewardAccounting_C|RewardAccounting[] lazy(int $chunkSize = 1000)
     * @method _IH_RewardAccounting_C|RewardAccounting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_RewardAccounting_C|RewardAccounting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method RewardAccounting make(array $attributes = [])
     * @method RewardAccounting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RewardAccounting[]|_IH_RewardAccounting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RewardAccounting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|RewardAccounting[]|_IH_RewardAccounting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RewardAccounting sole(array|string $columns = ['*'])
     * @method RewardAccounting updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RewardAccounting_QB extends _BaseBuilder {}
    
    /**
     * @method Reward|null getOrPut($key, $value)
     * @method Reward|$this shift(int $count = 1)
     * @method Reward|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Reward|$this pop(int $count = 1)
     * @method Reward|null pull($key, \Closure $default = null)
     * @method Reward|null last(callable $callback = null, \Closure $default = null)
     * @method Reward|$this random(callable|int|null $number = null)
     * @method Reward|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Reward|null get($key, \Closure $default = null)
     * @method Reward|null first(callable $callback = null, \Closure $default = null)
     * @method Reward|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Reward|null find($key, $default = null)
     * @method Reward[] all()
     */
    class _IH_Reward_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Reward[][]|Collection<_IH_Reward_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Reward_QB whereId($value)
     * @method _IH_Reward_QB whereType($value)
     * @method _IH_Reward_QB whereScore($value)
     * @method _IH_Reward_QB whereCondition($value)
     * @method _IH_Reward_QB whereStatus($value)
     * @method _IH_Reward_QB whereCreatedAt($value)
     * @method Reward baseSole(array|string $columns = ['*'])
     * @method Reward create(array $attributes = [])
     * @method _IH_Reward_C|Reward[] cursor()
     * @method Reward|null|_IH_Reward_C|Reward[] find($id, array|string $columns = ['*'])
     * @method _IH_Reward_C|Reward[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Reward|_IH_Reward_C|Reward[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Reward|_IH_Reward_C|Reward[] findOrFail($id, array|string $columns = ['*'])
     * @method Reward|_IH_Reward_C|Reward[] findOrNew($id, array|string $columns = ['*'])
     * @method Reward first(array|string $columns = ['*'])
     * @method Reward firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Reward firstOrCreate(array $attributes = [], array $values = [])
     * @method Reward firstOrFail(array|string $columns = ['*'])
     * @method Reward firstOrNew(array $attributes = [], array $values = [])
     * @method Reward firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Reward forceCreate(array $attributes)
     * @method _IH_Reward_C|Reward[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Reward_C|Reward[] get(array|string $columns = ['*'])
     * @method Reward getModel()
     * @method Reward[] getModels(array|string $columns = ['*'])
     * @method _IH_Reward_C|Reward[] hydrate(array $items)
     * @method _IH_Reward_C|Reward[] lazy(int $chunkSize = 1000)
     * @method _IH_Reward_C|Reward[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Reward_C|Reward[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Reward make(array $attributes = [])
     * @method Reward newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Reward[]|_IH_Reward_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Reward restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Reward[]|_IH_Reward_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Reward sole(array|string $columns = ['*'])
     * @method Reward updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Reward_QB extends _BaseBuilder {}
    
    /**
     * @method Role|null getOrPut($key, $value)
     * @method Role|$this shift(int $count = 1)
     * @method Role|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Role|$this pop(int $count = 1)
     * @method Role|null pull($key, \Closure $default = null)
     * @method Role|null last(callable $callback = null, \Closure $default = null)
     * @method Role|$this random(callable|int|null $number = null)
     * @method Role|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Role|null get($key, \Closure $default = null)
     * @method Role|null first(callable $callback = null, \Closure $default = null)
     * @method Role|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Role|null find($key, $default = null)
     * @method Role[] all()
     */
    class _IH_Role_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Role[][]|Collection<_IH_Role_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Role_QB whereId($value)
     * @method _IH_Role_QB whereName($value)
     * @method _IH_Role_QB whereCaption($value)
     * @method _IH_Role_QB whereUsersCount($value)
     * @method _IH_Role_QB whereIsAdmin($value)
     * @method _IH_Role_QB whereCreatedAt($value)
     * @method Role baseSole(array|string $columns = ['*'])
     * @method Role create(array $attributes = [])
     * @method _IH_Role_C|Role[] cursor()
     * @method Role|null|_IH_Role_C|Role[] find($id, array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role|_IH_Role_C|Role[] findOrFail($id, array|string $columns = ['*'])
     * @method Role|_IH_Role_C|Role[] findOrNew($id, array|string $columns = ['*'])
     * @method Role first(array|string $columns = ['*'])
     * @method Role firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Role firstOrCreate(array $attributes = [], array $values = [])
     * @method Role firstOrFail(array|string $columns = ['*'])
     * @method Role firstOrNew(array $attributes = [], array $values = [])
     * @method Role firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Role forceCreate(array $attributes)
     * @method _IH_Role_C|Role[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Role_C|Role[] get(array|string $columns = ['*'])
     * @method Role getModel()
     * @method Role[] getModels(array|string $columns = ['*'])
     * @method _IH_Role_C|Role[] hydrate(array $items)
     * @method _IH_Role_C|Role[] lazy(int $chunkSize = 1000)
     * @method _IH_Role_C|Role[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Role_C|Role[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Role make(array $attributes = [])
     * @method Role newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Role[]|_IH_Role_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Role[]|_IH_Role_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Role sole(array|string $columns = ['*'])
     * @method Role updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Role_QB extends _BaseBuilder {}
    
    /**
     * @method SaleLog|null getOrPut($key, $value)
     * @method SaleLog|$this shift(int $count = 1)
     * @method SaleLog|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SaleLog|$this pop(int $count = 1)
     * @method SaleLog|null pull($key, \Closure $default = null)
     * @method SaleLog|null last(callable $callback = null, \Closure $default = null)
     * @method SaleLog|$this random(callable|int|null $number = null)
     * @method SaleLog|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SaleLog|null get($key, \Closure $default = null)
     * @method SaleLog|null first(callable $callback = null, \Closure $default = null)
     * @method SaleLog|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SaleLog|null find($key, $default = null)
     * @method SaleLog[] all()
     */
    class _IH_SaleLog_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SaleLog[][]|Collection<_IH_SaleLog_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SaleLog_QB whereId($value)
     * @method _IH_SaleLog_QB whereSaleId($value)
     * @method _IH_SaleLog_QB whereViewedAt($value)
     * @method SaleLog baseSole(array|string $columns = ['*'])
     * @method SaleLog create(array $attributes = [])
     * @method _IH_SaleLog_C|SaleLog[] cursor()
     * @method SaleLog|null|_IH_SaleLog_C|SaleLog[] find($id, array|string $columns = ['*'])
     * @method _IH_SaleLog_C|SaleLog[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SaleLog|_IH_SaleLog_C|SaleLog[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SaleLog|_IH_SaleLog_C|SaleLog[] findOrFail($id, array|string $columns = ['*'])
     * @method SaleLog|_IH_SaleLog_C|SaleLog[] findOrNew($id, array|string $columns = ['*'])
     * @method SaleLog first(array|string $columns = ['*'])
     * @method SaleLog firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SaleLog firstOrCreate(array $attributes = [], array $values = [])
     * @method SaleLog firstOrFail(array|string $columns = ['*'])
     * @method SaleLog firstOrNew(array $attributes = [], array $values = [])
     * @method SaleLog firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SaleLog forceCreate(array $attributes)
     * @method _IH_SaleLog_C|SaleLog[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SaleLog_C|SaleLog[] get(array|string $columns = ['*'])
     * @method SaleLog getModel()
     * @method SaleLog[] getModels(array|string $columns = ['*'])
     * @method _IH_SaleLog_C|SaleLog[] hydrate(array $items)
     * @method _IH_SaleLog_C|SaleLog[] lazy(int $chunkSize = 1000)
     * @method _IH_SaleLog_C|SaleLog[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SaleLog_C|SaleLog[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SaleLog make(array $attributes = [])
     * @method SaleLog newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SaleLog[]|_IH_SaleLog_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SaleLog restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SaleLog[]|_IH_SaleLog_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SaleLog sole(array|string $columns = ['*'])
     * @method SaleLog updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SaleLog_QB extends _BaseBuilder {}
    
    /**
     * @method Sale|null getOrPut($key, $value)
     * @method Sale|$this shift(int $count = 1)
     * @method Sale|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Sale|$this pop(int $count = 1)
     * @method Sale|null pull($key, \Closure $default = null)
     * @method Sale|null last(callable $callback = null, \Closure $default = null)
     * @method Sale|$this random(callable|int|null $number = null)
     * @method Sale|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Sale|null get($key, \Closure $default = null)
     * @method Sale|null first(callable $callback = null, \Closure $default = null)
     * @method Sale|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Sale|null find($key, $default = null)
     * @method Sale[] all()
     */
    class _IH_Sale_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Sale[][]|Collection<_IH_Sale_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Sale_QB whereId($value)
     * @method _IH_Sale_QB whereUserId($value)
     * @method _IH_Sale_QB whereOrderId($value)
     * @method _IH_Sale_QB whereWebinarId($value)
     * @method _IH_Sale_QB whereMeetingId($value)
     * @method _IH_Sale_QB whereMeetingTimeId($value)
     * @method _IH_Sale_QB whereTicketId($value)
     * @method _IH_Sale_QB whereType($value)
     * @method _IH_Sale_QB wherePaymentMethod($value)
     * @method _IH_Sale_QB whereAmount($value)
     * @method _IH_Sale_QB whereTax($value)
     * @method _IH_Sale_QB whereCommission($value)
     * @method _IH_Sale_QB whereDiscount($value)
     * @method _IH_Sale_QB whereTotalAmount($value)
     * @method _IH_Sale_QB whereCreatedAt($value)
     * @method _IH_Sale_QB whereRefundAt($value)
     * @method _IH_Sale_QB whereSellerId($value)
     * @method _IH_Sale_QB whereSubscribeId($value)
     * @method _IH_Sale_QB wherePromotionId($value)
     * @method _IH_Sale_QB whereRegistrationPackageId($value)
     * @method _IH_Sale_QB whereProductOrderId($value)
     * @method _IH_Sale_QB whereBundleId($value)
     * @method _IH_Sale_QB whereManualAdded($value)
     * @method _IH_Sale_QB whereAccessToPurchasedItem($value)
     * @method _IH_Sale_QB whereProductDeliveryFee($value)
     * @method _IH_Sale_QB whereInstallmentPaymentId($value)
     * @method _IH_Sale_QB whereGiftId($value)
     * @method Sale baseSole(array|string $columns = ['*'])
     * @method Sale create(array $attributes = [])
     * @method _IH_Sale_C|Sale[] cursor()
     * @method Sale|null|_IH_Sale_C|Sale[] find($id, array|string $columns = ['*'])
     * @method _IH_Sale_C|Sale[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Sale|_IH_Sale_C|Sale[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Sale|_IH_Sale_C|Sale[] findOrFail($id, array|string $columns = ['*'])
     * @method Sale|_IH_Sale_C|Sale[] findOrNew($id, array|string $columns = ['*'])
     * @method Sale first(array|string $columns = ['*'])
     * @method Sale firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Sale firstOrCreate(array $attributes = [], array $values = [])
     * @method Sale firstOrFail(array|string $columns = ['*'])
     * @method Sale firstOrNew(array $attributes = [], array $values = [])
     * @method Sale firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Sale forceCreate(array $attributes)
     * @method _IH_Sale_C|Sale[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Sale_C|Sale[] get(array|string $columns = ['*'])
     * @method Sale getModel()
     * @method Sale[] getModels(array|string $columns = ['*'])
     * @method _IH_Sale_C|Sale[] hydrate(array $items)
     * @method _IH_Sale_C|Sale[] lazy(int $chunkSize = 1000)
     * @method _IH_Sale_C|Sale[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Sale_C|Sale[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Sale make(array $attributes = [])
     * @method Sale newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Sale[]|_IH_Sale_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Sale restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Sale[]|_IH_Sale_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Sale sole(array|string $columns = ['*'])
     * @method Sale updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Sale_QB extends _BaseBuilder {}
    
    /**
     * @method Section|null getOrPut($key, $value)
     * @method Section|$this shift(int $count = 1)
     * @method Section|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Section|$this pop(int $count = 1)
     * @method Section|null pull($key, \Closure $default = null)
     * @method Section|null last(callable $callback = null, \Closure $default = null)
     * @method Section|$this random(callable|int|null $number = null)
     * @method Section|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Section|null get($key, \Closure $default = null)
     * @method Section|null first(callable $callback = null, \Closure $default = null)
     * @method Section|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Section|null find($key, $default = null)
     * @method Section[] all()
     */
    class _IH_Section_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Section[][]|Collection<_IH_Section_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Section_QB whereId($value)
     * @method _IH_Section_QB whereName($value)
     * @method _IH_Section_QB whereSectionGroupId($value)
     * @method _IH_Section_QB whereCaption($value)
     * @method _IH_Section_QB whereType($value)
     * @method Section baseSole(array|string $columns = ['*'])
     * @method Section create(array $attributes = [])
     * @method _IH_Section_C|Section[] cursor()
     * @method Section|null|_IH_Section_C|Section[] find($id, array|string $columns = ['*'])
     * @method _IH_Section_C|Section[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Section|_IH_Section_C|Section[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Section|_IH_Section_C|Section[] findOrFail($id, array|string $columns = ['*'])
     * @method Section|_IH_Section_C|Section[] findOrNew($id, array|string $columns = ['*'])
     * @method Section first(array|string $columns = ['*'])
     * @method Section firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Section firstOrCreate(array $attributes = [], array $values = [])
     * @method Section firstOrFail(array|string $columns = ['*'])
     * @method Section firstOrNew(array $attributes = [], array $values = [])
     * @method Section firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Section forceCreate(array $attributes)
     * @method _IH_Section_C|Section[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Section_C|Section[] get(array|string $columns = ['*'])
     * @method Section getModel()
     * @method Section[] getModels(array|string $columns = ['*'])
     * @method _IH_Section_C|Section[] hydrate(array $items)
     * @method _IH_Section_C|Section[] lazy(int $chunkSize = 1000)
     * @method _IH_Section_C|Section[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Section_C|Section[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Section make(array $attributes = [])
     * @method Section newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Section[]|_IH_Section_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Section restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Section[]|_IH_Section_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Section sole(array|string $columns = ['*'])
     * @method Section updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Section_QB extends _BaseBuilder {}
    
    /**
     * @method SelectedInstallmentStep|null getOrPut($key, $value)
     * @method SelectedInstallmentStep|$this shift(int $count = 1)
     * @method SelectedInstallmentStep|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SelectedInstallmentStep|$this pop(int $count = 1)
     * @method SelectedInstallmentStep|null pull($key, \Closure $default = null)
     * @method SelectedInstallmentStep|null last(callable $callback = null, \Closure $default = null)
     * @method SelectedInstallmentStep|$this random(callable|int|null $number = null)
     * @method SelectedInstallmentStep|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SelectedInstallmentStep|null get($key, \Closure $default = null)
     * @method SelectedInstallmentStep|null first(callable $callback = null, \Closure $default = null)
     * @method SelectedInstallmentStep|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SelectedInstallmentStep|null find($key, $default = null)
     * @method SelectedInstallmentStep[] all()
     */
    class _IH_SelectedInstallmentStep_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SelectedInstallmentStep[][]|Collection<_IH_SelectedInstallmentStep_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SelectedInstallmentStep_QB whereId($value)
     * @method _IH_SelectedInstallmentStep_QB whereSelectedInstallmentId($value)
     * @method _IH_SelectedInstallmentStep_QB whereInstallmentStepId($value)
     * @method _IH_SelectedInstallmentStep_QB whereDeadline($value)
     * @method _IH_SelectedInstallmentStep_QB whereAmount($value)
     * @method _IH_SelectedInstallmentStep_QB whereAmountType($value)
     * @method SelectedInstallmentStep baseSole(array|string $columns = ['*'])
     * @method SelectedInstallmentStep create(array $attributes = [])
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] cursor()
     * @method SelectedInstallmentStep|null|_IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] find($id, array|string $columns = ['*'])
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SelectedInstallmentStep|_IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SelectedInstallmentStep|_IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] findOrFail($id, array|string $columns = ['*'])
     * @method SelectedInstallmentStep|_IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] findOrNew($id, array|string $columns = ['*'])
     * @method SelectedInstallmentStep first(array|string $columns = ['*'])
     * @method SelectedInstallmentStep firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SelectedInstallmentStep firstOrCreate(array $attributes = [], array $values = [])
     * @method SelectedInstallmentStep firstOrFail(array|string $columns = ['*'])
     * @method SelectedInstallmentStep firstOrNew(array $attributes = [], array $values = [])
     * @method SelectedInstallmentStep firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SelectedInstallmentStep forceCreate(array $attributes)
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] get(array|string $columns = ['*'])
     * @method SelectedInstallmentStep getModel()
     * @method SelectedInstallmentStep[] getModels(array|string $columns = ['*'])
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] hydrate(array $items)
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] lazy(int $chunkSize = 1000)
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SelectedInstallmentStep make(array $attributes = [])
     * @method SelectedInstallmentStep newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SelectedInstallmentStep[]|_IH_SelectedInstallmentStep_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SelectedInstallmentStep restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SelectedInstallmentStep[]|_IH_SelectedInstallmentStep_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SelectedInstallmentStep sole(array|string $columns = ['*'])
     * @method SelectedInstallmentStep updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SelectedInstallmentStep_QB extends _BaseBuilder {}
    
    /**
     * @method SelectedInstallment|null getOrPut($key, $value)
     * @method SelectedInstallment|$this shift(int $count = 1)
     * @method SelectedInstallment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SelectedInstallment|$this pop(int $count = 1)
     * @method SelectedInstallment|null pull($key, \Closure $default = null)
     * @method SelectedInstallment|null last(callable $callback = null, \Closure $default = null)
     * @method SelectedInstallment|$this random(callable|int|null $number = null)
     * @method SelectedInstallment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SelectedInstallment|null get($key, \Closure $default = null)
     * @method SelectedInstallment|null first(callable $callback = null, \Closure $default = null)
     * @method SelectedInstallment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SelectedInstallment|null find($key, $default = null)
     * @method SelectedInstallment[] all()
     */
    class _IH_SelectedInstallment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SelectedInstallment[][]|Collection<_IH_SelectedInstallment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SelectedInstallment_QB whereId($value)
     * @method _IH_SelectedInstallment_QB whereUserId($value)
     * @method _IH_SelectedInstallment_QB whereInstallmentId($value)
     * @method _IH_SelectedInstallment_QB whereInstallmentOrderId($value)
     * @method _IH_SelectedInstallment_QB whereStartDate($value)
     * @method _IH_SelectedInstallment_QB whereEndDate($value)
     * @method _IH_SelectedInstallment_QB whereUpfront($value)
     * @method _IH_SelectedInstallment_QB whereUpfrontType($value)
     * @method _IH_SelectedInstallment_QB whereCreatedAt($value)
     * @method SelectedInstallment baseSole(array|string $columns = ['*'])
     * @method SelectedInstallment create(array $attributes = [])
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] cursor()
     * @method SelectedInstallment|null|_IH_SelectedInstallment_C|SelectedInstallment[] find($id, array|string $columns = ['*'])
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SelectedInstallment|_IH_SelectedInstallment_C|SelectedInstallment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SelectedInstallment|_IH_SelectedInstallment_C|SelectedInstallment[] findOrFail($id, array|string $columns = ['*'])
     * @method SelectedInstallment|_IH_SelectedInstallment_C|SelectedInstallment[] findOrNew($id, array|string $columns = ['*'])
     * @method SelectedInstallment first(array|string $columns = ['*'])
     * @method SelectedInstallment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SelectedInstallment firstOrCreate(array $attributes = [], array $values = [])
     * @method SelectedInstallment firstOrFail(array|string $columns = ['*'])
     * @method SelectedInstallment firstOrNew(array $attributes = [], array $values = [])
     * @method SelectedInstallment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SelectedInstallment forceCreate(array $attributes)
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] get(array|string $columns = ['*'])
     * @method SelectedInstallment getModel()
     * @method SelectedInstallment[] getModels(array|string $columns = ['*'])
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] hydrate(array $items)
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] lazy(int $chunkSize = 1000)
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SelectedInstallment_C|SelectedInstallment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SelectedInstallment make(array $attributes = [])
     * @method SelectedInstallment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SelectedInstallment[]|_IH_SelectedInstallment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SelectedInstallment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SelectedInstallment[]|_IH_SelectedInstallment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SelectedInstallment sole(array|string $columns = ['*'])
     * @method SelectedInstallment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SelectedInstallment_QB extends _BaseBuilder {}
    
    /**
     * @method SessionRemind|null getOrPut($key, $value)
     * @method SessionRemind|$this shift(int $count = 1)
     * @method SessionRemind|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SessionRemind|$this pop(int $count = 1)
     * @method SessionRemind|null pull($key, \Closure $default = null)
     * @method SessionRemind|null last(callable $callback = null, \Closure $default = null)
     * @method SessionRemind|$this random(callable|int|null $number = null)
     * @method SessionRemind|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SessionRemind|null get($key, \Closure $default = null)
     * @method SessionRemind|null first(callable $callback = null, \Closure $default = null)
     * @method SessionRemind|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SessionRemind|null find($key, $default = null)
     * @method SessionRemind[] all()
     */
    class _IH_SessionRemind_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SessionRemind[][]|Collection<_IH_SessionRemind_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SessionRemind_QB whereId($value)
     * @method _IH_SessionRemind_QB whereSessionId($value)
     * @method _IH_SessionRemind_QB whereUserId($value)
     * @method _IH_SessionRemind_QB whereCreatedAt($value)
     * @method SessionRemind baseSole(array|string $columns = ['*'])
     * @method SessionRemind create(array $attributes = [])
     * @method _IH_SessionRemind_C|SessionRemind[] cursor()
     * @method SessionRemind|null|_IH_SessionRemind_C|SessionRemind[] find($id, array|string $columns = ['*'])
     * @method _IH_SessionRemind_C|SessionRemind[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SessionRemind|_IH_SessionRemind_C|SessionRemind[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SessionRemind|_IH_SessionRemind_C|SessionRemind[] findOrFail($id, array|string $columns = ['*'])
     * @method SessionRemind|_IH_SessionRemind_C|SessionRemind[] findOrNew($id, array|string $columns = ['*'])
     * @method SessionRemind first(array|string $columns = ['*'])
     * @method SessionRemind firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SessionRemind firstOrCreate(array $attributes = [], array $values = [])
     * @method SessionRemind firstOrFail(array|string $columns = ['*'])
     * @method SessionRemind firstOrNew(array $attributes = [], array $values = [])
     * @method SessionRemind firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SessionRemind forceCreate(array $attributes)
     * @method _IH_SessionRemind_C|SessionRemind[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SessionRemind_C|SessionRemind[] get(array|string $columns = ['*'])
     * @method SessionRemind getModel()
     * @method SessionRemind[] getModels(array|string $columns = ['*'])
     * @method _IH_SessionRemind_C|SessionRemind[] hydrate(array $items)
     * @method _IH_SessionRemind_C|SessionRemind[] lazy(int $chunkSize = 1000)
     * @method _IH_SessionRemind_C|SessionRemind[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SessionRemind_C|SessionRemind[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SessionRemind make(array $attributes = [])
     * @method SessionRemind newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SessionRemind[]|_IH_SessionRemind_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SessionRemind restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SessionRemind[]|_IH_SessionRemind_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SessionRemind sole(array|string $columns = ['*'])
     * @method SessionRemind updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SessionRemind_QB extends _BaseBuilder {}
    
    /**
     * @method Session|null getOrPut($key, $value)
     * @method Session|$this shift(int $count = 1)
     * @method Session|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Session|$this pop(int $count = 1)
     * @method Session|null pull($key, \Closure $default = null)
     * @method Session|null last(callable $callback = null, \Closure $default = null)
     * @method Session|$this random(callable|int|null $number = null)
     * @method Session|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Session|null get($key, \Closure $default = null)
     * @method Session|null first(callable $callback = null, \Closure $default = null)
     * @method Session|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Session|null find($key, $default = null)
     * @method Session[] all()
     */
    class _IH_Session_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Session[][]|Collection<_IH_Session_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Session_QB whereId($value)
     * @method _IH_Session_QB whereDuration($value)
     * @method _IH_Session_QB whereLink($value)
     * @method _IH_Session_QB whereCreatedAt($value)
     * @method _IH_Session_QB whereUpdatedAt($value)
     * @method _IH_Session_QB whereDeletedAt($value)
     * @method _IH_Session_QB whereWebinarId($value)
     * @method _IH_Session_QB whereCreatorId($value)
     * @method _IH_Session_QB whereOrder($value)
     * @method _IH_Session_QB whereSessionApi($value)
     * @method _IH_Session_QB whereApiSecret($value)
     * @method _IH_Session_QB whereModeratorSecret($value)
     * @method _IH_Session_QB whereZoomId($value)
     * @method _IH_Session_QB whereZoomStartLink($value)
     * @method _IH_Session_QB whereChapterId($value)
     * @method _IH_Session_QB whereStatus($value)
     * @method _IH_Session_QB whereAgoraSettings($value)
     * @method _IH_Session_QB whereCheckPreviousParts($value)
     * @method _IH_Session_QB whereAccessAfterDay($value)
     * @method _IH_Session_QB whereExtraTimeToJoin($value)
     * @method _IH_Session_QB whereReserveMeetingId($value)
     * @method Session baseSole(array|string $columns = ['*'])
     * @method Session create(array $attributes = [])
     * @method _IH_Session_C|Session[] cursor()
     * @method Session|null|_IH_Session_C|Session[] find($id, array|string $columns = ['*'])
     * @method _IH_Session_C|Session[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Session|_IH_Session_C|Session[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Session|_IH_Session_C|Session[] findOrFail($id, array|string $columns = ['*'])
     * @method Session|_IH_Session_C|Session[] findOrNew($id, array|string $columns = ['*'])
     * @method Session first(array|string $columns = ['*'])
     * @method Session firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Session firstOrCreate(array $attributes = [], array $values = [])
     * @method Session firstOrFail(array|string $columns = ['*'])
     * @method Session firstOrNew(array $attributes = [], array $values = [])
     * @method Session firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Session forceCreate(array $attributes)
     * @method _IH_Session_C|Session[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Session_C|Session[] get(array|string $columns = ['*'])
     * @method Session getModel()
     * @method Session[] getModels(array|string $columns = ['*'])
     * @method _IH_Session_C|Session[] hydrate(array $items)
     * @method _IH_Session_C|Session[] lazy(int $chunkSize = 1000)
     * @method _IH_Session_C|Session[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Session_C|Session[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Session make(array $attributes = [])
     * @method Session newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Session[]|_IH_Session_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Session restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Session[]|_IH_Session_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Session sole(array|string $columns = ['*'])
     * @method Session updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Session_QB listsTranslations(string $translationField)
     * @method _IH_Session_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Session_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Session_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Session_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Session_QB translated()
     * @method _IH_Session_QB translatedIn(null|string $locale = null)
     * @method _IH_Session_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Session_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Session_QB withTranslation()
     */
    class _IH_Session_QB extends _BaseBuilder {}
    
    /**
     * @method Setting|null getOrPut($key, $value)
     * @method Setting|$this shift(int $count = 1)
     * @method Setting|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Setting|$this pop(int $count = 1)
     * @method Setting|null pull($key, \Closure $default = null)
     * @method Setting|null last(callable $callback = null, \Closure $default = null)
     * @method Setting|$this random(callable|int|null $number = null)
     * @method Setting|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Setting|null get($key, \Closure $default = null)
     * @method Setting|null first(callable $callback = null, \Closure $default = null)
     * @method Setting|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Setting|null find($key, $default = null)
     * @method Setting[] all()
     */
    class _IH_Setting_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Setting[][]|Collection<_IH_Setting_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Setting_QB whereId($value)
     * @method _IH_Setting_QB whereName($value)
     * @method _IH_Setting_QB whereUpdatedAt($value)
     * @method _IH_Setting_QB wherePage($value)
     * @method Setting baseSole(array|string $columns = ['*'])
     * @method Setting create(array $attributes = [])
     * @method _IH_Setting_C|Setting[] cursor()
     * @method Setting|null|_IH_Setting_C|Setting[] find($id, array|string $columns = ['*'])
     * @method _IH_Setting_C|Setting[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Setting|_IH_Setting_C|Setting[] findOrFail($id, array|string $columns = ['*'])
     * @method Setting|_IH_Setting_C|Setting[] findOrNew($id, array|string $columns = ['*'])
     * @method Setting first(array|string $columns = ['*'])
     * @method Setting firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Setting firstOrCreate(array $attributes = [], array $values = [])
     * @method Setting firstOrFail(array|string $columns = ['*'])
     * @method Setting firstOrNew(array $attributes = [], array $values = [])
     * @method Setting firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Setting forceCreate(array $attributes)
     * @method _IH_Setting_C|Setting[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Setting_C|Setting[] get(array|string $columns = ['*'])
     * @method Setting getModel()
     * @method Setting[] getModels(array|string $columns = ['*'])
     * @method _IH_Setting_C|Setting[] hydrate(array $items)
     * @method _IH_Setting_C|Setting[] lazy(int $chunkSize = 1000)
     * @method _IH_Setting_C|Setting[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Setting_C|Setting[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Setting make(array $attributes = [])
     * @method Setting newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Setting[]|_IH_Setting_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Setting restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Setting[]|_IH_Setting_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Setting sole(array|string $columns = ['*'])
     * @method Setting updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Setting_QB listsTranslations(string $translationField)
     * @method _IH_Setting_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Setting_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Setting_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Setting_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Setting_QB translated()
     * @method _IH_Setting_QB translatedIn(null|string $locale = null)
     * @method _IH_Setting_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Setting_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Setting_QB withTranslation()
     */
    class _IH_Setting_QB extends _BaseBuilder {}
    
    /**
     * @method SpecialOffer|null getOrPut($key, $value)
     * @method SpecialOffer|$this shift(int $count = 1)
     * @method SpecialOffer|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SpecialOffer|$this pop(int $count = 1)
     * @method SpecialOffer|null pull($key, \Closure $default = null)
     * @method SpecialOffer|null last(callable $callback = null, \Closure $default = null)
     * @method SpecialOffer|$this random(callable|int|null $number = null)
     * @method SpecialOffer|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SpecialOffer|null get($key, \Closure $default = null)
     * @method SpecialOffer|null first(callable $callback = null, \Closure $default = null)
     * @method SpecialOffer|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SpecialOffer|null find($key, $default = null)
     * @method SpecialOffer[] all()
     */
    class _IH_SpecialOffer_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SpecialOffer[][]|Collection<_IH_SpecialOffer_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SpecialOffer_QB whereId($value)
     * @method _IH_SpecialOffer_QB whereCreatorId($value)
     * @method _IH_SpecialOffer_QB whereWebinarId($value)
     * @method _IH_SpecialOffer_QB whereName($value)
     * @method _IH_SpecialOffer_QB wherePercent($value)
     * @method _IH_SpecialOffer_QB whereStatus($value)
     * @method _IH_SpecialOffer_QB whereCreatedAt($value)
     * @method _IH_SpecialOffer_QB whereFromDate($value)
     * @method _IH_SpecialOffer_QB whereToDate($value)
     * @method _IH_SpecialOffer_QB whereBundleId($value)
     * @method _IH_SpecialOffer_QB whereSubscribeId($value)
     * @method _IH_SpecialOffer_QB whereRegistrationPackageId($value)
     * @method SpecialOffer baseSole(array|string $columns = ['*'])
     * @method SpecialOffer create(array $attributes = [])
     * @method _IH_SpecialOffer_C|SpecialOffer[] cursor()
     * @method SpecialOffer|null|_IH_SpecialOffer_C|SpecialOffer[] find($id, array|string $columns = ['*'])
     * @method _IH_SpecialOffer_C|SpecialOffer[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SpecialOffer|_IH_SpecialOffer_C|SpecialOffer[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SpecialOffer|_IH_SpecialOffer_C|SpecialOffer[] findOrFail($id, array|string $columns = ['*'])
     * @method SpecialOffer|_IH_SpecialOffer_C|SpecialOffer[] findOrNew($id, array|string $columns = ['*'])
     * @method SpecialOffer first(array|string $columns = ['*'])
     * @method SpecialOffer firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SpecialOffer firstOrCreate(array $attributes = [], array $values = [])
     * @method SpecialOffer firstOrFail(array|string $columns = ['*'])
     * @method SpecialOffer firstOrNew(array $attributes = [], array $values = [])
     * @method SpecialOffer firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SpecialOffer forceCreate(array $attributes)
     * @method _IH_SpecialOffer_C|SpecialOffer[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SpecialOffer_C|SpecialOffer[] get(array|string $columns = ['*'])
     * @method SpecialOffer getModel()
     * @method SpecialOffer[] getModels(array|string $columns = ['*'])
     * @method _IH_SpecialOffer_C|SpecialOffer[] hydrate(array $items)
     * @method _IH_SpecialOffer_C|SpecialOffer[] lazy(int $chunkSize = 1000)
     * @method _IH_SpecialOffer_C|SpecialOffer[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SpecialOffer_C|SpecialOffer[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SpecialOffer make(array $attributes = [])
     * @method SpecialOffer newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SpecialOffer[]|_IH_SpecialOffer_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SpecialOffer restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SpecialOffer[]|_IH_SpecialOffer_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SpecialOffer sole(array|string $columns = ['*'])
     * @method SpecialOffer updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SpecialOffer_QB extends _BaseBuilder {}
    
    /**
     * @method SubscribeRemind|null getOrPut($key, $value)
     * @method SubscribeRemind|$this shift(int $count = 1)
     * @method SubscribeRemind|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeRemind|$this pop(int $count = 1)
     * @method SubscribeRemind|null pull($key, \Closure $default = null)
     * @method SubscribeRemind|null last(callable $callback = null, \Closure $default = null)
     * @method SubscribeRemind|$this random(callable|int|null $number = null)
     * @method SubscribeRemind|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeRemind|null get($key, \Closure $default = null)
     * @method SubscribeRemind|null first(callable $callback = null, \Closure $default = null)
     * @method SubscribeRemind|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SubscribeRemind|null find($key, $default = null)
     * @method SubscribeRemind[] all()
     */
    class _IH_SubscribeRemind_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubscribeRemind[][]|Collection<_IH_SubscribeRemind_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SubscribeRemind_QB whereId($value)
     * @method _IH_SubscribeRemind_QB whereUserId($value)
     * @method _IH_SubscribeRemind_QB whereSubscribeId($value)
     * @method _IH_SubscribeRemind_QB whereCreatedAt($value)
     * @method SubscribeRemind baseSole(array|string $columns = ['*'])
     * @method SubscribeRemind create(array $attributes = [])
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] cursor()
     * @method SubscribeRemind|null|_IH_SubscribeRemind_C|SubscribeRemind[] find($id, array|string $columns = ['*'])
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SubscribeRemind|_IH_SubscribeRemind_C|SubscribeRemind[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeRemind|_IH_SubscribeRemind_C|SubscribeRemind[] findOrFail($id, array|string $columns = ['*'])
     * @method SubscribeRemind|_IH_SubscribeRemind_C|SubscribeRemind[] findOrNew($id, array|string $columns = ['*'])
     * @method SubscribeRemind first(array|string $columns = ['*'])
     * @method SubscribeRemind firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeRemind firstOrCreate(array $attributes = [], array $values = [])
     * @method SubscribeRemind firstOrFail(array|string $columns = ['*'])
     * @method SubscribeRemind firstOrNew(array $attributes = [], array $values = [])
     * @method SubscribeRemind firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubscribeRemind forceCreate(array $attributes)
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] get(array|string $columns = ['*'])
     * @method SubscribeRemind getModel()
     * @method SubscribeRemind[] getModels(array|string $columns = ['*'])
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] hydrate(array $items)
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] lazy(int $chunkSize = 1000)
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SubscribeRemind_C|SubscribeRemind[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SubscribeRemind make(array $attributes = [])
     * @method SubscribeRemind newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubscribeRemind[]|_IH_SubscribeRemind_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeRemind restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SubscribeRemind[]|_IH_SubscribeRemind_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeRemind sole(array|string $columns = ['*'])
     * @method SubscribeRemind updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubscribeRemind_QB extends _BaseBuilder {}
    
    /**
     * @method SubscribeUse|null getOrPut($key, $value)
     * @method SubscribeUse|$this shift(int $count = 1)
     * @method SubscribeUse|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeUse|$this pop(int $count = 1)
     * @method SubscribeUse|null pull($key, \Closure $default = null)
     * @method SubscribeUse|null last(callable $callback = null, \Closure $default = null)
     * @method SubscribeUse|$this random(callable|int|null $number = null)
     * @method SubscribeUse|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeUse|null get($key, \Closure $default = null)
     * @method SubscribeUse|null first(callable $callback = null, \Closure $default = null)
     * @method SubscribeUse|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SubscribeUse|null find($key, $default = null)
     * @method SubscribeUse[] all()
     */
    class _IH_SubscribeUse_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubscribeUse[][]|Collection<_IH_SubscribeUse_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SubscribeUse_QB whereId($value)
     * @method _IH_SubscribeUse_QB whereUserId($value)
     * @method _IH_SubscribeUse_QB whereSubscribeId($value)
     * @method _IH_SubscribeUse_QB whereWebinarId($value)
     * @method _IH_SubscribeUse_QB whereSaleId($value)
     * @method _IH_SubscribeUse_QB whereBundleId($value)
     * @method _IH_SubscribeUse_QB whereInstallmentOrderId($value)
     * @method SubscribeUse baseSole(array|string $columns = ['*'])
     * @method SubscribeUse create(array $attributes = [])
     * @method _IH_SubscribeUse_C|SubscribeUse[] cursor()
     * @method SubscribeUse|null|_IH_SubscribeUse_C|SubscribeUse[] find($id, array|string $columns = ['*'])
     * @method _IH_SubscribeUse_C|SubscribeUse[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SubscribeUse|_IH_SubscribeUse_C|SubscribeUse[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeUse|_IH_SubscribeUse_C|SubscribeUse[] findOrFail($id, array|string $columns = ['*'])
     * @method SubscribeUse|_IH_SubscribeUse_C|SubscribeUse[] findOrNew($id, array|string $columns = ['*'])
     * @method SubscribeUse first(array|string $columns = ['*'])
     * @method SubscribeUse firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeUse firstOrCreate(array $attributes = [], array $values = [])
     * @method SubscribeUse firstOrFail(array|string $columns = ['*'])
     * @method SubscribeUse firstOrNew(array $attributes = [], array $values = [])
     * @method SubscribeUse firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubscribeUse forceCreate(array $attributes)
     * @method _IH_SubscribeUse_C|SubscribeUse[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubscribeUse_C|SubscribeUse[] get(array|string $columns = ['*'])
     * @method SubscribeUse getModel()
     * @method SubscribeUse[] getModels(array|string $columns = ['*'])
     * @method _IH_SubscribeUse_C|SubscribeUse[] hydrate(array $items)
     * @method _IH_SubscribeUse_C|SubscribeUse[] lazy(int $chunkSize = 1000)
     * @method _IH_SubscribeUse_C|SubscribeUse[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SubscribeUse_C|SubscribeUse[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SubscribeUse make(array $attributes = [])
     * @method SubscribeUse newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubscribeUse[]|_IH_SubscribeUse_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeUse restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SubscribeUse[]|_IH_SubscribeUse_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeUse sole(array|string $columns = ['*'])
     * @method SubscribeUse updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubscribeUse_QB extends _BaseBuilder {}
    
    /**
     * @method Subscribe|null getOrPut($key, $value)
     * @method Subscribe|$this shift(int $count = 1)
     * @method Subscribe|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Subscribe|$this pop(int $count = 1)
     * @method Subscribe|null pull($key, \Closure $default = null)
     * @method Subscribe|null last(callable $callback = null, \Closure $default = null)
     * @method Subscribe|$this random(callable|int|null $number = null)
     * @method Subscribe|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Subscribe|null get($key, \Closure $default = null)
     * @method Subscribe|null first(callable $callback = null, \Closure $default = null)
     * @method Subscribe|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Subscribe|null find($key, $default = null)
     * @method Subscribe[] all()
     */
    class _IH_Subscribe_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Subscribe[][]|Collection<_IH_Subscribe_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Subscribe_QB whereId($value)
     * @method _IH_Subscribe_QB whereUsableCount($value)
     * @method _IH_Subscribe_QB whereDays($value)
     * @method _IH_Subscribe_QB wherePrice($value)
     * @method _IH_Subscribe_QB whereIcon($value)
     * @method _IH_Subscribe_QB whereCreatedAt($value)
     * @method _IH_Subscribe_QB whereIsPopular($value)
     * @method _IH_Subscribe_QB whereInfiniteUse($value)
     * @method Subscribe baseSole(array|string $columns = ['*'])
     * @method Subscribe create(array $attributes = [])
     * @method _IH_Subscribe_C|Subscribe[] cursor()
     * @method Subscribe|null|_IH_Subscribe_C|Subscribe[] find($id, array|string $columns = ['*'])
     * @method _IH_Subscribe_C|Subscribe[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Subscribe|_IH_Subscribe_C|Subscribe[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscribe|_IH_Subscribe_C|Subscribe[] findOrFail($id, array|string $columns = ['*'])
     * @method Subscribe|_IH_Subscribe_C|Subscribe[] findOrNew($id, array|string $columns = ['*'])
     * @method Subscribe first(array|string $columns = ['*'])
     * @method Subscribe firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Subscribe firstOrCreate(array $attributes = [], array $values = [])
     * @method Subscribe firstOrFail(array|string $columns = ['*'])
     * @method Subscribe firstOrNew(array $attributes = [], array $values = [])
     * @method Subscribe firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Subscribe forceCreate(array $attributes)
     * @method _IH_Subscribe_C|Subscribe[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Subscribe_C|Subscribe[] get(array|string $columns = ['*'])
     * @method Subscribe getModel()
     * @method Subscribe[] getModels(array|string $columns = ['*'])
     * @method _IH_Subscribe_C|Subscribe[] hydrate(array $items)
     * @method _IH_Subscribe_C|Subscribe[] lazy(int $chunkSize = 1000)
     * @method _IH_Subscribe_C|Subscribe[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Subscribe_C|Subscribe[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Subscribe make(array $attributes = [])
     * @method Subscribe newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Subscribe[]|_IH_Subscribe_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscribe restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Subscribe[]|_IH_Subscribe_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Subscribe sole(array|string $columns = ['*'])
     * @method Subscribe updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Subscribe_QB listsTranslations(string $translationField)
     * @method _IH_Subscribe_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Subscribe_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Subscribe_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Subscribe_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Subscribe_QB translated()
     * @method _IH_Subscribe_QB translatedIn(null|string $locale = null)
     * @method _IH_Subscribe_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Subscribe_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Subscribe_QB withTranslation()
     */
    class _IH_Subscribe_QB extends _BaseBuilder {}
    
    /**
     * @method SupportConversation|null getOrPut($key, $value)
     * @method SupportConversation|$this shift(int $count = 1)
     * @method SupportConversation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportConversation|$this pop(int $count = 1)
     * @method SupportConversation|null pull($key, \Closure $default = null)
     * @method SupportConversation|null last(callable $callback = null, \Closure $default = null)
     * @method SupportConversation|$this random(callable|int|null $number = null)
     * @method SupportConversation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportConversation|null get($key, \Closure $default = null)
     * @method SupportConversation|null first(callable $callback = null, \Closure $default = null)
     * @method SupportConversation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportConversation|null find($key, $default = null)
     * @method SupportConversation[] all()
     */
    class _IH_SupportConversation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportConversation[][]|Collection<_IH_SupportConversation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SupportConversation_QB whereId($value)
     * @method _IH_SupportConversation_QB whereSupportId($value)
     * @method _IH_SupportConversation_QB whereSupporterId($value)
     * @method _IH_SupportConversation_QB whereSenderId($value)
     * @method _IH_SupportConversation_QB whereAttach($value)
     * @method _IH_SupportConversation_QB whereMessage($value)
     * @method _IH_SupportConversation_QB whereCreatedAt($value)
     * @method SupportConversation baseSole(array|string $columns = ['*'])
     * @method SupportConversation create(array $attributes = [])
     * @method _IH_SupportConversation_C|SupportConversation[] cursor()
     * @method SupportConversation|null|_IH_SupportConversation_C|SupportConversation[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportConversation_C|SupportConversation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportConversation|_IH_SupportConversation_C|SupportConversation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportConversation|_IH_SupportConversation_C|SupportConversation[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportConversation|_IH_SupportConversation_C|SupportConversation[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportConversation first(array|string $columns = ['*'])
     * @method SupportConversation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportConversation firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportConversation firstOrFail(array|string $columns = ['*'])
     * @method SupportConversation firstOrNew(array $attributes = [], array $values = [])
     * @method SupportConversation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportConversation forceCreate(array $attributes)
     * @method _IH_SupportConversation_C|SupportConversation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportConversation_C|SupportConversation[] get(array|string $columns = ['*'])
     * @method SupportConversation getModel()
     * @method SupportConversation[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportConversation_C|SupportConversation[] hydrate(array $items)
     * @method _IH_SupportConversation_C|SupportConversation[] lazy(int $chunkSize = 1000)
     * @method _IH_SupportConversation_C|SupportConversation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SupportConversation_C|SupportConversation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SupportConversation make(array $attributes = [])
     * @method SupportConversation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportConversation[]|_IH_SupportConversation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportConversation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SupportConversation[]|_IH_SupportConversation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportConversation sole(array|string $columns = ['*'])
     * @method SupportConversation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SupportConversation_QB extends _BaseBuilder {}
    
    /**
     * @method SupportDepartment|null getOrPut($key, $value)
     * @method SupportDepartment|$this shift(int $count = 1)
     * @method SupportDepartment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartment|$this pop(int $count = 1)
     * @method SupportDepartment|null pull($key, \Closure $default = null)
     * @method SupportDepartment|null last(callable $callback = null, \Closure $default = null)
     * @method SupportDepartment|$this random(callable|int|null $number = null)
     * @method SupportDepartment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartment|null get($key, \Closure $default = null)
     * @method SupportDepartment|null first(callable $callback = null, \Closure $default = null)
     * @method SupportDepartment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportDepartment|null find($key, $default = null)
     * @method SupportDepartment[] all()
     */
    class _IH_SupportDepartment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportDepartment[][]|Collection<_IH_SupportDepartment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SupportDepartment_QB whereId($value)
     * @method _IH_SupportDepartment_QB whereCreatedAt($value)
     * @method _IH_SupportDepartment_QB whereIcon($value)
     * @method _IH_SupportDepartment_QB whereColor($value)
     * @method SupportDepartment baseSole(array|string $columns = ['*'])
     * @method SupportDepartment create(array $attributes = [])
     * @method _IH_SupportDepartment_C|SupportDepartment[] cursor()
     * @method SupportDepartment|null|_IH_SupportDepartment_C|SupportDepartment[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportDepartment_C|SupportDepartment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportDepartment|_IH_SupportDepartment_C|SupportDepartment[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportDepartment first(array|string $columns = ['*'])
     * @method SupportDepartment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartment firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportDepartment firstOrFail(array|string $columns = ['*'])
     * @method SupportDepartment firstOrNew(array $attributes = [], array $values = [])
     * @method SupportDepartment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportDepartment forceCreate(array $attributes)
     * @method _IH_SupportDepartment_C|SupportDepartment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportDepartment_C|SupportDepartment[] get(array|string $columns = ['*'])
     * @method SupportDepartment getModel()
     * @method SupportDepartment[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportDepartment_C|SupportDepartment[] hydrate(array $items)
     * @method _IH_SupportDepartment_C|SupportDepartment[] lazy(int $chunkSize = 1000)
     * @method _IH_SupportDepartment_C|SupportDepartment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SupportDepartment_C|SupportDepartment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SupportDepartment make(array $attributes = [])
     * @method SupportDepartment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportDepartment[]|_IH_SupportDepartment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportDepartment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SupportDepartment[]|_IH_SupportDepartment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportDepartment sole(array|string $columns = ['*'])
     * @method SupportDepartment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_SupportDepartment_QB listsTranslations(string $translationField)
     * @method _IH_SupportDepartment_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_SupportDepartment_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_SupportDepartment_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_SupportDepartment_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_SupportDepartment_QB translated()
     * @method _IH_SupportDepartment_QB translatedIn(null|string $locale = null)
     * @method _IH_SupportDepartment_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_SupportDepartment_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_SupportDepartment_QB withTranslation()
     */
    class _IH_SupportDepartment_QB extends _BaseBuilder {}
    
    /**
     * @method Support|null getOrPut($key, $value)
     * @method Support|$this shift(int $count = 1)
     * @method Support|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Support|$this pop(int $count = 1)
     * @method Support|null pull($key, \Closure $default = null)
     * @method Support|null last(callable $callback = null, \Closure $default = null)
     * @method Support|$this random(callable|int|null $number = null)
     * @method Support|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Support|null get($key, \Closure $default = null)
     * @method Support|null first(callable $callback = null, \Closure $default = null)
     * @method Support|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Support|null find($key, $default = null)
     * @method Support[] all()
     */
    class _IH_Support_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Support[][]|Collection<_IH_Support_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Support_QB whereId($value)
     * @method _IH_Support_QB whereUserId($value)
     * @method _IH_Support_QB whereWebinarId($value)
     * @method _IH_Support_QB whereDepartmentId($value)
     * @method _IH_Support_QB whereTitle($value)
     * @method _IH_Support_QB whereStatus($value)
     * @method _IH_Support_QB whereCreatedAt($value)
     * @method _IH_Support_QB whereUpdatedAt($value)
     * @method Support baseSole(array|string $columns = ['*'])
     * @method Support create(array $attributes = [])
     * @method _IH_Support_C|Support[] cursor()
     * @method Support|null|_IH_Support_C|Support[] find($id, array|string $columns = ['*'])
     * @method _IH_Support_C|Support[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Support|_IH_Support_C|Support[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Support|_IH_Support_C|Support[] findOrFail($id, array|string $columns = ['*'])
     * @method Support|_IH_Support_C|Support[] findOrNew($id, array|string $columns = ['*'])
     * @method Support first(array|string $columns = ['*'])
     * @method Support firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Support firstOrCreate(array $attributes = [], array $values = [])
     * @method Support firstOrFail(array|string $columns = ['*'])
     * @method Support firstOrNew(array $attributes = [], array $values = [])
     * @method Support firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Support forceCreate(array $attributes)
     * @method _IH_Support_C|Support[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Support_C|Support[] get(array|string $columns = ['*'])
     * @method Support getModel()
     * @method Support[] getModels(array|string $columns = ['*'])
     * @method _IH_Support_C|Support[] hydrate(array $items)
     * @method _IH_Support_C|Support[] lazy(int $chunkSize = 1000)
     * @method _IH_Support_C|Support[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Support_C|Support[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Support make(array $attributes = [])
     * @method Support newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Support[]|_IH_Support_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Support restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Support[]|_IH_Support_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Support sole(array|string $columns = ['*'])
     * @method Support updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Support_QB extends _BaseBuilder {}
    
    /**
     * @method Tag|null getOrPut($key, $value)
     * @method Tag|$this shift(int $count = 1)
     * @method Tag|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|$this pop(int $count = 1)
     * @method Tag|null pull($key, \Closure $default = null)
     * @method Tag|null last(callable $callback = null, \Closure $default = null)
     * @method Tag|$this random(callable|int|null $number = null)
     * @method Tag|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Tag|null get($key, \Closure $default = null)
     * @method Tag|null first(callable $callback = null, \Closure $default = null)
     * @method Tag|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Tag|null find($key, $default = null)
     * @method Tag[] all()
     */
    class _IH_Tag_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Tag[][]|Collection<_IH_Tag_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Tag_QB whereId($value)
     * @method _IH_Tag_QB whereTitle($value)
     * @method _IH_Tag_QB whereWebinarId($value)
     * @method _IH_Tag_QB whereBundleId($value)
     * @method _IH_Tag_QB whereUpcomingCourseId($value)
     * @method Tag baseSole(array|string $columns = ['*'])
     * @method Tag create(array $attributes = [])
     * @method _IH_Tag_C|Tag[] cursor()
     * @method Tag|null|_IH_Tag_C|Tag[] find($id, array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag|_IH_Tag_C|Tag[] findOrFail($id, array|string $columns = ['*'])
     * @method Tag|_IH_Tag_C|Tag[] findOrNew($id, array|string $columns = ['*'])
     * @method Tag first(array|string $columns = ['*'])
     * @method Tag firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Tag firstOrCreate(array $attributes = [], array $values = [])
     * @method Tag firstOrFail(array|string $columns = ['*'])
     * @method Tag firstOrNew(array $attributes = [], array $values = [])
     * @method Tag firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Tag forceCreate(array $attributes)
     * @method _IH_Tag_C|Tag[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Tag_C|Tag[] get(array|string $columns = ['*'])
     * @method Tag getModel()
     * @method Tag[] getModels(array|string $columns = ['*'])
     * @method _IH_Tag_C|Tag[] hydrate(array $items)
     * @method _IH_Tag_C|Tag[] lazy(int $chunkSize = 1000)
     * @method _IH_Tag_C|Tag[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Tag_C|Tag[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Tag make(array $attributes = [])
     * @method Tag newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Tag[]|_IH_Tag_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Tag[]|_IH_Tag_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Tag sole(array|string $columns = ['*'])
     * @method Tag updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Tag_QB extends _BaseBuilder {}
    
    /**
     * @method Testimonial|null getOrPut($key, $value)
     * @method Testimonial|$this shift(int $count = 1)
     * @method Testimonial|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Testimonial|$this pop(int $count = 1)
     * @method Testimonial|null pull($key, \Closure $default = null)
     * @method Testimonial|null last(callable $callback = null, \Closure $default = null)
     * @method Testimonial|$this random(callable|int|null $number = null)
     * @method Testimonial|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Testimonial|null get($key, \Closure $default = null)
     * @method Testimonial|null first(callable $callback = null, \Closure $default = null)
     * @method Testimonial|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Testimonial|null find($key, $default = null)
     * @method Testimonial[] all()
     */
    class _IH_Testimonial_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Testimonial[][]|Collection<_IH_Testimonial_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Testimonial_QB whereId($value)
     * @method _IH_Testimonial_QB whereUserAvatar($value)
     * @method _IH_Testimonial_QB whereRate($value)
     * @method _IH_Testimonial_QB whereStatus($value)
     * @method _IH_Testimonial_QB whereCreatedAt($value)
     * @method Testimonial baseSole(array|string $columns = ['*'])
     * @method Testimonial create(array $attributes = [])
     * @method _IH_Testimonial_C|Testimonial[] cursor()
     * @method Testimonial|null|_IH_Testimonial_C|Testimonial[] find($id, array|string $columns = ['*'])
     * @method _IH_Testimonial_C|Testimonial[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOrFail($id, array|string $columns = ['*'])
     * @method Testimonial|_IH_Testimonial_C|Testimonial[] findOrNew($id, array|string $columns = ['*'])
     * @method Testimonial first(array|string $columns = ['*'])
     * @method Testimonial firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Testimonial firstOrCreate(array $attributes = [], array $values = [])
     * @method Testimonial firstOrFail(array|string $columns = ['*'])
     * @method Testimonial firstOrNew(array $attributes = [], array $values = [])
     * @method Testimonial firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Testimonial forceCreate(array $attributes)
     * @method _IH_Testimonial_C|Testimonial[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Testimonial_C|Testimonial[] get(array|string $columns = ['*'])
     * @method Testimonial getModel()
     * @method Testimonial[] getModels(array|string $columns = ['*'])
     * @method _IH_Testimonial_C|Testimonial[] hydrate(array $items)
     * @method _IH_Testimonial_C|Testimonial[] lazy(int $chunkSize = 1000)
     * @method _IH_Testimonial_C|Testimonial[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Testimonial_C|Testimonial[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Testimonial make(array $attributes = [])
     * @method Testimonial newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Testimonial[]|_IH_Testimonial_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Testimonial restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Testimonial[]|_IH_Testimonial_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Testimonial sole(array|string $columns = ['*'])
     * @method Testimonial updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Testimonial_QB listsTranslations(string $translationField)
     * @method _IH_Testimonial_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Testimonial_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Testimonial_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Testimonial_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Testimonial_QB translated()
     * @method _IH_Testimonial_QB translatedIn(null|string $locale = null)
     * @method _IH_Testimonial_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Testimonial_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Testimonial_QB withTranslation()
     */
    class _IH_Testimonial_QB extends _BaseBuilder {}
    
    /**
     * @method TextLessonAttachment|null getOrPut($key, $value)
     * @method TextLessonAttachment|$this shift(int $count = 1)
     * @method TextLessonAttachment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TextLessonAttachment|$this pop(int $count = 1)
     * @method TextLessonAttachment|null pull($key, \Closure $default = null)
     * @method TextLessonAttachment|null last(callable $callback = null, \Closure $default = null)
     * @method TextLessonAttachment|$this random(callable|int|null $number = null)
     * @method TextLessonAttachment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TextLessonAttachment|null get($key, \Closure $default = null)
     * @method TextLessonAttachment|null first(callable $callback = null, \Closure $default = null)
     * @method TextLessonAttachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TextLessonAttachment|null find($key, $default = null)
     * @method TextLessonAttachment[] all()
     */
    class _IH_TextLessonAttachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TextLessonAttachment[][]|Collection<_IH_TextLessonAttachment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TextLessonAttachment_QB whereId($value)
     * @method _IH_TextLessonAttachment_QB whereTextLessonId($value)
     * @method _IH_TextLessonAttachment_QB whereFileId($value)
     * @method _IH_TextLessonAttachment_QB whereCreatedAt($value)
     * @method TextLessonAttachment baseSole(array|string $columns = ['*'])
     * @method TextLessonAttachment create(array $attributes = [])
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] cursor()
     * @method TextLessonAttachment|null|_IH_TextLessonAttachment_C|TextLessonAttachment[] find($id, array|string $columns = ['*'])
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TextLessonAttachment|_IH_TextLessonAttachment_C|TextLessonAttachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLessonAttachment|_IH_TextLessonAttachment_C|TextLessonAttachment[] findOrFail($id, array|string $columns = ['*'])
     * @method TextLessonAttachment|_IH_TextLessonAttachment_C|TextLessonAttachment[] findOrNew($id, array|string $columns = ['*'])
     * @method TextLessonAttachment first(array|string $columns = ['*'])
     * @method TextLessonAttachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLessonAttachment firstOrCreate(array $attributes = [], array $values = [])
     * @method TextLessonAttachment firstOrFail(array|string $columns = ['*'])
     * @method TextLessonAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method TextLessonAttachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TextLessonAttachment forceCreate(array $attributes)
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] get(array|string $columns = ['*'])
     * @method TextLessonAttachment getModel()
     * @method TextLessonAttachment[] getModels(array|string $columns = ['*'])
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] hydrate(array $items)
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] lazy(int $chunkSize = 1000)
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TextLessonAttachment_C|TextLessonAttachment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TextLessonAttachment make(array $attributes = [])
     * @method TextLessonAttachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TextLessonAttachment[]|_IH_TextLessonAttachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLessonAttachment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TextLessonAttachment[]|_IH_TextLessonAttachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLessonAttachment sole(array|string $columns = ['*'])
     * @method TextLessonAttachment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TextLessonAttachment_QB extends _BaseBuilder {}
    
    /**
     * @method TextLesson|null getOrPut($key, $value)
     * @method TextLesson|$this shift(int $count = 1)
     * @method TextLesson|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TextLesson|$this pop(int $count = 1)
     * @method TextLesson|null pull($key, \Closure $default = null)
     * @method TextLesson|null last(callable $callback = null, \Closure $default = null)
     * @method TextLesson|$this random(callable|int|null $number = null)
     * @method TextLesson|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TextLesson|null get($key, \Closure $default = null)
     * @method TextLesson|null first(callable $callback = null, \Closure $default = null)
     * @method TextLesson|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TextLesson|null find($key, $default = null)
     * @method TextLesson[] all()
     */
    class _IH_TextLesson_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TextLesson[][]|Collection<_IH_TextLesson_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TextLesson_QB whereId($value)
     * @method _IH_TextLesson_QB whereCreatorId($value)
     * @method _IH_TextLesson_QB whereWebinarId($value)
     * @method _IH_TextLesson_QB whereImage($value)
     * @method _IH_TextLesson_QB whereStudyTime($value)
     * @method _IH_TextLesson_QB whereAccessibility($value)
     * @method _IH_TextLesson_QB whereCreatedAt($value)
     * @method _IH_TextLesson_QB whereUpdatedAt($value)
     * @method _IH_TextLesson_QB whereOrder($value)
     * @method _IH_TextLesson_QB whereChapterId($value)
     * @method _IH_TextLesson_QB whereStatus($value)
     * @method _IH_TextLesson_QB whereCheckPreviousParts($value)
     * @method _IH_TextLesson_QB whereAccessAfterDay($value)
     * @method TextLesson baseSole(array|string $columns = ['*'])
     * @method TextLesson create(array $attributes = [])
     * @method _IH_TextLesson_C|TextLesson[] cursor()
     * @method TextLesson|null|_IH_TextLesson_C|TextLesson[] find($id, array|string $columns = ['*'])
     * @method _IH_TextLesson_C|TextLesson[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TextLesson|_IH_TextLesson_C|TextLesson[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLesson|_IH_TextLesson_C|TextLesson[] findOrFail($id, array|string $columns = ['*'])
     * @method TextLesson|_IH_TextLesson_C|TextLesson[] findOrNew($id, array|string $columns = ['*'])
     * @method TextLesson first(array|string $columns = ['*'])
     * @method TextLesson firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLesson firstOrCreate(array $attributes = [], array $values = [])
     * @method TextLesson firstOrFail(array|string $columns = ['*'])
     * @method TextLesson firstOrNew(array $attributes = [], array $values = [])
     * @method TextLesson firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TextLesson forceCreate(array $attributes)
     * @method _IH_TextLesson_C|TextLesson[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TextLesson_C|TextLesson[] get(array|string $columns = ['*'])
     * @method TextLesson getModel()
     * @method TextLesson[] getModels(array|string $columns = ['*'])
     * @method _IH_TextLesson_C|TextLesson[] hydrate(array $items)
     * @method _IH_TextLesson_C|TextLesson[] lazy(int $chunkSize = 1000)
     * @method _IH_TextLesson_C|TextLesson[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TextLesson_C|TextLesson[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TextLesson make(array $attributes = [])
     * @method TextLesson newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TextLesson[]|_IH_TextLesson_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLesson restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TextLesson[]|_IH_TextLesson_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLesson sole(array|string $columns = ['*'])
     * @method TextLesson updateOrCreate(array $attributes, array $values = [])
     * @method _IH_TextLesson_QB listsTranslations(string $translationField)
     * @method _IH_TextLesson_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_TextLesson_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_TextLesson_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_TextLesson_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_TextLesson_QB translated()
     * @method _IH_TextLesson_QB translatedIn(null|string $locale = null)
     * @method _IH_TextLesson_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_TextLesson_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_TextLesson_QB withTranslation()
     */
    class _IH_TextLesson_QB extends _BaseBuilder {}
    
    /**
     * @method TicketUser|null getOrPut($key, $value)
     * @method TicketUser|$this shift(int $count = 1)
     * @method TicketUser|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TicketUser|$this pop(int $count = 1)
     * @method TicketUser|null pull($key, \Closure $default = null)
     * @method TicketUser|null last(callable $callback = null, \Closure $default = null)
     * @method TicketUser|$this random(callable|int|null $number = null)
     * @method TicketUser|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TicketUser|null get($key, \Closure $default = null)
     * @method TicketUser|null first(callable $callback = null, \Closure $default = null)
     * @method TicketUser|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TicketUser|null find($key, $default = null)
     * @method TicketUser[] all()
     */
    class _IH_TicketUser_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TicketUser[][]|Collection<_IH_TicketUser_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TicketUser_QB whereId($value)
     * @method _IH_TicketUser_QB whereTicketId($value)
     * @method _IH_TicketUser_QB whereUserId($value)
     * @method _IH_TicketUser_QB whereCreatedAt($value)
     * @method TicketUser baseSole(array|string $columns = ['*'])
     * @method TicketUser create(array $attributes = [])
     * @method _IH_TicketUser_C|TicketUser[] cursor()
     * @method TicketUser|null|_IH_TicketUser_C|TicketUser[] find($id, array|string $columns = ['*'])
     * @method _IH_TicketUser_C|TicketUser[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TicketUser|_IH_TicketUser_C|TicketUser[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TicketUser|_IH_TicketUser_C|TicketUser[] findOrFail($id, array|string $columns = ['*'])
     * @method TicketUser|_IH_TicketUser_C|TicketUser[] findOrNew($id, array|string $columns = ['*'])
     * @method TicketUser first(array|string $columns = ['*'])
     * @method TicketUser firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TicketUser firstOrCreate(array $attributes = [], array $values = [])
     * @method TicketUser firstOrFail(array|string $columns = ['*'])
     * @method TicketUser firstOrNew(array $attributes = [], array $values = [])
     * @method TicketUser firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TicketUser forceCreate(array $attributes)
     * @method _IH_TicketUser_C|TicketUser[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TicketUser_C|TicketUser[] get(array|string $columns = ['*'])
     * @method TicketUser getModel()
     * @method TicketUser[] getModels(array|string $columns = ['*'])
     * @method _IH_TicketUser_C|TicketUser[] hydrate(array $items)
     * @method _IH_TicketUser_C|TicketUser[] lazy(int $chunkSize = 1000)
     * @method _IH_TicketUser_C|TicketUser[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TicketUser_C|TicketUser[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TicketUser make(array $attributes = [])
     * @method TicketUser newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TicketUser[]|_IH_TicketUser_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketUser restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TicketUser[]|_IH_TicketUser_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketUser sole(array|string $columns = ['*'])
     * @method TicketUser updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TicketUser_QB extends _BaseBuilder {}
    
    /**
     * @method Ticket|null getOrPut($key, $value)
     * @method Ticket|$this shift(int $count = 1)
     * @method Ticket|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Ticket|$this pop(int $count = 1)
     * @method Ticket|null pull($key, \Closure $default = null)
     * @method Ticket|null last(callable $callback = null, \Closure $default = null)
     * @method Ticket|$this random(callable|int|null $number = null)
     * @method Ticket|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Ticket|null get($key, \Closure $default = null)
     * @method Ticket|null first(callable $callback = null, \Closure $default = null)
     * @method Ticket|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Ticket|null find($key, $default = null)
     * @method Ticket[] all()
     */
    class _IH_Ticket_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Ticket[][]|Collection<_IH_Ticket_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Ticket_QB whereId($value)
     * @method _IH_Ticket_QB whereStartDate($value)
     * @method _IH_Ticket_QB whereEndDate($value)
     * @method _IH_Ticket_QB whereDiscount($value)
     * @method _IH_Ticket_QB whereCapacity($value)
     * @method _IH_Ticket_QB whereCreatedAt($value)
     * @method _IH_Ticket_QB whereUpdatedAt($value)
     * @method _IH_Ticket_QB whereDeletedAt($value)
     * @method _IH_Ticket_QB whereWebinarId($value)
     * @method _IH_Ticket_QB whereCreatorId($value)
     * @method _IH_Ticket_QB whereOrder($value)
     * @method _IH_Ticket_QB whereBundleId($value)
     * @method Ticket baseSole(array|string $columns = ['*'])
     * @method Ticket create(array $attributes = [])
     * @method _IH_Ticket_C|Ticket[] cursor()
     * @method Ticket|null|_IH_Ticket_C|Ticket[] find($id, array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrFail($id, array|string $columns = ['*'])
     * @method Ticket|_IH_Ticket_C|Ticket[] findOrNew($id, array|string $columns = ['*'])
     * @method Ticket first(array|string $columns = ['*'])
     * @method Ticket firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Ticket firstOrCreate(array $attributes = [], array $values = [])
     * @method Ticket firstOrFail(array|string $columns = ['*'])
     * @method Ticket firstOrNew(array $attributes = [], array $values = [])
     * @method Ticket firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Ticket forceCreate(array $attributes)
     * @method _IH_Ticket_C|Ticket[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Ticket_C|Ticket[] get(array|string $columns = ['*'])
     * @method Ticket getModel()
     * @method Ticket[] getModels(array|string $columns = ['*'])
     * @method _IH_Ticket_C|Ticket[] hydrate(array $items)
     * @method _IH_Ticket_C|Ticket[] lazy(int $chunkSize = 1000)
     * @method _IH_Ticket_C|Ticket[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Ticket_C|Ticket[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Ticket make(array $attributes = [])
     * @method Ticket newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Ticket[]|_IH_Ticket_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ticket restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Ticket[]|_IH_Ticket_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Ticket sole(array|string $columns = ['*'])
     * @method Ticket updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Ticket_QB listsTranslations(string $translationField)
     * @method _IH_Ticket_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Ticket_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Ticket_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Ticket_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Ticket_QB translated()
     * @method _IH_Ticket_QB translatedIn(null|string $locale = null)
     * @method _IH_Ticket_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Ticket_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Ticket_QB withTranslation()
     */
    class _IH_Ticket_QB extends _BaseBuilder {}
    
    /**
     * @method TrendCategory|null getOrPut($key, $value)
     * @method TrendCategory|$this shift(int $count = 1)
     * @method TrendCategory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TrendCategory|$this pop(int $count = 1)
     * @method TrendCategory|null pull($key, \Closure $default = null)
     * @method TrendCategory|null last(callable $callback = null, \Closure $default = null)
     * @method TrendCategory|$this random(callable|int|null $number = null)
     * @method TrendCategory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TrendCategory|null get($key, \Closure $default = null)
     * @method TrendCategory|null first(callable $callback = null, \Closure $default = null)
     * @method TrendCategory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TrendCategory|null find($key, $default = null)
     * @method TrendCategory[] all()
     */
    class _IH_TrendCategory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TrendCategory[][]|Collection<_IH_TrendCategory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TrendCategory_QB whereId($value)
     * @method _IH_TrendCategory_QB whereCategoryId($value)
     * @method _IH_TrendCategory_QB whereIcon($value)
     * @method _IH_TrendCategory_QB whereColor($value)
     * @method _IH_TrendCategory_QB whereCreatedAt($value)
     * @method TrendCategory baseSole(array|string $columns = ['*'])
     * @method TrendCategory create(array $attributes = [])
     * @method _IH_TrendCategory_C|TrendCategory[] cursor()
     * @method TrendCategory|null|_IH_TrendCategory_C|TrendCategory[] find($id, array|string $columns = ['*'])
     * @method _IH_TrendCategory_C|TrendCategory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TrendCategory|_IH_TrendCategory_C|TrendCategory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TrendCategory|_IH_TrendCategory_C|TrendCategory[] findOrFail($id, array|string $columns = ['*'])
     * @method TrendCategory|_IH_TrendCategory_C|TrendCategory[] findOrNew($id, array|string $columns = ['*'])
     * @method TrendCategory first(array|string $columns = ['*'])
     * @method TrendCategory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TrendCategory firstOrCreate(array $attributes = [], array $values = [])
     * @method TrendCategory firstOrFail(array|string $columns = ['*'])
     * @method TrendCategory firstOrNew(array $attributes = [], array $values = [])
     * @method TrendCategory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TrendCategory forceCreate(array $attributes)
     * @method _IH_TrendCategory_C|TrendCategory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TrendCategory_C|TrendCategory[] get(array|string $columns = ['*'])
     * @method TrendCategory getModel()
     * @method TrendCategory[] getModels(array|string $columns = ['*'])
     * @method _IH_TrendCategory_C|TrendCategory[] hydrate(array $items)
     * @method _IH_TrendCategory_C|TrendCategory[] lazy(int $chunkSize = 1000)
     * @method _IH_TrendCategory_C|TrendCategory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TrendCategory_C|TrendCategory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TrendCategory make(array $attributes = [])
     * @method TrendCategory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TrendCategory[]|_IH_TrendCategory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TrendCategory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TrendCategory[]|_IH_TrendCategory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TrendCategory sole(array|string $columns = ['*'])
     * @method TrendCategory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TrendCategory_QB extends _BaseBuilder {}
    
    /**
     * @method UpcomingCourseFilterOption|null getOrPut($key, $value)
     * @method UpcomingCourseFilterOption|$this shift(int $count = 1)
     * @method UpcomingCourseFilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseFilterOption|$this pop(int $count = 1)
     * @method UpcomingCourseFilterOption|null pull($key, \Closure $default = null)
     * @method UpcomingCourseFilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseFilterOption|$this random(callable|int|null $number = null)
     * @method UpcomingCourseFilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseFilterOption|null get($key, \Closure $default = null)
     * @method UpcomingCourseFilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseFilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UpcomingCourseFilterOption|null find($key, $default = null)
     * @method UpcomingCourseFilterOption[] all()
     */
    class _IH_UpcomingCourseFilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UpcomingCourseFilterOption[][]|Collection<_IH_UpcomingCourseFilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UpcomingCourseFilterOption_QB whereId($value)
     * @method _IH_UpcomingCourseFilterOption_QB whereUpcomingCourseId($value)
     * @method _IH_UpcomingCourseFilterOption_QB whereFilterOptionId($value)
     * @method UpcomingCourseFilterOption baseSole(array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption create(array $attributes = [])
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] cursor()
     * @method UpcomingCourseFilterOption|null|_IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption|_IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseFilterOption|_IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption|_IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption first(array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseFilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method UpcomingCourseFilterOption firstOrFail(array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method UpcomingCourseFilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UpcomingCourseFilterOption forceCreate(array $attributes)
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] get(array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption getModel()
     * @method UpcomingCourseFilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] hydrate(array $items)
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UpcomingCourseFilterOption make(array $attributes = [])
     * @method UpcomingCourseFilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UpcomingCourseFilterOption[]|_IH_UpcomingCourseFilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseFilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UpcomingCourseFilterOption[]|_IH_UpcomingCourseFilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseFilterOption sole(array|string $columns = ['*'])
     * @method UpcomingCourseFilterOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UpcomingCourseFilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method UpcomingCourseFollower|null getOrPut($key, $value)
     * @method UpcomingCourseFollower|$this shift(int $count = 1)
     * @method UpcomingCourseFollower|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseFollower|$this pop(int $count = 1)
     * @method UpcomingCourseFollower|null pull($key, \Closure $default = null)
     * @method UpcomingCourseFollower|null last(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseFollower|$this random(callable|int|null $number = null)
     * @method UpcomingCourseFollower|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseFollower|null get($key, \Closure $default = null)
     * @method UpcomingCourseFollower|null first(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseFollower|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UpcomingCourseFollower|null find($key, $default = null)
     * @method UpcomingCourseFollower[] all()
     */
    class _IH_UpcomingCourseFollower_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UpcomingCourseFollower[][]|Collection<_IH_UpcomingCourseFollower_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UpcomingCourseFollower_QB whereId($value)
     * @method _IH_UpcomingCourseFollower_QB whereUpcomingCourseId($value)
     * @method _IH_UpcomingCourseFollower_QB whereUserId($value)
     * @method _IH_UpcomingCourseFollower_QB whereCreatedAt($value)
     * @method UpcomingCourseFollower baseSole(array|string $columns = ['*'])
     * @method UpcomingCourseFollower create(array $attributes = [])
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] cursor()
     * @method UpcomingCourseFollower|null|_IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] find($id, array|string $columns = ['*'])
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UpcomingCourseFollower|_IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseFollower|_IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] findOrFail($id, array|string $columns = ['*'])
     * @method UpcomingCourseFollower|_IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] findOrNew($id, array|string $columns = ['*'])
     * @method UpcomingCourseFollower first(array|string $columns = ['*'])
     * @method UpcomingCourseFollower firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseFollower firstOrCreate(array $attributes = [], array $values = [])
     * @method UpcomingCourseFollower firstOrFail(array|string $columns = ['*'])
     * @method UpcomingCourseFollower firstOrNew(array $attributes = [], array $values = [])
     * @method UpcomingCourseFollower firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UpcomingCourseFollower forceCreate(array $attributes)
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] get(array|string $columns = ['*'])
     * @method UpcomingCourseFollower getModel()
     * @method UpcomingCourseFollower[] getModels(array|string $columns = ['*'])
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] hydrate(array $items)
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] lazy(int $chunkSize = 1000)
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UpcomingCourseFollower make(array $attributes = [])
     * @method UpcomingCourseFollower newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UpcomingCourseFollower[]|_IH_UpcomingCourseFollower_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseFollower restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UpcomingCourseFollower[]|_IH_UpcomingCourseFollower_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseFollower sole(array|string $columns = ['*'])
     * @method UpcomingCourseFollower updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UpcomingCourseFollower_QB extends _BaseBuilder {}
    
    /**
     * @method UpcomingCourseReport|null getOrPut($key, $value)
     * @method UpcomingCourseReport|$this shift(int $count = 1)
     * @method UpcomingCourseReport|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseReport|$this pop(int $count = 1)
     * @method UpcomingCourseReport|null pull($key, \Closure $default = null)
     * @method UpcomingCourseReport|null last(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseReport|$this random(callable|int|null $number = null)
     * @method UpcomingCourseReport|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseReport|null get($key, \Closure $default = null)
     * @method UpcomingCourseReport|null first(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseReport|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UpcomingCourseReport|null find($key, $default = null)
     * @method UpcomingCourseReport[] all()
     */
    class _IH_UpcomingCourseReport_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UpcomingCourseReport[][]|Collection<_IH_UpcomingCourseReport_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UpcomingCourseReport_QB whereId($value)
     * @method _IH_UpcomingCourseReport_QB whereUpcomingCourseId($value)
     * @method _IH_UpcomingCourseReport_QB whereUserId($value)
     * @method _IH_UpcomingCourseReport_QB whereReason($value)
     * @method _IH_UpcomingCourseReport_QB whereMessage($value)
     * @method _IH_UpcomingCourseReport_QB whereCreatedAt($value)
     * @method UpcomingCourseReport baseSole(array|string $columns = ['*'])
     * @method UpcomingCourseReport create(array $attributes = [])
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] cursor()
     * @method UpcomingCourseReport|null|_IH_UpcomingCourseReport_C|UpcomingCourseReport[] find($id, array|string $columns = ['*'])
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UpcomingCourseReport|_IH_UpcomingCourseReport_C|UpcomingCourseReport[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseReport|_IH_UpcomingCourseReport_C|UpcomingCourseReport[] findOrFail($id, array|string $columns = ['*'])
     * @method UpcomingCourseReport|_IH_UpcomingCourseReport_C|UpcomingCourseReport[] findOrNew($id, array|string $columns = ['*'])
     * @method UpcomingCourseReport first(array|string $columns = ['*'])
     * @method UpcomingCourseReport firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseReport firstOrCreate(array $attributes = [], array $values = [])
     * @method UpcomingCourseReport firstOrFail(array|string $columns = ['*'])
     * @method UpcomingCourseReport firstOrNew(array $attributes = [], array $values = [])
     * @method UpcomingCourseReport firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UpcomingCourseReport forceCreate(array $attributes)
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] get(array|string $columns = ['*'])
     * @method UpcomingCourseReport getModel()
     * @method UpcomingCourseReport[] getModels(array|string $columns = ['*'])
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] hydrate(array $items)
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] lazy(int $chunkSize = 1000)
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UpcomingCourseReport_C|UpcomingCourseReport[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UpcomingCourseReport make(array $attributes = [])
     * @method UpcomingCourseReport newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UpcomingCourseReport[]|_IH_UpcomingCourseReport_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseReport restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UpcomingCourseReport[]|_IH_UpcomingCourseReport_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseReport sole(array|string $columns = ['*'])
     * @method UpcomingCourseReport updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UpcomingCourseReport_QB extends _BaseBuilder {}
    
    /**
     * @method UpcomingCourse|null getOrPut($key, $value)
     * @method UpcomingCourse|$this shift(int $count = 1)
     * @method UpcomingCourse|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourse|$this pop(int $count = 1)
     * @method UpcomingCourse|null pull($key, \Closure $default = null)
     * @method UpcomingCourse|null last(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourse|$this random(callable|int|null $number = null)
     * @method UpcomingCourse|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourse|null get($key, \Closure $default = null)
     * @method UpcomingCourse|null first(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourse|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UpcomingCourse|null find($key, $default = null)
     * @method UpcomingCourse[] all()
     */
    class _IH_UpcomingCourse_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UpcomingCourse[][]|Collection<_IH_UpcomingCourse_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UpcomingCourse_QB whereId($value)
     * @method _IH_UpcomingCourse_QB whereCreatorId($value)
     * @method _IH_UpcomingCourse_QB whereTeacherId($value)
     * @method _IH_UpcomingCourse_QB whereCategoryId($value)
     * @method _IH_UpcomingCourse_QB whereWebinarId($value)
     * @method _IH_UpcomingCourse_QB whereType($value)
     * @method _IH_UpcomingCourse_QB whereSlug($value)
     * @method _IH_UpcomingCourse_QB whereThumbnail($value)
     * @method _IH_UpcomingCourse_QB whereImageCover($value)
     * @method _IH_UpcomingCourse_QB whereVideoDemo($value)
     * @method _IH_UpcomingCourse_QB whereVideoDemoSource($value)
     * @method _IH_UpcomingCourse_QB wherePublishDate($value)
     * @method _IH_UpcomingCourse_QB whereTimezone($value)
     * @method _IH_UpcomingCourse_QB wherePoints($value)
     * @method _IH_UpcomingCourse_QB whereCapacity($value)
     * @method _IH_UpcomingCourse_QB wherePrice($value)
     * @method _IH_UpcomingCourse_QB whereDuration($value)
     * @method _IH_UpcomingCourse_QB whereSections($value)
     * @method _IH_UpcomingCourse_QB whereParts($value)
     * @method _IH_UpcomingCourse_QB whereCourseProgress($value)
     * @method _IH_UpcomingCourse_QB whereSupport($value)
     * @method _IH_UpcomingCourse_QB whereCertificate($value)
     * @method _IH_UpcomingCourse_QB whereIncludeQuizzes($value)
     * @method _IH_UpcomingCourse_QB whereDownloadable($value)
     * @method _IH_UpcomingCourse_QB whereForum($value)
     * @method _IH_UpcomingCourse_QB whereMessageForReviewer($value)
     * @method _IH_UpcomingCourse_QB whereStatus($value)
     * @method _IH_UpcomingCourse_QB whereCreatedAt($value)
     * @method UpcomingCourse baseSole(array|string $columns = ['*'])
     * @method UpcomingCourse create(array $attributes = [])
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] cursor()
     * @method UpcomingCourse|null|_IH_UpcomingCourse_C|UpcomingCourse[] find($id, array|string $columns = ['*'])
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UpcomingCourse|_IH_UpcomingCourse_C|UpcomingCourse[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourse|_IH_UpcomingCourse_C|UpcomingCourse[] findOrFail($id, array|string $columns = ['*'])
     * @method UpcomingCourse|_IH_UpcomingCourse_C|UpcomingCourse[] findOrNew($id, array|string $columns = ['*'])
     * @method UpcomingCourse first(array|string $columns = ['*'])
     * @method UpcomingCourse firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourse firstOrCreate(array $attributes = [], array $values = [])
     * @method UpcomingCourse firstOrFail(array|string $columns = ['*'])
     * @method UpcomingCourse firstOrNew(array $attributes = [], array $values = [])
     * @method UpcomingCourse firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UpcomingCourse forceCreate(array $attributes)
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] get(array|string $columns = ['*'])
     * @method UpcomingCourse getModel()
     * @method UpcomingCourse[] getModels(array|string $columns = ['*'])
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] hydrate(array $items)
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] lazy(int $chunkSize = 1000)
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UpcomingCourse_C|UpcomingCourse[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UpcomingCourse make(array $attributes = [])
     * @method UpcomingCourse newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UpcomingCourse[]|_IH_UpcomingCourse_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourse restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UpcomingCourse[]|_IH_UpcomingCourse_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourse sole(array|string $columns = ['*'])
     * @method UpcomingCourse updateOrCreate(array $attributes, array $values = [])
     * @method _IH_UpcomingCourse_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_UpcomingCourse_QB listsTranslations(string $translationField)
     * @method _IH_UpcomingCourse_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_UpcomingCourse_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_UpcomingCourse_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UpcomingCourse_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_UpcomingCourse_QB translated()
     * @method _IH_UpcomingCourse_QB translatedIn(null|string $locale = null)
     * @method _IH_UpcomingCourse_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_UpcomingCourse_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UpcomingCourse_QB withTranslation()
     * @method _IH_UpcomingCourse_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_UpcomingCourse_QB extends _BaseBuilder {}
    
    /**
     * @method UserBadge|null getOrPut($key, $value)
     * @method UserBadge|$this shift(int $count = 1)
     * @method UserBadge|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserBadge|$this pop(int $count = 1)
     * @method UserBadge|null pull($key, \Closure $default = null)
     * @method UserBadge|null last(callable $callback = null, \Closure $default = null)
     * @method UserBadge|$this random(callable|int|null $number = null)
     * @method UserBadge|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserBadge|null get($key, \Closure $default = null)
     * @method UserBadge|null first(callable $callback = null, \Closure $default = null)
     * @method UserBadge|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserBadge|null find($key, $default = null)
     * @method UserBadge[] all()
     */
    class _IH_UserBadge_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserBadge[][]|Collection<_IH_UserBadge_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserBadge_QB whereId($value)
     * @method _IH_UserBadge_QB whereUserId($value)
     * @method _IH_UserBadge_QB whereBadgeId($value)
     * @method _IH_UserBadge_QB whereCreatedAt($value)
     * @method UserBadge baseSole(array|string $columns = ['*'])
     * @method UserBadge create(array $attributes = [])
     * @method _IH_UserBadge_C|UserBadge[] cursor()
     * @method UserBadge|null|_IH_UserBadge_C|UserBadge[] find($id, array|string $columns = ['*'])
     * @method _IH_UserBadge_C|UserBadge[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserBadge|_IH_UserBadge_C|UserBadge[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBadge|_IH_UserBadge_C|UserBadge[] findOrFail($id, array|string $columns = ['*'])
     * @method UserBadge|_IH_UserBadge_C|UserBadge[] findOrNew($id, array|string $columns = ['*'])
     * @method UserBadge first(array|string $columns = ['*'])
     * @method UserBadge firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBadge firstOrCreate(array $attributes = [], array $values = [])
     * @method UserBadge firstOrFail(array|string $columns = ['*'])
     * @method UserBadge firstOrNew(array $attributes = [], array $values = [])
     * @method UserBadge firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserBadge forceCreate(array $attributes)
     * @method _IH_UserBadge_C|UserBadge[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserBadge_C|UserBadge[] get(array|string $columns = ['*'])
     * @method UserBadge getModel()
     * @method UserBadge[] getModels(array|string $columns = ['*'])
     * @method _IH_UserBadge_C|UserBadge[] hydrate(array $items)
     * @method _IH_UserBadge_C|UserBadge[] lazy(int $chunkSize = 1000)
     * @method _IH_UserBadge_C|UserBadge[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserBadge_C|UserBadge[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserBadge make(array $attributes = [])
     * @method UserBadge newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserBadge[]|_IH_UserBadge_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBadge restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserBadge[]|_IH_UserBadge_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBadge sole(array|string $columns = ['*'])
     * @method UserBadge updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserBadge_QB extends _BaseBuilder {}
    
    /**
     * @method UserBankSpecification|null getOrPut($key, $value)
     * @method UserBankSpecification|$this shift(int $count = 1)
     * @method UserBankSpecification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankSpecification|$this pop(int $count = 1)
     * @method UserBankSpecification|null pull($key, \Closure $default = null)
     * @method UserBankSpecification|null last(callable $callback = null, \Closure $default = null)
     * @method UserBankSpecification|$this random(callable|int|null $number = null)
     * @method UserBankSpecification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankSpecification|null get($key, \Closure $default = null)
     * @method UserBankSpecification|null first(callable $callback = null, \Closure $default = null)
     * @method UserBankSpecification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserBankSpecification|null find($key, $default = null)
     * @method UserBankSpecification[] all()
     */
    class _IH_UserBankSpecification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserBankSpecification[][]|Collection<_IH_UserBankSpecification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserBankSpecification_QB whereId($value)
     * @method _IH_UserBankSpecification_QB whereUserBankId($value)
     * @method UserBankSpecification baseSole(array|string $columns = ['*'])
     * @method UserBankSpecification create(array $attributes = [])
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] cursor()
     * @method UserBankSpecification|null|_IH_UserBankSpecification_C|UserBankSpecification[] find($id, array|string $columns = ['*'])
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserBankSpecification|_IH_UserBankSpecification_C|UserBankSpecification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankSpecification|_IH_UserBankSpecification_C|UserBankSpecification[] findOrFail($id, array|string $columns = ['*'])
     * @method UserBankSpecification|_IH_UserBankSpecification_C|UserBankSpecification[] findOrNew($id, array|string $columns = ['*'])
     * @method UserBankSpecification first(array|string $columns = ['*'])
     * @method UserBankSpecification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankSpecification firstOrCreate(array $attributes = [], array $values = [])
     * @method UserBankSpecification firstOrFail(array|string $columns = ['*'])
     * @method UserBankSpecification firstOrNew(array $attributes = [], array $values = [])
     * @method UserBankSpecification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserBankSpecification forceCreate(array $attributes)
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] get(array|string $columns = ['*'])
     * @method UserBankSpecification getModel()
     * @method UserBankSpecification[] getModels(array|string $columns = ['*'])
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] hydrate(array $items)
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] lazy(int $chunkSize = 1000)
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserBankSpecification_C|UserBankSpecification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserBankSpecification make(array $attributes = [])
     * @method UserBankSpecification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserBankSpecification[]|_IH_UserBankSpecification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankSpecification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserBankSpecification[]|_IH_UserBankSpecification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankSpecification sole(array|string $columns = ['*'])
     * @method UserBankSpecification updateOrCreate(array $attributes, array $values = [])
     * @method _IH_UserBankSpecification_QB listsTranslations(string $translationField)
     * @method _IH_UserBankSpecification_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_UserBankSpecification_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBankSpecification_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBankSpecification_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_UserBankSpecification_QB translated()
     * @method _IH_UserBankSpecification_QB translatedIn(null|string $locale = null)
     * @method _IH_UserBankSpecification_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_UserBankSpecification_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBankSpecification_QB withTranslation()
     */
    class _IH_UserBankSpecification_QB extends _BaseBuilder {}
    
    /**
     * @method UserBank|null getOrPut($key, $value)
     * @method UserBank|$this shift(int $count = 1)
     * @method UserBank|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserBank|$this pop(int $count = 1)
     * @method UserBank|null pull($key, \Closure $default = null)
     * @method UserBank|null last(callable $callback = null, \Closure $default = null)
     * @method UserBank|$this random(callable|int|null $number = null)
     * @method UserBank|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserBank|null get($key, \Closure $default = null)
     * @method UserBank|null first(callable $callback = null, \Closure $default = null)
     * @method UserBank|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserBank|null find($key, $default = null)
     * @method UserBank[] all()
     */
    class _IH_UserBank_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserBank[][]|Collection<_IH_UserBank_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserBank_QB whereId($value)
     * @method _IH_UserBank_QB whereLogo($value)
     * @method _IH_UserBank_QB whereCreatedAt($value)
     * @method UserBank baseSole(array|string $columns = ['*'])
     * @method UserBank create(array $attributes = [])
     * @method _IH_UserBank_C|UserBank[] cursor()
     * @method UserBank|null|_IH_UserBank_C|UserBank[] find($id, array|string $columns = ['*'])
     * @method _IH_UserBank_C|UserBank[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserBank|_IH_UserBank_C|UserBank[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBank|_IH_UserBank_C|UserBank[] findOrFail($id, array|string $columns = ['*'])
     * @method UserBank|_IH_UserBank_C|UserBank[] findOrNew($id, array|string $columns = ['*'])
     * @method UserBank first(array|string $columns = ['*'])
     * @method UserBank firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBank firstOrCreate(array $attributes = [], array $values = [])
     * @method UserBank firstOrFail(array|string $columns = ['*'])
     * @method UserBank firstOrNew(array $attributes = [], array $values = [])
     * @method UserBank firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserBank forceCreate(array $attributes)
     * @method _IH_UserBank_C|UserBank[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserBank_C|UserBank[] get(array|string $columns = ['*'])
     * @method UserBank getModel()
     * @method UserBank[] getModels(array|string $columns = ['*'])
     * @method _IH_UserBank_C|UserBank[] hydrate(array $items)
     * @method _IH_UserBank_C|UserBank[] lazy(int $chunkSize = 1000)
     * @method _IH_UserBank_C|UserBank[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserBank_C|UserBank[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserBank make(array $attributes = [])
     * @method UserBank newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserBank[]|_IH_UserBank_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBank restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserBank[]|_IH_UserBank_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBank sole(array|string $columns = ['*'])
     * @method UserBank updateOrCreate(array $attributes, array $values = [])
     * @method _IH_UserBank_QB listsTranslations(string $translationField)
     * @method _IH_UserBank_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_UserBank_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBank_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBank_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_UserBank_QB translated()
     * @method _IH_UserBank_QB translatedIn(null|string $locale = null)
     * @method _IH_UserBank_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_UserBank_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserBank_QB withTranslation()
     */
    class _IH_UserBank_QB extends _BaseBuilder {}
    
    /**
     * @method UserCommission|null getOrPut($key, $value)
     * @method UserCommission|$this shift(int $count = 1)
     * @method UserCommission|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserCommission|$this pop(int $count = 1)
     * @method UserCommission|null pull($key, \Closure $default = null)
     * @method UserCommission|null last(callable $callback = null, \Closure $default = null)
     * @method UserCommission|$this random(callable|int|null $number = null)
     * @method UserCommission|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserCommission|null get($key, \Closure $default = null)
     * @method UserCommission|null first(callable $callback = null, \Closure $default = null)
     * @method UserCommission|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserCommission|null find($key, $default = null)
     * @method UserCommission[] all()
     */
    class _IH_UserCommission_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserCommission[][]|Collection<_IH_UserCommission_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserCommission_QB whereId($value)
     * @method _IH_UserCommission_QB whereUserId($value)
     * @method _IH_UserCommission_QB whereUserGroupId($value)
     * @method _IH_UserCommission_QB whereSource($value)
     * @method _IH_UserCommission_QB whereType($value)
     * @method _IH_UserCommission_QB whereValue($value)
     * @method UserCommission baseSole(array|string $columns = ['*'])
     * @method UserCommission create(array $attributes = [])
     * @method _IH_UserCommission_C|UserCommission[] cursor()
     * @method UserCommission|null|_IH_UserCommission_C|UserCommission[] find($id, array|string $columns = ['*'])
     * @method _IH_UserCommission_C|UserCommission[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserCommission|_IH_UserCommission_C|UserCommission[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserCommission|_IH_UserCommission_C|UserCommission[] findOrFail($id, array|string $columns = ['*'])
     * @method UserCommission|_IH_UserCommission_C|UserCommission[] findOrNew($id, array|string $columns = ['*'])
     * @method UserCommission first(array|string $columns = ['*'])
     * @method UserCommission firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserCommission firstOrCreate(array $attributes = [], array $values = [])
     * @method UserCommission firstOrFail(array|string $columns = ['*'])
     * @method UserCommission firstOrNew(array $attributes = [], array $values = [])
     * @method UserCommission firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserCommission forceCreate(array $attributes)
     * @method _IH_UserCommission_C|UserCommission[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserCommission_C|UserCommission[] get(array|string $columns = ['*'])
     * @method UserCommission getModel()
     * @method UserCommission[] getModels(array|string $columns = ['*'])
     * @method _IH_UserCommission_C|UserCommission[] hydrate(array $items)
     * @method _IH_UserCommission_C|UserCommission[] lazy(int $chunkSize = 1000)
     * @method _IH_UserCommission_C|UserCommission[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserCommission_C|UserCommission[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserCommission make(array $attributes = [])
     * @method UserCommission newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserCommission[]|_IH_UserCommission_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserCommission restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserCommission[]|_IH_UserCommission_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserCommission sole(array|string $columns = ['*'])
     * @method UserCommission updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserCommission_QB extends _BaseBuilder {}
    
    /**
     * @method UserCookieSecurity|null getOrPut($key, $value)
     * @method UserCookieSecurity|$this shift(int $count = 1)
     * @method UserCookieSecurity|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserCookieSecurity|$this pop(int $count = 1)
     * @method UserCookieSecurity|null pull($key, \Closure $default = null)
     * @method UserCookieSecurity|null last(callable $callback = null, \Closure $default = null)
     * @method UserCookieSecurity|$this random(callable|int|null $number = null)
     * @method UserCookieSecurity|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserCookieSecurity|null get($key, \Closure $default = null)
     * @method UserCookieSecurity|null first(callable $callback = null, \Closure $default = null)
     * @method UserCookieSecurity|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserCookieSecurity|null find($key, $default = null)
     * @method UserCookieSecurity[] all()
     */
    class _IH_UserCookieSecurity_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserCookieSecurity[][]|Collection<_IH_UserCookieSecurity_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserCookieSecurity_QB whereId($value)
     * @method _IH_UserCookieSecurity_QB whereUserId($value)
     * @method _IH_UserCookieSecurity_QB whereType($value)
     * @method _IH_UserCookieSecurity_QB whereSettings($value)
     * @method _IH_UserCookieSecurity_QB whereCreatedAt($value)
     * @method UserCookieSecurity baseSole(array|string $columns = ['*'])
     * @method UserCookieSecurity create(array $attributes = [])
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] cursor()
     * @method UserCookieSecurity|null|_IH_UserCookieSecurity_C|UserCookieSecurity[] find($id, array|string $columns = ['*'])
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserCookieSecurity|_IH_UserCookieSecurity_C|UserCookieSecurity[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserCookieSecurity|_IH_UserCookieSecurity_C|UserCookieSecurity[] findOrFail($id, array|string $columns = ['*'])
     * @method UserCookieSecurity|_IH_UserCookieSecurity_C|UserCookieSecurity[] findOrNew($id, array|string $columns = ['*'])
     * @method UserCookieSecurity first(array|string $columns = ['*'])
     * @method UserCookieSecurity firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserCookieSecurity firstOrCreate(array $attributes = [], array $values = [])
     * @method UserCookieSecurity firstOrFail(array|string $columns = ['*'])
     * @method UserCookieSecurity firstOrNew(array $attributes = [], array $values = [])
     * @method UserCookieSecurity firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserCookieSecurity forceCreate(array $attributes)
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] get(array|string $columns = ['*'])
     * @method UserCookieSecurity getModel()
     * @method UserCookieSecurity[] getModels(array|string $columns = ['*'])
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] hydrate(array $items)
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] lazy(int $chunkSize = 1000)
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserCookieSecurity_C|UserCookieSecurity[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserCookieSecurity make(array $attributes = [])
     * @method UserCookieSecurity newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserCookieSecurity[]|_IH_UserCookieSecurity_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserCookieSecurity restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserCookieSecurity[]|_IH_UserCookieSecurity_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserCookieSecurity sole(array|string $columns = ['*'])
     * @method UserCookieSecurity updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserCookieSecurity_QB extends _BaseBuilder {}
    
    /**
     * @method UserFormField|null getOrPut($key, $value)
     * @method UserFormField|$this shift(int $count = 1)
     * @method UserFormField|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserFormField|$this pop(int $count = 1)
     * @method UserFormField|null pull($key, \Closure $default = null)
     * @method UserFormField|null last(callable $callback = null, \Closure $default = null)
     * @method UserFormField|$this random(callable|int|null $number = null)
     * @method UserFormField|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserFormField|null get($key, \Closure $default = null)
     * @method UserFormField|null first(callable $callback = null, \Closure $default = null)
     * @method UserFormField|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserFormField|null find($key, $default = null)
     * @method UserFormField[] all()
     */
    class _IH_UserFormField_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserFormField[][]|Collection<_IH_UserFormField_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserFormField_QB whereId($value)
     * @method _IH_UserFormField_QB whereUserId($value)
     * @method _IH_UserFormField_QB whereBecomeInstructorId($value)
     * @method _IH_UserFormField_QB whereFormFieldId($value)
     * @method _IH_UserFormField_QB whereValue($value)
     * @method _IH_UserFormField_QB whereCreatedAt($value)
     * @method UserFormField baseSole(array|string $columns = ['*'])
     * @method UserFormField create(array $attributes = [])
     * @method _IH_UserFormField_C|UserFormField[] cursor()
     * @method UserFormField|null|_IH_UserFormField_C|UserFormField[] find($id, array|string $columns = ['*'])
     * @method _IH_UserFormField_C|UserFormField[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserFormField|_IH_UserFormField_C|UserFormField[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserFormField|_IH_UserFormField_C|UserFormField[] findOrFail($id, array|string $columns = ['*'])
     * @method UserFormField|_IH_UserFormField_C|UserFormField[] findOrNew($id, array|string $columns = ['*'])
     * @method UserFormField first(array|string $columns = ['*'])
     * @method UserFormField firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserFormField firstOrCreate(array $attributes = [], array $values = [])
     * @method UserFormField firstOrFail(array|string $columns = ['*'])
     * @method UserFormField firstOrNew(array $attributes = [], array $values = [])
     * @method UserFormField firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserFormField forceCreate(array $attributes)
     * @method _IH_UserFormField_C|UserFormField[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserFormField_C|UserFormField[] get(array|string $columns = ['*'])
     * @method UserFormField getModel()
     * @method UserFormField[] getModels(array|string $columns = ['*'])
     * @method _IH_UserFormField_C|UserFormField[] hydrate(array $items)
     * @method _IH_UserFormField_C|UserFormField[] lazy(int $chunkSize = 1000)
     * @method _IH_UserFormField_C|UserFormField[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserFormField_C|UserFormField[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserFormField make(array $attributes = [])
     * @method UserFormField newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserFormField[]|_IH_UserFormField_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserFormField restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserFormField[]|_IH_UserFormField_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserFormField sole(array|string $columns = ['*'])
     * @method UserFormField updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserFormField_QB extends _BaseBuilder {}
    
    /**
     * @method UserLoginHistory|null getOrPut($key, $value)
     * @method UserLoginHistory|$this shift(int $count = 1)
     * @method UserLoginHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserLoginHistory|$this pop(int $count = 1)
     * @method UserLoginHistory|null pull($key, \Closure $default = null)
     * @method UserLoginHistory|null last(callable $callback = null, \Closure $default = null)
     * @method UserLoginHistory|$this random(callable|int|null $number = null)
     * @method UserLoginHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserLoginHistory|null get($key, \Closure $default = null)
     * @method UserLoginHistory|null first(callable $callback = null, \Closure $default = null)
     * @method UserLoginHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserLoginHistory|null find($key, $default = null)
     * @method UserLoginHistory[] all()
     */
    class _IH_UserLoginHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserLoginHistory[][]|Collection<_IH_UserLoginHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserLoginHistory_QB whereId($value)
     * @method _IH_UserLoginHistory_QB whereUserId($value)
     * @method _IH_UserLoginHistory_QB whereBrowser($value)
     * @method _IH_UserLoginHistory_QB whereDevice($value)
     * @method _IH_UserLoginHistory_QB whereOs($value)
     * @method _IH_UserLoginHistory_QB whereIp($value)
     * @method _IH_UserLoginHistory_QB whereCountry($value)
     * @method _IH_UserLoginHistory_QB whereCity($value)
     * @method _IH_UserLoginHistory_QB whereLocation($value)
     * @method _IH_UserLoginHistory_QB whereSessionId($value)
     * @method _IH_UserLoginHistory_QB whereSessionStartAt($value)
     * @method _IH_UserLoginHistory_QB whereSessionEndAt($value)
     * @method _IH_UserLoginHistory_QB whereEndSessionType($value)
     * @method _IH_UserLoginHistory_QB whereCreatedAt($value)
     * @method UserLoginHistory baseSole(array|string $columns = ['*'])
     * @method UserLoginHistory create(array $attributes = [])
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] cursor()
     * @method UserLoginHistory|null|_IH_UserLoginHistory_C|UserLoginHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserLoginHistory|_IH_UserLoginHistory_C|UserLoginHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserLoginHistory|_IH_UserLoginHistory_C|UserLoginHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method UserLoginHistory|_IH_UserLoginHistory_C|UserLoginHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method UserLoginHistory first(array|string $columns = ['*'])
     * @method UserLoginHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserLoginHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method UserLoginHistory firstOrFail(array|string $columns = ['*'])
     * @method UserLoginHistory firstOrNew(array $attributes = [], array $values = [])
     * @method UserLoginHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserLoginHistory forceCreate(array $attributes)
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] get(array|string $columns = ['*'])
     * @method UserLoginHistory getModel()
     * @method UserLoginHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] hydrate(array $items)
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserLoginHistory_C|UserLoginHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserLoginHistory make(array $attributes = [])
     * @method UserLoginHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserLoginHistory[]|_IH_UserLoginHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserLoginHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserLoginHistory[]|_IH_UserLoginHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserLoginHistory sole(array|string $columns = ['*'])
     * @method UserLoginHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserLoginHistory_QB extends _BaseBuilder {}
    
    /**
     * @method UserMeta|null getOrPut($key, $value)
     * @method UserMeta|$this shift(int $count = 1)
     * @method UserMeta|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserMeta|$this pop(int $count = 1)
     * @method UserMeta|null pull($key, \Closure $default = null)
     * @method UserMeta|null last(callable $callback = null, \Closure $default = null)
     * @method UserMeta|$this random(callable|int|null $number = null)
     * @method UserMeta|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserMeta|null get($key, \Closure $default = null)
     * @method UserMeta|null first(callable $callback = null, \Closure $default = null)
     * @method UserMeta|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserMeta|null find($key, $default = null)
     * @method UserMeta[] all()
     */
    class _IH_UserMeta_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserMeta[][]|Collection<_IH_UserMeta_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserMeta_QB whereId($value)
     * @method _IH_UserMeta_QB whereUserId($value)
     * @method _IH_UserMeta_QB whereName($value)
     * @method _IH_UserMeta_QB whereValue($value)
     * @method UserMeta baseSole(array|string $columns = ['*'])
     * @method UserMeta create(array $attributes = [])
     * @method _IH_UserMeta_C|UserMeta[] cursor()
     * @method UserMeta|null|_IH_UserMeta_C|UserMeta[] find($id, array|string $columns = ['*'])
     * @method _IH_UserMeta_C|UserMeta[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOrFail($id, array|string $columns = ['*'])
     * @method UserMeta|_IH_UserMeta_C|UserMeta[] findOrNew($id, array|string $columns = ['*'])
     * @method UserMeta first(array|string $columns = ['*'])
     * @method UserMeta firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserMeta firstOrCreate(array $attributes = [], array $values = [])
     * @method UserMeta firstOrFail(array|string $columns = ['*'])
     * @method UserMeta firstOrNew(array $attributes = [], array $values = [])
     * @method UserMeta firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserMeta forceCreate(array $attributes)
     * @method _IH_UserMeta_C|UserMeta[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserMeta_C|UserMeta[] get(array|string $columns = ['*'])
     * @method UserMeta getModel()
     * @method UserMeta[] getModels(array|string $columns = ['*'])
     * @method _IH_UserMeta_C|UserMeta[] hydrate(array $items)
     * @method _IH_UserMeta_C|UserMeta[] lazy(int $chunkSize = 1000)
     * @method _IH_UserMeta_C|UserMeta[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserMeta_C|UserMeta[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserMeta make(array $attributes = [])
     * @method UserMeta newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserMeta[]|_IH_UserMeta_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserMeta restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserMeta[]|_IH_UserMeta_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserMeta sole(array|string $columns = ['*'])
     * @method UserMeta updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserMeta_QB extends _BaseBuilder {}
    
    /**
     * @method UserOccupation|null getOrPut($key, $value)
     * @method UserOccupation|$this shift(int $count = 1)
     * @method UserOccupation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserOccupation|$this pop(int $count = 1)
     * @method UserOccupation|null pull($key, \Closure $default = null)
     * @method UserOccupation|null last(callable $callback = null, \Closure $default = null)
     * @method UserOccupation|$this random(callable|int|null $number = null)
     * @method UserOccupation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserOccupation|null get($key, \Closure $default = null)
     * @method UserOccupation|null first(callable $callback = null, \Closure $default = null)
     * @method UserOccupation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserOccupation|null find($key, $default = null)
     * @method UserOccupation[] all()
     */
    class _IH_UserOccupation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserOccupation[][]|Collection<_IH_UserOccupation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserOccupation_QB whereId($value)
     * @method _IH_UserOccupation_QB whereUserId($value)
     * @method _IH_UserOccupation_QB whereCategoryId($value)
     * @method UserOccupation baseSole(array|string $columns = ['*'])
     * @method UserOccupation create(array $attributes = [])
     * @method _IH_UserOccupation_C|UserOccupation[] cursor()
     * @method UserOccupation|null|_IH_UserOccupation_C|UserOccupation[] find($id, array|string $columns = ['*'])
     * @method _IH_UserOccupation_C|UserOccupation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserOccupation|_IH_UserOccupation_C|UserOccupation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserOccupation|_IH_UserOccupation_C|UserOccupation[] findOrFail($id, array|string $columns = ['*'])
     * @method UserOccupation|_IH_UserOccupation_C|UserOccupation[] findOrNew($id, array|string $columns = ['*'])
     * @method UserOccupation first(array|string $columns = ['*'])
     * @method UserOccupation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserOccupation firstOrCreate(array $attributes = [], array $values = [])
     * @method UserOccupation firstOrFail(array|string $columns = ['*'])
     * @method UserOccupation firstOrNew(array $attributes = [], array $values = [])
     * @method UserOccupation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserOccupation forceCreate(array $attributes)
     * @method _IH_UserOccupation_C|UserOccupation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserOccupation_C|UserOccupation[] get(array|string $columns = ['*'])
     * @method UserOccupation getModel()
     * @method UserOccupation[] getModels(array|string $columns = ['*'])
     * @method _IH_UserOccupation_C|UserOccupation[] hydrate(array $items)
     * @method _IH_UserOccupation_C|UserOccupation[] lazy(int $chunkSize = 1000)
     * @method _IH_UserOccupation_C|UserOccupation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserOccupation_C|UserOccupation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserOccupation make(array $attributes = [])
     * @method UserOccupation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserOccupation[]|_IH_UserOccupation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserOccupation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserOccupation[]|_IH_UserOccupation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserOccupation sole(array|string $columns = ['*'])
     * @method UserOccupation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserOccupation_QB extends _BaseBuilder {}
    
    /**
     * @method UserProfileAttachment|null getOrPut($key, $value)
     * @method UserProfileAttachment|$this shift(int $count = 1)
     * @method UserProfileAttachment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserProfileAttachment|$this pop(int $count = 1)
     * @method UserProfileAttachment|null pull($key, \Closure $default = null)
     * @method UserProfileAttachment|null last(callable $callback = null, \Closure $default = null)
     * @method UserProfileAttachment|$this random(callable|int|null $number = null)
     * @method UserProfileAttachment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserProfileAttachment|null get($key, \Closure $default = null)
     * @method UserProfileAttachment|null first(callable $callback = null, \Closure $default = null)
     * @method UserProfileAttachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserProfileAttachment|null find($key, $default = null)
     * @method UserProfileAttachment[] all()
     */
    class _IH_UserProfileAttachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserProfileAttachment[][]|Collection<_IH_UserProfileAttachment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserProfileAttachment_QB whereId($value)
     * @method _IH_UserProfileAttachment_QB whereUserId($value)
     * @method _IH_UserProfileAttachment_QB whereFileType($value)
     * @method _IH_UserProfileAttachment_QB whereAttachment($value)
     * @method _IH_UserProfileAttachment_QB whereCreatedAt($value)
     * @method UserProfileAttachment baseSole(array|string $columns = ['*'])
     * @method UserProfileAttachment create(array $attributes = [])
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] cursor()
     * @method UserProfileAttachment|null|_IH_UserProfileAttachment_C|UserProfileAttachment[] find($id, array|string $columns = ['*'])
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserProfileAttachment|_IH_UserProfileAttachment_C|UserProfileAttachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserProfileAttachment|_IH_UserProfileAttachment_C|UserProfileAttachment[] findOrFail($id, array|string $columns = ['*'])
     * @method UserProfileAttachment|_IH_UserProfileAttachment_C|UserProfileAttachment[] findOrNew($id, array|string $columns = ['*'])
     * @method UserProfileAttachment first(array|string $columns = ['*'])
     * @method UserProfileAttachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserProfileAttachment firstOrCreate(array $attributes = [], array $values = [])
     * @method UserProfileAttachment firstOrFail(array|string $columns = ['*'])
     * @method UserProfileAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method UserProfileAttachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserProfileAttachment forceCreate(array $attributes)
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] get(array|string $columns = ['*'])
     * @method UserProfileAttachment getModel()
     * @method UserProfileAttachment[] getModels(array|string $columns = ['*'])
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] hydrate(array $items)
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] lazy(int $chunkSize = 1000)
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserProfileAttachment_C|UserProfileAttachment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserProfileAttachment make(array $attributes = [])
     * @method UserProfileAttachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserProfileAttachment[]|_IH_UserProfileAttachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserProfileAttachment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserProfileAttachment[]|_IH_UserProfileAttachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserProfileAttachment sole(array|string $columns = ['*'])
     * @method UserProfileAttachment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_UserProfileAttachment_QB listsTranslations(string $translationField)
     * @method _IH_UserProfileAttachment_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_UserProfileAttachment_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserProfileAttachment_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserProfileAttachment_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_UserProfileAttachment_QB translated()
     * @method _IH_UserProfileAttachment_QB translatedIn(null|string $locale = null)
     * @method _IH_UserProfileAttachment_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_UserProfileAttachment_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_UserProfileAttachment_QB withTranslation()
     */
    class _IH_UserProfileAttachment_QB extends _BaseBuilder {}
    
    /**
     * @method UserRegistrationPackage|null getOrPut($key, $value)
     * @method UserRegistrationPackage|$this shift(int $count = 1)
     * @method UserRegistrationPackage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserRegistrationPackage|$this pop(int $count = 1)
     * @method UserRegistrationPackage|null pull($key, \Closure $default = null)
     * @method UserRegistrationPackage|null last(callable $callback = null, \Closure $default = null)
     * @method UserRegistrationPackage|$this random(callable|int|null $number = null)
     * @method UserRegistrationPackage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserRegistrationPackage|null get($key, \Closure $default = null)
     * @method UserRegistrationPackage|null first(callable $callback = null, \Closure $default = null)
     * @method UserRegistrationPackage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserRegistrationPackage|null find($key, $default = null)
     * @method UserRegistrationPackage[] all()
     */
    class _IH_UserRegistrationPackage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserRegistrationPackage[][]|Collection<_IH_UserRegistrationPackage_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserRegistrationPackage_QB whereId($value)
     * @method _IH_UserRegistrationPackage_QB whereUserId($value)
     * @method _IH_UserRegistrationPackage_QB whereInstructorsCount($value)
     * @method _IH_UserRegistrationPackage_QB whereStudentsCount($value)
     * @method _IH_UserRegistrationPackage_QB whereCoursesCapacity($value)
     * @method _IH_UserRegistrationPackage_QB whereCoursesCount($value)
     * @method _IH_UserRegistrationPackage_QB whereMeetingCount($value)
     * @method _IH_UserRegistrationPackage_QB whereStatus($value)
     * @method _IH_UserRegistrationPackage_QB whereCreatedAt($value)
     * @method UserRegistrationPackage baseSole(array|string $columns = ['*'])
     * @method UserRegistrationPackage create(array $attributes = [])
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] cursor()
     * @method UserRegistrationPackage|null|_IH_UserRegistrationPackage_C|UserRegistrationPackage[] find($id, array|string $columns = ['*'])
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserRegistrationPackage|_IH_UserRegistrationPackage_C|UserRegistrationPackage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserRegistrationPackage|_IH_UserRegistrationPackage_C|UserRegistrationPackage[] findOrFail($id, array|string $columns = ['*'])
     * @method UserRegistrationPackage|_IH_UserRegistrationPackage_C|UserRegistrationPackage[] findOrNew($id, array|string $columns = ['*'])
     * @method UserRegistrationPackage first(array|string $columns = ['*'])
     * @method UserRegistrationPackage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserRegistrationPackage firstOrCreate(array $attributes = [], array $values = [])
     * @method UserRegistrationPackage firstOrFail(array|string $columns = ['*'])
     * @method UserRegistrationPackage firstOrNew(array $attributes = [], array $values = [])
     * @method UserRegistrationPackage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserRegistrationPackage forceCreate(array $attributes)
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] get(array|string $columns = ['*'])
     * @method UserRegistrationPackage getModel()
     * @method UserRegistrationPackage[] getModels(array|string $columns = ['*'])
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] hydrate(array $items)
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] lazy(int $chunkSize = 1000)
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserRegistrationPackage_C|UserRegistrationPackage[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserRegistrationPackage make(array $attributes = [])
     * @method UserRegistrationPackage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserRegistrationPackage[]|_IH_UserRegistrationPackage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserRegistrationPackage restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserRegistrationPackage[]|_IH_UserRegistrationPackage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserRegistrationPackage sole(array|string $columns = ['*'])
     * @method UserRegistrationPackage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserRegistrationPackage_QB extends _BaseBuilder {}
    
    /**
     * @method UserSelectedBankSpecification|null getOrPut($key, $value)
     * @method UserSelectedBankSpecification|$this shift(int $count = 1)
     * @method UserSelectedBankSpecification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserSelectedBankSpecification|$this pop(int $count = 1)
     * @method UserSelectedBankSpecification|null pull($key, \Closure $default = null)
     * @method UserSelectedBankSpecification|null last(callable $callback = null, \Closure $default = null)
     * @method UserSelectedBankSpecification|$this random(callable|int|null $number = null)
     * @method UserSelectedBankSpecification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserSelectedBankSpecification|null get($key, \Closure $default = null)
     * @method UserSelectedBankSpecification|null first(callable $callback = null, \Closure $default = null)
     * @method UserSelectedBankSpecification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserSelectedBankSpecification|null find($key, $default = null)
     * @method UserSelectedBankSpecification[] all()
     */
    class _IH_UserSelectedBankSpecification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserSelectedBankSpecification[][]|Collection<_IH_UserSelectedBankSpecification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserSelectedBankSpecification_QB whereId($value)
     * @method _IH_UserSelectedBankSpecification_QB whereUserSelectedBankId($value)
     * @method _IH_UserSelectedBankSpecification_QB whereUserBankSpecificationId($value)
     * @method _IH_UserSelectedBankSpecification_QB whereValue($value)
     * @method UserSelectedBankSpecification baseSole(array|string $columns = ['*'])
     * @method UserSelectedBankSpecification create(array $attributes = [])
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] cursor()
     * @method UserSelectedBankSpecification|null|_IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] find($id, array|string $columns = ['*'])
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserSelectedBankSpecification|_IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserSelectedBankSpecification|_IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] findOrFail($id, array|string $columns = ['*'])
     * @method UserSelectedBankSpecification|_IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] findOrNew($id, array|string $columns = ['*'])
     * @method UserSelectedBankSpecification first(array|string $columns = ['*'])
     * @method UserSelectedBankSpecification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserSelectedBankSpecification firstOrCreate(array $attributes = [], array $values = [])
     * @method UserSelectedBankSpecification firstOrFail(array|string $columns = ['*'])
     * @method UserSelectedBankSpecification firstOrNew(array $attributes = [], array $values = [])
     * @method UserSelectedBankSpecification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserSelectedBankSpecification forceCreate(array $attributes)
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] get(array|string $columns = ['*'])
     * @method UserSelectedBankSpecification getModel()
     * @method UserSelectedBankSpecification[] getModels(array|string $columns = ['*'])
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] hydrate(array $items)
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] lazy(int $chunkSize = 1000)
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserSelectedBankSpecification make(array $attributes = [])
     * @method UserSelectedBankSpecification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserSelectedBankSpecification[]|_IH_UserSelectedBankSpecification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserSelectedBankSpecification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserSelectedBankSpecification[]|_IH_UserSelectedBankSpecification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserSelectedBankSpecification sole(array|string $columns = ['*'])
     * @method UserSelectedBankSpecification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserSelectedBankSpecification_QB extends _BaseBuilder {}
    
    /**
     * @method UserSelectedBank|null getOrPut($key, $value)
     * @method UserSelectedBank|$this shift(int $count = 1)
     * @method UserSelectedBank|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserSelectedBank|$this pop(int $count = 1)
     * @method UserSelectedBank|null pull($key, \Closure $default = null)
     * @method UserSelectedBank|null last(callable $callback = null, \Closure $default = null)
     * @method UserSelectedBank|$this random(callable|int|null $number = null)
     * @method UserSelectedBank|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserSelectedBank|null get($key, \Closure $default = null)
     * @method UserSelectedBank|null first(callable $callback = null, \Closure $default = null)
     * @method UserSelectedBank|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserSelectedBank|null find($key, $default = null)
     * @method UserSelectedBank[] all()
     */
    class _IH_UserSelectedBank_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserSelectedBank[][]|Collection<_IH_UserSelectedBank_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserSelectedBank_QB whereId($value)
     * @method _IH_UserSelectedBank_QB whereUserId($value)
     * @method _IH_UserSelectedBank_QB whereUserBankId($value)
     * @method UserSelectedBank baseSole(array|string $columns = ['*'])
     * @method UserSelectedBank create(array $attributes = [])
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] cursor()
     * @method UserSelectedBank|null|_IH_UserSelectedBank_C|UserSelectedBank[] find($id, array|string $columns = ['*'])
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserSelectedBank|_IH_UserSelectedBank_C|UserSelectedBank[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserSelectedBank|_IH_UserSelectedBank_C|UserSelectedBank[] findOrFail($id, array|string $columns = ['*'])
     * @method UserSelectedBank|_IH_UserSelectedBank_C|UserSelectedBank[] findOrNew($id, array|string $columns = ['*'])
     * @method UserSelectedBank first(array|string $columns = ['*'])
     * @method UserSelectedBank firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserSelectedBank firstOrCreate(array $attributes = [], array $values = [])
     * @method UserSelectedBank firstOrFail(array|string $columns = ['*'])
     * @method UserSelectedBank firstOrNew(array $attributes = [], array $values = [])
     * @method UserSelectedBank firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserSelectedBank forceCreate(array $attributes)
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] get(array|string $columns = ['*'])
     * @method UserSelectedBank getModel()
     * @method UserSelectedBank[] getModels(array|string $columns = ['*'])
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] hydrate(array $items)
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] lazy(int $chunkSize = 1000)
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserSelectedBank_C|UserSelectedBank[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserSelectedBank make(array $attributes = [])
     * @method UserSelectedBank newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserSelectedBank[]|_IH_UserSelectedBank_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserSelectedBank restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserSelectedBank[]|_IH_UserSelectedBank_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserSelectedBank sole(array|string $columns = ['*'])
     * @method UserSelectedBank updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserSelectedBank_QB extends _BaseBuilder {}
    
    /**
     * @method UserZoomApi|null getOrPut($key, $value)
     * @method UserZoomApi|$this shift(int $count = 1)
     * @method UserZoomApi|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserZoomApi|$this pop(int $count = 1)
     * @method UserZoomApi|null pull($key, \Closure $default = null)
     * @method UserZoomApi|null last(callable $callback = null, \Closure $default = null)
     * @method UserZoomApi|$this random(callable|int|null $number = null)
     * @method UserZoomApi|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserZoomApi|null get($key, \Closure $default = null)
     * @method UserZoomApi|null first(callable $callback = null, \Closure $default = null)
     * @method UserZoomApi|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserZoomApi|null find($key, $default = null)
     * @method UserZoomApi[] all()
     */
    class _IH_UserZoomApi_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserZoomApi[][]|Collection<_IH_UserZoomApi_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserZoomApi_QB whereId($value)
     * @method _IH_UserZoomApi_QB whereUserId($value)
     * @method _IH_UserZoomApi_QB whereJwtToken($value)
     * @method _IH_UserZoomApi_QB whereCreatedAt($value)
     * @method _IH_UserZoomApi_QB whereApiKey($value)
     * @method _IH_UserZoomApi_QB whereApiSecret($value)
     * @method _IH_UserZoomApi_QB whereAccountId($value)
     * @method UserZoomApi baseSole(array|string $columns = ['*'])
     * @method UserZoomApi create(array $attributes = [])
     * @method _IH_UserZoomApi_C|UserZoomApi[] cursor()
     * @method UserZoomApi|null|_IH_UserZoomApi_C|UserZoomApi[] find($id, array|string $columns = ['*'])
     * @method _IH_UserZoomApi_C|UserZoomApi[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserZoomApi|_IH_UserZoomApi_C|UserZoomApi[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserZoomApi|_IH_UserZoomApi_C|UserZoomApi[] findOrFail($id, array|string $columns = ['*'])
     * @method UserZoomApi|_IH_UserZoomApi_C|UserZoomApi[] findOrNew($id, array|string $columns = ['*'])
     * @method UserZoomApi first(array|string $columns = ['*'])
     * @method UserZoomApi firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserZoomApi firstOrCreate(array $attributes = [], array $values = [])
     * @method UserZoomApi firstOrFail(array|string $columns = ['*'])
     * @method UserZoomApi firstOrNew(array $attributes = [], array $values = [])
     * @method UserZoomApi firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserZoomApi forceCreate(array $attributes)
     * @method _IH_UserZoomApi_C|UserZoomApi[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserZoomApi_C|UserZoomApi[] get(array|string $columns = ['*'])
     * @method UserZoomApi getModel()
     * @method UserZoomApi[] getModels(array|string $columns = ['*'])
     * @method _IH_UserZoomApi_C|UserZoomApi[] hydrate(array $items)
     * @method _IH_UserZoomApi_C|UserZoomApi[] lazy(int $chunkSize = 1000)
     * @method _IH_UserZoomApi_C|UserZoomApi[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserZoomApi_C|UserZoomApi[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserZoomApi make(array $attributes = [])
     * @method UserZoomApi newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserZoomApi[]|_IH_UserZoomApi_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserZoomApi restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserZoomApi[]|_IH_UserZoomApi_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserZoomApi sole(array|string $columns = ['*'])
     * @method UserZoomApi updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserZoomApi_QB extends _BaseBuilder {}
    
    /**
     * @method Verification|null getOrPut($key, $value)
     * @method Verification|$this shift(int $count = 1)
     * @method Verification|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Verification|$this pop(int $count = 1)
     * @method Verification|null pull($key, \Closure $default = null)
     * @method Verification|null last(callable $callback = null, \Closure $default = null)
     * @method Verification|$this random(callable|int|null $number = null)
     * @method Verification|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Verification|null get($key, \Closure $default = null)
     * @method Verification|null first(callable $callback = null, \Closure $default = null)
     * @method Verification|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Verification|null find($key, $default = null)
     * @method Verification[] all()
     */
    class _IH_Verification_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Verification[][]|Collection<_IH_Verification_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Verification_QB whereId($value)
     * @method _IH_Verification_QB whereUserId($value)
     * @method _IH_Verification_QB whereMobile($value)
     * @method _IH_Verification_QB whereEmail($value)
     * @method _IH_Verification_QB whereCode($value)
     * @method _IH_Verification_QB whereVerifiedAt($value)
     * @method _IH_Verification_QB whereExpiredAt($value)
     * @method _IH_Verification_QB whereCreatedAt($value)
     * @method Verification baseSole(array|string $columns = ['*'])
     * @method Verification create(array $attributes = [])
     * @method _IH_Verification_C|Verification[] cursor()
     * @method Verification|null|_IH_Verification_C|Verification[] find($id, array|string $columns = ['*'])
     * @method _IH_Verification_C|Verification[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Verification|_IH_Verification_C|Verification[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Verification|_IH_Verification_C|Verification[] findOrFail($id, array|string $columns = ['*'])
     * @method Verification|_IH_Verification_C|Verification[] findOrNew($id, array|string $columns = ['*'])
     * @method Verification first(array|string $columns = ['*'])
     * @method Verification firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Verification firstOrCreate(array $attributes = [], array $values = [])
     * @method Verification firstOrFail(array|string $columns = ['*'])
     * @method Verification firstOrNew(array $attributes = [], array $values = [])
     * @method Verification firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Verification forceCreate(array $attributes)
     * @method _IH_Verification_C|Verification[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Verification_C|Verification[] get(array|string $columns = ['*'])
     * @method Verification getModel()
     * @method Verification[] getModels(array|string $columns = ['*'])
     * @method _IH_Verification_C|Verification[] hydrate(array $items)
     * @method _IH_Verification_C|Verification[] lazy(int $chunkSize = 1000)
     * @method _IH_Verification_C|Verification[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Verification_C|Verification[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Verification make(array $attributes = [])
     * @method Verification newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Verification[]|_IH_Verification_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Verification restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Verification[]|_IH_Verification_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Verification sole(array|string $columns = ['*'])
     * @method Verification updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Verification_QB extends _BaseBuilder {}
    
    /**
     * @method Waitlist|null getOrPut($key, $value)
     * @method Waitlist|$this shift(int $count = 1)
     * @method Waitlist|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Waitlist|$this pop(int $count = 1)
     * @method Waitlist|null pull($key, \Closure $default = null)
     * @method Waitlist|null last(callable $callback = null, \Closure $default = null)
     * @method Waitlist|$this random(callable|int|null $number = null)
     * @method Waitlist|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Waitlist|null get($key, \Closure $default = null)
     * @method Waitlist|null first(callable $callback = null, \Closure $default = null)
     * @method Waitlist|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Waitlist|null find($key, $default = null)
     * @method Waitlist[] all()
     */
    class _IH_Waitlist_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Waitlist[][]|Collection<_IH_Waitlist_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Waitlist_QB whereId($value)
     * @method _IH_Waitlist_QB whereWebinarId($value)
     * @method _IH_Waitlist_QB whereUserId($value)
     * @method _IH_Waitlist_QB whereFullName($value)
     * @method _IH_Waitlist_QB whereEmail($value)
     * @method _IH_Waitlist_QB wherePhone($value)
     * @method _IH_Waitlist_QB whereCreatedAt($value)
     * @method Waitlist baseSole(array|string $columns = ['*'])
     * @method Waitlist create(array $attributes = [])
     * @method _IH_Waitlist_C|Waitlist[] cursor()
     * @method Waitlist|null|_IH_Waitlist_C|Waitlist[] find($id, array|string $columns = ['*'])
     * @method _IH_Waitlist_C|Waitlist[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Waitlist|_IH_Waitlist_C|Waitlist[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Waitlist|_IH_Waitlist_C|Waitlist[] findOrFail($id, array|string $columns = ['*'])
     * @method Waitlist|_IH_Waitlist_C|Waitlist[] findOrNew($id, array|string $columns = ['*'])
     * @method Waitlist first(array|string $columns = ['*'])
     * @method Waitlist firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Waitlist firstOrCreate(array $attributes = [], array $values = [])
     * @method Waitlist firstOrFail(array|string $columns = ['*'])
     * @method Waitlist firstOrNew(array $attributes = [], array $values = [])
     * @method Waitlist firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Waitlist forceCreate(array $attributes)
     * @method _IH_Waitlist_C|Waitlist[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Waitlist_C|Waitlist[] get(array|string $columns = ['*'])
     * @method Waitlist getModel()
     * @method Waitlist[] getModels(array|string $columns = ['*'])
     * @method _IH_Waitlist_C|Waitlist[] hydrate(array $items)
     * @method _IH_Waitlist_C|Waitlist[] lazy(int $chunkSize = 1000)
     * @method _IH_Waitlist_C|Waitlist[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Waitlist_C|Waitlist[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Waitlist make(array $attributes = [])
     * @method Waitlist newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Waitlist[]|_IH_Waitlist_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Waitlist restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Waitlist[]|_IH_Waitlist_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Waitlist sole(array|string $columns = ['*'])
     * @method Waitlist updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_Waitlist_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarAssignmentAttachment|null getOrPut($key, $value)
     * @method WebinarAssignmentAttachment|$this shift(int $count = 1)
     * @method WebinarAssignmentAttachment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentAttachment|$this pop(int $count = 1)
     * @method WebinarAssignmentAttachment|null pull($key, \Closure $default = null)
     * @method WebinarAssignmentAttachment|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentAttachment|$this random(callable|int|null $number = null)
     * @method WebinarAssignmentAttachment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentAttachment|null get($key, \Closure $default = null)
     * @method WebinarAssignmentAttachment|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentAttachment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarAssignmentAttachment|null find($key, $default = null)
     * @method WebinarAssignmentAttachment[] all()
     */
    class _IH_WebinarAssignmentAttachment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarAssignmentAttachment[][]|Collection<_IH_WebinarAssignmentAttachment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarAssignmentAttachment_QB whereId($value)
     * @method _IH_WebinarAssignmentAttachment_QB whereCreatorId($value)
     * @method _IH_WebinarAssignmentAttachment_QB whereAssignmentId($value)
     * @method _IH_WebinarAssignmentAttachment_QB whereTitle($value)
     * @method _IH_WebinarAssignmentAttachment_QB whereAttach($value)
     * @method WebinarAssignmentAttachment baseSole(array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment create(array $attributes = [])
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] cursor()
     * @method WebinarAssignmentAttachment|null|_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment|_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentAttachment|_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment|_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment first(array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentAttachment firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarAssignmentAttachment firstOrFail(array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarAssignmentAttachment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarAssignmentAttachment forceCreate(array $attributes)
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] get(array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment getModel()
     * @method WebinarAssignmentAttachment[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] hydrate(array $items)
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarAssignmentAttachment make(array $attributes = [])
     * @method WebinarAssignmentAttachment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarAssignmentAttachment[]|_IH_WebinarAssignmentAttachment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentAttachment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarAssignmentAttachment[]|_IH_WebinarAssignmentAttachment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentAttachment sole(array|string $columns = ['*'])
     * @method WebinarAssignmentAttachment updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarAssignmentAttachment_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarAssignmentHistoryMessage|null getOrPut($key, $value)
     * @method WebinarAssignmentHistoryMessage|$this shift(int $count = 1)
     * @method WebinarAssignmentHistoryMessage|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentHistoryMessage|$this pop(int $count = 1)
     * @method WebinarAssignmentHistoryMessage|null pull($key, \Closure $default = null)
     * @method WebinarAssignmentHistoryMessage|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentHistoryMessage|$this random(callable|int|null $number = null)
     * @method WebinarAssignmentHistoryMessage|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentHistoryMessage|null get($key, \Closure $default = null)
     * @method WebinarAssignmentHistoryMessage|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentHistoryMessage|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarAssignmentHistoryMessage|null find($key, $default = null)
     * @method WebinarAssignmentHistoryMessage[] all()
     */
    class _IH_WebinarAssignmentHistoryMessage_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarAssignmentHistoryMessage[][]|Collection<_IH_WebinarAssignmentHistoryMessage_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereId($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereAssignmentHistoryId($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereSenderId($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereMessage($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereFileTitle($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereFilePath($value)
     * @method _IH_WebinarAssignmentHistoryMessage_QB whereCreatedAt($value)
     * @method WebinarAssignmentHistoryMessage baseSole(array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage create(array $attributes = [])
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] cursor()
     * @method WebinarAssignmentHistoryMessage|null|_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage|_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentHistoryMessage|_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage|_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage first(array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentHistoryMessage firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarAssignmentHistoryMessage firstOrFail(array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarAssignmentHistoryMessage firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarAssignmentHistoryMessage forceCreate(array $attributes)
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] get(array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage getModel()
     * @method WebinarAssignmentHistoryMessage[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] hydrate(array $items)
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarAssignmentHistoryMessage make(array $attributes = [])
     * @method WebinarAssignmentHistoryMessage newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarAssignmentHistoryMessage[]|_IH_WebinarAssignmentHistoryMessage_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentHistoryMessage restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarAssignmentHistoryMessage[]|_IH_WebinarAssignmentHistoryMessage_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentHistoryMessage sole(array|string $columns = ['*'])
     * @method WebinarAssignmentHistoryMessage updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarAssignmentHistoryMessage_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarAssignmentHistory|null getOrPut($key, $value)
     * @method WebinarAssignmentHistory|$this shift(int $count = 1)
     * @method WebinarAssignmentHistory|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentHistory|$this pop(int $count = 1)
     * @method WebinarAssignmentHistory|null pull($key, \Closure $default = null)
     * @method WebinarAssignmentHistory|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentHistory|$this random(callable|int|null $number = null)
     * @method WebinarAssignmentHistory|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentHistory|null get($key, \Closure $default = null)
     * @method WebinarAssignmentHistory|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentHistory|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarAssignmentHistory|null find($key, $default = null)
     * @method WebinarAssignmentHistory[] all()
     */
    class _IH_WebinarAssignmentHistory_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarAssignmentHistory[][]|Collection<_IH_WebinarAssignmentHistory_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarAssignmentHistory_QB whereId($value)
     * @method _IH_WebinarAssignmentHistory_QB whereInstructorId($value)
     * @method _IH_WebinarAssignmentHistory_QB whereStudentId($value)
     * @method _IH_WebinarAssignmentHistory_QB whereAssignmentId($value)
     * @method _IH_WebinarAssignmentHistory_QB whereGrade($value)
     * @method _IH_WebinarAssignmentHistory_QB whereStatus($value)
     * @method _IH_WebinarAssignmentHistory_QB whereCreatedAt($value)
     * @method WebinarAssignmentHistory baseSole(array|string $columns = ['*'])
     * @method WebinarAssignmentHistory create(array $attributes = [])
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] cursor()
     * @method WebinarAssignmentHistory|null|_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarAssignmentHistory|_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentHistory|_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarAssignmentHistory|_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarAssignmentHistory first(array|string $columns = ['*'])
     * @method WebinarAssignmentHistory firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentHistory firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarAssignmentHistory firstOrFail(array|string $columns = ['*'])
     * @method WebinarAssignmentHistory firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarAssignmentHistory firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarAssignmentHistory forceCreate(array $attributes)
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] get(array|string $columns = ['*'])
     * @method WebinarAssignmentHistory getModel()
     * @method WebinarAssignmentHistory[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] hydrate(array $items)
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarAssignmentHistory make(array $attributes = [])
     * @method WebinarAssignmentHistory newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarAssignmentHistory[]|_IH_WebinarAssignmentHistory_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentHistory restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarAssignmentHistory[]|_IH_WebinarAssignmentHistory_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentHistory sole(array|string $columns = ['*'])
     * @method WebinarAssignmentHistory updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarAssignmentHistory_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarAssignment|null getOrPut($key, $value)
     * @method WebinarAssignment|$this shift(int $count = 1)
     * @method WebinarAssignment|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignment|$this pop(int $count = 1)
     * @method WebinarAssignment|null pull($key, \Closure $default = null)
     * @method WebinarAssignment|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignment|$this random(callable|int|null $number = null)
     * @method WebinarAssignment|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignment|null get($key, \Closure $default = null)
     * @method WebinarAssignment|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignment|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarAssignment|null find($key, $default = null)
     * @method WebinarAssignment[] all()
     */
    class _IH_WebinarAssignment_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarAssignment[][]|Collection<_IH_WebinarAssignment_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarAssignment_QB whereId($value)
     * @method _IH_WebinarAssignment_QB whereCreatorId($value)
     * @method _IH_WebinarAssignment_QB whereWebinarId($value)
     * @method _IH_WebinarAssignment_QB whereChapterId($value)
     * @method _IH_WebinarAssignment_QB whereGrade($value)
     * @method _IH_WebinarAssignment_QB wherePassGrade($value)
     * @method _IH_WebinarAssignment_QB whereDeadline($value)
     * @method _IH_WebinarAssignment_QB whereAttempts($value)
     * @method _IH_WebinarAssignment_QB whereCheckPreviousParts($value)
     * @method _IH_WebinarAssignment_QB whereAccessAfterDay($value)
     * @method _IH_WebinarAssignment_QB whereStatus($value)
     * @method _IH_WebinarAssignment_QB whereCreatedAt($value)
     * @method WebinarAssignment baseSole(array|string $columns = ['*'])
     * @method WebinarAssignment create(array $attributes = [])
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] cursor()
     * @method WebinarAssignment|null|_IH_WebinarAssignment_C|WebinarAssignment[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarAssignment|_IH_WebinarAssignment_C|WebinarAssignment[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignment|_IH_WebinarAssignment_C|WebinarAssignment[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarAssignment|_IH_WebinarAssignment_C|WebinarAssignment[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarAssignment first(array|string $columns = ['*'])
     * @method WebinarAssignment firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignment firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarAssignment firstOrFail(array|string $columns = ['*'])
     * @method WebinarAssignment firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarAssignment firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarAssignment forceCreate(array $attributes)
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] get(array|string $columns = ['*'])
     * @method WebinarAssignment getModel()
     * @method WebinarAssignment[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] hydrate(array $items)
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarAssignment_C|WebinarAssignment[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarAssignment make(array $attributes = [])
     * @method WebinarAssignment newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarAssignment[]|_IH_WebinarAssignment_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignment restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarAssignment[]|_IH_WebinarAssignment_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignment sole(array|string $columns = ['*'])
     * @method WebinarAssignment updateOrCreate(array $attributes, array $values = [])
     * @method _IH_WebinarAssignment_QB listsTranslations(string $translationField)
     * @method _IH_WebinarAssignment_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_WebinarAssignment_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarAssignment_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarAssignment_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_WebinarAssignment_QB translated()
     * @method _IH_WebinarAssignment_QB translatedIn(null|string $locale = null)
     * @method _IH_WebinarAssignment_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_WebinarAssignment_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarAssignment_QB withTranslation()
     */
    class _IH_WebinarAssignment_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarChapterItem|null getOrPut($key, $value)
     * @method WebinarChapterItem|$this shift(int $count = 1)
     * @method WebinarChapterItem|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapterItem|$this pop(int $count = 1)
     * @method WebinarChapterItem|null pull($key, \Closure $default = null)
     * @method WebinarChapterItem|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarChapterItem|$this random(callable|int|null $number = null)
     * @method WebinarChapterItem|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapterItem|null get($key, \Closure $default = null)
     * @method WebinarChapterItem|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarChapterItem|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarChapterItem|null find($key, $default = null)
     * @method WebinarChapterItem[] all()
     */
    class _IH_WebinarChapterItem_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarChapterItem[][]|Collection<_IH_WebinarChapterItem_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarChapterItem_QB whereId($value)
     * @method _IH_WebinarChapterItem_QB whereUserId($value)
     * @method _IH_WebinarChapterItem_QB whereChapterId($value)
     * @method _IH_WebinarChapterItem_QB whereItemId($value)
     * @method _IH_WebinarChapterItem_QB whereType($value)
     * @method _IH_WebinarChapterItem_QB whereOrder($value)
     * @method _IH_WebinarChapterItem_QB whereCreatedAt($value)
     * @method WebinarChapterItem baseSole(array|string $columns = ['*'])
     * @method WebinarChapterItem create(array $attributes = [])
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] cursor()
     * @method WebinarChapterItem|null|_IH_WebinarChapterItem_C|WebinarChapterItem[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarChapterItem|_IH_WebinarChapterItem_C|WebinarChapterItem[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapterItem|_IH_WebinarChapterItem_C|WebinarChapterItem[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarChapterItem|_IH_WebinarChapterItem_C|WebinarChapterItem[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarChapterItem first(array|string $columns = ['*'])
     * @method WebinarChapterItem firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapterItem firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarChapterItem firstOrFail(array|string $columns = ['*'])
     * @method WebinarChapterItem firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarChapterItem firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarChapterItem forceCreate(array $attributes)
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] get(array|string $columns = ['*'])
     * @method WebinarChapterItem getModel()
     * @method WebinarChapterItem[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] hydrate(array $items)
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarChapterItem_C|WebinarChapterItem[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarChapterItem make(array $attributes = [])
     * @method WebinarChapterItem newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarChapterItem[]|_IH_WebinarChapterItem_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapterItem restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarChapterItem[]|_IH_WebinarChapterItem_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapterItem sole(array|string $columns = ['*'])
     * @method WebinarChapterItem updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarChapterItem_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarChapter|null getOrPut($key, $value)
     * @method WebinarChapter|$this shift(int $count = 1)
     * @method WebinarChapter|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapter|$this pop(int $count = 1)
     * @method WebinarChapter|null pull($key, \Closure $default = null)
     * @method WebinarChapter|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarChapter|$this random(callable|int|null $number = null)
     * @method WebinarChapter|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapter|null get($key, \Closure $default = null)
     * @method WebinarChapter|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarChapter|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarChapter|null find($key, $default = null)
     * @method WebinarChapter[] all()
     */
    class _IH_WebinarChapter_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarChapter[][]|Collection<_IH_WebinarChapter_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarChapter_QB whereId($value)
     * @method _IH_WebinarChapter_QB whereUserId($value)
     * @method _IH_WebinarChapter_QB whereWebinarId($value)
     * @method _IH_WebinarChapter_QB whereType($value)
     * @method _IH_WebinarChapter_QB whereOrder($value)
     * @method _IH_WebinarChapter_QB whereStatus($value)
     * @method _IH_WebinarChapter_QB whereCreatedAt($value)
     * @method _IH_WebinarChapter_QB whereCheckAllContentsPass($value)
     * @method WebinarChapter baseSole(array|string $columns = ['*'])
     * @method WebinarChapter create(array $attributes = [])
     * @method _IH_WebinarChapter_C|WebinarChapter[] cursor()
     * @method WebinarChapter|null|_IH_WebinarChapter_C|WebinarChapter[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarChapter_C|WebinarChapter[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarChapter|_IH_WebinarChapter_C|WebinarChapter[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapter|_IH_WebinarChapter_C|WebinarChapter[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarChapter|_IH_WebinarChapter_C|WebinarChapter[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarChapter first(array|string $columns = ['*'])
     * @method WebinarChapter firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapter firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarChapter firstOrFail(array|string $columns = ['*'])
     * @method WebinarChapter firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarChapter firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarChapter forceCreate(array $attributes)
     * @method _IH_WebinarChapter_C|WebinarChapter[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarChapter_C|WebinarChapter[] get(array|string $columns = ['*'])
     * @method WebinarChapter getModel()
     * @method WebinarChapter[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarChapter_C|WebinarChapter[] hydrate(array $items)
     * @method _IH_WebinarChapter_C|WebinarChapter[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarChapter_C|WebinarChapter[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarChapter_C|WebinarChapter[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarChapter make(array $attributes = [])
     * @method WebinarChapter newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarChapter[]|_IH_WebinarChapter_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapter restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarChapter[]|_IH_WebinarChapter_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapter sole(array|string $columns = ['*'])
     * @method WebinarChapter updateOrCreate(array $attributes, array $values = [])
     * @method _IH_WebinarChapter_QB listsTranslations(string $translationField)
     * @method _IH_WebinarChapter_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_WebinarChapter_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarChapter_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarChapter_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_WebinarChapter_QB translated()
     * @method _IH_WebinarChapter_QB translatedIn(null|string $locale = null)
     * @method _IH_WebinarChapter_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_WebinarChapter_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarChapter_QB withTranslation()
     */
    class _IH_WebinarChapter_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarExtraDescription|null getOrPut($key, $value)
     * @method WebinarExtraDescription|$this shift(int $count = 1)
     * @method WebinarExtraDescription|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarExtraDescription|$this pop(int $count = 1)
     * @method WebinarExtraDescription|null pull($key, \Closure $default = null)
     * @method WebinarExtraDescription|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarExtraDescription|$this random(callable|int|null $number = null)
     * @method WebinarExtraDescription|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarExtraDescription|null get($key, \Closure $default = null)
     * @method WebinarExtraDescription|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarExtraDescription|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarExtraDescription|null find($key, $default = null)
     * @method WebinarExtraDescription[] all()
     */
    class _IH_WebinarExtraDescription_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarExtraDescription[][]|Collection<_IH_WebinarExtraDescription_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarExtraDescription_QB whereId($value)
     * @method _IH_WebinarExtraDescription_QB whereCreatorId($value)
     * @method _IH_WebinarExtraDescription_QB whereWebinarId($value)
     * @method _IH_WebinarExtraDescription_QB whereType($value)
     * @method _IH_WebinarExtraDescription_QB whereOrder($value)
     * @method _IH_WebinarExtraDescription_QB whereCreatedAt($value)
     * @method _IH_WebinarExtraDescription_QB whereUpcomingCourseId($value)
     * @method WebinarExtraDescription baseSole(array|string $columns = ['*'])
     * @method WebinarExtraDescription create(array $attributes = [])
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] cursor()
     * @method WebinarExtraDescription|null|_IH_WebinarExtraDescription_C|WebinarExtraDescription[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarExtraDescription|_IH_WebinarExtraDescription_C|WebinarExtraDescription[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarExtraDescription|_IH_WebinarExtraDescription_C|WebinarExtraDescription[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarExtraDescription|_IH_WebinarExtraDescription_C|WebinarExtraDescription[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarExtraDescription first(array|string $columns = ['*'])
     * @method WebinarExtraDescription firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarExtraDescription firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarExtraDescription firstOrFail(array|string $columns = ['*'])
     * @method WebinarExtraDescription firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarExtraDescription firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarExtraDescription forceCreate(array $attributes)
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] get(array|string $columns = ['*'])
     * @method WebinarExtraDescription getModel()
     * @method WebinarExtraDescription[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] hydrate(array $items)
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarExtraDescription_C|WebinarExtraDescription[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarExtraDescription make(array $attributes = [])
     * @method WebinarExtraDescription newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarExtraDescription[]|_IH_WebinarExtraDescription_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarExtraDescription restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarExtraDescription[]|_IH_WebinarExtraDescription_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarExtraDescription sole(array|string $columns = ['*'])
     * @method WebinarExtraDescription updateOrCreate(array $attributes, array $values = [])
     * @method _IH_WebinarExtraDescription_QB listsTranslations(string $translationField)
     * @method _IH_WebinarExtraDescription_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_WebinarExtraDescription_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarExtraDescription_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarExtraDescription_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_WebinarExtraDescription_QB translated()
     * @method _IH_WebinarExtraDescription_QB translatedIn(null|string $locale = null)
     * @method _IH_WebinarExtraDescription_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_WebinarExtraDescription_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_WebinarExtraDescription_QB withTranslation()
     */
    class _IH_WebinarExtraDescription_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarFilterOption|null getOrPut($key, $value)
     * @method WebinarFilterOption|$this shift(int $count = 1)
     * @method WebinarFilterOption|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarFilterOption|$this pop(int $count = 1)
     * @method WebinarFilterOption|null pull($key, \Closure $default = null)
     * @method WebinarFilterOption|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarFilterOption|$this random(callable|int|null $number = null)
     * @method WebinarFilterOption|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarFilterOption|null get($key, \Closure $default = null)
     * @method WebinarFilterOption|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarFilterOption|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarFilterOption|null find($key, $default = null)
     * @method WebinarFilterOption[] all()
     */
    class _IH_WebinarFilterOption_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarFilterOption[][]|Collection<_IH_WebinarFilterOption_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarFilterOption_QB whereId($value)
     * @method _IH_WebinarFilterOption_QB whereWebinarId($value)
     * @method _IH_WebinarFilterOption_QB whereFilterOptionId($value)
     * @method WebinarFilterOption baseSole(array|string $columns = ['*'])
     * @method WebinarFilterOption create(array $attributes = [])
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] cursor()
     * @method WebinarFilterOption|null|_IH_WebinarFilterOption_C|WebinarFilterOption[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarFilterOption|_IH_WebinarFilterOption_C|WebinarFilterOption[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarFilterOption|_IH_WebinarFilterOption_C|WebinarFilterOption[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarFilterOption|_IH_WebinarFilterOption_C|WebinarFilterOption[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarFilterOption first(array|string $columns = ['*'])
     * @method WebinarFilterOption firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarFilterOption firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarFilterOption firstOrFail(array|string $columns = ['*'])
     * @method WebinarFilterOption firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarFilterOption firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarFilterOption forceCreate(array $attributes)
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] get(array|string $columns = ['*'])
     * @method WebinarFilterOption getModel()
     * @method WebinarFilterOption[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] hydrate(array $items)
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarFilterOption_C|WebinarFilterOption[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarFilterOption make(array $attributes = [])
     * @method WebinarFilterOption newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarFilterOption[]|_IH_WebinarFilterOption_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarFilterOption restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarFilterOption[]|_IH_WebinarFilterOption_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarFilterOption sole(array|string $columns = ['*'])
     * @method WebinarFilterOption updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarFilterOption_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarPartnerTeacher|null getOrPut($key, $value)
     * @method WebinarPartnerTeacher|$this shift(int $count = 1)
     * @method WebinarPartnerTeacher|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarPartnerTeacher|$this pop(int $count = 1)
     * @method WebinarPartnerTeacher|null pull($key, \Closure $default = null)
     * @method WebinarPartnerTeacher|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarPartnerTeacher|$this random(callable|int|null $number = null)
     * @method WebinarPartnerTeacher|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarPartnerTeacher|null get($key, \Closure $default = null)
     * @method WebinarPartnerTeacher|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarPartnerTeacher|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarPartnerTeacher|null find($key, $default = null)
     * @method WebinarPartnerTeacher[] all()
     */
    class _IH_WebinarPartnerTeacher_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarPartnerTeacher[][]|Collection<_IH_WebinarPartnerTeacher_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarPartnerTeacher_QB whereId($value)
     * @method _IH_WebinarPartnerTeacher_QB whereWebinarId($value)
     * @method _IH_WebinarPartnerTeacher_QB whereTeacherId($value)
     * @method WebinarPartnerTeacher baseSole(array|string $columns = ['*'])
     * @method WebinarPartnerTeacher create(array $attributes = [])
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] cursor()
     * @method WebinarPartnerTeacher|null|_IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarPartnerTeacher|_IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarPartnerTeacher|_IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarPartnerTeacher|_IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarPartnerTeacher first(array|string $columns = ['*'])
     * @method WebinarPartnerTeacher firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarPartnerTeacher firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarPartnerTeacher firstOrFail(array|string $columns = ['*'])
     * @method WebinarPartnerTeacher firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarPartnerTeacher firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarPartnerTeacher forceCreate(array $attributes)
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] get(array|string $columns = ['*'])
     * @method WebinarPartnerTeacher getModel()
     * @method WebinarPartnerTeacher[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] hydrate(array $items)
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarPartnerTeacher make(array $attributes = [])
     * @method WebinarPartnerTeacher newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarPartnerTeacher[]|_IH_WebinarPartnerTeacher_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarPartnerTeacher restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarPartnerTeacher[]|_IH_WebinarPartnerTeacher_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarPartnerTeacher sole(array|string $columns = ['*'])
     * @method WebinarPartnerTeacher updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarPartnerTeacher_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarReport|null getOrPut($key, $value)
     * @method WebinarReport|$this shift(int $count = 1)
     * @method WebinarReport|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarReport|$this pop(int $count = 1)
     * @method WebinarReport|null pull($key, \Closure $default = null)
     * @method WebinarReport|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarReport|$this random(callable|int|null $number = null)
     * @method WebinarReport|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarReport|null get($key, \Closure $default = null)
     * @method WebinarReport|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarReport|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarReport|null find($key, $default = null)
     * @method WebinarReport[] all()
     */
    class _IH_WebinarReport_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarReport[][]|Collection<_IH_WebinarReport_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarReport_QB whereId($value)
     * @method _IH_WebinarReport_QB whereUserId($value)
     * @method _IH_WebinarReport_QB whereWebinarId($value)
     * @method _IH_WebinarReport_QB whereReason($value)
     * @method _IH_WebinarReport_QB whereMessage($value)
     * @method _IH_WebinarReport_QB whereCreatedAt($value)
     * @method WebinarReport baseSole(array|string $columns = ['*'])
     * @method WebinarReport create(array $attributes = [])
     * @method _IH_WebinarReport_C|WebinarReport[] cursor()
     * @method WebinarReport|null|_IH_WebinarReport_C|WebinarReport[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarReport_C|WebinarReport[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarReport|_IH_WebinarReport_C|WebinarReport[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarReport|_IH_WebinarReport_C|WebinarReport[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarReport|_IH_WebinarReport_C|WebinarReport[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarReport first(array|string $columns = ['*'])
     * @method WebinarReport firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarReport firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarReport firstOrFail(array|string $columns = ['*'])
     * @method WebinarReport firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarReport firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarReport forceCreate(array $attributes)
     * @method _IH_WebinarReport_C|WebinarReport[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarReport_C|WebinarReport[] get(array|string $columns = ['*'])
     * @method WebinarReport getModel()
     * @method WebinarReport[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarReport_C|WebinarReport[] hydrate(array $items)
     * @method _IH_WebinarReport_C|WebinarReport[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarReport_C|WebinarReport[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarReport_C|WebinarReport[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarReport make(array $attributes = [])
     * @method WebinarReport newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarReport[]|_IH_WebinarReport_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarReport restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarReport[]|_IH_WebinarReport_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarReport sole(array|string $columns = ['*'])
     * @method WebinarReport updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarReport_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarReview|null getOrPut($key, $value)
     * @method WebinarReview|$this shift(int $count = 1)
     * @method WebinarReview|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarReview|$this pop(int $count = 1)
     * @method WebinarReview|null pull($key, \Closure $default = null)
     * @method WebinarReview|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarReview|$this random(callable|int|null $number = null)
     * @method WebinarReview|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarReview|null get($key, \Closure $default = null)
     * @method WebinarReview|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarReview|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarReview|null find($key, $default = null)
     * @method WebinarReview[] all()
     */
    class _IH_WebinarReview_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarReview[][]|Collection<_IH_WebinarReview_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarReview_QB whereId($value)
     * @method _IH_WebinarReview_QB whereWebinarId($value)
     * @method _IH_WebinarReview_QB whereCreatorUserId($value)
     * @method _IH_WebinarReview_QB whereContentQuality($value)
     * @method _IH_WebinarReview_QB whereInstructorSkills($value)
     * @method _IH_WebinarReview_QB wherePurchaseWorth($value)
     * @method _IH_WebinarReview_QB whereSupportQuality($value)
     * @method _IH_WebinarReview_QB whereRates($value)
     * @method _IH_WebinarReview_QB whereDescription($value)
     * @method _IH_WebinarReview_QB whereCreatedAt($value)
     * @method _IH_WebinarReview_QB whereStatus($value)
     * @method _IH_WebinarReview_QB whereBundleId($value)
     * @method WebinarReview baseSole(array|string $columns = ['*'])
     * @method WebinarReview create(array $attributes = [])
     * @method _IH_WebinarReview_C|WebinarReview[] cursor()
     * @method WebinarReview|null|_IH_WebinarReview_C|WebinarReview[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarReview_C|WebinarReview[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarReview|_IH_WebinarReview_C|WebinarReview[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarReview|_IH_WebinarReview_C|WebinarReview[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarReview|_IH_WebinarReview_C|WebinarReview[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarReview first(array|string $columns = ['*'])
     * @method WebinarReview firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarReview firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarReview firstOrFail(array|string $columns = ['*'])
     * @method WebinarReview firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarReview firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarReview forceCreate(array $attributes)
     * @method _IH_WebinarReview_C|WebinarReview[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarReview_C|WebinarReview[] get(array|string $columns = ['*'])
     * @method WebinarReview getModel()
     * @method WebinarReview[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarReview_C|WebinarReview[] hydrate(array $items)
     * @method _IH_WebinarReview_C|WebinarReview[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarReview_C|WebinarReview[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarReview_C|WebinarReview[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarReview make(array $attributes = [])
     * @method WebinarReview newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarReview[]|_IH_WebinarReview_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarReview restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarReview[]|_IH_WebinarReview_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarReview sole(array|string $columns = ['*'])
     * @method WebinarReview updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarReview_QB extends _BaseBuilder {}
    
    /**
     * @method Webinar|null getOrPut($key, $value)
     * @method Webinar|$this shift(int $count = 1)
     * @method Webinar|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method Webinar|$this pop(int $count = 1)
     * @method Webinar|null pull($key, \Closure $default = null)
     * @method Webinar|null last(callable $callback = null, \Closure $default = null)
     * @method Webinar|$this random(callable|int|null $number = null)
     * @method Webinar|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method Webinar|null get($key, \Closure $default = null)
     * @method Webinar|null first(callable $callback = null, \Closure $default = null)
     * @method Webinar|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method Webinar|null find($key, $default = null)
     * @method Webinar[] all()
     */
    class _IH_Webinar_C extends _BaseCollection {
        /**
         * @param int $size
         * @return Webinar[][]|Collection<_IH_Webinar_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_Webinar_QB whereId($value)
     * @method _IH_Webinar_QB whereTeacherId($value)
     * @method _IH_Webinar_QB whereCreatorUserId($value)
     * @method _IH_Webinar_QB whereStartDate($value)
     * @method _IH_Webinar_QB whereImageCover($value)
     * @method _IH_Webinar_QB whereVideoDemo($value)
     * @method _IH_Webinar_QB whereCapacity($value)
     * @method _IH_Webinar_QB wherePrice($value)
     * @method _IH_Webinar_QB whereSupport($value)
     * @method _IH_Webinar_QB wherePartnerInstructor($value)
     * @method _IH_Webinar_QB whereSubscribe($value)
     * @method _IH_Webinar_QB whereMessageForReviewer($value)
     * @method _IH_Webinar_QB whereStatus($value)
     * @method _IH_Webinar_QB whereCreatedAt($value)
     * @method _IH_Webinar_QB whereUpdatedAt($value)
     * @method _IH_Webinar_QB whereDeletedAt($value)
     * @method _IH_Webinar_QB whereCategoryId($value)
     * @method _IH_Webinar_QB whereStartTime($value)
     * @method _IH_Webinar_QB whereEndTime($value)
     * @method _IH_Webinar_QB whereSlug($value)
     * @method _IH_Webinar_QB whereDuration($value)
     * @method _IH_Webinar_QB whereDownloadable($value)
     * @method _IH_Webinar_QB whereType($value)
     * @method _IH_Webinar_QB whereThumbnail($value)
     * @method _IH_Webinar_QB wherePrivate($value)
     * @method _IH_Webinar_QB wherePoints($value)
     * @method _IH_Webinar_QB whereTimezone($value)
     * @method _IH_Webinar_QB whereVideoDemoSource($value)
     * @method _IH_Webinar_QB whereAccessDays($value)
     * @method _IH_Webinar_QB whereForum($value)
     * @method _IH_Webinar_QB whereOrganizationPrice($value)
     * @method _IH_Webinar_QB whereCertificate($value)
     * @method _IH_Webinar_QB whereEnableWaitlist($value)
     * @method _IH_Webinar_QB whereSalesCountNumber($value)
     * @method Webinar baseSole(array|string $columns = ['*'])
     * @method Webinar create(array $attributes = [])
     * @method _IH_Webinar_C|Webinar[] cursor()
     * @method Webinar|null|_IH_Webinar_C|Webinar[] find($id, array|string $columns = ['*'])
     * @method _IH_Webinar_C|Webinar[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method Webinar|_IH_Webinar_C|Webinar[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Webinar|_IH_Webinar_C|Webinar[] findOrFail($id, array|string $columns = ['*'])
     * @method Webinar|_IH_Webinar_C|Webinar[] findOrNew($id, array|string $columns = ['*'])
     * @method Webinar first(array|string $columns = ['*'])
     * @method Webinar firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method Webinar firstOrCreate(array $attributes = [], array $values = [])
     * @method Webinar firstOrFail(array|string $columns = ['*'])
     * @method Webinar firstOrNew(array $attributes = [], array $values = [])
     * @method Webinar firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method Webinar forceCreate(array $attributes)
     * @method _IH_Webinar_C|Webinar[] fromQuery(string $query, array $bindings = [])
     * @method _IH_Webinar_C|Webinar[] get(array|string $columns = ['*'])
     * @method Webinar getModel()
     * @method Webinar[] getModels(array|string $columns = ['*'])
     * @method _IH_Webinar_C|Webinar[] hydrate(array $items)
     * @method _IH_Webinar_C|Webinar[] lazy(int $chunkSize = 1000)
     * @method _IH_Webinar_C|Webinar[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_Webinar_C|Webinar[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method Webinar make(array $attributes = [])
     * @method Webinar newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|Webinar[]|_IH_Webinar_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Webinar restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|Webinar[]|_IH_Webinar_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method Webinar sole(array|string $columns = ['*'])
     * @method Webinar updateOrCreate(array $attributes, array $values = [])
     * @method _IH_Webinar_QB findSimilarSlugs(string $attribute, array $config, string $slug)
     * @method _IH_Webinar_QB listsTranslations(string $translationField)
     * @method _IH_Webinar_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Webinar_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Webinar_QB translated()
     * @method _IH_Webinar_QB translatedIn(null|string $locale = null)
     * @method _IH_Webinar_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Webinar_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB withTranslation()
     * @method _IH_Webinar_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Webinar_QB extends _BaseBuilder {}
}