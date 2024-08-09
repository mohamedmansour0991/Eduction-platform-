<?php //869078fea3a936ffba87cb14032bbe77
/** @noinspection all */

namespace LaravelIdea\Helper\App\Models\Translation {

    use App\Models\Translation\AbandonedCartRuleTranslation;
    use App\Models\Translation\AdvertisingBannerTranslation;
    use App\Models\Translation\AiContentTemplateTranslation;
    use App\Models\Translation\BadgeTranslation;
    use App\Models\Translation\BlogCategoryTranslation;
    use App\Models\Translation\BlogTranslation;
    use App\Models\Translation\BundleTranslation;
    use App\Models\Translation\CartDiscountTranslation;
    use App\Models\Translation\CashbackRuleTranslation;
    use App\Models\Translation\CategoryTranslation;
    use App\Models\Translation\CertificateTemplateTranslation;
    use App\Models\Translation\FaqTranslation;
    use App\Models\Translation\FeatureWebinarTranslation;
    use App\Models\Translation\FileTranslation;
    use App\Models\Translation\FilterOptionTranslation;
    use App\Models\Translation\FilterTranslation;
    use App\Models\Translation\FloatingBarTranslation;
    use App\Models\Translation\FormFieldOptionTranslation;
    use App\Models\Translation\FormFieldTranslation;
    use App\Models\Translation\FormTranslation;
    use App\Models\Translation\ForumTranslation;
    use App\Models\Translation\HomePageStatisticTranslation;
    use App\Models\Translation\InstallmentStepTranslation;
    use App\Models\Translation\InstallmentTranslation;
    use App\Models\Translation\NavbarButtonTranslation;
    use App\Models\Translation\OfflineBankSpecificationTranslation;
    use App\Models\Translation\OfflineBankTranslation;
    use App\Models\Translation\PageTranslation;
    use App\Models\Translation\ProductBadgeTranslation;
    use App\Models\Translation\ProductCategoryTranslation;
    use App\Models\Translation\ProductFaqTranslation;
    use App\Models\Translation\ProductFileTranslation;
    use App\Models\Translation\ProductFilterOptionTranslation;
    use App\Models\Translation\ProductFilterTranslation;
    use App\Models\Translation\ProductSelectedSpecificationTranslation;
    use App\Models\Translation\ProductSpecificationMultiValueTranslation;
    use App\Models\Translation\ProductSpecificationTranslation;
    use App\Models\Translation\ProductTranslation;
    use App\Models\Translation\PromotionTranslation;
    use App\Models\Translation\PurchaseNotificationTranslation;
    use App\Models\Translation\QuizTranslation;
    use App\Models\Translation\QuizzesQuestionsAnswerTranslation;
    use App\Models\Translation\QuizzesQuestionTranslation;
    use App\Models\Translation\RegistrationPackageTranslation;
    use App\Models\Translation\SessionTranslation;
    use App\Models\Translation\SettingTranslation;
    use App\Models\Translation\SubscribeTranslation;
    use App\Models\Translation\SupportDepartmentTranslation;
    use App\Models\Translation\TestimonialTranslation;
    use App\Models\Translation\TextLessonTranslation;
    use App\Models\Translation\TicketTranslation;
    use App\Models\Translation\UpcomingCourseTranslation;
    use App\Models\Translation\UserBankSpecificationTranslation;
    use App\Models\Translation\UserBankTranslation;
    use App\Models\Translation\UserProfileAttachmentTranslation;
    use App\Models\Translation\WebinarAssignmentTranslation;
    use App\Models\Translation\WebinarChapterTranslation;
    use App\Models\Translation\WebinarExtraDescriptionTranslation;
    use App\Models\Translation\WebinarTranslation;
    use Illuminate\Contracts\Support\Arrayable;
    use Illuminate\Database\Query\Expression;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use LaravelIdea\Helper\_BaseBuilder;
    use LaravelIdea\Helper\_BaseCollection;
    
    /**
     * @method AbandonedCartRuleTranslation|null getOrPut($key, $value)
     * @method AbandonedCartRuleTranslation|$this shift(int $count = 1)
     * @method AbandonedCartRuleTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleTranslation|$this pop(int $count = 1)
     * @method AbandonedCartRuleTranslation|null pull($key, \Closure $default = null)
     * @method AbandonedCartRuleTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleTranslation|$this random(callable|int|null $number = null)
     * @method AbandonedCartRuleTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AbandonedCartRuleTranslation|null get($key, \Closure $default = null)
     * @method AbandonedCartRuleTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method AbandonedCartRuleTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AbandonedCartRuleTranslation|null find($key, $default = null)
     * @method AbandonedCartRuleTranslation[] all()
     */
    class _IH_AbandonedCartRuleTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AbandonedCartRuleTranslation[][]|Collection<_IH_AbandonedCartRuleTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AbandonedCartRuleTranslation_QB whereId($value)
     * @method _IH_AbandonedCartRuleTranslation_QB whereAbandonedCartRuleId($value)
     * @method _IH_AbandonedCartRuleTranslation_QB whereLocale($value)
     * @method _IH_AbandonedCartRuleTranslation_QB whereTitle($value)
     * @method AbandonedCartRuleTranslation baseSole(array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation create(array $attributes = [])
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] cursor()
     * @method AbandonedCartRuleTranslation|null|_IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation|_IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleTranslation|_IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation|_IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation first(array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AbandonedCartRuleTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleTranslation firstOrFail(array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AbandonedCartRuleTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AbandonedCartRuleTranslation forceCreate(array $attributes)
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] get(array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation getModel()
     * @method AbandonedCartRuleTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] hydrate(array $items)
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AbandonedCartRuleTranslation make(array $attributes = [])
     * @method AbandonedCartRuleTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AbandonedCartRuleTranslation[]|_IH_AbandonedCartRuleTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AbandonedCartRuleTranslation[]|_IH_AbandonedCartRuleTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AbandonedCartRuleTranslation sole(array|string $columns = ['*'])
     * @method AbandonedCartRuleTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AbandonedCartRuleTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method AdvertisingBannerTranslation|null getOrPut($key, $value)
     * @method AdvertisingBannerTranslation|$this shift(int $count = 1)
     * @method AdvertisingBannerTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AdvertisingBannerTranslation|$this pop(int $count = 1)
     * @method AdvertisingBannerTranslation|null pull($key, \Closure $default = null)
     * @method AdvertisingBannerTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method AdvertisingBannerTranslation|$this random(callable|int|null $number = null)
     * @method AdvertisingBannerTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AdvertisingBannerTranslation|null get($key, \Closure $default = null)
     * @method AdvertisingBannerTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method AdvertisingBannerTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AdvertisingBannerTranslation|null find($key, $default = null)
     * @method AdvertisingBannerTranslation[] all()
     */
    class _IH_AdvertisingBannerTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AdvertisingBannerTranslation[][]|Collection<_IH_AdvertisingBannerTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AdvertisingBannerTranslation_QB whereId($value)
     * @method _IH_AdvertisingBannerTranslation_QB whereAdvertisingBannerId($value)
     * @method _IH_AdvertisingBannerTranslation_QB whereLocale($value)
     * @method _IH_AdvertisingBannerTranslation_QB whereTitle($value)
     * @method _IH_AdvertisingBannerTranslation_QB whereImage($value)
     * @method AdvertisingBannerTranslation baseSole(array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation create(array $attributes = [])
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] cursor()
     * @method AdvertisingBannerTranslation|null|_IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation|_IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdvertisingBannerTranslation|_IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation|_IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation first(array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AdvertisingBannerTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AdvertisingBannerTranslation firstOrFail(array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AdvertisingBannerTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AdvertisingBannerTranslation forceCreate(array $attributes)
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] get(array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation getModel()
     * @method AdvertisingBannerTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] hydrate(array $items)
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AdvertisingBannerTranslation make(array $attributes = [])
     * @method AdvertisingBannerTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AdvertisingBannerTranslation[]|_IH_AdvertisingBannerTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AdvertisingBannerTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AdvertisingBannerTranslation[]|_IH_AdvertisingBannerTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AdvertisingBannerTranslation sole(array|string $columns = ['*'])
     * @method AdvertisingBannerTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AdvertisingBannerTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method AiContentTemplateTranslation|null getOrPut($key, $value)
     * @method AiContentTemplateTranslation|$this shift(int $count = 1)
     * @method AiContentTemplateTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method AiContentTemplateTranslation|$this pop(int $count = 1)
     * @method AiContentTemplateTranslation|null pull($key, \Closure $default = null)
     * @method AiContentTemplateTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method AiContentTemplateTranslation|$this random(callable|int|null $number = null)
     * @method AiContentTemplateTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method AiContentTemplateTranslation|null get($key, \Closure $default = null)
     * @method AiContentTemplateTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method AiContentTemplateTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method AiContentTemplateTranslation|null find($key, $default = null)
     * @method AiContentTemplateTranslation[] all()
     */
    class _IH_AiContentTemplateTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return AiContentTemplateTranslation[][]|Collection<_IH_AiContentTemplateTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_AiContentTemplateTranslation_QB whereId($value)
     * @method _IH_AiContentTemplateTranslation_QB whereAiContentTemplateId($value)
     * @method _IH_AiContentTemplateTranslation_QB whereLocale($value)
     * @method _IH_AiContentTemplateTranslation_QB whereTitle($value)
     * @method _IH_AiContentTemplateTranslation_QB wherePrompt($value)
     * @method AiContentTemplateTranslation baseSole(array|string $columns = ['*'])
     * @method AiContentTemplateTranslation create(array $attributes = [])
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] cursor()
     * @method AiContentTemplateTranslation|null|_IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method AiContentTemplateTranslation|_IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContentTemplateTranslation|_IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method AiContentTemplateTranslation|_IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method AiContentTemplateTranslation first(array|string $columns = ['*'])
     * @method AiContentTemplateTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method AiContentTemplateTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method AiContentTemplateTranslation firstOrFail(array|string $columns = ['*'])
     * @method AiContentTemplateTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method AiContentTemplateTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method AiContentTemplateTranslation forceCreate(array $attributes)
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] get(array|string $columns = ['*'])
     * @method AiContentTemplateTranslation getModel()
     * @method AiContentTemplateTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] hydrate(array $items)
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method AiContentTemplateTranslation make(array $attributes = [])
     * @method AiContentTemplateTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|AiContentTemplateTranslation[]|_IH_AiContentTemplateTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContentTemplateTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|AiContentTemplateTranslation[]|_IH_AiContentTemplateTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method AiContentTemplateTranslation sole(array|string $columns = ['*'])
     * @method AiContentTemplateTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_AiContentTemplateTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method BadgeTranslation|null getOrPut($key, $value)
     * @method BadgeTranslation|$this shift(int $count = 1)
     * @method BadgeTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BadgeTranslation|$this pop(int $count = 1)
     * @method BadgeTranslation|null pull($key, \Closure $default = null)
     * @method BadgeTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method BadgeTranslation|$this random(callable|int|null $number = null)
     * @method BadgeTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BadgeTranslation|null get($key, \Closure $default = null)
     * @method BadgeTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method BadgeTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BadgeTranslation|null find($key, $default = null)
     * @method BadgeTranslation[] all()
     */
    class _IH_BadgeTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BadgeTranslation[][]|Collection<_IH_BadgeTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BadgeTranslation_QB whereId($value)
     * @method _IH_BadgeTranslation_QB whereBadgeId($value)
     * @method _IH_BadgeTranslation_QB whereLocale($value)
     * @method _IH_BadgeTranslation_QB whereTitle($value)
     * @method _IH_BadgeTranslation_QB whereDescription($value)
     * @method BadgeTranslation baseSole(array|string $columns = ['*'])
     * @method BadgeTranslation create(array $attributes = [])
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] cursor()
     * @method BadgeTranslation|null|_IH_BadgeTranslation_C|BadgeTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BadgeTranslation|_IH_BadgeTranslation_C|BadgeTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BadgeTranslation|_IH_BadgeTranslation_C|BadgeTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method BadgeTranslation|_IH_BadgeTranslation_C|BadgeTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method BadgeTranslation first(array|string $columns = ['*'])
     * @method BadgeTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BadgeTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BadgeTranslation firstOrFail(array|string $columns = ['*'])
     * @method BadgeTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BadgeTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BadgeTranslation forceCreate(array $attributes)
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] get(array|string $columns = ['*'])
     * @method BadgeTranslation getModel()
     * @method BadgeTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] hydrate(array $items)
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BadgeTranslation_C|BadgeTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BadgeTranslation make(array $attributes = [])
     * @method BadgeTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BadgeTranslation[]|_IH_BadgeTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BadgeTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BadgeTranslation[]|_IH_BadgeTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BadgeTranslation sole(array|string $columns = ['*'])
     * @method BadgeTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BadgeTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method BlogCategoryTranslation|null getOrPut($key, $value)
     * @method BlogCategoryTranslation|$this shift(int $count = 1)
     * @method BlogCategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategoryTranslation|$this pop(int $count = 1)
     * @method BlogCategoryTranslation|null pull($key, \Closure $default = null)
     * @method BlogCategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method BlogCategoryTranslation|$this random(callable|int|null $number = null)
     * @method BlogCategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogCategoryTranslation|null get($key, \Closure $default = null)
     * @method BlogCategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method BlogCategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogCategoryTranslation|null find($key, $default = null)
     * @method BlogCategoryTranslation[] all()
     */
    class _IH_BlogCategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogCategoryTranslation[][]|Collection<_IH_BlogCategoryTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BlogCategoryTranslation_QB whereId($value)
     * @method _IH_BlogCategoryTranslation_QB whereBlogCategoryId($value)
     * @method _IH_BlogCategoryTranslation_QB whereLocale($value)
     * @method _IH_BlogCategoryTranslation_QB whereTitle($value)
     * @method BlogCategoryTranslation baseSole(array|string $columns = ['*'])
     * @method BlogCategoryTranslation create(array $attributes = [])
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] cursor()
     * @method BlogCategoryTranslation|null|_IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogCategoryTranslation|_IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategoryTranslation|_IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogCategoryTranslation|_IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogCategoryTranslation first(array|string $columns = ['*'])
     * @method BlogCategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogCategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogCategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method BlogCategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BlogCategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogCategoryTranslation forceCreate(array $attributes)
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] get(array|string $columns = ['*'])
     * @method BlogCategoryTranslation getModel()
     * @method BlogCategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] hydrate(array $items)
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BlogCategoryTranslation make(array $attributes = [])
     * @method BlogCategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogCategoryTranslation[]|_IH_BlogCategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategoryTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BlogCategoryTranslation[]|_IH_BlogCategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogCategoryTranslation sole(array|string $columns = ['*'])
     * @method BlogCategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogCategoryTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method BlogTranslation|null getOrPut($key, $value)
     * @method BlogTranslation|$this shift(int $count = 1)
     * @method BlogTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BlogTranslation|$this pop(int $count = 1)
     * @method BlogTranslation|null pull($key, \Closure $default = null)
     * @method BlogTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method BlogTranslation|$this random(callable|int|null $number = null)
     * @method BlogTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BlogTranslation|null get($key, \Closure $default = null)
     * @method BlogTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method BlogTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BlogTranslation|null find($key, $default = null)
     * @method BlogTranslation[] all()
     */
    class _IH_BlogTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BlogTranslation[][]|Collection<_IH_BlogTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BlogTranslation_QB whereId($value)
     * @method _IH_BlogTranslation_QB whereBlogId($value)
     * @method _IH_BlogTranslation_QB whereLocale($value)
     * @method _IH_BlogTranslation_QB whereTitle($value)
     * @method _IH_BlogTranslation_QB whereDescription($value)
     * @method _IH_BlogTranslation_QB whereContent($value)
     * @method _IH_BlogTranslation_QB whereMetaDescription($value)
     * @method BlogTranslation baseSole(array|string $columns = ['*'])
     * @method BlogTranslation create(array $attributes = [])
     * @method _IH_BlogTranslation_C|BlogTranslation[] cursor()
     * @method BlogTranslation|null|_IH_BlogTranslation_C|BlogTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_BlogTranslation_C|BlogTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BlogTranslation|_IH_BlogTranslation_C|BlogTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogTranslation|_IH_BlogTranslation_C|BlogTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method BlogTranslation|_IH_BlogTranslation_C|BlogTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method BlogTranslation first(array|string $columns = ['*'])
     * @method BlogTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BlogTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BlogTranslation firstOrFail(array|string $columns = ['*'])
     * @method BlogTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BlogTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BlogTranslation forceCreate(array $attributes)
     * @method _IH_BlogTranslation_C|BlogTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BlogTranslation_C|BlogTranslation[] get(array|string $columns = ['*'])
     * @method BlogTranslation getModel()
     * @method BlogTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BlogTranslation_C|BlogTranslation[] hydrate(array $items)
     * @method _IH_BlogTranslation_C|BlogTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_BlogTranslation_C|BlogTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BlogTranslation_C|BlogTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BlogTranslation make(array $attributes = [])
     * @method BlogTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BlogTranslation[]|_IH_BlogTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BlogTranslation[]|_IH_BlogTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BlogTranslation sole(array|string $columns = ['*'])
     * @method BlogTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BlogTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method BundleTranslation|null getOrPut($key, $value)
     * @method BundleTranslation|$this shift(int $count = 1)
     * @method BundleTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method BundleTranslation|$this pop(int $count = 1)
     * @method BundleTranslation|null pull($key, \Closure $default = null)
     * @method BundleTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method BundleTranslation|$this random(callable|int|null $number = null)
     * @method BundleTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method BundleTranslation|null get($key, \Closure $default = null)
     * @method BundleTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method BundleTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method BundleTranslation|null find($key, $default = null)
     * @method BundleTranslation[] all()
     */
    class _IH_BundleTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return BundleTranslation[][]|Collection<_IH_BundleTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_BundleTranslation_QB whereId($value)
     * @method _IH_BundleTranslation_QB whereBundleId($value)
     * @method _IH_BundleTranslation_QB whereLocale($value)
     * @method _IH_BundleTranslation_QB whereTitle($value)
     * @method _IH_BundleTranslation_QB whereSeoDescription($value)
     * @method _IH_BundleTranslation_QB whereDescription($value)
     * @method BundleTranslation baseSole(array|string $columns = ['*'])
     * @method BundleTranslation create(array $attributes = [])
     * @method _IH_BundleTranslation_C|BundleTranslation[] cursor()
     * @method BundleTranslation|null|_IH_BundleTranslation_C|BundleTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_BundleTranslation_C|BundleTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method BundleTranslation|_IH_BundleTranslation_C|BundleTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleTranslation|_IH_BundleTranslation_C|BundleTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method BundleTranslation|_IH_BundleTranslation_C|BundleTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method BundleTranslation first(array|string $columns = ['*'])
     * @method BundleTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method BundleTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method BundleTranslation firstOrFail(array|string $columns = ['*'])
     * @method BundleTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method BundleTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method BundleTranslation forceCreate(array $attributes)
     * @method _IH_BundleTranslation_C|BundleTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_BundleTranslation_C|BundleTranslation[] get(array|string $columns = ['*'])
     * @method BundleTranslation getModel()
     * @method BundleTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_BundleTranslation_C|BundleTranslation[] hydrate(array $items)
     * @method _IH_BundleTranslation_C|BundleTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_BundleTranslation_C|BundleTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_BundleTranslation_C|BundleTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method BundleTranslation make(array $attributes = [])
     * @method BundleTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|BundleTranslation[]|_IH_BundleTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|BundleTranslation[]|_IH_BundleTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method BundleTranslation sole(array|string $columns = ['*'])
     * @method BundleTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_BundleTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method CartDiscountTranslation|null getOrPut($key, $value)
     * @method CartDiscountTranslation|$this shift(int $count = 1)
     * @method CartDiscountTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CartDiscountTranslation|$this pop(int $count = 1)
     * @method CartDiscountTranslation|null pull($key, \Closure $default = null)
     * @method CartDiscountTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CartDiscountTranslation|$this random(callable|int|null $number = null)
     * @method CartDiscountTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CartDiscountTranslation|null get($key, \Closure $default = null)
     * @method CartDiscountTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CartDiscountTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CartDiscountTranslation|null find($key, $default = null)
     * @method CartDiscountTranslation[] all()
     */
    class _IH_CartDiscountTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CartDiscountTranslation[][]|Collection<_IH_CartDiscountTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CartDiscountTranslation_QB whereId($value)
     * @method _IH_CartDiscountTranslation_QB whereCartDiscountId($value)
     * @method _IH_CartDiscountTranslation_QB whereLocale($value)
     * @method _IH_CartDiscountTranslation_QB whereTitle($value)
     * @method _IH_CartDiscountTranslation_QB whereSubtitle($value)
     * @method CartDiscountTranslation baseSole(array|string $columns = ['*'])
     * @method CartDiscountTranslation create(array $attributes = [])
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] cursor()
     * @method CartDiscountTranslation|null|_IH_CartDiscountTranslation_C|CartDiscountTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CartDiscountTranslation|_IH_CartDiscountTranslation_C|CartDiscountTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CartDiscountTranslation|_IH_CartDiscountTranslation_C|CartDiscountTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CartDiscountTranslation|_IH_CartDiscountTranslation_C|CartDiscountTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CartDiscountTranslation first(array|string $columns = ['*'])
     * @method CartDiscountTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CartDiscountTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CartDiscountTranslation firstOrFail(array|string $columns = ['*'])
     * @method CartDiscountTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CartDiscountTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CartDiscountTranslation forceCreate(array $attributes)
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] get(array|string $columns = ['*'])
     * @method CartDiscountTranslation getModel()
     * @method CartDiscountTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] hydrate(array $items)
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CartDiscountTranslation_C|CartDiscountTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CartDiscountTranslation make(array $attributes = [])
     * @method CartDiscountTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CartDiscountTranslation[]|_IH_CartDiscountTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CartDiscountTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CartDiscountTranslation[]|_IH_CartDiscountTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CartDiscountTranslation sole(array|string $columns = ['*'])
     * @method CartDiscountTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CartDiscountTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method CashbackRuleTranslation|null getOrPut($key, $value)
     * @method CashbackRuleTranslation|$this shift(int $count = 1)
     * @method CashbackRuleTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleTranslation|$this pop(int $count = 1)
     * @method CashbackRuleTranslation|null pull($key, \Closure $default = null)
     * @method CashbackRuleTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleTranslation|$this random(callable|int|null $number = null)
     * @method CashbackRuleTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CashbackRuleTranslation|null get($key, \Closure $default = null)
     * @method CashbackRuleTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CashbackRuleTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CashbackRuleTranslation|null find($key, $default = null)
     * @method CashbackRuleTranslation[] all()
     */
    class _IH_CashbackRuleTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CashbackRuleTranslation[][]|Collection<_IH_CashbackRuleTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CashbackRuleTranslation_QB whereId($value)
     * @method _IH_CashbackRuleTranslation_QB whereCashbackRuleId($value)
     * @method _IH_CashbackRuleTranslation_QB whereLocale($value)
     * @method _IH_CashbackRuleTranslation_QB whereTitle($value)
     * @method CashbackRuleTranslation baseSole(array|string $columns = ['*'])
     * @method CashbackRuleTranslation create(array $attributes = [])
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] cursor()
     * @method CashbackRuleTranslation|null|_IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CashbackRuleTranslation|_IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleTranslation|_IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CashbackRuleTranslation|_IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CashbackRuleTranslation first(array|string $columns = ['*'])
     * @method CashbackRuleTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CashbackRuleTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CashbackRuleTranslation firstOrFail(array|string $columns = ['*'])
     * @method CashbackRuleTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CashbackRuleTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CashbackRuleTranslation forceCreate(array $attributes)
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] get(array|string $columns = ['*'])
     * @method CashbackRuleTranslation getModel()
     * @method CashbackRuleTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] hydrate(array $items)
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CashbackRuleTranslation make(array $attributes = [])
     * @method CashbackRuleTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CashbackRuleTranslation[]|_IH_CashbackRuleTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CashbackRuleTranslation[]|_IH_CashbackRuleTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CashbackRuleTranslation sole(array|string $columns = ['*'])
     * @method CashbackRuleTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CashbackRuleTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method CategoryTranslation|null getOrPut($key, $value)
     * @method CategoryTranslation|$this shift(int $count = 1)
     * @method CategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryTranslation|$this pop(int $count = 1)
     * @method CategoryTranslation|null pull($key, \Closure $default = null)
     * @method CategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CategoryTranslation|$this random(callable|int|null $number = null)
     * @method CategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CategoryTranslation|null get($key, \Closure $default = null)
     * @method CategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CategoryTranslation|null find($key, $default = null)
     * @method CategoryTranslation[] all()
     */
    class _IH_CategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CategoryTranslation[][]|Collection<_IH_CategoryTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CategoryTranslation_QB whereId($value)
     * @method _IH_CategoryTranslation_QB whereCategoryId($value)
     * @method _IH_CategoryTranslation_QB whereLocale($value)
     * @method _IH_CategoryTranslation_QB whereTitle($value)
     * @method CategoryTranslation baseSole(array|string $columns = ['*'])
     * @method CategoryTranslation create(array $attributes = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] cursor()
     * @method CategoryTranslation|null|_IH_CategoryTranslation_C|CategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CategoryTranslation|_IH_CategoryTranslation_C|CategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CategoryTranslation first(array|string $columns = ['*'])
     * @method CategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method CategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CategoryTranslation forceCreate(array $attributes)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] get(array|string $columns = ['*'])
     * @method CategoryTranslation getModel()
     * @method CategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] hydrate(array $items)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CategoryTranslation_C|CategoryTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CategoryTranslation make(array $attributes = [])
     * @method CategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CategoryTranslation[]|_IH_CategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CategoryTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CategoryTranslation[]|_IH_CategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CategoryTranslation sole(array|string $columns = ['*'])
     * @method CategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CategoryTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method CertificateTemplateTranslation|null getOrPut($key, $value)
     * @method CertificateTemplateTranslation|$this shift(int $count = 1)
     * @method CertificateTemplateTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method CertificateTemplateTranslation|$this pop(int $count = 1)
     * @method CertificateTemplateTranslation|null pull($key, \Closure $default = null)
     * @method CertificateTemplateTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method CertificateTemplateTranslation|$this random(callable|int|null $number = null)
     * @method CertificateTemplateTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method CertificateTemplateTranslation|null get($key, \Closure $default = null)
     * @method CertificateTemplateTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method CertificateTemplateTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method CertificateTemplateTranslation|null find($key, $default = null)
     * @method CertificateTemplateTranslation[] all()
     */
    class _IH_CertificateTemplateTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return CertificateTemplateTranslation[][]|Collection<_IH_CertificateTemplateTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_CertificateTemplateTranslation_QB whereId($value)
     * @method _IH_CertificateTemplateTranslation_QB whereCertificateTemplateId($value)
     * @method _IH_CertificateTemplateTranslation_QB whereLocale($value)
     * @method _IH_CertificateTemplateTranslation_QB whereTitle($value)
     * @method _IH_CertificateTemplateTranslation_QB whereBody($value)
     * @method _IH_CertificateTemplateTranslation_QB whereRtl($value)
     * @method _IH_CertificateTemplateTranslation_QB whereElements($value)
     * @method CertificateTemplateTranslation baseSole(array|string $columns = ['*'])
     * @method CertificateTemplateTranslation create(array $attributes = [])
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] cursor()
     * @method CertificateTemplateTranslation|null|_IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method CertificateTemplateTranslation|_IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CertificateTemplateTranslation|_IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method CertificateTemplateTranslation|_IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method CertificateTemplateTranslation first(array|string $columns = ['*'])
     * @method CertificateTemplateTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method CertificateTemplateTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method CertificateTemplateTranslation firstOrFail(array|string $columns = ['*'])
     * @method CertificateTemplateTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method CertificateTemplateTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method CertificateTemplateTranslation forceCreate(array $attributes)
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] get(array|string $columns = ['*'])
     * @method CertificateTemplateTranslation getModel()
     * @method CertificateTemplateTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] hydrate(array $items)
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method CertificateTemplateTranslation make(array $attributes = [])
     * @method CertificateTemplateTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|CertificateTemplateTranslation[]|_IH_CertificateTemplateTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CertificateTemplateTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|CertificateTemplateTranslation[]|_IH_CertificateTemplateTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method CertificateTemplateTranslation sole(array|string $columns = ['*'])
     * @method CertificateTemplateTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_CertificateTemplateTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FaqTranslation|null getOrPut($key, $value)
     * @method FaqTranslation|$this shift(int $count = 1)
     * @method FaqTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FaqTranslation|$this pop(int $count = 1)
     * @method FaqTranslation|null pull($key, \Closure $default = null)
     * @method FaqTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FaqTranslation|$this random(callable|int|null $number = null)
     * @method FaqTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FaqTranslation|null get($key, \Closure $default = null)
     * @method FaqTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FaqTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FaqTranslation|null find($key, $default = null)
     * @method FaqTranslation[] all()
     */
    class _IH_FaqTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FaqTranslation[][]|Collection<_IH_FaqTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FaqTranslation_QB whereId($value)
     * @method _IH_FaqTranslation_QB whereFaqId($value)
     * @method _IH_FaqTranslation_QB whereLocale($value)
     * @method _IH_FaqTranslation_QB whereTitle($value)
     * @method _IH_FaqTranslation_QB whereAnswer($value)
     * @method FaqTranslation baseSole(array|string $columns = ['*'])
     * @method FaqTranslation create(array $attributes = [])
     * @method _IH_FaqTranslation_C|FaqTranslation[] cursor()
     * @method FaqTranslation|null|_IH_FaqTranslation_C|FaqTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FaqTranslation_C|FaqTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FaqTranslation|_IH_FaqTranslation_C|FaqTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FaqTranslation first(array|string $columns = ['*'])
     * @method FaqTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FaqTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FaqTranslation firstOrFail(array|string $columns = ['*'])
     * @method FaqTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FaqTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FaqTranslation forceCreate(array $attributes)
     * @method _IH_FaqTranslation_C|FaqTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FaqTranslation_C|FaqTranslation[] get(array|string $columns = ['*'])
     * @method FaqTranslation getModel()
     * @method FaqTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FaqTranslation_C|FaqTranslation[] hydrate(array $items)
     * @method _IH_FaqTranslation_C|FaqTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FaqTranslation_C|FaqTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FaqTranslation_C|FaqTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FaqTranslation make(array $attributes = [])
     * @method FaqTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FaqTranslation[]|_IH_FaqTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FaqTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FaqTranslation[]|_IH_FaqTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FaqTranslation sole(array|string $columns = ['*'])
     * @method FaqTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FaqTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FeatureWebinarTranslation|null getOrPut($key, $value)
     * @method FeatureWebinarTranslation|$this shift(int $count = 1)
     * @method FeatureWebinarTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FeatureWebinarTranslation|$this pop(int $count = 1)
     * @method FeatureWebinarTranslation|null pull($key, \Closure $default = null)
     * @method FeatureWebinarTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FeatureWebinarTranslation|$this random(callable|int|null $number = null)
     * @method FeatureWebinarTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FeatureWebinarTranslation|null get($key, \Closure $default = null)
     * @method FeatureWebinarTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FeatureWebinarTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FeatureWebinarTranslation|null find($key, $default = null)
     * @method FeatureWebinarTranslation[] all()
     */
    class _IH_FeatureWebinarTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FeatureWebinarTranslation[][]|Collection<_IH_FeatureWebinarTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FeatureWebinarTranslation_QB whereId($value)
     * @method _IH_FeatureWebinarTranslation_QB whereFeatureWebinarId($value)
     * @method _IH_FeatureWebinarTranslation_QB whereLocale($value)
     * @method _IH_FeatureWebinarTranslation_QB whereDescription($value)
     * @method FeatureWebinarTranslation baseSole(array|string $columns = ['*'])
     * @method FeatureWebinarTranslation create(array $attributes = [])
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] cursor()
     * @method FeatureWebinarTranslation|null|_IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FeatureWebinarTranslation|_IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FeatureWebinarTranslation|_IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FeatureWebinarTranslation|_IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FeatureWebinarTranslation first(array|string $columns = ['*'])
     * @method FeatureWebinarTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FeatureWebinarTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FeatureWebinarTranslation firstOrFail(array|string $columns = ['*'])
     * @method FeatureWebinarTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FeatureWebinarTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FeatureWebinarTranslation forceCreate(array $attributes)
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] get(array|string $columns = ['*'])
     * @method FeatureWebinarTranslation getModel()
     * @method FeatureWebinarTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] hydrate(array $items)
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FeatureWebinarTranslation make(array $attributes = [])
     * @method FeatureWebinarTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FeatureWebinarTranslation[]|_IH_FeatureWebinarTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FeatureWebinarTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FeatureWebinarTranslation[]|_IH_FeatureWebinarTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FeatureWebinarTranslation sole(array|string $columns = ['*'])
     * @method FeatureWebinarTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FeatureWebinarTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FileTranslation|null getOrPut($key, $value)
     * @method FileTranslation|$this shift(int $count = 1)
     * @method FileTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FileTranslation|$this pop(int $count = 1)
     * @method FileTranslation|null pull($key, \Closure $default = null)
     * @method FileTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FileTranslation|$this random(callable|int|null $number = null)
     * @method FileTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FileTranslation|null get($key, \Closure $default = null)
     * @method FileTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FileTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FileTranslation|null find($key, $default = null)
     * @method FileTranslation[] all()
     */
    class _IH_FileTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FileTranslation[][]|Collection<_IH_FileTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FileTranslation_QB whereId($value)
     * @method _IH_FileTranslation_QB whereFileId($value)
     * @method _IH_FileTranslation_QB whereLocale($value)
     * @method _IH_FileTranslation_QB whereTitle($value)
     * @method _IH_FileTranslation_QB whereDescription($value)
     * @method FileTranslation baseSole(array|string $columns = ['*'])
     * @method FileTranslation create(array $attributes = [])
     * @method _IH_FileTranslation_C|FileTranslation[] cursor()
     * @method FileTranslation|null|_IH_FileTranslation_C|FileTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FileTranslation_C|FileTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FileTranslation|_IH_FileTranslation_C|FileTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FileTranslation|_IH_FileTranslation_C|FileTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FileTranslation|_IH_FileTranslation_C|FileTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FileTranslation first(array|string $columns = ['*'])
     * @method FileTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FileTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FileTranslation firstOrFail(array|string $columns = ['*'])
     * @method FileTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FileTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FileTranslation forceCreate(array $attributes)
     * @method _IH_FileTranslation_C|FileTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FileTranslation_C|FileTranslation[] get(array|string $columns = ['*'])
     * @method FileTranslation getModel()
     * @method FileTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FileTranslation_C|FileTranslation[] hydrate(array $items)
     * @method _IH_FileTranslation_C|FileTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FileTranslation_C|FileTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FileTranslation_C|FileTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FileTranslation make(array $attributes = [])
     * @method FileTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FileTranslation[]|_IH_FileTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FileTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FileTranslation[]|_IH_FileTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FileTranslation sole(array|string $columns = ['*'])
     * @method FileTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FileTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FilterOptionTranslation|null getOrPut($key, $value)
     * @method FilterOptionTranslation|$this shift(int $count = 1)
     * @method FilterOptionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FilterOptionTranslation|$this pop(int $count = 1)
     * @method FilterOptionTranslation|null pull($key, \Closure $default = null)
     * @method FilterOptionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FilterOptionTranslation|$this random(callable|int|null $number = null)
     * @method FilterOptionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FilterOptionTranslation|null get($key, \Closure $default = null)
     * @method FilterOptionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FilterOptionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FilterOptionTranslation|null find($key, $default = null)
     * @method FilterOptionTranslation[] all()
     */
    class _IH_FilterOptionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilterOptionTranslation[][]|Collection<_IH_FilterOptionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilterOptionTranslation_QB whereId($value)
     * @method _IH_FilterOptionTranslation_QB whereFilterOptionId($value)
     * @method _IH_FilterOptionTranslation_QB whereLocale($value)
     * @method _IH_FilterOptionTranslation_QB whereTitle($value)
     * @method FilterOptionTranslation baseSole(array|string $columns = ['*'])
     * @method FilterOptionTranslation create(array $attributes = [])
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] cursor()
     * @method FilterOptionTranslation|null|_IH_FilterOptionTranslation_C|FilterOptionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FilterOptionTranslation|_IH_FilterOptionTranslation_C|FilterOptionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterOptionTranslation|_IH_FilterOptionTranslation_C|FilterOptionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FilterOptionTranslation|_IH_FilterOptionTranslation_C|FilterOptionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FilterOptionTranslation first(array|string $columns = ['*'])
     * @method FilterOptionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterOptionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FilterOptionTranslation firstOrFail(array|string $columns = ['*'])
     * @method FilterOptionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FilterOptionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilterOptionTranslation forceCreate(array $attributes)
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] get(array|string $columns = ['*'])
     * @method FilterOptionTranslation getModel()
     * @method FilterOptionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] hydrate(array $items)
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FilterOptionTranslation_C|FilterOptionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FilterOptionTranslation make(array $attributes = [])
     * @method FilterOptionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilterOptionTranslation[]|_IH_FilterOptionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterOptionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FilterOptionTranslation[]|_IH_FilterOptionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterOptionTranslation sole(array|string $columns = ['*'])
     * @method FilterOptionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilterOptionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FilterTranslation|null getOrPut($key, $value)
     * @method FilterTranslation|$this shift(int $count = 1)
     * @method FilterTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FilterTranslation|$this pop(int $count = 1)
     * @method FilterTranslation|null pull($key, \Closure $default = null)
     * @method FilterTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FilterTranslation|$this random(callable|int|null $number = null)
     * @method FilterTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FilterTranslation|null get($key, \Closure $default = null)
     * @method FilterTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FilterTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FilterTranslation|null find($key, $default = null)
     * @method FilterTranslation[] all()
     */
    class _IH_FilterTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FilterTranslation[][]|Collection<_IH_FilterTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FilterTranslation_QB whereId($value)
     * @method _IH_FilterTranslation_QB whereFilterId($value)
     * @method _IH_FilterTranslation_QB whereLocale($value)
     * @method _IH_FilterTranslation_QB whereTitle($value)
     * @method FilterTranslation baseSole(array|string $columns = ['*'])
     * @method FilterTranslation create(array $attributes = [])
     * @method _IH_FilterTranslation_C|FilterTranslation[] cursor()
     * @method FilterTranslation|null|_IH_FilterTranslation_C|FilterTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FilterTranslation_C|FilterTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FilterTranslation|_IH_FilterTranslation_C|FilterTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterTranslation|_IH_FilterTranslation_C|FilterTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FilterTranslation|_IH_FilterTranslation_C|FilterTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FilterTranslation first(array|string $columns = ['*'])
     * @method FilterTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FilterTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FilterTranslation firstOrFail(array|string $columns = ['*'])
     * @method FilterTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FilterTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FilterTranslation forceCreate(array $attributes)
     * @method _IH_FilterTranslation_C|FilterTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FilterTranslation_C|FilterTranslation[] get(array|string $columns = ['*'])
     * @method FilterTranslation getModel()
     * @method FilterTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FilterTranslation_C|FilterTranslation[] hydrate(array $items)
     * @method _IH_FilterTranslation_C|FilterTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FilterTranslation_C|FilterTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FilterTranslation_C|FilterTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FilterTranslation make(array $attributes = [])
     * @method FilterTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FilterTranslation[]|_IH_FilterTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FilterTranslation[]|_IH_FilterTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FilterTranslation sole(array|string $columns = ['*'])
     * @method FilterTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FilterTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FloatingBarTranslation|null getOrPut($key, $value)
     * @method FloatingBarTranslation|$this shift(int $count = 1)
     * @method FloatingBarTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FloatingBarTranslation|$this pop(int $count = 1)
     * @method FloatingBarTranslation|null pull($key, \Closure $default = null)
     * @method FloatingBarTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FloatingBarTranslation|$this random(callable|int|null $number = null)
     * @method FloatingBarTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FloatingBarTranslation|null get($key, \Closure $default = null)
     * @method FloatingBarTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FloatingBarTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FloatingBarTranslation|null find($key, $default = null)
     * @method FloatingBarTranslation[] all()
     */
    class _IH_FloatingBarTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FloatingBarTranslation[][]|Collection<_IH_FloatingBarTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FloatingBarTranslation_QB whereId($value)
     * @method _IH_FloatingBarTranslation_QB whereFloatingBarId($value)
     * @method _IH_FloatingBarTranslation_QB whereLocale($value)
     * @method _IH_FloatingBarTranslation_QB whereTitle($value)
     * @method _IH_FloatingBarTranslation_QB whereDescription($value)
     * @method _IH_FloatingBarTranslation_QB whereBtnText($value)
     * @method FloatingBarTranslation baseSole(array|string $columns = ['*'])
     * @method FloatingBarTranslation create(array $attributes = [])
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] cursor()
     * @method FloatingBarTranslation|null|_IH_FloatingBarTranslation_C|FloatingBarTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FloatingBarTranslation|_IH_FloatingBarTranslation_C|FloatingBarTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FloatingBarTranslation|_IH_FloatingBarTranslation_C|FloatingBarTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FloatingBarTranslation|_IH_FloatingBarTranslation_C|FloatingBarTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FloatingBarTranslation first(array|string $columns = ['*'])
     * @method FloatingBarTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FloatingBarTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FloatingBarTranslation firstOrFail(array|string $columns = ['*'])
     * @method FloatingBarTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FloatingBarTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FloatingBarTranslation forceCreate(array $attributes)
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] get(array|string $columns = ['*'])
     * @method FloatingBarTranslation getModel()
     * @method FloatingBarTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] hydrate(array $items)
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FloatingBarTranslation_C|FloatingBarTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FloatingBarTranslation make(array $attributes = [])
     * @method FloatingBarTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FloatingBarTranslation[]|_IH_FloatingBarTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FloatingBarTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FloatingBarTranslation[]|_IH_FloatingBarTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FloatingBarTranslation sole(array|string $columns = ['*'])
     * @method FloatingBarTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FloatingBarTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FormFieldOptionTranslation|null getOrPut($key, $value)
     * @method FormFieldOptionTranslation|$this shift(int $count = 1)
     * @method FormFieldOptionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldOptionTranslation|$this pop(int $count = 1)
     * @method FormFieldOptionTranslation|null pull($key, \Closure $default = null)
     * @method FormFieldOptionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FormFieldOptionTranslation|$this random(callable|int|null $number = null)
     * @method FormFieldOptionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldOptionTranslation|null get($key, \Closure $default = null)
     * @method FormFieldOptionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FormFieldOptionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormFieldOptionTranslation|null find($key, $default = null)
     * @method FormFieldOptionTranslation[] all()
     */
    class _IH_FormFieldOptionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormFieldOptionTranslation[][]|Collection<_IH_FormFieldOptionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormFieldOptionTranslation_QB whereId($value)
     * @method _IH_FormFieldOptionTranslation_QB whereFormFieldOptionId($value)
     * @method _IH_FormFieldOptionTranslation_QB whereLocale($value)
     * @method _IH_FormFieldOptionTranslation_QB whereTitle($value)
     * @method FormFieldOptionTranslation baseSole(array|string $columns = ['*'])
     * @method FormFieldOptionTranslation create(array $attributes = [])
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] cursor()
     * @method FormFieldOptionTranslation|null|_IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormFieldOptionTranslation|_IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldOptionTranslation|_IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FormFieldOptionTranslation|_IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FormFieldOptionTranslation first(array|string $columns = ['*'])
     * @method FormFieldOptionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldOptionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FormFieldOptionTranslation firstOrFail(array|string $columns = ['*'])
     * @method FormFieldOptionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FormFieldOptionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormFieldOptionTranslation forceCreate(array $attributes)
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] get(array|string $columns = ['*'])
     * @method FormFieldOptionTranslation getModel()
     * @method FormFieldOptionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] hydrate(array $items)
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormFieldOptionTranslation make(array $attributes = [])
     * @method FormFieldOptionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormFieldOptionTranslation[]|_IH_FormFieldOptionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldOptionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormFieldOptionTranslation[]|_IH_FormFieldOptionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldOptionTranslation sole(array|string $columns = ['*'])
     * @method FormFieldOptionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormFieldOptionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FormFieldTranslation|null getOrPut($key, $value)
     * @method FormFieldTranslation|$this shift(int $count = 1)
     * @method FormFieldTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldTranslation|$this pop(int $count = 1)
     * @method FormFieldTranslation|null pull($key, \Closure $default = null)
     * @method FormFieldTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FormFieldTranslation|$this random(callable|int|null $number = null)
     * @method FormFieldTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormFieldTranslation|null get($key, \Closure $default = null)
     * @method FormFieldTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FormFieldTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormFieldTranslation|null find($key, $default = null)
     * @method FormFieldTranslation[] all()
     */
    class _IH_FormFieldTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormFieldTranslation[][]|Collection<_IH_FormFieldTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormFieldTranslation_QB whereId($value)
     * @method _IH_FormFieldTranslation_QB whereFormFieldId($value)
     * @method _IH_FormFieldTranslation_QB whereLocale($value)
     * @method _IH_FormFieldTranslation_QB whereTitle($value)
     * @method FormFieldTranslation baseSole(array|string $columns = ['*'])
     * @method FormFieldTranslation create(array $attributes = [])
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] cursor()
     * @method FormFieldTranslation|null|_IH_FormFieldTranslation_C|FormFieldTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormFieldTranslation|_IH_FormFieldTranslation_C|FormFieldTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldTranslation|_IH_FormFieldTranslation_C|FormFieldTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FormFieldTranslation|_IH_FormFieldTranslation_C|FormFieldTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FormFieldTranslation first(array|string $columns = ['*'])
     * @method FormFieldTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormFieldTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FormFieldTranslation firstOrFail(array|string $columns = ['*'])
     * @method FormFieldTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FormFieldTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormFieldTranslation forceCreate(array $attributes)
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] get(array|string $columns = ['*'])
     * @method FormFieldTranslation getModel()
     * @method FormFieldTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] hydrate(array $items)
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormFieldTranslation_C|FormFieldTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormFieldTranslation make(array $attributes = [])
     * @method FormFieldTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormFieldTranslation[]|_IH_FormFieldTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormFieldTranslation[]|_IH_FormFieldTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormFieldTranslation sole(array|string $columns = ['*'])
     * @method FormFieldTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormFieldTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method FormTranslation|null getOrPut($key, $value)
     * @method FormTranslation|$this shift(int $count = 1)
     * @method FormTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method FormTranslation|$this pop(int $count = 1)
     * @method FormTranslation|null pull($key, \Closure $default = null)
     * @method FormTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method FormTranslation|$this random(callable|int|null $number = null)
     * @method FormTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method FormTranslation|null get($key, \Closure $default = null)
     * @method FormTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method FormTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method FormTranslation|null find($key, $default = null)
     * @method FormTranslation[] all()
     */
    class _IH_FormTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return FormTranslation[][]|Collection<_IH_FormTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_FormTranslation_QB whereId($value)
     * @method _IH_FormTranslation_QB whereFormId($value)
     * @method _IH_FormTranslation_QB whereLocale($value)
     * @method _IH_FormTranslation_QB whereTitle($value)
     * @method _IH_FormTranslation_QB whereHeadingTitle($value)
     * @method _IH_FormTranslation_QB whereDescription($value)
     * @method _IH_FormTranslation_QB whereWelcomeMessageTitle($value)
     * @method _IH_FormTranslation_QB whereWelcomeMessageDescription($value)
     * @method _IH_FormTranslation_QB whereTankYouMessageTitle($value)
     * @method _IH_FormTranslation_QB whereTankYouMessageDescription($value)
     * @method FormTranslation baseSole(array|string $columns = ['*'])
     * @method FormTranslation create(array $attributes = [])
     * @method _IH_FormTranslation_C|FormTranslation[] cursor()
     * @method FormTranslation|null|_IH_FormTranslation_C|FormTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_FormTranslation_C|FormTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method FormTranslation|_IH_FormTranslation_C|FormTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormTranslation|_IH_FormTranslation_C|FormTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method FormTranslation|_IH_FormTranslation_C|FormTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method FormTranslation first(array|string $columns = ['*'])
     * @method FormTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method FormTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method FormTranslation firstOrFail(array|string $columns = ['*'])
     * @method FormTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method FormTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method FormTranslation forceCreate(array $attributes)
     * @method _IH_FormTranslation_C|FormTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_FormTranslation_C|FormTranslation[] get(array|string $columns = ['*'])
     * @method FormTranslation getModel()
     * @method FormTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_FormTranslation_C|FormTranslation[] hydrate(array $items)
     * @method _IH_FormTranslation_C|FormTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_FormTranslation_C|FormTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_FormTranslation_C|FormTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method FormTranslation make(array $attributes = [])
     * @method FormTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|FormTranslation[]|_IH_FormTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|FormTranslation[]|_IH_FormTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method FormTranslation sole(array|string $columns = ['*'])
     * @method FormTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_FormTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ForumTranslation|null getOrPut($key, $value)
     * @method ForumTranslation|$this shift(int $count = 1)
     * @method ForumTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTranslation|$this pop(int $count = 1)
     * @method ForumTranslation|null pull($key, \Closure $default = null)
     * @method ForumTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ForumTranslation|$this random(callable|int|null $number = null)
     * @method ForumTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ForumTranslation|null get($key, \Closure $default = null)
     * @method ForumTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ForumTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ForumTranslation|null find($key, $default = null)
     * @method ForumTranslation[] all()
     */
    class _IH_ForumTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ForumTranslation[][]|Collection<_IH_ForumTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ForumTranslation_QB whereId($value)
     * @method _IH_ForumTranslation_QB whereForumId($value)
     * @method _IH_ForumTranslation_QB whereLocale($value)
     * @method _IH_ForumTranslation_QB whereTitle($value)
     * @method _IH_ForumTranslation_QB whereDescription($value)
     * @method ForumTranslation baseSole(array|string $columns = ['*'])
     * @method ForumTranslation create(array $attributes = [])
     * @method _IH_ForumTranslation_C|ForumTranslation[] cursor()
     * @method ForumTranslation|null|_IH_ForumTranslation_C|ForumTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ForumTranslation_C|ForumTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ForumTranslation|_IH_ForumTranslation_C|ForumTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTranslation|_IH_ForumTranslation_C|ForumTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ForumTranslation|_IH_ForumTranslation_C|ForumTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ForumTranslation first(array|string $columns = ['*'])
     * @method ForumTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ForumTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ForumTranslation firstOrFail(array|string $columns = ['*'])
     * @method ForumTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ForumTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ForumTranslation forceCreate(array $attributes)
     * @method _IH_ForumTranslation_C|ForumTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ForumTranslation_C|ForumTranslation[] get(array|string $columns = ['*'])
     * @method ForumTranslation getModel()
     * @method ForumTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ForumTranslation_C|ForumTranslation[] hydrate(array $items)
     * @method _IH_ForumTranslation_C|ForumTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ForumTranslation_C|ForumTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ForumTranslation_C|ForumTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ForumTranslation make(array $attributes = [])
     * @method ForumTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ForumTranslation[]|_IH_ForumTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ForumTranslation[]|_IH_ForumTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ForumTranslation sole(array|string $columns = ['*'])
     * @method ForumTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ForumTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method HomePageStatisticTranslation|null getOrPut($key, $value)
     * @method HomePageStatisticTranslation|$this shift(int $count = 1)
     * @method HomePageStatisticTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method HomePageStatisticTranslation|$this pop(int $count = 1)
     * @method HomePageStatisticTranslation|null pull($key, \Closure $default = null)
     * @method HomePageStatisticTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method HomePageStatisticTranslation|$this random(callable|int|null $number = null)
     * @method HomePageStatisticTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method HomePageStatisticTranslation|null get($key, \Closure $default = null)
     * @method HomePageStatisticTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method HomePageStatisticTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method HomePageStatisticTranslation|null find($key, $default = null)
     * @method HomePageStatisticTranslation[] all()
     */
    class _IH_HomePageStatisticTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return HomePageStatisticTranslation[][]|Collection<_IH_HomePageStatisticTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_HomePageStatisticTranslation_QB whereId($value)
     * @method _IH_HomePageStatisticTranslation_QB whereHomePageStatisticId($value)
     * @method _IH_HomePageStatisticTranslation_QB whereLocale($value)
     * @method _IH_HomePageStatisticTranslation_QB whereTitle($value)
     * @method _IH_HomePageStatisticTranslation_QB whereDescription($value)
     * @method HomePageStatisticTranslation baseSole(array|string $columns = ['*'])
     * @method HomePageStatisticTranslation create(array $attributes = [])
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] cursor()
     * @method HomePageStatisticTranslation|null|_IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method HomePageStatisticTranslation|_IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomePageStatisticTranslation|_IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method HomePageStatisticTranslation|_IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method HomePageStatisticTranslation first(array|string $columns = ['*'])
     * @method HomePageStatisticTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method HomePageStatisticTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method HomePageStatisticTranslation firstOrFail(array|string $columns = ['*'])
     * @method HomePageStatisticTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method HomePageStatisticTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method HomePageStatisticTranslation forceCreate(array $attributes)
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] get(array|string $columns = ['*'])
     * @method HomePageStatisticTranslation getModel()
     * @method HomePageStatisticTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] hydrate(array $items)
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method HomePageStatisticTranslation make(array $attributes = [])
     * @method HomePageStatisticTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|HomePageStatisticTranslation[]|_IH_HomePageStatisticTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomePageStatisticTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|HomePageStatisticTranslation[]|_IH_HomePageStatisticTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method HomePageStatisticTranslation sole(array|string $columns = ['*'])
     * @method HomePageStatisticTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_HomePageStatisticTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentStepTranslation|null getOrPut($key, $value)
     * @method InstallmentStepTranslation|$this shift(int $count = 1)
     * @method InstallmentStepTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentStepTranslation|$this pop(int $count = 1)
     * @method InstallmentStepTranslation|null pull($key, \Closure $default = null)
     * @method InstallmentStepTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentStepTranslation|$this random(callable|int|null $number = null)
     * @method InstallmentStepTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentStepTranslation|null get($key, \Closure $default = null)
     * @method InstallmentStepTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentStepTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentStepTranslation|null find($key, $default = null)
     * @method InstallmentStepTranslation[] all()
     */
    class _IH_InstallmentStepTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentStepTranslation[][]|Collection<_IH_InstallmentStepTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentStepTranslation_QB whereId($value)
     * @method _IH_InstallmentStepTranslation_QB whereInstallmentStepId($value)
     * @method _IH_InstallmentStepTranslation_QB whereLocale($value)
     * @method _IH_InstallmentStepTranslation_QB whereTitle($value)
     * @method InstallmentStepTranslation baseSole(array|string $columns = ['*'])
     * @method InstallmentStepTranslation create(array $attributes = [])
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] cursor()
     * @method InstallmentStepTranslation|null|_IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentStepTranslation|_IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentStepTranslation|_IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentStepTranslation|_IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentStepTranslation first(array|string $columns = ['*'])
     * @method InstallmentStepTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentStepTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentStepTranslation firstOrFail(array|string $columns = ['*'])
     * @method InstallmentStepTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentStepTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentStepTranslation forceCreate(array $attributes)
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] get(array|string $columns = ['*'])
     * @method InstallmentStepTranslation getModel()
     * @method InstallmentStepTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] hydrate(array $items)
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentStepTranslation make(array $attributes = [])
     * @method InstallmentStepTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentStepTranslation[]|_IH_InstallmentStepTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentStepTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentStepTranslation[]|_IH_InstallmentStepTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentStepTranslation sole(array|string $columns = ['*'])
     * @method InstallmentStepTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentStepTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method InstallmentTranslation|null getOrPut($key, $value)
     * @method InstallmentTranslation|$this shift(int $count = 1)
     * @method InstallmentTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentTranslation|$this pop(int $count = 1)
     * @method InstallmentTranslation|null pull($key, \Closure $default = null)
     * @method InstallmentTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method InstallmentTranslation|$this random(callable|int|null $number = null)
     * @method InstallmentTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method InstallmentTranslation|null get($key, \Closure $default = null)
     * @method InstallmentTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method InstallmentTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method InstallmentTranslation|null find($key, $default = null)
     * @method InstallmentTranslation[] all()
     */
    class _IH_InstallmentTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return InstallmentTranslation[][]|Collection<_IH_InstallmentTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_InstallmentTranslation_QB whereId($value)
     * @method _IH_InstallmentTranslation_QB whereInstallmentId($value)
     * @method _IH_InstallmentTranslation_QB whereLocale($value)
     * @method _IH_InstallmentTranslation_QB whereTitle($value)
     * @method _IH_InstallmentTranslation_QB whereMainTitle($value)
     * @method _IH_InstallmentTranslation_QB whereDescription($value)
     * @method _IH_InstallmentTranslation_QB whereBanner($value)
     * @method _IH_InstallmentTranslation_QB whereOptions($value)
     * @method _IH_InstallmentTranslation_QB whereVerificationDescription($value)
     * @method _IH_InstallmentTranslation_QB whereVerificationBanner($value)
     * @method _IH_InstallmentTranslation_QB whereVerificationVideo($value)
     * @method InstallmentTranslation baseSole(array|string $columns = ['*'])
     * @method InstallmentTranslation create(array $attributes = [])
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] cursor()
     * @method InstallmentTranslation|null|_IH_InstallmentTranslation_C|InstallmentTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method InstallmentTranslation|_IH_InstallmentTranslation_C|InstallmentTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentTranslation|_IH_InstallmentTranslation_C|InstallmentTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method InstallmentTranslation|_IH_InstallmentTranslation_C|InstallmentTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method InstallmentTranslation first(array|string $columns = ['*'])
     * @method InstallmentTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method InstallmentTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method InstallmentTranslation firstOrFail(array|string $columns = ['*'])
     * @method InstallmentTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method InstallmentTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method InstallmentTranslation forceCreate(array $attributes)
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] get(array|string $columns = ['*'])
     * @method InstallmentTranslation getModel()
     * @method InstallmentTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] hydrate(array $items)
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_InstallmentTranslation_C|InstallmentTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method InstallmentTranslation make(array $attributes = [])
     * @method InstallmentTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|InstallmentTranslation[]|_IH_InstallmentTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|InstallmentTranslation[]|_IH_InstallmentTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method InstallmentTranslation sole(array|string $columns = ['*'])
     * @method InstallmentTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_InstallmentTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method NavbarButtonTranslation|null getOrPut($key, $value)
     * @method NavbarButtonTranslation|$this shift(int $count = 1)
     * @method NavbarButtonTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method NavbarButtonTranslation|$this pop(int $count = 1)
     * @method NavbarButtonTranslation|null pull($key, \Closure $default = null)
     * @method NavbarButtonTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method NavbarButtonTranslation|$this random(callable|int|null $number = null)
     * @method NavbarButtonTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method NavbarButtonTranslation|null get($key, \Closure $default = null)
     * @method NavbarButtonTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method NavbarButtonTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method NavbarButtonTranslation|null find($key, $default = null)
     * @method NavbarButtonTranslation[] all()
     */
    class _IH_NavbarButtonTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return NavbarButtonTranslation[][]|Collection<_IH_NavbarButtonTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_NavbarButtonTranslation_QB whereId($value)
     * @method _IH_NavbarButtonTranslation_QB whereNavbarButtonId($value)
     * @method _IH_NavbarButtonTranslation_QB whereLocale($value)
     * @method _IH_NavbarButtonTranslation_QB whereTitle($value)
     * @method _IH_NavbarButtonTranslation_QB whereUrl($value)
     * @method NavbarButtonTranslation baseSole(array|string $columns = ['*'])
     * @method NavbarButtonTranslation create(array $attributes = [])
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] cursor()
     * @method NavbarButtonTranslation|null|_IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method NavbarButtonTranslation|_IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NavbarButtonTranslation|_IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method NavbarButtonTranslation|_IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method NavbarButtonTranslation first(array|string $columns = ['*'])
     * @method NavbarButtonTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method NavbarButtonTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method NavbarButtonTranslation firstOrFail(array|string $columns = ['*'])
     * @method NavbarButtonTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method NavbarButtonTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method NavbarButtonTranslation forceCreate(array $attributes)
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] get(array|string $columns = ['*'])
     * @method NavbarButtonTranslation getModel()
     * @method NavbarButtonTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] hydrate(array $items)
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method NavbarButtonTranslation make(array $attributes = [])
     * @method NavbarButtonTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|NavbarButtonTranslation[]|_IH_NavbarButtonTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NavbarButtonTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|NavbarButtonTranslation[]|_IH_NavbarButtonTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method NavbarButtonTranslation sole(array|string $columns = ['*'])
     * @method NavbarButtonTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_NavbarButtonTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method OfflineBankSpecificationTranslation|null getOrPut($key, $value)
     * @method OfflineBankSpecificationTranslation|$this shift(int $count = 1)
     * @method OfflineBankSpecificationTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankSpecificationTranslation|$this pop(int $count = 1)
     * @method OfflineBankSpecificationTranslation|null pull($key, \Closure $default = null)
     * @method OfflineBankSpecificationTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method OfflineBankSpecificationTranslation|$this random(callable|int|null $number = null)
     * @method OfflineBankSpecificationTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankSpecificationTranslation|null get($key, \Closure $default = null)
     * @method OfflineBankSpecificationTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method OfflineBankSpecificationTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OfflineBankSpecificationTranslation|null find($key, $default = null)
     * @method OfflineBankSpecificationTranslation[] all()
     */
    class _IH_OfflineBankSpecificationTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OfflineBankSpecificationTranslation[][]|Collection<_IH_OfflineBankSpecificationTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OfflineBankSpecificationTranslation_QB whereId($value)
     * @method _IH_OfflineBankSpecificationTranslation_QB whereOfflineBankSpecificationId($value)
     * @method _IH_OfflineBankSpecificationTranslation_QB whereLocale($value)
     * @method _IH_OfflineBankSpecificationTranslation_QB whereName($value)
     * @method OfflineBankSpecificationTranslation baseSole(array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation create(array $attributes = [])
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] cursor()
     * @method OfflineBankSpecificationTranslation|null|_IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation|_IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankSpecificationTranslation|_IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation|_IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation first(array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankSpecificationTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method OfflineBankSpecificationTranslation firstOrFail(array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method OfflineBankSpecificationTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OfflineBankSpecificationTranslation forceCreate(array $attributes)
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] get(array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation getModel()
     * @method OfflineBankSpecificationTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] hydrate(array $items)
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OfflineBankSpecificationTranslation make(array $attributes = [])
     * @method OfflineBankSpecificationTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OfflineBankSpecificationTranslation[]|_IH_OfflineBankSpecificationTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankSpecificationTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OfflineBankSpecificationTranslation[]|_IH_OfflineBankSpecificationTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankSpecificationTranslation sole(array|string $columns = ['*'])
     * @method OfflineBankSpecificationTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OfflineBankSpecificationTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method OfflineBankTranslation|null getOrPut($key, $value)
     * @method OfflineBankTranslation|$this shift(int $count = 1)
     * @method OfflineBankTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankTranslation|$this pop(int $count = 1)
     * @method OfflineBankTranslation|null pull($key, \Closure $default = null)
     * @method OfflineBankTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method OfflineBankTranslation|$this random(callable|int|null $number = null)
     * @method OfflineBankTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method OfflineBankTranslation|null get($key, \Closure $default = null)
     * @method OfflineBankTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method OfflineBankTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method OfflineBankTranslation|null find($key, $default = null)
     * @method OfflineBankTranslation[] all()
     */
    class _IH_OfflineBankTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return OfflineBankTranslation[][]|Collection<_IH_OfflineBankTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_OfflineBankTranslation_QB whereId($value)
     * @method _IH_OfflineBankTranslation_QB whereOfflineBankId($value)
     * @method _IH_OfflineBankTranslation_QB whereLocale($value)
     * @method _IH_OfflineBankTranslation_QB whereTitle($value)
     * @method OfflineBankTranslation baseSole(array|string $columns = ['*'])
     * @method OfflineBankTranslation create(array $attributes = [])
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] cursor()
     * @method OfflineBankTranslation|null|_IH_OfflineBankTranslation_C|OfflineBankTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method OfflineBankTranslation|_IH_OfflineBankTranslation_C|OfflineBankTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankTranslation|_IH_OfflineBankTranslation_C|OfflineBankTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method OfflineBankTranslation|_IH_OfflineBankTranslation_C|OfflineBankTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method OfflineBankTranslation first(array|string $columns = ['*'])
     * @method OfflineBankTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method OfflineBankTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method OfflineBankTranslation firstOrFail(array|string $columns = ['*'])
     * @method OfflineBankTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method OfflineBankTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method OfflineBankTranslation forceCreate(array $attributes)
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] get(array|string $columns = ['*'])
     * @method OfflineBankTranslation getModel()
     * @method OfflineBankTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] hydrate(array $items)
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_OfflineBankTranslation_C|OfflineBankTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method OfflineBankTranslation make(array $attributes = [])
     * @method OfflineBankTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|OfflineBankTranslation[]|_IH_OfflineBankTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|OfflineBankTranslation[]|_IH_OfflineBankTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method OfflineBankTranslation sole(array|string $columns = ['*'])
     * @method OfflineBankTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_OfflineBankTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method PageTranslation|null getOrPut($key, $value)
     * @method PageTranslation|$this shift(int $count = 1)
     * @method PageTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PageTranslation|$this pop(int $count = 1)
     * @method PageTranslation|null pull($key, \Closure $default = null)
     * @method PageTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method PageTranslation|$this random(callable|int|null $number = null)
     * @method PageTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PageTranslation|null get($key, \Closure $default = null)
     * @method PageTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method PageTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PageTranslation|null find($key, $default = null)
     * @method PageTranslation[] all()
     */
    class _IH_PageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PageTranslation[][]|Collection<_IH_PageTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PageTranslation_QB whereId($value)
     * @method _IH_PageTranslation_QB wherePageId($value)
     * @method _IH_PageTranslation_QB whereLocale($value)
     * @method _IH_PageTranslation_QB whereTitle($value)
     * @method _IH_PageTranslation_QB whereSeoDescription($value)
     * @method _IH_PageTranslation_QB whereContent($value)
     * @method PageTranslation baseSole(array|string $columns = ['*'])
     * @method PageTranslation create(array $attributes = [])
     * @method _IH_PageTranslation_C|PageTranslation[] cursor()
     * @method PageTranslation|null|_IH_PageTranslation_C|PageTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method PageTranslation|_IH_PageTranslation_C|PageTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method PageTranslation first(array|string $columns = ['*'])
     * @method PageTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PageTranslation firstOrFail(array|string $columns = ['*'])
     * @method PageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PageTranslation forceCreate(array $attributes)
     * @method _IH_PageTranslation_C|PageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PageTranslation_C|PageTranslation[] get(array|string $columns = ['*'])
     * @method PageTranslation getModel()
     * @method PageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PageTranslation_C|PageTranslation[] hydrate(array $items)
     * @method _IH_PageTranslation_C|PageTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_PageTranslation_C|PageTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PageTranslation_C|PageTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PageTranslation make(array $attributes = [])
     * @method PageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PageTranslation[]|_IH_PageTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PageTranslation[]|_IH_PageTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PageTranslation sole(array|string $columns = ['*'])
     * @method PageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PageTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductBadgeTranslation|null getOrPut($key, $value)
     * @method ProductBadgeTranslation|$this shift(int $count = 1)
     * @method ProductBadgeTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadgeTranslation|$this pop(int $count = 1)
     * @method ProductBadgeTranslation|null pull($key, \Closure $default = null)
     * @method ProductBadgeTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductBadgeTranslation|$this random(callable|int|null $number = null)
     * @method ProductBadgeTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductBadgeTranslation|null get($key, \Closure $default = null)
     * @method ProductBadgeTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductBadgeTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductBadgeTranslation|null find($key, $default = null)
     * @method ProductBadgeTranslation[] all()
     */
    class _IH_ProductBadgeTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductBadgeTranslation[][]|Collection<_IH_ProductBadgeTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductBadgeTranslation_QB whereId($value)
     * @method _IH_ProductBadgeTranslation_QB whereProductBadgeId($value)
     * @method _IH_ProductBadgeTranslation_QB whereLocale($value)
     * @method _IH_ProductBadgeTranslation_QB whereTitle($value)
     * @method ProductBadgeTranslation baseSole(array|string $columns = ['*'])
     * @method ProductBadgeTranslation create(array $attributes = [])
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] cursor()
     * @method ProductBadgeTranslation|null|_IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductBadgeTranslation|_IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadgeTranslation|_IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductBadgeTranslation|_IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductBadgeTranslation first(array|string $columns = ['*'])
     * @method ProductBadgeTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductBadgeTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductBadgeTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductBadgeTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductBadgeTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductBadgeTranslation forceCreate(array $attributes)
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] get(array|string $columns = ['*'])
     * @method ProductBadgeTranslation getModel()
     * @method ProductBadgeTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] hydrate(array $items)
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductBadgeTranslation make(array $attributes = [])
     * @method ProductBadgeTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductBadgeTranslation[]|_IH_ProductBadgeTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadgeTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductBadgeTranslation[]|_IH_ProductBadgeTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductBadgeTranslation sole(array|string $columns = ['*'])
     * @method ProductBadgeTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductBadgeTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductCategoryTranslation|null getOrPut($key, $value)
     * @method ProductCategoryTranslation|$this shift(int $count = 1)
     * @method ProductCategoryTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategoryTranslation|$this pop(int $count = 1)
     * @method ProductCategoryTranslation|null pull($key, \Closure $default = null)
     * @method ProductCategoryTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductCategoryTranslation|$this random(callable|int|null $number = null)
     * @method ProductCategoryTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductCategoryTranslation|null get($key, \Closure $default = null)
     * @method ProductCategoryTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductCategoryTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductCategoryTranslation|null find($key, $default = null)
     * @method ProductCategoryTranslation[] all()
     */
    class _IH_ProductCategoryTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductCategoryTranslation[][]|Collection<_IH_ProductCategoryTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductCategoryTranslation_QB whereId($value)
     * @method _IH_ProductCategoryTranslation_QB whereProductCategoryId($value)
     * @method _IH_ProductCategoryTranslation_QB whereLocale($value)
     * @method _IH_ProductCategoryTranslation_QB whereTitle($value)
     * @method ProductCategoryTranslation baseSole(array|string $columns = ['*'])
     * @method ProductCategoryTranslation create(array $attributes = [])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] cursor()
     * @method ProductCategoryTranslation|null|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductCategoryTranslation|_IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductCategoryTranslation first(array|string $columns = ['*'])
     * @method ProductCategoryTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductCategoryTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductCategoryTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductCategoryTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductCategoryTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductCategoryTranslation forceCreate(array $attributes)
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] get(array|string $columns = ['*'])
     * @method ProductCategoryTranslation getModel()
     * @method ProductCategoryTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] hydrate(array $items)
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductCategoryTranslation make(array $attributes = [])
     * @method ProductCategoryTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductCategoryTranslation[]|_IH_ProductCategoryTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategoryTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductCategoryTranslation[]|_IH_ProductCategoryTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductCategoryTranslation sole(array|string $columns = ['*'])
     * @method ProductCategoryTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductCategoryTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFaqTranslation|null getOrPut($key, $value)
     * @method ProductFaqTranslation|$this shift(int $count = 1)
     * @method ProductFaqTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFaqTranslation|$this pop(int $count = 1)
     * @method ProductFaqTranslation|null pull($key, \Closure $default = null)
     * @method ProductFaqTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFaqTranslation|$this random(callable|int|null $number = null)
     * @method ProductFaqTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFaqTranslation|null get($key, \Closure $default = null)
     * @method ProductFaqTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFaqTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFaqTranslation|null find($key, $default = null)
     * @method ProductFaqTranslation[] all()
     */
    class _IH_ProductFaqTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFaqTranslation[][]|Collection<_IH_ProductFaqTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFaqTranslation_QB whereId($value)
     * @method _IH_ProductFaqTranslation_QB whereProductFaqId($value)
     * @method _IH_ProductFaqTranslation_QB whereLocale($value)
     * @method _IH_ProductFaqTranslation_QB whereTitle($value)
     * @method _IH_ProductFaqTranslation_QB whereAnswer($value)
     * @method ProductFaqTranslation baseSole(array|string $columns = ['*'])
     * @method ProductFaqTranslation create(array $attributes = [])
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] cursor()
     * @method ProductFaqTranslation|null|_IH_ProductFaqTranslation_C|ProductFaqTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFaqTranslation|_IH_ProductFaqTranslation_C|ProductFaqTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFaqTranslation|_IH_ProductFaqTranslation_C|ProductFaqTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFaqTranslation|_IH_ProductFaqTranslation_C|ProductFaqTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFaqTranslation first(array|string $columns = ['*'])
     * @method ProductFaqTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFaqTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFaqTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductFaqTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFaqTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFaqTranslation forceCreate(array $attributes)
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] get(array|string $columns = ['*'])
     * @method ProductFaqTranslation getModel()
     * @method ProductFaqTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] hydrate(array $items)
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFaqTranslation_C|ProductFaqTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFaqTranslation make(array $attributes = [])
     * @method ProductFaqTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFaqTranslation[]|_IH_ProductFaqTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFaqTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFaqTranslation[]|_IH_ProductFaqTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFaqTranslation sole(array|string $columns = ['*'])
     * @method ProductFaqTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductFaqTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFileTranslation|null getOrPut($key, $value)
     * @method ProductFileTranslation|$this shift(int $count = 1)
     * @method ProductFileTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFileTranslation|$this pop(int $count = 1)
     * @method ProductFileTranslation|null pull($key, \Closure $default = null)
     * @method ProductFileTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFileTranslation|$this random(callable|int|null $number = null)
     * @method ProductFileTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFileTranslation|null get($key, \Closure $default = null)
     * @method ProductFileTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFileTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFileTranslation|null find($key, $default = null)
     * @method ProductFileTranslation[] all()
     */
    class _IH_ProductFileTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFileTranslation[][]|Collection<_IH_ProductFileTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFileTranslation_QB whereId($value)
     * @method _IH_ProductFileTranslation_QB whereProductFileId($value)
     * @method _IH_ProductFileTranslation_QB whereLocale($value)
     * @method _IH_ProductFileTranslation_QB whereTitle($value)
     * @method _IH_ProductFileTranslation_QB whereDescription($value)
     * @method ProductFileTranslation baseSole(array|string $columns = ['*'])
     * @method ProductFileTranslation create(array $attributes = [])
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] cursor()
     * @method ProductFileTranslation|null|_IH_ProductFileTranslation_C|ProductFileTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFileTranslation|_IH_ProductFileTranslation_C|ProductFileTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFileTranslation|_IH_ProductFileTranslation_C|ProductFileTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFileTranslation|_IH_ProductFileTranslation_C|ProductFileTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFileTranslation first(array|string $columns = ['*'])
     * @method ProductFileTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFileTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFileTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductFileTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFileTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFileTranslation forceCreate(array $attributes)
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] get(array|string $columns = ['*'])
     * @method ProductFileTranslation getModel()
     * @method ProductFileTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] hydrate(array $items)
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFileTranslation_C|ProductFileTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFileTranslation make(array $attributes = [])
     * @method ProductFileTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFileTranslation[]|_IH_ProductFileTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFileTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFileTranslation[]|_IH_ProductFileTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFileTranslation sole(array|string $columns = ['*'])
     * @method ProductFileTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductFileTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFilterOptionTranslation|null getOrPut($key, $value)
     * @method ProductFilterOptionTranslation|$this shift(int $count = 1)
     * @method ProductFilterOptionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterOptionTranslation|$this pop(int $count = 1)
     * @method ProductFilterOptionTranslation|null pull($key, \Closure $default = null)
     * @method ProductFilterOptionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFilterOptionTranslation|$this random(callable|int|null $number = null)
     * @method ProductFilterOptionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterOptionTranslation|null get($key, \Closure $default = null)
     * @method ProductFilterOptionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFilterOptionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFilterOptionTranslation|null find($key, $default = null)
     * @method ProductFilterOptionTranslation[] all()
     */
    class _IH_ProductFilterOptionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFilterOptionTranslation[][]|Collection<_IH_ProductFilterOptionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFilterOptionTranslation_QB whereId($value)
     * @method _IH_ProductFilterOptionTranslation_QB whereProductFilterOptionId($value)
     * @method _IH_ProductFilterOptionTranslation_QB whereLocale($value)
     * @method _IH_ProductFilterOptionTranslation_QB whereTitle($value)
     * @method ProductFilterOptionTranslation baseSole(array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation create(array $attributes = [])
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] cursor()
     * @method ProductFilterOptionTranslation|null|_IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation|_IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterOptionTranslation|_IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation|_IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation first(array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterOptionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFilterOptionTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFilterOptionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFilterOptionTranslation forceCreate(array $attributes)
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] get(array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation getModel()
     * @method ProductFilterOptionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] hydrate(array $items)
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFilterOptionTranslation make(array $attributes = [])
     * @method ProductFilterOptionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFilterOptionTranslation[]|_IH_ProductFilterOptionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterOptionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFilterOptionTranslation[]|_IH_ProductFilterOptionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterOptionTranslation sole(array|string $columns = ['*'])
     * @method ProductFilterOptionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductFilterOptionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductFilterTranslation|null getOrPut($key, $value)
     * @method ProductFilterTranslation|$this shift(int $count = 1)
     * @method ProductFilterTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterTranslation|$this pop(int $count = 1)
     * @method ProductFilterTranslation|null pull($key, \Closure $default = null)
     * @method ProductFilterTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductFilterTranslation|$this random(callable|int|null $number = null)
     * @method ProductFilterTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductFilterTranslation|null get($key, \Closure $default = null)
     * @method ProductFilterTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductFilterTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductFilterTranslation|null find($key, $default = null)
     * @method ProductFilterTranslation[] all()
     */
    class _IH_ProductFilterTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductFilterTranslation[][]|Collection<_IH_ProductFilterTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductFilterTranslation_QB whereId($value)
     * @method _IH_ProductFilterTranslation_QB whereProductFilterId($value)
     * @method _IH_ProductFilterTranslation_QB whereLocale($value)
     * @method _IH_ProductFilterTranslation_QB whereTitle($value)
     * @method ProductFilterTranslation baseSole(array|string $columns = ['*'])
     * @method ProductFilterTranslation create(array $attributes = [])
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] cursor()
     * @method ProductFilterTranslation|null|_IH_ProductFilterTranslation_C|ProductFilterTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductFilterTranslation|_IH_ProductFilterTranslation_C|ProductFilterTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterTranslation|_IH_ProductFilterTranslation_C|ProductFilterTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductFilterTranslation|_IH_ProductFilterTranslation_C|ProductFilterTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductFilterTranslation first(array|string $columns = ['*'])
     * @method ProductFilterTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductFilterTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductFilterTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductFilterTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductFilterTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductFilterTranslation forceCreate(array $attributes)
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] get(array|string $columns = ['*'])
     * @method ProductFilterTranslation getModel()
     * @method ProductFilterTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] hydrate(array $items)
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductFilterTranslation_C|ProductFilterTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductFilterTranslation make(array $attributes = [])
     * @method ProductFilterTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductFilterTranslation[]|_IH_ProductFilterTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductFilterTranslation[]|_IH_ProductFilterTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductFilterTranslation sole(array|string $columns = ['*'])
     * @method ProductFilterTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductFilterTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSelectedSpecificationTranslation|null getOrPut($key, $value)
     * @method ProductSelectedSpecificationTranslation|$this shift(int $count = 1)
     * @method ProductSelectedSpecificationTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecificationTranslation|$this pop(int $count = 1)
     * @method ProductSelectedSpecificationTranslation|null pull($key, \Closure $default = null)
     * @method ProductSelectedSpecificationTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecificationTranslation|$this random(callable|int|null $number = null)
     * @method ProductSelectedSpecificationTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSelectedSpecificationTranslation|null get($key, \Closure $default = null)
     * @method ProductSelectedSpecificationTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSelectedSpecificationTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSelectedSpecificationTranslation|null find($key, $default = null)
     * @method ProductSelectedSpecificationTranslation[] all()
     */
    class _IH_ProductSelectedSpecificationTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSelectedSpecificationTranslation[][]|Collection<_IH_ProductSelectedSpecificationTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSelectedSpecificationTranslation_QB whereId($value)
     * @method _IH_ProductSelectedSpecificationTranslation_QB whereProductSelectedSpecificationId($value)
     * @method _IH_ProductSelectedSpecificationTranslation_QB whereLocale($value)
     * @method _IH_ProductSelectedSpecificationTranslation_QB whereValue($value)
     * @method ProductSelectedSpecificationTranslation baseSole(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation create(array $attributes = [])
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] cursor()
     * @method ProductSelectedSpecificationTranslation|null|_IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation|_IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecificationTranslation|_IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation|_IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation first(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSelectedSpecificationTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecificationTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSelectedSpecificationTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSelectedSpecificationTranslation forceCreate(array $attributes)
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] get(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation getModel()
     * @method ProductSelectedSpecificationTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] hydrate(array $items)
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSelectedSpecificationTranslation make(array $attributes = [])
     * @method ProductSelectedSpecificationTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSelectedSpecificationTranslation[]|_IH_ProductSelectedSpecificationTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecificationTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSelectedSpecificationTranslation[]|_IH_ProductSelectedSpecificationTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSelectedSpecificationTranslation sole(array|string $columns = ['*'])
     * @method ProductSelectedSpecificationTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSelectedSpecificationTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSpecificationMultiValueTranslation|null getOrPut($key, $value)
     * @method ProductSpecificationMultiValueTranslation|$this shift(int $count = 1)
     * @method ProductSpecificationMultiValueTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationMultiValueTranslation|$this pop(int $count = 1)
     * @method ProductSpecificationMultiValueTranslation|null pull($key, \Closure $default = null)
     * @method ProductSpecificationMultiValueTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationMultiValueTranslation|$this random(callable|int|null $number = null)
     * @method ProductSpecificationMultiValueTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationMultiValueTranslation|null get($key, \Closure $default = null)
     * @method ProductSpecificationMultiValueTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationMultiValueTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSpecificationMultiValueTranslation|null find($key, $default = null)
     * @method ProductSpecificationMultiValueTranslation[] all()
     */
    class _IH_ProductSpecificationMultiValueTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSpecificationMultiValueTranslation[][]|Collection<_IH_ProductSpecificationMultiValueTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSpecificationMultiValueTranslation_QB whereId($value)
     * @method _IH_ProductSpecificationMultiValueTranslation_QB whereProductSpecificationMultiValueId($value)
     * @method _IH_ProductSpecificationMultiValueTranslation_QB whereLocale($value)
     * @method _IH_ProductSpecificationMultiValueTranslation_QB whereTitle($value)
     * @method ProductSpecificationMultiValueTranslation baseSole(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation create(array $attributes = [])
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] cursor()
     * @method ProductSpecificationMultiValueTranslation|null|_IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation|_IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationMultiValueTranslation|_IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation|_IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation first(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationMultiValueTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSpecificationMultiValueTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSpecificationMultiValueTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSpecificationMultiValueTranslation forceCreate(array $attributes)
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] get(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation getModel()
     * @method ProductSpecificationMultiValueTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] hydrate(array $items)
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSpecificationMultiValueTranslation make(array $attributes = [])
     * @method ProductSpecificationMultiValueTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSpecificationMultiValueTranslation[]|_IH_ProductSpecificationMultiValueTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationMultiValueTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSpecificationMultiValueTranslation[]|_IH_ProductSpecificationMultiValueTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationMultiValueTranslation sole(array|string $columns = ['*'])
     * @method ProductSpecificationMultiValueTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSpecificationMultiValueTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductSpecificationTranslation|null getOrPut($key, $value)
     * @method ProductSpecificationTranslation|$this shift(int $count = 1)
     * @method ProductSpecificationTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationTranslation|$this pop(int $count = 1)
     * @method ProductSpecificationTranslation|null pull($key, \Closure $default = null)
     * @method ProductSpecificationTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationTranslation|$this random(callable|int|null $number = null)
     * @method ProductSpecificationTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductSpecificationTranslation|null get($key, \Closure $default = null)
     * @method ProductSpecificationTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductSpecificationTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductSpecificationTranslation|null find($key, $default = null)
     * @method ProductSpecificationTranslation[] all()
     */
    class _IH_ProductSpecificationTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductSpecificationTranslation[][]|Collection<_IH_ProductSpecificationTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductSpecificationTranslation_QB whereId($value)
     * @method _IH_ProductSpecificationTranslation_QB whereProductSpecificationId($value)
     * @method _IH_ProductSpecificationTranslation_QB whereLocale($value)
     * @method _IH_ProductSpecificationTranslation_QB whereTitle($value)
     * @method ProductSpecificationTranslation baseSole(array|string $columns = ['*'])
     * @method ProductSpecificationTranslation create(array $attributes = [])
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] cursor()
     * @method ProductSpecificationTranslation|null|_IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductSpecificationTranslation|_IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationTranslation|_IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductSpecificationTranslation|_IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductSpecificationTranslation first(array|string $columns = ['*'])
     * @method ProductSpecificationTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductSpecificationTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductSpecificationTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductSpecificationTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductSpecificationTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductSpecificationTranslation forceCreate(array $attributes)
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] get(array|string $columns = ['*'])
     * @method ProductSpecificationTranslation getModel()
     * @method ProductSpecificationTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] hydrate(array $items)
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductSpecificationTranslation make(array $attributes = [])
     * @method ProductSpecificationTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductSpecificationTranslation[]|_IH_ProductSpecificationTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductSpecificationTranslation[]|_IH_ProductSpecificationTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductSpecificationTranslation sole(array|string $columns = ['*'])
     * @method ProductSpecificationTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductSpecificationTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method ProductTranslation|null getOrPut($key, $value)
     * @method ProductTranslation|$this shift(int $count = 1)
     * @method ProductTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTranslation|$this pop(int $count = 1)
     * @method ProductTranslation|null pull($key, \Closure $default = null)
     * @method ProductTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method ProductTranslation|$this random(callable|int|null $number = null)
     * @method ProductTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method ProductTranslation|null get($key, \Closure $default = null)
     * @method ProductTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method ProductTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method ProductTranslation|null find($key, $default = null)
     * @method ProductTranslation[] all()
     */
    class _IH_ProductTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return ProductTranslation[][]|Collection<_IH_ProductTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_ProductTranslation_QB whereId($value)
     * @method _IH_ProductTranslation_QB whereProductId($value)
     * @method _IH_ProductTranslation_QB whereLocale($value)
     * @method _IH_ProductTranslation_QB whereTitle($value)
     * @method _IH_ProductTranslation_QB whereSeoDescription($value)
     * @method _IH_ProductTranslation_QB whereSummary($value)
     * @method _IH_ProductTranslation_QB whereDescription($value)
     * @method ProductTranslation baseSole(array|string $columns = ['*'])
     * @method ProductTranslation create(array $attributes = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] cursor()
     * @method ProductTranslation|null|_IH_ProductTranslation_C|ProductTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method ProductTranslation|_IH_ProductTranslation_C|ProductTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method ProductTranslation first(array|string $columns = ['*'])
     * @method ProductTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method ProductTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method ProductTranslation firstOrFail(array|string $columns = ['*'])
     * @method ProductTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method ProductTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method ProductTranslation forceCreate(array $attributes)
     * @method _IH_ProductTranslation_C|ProductTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_ProductTranslation_C|ProductTranslation[] get(array|string $columns = ['*'])
     * @method ProductTranslation getModel()
     * @method ProductTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_ProductTranslation_C|ProductTranslation[] hydrate(array $items)
     * @method _IH_ProductTranslation_C|ProductTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_ProductTranslation_C|ProductTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_ProductTranslation_C|ProductTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method ProductTranslation make(array $attributes = [])
     * @method ProductTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|ProductTranslation[]|_IH_ProductTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|ProductTranslation[]|_IH_ProductTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method ProductTranslation sole(array|string $columns = ['*'])
     * @method ProductTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_ProductTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method PromotionTranslation|null getOrPut($key, $value)
     * @method PromotionTranslation|$this shift(int $count = 1)
     * @method PromotionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PromotionTranslation|$this pop(int $count = 1)
     * @method PromotionTranslation|null pull($key, \Closure $default = null)
     * @method PromotionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method PromotionTranslation|$this random(callable|int|null $number = null)
     * @method PromotionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PromotionTranslation|null get($key, \Closure $default = null)
     * @method PromotionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method PromotionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PromotionTranslation|null find($key, $default = null)
     * @method PromotionTranslation[] all()
     */
    class _IH_PromotionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PromotionTranslation[][]|Collection<_IH_PromotionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PromotionTranslation_QB whereId($value)
     * @method _IH_PromotionTranslation_QB wherePromotionId($value)
     * @method _IH_PromotionTranslation_QB whereLocale($value)
     * @method _IH_PromotionTranslation_QB whereTitle($value)
     * @method _IH_PromotionTranslation_QB whereDescription($value)
     * @method PromotionTranslation baseSole(array|string $columns = ['*'])
     * @method PromotionTranslation create(array $attributes = [])
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] cursor()
     * @method PromotionTranslation|null|_IH_PromotionTranslation_C|PromotionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PromotionTranslation|_IH_PromotionTranslation_C|PromotionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PromotionTranslation|_IH_PromotionTranslation_C|PromotionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method PromotionTranslation|_IH_PromotionTranslation_C|PromotionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method PromotionTranslation first(array|string $columns = ['*'])
     * @method PromotionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PromotionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PromotionTranslation firstOrFail(array|string $columns = ['*'])
     * @method PromotionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PromotionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PromotionTranslation forceCreate(array $attributes)
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] get(array|string $columns = ['*'])
     * @method PromotionTranslation getModel()
     * @method PromotionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] hydrate(array $items)
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PromotionTranslation_C|PromotionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PromotionTranslation make(array $attributes = [])
     * @method PromotionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PromotionTranslation[]|_IH_PromotionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PromotionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PromotionTranslation[]|_IH_PromotionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PromotionTranslation sole(array|string $columns = ['*'])
     * @method PromotionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PromotionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method PurchaseNotificationTranslation|null getOrPut($key, $value)
     * @method PurchaseNotificationTranslation|$this shift(int $count = 1)
     * @method PurchaseNotificationTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationTranslation|$this pop(int $count = 1)
     * @method PurchaseNotificationTranslation|null pull($key, \Closure $default = null)
     * @method PurchaseNotificationTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationTranslation|$this random(callable|int|null $number = null)
     * @method PurchaseNotificationTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method PurchaseNotificationTranslation|null get($key, \Closure $default = null)
     * @method PurchaseNotificationTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method PurchaseNotificationTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method PurchaseNotificationTranslation|null find($key, $default = null)
     * @method PurchaseNotificationTranslation[] all()
     */
    class _IH_PurchaseNotificationTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return PurchaseNotificationTranslation[][]|Collection<_IH_PurchaseNotificationTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_PurchaseNotificationTranslation_QB whereId($value)
     * @method _IH_PurchaseNotificationTranslation_QB wherePurchaseNotificationId($value)
     * @method _IH_PurchaseNotificationTranslation_QB whereLocale($value)
     * @method _IH_PurchaseNotificationTranslation_QB whereTitle($value)
     * @method _IH_PurchaseNotificationTranslation_QB wherePopupTitle($value)
     * @method _IH_PurchaseNotificationTranslation_QB wherePopupSubtitle($value)
     * @method _IH_PurchaseNotificationTranslation_QB whereUsers($value)
     * @method _IH_PurchaseNotificationTranslation_QB whereTimes($value)
     * @method PurchaseNotificationTranslation baseSole(array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation create(array $attributes = [])
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] cursor()
     * @method PurchaseNotificationTranslation|null|_IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation|_IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationTranslation|_IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation|_IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation first(array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method PurchaseNotificationTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method PurchaseNotificationTranslation firstOrFail(array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method PurchaseNotificationTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method PurchaseNotificationTranslation forceCreate(array $attributes)
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] get(array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation getModel()
     * @method PurchaseNotificationTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] hydrate(array $items)
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method PurchaseNotificationTranslation make(array $attributes = [])
     * @method PurchaseNotificationTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|PurchaseNotificationTranslation[]|_IH_PurchaseNotificationTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|PurchaseNotificationTranslation[]|_IH_PurchaseNotificationTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method PurchaseNotificationTranslation sole(array|string $columns = ['*'])
     * @method PurchaseNotificationTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_PurchaseNotificationTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method QuizTranslation|null getOrPut($key, $value)
     * @method QuizTranslation|$this shift(int $count = 1)
     * @method QuizTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizTranslation|$this pop(int $count = 1)
     * @method QuizTranslation|null pull($key, \Closure $default = null)
     * @method QuizTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method QuizTranslation|$this random(callable|int|null $number = null)
     * @method QuizTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizTranslation|null get($key, \Closure $default = null)
     * @method QuizTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method QuizTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizTranslation|null find($key, $default = null)
     * @method QuizTranslation[] all()
     */
    class _IH_QuizTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizTranslation[][]|Collection<_IH_QuizTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizTranslation_QB whereId($value)
     * @method _IH_QuizTranslation_QB whereQuizId($value)
     * @method _IH_QuizTranslation_QB whereLocale($value)
     * @method _IH_QuizTranslation_QB whereTitle($value)
     * @method _IH_QuizTranslation_QB whereDescription($value)
     * @method QuizTranslation baseSole(array|string $columns = ['*'])
     * @method QuizTranslation create(array $attributes = [])
     * @method _IH_QuizTranslation_C|QuizTranslation[] cursor()
     * @method QuizTranslation|null|_IH_QuizTranslation_C|QuizTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizTranslation_C|QuizTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizTranslation|_IH_QuizTranslation_C|QuizTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizTranslation|_IH_QuizTranslation_C|QuizTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizTranslation|_IH_QuizTranslation_C|QuizTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizTranslation first(array|string $columns = ['*'])
     * @method QuizTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizTranslation firstOrFail(array|string $columns = ['*'])
     * @method QuizTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method QuizTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizTranslation forceCreate(array $attributes)
     * @method _IH_QuizTranslation_C|QuizTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizTranslation_C|QuizTranslation[] get(array|string $columns = ['*'])
     * @method QuizTranslation getModel()
     * @method QuizTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizTranslation_C|QuizTranslation[] hydrate(array $items)
     * @method _IH_QuizTranslation_C|QuizTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizTranslation_C|QuizTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizTranslation_C|QuizTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizTranslation make(array $attributes = [])
     * @method QuizTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizTranslation[]|_IH_QuizTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizTranslation[]|_IH_QuizTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizTranslation sole(array|string $columns = ['*'])
     * @method QuizTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_QuizTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method QuizzesQuestionTranslation|null getOrPut($key, $value)
     * @method QuizzesQuestionTranslation|$this shift(int $count = 1)
     * @method QuizzesQuestionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionTranslation|$this pop(int $count = 1)
     * @method QuizzesQuestionTranslation|null pull($key, \Closure $default = null)
     * @method QuizzesQuestionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionTranslation|$this random(callable|int|null $number = null)
     * @method QuizzesQuestionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionTranslation|null get($key, \Closure $default = null)
     * @method QuizzesQuestionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizzesQuestionTranslation|null find($key, $default = null)
     * @method QuizzesQuestionTranslation[] all()
     */
    class _IH_QuizzesQuestionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizzesQuestionTranslation[][]|Collection<_IH_QuizzesQuestionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizzesQuestionTranslation_QB whereId($value)
     * @method _IH_QuizzesQuestionTranslation_QB whereQuizzesQuestionId($value)
     * @method _IH_QuizzesQuestionTranslation_QB whereLocale($value)
     * @method _IH_QuizzesQuestionTranslation_QB whereTitle($value)
     * @method _IH_QuizzesQuestionTranslation_QB whereCorrect($value)
     * @method QuizzesQuestionTranslation baseSole(array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation create(array $attributes = [])
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] cursor()
     * @method QuizzesQuestionTranslation|null|_IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation|_IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionTranslation|_IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation|_IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation first(array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizzesQuestionTranslation firstOrFail(array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method QuizzesQuestionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizzesQuestionTranslation forceCreate(array $attributes)
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] get(array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation getModel()
     * @method QuizzesQuestionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] hydrate(array $items)
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizzesQuestionTranslation make(array $attributes = [])
     * @method QuizzesQuestionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizzesQuestionTranslation[]|_IH_QuizzesQuestionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizzesQuestionTranslation[]|_IH_QuizzesQuestionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionTranslation sole(array|string $columns = ['*'])
     * @method QuizzesQuestionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_QuizzesQuestionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method QuizzesQuestionsAnswerTranslation|null getOrPut($key, $value)
     * @method QuizzesQuestionsAnswerTranslation|$this shift(int $count = 1)
     * @method QuizzesQuestionsAnswerTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswerTranslation|$this pop(int $count = 1)
     * @method QuizzesQuestionsAnswerTranslation|null pull($key, \Closure $default = null)
     * @method QuizzesQuestionsAnswerTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionsAnswerTranslation|$this random(callable|int|null $number = null)
     * @method QuizzesQuestionsAnswerTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswerTranslation|null get($key, \Closure $default = null)
     * @method QuizzesQuestionsAnswerTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method QuizzesQuestionsAnswerTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method QuizzesQuestionsAnswerTranslation|null find($key, $default = null)
     * @method QuizzesQuestionsAnswerTranslation[] all()
     */
    class _IH_QuizzesQuestionsAnswerTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return QuizzesQuestionsAnswerTranslation[][]|Collection<_IH_QuizzesQuestionsAnswerTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB whereId($value)
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB whereQuizzesQuestionsAnswerId($value)
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB whereLocale($value)
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB whereTitle($value)
     * @method QuizzesQuestionsAnswerTranslation baseSole(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation create(array $attributes = [])
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] cursor()
     * @method QuizzesQuestionsAnswerTranslation|null|_IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation|_IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionsAnswerTranslation|_IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation|_IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation first(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method QuizzesQuestionsAnswerTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method QuizzesQuestionsAnswerTranslation firstOrFail(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method QuizzesQuestionsAnswerTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method QuizzesQuestionsAnswerTranslation forceCreate(array $attributes)
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] get(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation getModel()
     * @method QuizzesQuestionsAnswerTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] hydrate(array $items)
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method QuizzesQuestionsAnswerTranslation make(array $attributes = [])
     * @method QuizzesQuestionsAnswerTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|QuizzesQuestionsAnswerTranslation[]|_IH_QuizzesQuestionsAnswerTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionsAnswerTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|QuizzesQuestionsAnswerTranslation[]|_IH_QuizzesQuestionsAnswerTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method QuizzesQuestionsAnswerTranslation sole(array|string $columns = ['*'])
     * @method QuizzesQuestionsAnswerTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_QuizzesQuestionsAnswerTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method RegistrationPackageTranslation|null getOrPut($key, $value)
     * @method RegistrationPackageTranslation|$this shift(int $count = 1)
     * @method RegistrationPackageTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method RegistrationPackageTranslation|$this pop(int $count = 1)
     * @method RegistrationPackageTranslation|null pull($key, \Closure $default = null)
     * @method RegistrationPackageTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method RegistrationPackageTranslation|$this random(callable|int|null $number = null)
     * @method RegistrationPackageTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method RegistrationPackageTranslation|null get($key, \Closure $default = null)
     * @method RegistrationPackageTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method RegistrationPackageTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method RegistrationPackageTranslation|null find($key, $default = null)
     * @method RegistrationPackageTranslation[] all()
     */
    class _IH_RegistrationPackageTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return RegistrationPackageTranslation[][]|Collection<_IH_RegistrationPackageTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_RegistrationPackageTranslation_QB whereId($value)
     * @method _IH_RegistrationPackageTranslation_QB whereRegistrationPackageId($value)
     * @method _IH_RegistrationPackageTranslation_QB whereLocale($value)
     * @method _IH_RegistrationPackageTranslation_QB whereTitle($value)
     * @method _IH_RegistrationPackageTranslation_QB whereDescription($value)
     * @method RegistrationPackageTranslation baseSole(array|string $columns = ['*'])
     * @method RegistrationPackageTranslation create(array $attributes = [])
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] cursor()
     * @method RegistrationPackageTranslation|null|_IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method RegistrationPackageTranslation|_IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RegistrationPackageTranslation|_IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method RegistrationPackageTranslation|_IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method RegistrationPackageTranslation first(array|string $columns = ['*'])
     * @method RegistrationPackageTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method RegistrationPackageTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method RegistrationPackageTranslation firstOrFail(array|string $columns = ['*'])
     * @method RegistrationPackageTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method RegistrationPackageTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method RegistrationPackageTranslation forceCreate(array $attributes)
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] get(array|string $columns = ['*'])
     * @method RegistrationPackageTranslation getModel()
     * @method RegistrationPackageTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] hydrate(array $items)
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method RegistrationPackageTranslation make(array $attributes = [])
     * @method RegistrationPackageTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|RegistrationPackageTranslation[]|_IH_RegistrationPackageTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RegistrationPackageTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|RegistrationPackageTranslation[]|_IH_RegistrationPackageTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method RegistrationPackageTranslation sole(array|string $columns = ['*'])
     * @method RegistrationPackageTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_RegistrationPackageTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method SessionTranslation|null getOrPut($key, $value)
     * @method SessionTranslation|$this shift(int $count = 1)
     * @method SessionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SessionTranslation|$this pop(int $count = 1)
     * @method SessionTranslation|null pull($key, \Closure $default = null)
     * @method SessionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method SessionTranslation|$this random(callable|int|null $number = null)
     * @method SessionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SessionTranslation|null get($key, \Closure $default = null)
     * @method SessionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method SessionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SessionTranslation|null find($key, $default = null)
     * @method SessionTranslation[] all()
     */
    class _IH_SessionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SessionTranslation[][]|Collection<_IH_SessionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SessionTranslation_QB whereId($value)
     * @method _IH_SessionTranslation_QB whereSessionId($value)
     * @method _IH_SessionTranslation_QB whereLocale($value)
     * @method _IH_SessionTranslation_QB whereTitle($value)
     * @method _IH_SessionTranslation_QB whereDescription($value)
     * @method SessionTranslation baseSole(array|string $columns = ['*'])
     * @method SessionTranslation create(array $attributes = [])
     * @method _IH_SessionTranslation_C|SessionTranslation[] cursor()
     * @method SessionTranslation|null|_IH_SessionTranslation_C|SessionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_SessionTranslation_C|SessionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SessionTranslation|_IH_SessionTranslation_C|SessionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SessionTranslation|_IH_SessionTranslation_C|SessionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method SessionTranslation|_IH_SessionTranslation_C|SessionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method SessionTranslation first(array|string $columns = ['*'])
     * @method SessionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SessionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method SessionTranslation firstOrFail(array|string $columns = ['*'])
     * @method SessionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method SessionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SessionTranslation forceCreate(array $attributes)
     * @method _IH_SessionTranslation_C|SessionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SessionTranslation_C|SessionTranslation[] get(array|string $columns = ['*'])
     * @method SessionTranslation getModel()
     * @method SessionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_SessionTranslation_C|SessionTranslation[] hydrate(array $items)
     * @method _IH_SessionTranslation_C|SessionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_SessionTranslation_C|SessionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SessionTranslation_C|SessionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SessionTranslation make(array $attributes = [])
     * @method SessionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SessionTranslation[]|_IH_SessionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SessionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SessionTranslation[]|_IH_SessionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SessionTranslation sole(array|string $columns = ['*'])
     * @method SessionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SessionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method SettingTranslation|null getOrPut($key, $value)
     * @method SettingTranslation|$this shift(int $count = 1)
     * @method SettingTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SettingTranslation|$this pop(int $count = 1)
     * @method SettingTranslation|null pull($key, \Closure $default = null)
     * @method SettingTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method SettingTranslation|$this random(callable|int|null $number = null)
     * @method SettingTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SettingTranslation|null get($key, \Closure $default = null)
     * @method SettingTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method SettingTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SettingTranslation|null find($key, $default = null)
     * @method SettingTranslation[] all()
     */
    class _IH_SettingTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SettingTranslation[][]|Collection<_IH_SettingTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SettingTranslation_QB whereId($value)
     * @method _IH_SettingTranslation_QB whereSettingId($value)
     * @method _IH_SettingTranslation_QB whereLocale($value)
     * @method _IH_SettingTranslation_QB whereValue($value)
     * @method SettingTranslation baseSole(array|string $columns = ['*'])
     * @method SettingTranslation create(array $attributes = [])
     * @method _IH_SettingTranslation_C|SettingTranslation[] cursor()
     * @method SettingTranslation|null|_IH_SettingTranslation_C|SettingTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_SettingTranslation_C|SettingTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SettingTranslation|_IH_SettingTranslation_C|SettingTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SettingTranslation|_IH_SettingTranslation_C|SettingTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method SettingTranslation|_IH_SettingTranslation_C|SettingTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method SettingTranslation first(array|string $columns = ['*'])
     * @method SettingTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SettingTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method SettingTranslation firstOrFail(array|string $columns = ['*'])
     * @method SettingTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method SettingTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SettingTranslation forceCreate(array $attributes)
     * @method _IH_SettingTranslation_C|SettingTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SettingTranslation_C|SettingTranslation[] get(array|string $columns = ['*'])
     * @method SettingTranslation getModel()
     * @method SettingTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_SettingTranslation_C|SettingTranslation[] hydrate(array $items)
     * @method _IH_SettingTranslation_C|SettingTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_SettingTranslation_C|SettingTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SettingTranslation_C|SettingTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SettingTranslation make(array $attributes = [])
     * @method SettingTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SettingTranslation[]|_IH_SettingTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SettingTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SettingTranslation[]|_IH_SettingTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SettingTranslation sole(array|string $columns = ['*'])
     * @method SettingTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SettingTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method SubscribeTranslation|null getOrPut($key, $value)
     * @method SubscribeTranslation|$this shift(int $count = 1)
     * @method SubscribeTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeTranslation|$this pop(int $count = 1)
     * @method SubscribeTranslation|null pull($key, \Closure $default = null)
     * @method SubscribeTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method SubscribeTranslation|$this random(callable|int|null $number = null)
     * @method SubscribeTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SubscribeTranslation|null get($key, \Closure $default = null)
     * @method SubscribeTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method SubscribeTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SubscribeTranslation|null find($key, $default = null)
     * @method SubscribeTranslation[] all()
     */
    class _IH_SubscribeTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SubscribeTranslation[][]|Collection<_IH_SubscribeTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SubscribeTranslation_QB whereId($value)
     * @method _IH_SubscribeTranslation_QB whereSubscribeId($value)
     * @method _IH_SubscribeTranslation_QB whereLocale($value)
     * @method _IH_SubscribeTranslation_QB whereTitle($value)
     * @method _IH_SubscribeTranslation_QB whereDescription($value)
     * @method SubscribeTranslation baseSole(array|string $columns = ['*'])
     * @method SubscribeTranslation create(array $attributes = [])
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] cursor()
     * @method SubscribeTranslation|null|_IH_SubscribeTranslation_C|SubscribeTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SubscribeTranslation|_IH_SubscribeTranslation_C|SubscribeTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeTranslation|_IH_SubscribeTranslation_C|SubscribeTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method SubscribeTranslation|_IH_SubscribeTranslation_C|SubscribeTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method SubscribeTranslation first(array|string $columns = ['*'])
     * @method SubscribeTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SubscribeTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method SubscribeTranslation firstOrFail(array|string $columns = ['*'])
     * @method SubscribeTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method SubscribeTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SubscribeTranslation forceCreate(array $attributes)
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] get(array|string $columns = ['*'])
     * @method SubscribeTranslation getModel()
     * @method SubscribeTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] hydrate(array $items)
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SubscribeTranslation_C|SubscribeTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SubscribeTranslation make(array $attributes = [])
     * @method SubscribeTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SubscribeTranslation[]|_IH_SubscribeTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SubscribeTranslation[]|_IH_SubscribeTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SubscribeTranslation sole(array|string $columns = ['*'])
     * @method SubscribeTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SubscribeTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method SupportDepartmentTranslation|null getOrPut($key, $value)
     * @method SupportDepartmentTranslation|$this shift(int $count = 1)
     * @method SupportDepartmentTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartmentTranslation|$this pop(int $count = 1)
     * @method SupportDepartmentTranslation|null pull($key, \Closure $default = null)
     * @method SupportDepartmentTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method SupportDepartmentTranslation|$this random(callable|int|null $number = null)
     * @method SupportDepartmentTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method SupportDepartmentTranslation|null get($key, \Closure $default = null)
     * @method SupportDepartmentTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method SupportDepartmentTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method SupportDepartmentTranslation|null find($key, $default = null)
     * @method SupportDepartmentTranslation[] all()
     */
    class _IH_SupportDepartmentTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return SupportDepartmentTranslation[][]|Collection<_IH_SupportDepartmentTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_SupportDepartmentTranslation_QB whereId($value)
     * @method _IH_SupportDepartmentTranslation_QB whereSupportDepartmentId($value)
     * @method _IH_SupportDepartmentTranslation_QB whereLocale($value)
     * @method _IH_SupportDepartmentTranslation_QB whereTitle($value)
     * @method SupportDepartmentTranslation baseSole(array|string $columns = ['*'])
     * @method SupportDepartmentTranslation create(array $attributes = [])
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] cursor()
     * @method SupportDepartmentTranslation|null|_IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method SupportDepartmentTranslation|_IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartmentTranslation|_IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method SupportDepartmentTranslation|_IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method SupportDepartmentTranslation first(array|string $columns = ['*'])
     * @method SupportDepartmentTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method SupportDepartmentTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method SupportDepartmentTranslation firstOrFail(array|string $columns = ['*'])
     * @method SupportDepartmentTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method SupportDepartmentTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method SupportDepartmentTranslation forceCreate(array $attributes)
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] get(array|string $columns = ['*'])
     * @method SupportDepartmentTranslation getModel()
     * @method SupportDepartmentTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] hydrate(array $items)
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method SupportDepartmentTranslation make(array $attributes = [])
     * @method SupportDepartmentTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|SupportDepartmentTranslation[]|_IH_SupportDepartmentTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportDepartmentTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|SupportDepartmentTranslation[]|_IH_SupportDepartmentTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method SupportDepartmentTranslation sole(array|string $columns = ['*'])
     * @method SupportDepartmentTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_SupportDepartmentTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method TestimonialTranslation|null getOrPut($key, $value)
     * @method TestimonialTranslation|$this shift(int $count = 1)
     * @method TestimonialTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TestimonialTranslation|$this pop(int $count = 1)
     * @method TestimonialTranslation|null pull($key, \Closure $default = null)
     * @method TestimonialTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method TestimonialTranslation|$this random(callable|int|null $number = null)
     * @method TestimonialTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TestimonialTranslation|null get($key, \Closure $default = null)
     * @method TestimonialTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method TestimonialTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TestimonialTranslation|null find($key, $default = null)
     * @method TestimonialTranslation[] all()
     */
    class _IH_TestimonialTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TestimonialTranslation[][]|Collection<_IH_TestimonialTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TestimonialTranslation_QB whereId($value)
     * @method _IH_TestimonialTranslation_QB whereTestimonialId($value)
     * @method _IH_TestimonialTranslation_QB whereLocale($value)
     * @method _IH_TestimonialTranslation_QB whereUserName($value)
     * @method _IH_TestimonialTranslation_QB whereUserBio($value)
     * @method _IH_TestimonialTranslation_QB whereComment($value)
     * @method TestimonialTranslation baseSole(array|string $columns = ['*'])
     * @method TestimonialTranslation create(array $attributes = [])
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] cursor()
     * @method TestimonialTranslation|null|_IH_TestimonialTranslation_C|TestimonialTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TestimonialTranslation|_IH_TestimonialTranslation_C|TestimonialTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TestimonialTranslation|_IH_TestimonialTranslation_C|TestimonialTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method TestimonialTranslation|_IH_TestimonialTranslation_C|TestimonialTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method TestimonialTranslation first(array|string $columns = ['*'])
     * @method TestimonialTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TestimonialTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method TestimonialTranslation firstOrFail(array|string $columns = ['*'])
     * @method TestimonialTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method TestimonialTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TestimonialTranslation forceCreate(array $attributes)
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] get(array|string $columns = ['*'])
     * @method TestimonialTranslation getModel()
     * @method TestimonialTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] hydrate(array $items)
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TestimonialTranslation_C|TestimonialTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TestimonialTranslation make(array $attributes = [])
     * @method TestimonialTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TestimonialTranslation[]|_IH_TestimonialTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TestimonialTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TestimonialTranslation[]|_IH_TestimonialTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TestimonialTranslation sole(array|string $columns = ['*'])
     * @method TestimonialTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TestimonialTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method TextLessonTranslation|null getOrPut($key, $value)
     * @method TextLessonTranslation|$this shift(int $count = 1)
     * @method TextLessonTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TextLessonTranslation|$this pop(int $count = 1)
     * @method TextLessonTranslation|null pull($key, \Closure $default = null)
     * @method TextLessonTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method TextLessonTranslation|$this random(callable|int|null $number = null)
     * @method TextLessonTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TextLessonTranslation|null get($key, \Closure $default = null)
     * @method TextLessonTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method TextLessonTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TextLessonTranslation|null find($key, $default = null)
     * @method TextLessonTranslation[] all()
     */
    class _IH_TextLessonTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TextLessonTranslation[][]|Collection<_IH_TextLessonTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TextLessonTranslation_QB whereId($value)
     * @method _IH_TextLessonTranslation_QB whereTextLessonId($value)
     * @method _IH_TextLessonTranslation_QB whereLocale($value)
     * @method _IH_TextLessonTranslation_QB whereTitle($value)
     * @method _IH_TextLessonTranslation_QB whereSummary($value)
     * @method _IH_TextLessonTranslation_QB whereContent($value)
     * @method TextLessonTranslation baseSole(array|string $columns = ['*'])
     * @method TextLessonTranslation create(array $attributes = [])
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] cursor()
     * @method TextLessonTranslation|null|_IH_TextLessonTranslation_C|TextLessonTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TextLessonTranslation|_IH_TextLessonTranslation_C|TextLessonTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLessonTranslation|_IH_TextLessonTranslation_C|TextLessonTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method TextLessonTranslation|_IH_TextLessonTranslation_C|TextLessonTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method TextLessonTranslation first(array|string $columns = ['*'])
     * @method TextLessonTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TextLessonTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method TextLessonTranslation firstOrFail(array|string $columns = ['*'])
     * @method TextLessonTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method TextLessonTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TextLessonTranslation forceCreate(array $attributes)
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] get(array|string $columns = ['*'])
     * @method TextLessonTranslation getModel()
     * @method TextLessonTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] hydrate(array $items)
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TextLessonTranslation_C|TextLessonTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TextLessonTranslation make(array $attributes = [])
     * @method TextLessonTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TextLessonTranslation[]|_IH_TextLessonTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLessonTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TextLessonTranslation[]|_IH_TextLessonTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TextLessonTranslation sole(array|string $columns = ['*'])
     * @method TextLessonTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TextLessonTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method TicketTranslation|null getOrPut($key, $value)
     * @method TicketTranslation|$this shift(int $count = 1)
     * @method TicketTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method TicketTranslation|$this pop(int $count = 1)
     * @method TicketTranslation|null pull($key, \Closure $default = null)
     * @method TicketTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method TicketTranslation|$this random(callable|int|null $number = null)
     * @method TicketTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method TicketTranslation|null get($key, \Closure $default = null)
     * @method TicketTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method TicketTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method TicketTranslation|null find($key, $default = null)
     * @method TicketTranslation[] all()
     */
    class _IH_TicketTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return TicketTranslation[][]|Collection<_IH_TicketTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_TicketTranslation_QB whereId($value)
     * @method _IH_TicketTranslation_QB whereTicketId($value)
     * @method _IH_TicketTranslation_QB whereLocale($value)
     * @method _IH_TicketTranslation_QB whereTitle($value)
     * @method TicketTranslation baseSole(array|string $columns = ['*'])
     * @method TicketTranslation create(array $attributes = [])
     * @method _IH_TicketTranslation_C|TicketTranslation[] cursor()
     * @method TicketTranslation|null|_IH_TicketTranslation_C|TicketTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_TicketTranslation_C|TicketTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method TicketTranslation|_IH_TicketTranslation_C|TicketTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TicketTranslation|_IH_TicketTranslation_C|TicketTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method TicketTranslation|_IH_TicketTranslation_C|TicketTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method TicketTranslation first(array|string $columns = ['*'])
     * @method TicketTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method TicketTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method TicketTranslation firstOrFail(array|string $columns = ['*'])
     * @method TicketTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method TicketTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method TicketTranslation forceCreate(array $attributes)
     * @method _IH_TicketTranslation_C|TicketTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_TicketTranslation_C|TicketTranslation[] get(array|string $columns = ['*'])
     * @method TicketTranslation getModel()
     * @method TicketTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_TicketTranslation_C|TicketTranslation[] hydrate(array $items)
     * @method _IH_TicketTranslation_C|TicketTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_TicketTranslation_C|TicketTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_TicketTranslation_C|TicketTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method TicketTranslation make(array $attributes = [])
     * @method TicketTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|TicketTranslation[]|_IH_TicketTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|TicketTranslation[]|_IH_TicketTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method TicketTranslation sole(array|string $columns = ['*'])
     * @method TicketTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_TicketTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method UpcomingCourseTranslation|null getOrPut($key, $value)
     * @method UpcomingCourseTranslation|$this shift(int $count = 1)
     * @method UpcomingCourseTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseTranslation|$this pop(int $count = 1)
     * @method UpcomingCourseTranslation|null pull($key, \Closure $default = null)
     * @method UpcomingCourseTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseTranslation|$this random(callable|int|null $number = null)
     * @method UpcomingCourseTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UpcomingCourseTranslation|null get($key, \Closure $default = null)
     * @method UpcomingCourseTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method UpcomingCourseTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UpcomingCourseTranslation|null find($key, $default = null)
     * @method UpcomingCourseTranslation[] all()
     */
    class _IH_UpcomingCourseTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UpcomingCourseTranslation[][]|Collection<_IH_UpcomingCourseTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UpcomingCourseTranslation_QB whereId($value)
     * @method _IH_UpcomingCourseTranslation_QB whereUpcomingCourseId($value)
     * @method _IH_UpcomingCourseTranslation_QB whereLocale($value)
     * @method _IH_UpcomingCourseTranslation_QB whereTitle($value)
     * @method _IH_UpcomingCourseTranslation_QB whereSeoDescription($value)
     * @method _IH_UpcomingCourseTranslation_QB whereDescription($value)
     * @method UpcomingCourseTranslation baseSole(array|string $columns = ['*'])
     * @method UpcomingCourseTranslation create(array $attributes = [])
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] cursor()
     * @method UpcomingCourseTranslation|null|_IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UpcomingCourseTranslation|_IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseTranslation|_IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method UpcomingCourseTranslation|_IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method UpcomingCourseTranslation first(array|string $columns = ['*'])
     * @method UpcomingCourseTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UpcomingCourseTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method UpcomingCourseTranslation firstOrFail(array|string $columns = ['*'])
     * @method UpcomingCourseTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method UpcomingCourseTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UpcomingCourseTranslation forceCreate(array $attributes)
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] get(array|string $columns = ['*'])
     * @method UpcomingCourseTranslation getModel()
     * @method UpcomingCourseTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] hydrate(array $items)
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UpcomingCourseTranslation make(array $attributes = [])
     * @method UpcomingCourseTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UpcomingCourseTranslation[]|_IH_UpcomingCourseTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UpcomingCourseTranslation[]|_IH_UpcomingCourseTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UpcomingCourseTranslation sole(array|string $columns = ['*'])
     * @method UpcomingCourseTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UpcomingCourseTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method UserBankSpecificationTranslation|null getOrPut($key, $value)
     * @method UserBankSpecificationTranslation|$this shift(int $count = 1)
     * @method UserBankSpecificationTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankSpecificationTranslation|$this pop(int $count = 1)
     * @method UserBankSpecificationTranslation|null pull($key, \Closure $default = null)
     * @method UserBankSpecificationTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method UserBankSpecificationTranslation|$this random(callable|int|null $number = null)
     * @method UserBankSpecificationTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankSpecificationTranslation|null get($key, \Closure $default = null)
     * @method UserBankSpecificationTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method UserBankSpecificationTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserBankSpecificationTranslation|null find($key, $default = null)
     * @method UserBankSpecificationTranslation[] all()
     */
    class _IH_UserBankSpecificationTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserBankSpecificationTranslation[][]|Collection<_IH_UserBankSpecificationTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserBankSpecificationTranslation_QB whereId($value)
     * @method _IH_UserBankSpecificationTranslation_QB whereUserBankSpecificationId($value)
     * @method _IH_UserBankSpecificationTranslation_QB whereLocale($value)
     * @method _IH_UserBankSpecificationTranslation_QB whereName($value)
     * @method UserBankSpecificationTranslation baseSole(array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation create(array $attributes = [])
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] cursor()
     * @method UserBankSpecificationTranslation|null|_IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation|_IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankSpecificationTranslation|_IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation|_IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation first(array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankSpecificationTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method UserBankSpecificationTranslation firstOrFail(array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method UserBankSpecificationTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserBankSpecificationTranslation forceCreate(array $attributes)
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] get(array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation getModel()
     * @method UserBankSpecificationTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] hydrate(array $items)
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserBankSpecificationTranslation make(array $attributes = [])
     * @method UserBankSpecificationTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserBankSpecificationTranslation[]|_IH_UserBankSpecificationTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankSpecificationTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserBankSpecificationTranslation[]|_IH_UserBankSpecificationTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankSpecificationTranslation sole(array|string $columns = ['*'])
     * @method UserBankSpecificationTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserBankSpecificationTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method UserBankTranslation|null getOrPut($key, $value)
     * @method UserBankTranslation|$this shift(int $count = 1)
     * @method UserBankTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankTranslation|$this pop(int $count = 1)
     * @method UserBankTranslation|null pull($key, \Closure $default = null)
     * @method UserBankTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method UserBankTranslation|$this random(callable|int|null $number = null)
     * @method UserBankTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserBankTranslation|null get($key, \Closure $default = null)
     * @method UserBankTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method UserBankTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserBankTranslation|null find($key, $default = null)
     * @method UserBankTranslation[] all()
     */
    class _IH_UserBankTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserBankTranslation[][]|Collection<_IH_UserBankTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserBankTranslation_QB whereId($value)
     * @method _IH_UserBankTranslation_QB whereUserBankId($value)
     * @method _IH_UserBankTranslation_QB whereLocale($value)
     * @method _IH_UserBankTranslation_QB whereTitle($value)
     * @method UserBankTranslation baseSole(array|string $columns = ['*'])
     * @method UserBankTranslation create(array $attributes = [])
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] cursor()
     * @method UserBankTranslation|null|_IH_UserBankTranslation_C|UserBankTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserBankTranslation|_IH_UserBankTranslation_C|UserBankTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankTranslation|_IH_UserBankTranslation_C|UserBankTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method UserBankTranslation|_IH_UserBankTranslation_C|UserBankTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method UserBankTranslation first(array|string $columns = ['*'])
     * @method UserBankTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserBankTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method UserBankTranslation firstOrFail(array|string $columns = ['*'])
     * @method UserBankTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method UserBankTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserBankTranslation forceCreate(array $attributes)
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] get(array|string $columns = ['*'])
     * @method UserBankTranslation getModel()
     * @method UserBankTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] hydrate(array $items)
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserBankTranslation_C|UserBankTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserBankTranslation make(array $attributes = [])
     * @method UserBankTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserBankTranslation[]|_IH_UserBankTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserBankTranslation[]|_IH_UserBankTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserBankTranslation sole(array|string $columns = ['*'])
     * @method UserBankTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserBankTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method UserProfileAttachmentTranslation|null getOrPut($key, $value)
     * @method UserProfileAttachmentTranslation|$this shift(int $count = 1)
     * @method UserProfileAttachmentTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method UserProfileAttachmentTranslation|$this pop(int $count = 1)
     * @method UserProfileAttachmentTranslation|null pull($key, \Closure $default = null)
     * @method UserProfileAttachmentTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method UserProfileAttachmentTranslation|$this random(callable|int|null $number = null)
     * @method UserProfileAttachmentTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method UserProfileAttachmentTranslation|null get($key, \Closure $default = null)
     * @method UserProfileAttachmentTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method UserProfileAttachmentTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method UserProfileAttachmentTranslation|null find($key, $default = null)
     * @method UserProfileAttachmentTranslation[] all()
     */
    class _IH_UserProfileAttachmentTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return UserProfileAttachmentTranslation[][]|Collection<_IH_UserProfileAttachmentTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_UserProfileAttachmentTranslation_QB whereId($value)
     * @method _IH_UserProfileAttachmentTranslation_QB whereUserProfileAttachmentId($value)
     * @method _IH_UserProfileAttachmentTranslation_QB whereLocale($value)
     * @method _IH_UserProfileAttachmentTranslation_QB whereTitle($value)
     * @method _IH_UserProfileAttachmentTranslation_QB whereDescription($value)
     * @method UserProfileAttachmentTranslation baseSole(array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation create(array $attributes = [])
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] cursor()
     * @method UserProfileAttachmentTranslation|null|_IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation|_IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserProfileAttachmentTranslation|_IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation|_IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation first(array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method UserProfileAttachmentTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method UserProfileAttachmentTranslation firstOrFail(array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method UserProfileAttachmentTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method UserProfileAttachmentTranslation forceCreate(array $attributes)
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] get(array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation getModel()
     * @method UserProfileAttachmentTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] hydrate(array $items)
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method UserProfileAttachmentTranslation make(array $attributes = [])
     * @method UserProfileAttachmentTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|UserProfileAttachmentTranslation[]|_IH_UserProfileAttachmentTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserProfileAttachmentTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|UserProfileAttachmentTranslation[]|_IH_UserProfileAttachmentTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method UserProfileAttachmentTranslation sole(array|string $columns = ['*'])
     * @method UserProfileAttachmentTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_UserProfileAttachmentTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarAssignmentTranslation|null getOrPut($key, $value)
     * @method WebinarAssignmentTranslation|$this shift(int $count = 1)
     * @method WebinarAssignmentTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentTranslation|$this pop(int $count = 1)
     * @method WebinarAssignmentTranslation|null pull($key, \Closure $default = null)
     * @method WebinarAssignmentTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentTranslation|$this random(callable|int|null $number = null)
     * @method WebinarAssignmentTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarAssignmentTranslation|null get($key, \Closure $default = null)
     * @method WebinarAssignmentTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarAssignmentTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarAssignmentTranslation|null find($key, $default = null)
     * @method WebinarAssignmentTranslation[] all()
     */
    class _IH_WebinarAssignmentTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarAssignmentTranslation[][]|Collection<_IH_WebinarAssignmentTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarAssignmentTranslation_QB whereId($value)
     * @method _IH_WebinarAssignmentTranslation_QB whereLocale($value)
     * @method _IH_WebinarAssignmentTranslation_QB whereWebinarAssignmentId($value)
     * @method _IH_WebinarAssignmentTranslation_QB whereTitle($value)
     * @method _IH_WebinarAssignmentTranslation_QB whereDescription($value)
     * @method WebinarAssignmentTranslation baseSole(array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation create(array $attributes = [])
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] cursor()
     * @method WebinarAssignmentTranslation|null|_IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation|_IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentTranslation|_IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation|_IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation first(array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarAssignmentTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarAssignmentTranslation firstOrFail(array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarAssignmentTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarAssignmentTranslation forceCreate(array $attributes)
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] get(array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation getModel()
     * @method WebinarAssignmentTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] hydrate(array $items)
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarAssignmentTranslation make(array $attributes = [])
     * @method WebinarAssignmentTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarAssignmentTranslation[]|_IH_WebinarAssignmentTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarAssignmentTranslation[]|_IH_WebinarAssignmentTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarAssignmentTranslation sole(array|string $columns = ['*'])
     * @method WebinarAssignmentTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarAssignmentTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarChapterTranslation|null getOrPut($key, $value)
     * @method WebinarChapterTranslation|$this shift(int $count = 1)
     * @method WebinarChapterTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapterTranslation|$this pop(int $count = 1)
     * @method WebinarChapterTranslation|null pull($key, \Closure $default = null)
     * @method WebinarChapterTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarChapterTranslation|$this random(callable|int|null $number = null)
     * @method WebinarChapterTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarChapterTranslation|null get($key, \Closure $default = null)
     * @method WebinarChapterTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarChapterTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarChapterTranslation|null find($key, $default = null)
     * @method WebinarChapterTranslation[] all()
     */
    class _IH_WebinarChapterTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarChapterTranslation[][]|Collection<_IH_WebinarChapterTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarChapterTranslation_QB whereId($value)
     * @method _IH_WebinarChapterTranslation_QB whereWebinarChapterId($value)
     * @method _IH_WebinarChapterTranslation_QB whereLocale($value)
     * @method _IH_WebinarChapterTranslation_QB whereTitle($value)
     * @method WebinarChapterTranslation baseSole(array|string $columns = ['*'])
     * @method WebinarChapterTranslation create(array $attributes = [])
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] cursor()
     * @method WebinarChapterTranslation|null|_IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarChapterTranslation|_IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapterTranslation|_IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarChapterTranslation|_IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarChapterTranslation first(array|string $columns = ['*'])
     * @method WebinarChapterTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarChapterTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarChapterTranslation firstOrFail(array|string $columns = ['*'])
     * @method WebinarChapterTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarChapterTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarChapterTranslation forceCreate(array $attributes)
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] get(array|string $columns = ['*'])
     * @method WebinarChapterTranslation getModel()
     * @method WebinarChapterTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] hydrate(array $items)
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarChapterTranslation make(array $attributes = [])
     * @method WebinarChapterTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarChapterTranslation[]|_IH_WebinarChapterTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapterTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarChapterTranslation[]|_IH_WebinarChapterTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarChapterTranslation sole(array|string $columns = ['*'])
     * @method WebinarChapterTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarChapterTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarExtraDescriptionTranslation|null getOrPut($key, $value)
     * @method WebinarExtraDescriptionTranslation|$this shift(int $count = 1)
     * @method WebinarExtraDescriptionTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarExtraDescriptionTranslation|$this pop(int $count = 1)
     * @method WebinarExtraDescriptionTranslation|null pull($key, \Closure $default = null)
     * @method WebinarExtraDescriptionTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarExtraDescriptionTranslation|$this random(callable|int|null $number = null)
     * @method WebinarExtraDescriptionTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarExtraDescriptionTranslation|null get($key, \Closure $default = null)
     * @method WebinarExtraDescriptionTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarExtraDescriptionTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarExtraDescriptionTranslation|null find($key, $default = null)
     * @method WebinarExtraDescriptionTranslation[] all()
     */
    class _IH_WebinarExtraDescriptionTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarExtraDescriptionTranslation[][]|Collection<_IH_WebinarExtraDescriptionTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarExtraDescriptionTranslation_QB whereId($value)
     * @method _IH_WebinarExtraDescriptionTranslation_QB whereWebinarExtraDescriptionId($value)
     * @method _IH_WebinarExtraDescriptionTranslation_QB whereLocale($value)
     * @method _IH_WebinarExtraDescriptionTranslation_QB whereValue($value)
     * @method WebinarExtraDescriptionTranslation baseSole(array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation create(array $attributes = [])
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] cursor()
     * @method WebinarExtraDescriptionTranslation|null|_IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation|_IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarExtraDescriptionTranslation|_IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation|_IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation first(array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarExtraDescriptionTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarExtraDescriptionTranslation firstOrFail(array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarExtraDescriptionTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarExtraDescriptionTranslation forceCreate(array $attributes)
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] get(array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation getModel()
     * @method WebinarExtraDescriptionTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] hydrate(array $items)
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarExtraDescriptionTranslation make(array $attributes = [])
     * @method WebinarExtraDescriptionTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarExtraDescriptionTranslation[]|_IH_WebinarExtraDescriptionTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarExtraDescriptionTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarExtraDescriptionTranslation[]|_IH_WebinarExtraDescriptionTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarExtraDescriptionTranslation sole(array|string $columns = ['*'])
     * @method WebinarExtraDescriptionTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarExtraDescriptionTranslation_QB extends _BaseBuilder {}
    
    /**
     * @method WebinarTranslation|null getOrPut($key, $value)
     * @method WebinarTranslation|$this shift(int $count = 1)
     * @method WebinarTranslation|null firstOrFail(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarTranslation|$this pop(int $count = 1)
     * @method WebinarTranslation|null pull($key, \Closure $default = null)
     * @method WebinarTranslation|null last(callable $callback = null, \Closure $default = null)
     * @method WebinarTranslation|$this random(callable|int|null $number = null)
     * @method WebinarTranslation|null sole(callable|string $key = null, $operator = null, $value = null)
     * @method WebinarTranslation|null get($key, \Closure $default = null)
     * @method WebinarTranslation|null first(callable $callback = null, \Closure $default = null)
     * @method WebinarTranslation|null firstWhere(callable|string $key, $operator = null, $value = null)
     * @method WebinarTranslation|null find($key, $default = null)
     * @method WebinarTranslation[] all()
     */
    class _IH_WebinarTranslation_C extends _BaseCollection {
        /**
         * @param int $size
         * @return WebinarTranslation[][]|Collection<_IH_WebinarTranslation_C>
         */
        public function chunk($size)
        {
            return [];
        }
    }
    
    /**
     * @method _IH_WebinarTranslation_QB whereId($value)
     * @method _IH_WebinarTranslation_QB whereWebinarId($value)
     * @method _IH_WebinarTranslation_QB whereLocale($value)
     * @method _IH_WebinarTranslation_QB whereTitle($value)
     * @method _IH_WebinarTranslation_QB whereSeoDescription($value)
     * @method _IH_WebinarTranslation_QB whereDescription($value)
     * @method WebinarTranslation baseSole(array|string $columns = ['*'])
     * @method WebinarTranslation create(array $attributes = [])
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] cursor()
     * @method WebinarTranslation|null|_IH_WebinarTranslation_C|WebinarTranslation[] find($id, array|string $columns = ['*'])
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] findMany(array|Arrayable $ids, array|string $columns = ['*'])
     * @method WebinarTranslation|_IH_WebinarTranslation_C|WebinarTranslation[] findOr($id, array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarTranslation|_IH_WebinarTranslation_C|WebinarTranslation[] findOrFail($id, array|string $columns = ['*'])
     * @method WebinarTranslation|_IH_WebinarTranslation_C|WebinarTranslation[] findOrNew($id, array|string $columns = ['*'])
     * @method WebinarTranslation first(array|string $columns = ['*'])
     * @method WebinarTranslation firstOr(array|\Closure|string $columns = ['*'], \Closure $callback = null)
     * @method WebinarTranslation firstOrCreate(array $attributes = [], array $values = [])
     * @method WebinarTranslation firstOrFail(array|string $columns = ['*'])
     * @method WebinarTranslation firstOrNew(array $attributes = [], array $values = [])
     * @method WebinarTranslation firstWhere(array|\Closure|Expression|string $column, $operator = null, $value = null, string $boolean = 'and')
     * @method WebinarTranslation forceCreate(array $attributes)
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] fromQuery(string $query, array $bindings = [])
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] get(array|string $columns = ['*'])
     * @method WebinarTranslation getModel()
     * @method WebinarTranslation[] getModels(array|string $columns = ['*'])
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] hydrate(array $items)
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] lazy(int $chunkSize = 1000)
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] lazyById(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method _IH_WebinarTranslation_C|WebinarTranslation[] lazyByIdDesc(int $chunkSize = 1000, null|string $column = null, null|string $alias = null)
     * @method WebinarTranslation make(array $attributes = [])
     * @method WebinarTranslation newModelInstance(array $attributes = [])
     * @method LengthAwarePaginator|WebinarTranslation[]|_IH_WebinarTranslation_C paginate(\Closure|int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarTranslation restoreOrCreate(array $attributes = [], array $values = [])
     * @method Paginator|WebinarTranslation[]|_IH_WebinarTranslation_C simplePaginate(int|null $perPage = null, array|string $columns = ['*'], string $pageName = 'page', int|null $page = null)
     * @method WebinarTranslation sole(array|string $columns = ['*'])
     * @method WebinarTranslation updateOrCreate(array $attributes, array $values = [])
     */
    class _IH_WebinarTranslation_QB extends _BaseBuilder {}
}