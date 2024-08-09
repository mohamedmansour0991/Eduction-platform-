<?php //aa5032185023776a8db01890d7a20198
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models\Api {

    use App\Models\Api\Accounting;
    use App\Models\Api\Blog;
    use App\Models\Api\BlogCategory;
    use App\Models\Api\BundleWebinar;
    use App\Models\Api\Cart;
    use App\Models\Api\Category;
    use App\Models\Api\Certificate;
    use App\Models\Api\Comment;
    use App\Models\Api\CourseForum;
    use App\Models\Api\CourseForumAnswer;
    use App\Models\Api\Faq;
    use App\Models\Api\Favorite;
    use App\Models\Api\FeatureWebinar;
    use App\Models\Api\File;
    use App\Models\Api\Follow;
    use App\Models\Api\GroupUser;
    use App\Models\Api\Meeting;
    use App\Models\Api\MeetingTime;
    use App\Models\Api\Payout;
    use App\Models\Api\Prerequisite;
    use App\Models\Api\Product;
    use App\Models\Api\ProductBadge;
    use App\Models\Api\ProductBadgeContent;
    use App\Models\Api\ProductOrder;
    use App\Models\Api\Quiz;
    use App\Models\Api\QuizzesQuestion;
    use App\Models\Api\QuizzesQuestionsAnswer;
    use App\Models\Api\QuizzesResult;
    use App\Models\Api\RegistrationPackage;
    use App\Models\Api\ReserveMeeting;
    use App\Models\Api\RewardAccounting;
    use App\Models\Api\Sale;
    use App\Models\Api\Session;
    use App\Models\Api\Setting;
    use App\Models\Api\Subscribe;
    use App\Models\Api\Support;
    use App\Models\Api\SupportConversation;
    use App\Models\Api\SupportDepartment;
    use App\Models\Api\TextLesson;
    use App\Models\Api\TextLessonAttachment;
    use App\Models\Api\Ticket;
    use App\Models\Api\TrendCategory;
    use App\Models\Api\UserFirebaseSessions;
    use App\Models\Api\Webinar;
    use App\Models\Api\WebinarAssignment;
    use App\Models\Api\WebinarAssignmentAttachment;
    use App\Models\Api\WebinarAssignmentHistory;
    use App\Models\Api\WebinarAssignmentHistoryMessage;
    use App\Models\Api\WebinarChapter;
    use App\Models\Api\WebinarChapterItem;
    use App\Models\Api\WebinarReport;
    use App\Models\Api\WebinarReview;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
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
     * @method _IH_Blog_QB handleFilters()
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
     * @method _IH_Certificate_QB handleFilter()
     */
    class _IH_Certificate_QB extends _BaseBuilder {}
    
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
     * @method _IH_Comment_QB handleFilters()
     */
    class _IH_Comment_QB extends _BaseBuilder {}
    
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
     * @method _IH_CourseForum_QB handleFilters()
     */
    class _IH_CourseForum_QB extends _BaseBuilder {}
    
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
     * @method _IH_FeatureWebinar_QB handleFilters()
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
     * @method _IH_ProductOrder_QB handleFilters()
     */
    class _IH_ProductOrder_QB extends _BaseBuilder {}
    
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
     * @method _IH_Product_QB handleFilters()
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
     * @method _IH_Quiz_QB handleFilters()
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
     * @method _IH_QuizzesResult_QB handleFilters()
     */
    class _IH_QuizzesResult_QB extends _BaseBuilder {}
    
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
     * @method _IH_Sale_QB handleFilters()
     */
    class _IH_Sale_QB extends _BaseBuilder {}
    
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
     * @method _IH_Support_QB handleFilters($userWebinarsIds = [])
     */
    class _IH_Support_QB extends _BaseBuilder {}
    
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
     * @method UserFirebaseSessions|null getOrPut($key, $value)
     * @method UserFirebaseSessions|$this shift(int $count = 1)
     * @method UserFirebaseSessions|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserFirebaseSessions|$this pop(int $count = 1)
     * @method UserFirebaseSessions|null pull($key, \Closure $default = null)
     * @method UserFirebaseSessions|null last(callable $callback = null, \Closure $default = null)
     * @method UserFirebaseSessions|$this random(callable|int|null $number = null)
     * @method UserFirebaseSessions|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserFirebaseSessions|null get($key, \Closure $default = null)
     * @method UserFirebaseSessions|null first(callable $callback = null, \Closure $default = null)
     * @method UserFirebaseSessions|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserFirebaseSessions|null find($key, $default = null)
     * @method UserFirebaseSessions[] all()
     */
    class _IH_UserFirebaseSessions_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserFirebaseSessions[][]|Collection<_IH_UserFirebaseSessions_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserFirebaseSessions_QB whereId($value)
     * @method _IH_UserFirebaseSessions_QB whereUserId($value)
     * @method _IH_UserFirebaseSessions_QB whereToken($value)
     * @method _IH_UserFirebaseSessions_QB whereFcmToken($value)
     * @method _IH_UserFirebaseSessions_QB whereIp($value)
     * @method _IH_UserFirebaseSessions_QB whereCreatedAt($value)
     * @method _IH_UserFirebaseSessions_QB whereUpdatedAt($value)
     * @method UserFirebaseSessions baseSole(array|string $columns = ['*'])
     * @method UserFirebaseSessions create(array $attributes = [])
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] cursor()
     * @method UserFirebaseSessions|null|_IH_UserFirebaseSessions_C|UserFirebaseSessions[] find($id, array|string $columns = ['*'])
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserFirebaseSessions|_IH_UserFirebaseSessions_C|UserFirebaseSessions[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserFirebaseSessions|_IH_UserFirebaseSessions_C|UserFirebaseSessions[] findOrFail($id, array|string $columns = ['*'])
     * @method UserFirebaseSessions|_IH_UserFirebaseSessions_C|UserFirebaseSessions[] findOrNew($id, array|string $columns = ['*'])
     * @method UserFirebaseSessions first(array|string $columns = ['*'])
     * @method UserFirebaseSessions firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserFirebaseSessions firstOrCreate(array $attributes = [], array $values = [])
     * @method UserFirebaseSessions firstOrFail(array|string $columns = ['*'])
     * @method UserFirebaseSessions firstOrNew(array $attributes = [], array $values = [])
     * @method UserFirebaseSessions firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserFirebaseSessions forceCreate(array $attributes)
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] get(array|string $columns = ['*'])
     * @method UserFirebaseSessions getModel()
     * @method UserFirebaseSessions[] getModels(array|string $columns = ['*'])
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] hydrate(array $items)
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] lazy(int $chunkSize = 1000)
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserFirebaseSessions_C|UserFirebaseSessions[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserFirebaseSessions make(array $attributes = [])
     * @method UserFirebaseSessions newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserFirebaseSessions[]|_IH_UserFirebaseSessions_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserFirebaseSessions restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserFirebaseSessions[]|_IH_UserFirebaseSessions_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserFirebaseSessions sole(array|string $columns = ['*'])
     * @method UserFirebaseSessions updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserFirebaseSessions_QB extends _BaseBuilder {}
    
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
     * @method _IH_WebinarAssignment_QB handleFilters()
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
     * @method _IH_Webinar_QB handleFilters()
     * @method _IH_Webinar_QB listsTranslations(string $translationField)
     * @method _IH_Webinar_QB notTranslatedIn(null|string $locale = null)
     * @method _IH_Webinar_QB orWhereTranslation(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB orWhereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB orderByTranslation(string $translationField, string $sortMethod = 'asc')
     * @method _IH_Webinar_QB translated()
     * @method _IH_Webinar_QB translatedIn(null|string $locale = null)
     * @method _IH_Webinar_QB validWebinar()
     * @method _IH_Webinar_QB whereTranslation(string $translationField, $value, null|string $locale = null, string $method = 'whereHas', string $operator = '=')
     * @method _IH_Webinar_QB whereTranslationLike(string $translationField, $value, null|string $locale = null)
     * @method _IH_Webinar_QB withTranslation()
     * @method _IH_Webinar_QB withUniqueSlugConstraints(Model $model, string $attribute, array $config, string $slug)
     */
    class _IH_Webinar_QB extends _BaseBuilder {}
}