<?php //c77818a50644cbe2fd012c6f076b10f2
/** @noinspection all */

namespace App\Models\Translation {

    use Illuminate\Database\Eloquent\Model;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AbandonedCartRuleTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AbandonedCartRuleTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AdvertisingBannerTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AdvertisingBannerTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AiContentTemplateTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_AiContentTemplateTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BadgeTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BadgeTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BlogCategoryTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BlogCategoryTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BlogTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BlogTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BundleTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_BundleTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CartDiscountTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CartDiscountTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CashbackRuleTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CashbackRuleTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CategoryTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CategoryTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CertificateTemplateTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_CertificateTemplateTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FaqTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FaqTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FeatureWebinarTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FeatureWebinarTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FileTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FileTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FilterOptionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FilterOptionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FilterTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FilterTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FloatingBarTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FloatingBarTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormFieldOptionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormFieldOptionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormFieldTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormFieldTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_FormTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ForumTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ForumTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_HomePageStatisticTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_HomePageStatisticTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_InstallmentStepTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_InstallmentStepTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_InstallmentTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_InstallmentTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_NavbarButtonTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_NavbarButtonTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_OfflineBankSpecificationTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_OfflineBankSpecificationTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_OfflineBankTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_OfflineBankTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PageTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PageTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductBadgeTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductBadgeTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductCategoryTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductCategoryTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFaqTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFaqTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFileTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFileTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFilterOptionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFilterOptionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFilterTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductFilterTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSelectedSpecificationTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSelectedSpecificationTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSpecificationMultiValueTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSpecificationMultiValueTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSpecificationTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductSpecificationTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_ProductTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PromotionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PromotionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PurchaseNotificationTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_PurchaseNotificationTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizzesQuestionsAnswerTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizzesQuestionsAnswerTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizzesQuestionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_QuizzesQuestionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_RegistrationPackageTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_RegistrationPackageTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SessionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SessionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SettingTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SettingTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SubscribeTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SubscribeTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SupportDepartmentTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_SupportDepartmentTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TestimonialTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TestimonialTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TextLessonTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TextLessonTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TicketTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_TicketTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UpcomingCourseTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UpcomingCourseTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserBankSpecificationTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserBankSpecificationTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserBankTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserBankTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserProfileAttachmentTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_UserProfileAttachmentTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarAssignmentTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarAssignmentTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarChapterTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarChapterTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarExtraDescriptionTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarExtraDescriptionTranslation_QB;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarTranslation_C;
    use LaravelIdea\Helper\App\Models\Translation\_IH_WebinarTranslation_QB;
    
    /**
     * @property int $id
     * @property int $abandoned_cart_rule_id
     * @property string $locale
     * @property string $title
     * @method static _IH_AbandonedCartRuleTranslation_QB onWriteConnection()
     * @method _IH_AbandonedCartRuleTranslation_QB newQuery()
     * @method static _IH_AbandonedCartRuleTranslation_QB on(null|string $connection = null)
     * @method static _IH_AbandonedCartRuleTranslation_QB query()
     * @method static _IH_AbandonedCartRuleTranslation_QB with(array|string $relations)
     * @method _IH_AbandonedCartRuleTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AbandonedCartRuleTranslation_C|AbandonedCartRuleTranslation[] all()
     * @ownLinks abandoned_cart_rule_id,\App\Models\AbandonedCartRule,id
     * @mixin _IH_AbandonedCartRuleTranslation_QB
     */
    class AbandonedCartRuleTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $advertising_banner_id
     * @property string $locale
     * @property string $title
     * @property string $image
     * @method static _IH_AdvertisingBannerTranslation_QB onWriteConnection()
     * @method _IH_AdvertisingBannerTranslation_QB newQuery()
     * @method static _IH_AdvertisingBannerTranslation_QB on(null|string $connection = null)
     * @method static _IH_AdvertisingBannerTranslation_QB query()
     * @method static _IH_AdvertisingBannerTranslation_QB with(array|string $relations)
     * @method _IH_AdvertisingBannerTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AdvertisingBannerTranslation_C|AdvertisingBannerTranslation[] all()
     * @ownLinks advertising_banner_id,\App\Models\AdvertisingBanner,id
     * @mixin _IH_AdvertisingBannerTranslation_QB
     */
    class AdvertisingBannerTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $ai_content_template_id
     * @property string $locale
     * @property string $title
     * @property string|null $prompt
     * @method static _IH_AiContentTemplateTranslation_QB onWriteConnection()
     * @method _IH_AiContentTemplateTranslation_QB newQuery()
     * @method static _IH_AiContentTemplateTranslation_QB on(null|string $connection = null)
     * @method static _IH_AiContentTemplateTranslation_QB query()
     * @method static _IH_AiContentTemplateTranslation_QB with(array|string $relations)
     * @method _IH_AiContentTemplateTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AiContentTemplateTranslation_C|AiContentTemplateTranslation[] all()
     * @ownLinks ai_content_template_id,\App\Models\AiContentTemplate,id
     * @mixin _IH_AiContentTemplateTranslation_QB
     */
    class AiContentTemplateTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $badge_id
     * @property string $locale
     * @property string $title
     * @property string $description
     * @method static _IH_BadgeTranslation_QB onWriteConnection()
     * @method _IH_BadgeTranslation_QB newQuery()
     * @method static _IH_BadgeTranslation_QB on(null|string $connection = null)
     * @method static _IH_BadgeTranslation_QB query()
     * @method static _IH_BadgeTranslation_QB with(array|string $relations)
     * @method _IH_BadgeTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BadgeTranslation_C|BadgeTranslation[] all()
     * @ownLinks badge_id,\App\Models\Badge,id
     * @mixin _IH_BadgeTranslation_QB
     */
    class BadgeTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $blog_category_id
     * @property string $locale
     * @property string $title
     * @method static _IH_BlogCategoryTranslation_QB onWriteConnection()
     * @method _IH_BlogCategoryTranslation_QB newQuery()
     * @method static _IH_BlogCategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_BlogCategoryTranslation_QB query()
     * @method static _IH_BlogCategoryTranslation_QB with(array|string $relations)
     * @method _IH_BlogCategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategoryTranslation_C|BlogCategoryTranslation[] all()
     * @ownLinks blog_category_id,\App\Models\Api\BlogCategory,id
     * @mixin _IH_BlogCategoryTranslation_QB
     */
    class BlogCategoryTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $blog_id
     * @property string $locale
     * @property string $title
     * @property string $description
     * @property string $content
     * @property string|null $meta_description
     * @method static _IH_BlogTranslation_QB onWriteConnection()
     * @method _IH_BlogTranslation_QB newQuery()
     * @method static _IH_BlogTranslation_QB on(null|string $connection = null)
     * @method static _IH_BlogTranslation_QB query()
     * @method static _IH_BlogTranslation_QB with(array|string $relations)
     * @method _IH_BlogTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogTranslation_C|BlogTranslation[] all()
     * @ownLinks blog_id,\App\Models\Api\Blog,id
     * @mixin _IH_BlogTranslation_QB
     */
    class BlogTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $bundle_id
     * @property string $locale
     * @property string $title
     * @property string|null $seo_description
     * @property string|null $description
     * @method static _IH_BundleTranslation_QB onWriteConnection()
     * @method _IH_BundleTranslation_QB newQuery()
     * @method static _IH_BundleTranslation_QB on(null|string $connection = null)
     * @method static _IH_BundleTranslation_QB query()
     * @method static _IH_BundleTranslation_QB with(array|string $relations)
     * @method _IH_BundleTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BundleTranslation_C|BundleTranslation[] all()
     * @ownLinks 
     * @mixin _IH_BundleTranslation_QB
     */
    class BundleTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $cart_discount_id
     * @property string $locale
     * @property string $title
     * @property string $subtitle
     * @method static _IH_CartDiscountTranslation_QB onWriteConnection()
     * @method _IH_CartDiscountTranslation_QB newQuery()
     * @method static _IH_CartDiscountTranslation_QB on(null|string $connection = null)
     * @method static _IH_CartDiscountTranslation_QB query()
     * @method static _IH_CartDiscountTranslation_QB with(array|string $relations)
     * @method _IH_CartDiscountTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CartDiscountTranslation_C|CartDiscountTranslation[] all()
     * @ownLinks cart_discount_id,\App\Models\CartDiscount,id
     * @mixin _IH_CartDiscountTranslation_QB
     */
    class CartDiscountTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $cashback_rule_id
     * @property string $locale
     * @property string $title
     * @method static _IH_CashbackRuleTranslation_QB onWriteConnection()
     * @method _IH_CashbackRuleTranslation_QB newQuery()
     * @method static _IH_CashbackRuleTranslation_QB on(null|string $connection = null)
     * @method static _IH_CashbackRuleTranslation_QB query()
     * @method static _IH_CashbackRuleTranslation_QB with(array|string $relations)
     * @method _IH_CashbackRuleTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CashbackRuleTranslation_C|CashbackRuleTranslation[] all()
     * @ownLinks cashback_rule_id,\App\Models\CashbackRule,id
     * @mixin _IH_CashbackRuleTranslation_QB
     */
    class CashbackRuleTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $category_id
     * @property string $locale
     * @property string $title
     * @method static _IH_CategoryTranslation_QB onWriteConnection()
     * @method _IH_CategoryTranslation_QB newQuery()
     * @method static _IH_CategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_CategoryTranslation_QB query()
     * @method static _IH_CategoryTranslation_QB with(array|string $relations)
     * @method _IH_CategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CategoryTranslation_C|CategoryTranslation[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @mixin _IH_CategoryTranslation_QB
     */
    class CategoryTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $certificate_template_id
     * @property string $locale
     * @property string|null $title
     * @property string|null $body
     * @property bool $rtl
     * @property string|null $elements
     * @method static _IH_CertificateTemplateTranslation_QB onWriteConnection()
     * @method _IH_CertificateTemplateTranslation_QB newQuery()
     * @method static _IH_CertificateTemplateTranslation_QB on(null|string $connection = null)
     * @method static _IH_CertificateTemplateTranslation_QB query()
     * @method static _IH_CertificateTemplateTranslation_QB with(array|string $relations)
     * @method _IH_CertificateTemplateTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CertificateTemplateTranslation_C|CertificateTemplateTranslation[] all()
     * @ownLinks certificate_template_id,\App\Models\CertificateTemplate,id
     * @mixin _IH_CertificateTemplateTranslation_QB
     */
    class CertificateTemplateTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $faq_id
     * @property string $locale
     * @property string $title
     * @property string $answer
     * @method static _IH_FaqTranslation_QB onWriteConnection()
     * @method _IH_FaqTranslation_QB newQuery()
     * @method static _IH_FaqTranslation_QB on(null|string $connection = null)
     * @method static _IH_FaqTranslation_QB query()
     * @method static _IH_FaqTranslation_QB with(array|string $relations)
     * @method _IH_FaqTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FaqTranslation_C|FaqTranslation[] all()
     * @ownLinks faq_id,\App\Models\Api\Faq,id
     * @mixin _IH_FaqTranslation_QB
     */
    class FaqTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $feature_webinar_id
     * @property string $locale
     * @property string|null $description
     * @method static _IH_FeatureWebinarTranslation_QB onWriteConnection()
     * @method _IH_FeatureWebinarTranslation_QB newQuery()
     * @method static _IH_FeatureWebinarTranslation_QB on(null|string $connection = null)
     * @method static _IH_FeatureWebinarTranslation_QB query()
     * @method static _IH_FeatureWebinarTranslation_QB with(array|string $relations)
     * @method _IH_FeatureWebinarTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FeatureWebinarTranslation_C|FeatureWebinarTranslation[] all()
     * @ownLinks feature_webinar_id,\App\Models\Api\FeatureWebinar,id
     * @mixin _IH_FeatureWebinarTranslation_QB
     */
    class FeatureWebinarTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $file_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_FileTranslation_QB onWriteConnection()
     * @method _IH_FileTranslation_QB newQuery()
     * @method static _IH_FileTranslation_QB on(null|string $connection = null)
     * @method static _IH_FileTranslation_QB query()
     * @method static _IH_FileTranslation_QB with(array|string $relations)
     * @method _IH_FileTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FileTranslation_C|FileTranslation[] all()
     * @ownLinks file_id,\App\Models\Api\File,id
     * @mixin _IH_FileTranslation_QB
     */
    class FileTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $filter_option_id
     * @property string $locale
     * @property string $title
     * @method static _IH_FilterOptionTranslation_QB onWriteConnection()
     * @method _IH_FilterOptionTranslation_QB newQuery()
     * @method static _IH_FilterOptionTranslation_QB on(null|string $connection = null)
     * @method static _IH_FilterOptionTranslation_QB query()
     * @method static _IH_FilterOptionTranslation_QB with(array|string $relations)
     * @method _IH_FilterOptionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilterOptionTranslation_C|FilterOptionTranslation[] all()
     * @ownLinks filter_option_id,\App\Models\FilterOption,id
     * @mixin _IH_FilterOptionTranslation_QB
     */
    class FilterOptionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $filter_id
     * @property string $locale
     * @property string $title
     * @method static _IH_FilterTranslation_QB onWriteConnection()
     * @method _IH_FilterTranslation_QB newQuery()
     * @method static _IH_FilterTranslation_QB on(null|string $connection = null)
     * @method static _IH_FilterTranslation_QB query()
     * @method static _IH_FilterTranslation_QB with(array|string $relations)
     * @method _IH_FilterTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilterTranslation_C|FilterTranslation[] all()
     * @ownLinks filter_id,\App\Models\Filter,id
     * @mixin _IH_FilterTranslation_QB
     */
    class FilterTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $floating_bar_id
     * @property string $locale
     * @property string|null $title
     * @property string|null $description
     * @property string|null $btn_text
     * @method static _IH_FloatingBarTranslation_QB onWriteConnection()
     * @method _IH_FloatingBarTranslation_QB newQuery()
     * @method static _IH_FloatingBarTranslation_QB on(null|string $connection = null)
     * @method static _IH_FloatingBarTranslation_QB query()
     * @method static _IH_FloatingBarTranslation_QB with(array|string $relations)
     * @method _IH_FloatingBarTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FloatingBarTranslation_C|FloatingBarTranslation[] all()
     * @ownLinks floating_bar_id,\App\Models\FloatingBar,id
     * @mixin _IH_FloatingBarTranslation_QB
     */
    class FloatingBarTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $form_field_option_id
     * @property string $locale
     * @property string $title
     * @method static _IH_FormFieldOptionTranslation_QB onWriteConnection()
     * @method _IH_FormFieldOptionTranslation_QB newQuery()
     * @method static _IH_FormFieldOptionTranslation_QB on(null|string $connection = null)
     * @method static _IH_FormFieldOptionTranslation_QB query()
     * @method static _IH_FormFieldOptionTranslation_QB with(array|string $relations)
     * @method _IH_FormFieldOptionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormFieldOptionTranslation_C|FormFieldOptionTranslation[] all()
     * @ownLinks form_field_option_id,\App\Models\FormFieldOption,id
     * @mixin _IH_FormFieldOptionTranslation_QB
     */
    class FormFieldOptionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $form_field_id
     * @property string $locale
     * @property string $title
     * @method static _IH_FormFieldTranslation_QB onWriteConnection()
     * @method _IH_FormFieldTranslation_QB newQuery()
     * @method static _IH_FormFieldTranslation_QB on(null|string $connection = null)
     * @method static _IH_FormFieldTranslation_QB query()
     * @method static _IH_FormFieldTranslation_QB with(array|string $relations)
     * @method _IH_FormFieldTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormFieldTranslation_C|FormFieldTranslation[] all()
     * @ownLinks form_field_id,\App\Models\FormField,id
     * @mixin _IH_FormFieldTranslation_QB
     */
    class FormFieldTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $form_id
     * @property string $locale
     * @property string $title
     * @property string|null $heading_title
     * @property string|null $description
     * @property string|null $welcome_message_title
     * @property string|null $welcome_message_description
     * @property string|null $tank_you_message_title
     * @property string|null $tank_you_message_description
     * @method static _IH_FormTranslation_QB onWriteConnection()
     * @method _IH_FormTranslation_QB newQuery()
     * @method static _IH_FormTranslation_QB on(null|string $connection = null)
     * @method static _IH_FormTranslation_QB query()
     * @method static _IH_FormTranslation_QB with(array|string $relations)
     * @method _IH_FormTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormTranslation_C|FormTranslation[] all()
     * @ownLinks form_id,\App\Models\Form,id
     * @mixin _IH_FormTranslation_QB
     */
    class FormTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $forum_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_ForumTranslation_QB onWriteConnection()
     * @method _IH_ForumTranslation_QB newQuery()
     * @method static _IH_ForumTranslation_QB on(null|string $connection = null)
     * @method static _IH_ForumTranslation_QB query()
     * @method static _IH_ForumTranslation_QB with(array|string $relations)
     * @method _IH_ForumTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTranslation_C|ForumTranslation[] all()
     * @ownLinks forum_id,\App\Models\Forum,id
     * @mixin _IH_ForumTranslation_QB
     */
    class ForumTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $home_page_statistic_id
     * @property string $locale
     * @property string $title
     * @property string $description
     * @method static _IH_HomePageStatisticTranslation_QB onWriteConnection()
     * @method _IH_HomePageStatisticTranslation_QB newQuery()
     * @method static _IH_HomePageStatisticTranslation_QB on(null|string $connection = null)
     * @method static _IH_HomePageStatisticTranslation_QB query()
     * @method static _IH_HomePageStatisticTranslation_QB with(array|string $relations)
     * @method _IH_HomePageStatisticTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_HomePageStatisticTranslation_C|HomePageStatisticTranslation[] all()
     * @ownLinks home_page_statistic_id,\App\Models\HomePageStatistic,id
     * @mixin _IH_HomePageStatisticTranslation_QB
     */
    class HomePageStatisticTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_step_id
     * @property string $locale
     * @property string $title
     * @method static _IH_InstallmentStepTranslation_QB onWriteConnection()
     * @method _IH_InstallmentStepTranslation_QB newQuery()
     * @method static _IH_InstallmentStepTranslation_QB on(null|string $connection = null)
     * @method static _IH_InstallmentStepTranslation_QB query()
     * @method static _IH_InstallmentStepTranslation_QB with(array|string $relations)
     * @method _IH_InstallmentStepTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentStepTranslation_C|InstallmentStepTranslation[] all()
     * @ownLinks installment_step_id,\App\Models\InstallmentStep,id
     * @mixin _IH_InstallmentStepTranslation_QB
     */
    class InstallmentStepTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_id
     * @property string $locale
     * @property string $title
     * @property string $main_title
     * @property string $description
     * @property string|null $banner
     * @property string|null $options
     * @property string|null $verification_description
     * @property string|null $verification_banner
     * @property string|null $verification_video
     * @method static _IH_InstallmentTranslation_QB onWriteConnection()
     * @method _IH_InstallmentTranslation_QB newQuery()
     * @method static _IH_InstallmentTranslation_QB on(null|string $connection = null)
     * @method static _IH_InstallmentTranslation_QB query()
     * @method static _IH_InstallmentTranslation_QB with(array|string $relations)
     * @method _IH_InstallmentTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentTranslation_C|InstallmentTranslation[] all()
     * @ownLinks installment_id,\App\Models\Installment,id
     * @mixin _IH_InstallmentTranslation_QB
     */
    class InstallmentTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $navbar_button_id
     * @property string $locale
     * @property string $title
     * @property string $url
     * @method static _IH_NavbarButtonTranslation_QB onWriteConnection()
     * @method _IH_NavbarButtonTranslation_QB newQuery()
     * @method static _IH_NavbarButtonTranslation_QB on(null|string $connection = null)
     * @method static _IH_NavbarButtonTranslation_QB query()
     * @method static _IH_NavbarButtonTranslation_QB with(array|string $relations)
     * @method _IH_NavbarButtonTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NavbarButtonTranslation_C|NavbarButtonTranslation[] all()
     * @ownLinks navbar_button_id,\App\Models\NavbarButton,id
     * @mixin _IH_NavbarButtonTranslation_QB
     */
    class NavbarButtonTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $offline_bank_specification_id
     * @property string $locale
     * @property string $name
     * @method static _IH_OfflineBankSpecificationTranslation_QB onWriteConnection()
     * @method _IH_OfflineBankSpecificationTranslation_QB newQuery()
     * @method static _IH_OfflineBankSpecificationTranslation_QB on(null|string $connection = null)
     * @method static _IH_OfflineBankSpecificationTranslation_QB query()
     * @method static _IH_OfflineBankSpecificationTranslation_QB with(array|string $relations)
     * @method _IH_OfflineBankSpecificationTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OfflineBankSpecificationTranslation_C|OfflineBankSpecificationTranslation[] all()
     * @ownLinks offline_bank_specification_id,\App\Models\OfflineBankSpecification,id
     * @mixin _IH_OfflineBankSpecificationTranslation_QB
     */
    class OfflineBankSpecificationTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $offline_bank_id
     * @property string $locale
     * @property string $title
     * @method static _IH_OfflineBankTranslation_QB onWriteConnection()
     * @method _IH_OfflineBankTranslation_QB newQuery()
     * @method static _IH_OfflineBankTranslation_QB on(null|string $connection = null)
     * @method static _IH_OfflineBankTranslation_QB query()
     * @method static _IH_OfflineBankTranslation_QB with(array|string $relations)
     * @method _IH_OfflineBankTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OfflineBankTranslation_C|OfflineBankTranslation[] all()
     * @ownLinks offline_bank_id,\App\Models\OfflineBank,id
     * @mixin _IH_OfflineBankTranslation_QB
     */
    class OfflineBankTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $page_id
     * @property string $locale
     * @property string $title
     * @property string|null $seo_description
     * @property string $content
     * @method static _IH_PageTranslation_QB onWriteConnection()
     * @method _IH_PageTranslation_QB newQuery()
     * @method static _IH_PageTranslation_QB on(null|string $connection = null)
     * @method static _IH_PageTranslation_QB query()
     * @method static _IH_PageTranslation_QB with(array|string $relations)
     * @method _IH_PageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PageTranslation_C|PageTranslation[] all()
     * @ownLinks page_id,\App\Models\Page,id
     * @mixin _IH_PageTranslation_QB
     */
    class PageTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_badge_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductBadgeTranslation_QB onWriteConnection()
     * @method _IH_ProductBadgeTranslation_QB newQuery()
     * @method static _IH_ProductBadgeTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductBadgeTranslation_QB query()
     * @method static _IH_ProductBadgeTranslation_QB with(array|string $relations)
     * @method _IH_ProductBadgeTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductBadgeTranslation_C|ProductBadgeTranslation[] all()
     * @ownLinks product_badge_id,\App\Models\Api\ProductBadge,id
     * @mixin _IH_ProductBadgeTranslation_QB
     */
    class ProductBadgeTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_category_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductCategoryTranslation_QB onWriteConnection()
     * @method _IH_ProductCategoryTranslation_QB newQuery()
     * @method static _IH_ProductCategoryTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductCategoryTranslation_QB query()
     * @method static _IH_ProductCategoryTranslation_QB with(array|string $relations)
     * @method _IH_ProductCategoryTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCategoryTranslation_C|ProductCategoryTranslation[] all()
     * @ownLinks product_category_id,\App\Models\ProductCategory,id
     * @mixin _IH_ProductCategoryTranslation_QB
     */
    class ProductCategoryTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_faq_id
     * @property string $locale
     * @property string $title
     * @property string $answer
     * @method static _IH_ProductFaqTranslation_QB onWriteConnection()
     * @method _IH_ProductFaqTranslation_QB newQuery()
     * @method static _IH_ProductFaqTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductFaqTranslation_QB query()
     * @method static _IH_ProductFaqTranslation_QB with(array|string $relations)
     * @method _IH_ProductFaqTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFaqTranslation_C|ProductFaqTranslation[] all()
     * @ownLinks product_faq_id,\App\Models\ProductFaq,id
     * @mixin _IH_ProductFaqTranslation_QB
     */
    class ProductFaqTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_file_id
     * @property string $locale
     * @property string $title
     * @property string $description
     * @method static _IH_ProductFileTranslation_QB onWriteConnection()
     * @method _IH_ProductFileTranslation_QB newQuery()
     * @method static _IH_ProductFileTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductFileTranslation_QB query()
     * @method static _IH_ProductFileTranslation_QB with(array|string $relations)
     * @method _IH_ProductFileTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFileTranslation_C|ProductFileTranslation[] all()
     * @ownLinks product_file_id,\App\Models\ProductFile,id
     * @mixin _IH_ProductFileTranslation_QB
     */
    class ProductFileTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_filter_option_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductFilterOptionTranslation_QB onWriteConnection()
     * @method _IH_ProductFilterOptionTranslation_QB newQuery()
     * @method static _IH_ProductFilterOptionTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductFilterOptionTranslation_QB query()
     * @method static _IH_ProductFilterOptionTranslation_QB with(array|string $relations)
     * @method _IH_ProductFilterOptionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFilterOptionTranslation_C|ProductFilterOptionTranslation[] all()
     * @ownLinks product_filter_option_id,\App\Models\ProductFilterOption,id
     * @mixin _IH_ProductFilterOptionTranslation_QB
     */
    class ProductFilterOptionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_filter_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductFilterTranslation_QB onWriteConnection()
     * @method _IH_ProductFilterTranslation_QB newQuery()
     * @method static _IH_ProductFilterTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductFilterTranslation_QB query()
     * @method static _IH_ProductFilterTranslation_QB with(array|string $relations)
     * @method _IH_ProductFilterTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFilterTranslation_C|ProductFilterTranslation[] all()
     * @ownLinks product_filter_id,\App\Models\ProductFilter,id
     * @mixin _IH_ProductFilterTranslation_QB
     */
    class ProductFilterTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_selected_specification_id
     * @property string $locale
     * @property string $value
     * @method static _IH_ProductSelectedSpecificationTranslation_QB onWriteConnection()
     * @method _IH_ProductSelectedSpecificationTranslation_QB newQuery()
     * @method static _IH_ProductSelectedSpecificationTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductSelectedSpecificationTranslation_QB query()
     * @method static _IH_ProductSelectedSpecificationTranslation_QB with(array|string $relations)
     * @method _IH_ProductSelectedSpecificationTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSelectedSpecificationTranslation_C|ProductSelectedSpecificationTranslation[] all()
     * @ownLinks product_selected_specification_id,\App\Models\ProductSelectedSpecification,id
     * @mixin _IH_ProductSelectedSpecificationTranslation_QB
     */
    class ProductSelectedSpecificationTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_specification_multi_value_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductSpecificationMultiValueTranslation_QB onWriteConnection()
     * @method _IH_ProductSpecificationMultiValueTranslation_QB newQuery()
     * @method static _IH_ProductSpecificationMultiValueTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductSpecificationMultiValueTranslation_QB query()
     * @method static _IH_ProductSpecificationMultiValueTranslation_QB with(array|string $relations)
     * @method _IH_ProductSpecificationMultiValueTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSpecificationMultiValueTranslation_C|ProductSpecificationMultiValueTranslation[] all()
     * @ownLinks product_specification_multi_value_id,\App\Models\ProductSpecificationMultiValue,id
     * @mixin _IH_ProductSpecificationMultiValueTranslation_QB
     */
    class ProductSpecificationMultiValueTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_specification_id
     * @property string $locale
     * @property string $title
     * @method static _IH_ProductSpecificationTranslation_QB onWriteConnection()
     * @method _IH_ProductSpecificationTranslation_QB newQuery()
     * @method static _IH_ProductSpecificationTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductSpecificationTranslation_QB query()
     * @method static _IH_ProductSpecificationTranslation_QB with(array|string $relations)
     * @method _IH_ProductSpecificationTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSpecificationTranslation_C|ProductSpecificationTranslation[] all()
     * @ownLinks product_specification_id,\App\Models\ProductSpecification,id
     * @mixin _IH_ProductSpecificationTranslation_QB
     */
    class ProductSpecificationTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property string $locale
     * @property string $title
     * @property string|null $seo_description
     * @property string|null $summary
     * @property string|null $description
     * @method static _IH_ProductTranslation_QB onWriteConnection()
     * @method _IH_ProductTranslation_QB newQuery()
     * @method static _IH_ProductTranslation_QB on(null|string $connection = null)
     * @method static _IH_ProductTranslation_QB query()
     * @method static _IH_ProductTranslation_QB with(array|string $relations)
     * @method _IH_ProductTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductTranslation_C|ProductTranslation[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @mixin _IH_ProductTranslation_QB
     */
    class ProductTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $promotion_id
     * @property string $locale
     * @property string $title
     * @property string $description
     * @method static _IH_PromotionTranslation_QB onWriteConnection()
     * @method _IH_PromotionTranslation_QB newQuery()
     * @method static _IH_PromotionTranslation_QB on(null|string $connection = null)
     * @method static _IH_PromotionTranslation_QB query()
     * @method static _IH_PromotionTranslation_QB with(array|string $relations)
     * @method _IH_PromotionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PromotionTranslation_C|PromotionTranslation[] all()
     * @ownLinks promotion_id,\App\Models\Promotion,id
     * @mixin _IH_PromotionTranslation_QB
     */
    class PromotionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $purchase_notification_id
     * @property string $locale
     * @property string $title
     * @property string $popup_title
     * @property string $popup_subtitle
     * @property string $users
     * @property string $times
     * @method static _IH_PurchaseNotificationTranslation_QB onWriteConnection()
     * @method _IH_PurchaseNotificationTranslation_QB newQuery()
     * @method static _IH_PurchaseNotificationTranslation_QB on(null|string $connection = null)
     * @method static _IH_PurchaseNotificationTranslation_QB query()
     * @method static _IH_PurchaseNotificationTranslation_QB with(array|string $relations)
     * @method _IH_PurchaseNotificationTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PurchaseNotificationTranslation_C|PurchaseNotificationTranslation[] all()
     * @ownLinks purchase_notification_id,\App\Models\PurchaseNotification,id
     * @mixin _IH_PurchaseNotificationTranslation_QB
     */
    class PurchaseNotificationTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_QuizTranslation_QB onWriteConnection()
     * @method _IH_QuizTranslation_QB newQuery()
     * @method static _IH_QuizTranslation_QB on(null|string $connection = null)
     * @method static _IH_QuizTranslation_QB query()
     * @method static _IH_QuizTranslation_QB with(array|string $relations)
     * @method _IH_QuizTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizTranslation_C|QuizTranslation[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id
     * @mixin _IH_QuizTranslation_QB
     */
    class QuizTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $quizzes_question_id
     * @property string $locale
     * @property string $title
     * @property string|null $correct
     * @method static _IH_QuizzesQuestionTranslation_QB onWriteConnection()
     * @method _IH_QuizzesQuestionTranslation_QB newQuery()
     * @method static _IH_QuizzesQuestionTranslation_QB on(null|string $connection = null)
     * @method static _IH_QuizzesQuestionTranslation_QB query()
     * @method static _IH_QuizzesQuestionTranslation_QB with(array|string $relations)
     * @method _IH_QuizzesQuestionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizzesQuestionTranslation_C|QuizzesQuestionTranslation[] all()
     * @ownLinks quizzes_question_id,\App\Models\Api\QuizzesQuestion,id
     * @mixin _IH_QuizzesQuestionTranslation_QB
     */
    class QuizzesQuestionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $quizzes_questions_answer_id
     * @property string $locale
     * @property string|null $title
     * @method static _IH_QuizzesQuestionsAnswerTranslation_QB onWriteConnection()
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB newQuery()
     * @method static _IH_QuizzesQuestionsAnswerTranslation_QB on(null|string $connection = null)
     * @method static _IH_QuizzesQuestionsAnswerTranslation_QB query()
     * @method static _IH_QuizzesQuestionsAnswerTranslation_QB with(array|string $relations)
     * @method _IH_QuizzesQuestionsAnswerTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizzesQuestionsAnswerTranslation_C|QuizzesQuestionsAnswerTranslation[] all()
     * @ownLinks quizzes_questions_answer_id,\App\Models\Api\QuizzesQuestionsAnswer,id
     * @mixin _IH_QuizzesQuestionsAnswerTranslation_QB
     */
    class QuizzesQuestionsAnswerTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $registration_package_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_RegistrationPackageTranslation_QB onWriteConnection()
     * @method _IH_RegistrationPackageTranslation_QB newQuery()
     * @method static _IH_RegistrationPackageTranslation_QB on(null|string $connection = null)
     * @method static _IH_RegistrationPackageTranslation_QB query()
     * @method static _IH_RegistrationPackageTranslation_QB with(array|string $relations)
     * @method _IH_RegistrationPackageTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RegistrationPackageTranslation_C|RegistrationPackageTranslation[] all()
     * @ownLinks registration_package_id,\App\Models\Api\RegistrationPackage,id
     * @mixin _IH_RegistrationPackageTranslation_QB
     */
    class RegistrationPackageTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $session_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_SessionTranslation_QB onWriteConnection()
     * @method _IH_SessionTranslation_QB newQuery()
     * @method static _IH_SessionTranslation_QB on(null|string $connection = null)
     * @method static _IH_SessionTranslation_QB query()
     * @method static _IH_SessionTranslation_QB with(array|string $relations)
     * @method _IH_SessionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SessionTranslation_C|SessionTranslation[] all()
     * @ownLinks session_id,\App\Models\Api\Session,id
     * @mixin _IH_SessionTranslation_QB
     */
    class SessionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $setting_id
     * @property string $locale
     * @property string $value
     * @method static _IH_SettingTranslation_QB onWriteConnection()
     * @method _IH_SettingTranslation_QB newQuery()
     * @method static _IH_SettingTranslation_QB on(null|string $connection = null)
     * @method static _IH_SettingTranslation_QB query()
     * @method static _IH_SettingTranslation_QB with(array|string $relations)
     * @method _IH_SettingTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SettingTranslation_C|SettingTranslation[] all()
     * @ownLinks setting_id,\App\Models\Api\Setting,id
     * @mixin _IH_SettingTranslation_QB
     */
    class SettingTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $subscribe_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_SubscribeTranslation_QB onWriteConnection()
     * @method _IH_SubscribeTranslation_QB newQuery()
     * @method static _IH_SubscribeTranslation_QB on(null|string $connection = null)
     * @method static _IH_SubscribeTranslation_QB query()
     * @method static _IH_SubscribeTranslation_QB with(array|string $relations)
     * @method _IH_SubscribeTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubscribeTranslation_C|SubscribeTranslation[] all()
     * @ownLinks subscribe_id,\App\Models\Api\Subscribe,id
     * @mixin _IH_SubscribeTranslation_QB
     */
    class SubscribeTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $support_department_id
     * @property string $locale
     * @property string $title
     * @method static _IH_SupportDepartmentTranslation_QB onWriteConnection()
     * @method _IH_SupportDepartmentTranslation_QB newQuery()
     * @method static _IH_SupportDepartmentTranslation_QB on(null|string $connection = null)
     * @method static _IH_SupportDepartmentTranslation_QB query()
     * @method static _IH_SupportDepartmentTranslation_QB with(array|string $relations)
     * @method _IH_SupportDepartmentTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportDepartmentTranslation_C|SupportDepartmentTranslation[] all()
     * @ownLinks support_department_id,\App\Models\Api\SupportDepartment,id
     * @mixin _IH_SupportDepartmentTranslation_QB
     */
    class SupportDepartmentTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $testimonial_id
     * @property string $locale
     * @property string $user_name
     * @property string $user_bio
     * @property string $comment
     * @method static _IH_TestimonialTranslation_QB onWriteConnection()
     * @method _IH_TestimonialTranslation_QB newQuery()
     * @method static _IH_TestimonialTranslation_QB on(null|string $connection = null)
     * @method static _IH_TestimonialTranslation_QB query()
     * @method static _IH_TestimonialTranslation_QB with(array|string $relations)
     * @method _IH_TestimonialTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TestimonialTranslation_C|TestimonialTranslation[] all()
     * @ownLinks testimonial_id,\App\Models\Testimonial,id
     * @mixin _IH_TestimonialTranslation_QB
     */
    class TestimonialTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $text_lesson_id
     * @property string $locale
     * @property string $title
     * @property string $summary
     * @property string $content
     * @method static _IH_TextLessonTranslation_QB onWriteConnection()
     * @method _IH_TextLessonTranslation_QB newQuery()
     * @method static _IH_TextLessonTranslation_QB on(null|string $connection = null)
     * @method static _IH_TextLessonTranslation_QB query()
     * @method static _IH_TextLessonTranslation_QB with(array|string $relations)
     * @method _IH_TextLessonTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TextLessonTranslation_C|TextLessonTranslation[] all()
     * @ownLinks text_lesson_id,\App\Models\Api\TextLesson,id
     * @mixin _IH_TextLessonTranslation_QB
     */
    class TextLessonTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $ticket_id
     * @property string $locale
     * @property string $title
     * @method static _IH_TicketTranslation_QB onWriteConnection()
     * @method _IH_TicketTranslation_QB newQuery()
     * @method static _IH_TicketTranslation_QB on(null|string $connection = null)
     * @method static _IH_TicketTranslation_QB query()
     * @method static _IH_TicketTranslation_QB with(array|string $relations)
     * @method _IH_TicketTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TicketTranslation_C|TicketTranslation[] all()
     * @ownLinks ticket_id,\App\Models\Api\Ticket,id
     * @mixin _IH_TicketTranslation_QB
     */
    class TicketTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $upcoming_course_id
     * @property string $locale
     * @property string $title
     * @property string|null $seo_description
     * @property string|null $description
     * @method static _IH_UpcomingCourseTranslation_QB onWriteConnection()
     * @method _IH_UpcomingCourseTranslation_QB newQuery()
     * @method static _IH_UpcomingCourseTranslation_QB on(null|string $connection = null)
     * @method static _IH_UpcomingCourseTranslation_QB query()
     * @method static _IH_UpcomingCourseTranslation_QB with(array|string $relations)
     * @method _IH_UpcomingCourseTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UpcomingCourseTranslation_C|UpcomingCourseTranslation[] all()
     * @ownLinks upcoming_course_id,\App\Models\UpcomingCourse,id
     * @mixin _IH_UpcomingCourseTranslation_QB
     */
    class UpcomingCourseTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $user_bank_specification_id
     * @property string $locale
     * @property string $name
     * @method static _IH_UserBankSpecificationTranslation_QB onWriteConnection()
     * @method _IH_UserBankSpecificationTranslation_QB newQuery()
     * @method static _IH_UserBankSpecificationTranslation_QB on(null|string $connection = null)
     * @method static _IH_UserBankSpecificationTranslation_QB query()
     * @method static _IH_UserBankSpecificationTranslation_QB with(array|string $relations)
     * @method _IH_UserBankSpecificationTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserBankSpecificationTranslation_C|UserBankSpecificationTranslation[] all()
     * @ownLinks user_bank_specification_id,\App\Models\UserBankSpecification,id
     * @mixin _IH_UserBankSpecificationTranslation_QB
     */
    class UserBankSpecificationTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $user_bank_id
     * @property string $locale
     * @property string $title
     * @method static _IH_UserBankTranslation_QB onWriteConnection()
     * @method _IH_UserBankTranslation_QB newQuery()
     * @method static _IH_UserBankTranslation_QB on(null|string $connection = null)
     * @method static _IH_UserBankTranslation_QB query()
     * @method static _IH_UserBankTranslation_QB with(array|string $relations)
     * @method _IH_UserBankTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserBankTranslation_C|UserBankTranslation[] all()
     * @ownLinks user_bank_id,\App\Models\UserBank,id
     * @mixin _IH_UserBankTranslation_QB
     */
    class UserBankTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $user_profile_attachment_id
     * @property string $locale
     * @property string $title
     * @property string|null $description
     * @method static _IH_UserProfileAttachmentTranslation_QB onWriteConnection()
     * @method _IH_UserProfileAttachmentTranslation_QB newQuery()
     * @method static _IH_UserProfileAttachmentTranslation_QB on(null|string $connection = null)
     * @method static _IH_UserProfileAttachmentTranslation_QB query()
     * @method static _IH_UserProfileAttachmentTranslation_QB with(array|string $relations)
     * @method _IH_UserProfileAttachmentTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserProfileAttachmentTranslation_C|UserProfileAttachmentTranslation[] all()
     * @ownLinks user_profile_attachment_id,\App\Models\UserProfileAttachment,id
     * @mixin _IH_UserProfileAttachmentTranslation_QB
     */
    class UserProfileAttachmentTranslation extends Model {}
    
    /**
     * @property int $id
     * @property string $locale
     * @property int $webinar_assignment_id
     * @property string $title
     * @property string $description
     * @method static _IH_WebinarAssignmentTranslation_QB onWriteConnection()
     * @method _IH_WebinarAssignmentTranslation_QB newQuery()
     * @method static _IH_WebinarAssignmentTranslation_QB on(null|string $connection = null)
     * @method static _IH_WebinarAssignmentTranslation_QB query()
     * @method static _IH_WebinarAssignmentTranslation_QB with(array|string $relations)
     * @method _IH_WebinarAssignmentTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarAssignmentTranslation_C|WebinarAssignmentTranslation[] all()
     * @ownLinks webinar_assignment_id,\App\Models\Api\WebinarAssignment,id
     * @mixin _IH_WebinarAssignmentTranslation_QB
     */
    class WebinarAssignmentTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_chapter_id
     * @property string $locale
     * @property string $title
     * @method static _IH_WebinarChapterTranslation_QB onWriteConnection()
     * @method _IH_WebinarChapterTranslation_QB newQuery()
     * @method static _IH_WebinarChapterTranslation_QB on(null|string $connection = null)
     * @method static _IH_WebinarChapterTranslation_QB query()
     * @method static _IH_WebinarChapterTranslation_QB with(array|string $relations)
     * @method _IH_WebinarChapterTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarChapterTranslation_C|WebinarChapterTranslation[] all()
     * @ownLinks webinar_chapter_id,\App\Models\Api\WebinarChapter,id
     * @mixin _IH_WebinarChapterTranslation_QB
     */
    class WebinarChapterTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_extra_description_id
     * @property string $locale
     * @property string $value
     * @method static _IH_WebinarExtraDescriptionTranslation_QB onWriteConnection()
     * @method _IH_WebinarExtraDescriptionTranslation_QB newQuery()
     * @method static _IH_WebinarExtraDescriptionTranslation_QB on(null|string $connection = null)
     * @method static _IH_WebinarExtraDescriptionTranslation_QB query()
     * @method static _IH_WebinarExtraDescriptionTranslation_QB with(array|string $relations)
     * @method _IH_WebinarExtraDescriptionTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarExtraDescriptionTranslation_C|WebinarExtraDescriptionTranslation[] all()
     * @ownLinks webinar_extra_description_id,\App\Models\WebinarExtraDescription,id
     * @mixin _IH_WebinarExtraDescriptionTranslation_QB
     */
    class WebinarExtraDescriptionTranslation extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property string $locale
     * @property string $title
     * @property string|null $seo_description
     * @property string|null $description
     * @method static _IH_WebinarTranslation_QB onWriteConnection()
     * @method _IH_WebinarTranslation_QB newQuery()
     * @method static _IH_WebinarTranslation_QB on(null|string $connection = null)
     * @method static _IH_WebinarTranslation_QB query()
     * @method static _IH_WebinarTranslation_QB with(array|string $relations)
     * @method _IH_WebinarTranslation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarTranslation_C|WebinarTranslation[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_WebinarTranslation_QB
     */
    class WebinarTranslation extends Model {}
}