<?php //7fdf0b6ff7bdffd7e7fb726608732e91
/** @noinspection all */

namespace App\Models\Api {

    use App\Models\AgoraHistory;
    use App\Models\Blog as ModelsBlog;
    use App\Models\BlogCategory as ModelsBlogCategory;
    use App\Models\Bundle;
    use App\Models\Category as ModelsCategory;
    use App\Models\Certificate as ModelsCertificate;
    use App\Models\Comment as ModelsComment;
    use App\Models\ContentDeleteRequest;
    use App\Models\CourseForum as ModelsCourseForum;
    use App\Models\CourseForumAnswer as ModelsCourseForumAnswer;
    use App\Models\CourseLearning;
    use App\Models\CourseNoticeboard;
    use App\Models\CoursePersonalNote;
    use App\Models\Faq as ModelsFaq;
    use App\Models\FeatureWebinar as ModelsFeatureWebinar;
    use App\Models\File as ModelsFile;
    use App\Models\Filter;
    use App\Models\Gift;
    use App\Models\Group;
    use App\Models\InstallmentOrderPayment;
    use App\Models\Meeting as ModelsMeeting;
    use App\Models\MeetingTime as ModelsMeetingTime;
    use App\Models\Order;
    use App\Models\OrderItem;
    use App\Models\Prerequisite as ModelsPrerequisite;
    use App\Models\Product as ModelsProduct;
    use App\Models\ProductBadgeContent as ModelsProductBadgeContent;
    use App\Models\ProductCategory;
    use App\Models\ProductDiscount;
    use App\Models\ProductFaq;
    use App\Models\ProductFile;
    use App\Models\ProductMedia;
    use App\Models\ProductOrder as ModelsProductOrder;
    use App\Models\ProductReview;
    use App\Models\ProductSelectedFilterOption;
    use App\Models\ProductSelectedSpecification;
    use App\Models\Promotion;
    use App\Models\Purchase;
    use App\Models\Quiz as ModelsQuiz;
    use App\Models\QuizzesQuestion as ModelsQuizzesQuestion;
    use App\Models\QuizzesQuestionsAnswer as ModelsQuizzesQuestionsAnswer;
    use App\Models\QuizzesResult as ModelsQuizzesResult;
    use App\Models\RegistrationPackage as ModelsRegistrationPackage;
    use App\Models\RelatedCourse;
    use App\Models\ReserveMeeting as ModelsReserveMeeting;
    use App\Models\Sale as ModelsSale;
    use App\Models\SaleLog;
    use App\Models\Session as ModelsSession;
    use App\Models\SessionRemind;
    use App\Models\Subscribe as ModelsSubscribe;
    use App\Models\SubscribeUse;
    use App\Models\Support as ModelsSupport;
    use App\Models\SupportConversation as ModelsSupportConversation;
    use App\Models\SupportDepartment as ModelsSupportDepartment;
    use App\Models\Tag;
    use App\Models\TextLesson as ModelsTextLesson;
    use App\Models\TextLessonAttachment as ModelsTextLessonAttachment;
    use App\Models\Ticket as ModelsTicket;
    use App\Models\UpcomingCourse;
    use App\Models\UserOccupation;
    use App\Models\UserSelectedBank;
    use App\Models\Waitlist;
    use App\Models\Webinar as ModelsWebinar;
    use App\Models\WebinarAssignment as ModelsWebinarAssignment;
    use App\Models\WebinarAssignmentAttachment as ModelsWebinarAssignmentAttachment;
    use App\Models\WebinarAssignmentHistory as ModelsWebinarAssignmentHistory;
    use App\Models\WebinarAssignmentHistoryMessage as ModelsWebinarAssignmentHistoryMessage;
    use App\Models\WebinarChapter as ModelsWebinarChapter;
    use App\Models\WebinarChapterItem as ModelsWebinarChapterItem;
    use App\Models\WebinarExtraDescription;
    use App\Models\WebinarFilterOption;
    use App\Models\WebinarPartnerTeacher;
    use App\Models\WebinarReview as ModelsWebinarReview;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Support\Carbon;
    use LaravelIdea\Helper\App\Models\Api\_IH_Accounting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Accounting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_BlogCategory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_BlogCategory_QB as Api_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_BundleWebinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_BundleWebinar_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Bundle_QB as Api_IH_Bundle_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Category_QB as Api_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Comment_C as Api_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Comment_QB as Api_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForumAnswer_C as Api_IH_CourseForumAnswer_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForumAnswer_QB as Api_IH_CourseForumAnswer_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForum_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_CourseForum_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Faq_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Faq_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Favorite_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Favorite_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_FeatureWebinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_FeatureWebinar_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_File_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_File_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Follow_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Follow_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_GroupUser_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_GroupUser_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_MeetingTime_C as Api_IH_MeetingTime_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_MeetingTime_QB as Api_IH_MeetingTime_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Meeting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Payout_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Payout_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Prerequisite_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Prerequisite_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadgeContent_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadgeContent_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadge_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductBadge_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductOrder_C as Api_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ProductOrder_QB as Api_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Product_QB as Api_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestionsAnswer_C as Api_IH_QuizzesQuestionsAnswer_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestionsAnswer_QB as Api_IH_QuizzesQuestionsAnswer_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestion_C as Api_IH_QuizzesQuestion_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesQuestion_QB as Api_IH_QuizzesQuestion_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesResult_C as Api_IH_QuizzesResult_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_QuizzesResult_QB as Api_IH_QuizzesResult_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Quiz_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Quiz_QB as Api_IH_Quiz_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_RegistrationPackage_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_RegistrationPackage_QB as Api_IH_RegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_ReserveMeeting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_ReserveMeeting_QB as Api_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_RewardAccounting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_RewardAccounting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Sale_C as Api_IH_Sale_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Sale_QB as Api_IH_Sale_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Session_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Session_QB as Api_IH_Session_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Setting_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Setting_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Subscribe_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Subscribe_QB as Api_IH_Subscribe_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportConversation_C as Api_IH_SupportConversation_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportConversation_QB as Api_IH_SupportConversation_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportDepartment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_SupportDepartment_QB as Api_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Support_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLessonAttachment_C as Api_IH_TextLessonAttachment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLessonAttachment_QB as Api_IH_TextLessonAttachment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLesson_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TextLesson_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Ticket_QB as Api_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_TrendCategory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_TrendCategory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_UserFirebaseSessions_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_UserFirebaseSessions_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentAttachment_C as Api_IH_WebinarAssignmentAttachment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentAttachment_QB as Api_IH_WebinarAssignmentAttachment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistoryMessage_C as Api_IH_WebinarAssignmentHistoryMessage_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistoryMessage_QB as Api_IH_WebinarAssignmentHistoryMessage_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistory_C as Api_IH_WebinarAssignmentHistory_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignmentHistory_QB as Api_IH_WebinarAssignmentHistory_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignment_C as Api_IH_WebinarAssignment_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarAssignment_QB as Api_IH_WebinarAssignment_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapterItem_C as Api_IH_WebinarChapterItem_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapterItem_QB as Api_IH_WebinarChapterItem_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapter_C as Api_IH_WebinarChapter_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarChapter_QB as Api_IH_WebinarChapter_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReport_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReport_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReview_C as Api_IH_WebinarReview_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_WebinarReview_QB as Api_IH_WebinarReview_QB;
    use LaravelIdea\Helper\App\Models\Api\_IH_Webinar_C as Api_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\Api\_IH_Webinar_QB as Api_IH_Webinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_AgoraHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB as Models_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Bundle_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_C as Models_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_QB as Models_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\_IH_ContentDeleteRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_C as Models_IH_CourseForum_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_QB as Models_IH_CourseForum_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearning_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_QB;
    use LaravelIdea\Helper\App\Models\_IH_CoursePersonalNote_QB;
    use LaravelIdea\Helper\App\Models\_IH_Faq_C as Models_IH_Faq_C;
    use LaravelIdea\Helper\App\Models\_IH_Faq_QB as Models_IH_Faq_QB;
    use LaravelIdea\Helper\App\Models\_IH_FeatureWebinar_QB as Models_IH_FeatureWebinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_File_C as Models_IH_File_C;
    use LaravelIdea\Helper\App\Models\_IH_File_QB as Models_IH_File_QB;
    use LaravelIdea\Helper\App\Models\_IH_Filter_C;
    use LaravelIdea\Helper\App\Models\_IH_Filter_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gift_QB;
    use LaravelIdea\Helper\App\Models\_IH_Group_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderPayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_C;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_QB;
    use LaravelIdea\Helper\App\Models\_IH_Meeting_QB as Models_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_C as Models_IH_Prerequisite_C;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_QB as Models_IH_Prerequisite_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_C as Models_IH_ProductBadgeContent_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_QB as Models_IH_ProductBadgeContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Promotion_QB;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_C;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_QB;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_C as Models_IH_Quiz_C;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_QB;
    use LaravelIdea\Helper\App\Models\_IH_RegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_SaleLog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Sale_C;
    use LaravelIdea\Helper\App\Models\_IH_Sale_QB;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_C;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_QB;
    use LaravelIdea\Helper\App\Models\_IH_Session_C as Models_IH_Session_C;
    use LaravelIdea\Helper\App\Models\_IH_Session_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscribe_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Support_C as Models_IH_Support_C;
    use LaravelIdea\Helper\App\Models\_IH_Support_QB as Models_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_C as Models_IH_TextLesson_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_QB as Models_IH_TextLesson_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C as Models_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_C;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_Waitlist_C;
    use LaravelIdea\Helper\App\Models\_IH_Waitlist_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistoryMessage_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistoryMessage_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignmentHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignment_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarAssignment_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapterItem_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapterItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapter_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarChapter_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarExtraDescription_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarExtraDescription_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarPartnerTeacher_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarPartnerTeacher_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_QB;
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int|null $creator_id
     * @property int|null $webinar_id
     * @property int|null $meeting_id
     * @property bool $system
     * @property bool $tax
     * @property int $amount
     * @property string $type
     * @property string $type_account
     * @property string|null $description
     * @property int $created_at
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property string $store_type
     * @property int|null $referred_user_id
     * @property bool $is_affiliate_amount
     * @property bool $is_affiliate_commission
     * @property int|null $registration_package_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @property int|null $installment_payment_id
     * @property bool $is_registration_bonus
     * @property int|null $order_item_id
     * @property bool $is_cashback
     * @property int|null $gift_id
     * @property int|null $installment_order_id This field is filled in the seller's financial document to find the installment order
     * @property-read string $balance_type attribute
     * @property-read array $details attribute
     * @property-read string $item attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property ModelsMeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property OrderItem|null $orderItem
     * @method BelongsTo|_IH_OrderItem_QB orderItem()
     * @property ModelsProduct|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsRegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Accounting_QB onWriteConnection()
     * @method _IH_Accounting_QB newQuery()
     * @method static _IH_Accounting_QB on(null|string $connection = null)
     * @method static _IH_Accounting_QB query()
     * @method static _IH_Accounting_QB with(array|string $relations)
     * @method _IH_Accounting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Accounting_C|Accounting[] all()
     * @ownLinks installment_payment_id,\App\Models\InstallmentOrderPayment,id|webinar_id,\App\Models\Api\Webinar,id|meeting_id,\App\Models\Api\Meeting,id|subscribe_id,\App\Models\Api\Subscribe,id|promotion_id,\App\Models\Promotion,id|registration_package_id,\App\Models\Api\RegistrationPackage,id|product_id,\App\Models\Api\Product,id|order_item_id,\App\Models\OrderItem,id|gift_id,\App\Models\Gift,id|installment_order_id,\App\Models\InstallmentOrder,id
     * @mixin _IH_Accounting_QB
     */
    class Accounting extends Model {}
    
    /**
     * @property int $id
     * @property int|null $category_id
     * @property int $author_id
     * @property string $slug
     * @property string $image
     * @property int|null $visit_count
     * @property bool $enable_comment
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property-read array $brief attribute
     * @property-read $content attribute
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $meta_description attribute
     * @property-read $title attribute
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $badges
     * @property-read int $badges_count
     * @method HasMany|_IH_ProductBadgeContent_QB badges()
     * @property ModelsBlogCategory|null $category
     * @method BelongsTo|_IH_BlogCategory_QB category()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContent()
     * @method static _IH_Blog_QB onWriteConnection()
     * @method _IH_Blog_QB newQuery()
     * @method static _IH_Blog_QB on(null|string $connection = null)
     * @method static _IH_Blog_QB query()
     * @method static _IH_Blog_QB with(array|string $relations)
     * @method _IH_Blog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Blog_C|Blog[] all()
     * @ownLinks category_id,\App\Models\Api\BlogCategory,id
     * @foreignLinks id,\App\Models\Translation\BlogTranslation,blog_id
     * @mixin _IH_Blog_QB
     */
    class Blog extends Model {}
    
    /**
     * @property int $id
     * @property string $slug
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static Api_IH_BlogCategory_QB onWriteConnection()
     * @method Api_IH_BlogCategory_QB newQuery()
     * @method static Api_IH_BlogCategory_QB on(null|string $connection = null)
     * @method static Api_IH_BlogCategory_QB query()
     * @method static Api_IH_BlogCategory_QB with(array|string $relations)
     * @method Api_IH_BlogCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategory_C|BlogCategory[] all()
     * @foreignLinks id,\App\Models\Api\Blog,category_id|id,\App\Models\Translation\BlogCategoryTranslation,blog_category_id
     * @mixin Api_IH_BlogCategory_QB
     */
    class BlogCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $bundle_id
     * @property int $webinar_id
     * @property int|null $order
     * @property ApiBundle $bundle
     * @method BelongsTo|Api_IH_Bundle_QB bundle()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_BundleWebinar_QB onWriteConnection()
     * @method _IH_BundleWebinar_QB newQuery()
     * @method static _IH_BundleWebinar_QB on(null|string $connection = null)
     * @method static _IH_BundleWebinar_QB query()
     * @method static _IH_BundleWebinar_QB with(array|string $relations)
     * @method _IH_BundleWebinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BundleWebinar_C|BundleWebinar[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_BundleWebinar_QB
     */
    class BundleWebinar extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property int|null $ticket_id
     * @property int $created_at
     * @property int|null $reserve_meeting_id
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property int|null $special_offer_id
     * @property int|null $product_order_id
     * @property int|null $product_discount_id
     * @property int|null $bundle_id
     * @property int|null $installment_payment_id
     * @property int|null $gift_id
     * @property-read array $details attribute
     * @property-read null $discount attribute
     * @property-read $price attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentPayment()
     * @property ModelsProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsReserveMeeting|null $reserveMeeting
     * @method BelongsTo|_IH_ReserveMeeting_QB reserveMeeting()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property ModelsTicket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Cart_QB onWriteConnection()
     * @method _IH_Cart_QB newQuery()
     * @method static _IH_Cart_QB on(null|string $connection = null)
     * @method static _IH_Cart_QB query()
     * @method static _IH_Cart_QB with(array|string $relations)
     * @method _IH_Cart_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Cart_C|Cart[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|ticket_id,\App\Models\Api\Ticket,id|reserve_meeting_id,\App\Models\Api\ReserveMeeting,id|subscribe_id,\App\Models\Api\Subscribe,id|promotion_id,\App\Models\Promotion,id|special_offer_id,\App\Models\SpecialOffer,id|product_order_id,\App\Models\Api\ProductOrder,id|product_discount_id,\App\Models\ProductDiscount,id|installment_payment_id,\App\Models\InstallmentOrderPayment,id|gift_id,\App\Models\Gift,id
     * @mixin _IH_Cart_QB
     */
    class Cart extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property int|null $order
     * @property string|null $icon
     * @property string $slug
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property ModelsCategory|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method HasMany|_IH_Filter_QB filters()
     * @property _IH_UserOccupation_C|UserOccupation[] $userOccupations
     * @property-read int $user_occupations_count
     * @method HasMany|_IH_UserOccupation_QB userOccupations()
     * @property _IH_Webinar_C|ModelsWebinar[] $webinars
     * @property-read int $webinars_count
     * @method HasMany|_IH_Webinar_QB webinars()
     * @method static Api_IH_Category_QB onWriteConnection()
     * @method Api_IH_Category_QB newQuery()
     * @method static Api_IH_Category_QB on(null|string $connection = null)
     * @method static Api_IH_Category_QB query()
     * @method static Api_IH_Category_QB with(array|string $relations)
     * @method Api_IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @foreignLinks id,\App\Models\Filter,category_id|id,\App\Models\Api\Webinar,category_id|id,\App\Models\Api\TrendCategory,category_id|id,\App\Models\UserOccupation,category_id|id,\App\Models\Translation\CategoryTranslation,category_id|id,\App\Models\DiscountCategory,category_id|id,\App\Models\UpcomingCourse,category_id|id,\App\Models\InstallmentSpecificationItem,category_id|id,\App\Models\CashbackRuleSpecificationItem,category_id|id,\App\Models\AbandonedCartRuleSpecificationItem,category_id
     * @mixin Api_IH_Category_QB
     */
    class Category extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $quiz_result_id
     * @property int $student_id
     * @property int|null $user_grade
     * @property string|null $file
     * @property int $created_at
     * @property string $type
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property-read array $brief attribute
     * @property-read array $details attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsQuiz $quiz
     * @method HasOne|_IH_Quiz_QB quiz()
     * @property ModelsQuizzesResult $quizzesResult
     * @method HasOne|_IH_QuizzesResult_QB quizzesResult()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Certificate_QB onWriteConnection()
     * @method _IH_Certificate_QB newQuery()
     * @method static _IH_Certificate_QB on(null|string $connection = null)
     * @method static _IH_Certificate_QB query()
     * @method static _IH_Certificate_QB with(array|string $relations)
     * @method _IH_Certificate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Certificate_C|Certificate[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id|quiz_result_id,\App\Models\Api\QuizzesResult,id|webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_Certificate_QB
     */
    class Certificate extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $reply_id
     * @property string|null $comment
     * @property string $status
     * @property int $created_at
     * @property int $webinar_id
     * @property bool $report
     * @property bool $disabled
     * @property int|null $review_id
     * @property int|null $blog_id
     * @property int|null $viewed_at
     * @property int|null $product_id
     * @property int|null $product_review_id
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property-read string $comment_user_type attribute
     * @property-read array $details attribute
     * @property ModelsBlog|null $blog
     * @method BelongsTo|Models_IH_Blog_QB blog()
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property ModelsProduct|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ProductReview|null $productReview
     * @method BelongsTo|_IH_ProductReview_QB productReview()
     * @property _IH_Comment_C|ModelsComment[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_Comment_QB replies()
     * @property ModelsWebinarReview|null $review
     * @method BelongsTo|_IH_WebinarReview_QB review()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Comment_QB onWriteConnection()
     * @method Api_IH_Comment_QB newQuery()
     * @method static Api_IH_Comment_QB on(null|string $connection = null)
     * @method static Api_IH_Comment_QB query()
     * @method static Api_IH_Comment_QB with(array|string $relations)
     * @method Api_IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Comment_C|Comment[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|review_id,\App\Models\Api\WebinarReview,id|reply_id,\App\Models\Api\Comment,id|product_id,\App\Models\Api\Product,id|upcoming_course_id,\App\Models\UpcomingCourse,id|product_review_id,\App\Models\ProductReview,id
     * @foreignLinks id,\App\Models\Api\Comment,reply_id|id,\App\Models\CommentReport,comment_id
     * @mixin Api_IH_Comment_QB
     */
    class Comment extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $user_id
     * @property string $title
     * @property string $description
     * @property string|null $attach
     * @property bool $pin
     * @property int $created_at
     * @property _IH_CourseForumAnswer_C|ModelsCourseForumAnswer[] $answers
     * @property-read int $answers_count
     * @method HasMany|_IH_CourseForumAnswer_QB answers()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_CourseForum_QB onWriteConnection()
     * @method _IH_CourseForum_QB newQuery()
     * @method static _IH_CourseForum_QB on(null|string $connection = null)
     * @method static _IH_CourseForum_QB query()
     * @method static _IH_CourseForum_QB with(array|string $relations)
     * @method _IH_CourseForum_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseForum_C|CourseForum[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\CourseForumAnswer,forum_id
     * @mixin _IH_CourseForum_QB
     */
    class CourseForum extends Model {}
    
    /**
     * @property int $id
     * @property int $forum_id
     * @property int $user_id
     * @property string $description
     * @property bool $pin
     * @property bool $resolved
     * @property int $created_at
     * @property ModelsCourseForum $course_forum
     * @method BelongsTo|Models_IH_CourseForum_QB course_forum()
     * @method static Api_IH_CourseForumAnswer_QB onWriteConnection()
     * @method Api_IH_CourseForumAnswer_QB newQuery()
     * @method static Api_IH_CourseForumAnswer_QB on(null|string $connection = null)
     * @method static Api_IH_CourseForumAnswer_QB query()
     * @method static Api_IH_CourseForumAnswer_QB with(array|string $relations)
     * @method Api_IH_CourseForumAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_CourseForumAnswer_C|CourseForumAnswer[] all()
     * @ownLinks forum_id,\App\Models\Api\CourseForum,id
     * @mixin Api_IH_CourseForumAnswer_QB
     */
    class CourseForumAnswer extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property-read $answer attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static _IH_Faq_QB onWriteConnection()
     * @method _IH_Faq_QB newQuery()
     * @method static _IH_Faq_QB on(null|string $connection = null)
     * @method static _IH_Faq_QB query()
     * @method static _IH_Faq_QB with(array|string $relations)
     * @method _IH_Faq_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Faq_C|Faq[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @foreignLinks id,\App\Models\Translation\FaqTranslation,faq_id
     * @mixin _IH_Faq_QB
     */
    class Faq extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $created_at
     * @property int $webinar_id
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property UpcomingCourse|null $upcomingCourse
     * @method BelongsTo|_IH_UpcomingCourse_QB upcomingCourse()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Favorite_QB onWriteConnection()
     * @method _IH_Favorite_QB newQuery()
     * @method static _IH_Favorite_QB on(null|string $connection = null)
     * @method static _IH_Favorite_QB query()
     * @method static _IH_Favorite_QB with(array|string $relations)
     * @method _IH_Favorite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Favorite_C|Favorite[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @mixin _IH_Favorite_QB
     */
    class Favorite extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property string $page
     * @property string $status
     * @property int $updated_at
     * @property-read $description attribute
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_FeatureWebinar_QB onWriteConnection()
     * @method _IH_FeatureWebinar_QB newQuery()
     * @method static _IH_FeatureWebinar_QB on(null|string $connection = null)
     * @method static _IH_FeatureWebinar_QB query()
     * @method static _IH_FeatureWebinar_QB with(array|string $relations)
     * @method _IH_FeatureWebinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FeatureWebinar_C|FeatureWebinar[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Translation\FeatureWebinarTranslation,feature_webinar_id
     * @mixin _IH_FeatureWebinar_QB
     */
    class FeatureWebinar extends Model {}
    
    /**
     * @property int $id
     * @property string $accessibility
     * @property string $file
     * @property string $volume
     * @property string $file_type
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property bool $downloadable
     * @property int|null $order
     * @property string $storage
     * @property int|null $chapter_id
     * @property string $status
     * @property string|null $interactive_type
     * @property string|null $interactive_file_name
     * @property string|null $interactive_file_path
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property bool $online_viewer
     * @property string|null $secure_host_upload_type
     * @property-read bool|null $auth_has_access attribute
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_File_QB onWriteConnection()
     * @method _IH_File_QB newQuery()
     * @method static _IH_File_QB on(null|string $connection = null)
     * @method static _IH_File_QB query()
     * @method static _IH_File_QB with(array|string $relations)
     * @method _IH_File_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_File_C|File[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Api\TextLessonAttachment,file_id|id,\App\Models\CourseLearning,file_id|id,\App\Models\Translation\FileTranslation,file_id
     * @mixin _IH_File_QB
     */
    class File extends Model {}
    
    /**
     * @property int $id
     * @property int $follower
     * @property int $user_id
     * @property string $status
     * @method static _IH_Follow_QB onWriteConnection()
     * @method _IH_Follow_QB newQuery()
     * @method static _IH_Follow_QB on(null|string $connection = null)
     * @method static _IH_Follow_QB query()
     * @method static _IH_Follow_QB with(array|string $relations)
     * @method _IH_Follow_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Follow_C|Follow[] all()
     * @ownLinks 
     * @mixin _IH_Follow_QB
     */
    class Follow extends Model {}
    
    /**
     * @property int $id
     * @property int $group_id
     * @property int $user_id
     * @property int $created_at
     * @property-read array|null $brief attribute
     * @property Group $group
     * @method BelongsTo|_IH_Group_QB group()
     * @method static _IH_GroupUser_QB onWriteConnection()
     * @method _IH_GroupUser_QB newQuery()
     * @method static _IH_GroupUser_QB on(null|string $connection = null)
     * @method static _IH_GroupUser_QB query()
     * @method static _IH_GroupUser_QB with(array|string $relations)
     * @method _IH_GroupUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GroupUser_C|GroupUser[] all()
     * @ownLinks group_id,\App\Models\Group,id
     * @mixin _IH_GroupUser_QB
     */
    class GroupUser extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int|null $amount
     * @property int|null $discount
     * @property bool $disabled
     * @property int $created_at
     * @property bool $in_person
     * @property int|null $in_person_amount
     * @property bool $group_meeting
     * @property int|null $online_group_min_student
     * @property int|null $online_group_max_student
     * @property int|null $online_group_amount
     * @property int|null $in_person_group_min_student
     * @property int|null $in_person_group_max_student
     * @property int|null $in_person_group_amount
     * @property-read array $details attribute
     * @property _IH_MeetingTime_C|ModelsMeetingTime[] $meetingTimes
     * @property-read int $meeting_times_count
     * @method HasMany|_IH_MeetingTime_QB meetingTimes()
     * @method static _IH_Meeting_QB onWriteConnection()
     * @method _IH_Meeting_QB newQuery()
     * @method static _IH_Meeting_QB on(null|string $connection = null)
     * @method static _IH_Meeting_QB query()
     * @method static _IH_Meeting_QB with(array|string $relations)
     * @method _IH_Meeting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Meeting_C|Meeting[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\Api\MeetingTime,meeting_id|id,\App\Models\Api\ReserveMeeting,meeting_id|id,\App\Models\OrderItem,meeting_id|id,\App\Models\Api\Sale,meeting_id|id,\App\Models\Api\Accounting,meeting_id
     * @mixin _IH_Meeting_QB
     */
    class Meeting extends Model {}
    
    /**
     * @property int $id
     * @property int $meeting_id
     * @property string $day_label
     * @property string $time
     * @property int $created_at
     * @property string $meeting_type
     * @property string|null $description
     * @property ModelsMeeting $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @method static Api_IH_MeetingTime_QB onWriteConnection()
     * @method Api_IH_MeetingTime_QB newQuery()
     * @method static Api_IH_MeetingTime_QB on(null|string $connection = null)
     * @method static Api_IH_MeetingTime_QB query()
     * @method static Api_IH_MeetingTime_QB with(array|string $relations)
     * @method Api_IH_MeetingTime_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_MeetingTime_C|MeetingTime[] all()
     * @ownLinks meeting_id,\App\Models\Api\Meeting,id
     * @foreignLinks id,\App\Models\Api\ReserveMeeting,meeting_time_id|id,\App\Models\Api\Sale,meeting_time_id
     * @mixin Api_IH_MeetingTime_QB
     */
    class MeetingTime extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $amount
     * @property string $account_name
     * @property string $account_number
     * @property string $account_bank_name
     * @property string $status
     * @property int $created_at
     * @property int|null $user_selected_bank_id
     * @property-read array $details attribute
     * @property UserSelectedBank|null $userSelectedBank
     * @method BelongsTo|_IH_UserSelectedBank_QB userSelectedBank()
     * @method static _IH_Payout_QB onWriteConnection()
     * @method _IH_Payout_QB newQuery()
     * @method static _IH_Payout_QB on(null|string $connection = null)
     * @method static _IH_Payout_QB query()
     * @method static _IH_Payout_QB with(array|string $relations)
     * @method _IH_Payout_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Payout_C|Payout[] all()
     * @ownLinks user_selected_bank_id,\App\Models\UserSelectedBank,id
     * @mixin _IH_Payout_QB
     */
    class Payout extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $prerequisite_id
     * @property bool $required
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property ModelsWebinar $prerequisiteWebinar
     * @method BelongsTo|_IH_Webinar_QB prerequisiteWebinar()
     * @method static _IH_Prerequisite_QB onWriteConnection()
     * @method _IH_Prerequisite_QB newQuery()
     * @method static _IH_Prerequisite_QB on(null|string $connection = null)
     * @method static _IH_Prerequisite_QB query()
     * @method static _IH_Prerequisite_QB with(array|string $relations)
     * @method _IH_Prerequisite_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Prerequisite_C|Prerequisite[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|prerequisite_id,\App\Models\Api\Webinar,id
     * @mixin _IH_Prerequisite_QB
     */
    class Prerequisite extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property string $type
     * @property string $slug
     * @property int|null $category_id
     * @property int|null $price
     * @property int|null $point
     * @property bool $unlimited_inventory
     * @property bool $ordering
     * @property int|null $inventory
     * @property int|null $inventory_warning
     * @property int|null $inventory_updated_at
     * @property int|null $delivery_fee
     * @property int|null $delivery_estimated_time
     * @property string|null $message_for_reviewer
     * @property int|null $tax
     * @property int|null $commission
     * @property string $status
     * @property int $updated_at
     * @property int $created_at
     * @property string $commission_type
     * @property-read $description attribute
     * @property-read $images attribute
     * @property-read null $label attribute
     * @property-read $seo_description attribute
     * @property-read $summary attribute
     * @property-read null $thumbnail attribute
     * @property-read $title attribute
     * @property-read null $video_demo attribute
     * @property-read $waiting_orders attribute
     * @property ProductCategory|null $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_ProductDiscount_C|ProductDiscount[] $discounts
     * @property-read int $discounts_count
     * @method HasMany|_IH_ProductDiscount_QB discounts()
     * @property _IH_ProductFaq_C|ProductFaq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_ProductFaq_QB faqs()
     * @property _IH_ProductFile_C|ProductFile[] $files
     * @property-read int $files_count
     * @method HasMany|_IH_ProductFile_QB files()
     * @property _IH_ProductMedia_C|ProductMedia[] $getImagesAttribute
     * @property-read int $get_images_attribute_count
     * @method HasMany|_IH_ProductMedia_QB getImagesAttribute()
     * @property _IH_ProductMedia_C|ProductMedia[] $media
     * @property-read int $media_count
     * @method HasMany|_IH_ProductMedia_QB media()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_ProductOrder_C|ModelsProductOrder[] $productOrders
     * @property-read int $product_orders_count
     * @method HasMany|_IH_ProductOrder_QB productOrders()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_ProductReview_C|ProductReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_ProductReview_QB reviews()
     * @property _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] $selectedFilterOptions
     * @property-read int $selected_filter_options_count
     * @method HasMany|_IH_ProductSelectedFilterOption_QB selectedFilterOptions()
     * @property _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] $selectedSpecifications
     * @property-read int $selected_specifications_count
     * @method HasMany|_IH_ProductSelectedSpecification_QB selectedSpecifications()
     * @method static Api_IH_Product_QB onWriteConnection()
     * @method Api_IH_Product_QB newQuery()
     * @method static Api_IH_Product_QB on(null|string $connection = null)
     * @method static Api_IH_Product_QB query()
     * @method static Api_IH_Product_QB with(array|string $relations)
     * @method Api_IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks category_id,\App\Models\ProductCategory,id
     * @foreignLinks id,\App\Models\Translation\ProductTranslation,product_id|id,\App\Models\ProductDiscount,product_id|id,\App\Models\ProductFile,product_id|id,\App\Models\ProductMedia,product_id|id,\App\Models\ProductSelectedFilterOption,product_id|id,\App\Models\ProductSelectedSpecification,product_id|id,\App\Models\ProductFaq,product_id|id,\App\Models\ProductReview,product_id|id,\App\Models\Api\Comment,product_id|id,\App\Models\CommentReport,product_id|id,\App\Models\InstallmentSpecificationItem,product_id|id,\App\Models\InstallmentOrder,product_id|id,\App\Models\CashbackRuleSpecificationItem,product_id|id,\App\Models\Gift,product_id|id,\App\Models\PurchaseNotificationRoleGroupContent,product_id|id,\App\Models\AbandonedCartRuleSpecificationItem,product_id|id,\App\Models\Api\Accounting,product_id|id,\App\Models\Api\ProductOrder,product_id
     * @mixin Api_IH_Product_QB
     */
    class Product extends Model {}
    
    /**
     * @property int $id
     * @property string $icon
     * @property string $color
     * @property string $background
     * @property int|null $start_at
     * @property int|null $end_at
     * @property bool $enable
     * @property int $created_at
     * @property-read $title attribute
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $contents
     * @property-read int $contents_count
     * @method HasMany|_IH_ProductBadgeContent_QB contents()
     * @method static _IH_ProductBadge_QB onWriteConnection()
     * @method _IH_ProductBadge_QB newQuery()
     * @method static _IH_ProductBadge_QB on(null|string $connection = null)
     * @method static _IH_ProductBadge_QB query()
     * @method static _IH_ProductBadge_QB with(array|string $relations)
     * @method _IH_ProductBadge_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductBadge_C|ProductBadge[] all()
     * @foreignLinks id,\App\Models\Translation\ProductBadgeTranslation,product_badge_id|id,\App\Models\Api\ProductBadgeContent,product_badge_id
     * @mixin _IH_ProductBadge_QB
     */
    class ProductBadge extends Model {}
    
    /**
     * @property int $id
     * @property int $product_badge_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property ProductBadge $badge
     * @method BelongsTo|_IH_ProductBadge_QB badge()
     * @property Blog $blog
     * @method BelongsTo|_IH_Blog_QB blog()
     * @property ApiBundle $bundle
     * @method BelongsTo|Api_IH_Bundle_QB bundle()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_ProductBadgeContent_QB onWriteConnection()
     * @method _IH_ProductBadgeContent_QB newQuery()
     * @method static _IH_ProductBadgeContent_QB on(null|string $connection = null)
     * @method static _IH_ProductBadgeContent_QB query()
     * @method static _IH_ProductBadgeContent_QB with(array|string $relations)
     * @method _IH_ProductBadgeContent_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductBadgeContent_C|ProductBadgeContent[] all()
     * @ownLinks product_badge_id,\App\Models\Api\ProductBadge,id
     * @mixin _IH_ProductBadgeContent_QB
     */
    class ProductBadgeContent extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property int $seller_id
     * @property int $buyer_id
     * @property int|null $sale_id
     * @property string|null $specifications
     * @property int $quantity
     * @property int|null $discount_id
     * @property string|null $message_to_seller
     * @property string|null $tracking_code
     * @property string $status
     * @property int $created_at
     * @property int|null $installment_order_id
     * @property int|null $gift_id
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property ModelsProduct $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ModelsSale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @method static Api_IH_ProductOrder_QB onWriteConnection()
     * @method Api_IH_ProductOrder_QB newQuery()
     * @method static Api_IH_ProductOrder_QB on(null|string $connection = null)
     * @method static Api_IH_ProductOrder_QB query()
     * @method static Api_IH_ProductOrder_QB with(array|string $relations)
     * @method Api_IH_ProductOrder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_ProductOrder_C|ProductOrder[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id|gift_id,\App\Models\Gift,id|product_id,\App\Models\Api\Product,id|sale_id,\App\Models\Api\Sale,id|discount_id,\App\Models\Discount,id
     * @foreignLinks id,\App\Models\Api\Cart,product_order_id|id,\App\Models\InstallmentOrder,product_order_id|id,\App\Models\OrderItem,product_order_id|id,\App\Models\Api\Sale,product_order_id
     * @mixin Api_IH_ProductOrder_QB
     */
    class ProductOrder extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_user_id
     * @property int $time
     * @property int $attempt
     * @property int $pass_mark
     * @property bool $certificate
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property string|null $webinar_title
     * @property int|null $total_mark
     * @property int|null $webinar_id
     * @property int|null $chapter_id
     * @property bool $display_limited_questions
     * @property int|null $display_number_of_questions
     * @property bool $display_questions_randomly
     * @property int|null $expiry_days
     * @property string|null $icon
     * @property-read string $attempt_state attribute
     * @property-read null $auth_attempt_count attribute
     * @property-read bool|null $auth_can_download_certificate attribute
     * @property-read bool|null $auth_can_take_quiz attribute
     * @property-read null|string $auth_can_take_quiz_status attribute
     * @property-read bool|null $auth_passed_quiz attribute
     * @property-read null $auth_results attribute
     * @property-read null|string $auth_status attribute
     * @property-read $average_grade attribute
     * @property-read array $brief attribute
     * @property-read int|string $count_try_again attribute
     * @property-read $description attribute
     * @property-read $details attribute
     * @property-read $latest_students attribute
     * @property-read int $success_rate attribute
     * @property-read $title attribute
     * @property Models_IH_Certificate_C|ModelsCertificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|Models_IH_Certificate_QB certificates()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_QuizzesQuestion_C|ModelsQuizzesQuestion[] $quizQuestions
     * @property-read int $quiz_questions_count
     * @method HasMany|_IH_QuizzesQuestion_QB quizQuestions()
     * @property _IH_QuizzesResult_C|ModelsQuizzesResult[] $quizResults
     * @property-read int $quiz_results_count
     * @method HasMany|_IH_QuizzesResult_QB quizResults()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Quiz_QB onWriteConnection()
     * @method Api_IH_Quiz_QB newQuery()
     * @method static Api_IH_Quiz_QB on(null|string $connection = null)
     * @method static Api_IH_Quiz_QB query()
     * @method static Api_IH_Quiz_QB with(array|string $relations)
     * @method Api_IH_Quiz_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Quiz_C|Quiz[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Api\Certificate,quiz_id|id,\App\Models\Api\QuizzesResult,quiz_id|id,\App\Models\Api\QuizzesQuestion,quiz_id|id,\App\Models\Translation\QuizTranslation,quiz_id
     * @mixin Api_IH_Quiz_QB
     */
    class Quiz extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $creator_user_id
     * @property string $grade
     * @property string $type
     * @property int $created_at
     * @property int|null $updated_at
     * @property string|null $image
     * @property string|null $video
     * @property int|null $order
     * @property-read $answers attribute
     * @property-read $correct attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_QuizzesQuestionsAnswer_C|ModelsQuizzesQuestionsAnswer[] $quizzesQuestionsAnswers
     * @property-read int $quizzes_questions_answers_count
     * @method HasMany|_IH_QuizzesQuestionsAnswer_QB quizzesQuestionsAnswers()
     * @method static Api_IH_QuizzesQuestion_QB onWriteConnection()
     * @method Api_IH_QuizzesQuestion_QB newQuery()
     * @method static Api_IH_QuizzesQuestion_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesQuestion_QB query()
     * @method static Api_IH_QuizzesQuestion_QB with(array|string $relations)
     * @method Api_IH_QuizzesQuestion_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesQuestion_C|QuizzesQuestion[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id
     * @foreignLinks id,\App\Models\Api\QuizzesQuestionsAnswer,question_id|id,\App\Models\Translation\QuizzesQuestionTranslation,quizzes_question_id
     * @mixin Api_IH_QuizzesQuestion_QB
     */
    class QuizzesQuestion extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_user_id
     * @property int $question_id
     * @property string|null $image
     * @property bool $correct
     * @property int $created_at
     * @property int|null $updated_at
     * @property-read array $details attribute
     * @property-read $title attribute
     * @method static Api_IH_QuizzesQuestionsAnswer_QB onWriteConnection()
     * @method Api_IH_QuizzesQuestionsAnswer_QB newQuery()
     * @method static Api_IH_QuizzesQuestionsAnswer_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesQuestionsAnswer_QB query()
     * @method static Api_IH_QuizzesQuestionsAnswer_QB with(array|string $relations)
     * @method Api_IH_QuizzesQuestionsAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] all()
     * @ownLinks question_id,\App\Models\Api\QuizzesQuestion,id
     * @foreignLinks id,\App\Models\Translation\QuizzesQuestionsAnswerTranslation,quizzes_questions_answer_id
     * @mixin Api_IH_QuizzesQuestionsAnswer_QB
     */
    class QuizzesQuestionsAnswer extends Model {}
    
    /**
     * @property int $id
     * @property int $quiz_id
     * @property int $user_id
     * @property string|null $results
     * @property int|null $user_grade
     * @property string $status
     * @property int $created_at
     * @property-read array $brief attribute
     * @property-read $details attribute
     * @property-read bool $finished attribute
     * @property-read array $quiz_review attribute
     * @property-read bool $reviewable attribute
     * @property Certificate $certificate
     * @method HasOne|_IH_Certificate_QB certificate()
     * @property ModelsQuiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @method static Api_IH_QuizzesResult_QB onWriteConnection()
     * @method Api_IH_QuizzesResult_QB newQuery()
     * @method static Api_IH_QuizzesResult_QB on(null|string $connection = null)
     * @method static Api_IH_QuizzesResult_QB query()
     * @method static Api_IH_QuizzesResult_QB with(array|string $relations)
     * @method Api_IH_QuizzesResult_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_QuizzesResult_C|QuizzesResult[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id
     * @foreignLinks id,\App\Models\Api\Certificate,quiz_result_id
     * @mixin Api_IH_QuizzesResult_QB
     */
    class QuizzesResult extends Model {}
    
    /**
     * @property int $id
     * @property int $days
     * @property int $price
     * @property string $icon
     * @property string $role
     * @property int|null $instructors_count
     * @property int|null $students_count
     * @property int|null $courses_capacity
     * @property int|null $courses_count
     * @property int|null $meeting_count
     * @property string $status
     * @property int $created_at
     * @property int|null $product_count
     * @property bool $ai_content_access
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @method static Api_IH_RegistrationPackage_QB onWriteConnection()
     * @method Api_IH_RegistrationPackage_QB newQuery()
     * @method static Api_IH_RegistrationPackage_QB on(null|string $connection = null)
     * @method static Api_IH_RegistrationPackage_QB query()
     * @method static Api_IH_RegistrationPackage_QB with(array|string $relations)
     * @method Api_IH_RegistrationPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RegistrationPackage_C|RegistrationPackage[] all()
     * @foreignLinks id,\App\Models\Translation\RegistrationPackageTranslation,registration_package_id|id,\App\Models\InstallmentSpecificationItem,registration_package_id|id,\App\Models\InstallmentOrder,registration_package_id|id,\App\Models\CashbackRuleSpecificationItem,registration_package_id|id,\App\Models\SpecialOffer,registration_package_id|id,\App\Models\OrderItem,registration_package_id|id,\App\Models\Api\Sale,registration_package_id|id,\App\Models\Api\Accounting,registration_package_id
     * @mixin Api_IH_RegistrationPackage_QB
     */
    class RegistrationPackage extends Model {}
    
    /**
     * @property int $id
     * @property int $meeting_time_id
     * @property int $user_id
     * @property int $paid_amount
     * @property string|null $link
     * @property string|null $password
     * @property string $status
     * @property int $created_at
     * @property string $day
     * @property int|null $locked_at
     * @property int|null $reserved_at
     * @property int|null $discount
     * @property int|null $sale_id
     * @property int $date
     * @property string $meeting_type
     * @property int|null $student_count
     * @property int $start_at
     * @property int $end_at
     * @property string|null $description
     * @property-read array $details attribute
     * @property-read int $user_paid_amount attribute
     * @property ModelsMeeting $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @property ModelsMeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property ModelsSale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @property ModelsSession $session
     * @method HasOne|_IH_Session_QB session()
     * @method static Api_IH_ReserveMeeting_QB onWriteConnection()
     * @method Api_IH_ReserveMeeting_QB newQuery()
     * @method static Api_IH_ReserveMeeting_QB on(null|string $connection = null)
     * @method static Api_IH_ReserveMeeting_QB query()
     * @method static Api_IH_ReserveMeeting_QB with(array|string $relations)
     * @method Api_IH_ReserveMeeting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReserveMeeting_C|ReserveMeeting[] all()
     * @ownLinks meeting_id,\App\Models\Api\Meeting,id|meeting_time_id,\App\Models\Api\MeetingTime,id|sale_id,\App\Models\Api\Sale,id
     * @foreignLinks id,\App\Models\OrderItem,reserve_meeting_id|id,\App\Models\Api\Cart,reserve_meeting_id|id,\App\Models\Api\Session,reserve_meeting_id
     * @mixin Api_IH_ReserveMeeting_QB
     */
    class ReserveMeeting extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $item_id
     * @property string $type
     * @property int $score
     * @property string $status
     * @property int $created_at
     * @property-read array $details attribute
     * @method static _IH_RewardAccounting_QB onWriteConnection()
     * @method _IH_RewardAccounting_QB newQuery()
     * @method static _IH_RewardAccounting_QB on(null|string $connection = null)
     * @method static _IH_RewardAccounting_QB query()
     * @method static _IH_RewardAccounting_QB with(array|string $relations)
     * @method _IH_RewardAccounting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RewardAccounting_C|RewardAccounting[] all()
     * @ownLinks 
     * @mixin _IH_RewardAccounting_QB
     */
    class RewardAccounting extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $order_id
     * @property int|null $webinar_id
     * @property int|null $meeting_id
     * @property int|null $meeting_time_id
     * @property int|null $ticket_id
     * @property string $type
     * @property string $payment_method
     * @property int $amount
     * @property int|null $tax
     * @property int|null $commission
     * @property int|null $discount
     * @property int $total_amount
     * @property int $created_at
     * @property int|null $refund_at
     * @property int $seller_id
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property int|null $registration_package_id
     * @property int|null $product_order_id
     * @property int|null $bundle_id
     * @property bool $manual_added
     * @property bool $access_to_purchased_item
     * @property float|null $product_delivery_fee
     * @property int|null $installment_payment_id
     * @property int|null $gift_id
     * @property-read array $details attribute
     * @property-read null|string $item_type attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property ModelsMeeting|null $meeting
     * @method BelongsTo|Models_IH_Meeting_QB meeting()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property ModelsProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ModelsRegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property SaleLog $saleLog
     * @method HasOne|_IH_SaleLog_QB saleLog()
     * @property ModelsSubscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property ModelsTicket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Sale_QB onWriteConnection()
     * @method Api_IH_Sale_QB newQuery()
     * @method static Api_IH_Sale_QB on(null|string $connection = null)
     * @method static Api_IH_Sale_QB query()
     * @method static Api_IH_Sale_QB with(array|string $relations)
     * @method Api_IH_Sale_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Sale_C|Sale[] all()
     * @ownLinks order_id,\App\Models\Order,id|webinar_id,\App\Models\Api\Webinar,id|meeting_id,\App\Models\Api\Meeting,id|ticket_id,\App\Models\Api\Ticket,id|promotion_id,\App\Models\Promotion,id|installment_payment_id,\App\Models\InstallmentOrderPayment,id|meeting_time_id,\App\Models\Api\MeetingTime,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id|product_order_id,\App\Models\Api\ProductOrder,id|gift_id,\App\Models\Gift,id
     * @foreignLinks id,\App\Models\SubscribeUse,sale_id|id,\App\Models\SaleLog,sale_id|id,\App\Models\Api\ReserveMeeting,sale_id|id,\App\Models\InstallmentOrderPayment,sale_id|id,\App\Models\Api\ProductOrder,sale_id
     * @mixin Api_IH_Sale_QB
     */
    class Sale extends Model {}
    
    /**
     * @property int $id
     * @property int $date
     * @property int $duration
     * @property string $link
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $order
     * @property string $session_api
     * @property string|null $api_secret
     * @property string|null $moderator_secret
     * @property string|null $zoom_id
     * @property string|null $zoom_start_link
     * @property int|null $chapter_id
     * @property string $status
     * @property string|null $agora_settings
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property int|null $extra_time_to_join Specifies that the user can see the join button up to a few minutes after the start time of the webinar.
     * @property int|null $reserve_meeting_id
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property AgoraHistory $agoraHistory
     * @method HasOne|_IH_AgoraHistory_QB agoraHistory()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_SessionRemind_C|SessionRemind[] $sessionReminds
     * @property-read int $session_reminds_count
     * @method HasMany|_IH_SessionRemind_QB sessionReminds()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_Session_QB onWriteConnection()
     * @method Api_IH_Session_QB newQuery()
     * @method static Api_IH_Session_QB on(null|string $connection = null)
     * @method static Api_IH_Session_QB query()
     * @method static Api_IH_Session_QB with(array|string $relations)
     * @method Api_IH_Session_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Session_C|Session[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id|reserve_meeting_id,\App\Models\Api\ReserveMeeting,id
     * @foreignLinks id,\App\Models\CourseLearning,session_id|id,\App\Models\SessionRemind,session_id|id,\App\Models\Translation\SessionTranslation,session_id|id,\App\Models\AgoraHistory,session_id|id,\App\Models\UserLoginHistory,session_id
     * @mixin Api_IH_Session_QB
     */
    class Session extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int|null $updated_at
     * @property string $page
     * @property-read $value attribute
     * @method static _IH_Setting_QB onWriteConnection()
     * @method _IH_Setting_QB newQuery()
     * @method static _IH_Setting_QB on(null|string $connection = null)
     * @method static _IH_Setting_QB query()
     * @method static _IH_Setting_QB with(array|string $relations)
     * @method _IH_Setting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Setting_C|Setting[] all()
     * @foreignLinks id,\App\Models\Translation\SettingTranslation,setting_id
     * @mixin _IH_Setting_QB
     */
    class Setting extends Model {}
    
    /**
     * @property int $id
     * @property int $usable_count
     * @property int $days
     * @property int $price
     * @property string $icon
     * @property int $created_at
     * @property bool $is_popular
     * @property bool $infinite_use
     * @property-read $description attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property _IH_SubscribeUse_C|SubscribeUse[] $uses
     * @property-read int $uses_count
     * @method HasMany|_IH_SubscribeUse_QB uses()
     * @method static Api_IH_Subscribe_QB onWriteConnection()
     * @method Api_IH_Subscribe_QB newQuery()
     * @method static Api_IH_Subscribe_QB on(null|string $connection = null)
     * @method static Api_IH_Subscribe_QB query()
     * @method static Api_IH_Subscribe_QB with(array|string $relations)
     * @method Api_IH_Subscribe_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscribe_C|Subscribe[] all()
     * @foreignLinks id,\App\Models\OrderItem,subscribe_id|id,\App\Models\SubscribeUse,subscribe_id|id,\App\Models\Api\Cart,subscribe_id|id,\App\Models\Translation\SubscribeTranslation,subscribe_id|id,\App\Models\SubscribeRemind,subscribe_id|id,\App\Models\InstallmentSpecificationItem,subscribe_id|id,\App\Models\InstallmentOrder,subscribe_id|id,\App\Models\CashbackRuleSpecificationItem,subscribe_id|id,\App\Models\SpecialOffer,subscribe_id|id,\App\Models\Api\Sale,subscribe_id|id,\App\Models\Api\Accounting,subscribe_id
     * @mixin Api_IH_Subscribe_QB
     */
    class Subscribe extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $department_id
     * @property string $title
     * @property string $status
     * @property int|null $created_at
     * @property int|null $updated_at
     * @property-read array $details attribute
     * @property _IH_SupportConversation_C|ModelsSupportConversation[] $conversations
     * @property-read int $conversations_count
     * @method HasMany|_IH_SupportConversation_QB conversations()
     * @property ModelsSupportDepartment|null $department
     * @method BelongsTo|_IH_SupportDepartment_QB department()
     * @property ModelsWebinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Support_QB onWriteConnection()
     * @method _IH_Support_QB newQuery()
     * @method static _IH_Support_QB on(null|string $connection = null)
     * @method static _IH_Support_QB query()
     * @method static _IH_Support_QB with(array|string $relations)
     * @method _IH_Support_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Support_C|Support[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|department_id,\App\Models\Api\SupportDepartment,id
     * @foreignLinks id,\App\Models\Api\SupportConversation,support_id|id,\App\Models\Api\SupportConversation,support_id
     * @mixin _IH_Support_QB
     */
    class Support extends Model {}
    
    /**
     * @property int $id
     * @property int $support_id
     * @property int|null $supporter_id
     * @property int|null $sender_id
     * @property string|null $attach
     * @property string $message
     * @property int $created_at
     * @property-read array $brief attribute
     * @method static Api_IH_SupportConversation_QB onWriteConnection()
     * @method Api_IH_SupportConversation_QB newQuery()
     * @method static Api_IH_SupportConversation_QB on(null|string $connection = null)
     * @method static Api_IH_SupportConversation_QB query()
     * @method static Api_IH_SupportConversation_QB with(array|string $relations)
     * @method Api_IH_SupportConversation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_SupportConversation_C|SupportConversation[] all()
     * @ownLinks support_id,\App\Models\Api\Support,id|support_id,\App\Models\Api\Support,id
     * @mixin Api_IH_SupportConversation_QB
     */
    class SupportConversation extends Model {}
    
    /**
     * @property int $id
     * @property int $created_at
     * @property string|null $icon
     * @property string|null $color
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property Models_IH_Support_C|ModelsSupport[] $supports
     * @property-read int $supports_count
     * @method HasMany|Models_IH_Support_QB supports()
     * @method static Api_IH_SupportDepartment_QB onWriteConnection()
     * @method Api_IH_SupportDepartment_QB newQuery()
     * @method static Api_IH_SupportDepartment_QB on(null|string $connection = null)
     * @method static Api_IH_SupportDepartment_QB query()
     * @method static Api_IH_SupportDepartment_QB with(array|string $relations)
     * @method Api_IH_SupportDepartment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportDepartment_C|SupportDepartment[] all()
     * @foreignLinks id,\App\Models\Api\Support,department_id|id,\App\Models\Translation\SupportDepartmentTranslation,support_department_id
     * @mixin Api_IH_SupportDepartment_QB
     */
    class SupportDepartment extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property string|null $image
     * @property int|null $study_time
     * @property string $accessibility
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property int|null $chapter_id
     * @property string $status
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property-read bool|null $auth_has_access attribute
     * @property-read $content attribute
     * @property-read array $details attribute
     * @property-read bool|null $read attribute
     * @property-read $summary attribute
     * @property-read $title attribute
     * @property-read bool $user_has_access attribute
     * @property _IH_TextLessonAttachment_C|ModelsTextLessonAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_TextLessonAttachment_QB attachments()
     * @property ModelsWebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_TextLesson_QB onWriteConnection()
     * @method _IH_TextLesson_QB newQuery()
     * @method static _IH_TextLesson_QB on(null|string $connection = null)
     * @method static _IH_TextLesson_QB query()
     * @method static _IH_TextLesson_QB with(array|string $relations)
     * @method _IH_TextLesson_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TextLesson_C|TextLesson[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Api\TextLessonAttachment,text_lesson_id|id,\App\Models\CourseLearning,text_lesson_id|id,\App\Models\Translation\TextLessonTranslation,text_lesson_id
     * @mixin _IH_TextLesson_QB
     */
    class TextLesson extends Model {}
    
    /**
     * @property int $id
     * @property int $text_lesson_id
     * @property int $file_id
     * @property int $created_at
     * @property-read $details attribute
     * @property ModelsFile $file
     * @method BelongsTo|Models_IH_File_QB file()
     * @method static Api_IH_TextLessonAttachment_QB onWriteConnection()
     * @method Api_IH_TextLessonAttachment_QB newQuery()
     * @method static Api_IH_TextLessonAttachment_QB on(null|string $connection = null)
     * @method static Api_IH_TextLessonAttachment_QB query()
     * @method static Api_IH_TextLessonAttachment_QB with(array|string $relations)
     * @method Api_IH_TextLessonAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_TextLessonAttachment_C|TextLessonAttachment[] all()
     * @ownLinks text_lesson_id,\App\Models\Api\TextLesson,id|file_id,\App\Models\Api\File,id
     * @mixin Api_IH_TextLessonAttachment_QB
     */
    class TextLessonAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int|null $start_date
     * @property int|null $end_date
     * @property int $discount
     * @property int|null $capacity
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $webinar_id
     * @property int $creator_id
     * @property int|null $order
     * @property int|null $bundle_id
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static Api_IH_Ticket_QB onWriteConnection()
     * @method Api_IH_Ticket_QB newQuery()
     * @method static Api_IH_Ticket_QB on(null|string $connection = null)
     * @method static Api_IH_Ticket_QB query()
     * @method static Api_IH_Ticket_QB with(array|string $relations)
     * @method Api_IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\Cart,ticket_id|id,\App\Models\OrderItem,ticket_id|id,\App\Models\Api\Sale,ticket_id|id,\App\Models\TicketUser,ticket_id|id,\App\Models\Translation\TicketTranslation,ticket_id
     * @mixin Api_IH_Ticket_QB
     */
    class Ticket extends Model {}
    
    /**
     * @property int $id
     * @property int $category_id
     * @property string $icon
     * @property string $color
     * @property int $created_at
     * @property-read array $details attribute
     * @property ModelsCategory $category
     * @method BelongsTo|_IH_Category_QB category()
     * @method static _IH_TrendCategory_QB onWriteConnection()
     * @method _IH_TrendCategory_QB newQuery()
     * @method static _IH_TrendCategory_QB on(null|string $connection = null)
     * @method static _IH_TrendCategory_QB query()
     * @method static _IH_TrendCategory_QB with(array|string $relations)
     * @method _IH_TrendCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TrendCategory_C|TrendCategory[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @mixin _IH_TrendCategory_QB
     */
    class TrendCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $token
     * @property string $fcm_token
     * @property string $ip
     * @property Carbon|null $created_at
     * @property Carbon|null $updated_at
     * @method static _IH_UserFirebaseSessions_QB onWriteConnection()
     * @method _IH_UserFirebaseSessions_QB newQuery()
     * @method static _IH_UserFirebaseSessions_QB on(null|string $connection = null)
     * @method static _IH_UserFirebaseSessions_QB query()
     * @method static _IH_UserFirebaseSessions_QB with(array|string $relations)
     * @method _IH_UserFirebaseSessions_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserFirebaseSessions_C|UserFirebaseSessions[] all()
     * @ownLinks 
     * @mixin _IH_UserFirebaseSessions_QB
     */
    class UserFirebaseSessions extends Model {}
    
    /**
     * @property int $id
     * @property int $teacher_id
     * @property int $creator_user_id
     * @property int $start_date
     * @property string $image_cover
     * @property string|null $video_demo
     * @property int $capacity
     * @property mixed $price
     * @property bool $support
     * @property bool $partner_instructor
     * @property bool $subscribe
     * @property string|null $message_for_reviewer
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $deleted_at
     * @property int $category_id
     * @property int $start_time
     * @property int $end_time
     * @property string $slug
     * @property int $duration
     * @property bool $downloadable
     * @property string $type
     * @property string $thumbnail
     * @property bool $private
     * @property int|null $points
     * @property string|null $timezone
     * @property string $video_demo_source
     * @property int|null $access_days Number of days to access the course
     * @property bool $forum
     * @property float|null $organization_price
     * @property bool $certificate
     * @property bool $enable_waitlist
     * @property int|null $sales_count_number
     * @property-read int $assignments_average_grade attribute
     * @property-read $assignments_status attribute
     * @property-read array|null $brief attribute
     * @property-read $comments_count attribute
     * @property-read $course_progress attribute
     * @property-read $course_progress_line attribute
     * @property-read $description attribute
     * @property-read $details attribute
     * @property-read bool $expired attribute
     * @property-read int $forums_messages_count attribute
     * @property-read bool $has_capacity attribute
     * @property-read void $label attribute
     * @property-read $monthly_sales attribute
     * @property-read $quiz_status attribute
     * @property-read $quizzes_average_grade attribute
     * @property-read $sales_amount attribute
     * @property-read $seo_description attribute
     * @property-read array $specification attribute
     * @property-read $students_count attribute
     * @property-read $students_ids attribute
     * @property-read array $students_roles attribute
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $badges
     * @property-read int $badges_count
     * @method HasMany|_IH_ProductBadgeContent_QB badges()
     * @property ModelsCategory $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property Models_IH_Certificate_C|ModelsCertificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|Models_IH_Certificate_QB certificates()
     * @property _IH_WebinarChapter_C|ModelsWebinarChapter[] $chapters
     * @property-read int $chapters_count
     * @method HasMany|_IH_WebinarChapter_QB chapters()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @method HasMany|_IH_Comment_QB comments()
     * @property ContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property Models_IH_Faq_C|ModelsFaq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|Models_IH_Faq_QB faqs()
     * @property ModelsFeatureWebinar $feature
     * @method HasOne|Models_IH_FeatureWebinar_QB feature()
     * @property Models_IH_File_C|ModelsFile[] $files
     * @property-read int $files_count
     * @method HasMany|Models_IH_File_QB files()
     * @property _IH_WebinarFilterOption_C|WebinarFilterOption[] $filterOptions
     * @property-read int $filter_options_count
     * @method HasMany|_IH_WebinarFilterOption_QB filterOptions()
     * @property Models_IH_CourseForum_C|ModelsCourseForum[] $forums
     * @property-read int $forums_count
     * @method HasMany|Models_IH_CourseForum_QB forums()
     * @property _IH_CourseNoticeboard_C|CourseNoticeboard[] $noticeboards
     * @property-read int $noticeboards_count
     * @method HasMany|_IH_CourseNoticeboard_QB noticeboards()
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $pendingAssignments
     * @property-read int $pending_assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB pendingAssignments()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $pendingQuizzes
     * @property-read int $pending_quizzes_count
     * @method HasMany|_IH_Quiz_QB pendingQuizzes()
     * @property Models_IH_Prerequisite_C|ModelsPrerequisite[] $prerequisites
     * @property-read int $prerequisites_count
     * @method HasMany|Models_IH_Prerequisite_QB prerequisites()
     * @property Models_IH_ProductBadgeContent_C|ModelsProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|Models_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_Purchase_C|Purchase[] $purchases
     * @property-read int $purchases_count
     * @method HasMany|_IH_Purchase_QB purchases()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_WebinarReview_C|ModelsWebinarReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_WebinarReview_QB reviews()
     * @property _IH_Sale_C|ModelsSale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property Models_IH_Session_C|ModelsSession[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method HasMany|_IH_Tag_QB tags()
     * @property Models_IH_TextLesson_C|ModelsTextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|Models_IH_TextLesson_QB textLessons()
     * @property Models_IH_Ticket_C|ModelsTicket[] $tickets
     * @property-read int $tickets_count
     * @method HasMany|_IH_Ticket_QB tickets()
     * @property _IH_Waitlist_C|Waitlist[] $waitlists
     * @property-read int $waitlists_count
     * @method HasMany|_IH_Waitlist_QB waitlists()
     * @property _IH_WebinarExtraDescription_C|WebinarExtraDescription[] $webinarExtraDescription
     * @property-read int $webinar_extra_description_count
     * @method HasMany|_IH_WebinarExtraDescription_QB webinarExtraDescription()
     * @property _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] $webinarPartnerTeacher
     * @property-read int $webinar_partner_teacher_count
     * @method HasMany|_IH_WebinarPartnerTeacher_QB webinarPartnerTeacher()
     * @method static Api_IH_Webinar_QB onWriteConnection()
     * @method Api_IH_Webinar_QB newQuery()
     * @method static Api_IH_Webinar_QB on(null|string $connection = null)
     * @method static Api_IH_Webinar_QB query()
     * @method static Api_IH_Webinar_QB with(array|string $relations)
     * @method Api_IH_Webinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_Webinar_C|Webinar[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @foreignLinks id,\App\Models\WebinarPartnerTeacher,webinar_id|id,\App\Models\WebinarFilterOption,webinar_id|id,\App\Models\Api\Prerequisite,webinar_id|id,\App\Models\Api\Prerequisite,prerequisite_id|id,\App\Models\Purchase,webinar_id|id,\App\Models\Api\Favorite,webinar_id|id,\App\Models\Api\Comment,webinar_id|id,\App\Models\Api\Faq,webinar_id|id,\App\Models\Api\File,webinar_id|id,\App\Models\Tag,webinar_id|id,\App\Models\Api\Ticket,webinar_id|id,\App\Models\Api\Session,webinar_id|id,\App\Models\Api\Quiz,webinar_id|id,\App\Models\Api\WebinarReview,webinar_id|id,\App\Models\Api\Cart,webinar_id|id,\App\Models\OrderItem,webinar_id|id,\App\Models\Api\Sale,webinar_id|id,\App\Models\Api\FeatureWebinar,webinar_id|id,\App\Models\Api\Support,webinar_id|id,\App\Models\Api\TextLesson,webinar_id|id,\App\Models\SubscribeUse,webinar_id|id,\App\Models\Api\WebinarReport,webinar_id|id,\Illuminate\Notifications\DatabaseNotification,webinar_id|id,\App\Models\SpecialOffer,webinar_id|id,\App\Models\Api\WebinarChapter,webinar_id|id,\App\Models\Translation\WebinarTranslation,webinar_id|id,\App\Models\DiscountCourse,course_id|id,\App\Models\Api\WebinarAssignment,webinar_id|id,\App\Models\Api\BundleWebinar,webinar_id|id,\App\Models\CourseNoticeboard,webinar_id|id,\App\Models\Api\CourseForum,webinar_id|id,\App\Models\Api\Certificate,webinar_id|id,\App\Models\Noticeboard,webinar_id|id,\App\Models\WebinarExtraDescription,webinar_id|id,\App\Models\UpcomingCourse,webinar_id|id,\App\Models\InstallmentSpecificationItem,webinar_id|id,\App\Models\InstallmentOrder,webinar_id|id,\App\Models\CashbackRuleSpecificationItem,webinar_id|id,\App\Models\Waitlist,webinar_id|id,\App\Models\Gift,webinar_id|id,\App\Models\RelatedCourse,course_id|id,\App\Models\PurchaseNotificationRoleGroupContent,webinar_id|id,\App\Models\CoursePersonalNote,course_id|id,\App\Models\AbandonedCartRuleSpecificationItem,webinar_id|id,\App\Models\CourseLearningLastView,webinar_id|id,\App\Models\Api\Accounting,webinar_id|id,\App\Models\CommentReport,webinar_id
     * @mixin Api_IH_Webinar_QB
     */
    class Webinar extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property int $chapter_id
     * @property int|null $grade
     * @property int|null $pass_grade
     * @property int|null $deadline
     * @property int|null $attempts
     * @property bool $check_previous_parts
     * @property int|null $access_after_day
     * @property string $status
     * @property int $created_at
     * @property-read string $assignment_status attribute
     * @property-read null $avg_grade attribute
     * @property-read null|void $deadline_time attribute
     * @property-read $description attribute
     * @property-read $failed_count attribute
     * @property-read null $first_submission attribute
     * @property-read null $last_submission attribute
     * @property-read null $min_grade attribute
     * @property-read $passed_count attribute
     * @property-read $pending_count attribute
     * @property-read $submissions_count attribute
     * @property-read $title attribute
     * @property-read int $used_attempts_count attribute
     * @property ModelsWebinarAssignmentHistory $assignmentHistory
     * @method HasOne|_IH_WebinarAssignmentHistory_QB assignmentHistory()
     * @property _IH_WebinarAssignmentAttachment_C|ModelsWebinarAssignmentAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_WebinarAssignmentAttachment_QB attachments()
     * @property ModelsWebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property ModelsWebinarAssignmentHistory $getAssignmentHistoryByStudentId
     * @method HasOne|_IH_WebinarAssignmentHistory_QB getAssignmentHistoryByStudentId()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getFailedCountAttribute
     * @property-read int $get_failed_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getFailedCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getPassedCountAttribute
     * @property-read int $get_passed_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getPassedCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $getPendingCountAttribute
     * @property-read int $get_pending_count_attribute_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB getPendingCountAttribute()
     * @property _IH_WebinarAssignmentHistory_C|ModelsWebinarAssignmentHistory[] $instructorAssignmentHistories
     * @property-read int $instructor_assignment_histories_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB instructorAssignmentHistories()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property ModelsWebinarAssignmentHistory $userAssignmentHistory
     * @method HasOne|_IH_WebinarAssignmentHistory_QB userAssignmentHistory()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarAssignment_QB onWriteConnection()
     * @method Api_IH_WebinarAssignment_QB newQuery()
     * @method static Api_IH_WebinarAssignment_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignment_QB query()
     * @method static Api_IH_WebinarAssignment_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignment_C|WebinarAssignment[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Translation\WebinarAssignmentTranslation,webinar_assignment_id|id,\App\Models\Api\WebinarAssignmentAttachment,assignment_id|id,\App\Models\Api\WebinarAssignmentHistory,assignment_id
     * @mixin Api_IH_WebinarAssignment_QB
     */
    class WebinarAssignment extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $assignment_id
     * @property string $title
     * @property string $attach
     * @method static Api_IH_WebinarAssignmentAttachment_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentAttachment_QB newQuery()
     * @method static Api_IH_WebinarAssignmentAttachment_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentAttachment_QB query()
     * @method static Api_IH_WebinarAssignmentAttachment_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] all()
     * @ownLinks assignment_id,\App\Models\Api\WebinarAssignment,id
     * @mixin Api_IH_WebinarAssignmentAttachment_QB
     */
    class WebinarAssignmentAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int $instructor_id
     * @property int $student_id
     * @property int $assignment_id
     * @property int|null $grade
     * @property string $status
     * @property int $created_at
     * @property-read null $first_submission attribute
     * @property-read null $last_submission attribute
     * @property-read int $used_attempts_count attribute
     * @property ModelsWebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property _IH_WebinarAssignmentHistoryMessage_C|ModelsWebinarAssignmentHistoryMessage[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_WebinarAssignmentHistoryMessage_QB messages()
     * @method static Api_IH_WebinarAssignmentHistory_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentHistory_QB newQuery()
     * @method static Api_IH_WebinarAssignmentHistory_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentHistory_QB query()
     * @method static Api_IH_WebinarAssignmentHistory_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] all()
     * @ownLinks assignment_id,\App\Models\Api\WebinarAssignment,id
     * @foreignLinks id,\App\Models\Api\WebinarAssignmentHistoryMessage,assignment_history_id
     * @mixin Api_IH_WebinarAssignmentHistory_QB
     */
    class WebinarAssignmentHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $assignment_history_id
     * @property int $sender_id
     * @property string $message
     * @property string|null $file_title
     * @property string|null $file_path
     * @property int $created_at
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB onWriteConnection()
     * @method Api_IH_WebinarAssignmentHistoryMessage_QB newQuery()
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB query()
     * @method static Api_IH_WebinarAssignmentHistoryMessage_QB with(array|string $relations)
     * @method Api_IH_WebinarAssignmentHistoryMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] all()
     * @ownLinks assignment_history_id,\App\Models\Api\WebinarAssignmentHistory,id
     * @mixin Api_IH_WebinarAssignmentHistoryMessage_QB
     */
    class WebinarAssignmentHistoryMessage extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $webinar_id
     * @property string $type
     * @property int|null $order
     * @property string $status
     * @property int $created_at
     * @property bool $check_all_contents_pass
     * @property-read null $chapter_content attribute
     * @property-read array $details attribute
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|ModelsWebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property _IH_WebinarChapterItem_C|ModelsWebinarChapterItem[] $chapterItems
     * @property-read int $chapter_items_count
     * @method HasMany|_IH_WebinarChapterItem_QB chapterItems()
     * @property Models_IH_File_C|ModelsFile[] $files
     * @property-read int $files_count
     * @method HasMany|Models_IH_File_QB files()
     * @property Models_IH_Quiz_C|ModelsQuiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property Models_IH_Session_C|ModelsSession[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property Models_IH_TextLesson_C|ModelsTextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|Models_IH_TextLesson_QB textLessons()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarChapter_QB onWriteConnection()
     * @method Api_IH_WebinarChapter_QB newQuery()
     * @method static Api_IH_WebinarChapter_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarChapter_QB query()
     * @method static Api_IH_WebinarChapter_QB with(array|string $relations)
     * @method Api_IH_WebinarChapter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarChapter_C|WebinarChapter[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\File,chapter_id|id,\App\Models\Api\TextLesson,chapter_id|id,\App\Models\Api\Session,chapter_id|id,\App\Models\Api\Quiz,chapter_id|id,\App\Models\Translation\WebinarChapterTranslation,webinar_chapter_id|id,\App\Models\Api\WebinarChapterItem,chapter_id|id,\App\Models\Api\WebinarAssignment,chapter_id
     * @mixin Api_IH_WebinarChapter_QB
     */
    class WebinarChapter extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $chapter_id
     * @property int $item_id
     * @property string $type
     * @property int|null $order
     * @property int $created_at
     * @property ModelsWebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property ModelsWebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property ModelsFile $file
     * @method BelongsTo|Models_IH_File_QB file()
     * @property ModelsQuiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @property ModelsSession $session
     * @method BelongsTo|_IH_Session_QB session()
     * @property ModelsTextLesson $textLesson
     * @method BelongsTo|Models_IH_TextLesson_QB textLesson()
     * @method static Api_IH_WebinarChapterItem_QB onWriteConnection()
     * @method Api_IH_WebinarChapterItem_QB newQuery()
     * @method static Api_IH_WebinarChapterItem_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarChapterItem_QB query()
     * @method static Api_IH_WebinarChapterItem_QB with(array|string $relations)
     * @method Api_IH_WebinarChapterItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarChapterItem_C|WebinarChapterItem[] all()
     * @ownLinks chapter_id,\App\Models\Api\WebinarChapter,id
     * @mixin Api_IH_WebinarChapterItem_QB
     */
    class WebinarChapterItem extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $webinar_id
     * @property string $reason
     * @property string $message
     * @property int $created_at
     * @property-read array $details attribute
     * @property Webinar $webinar
     * @method BelongsTo|Api_IH_Webinar_QB webinar()
     * @method static _IH_WebinarReport_QB onWriteConnection()
     * @method _IH_WebinarReport_QB newQuery()
     * @method static _IH_WebinarReport_QB on(null|string $connection = null)
     * @method static _IH_WebinarReport_QB query()
     * @method static _IH_WebinarReport_QB with(array|string $relations)
     * @method _IH_WebinarReport_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarReport_C|WebinarReport[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_WebinarReport_QB
     */
    class WebinarReport extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $creator_user_id
     * @property int $content_quality
     * @property int $instructor_skills
     * @property int $purchase_worth
     * @property int $support_quality
     * @property int $rates
     * @property string|null $description
     * @property int $created_at
     * @property string $status
     * @property int|null $bundle_id
     * @property-read bool|null $auth attribute
     * @property-read array $details attribute
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property _IH_Comment_C|ModelsComment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ModelsWebinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static Api_IH_WebinarReview_QB onWriteConnection()
     * @method Api_IH_WebinarReview_QB newQuery()
     * @method static Api_IH_WebinarReview_QB on(null|string $connection = null)
     * @method static Api_IH_WebinarReview_QB query()
     * @method static Api_IH_WebinarReview_QB with(array|string $relations)
     * @method Api_IH_WebinarReview_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static Api_IH_WebinarReview_C|WebinarReview[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\Comment,review_id
     * @mixin Api_IH_WebinarReview_QB
     */
    class WebinarReview extends Model {}
}