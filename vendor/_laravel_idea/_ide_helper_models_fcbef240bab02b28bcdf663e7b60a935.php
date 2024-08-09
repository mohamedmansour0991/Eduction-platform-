<?php //f375355920100f784854a5cf8bb1d4f2
/** @noinspection all */

namespace App\Models {

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\BelongsToMany;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\MorphTo;
    use Illuminate\Database\Eloquent\Relations\MorphToMany;
    use Illuminate\Notifications\DatabaseNotification;
    use Illuminate\Notifications\DatabaseNotificationCollection;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleSpecificationItem_C;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleSpecificationItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleUserGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRuleUserGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRule_C;
    use LaravelIdea\Helper\App\Models\_IH_AbandonedCartRule_QB;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_C;
    use LaravelIdea\Helper\App\Models\_IH_Accounting_QB;
    use LaravelIdea\Helper\App\Models\_IH_AdvertisingBanner_C;
    use LaravelIdea\Helper\App\Models\_IH_AdvertisingBanner_QB;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateCode_C;
    use LaravelIdea\Helper\App\Models\_IH_AffiliateCode_QB;
    use LaravelIdea\Helper\App\Models\_IH_Affiliate_C;
    use LaravelIdea\Helper\App\Models\_IH_Affiliate_QB;
    use LaravelIdea\Helper\App\Models\_IH_AgoraHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_AgoraHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_AiContentTemplate_C;
    use LaravelIdea\Helper\App\Models\_IH_AiContentTemplate_QB;
    use LaravelIdea\Helper\App\Models\_IH_AiContent_C;
    use LaravelIdea\Helper\App\Models\_IH_AiContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_Badge_C;
    use LaravelIdea\Helper\App\Models\_IH_Badge_QB;
    use LaravelIdea\Helper\App\Models\_IH_BecomeInstructor_C;
    use LaravelIdea\Helper\App\Models\_IH_BecomeInstructor_QB;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_BlogCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Blog_C;
    use LaravelIdea\Helper\App\Models\_IH_Blog_QB;
    use LaravelIdea\Helper\App\Models\_IH_BundleFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_BundleFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_BundleWebinar_C;
    use LaravelIdea\Helper\App\Models\_IH_BundleWebinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_Bundle_C;
    use LaravelIdea\Helper\App\Models\_IH_Bundle_QB;
    use LaravelIdea\Helper\App\Models\_IH_CartDiscount_C;
    use LaravelIdea\Helper\App\Models\_IH_CartDiscount_QB;
    use LaravelIdea\Helper\App\Models\_IH_Cart_C;
    use LaravelIdea\Helper\App\Models\_IH_Cart_QB;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRuleSpecificationItem_C;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRuleSpecificationItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRuleUserGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRuleUserGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRule_C;
    use LaravelIdea\Helper\App\Models\_IH_CashbackRule_QB;
    use LaravelIdea\Helper\App\Models\_IH_Category_C;
    use LaravelIdea\Helper\App\Models\_IH_Category_QB;
    use LaravelIdea\Helper\App\Models\_IH_CertificateTemplate_C;
    use LaravelIdea\Helper\App\Models\_IH_CertificateTemplate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_C;
    use LaravelIdea\Helper\App\Models\_IH_Certificate_QB;
    use LaravelIdea\Helper\App\Models\_IH_CommentReport_C;
    use LaravelIdea\Helper\App\Models\_IH_CommentReport_QB;
    use LaravelIdea\Helper\App\Models\_IH_Comment_C;
    use LaravelIdea\Helper\App\Models\_IH_Comment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Contact_C;
    use LaravelIdea\Helper\App\Models\_IH_Contact_QB;
    use LaravelIdea\Helper\App\Models\_IH_ContentDeleteRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_ContentDeleteRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForumAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseForum_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearningLastView_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearningLastView_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearning_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseLearning_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboardStatus_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboardStatus_QB;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_C;
    use LaravelIdea\Helper\App\Models\_IH_CourseNoticeboard_QB;
    use LaravelIdea\Helper\App\Models\_IH_CoursePersonalNote_C;
    use LaravelIdea\Helper\App\Models\_IH_CoursePersonalNote_QB;
    use LaravelIdea\Helper\App\Models\_IH_Currency_C;
    use LaravelIdea\Helper\App\Models\_IH_Currency_QB;
    use LaravelIdea\Helper\App\Models\_IH_DeleteAccountRequest_C;
    use LaravelIdea\Helper\App\Models\_IH_DeleteAccountRequest_QB;
    use LaravelIdea\Helper\App\Models\_IH_DiscountBundle_C;
    use LaravelIdea\Helper\App\Models\_IH_DiscountBundle_QB;
    use LaravelIdea\Helper\App\Models\_IH_DiscountCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_DiscountCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_DiscountCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_DiscountCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_DiscountGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_DiscountGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_DiscountUser_C;
    use LaravelIdea\Helper\App\Models\_IH_DiscountUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_Discount_C;
    use LaravelIdea\Helper\App\Models\_IH_Discount_QB;
    use LaravelIdea\Helper\App\Models\_IH_Faq_C;
    use LaravelIdea\Helper\App\Models\_IH_Faq_QB;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_C;
    use LaravelIdea\Helper\App\Models\_IH_Favorite_QB;
    use LaravelIdea\Helper\App\Models\_IH_FeatureWebinar_C;
    use LaravelIdea\Helper\App\Models\_IH_FeatureWebinar_QB;
    use LaravelIdea\Helper\App\Models\_IH_File_C;
    use LaravelIdea\Helper\App\Models\_IH_File_QB;
    use LaravelIdea\Helper\App\Models\_IH_FilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_FilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_Filter_C;
    use LaravelIdea\Helper\App\Models\_IH_Filter_QB;
    use LaravelIdea\Helper\App\Models\_IH_FloatingBar_C;
    use LaravelIdea\Helper\App\Models\_IH_FloatingBar_QB;
    use LaravelIdea\Helper\App\Models\_IH_Follow_C;
    use LaravelIdea\Helper\App\Models\_IH_Follow_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormFieldOption_C;
    use LaravelIdea\Helper\App\Models\_IH_FormFieldOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormField_C;
    use LaravelIdea\Helper\App\Models\_IH_FormField_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormRoleUserGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_FormRoleUserGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormSubmissionItem_C;
    use LaravelIdea\Helper\App\Models\_IH_FormSubmissionItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_FormSubmission_C;
    use LaravelIdea\Helper\App\Models\_IH_FormSubmission_QB;
    use LaravelIdea\Helper\App\Models\_IH_Form_C;
    use LaravelIdea\Helper\App\Models\_IH_Form_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumFeaturedTopic_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumFeaturedTopic_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumRecommendedTopicItem_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumRecommendedTopicItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumRecommendedTopic_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumRecommendedTopic_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicBookmark_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicBookmark_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicLike_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicLike_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicPost_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicReport_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopicReport_QB;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_C;
    use LaravelIdea\Helper\App\Models\_IH_ForumTopic_QB;
    use LaravelIdea\Helper\App\Models\_IH_Forum_C;
    use LaravelIdea\Helper\App\Models\_IH_Forum_QB;
    use LaravelIdea\Helper\App\Models\_IH_Gift_C;
    use LaravelIdea\Helper\App\Models\_IH_Gift_QB;
    use LaravelIdea\Helper\App\Models\_IH_GroupRegistrationPackage_C;
    use LaravelIdea\Helper\App\Models\_IH_GroupRegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_GroupUser_C;
    use LaravelIdea\Helper\App\Models\_IH_GroupUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_Group_C;
    use LaravelIdea\Helper\App\Models\_IH_Group_QB;
    use LaravelIdea\Helper\App\Models\_IH_HomePageStatistic_C;
    use LaravelIdea\Helper\App\Models\_IH_HomePageStatistic_QB;
    use LaravelIdea\Helper\App\Models\_IH_HomeSection_C;
    use LaravelIdea\Helper\App\Models\_IH_HomeSection_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderPayment_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrderPayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentReminder_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentReminder_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentSpecificationItem_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentSpecificationItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentStep_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentStep_QB;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentUserGroup_C;
    use LaravelIdea\Helper\App\Models\_IH_InstallmentUserGroup_QB;
    use LaravelIdea\Helper\App\Models\_IH_Installment_C;
    use LaravelIdea\Helper\App\Models\_IH_Installment_QB;
    use LaravelIdea\Helper\App\Models\_IH_IpRestriction_C;
    use LaravelIdea\Helper\App\Models\_IH_IpRestriction_QB;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_C;
    use LaravelIdea\Helper\App\Models\_IH_MeetingTime_QB;
    use LaravelIdea\Helper\App\Models\_IH_Meeting_C;
    use LaravelIdea\Helper\App\Models\_IH_Meeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_NavbarButton_C;
    use LaravelIdea\Helper\App\Models\_IH_NavbarButton_QB;
    use LaravelIdea\Helper\App\Models\_IH_NewsletterHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_NewsletterHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_Newsletter_C;
    use LaravelIdea\Helper\App\Models\_IH_Newsletter_QB;
    use LaravelIdea\Helper\App\Models\_IH_NoticeboardStatus_C;
    use LaravelIdea\Helper\App\Models\_IH_NoticeboardStatus_QB;
    use LaravelIdea\Helper\App\Models\_IH_Noticeboard_C;
    use LaravelIdea\Helper\App\Models\_IH_Noticeboard_QB;
    use LaravelIdea\Helper\App\Models\_IH_NotificationStatus_C;
    use LaravelIdea\Helper\App\Models\_IH_NotificationStatus_QB;
    use LaravelIdea\Helper\App\Models\_IH_NotificationTemplate_C;
    use LaravelIdea\Helper\App\Models\_IH_NotificationTemplate_QB;
    use LaravelIdea\Helper\App\Models\_IH_Notification_C;
    use LaravelIdea\Helper\App\Models\_IH_Notification_QB;
    use LaravelIdea\Helper\App\Models\_IH_OfflineBankSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_OfflineBankSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_OfflineBank_C;
    use LaravelIdea\Helper\App\Models\_IH_OfflineBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_OfflinePayment_C;
    use LaravelIdea\Helper\App\Models\_IH_OfflinePayment_QB;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_C;
    use LaravelIdea\Helper\App\Models\_IH_OrderItem_QB;
    use LaravelIdea\Helper\App\Models\_IH_Order_C;
    use LaravelIdea\Helper\App\Models\_IH_Order_QB;
    use LaravelIdea\Helper\App\Models\_IH_Page_C;
    use LaravelIdea\Helper\App\Models\_IH_Page_QB;
    use LaravelIdea\Helper\App\Models\_IH_PaymentChannel_C;
    use LaravelIdea\Helper\App\Models\_IH_PaymentChannel_QB;
    use LaravelIdea\Helper\App\Models\_IH_Payout_C;
    use LaravelIdea\Helper\App\Models\_IH_Payout_QB;
    use LaravelIdea\Helper\App\Models\_IH_Permission_C;
    use LaravelIdea\Helper\App\Models\_IH_Permission_QB;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_C;
    use LaravelIdea\Helper\App\Models\_IH_Prerequisite_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadgeContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadge_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductBadge_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductDiscount_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFaq_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFile_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductFilter_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductFilter_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductMedia_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductOrder_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecificationMultiValue_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecificationMultiValue_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSelectedSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecificationCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecificationCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecificationMultiValue_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecificationMultiValue_QB;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_ProductSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_Product_C;
    use LaravelIdea\Helper\App\Models\_IH_Product_QB;
    use LaravelIdea\Helper\App\Models\_IH_Promotion_C;
    use LaravelIdea\Helper\App\Models\_IH_Promotion_QB;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotificationHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotificationHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotificationRoleGroupContent_C;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotificationRoleGroupContent_QB;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotification_C;
    use LaravelIdea\Helper\App\Models\_IH_PurchaseNotification_QB;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_C;
    use LaravelIdea\Helper\App\Models\_IH_Purchase_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestionsAnswer_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesQuestion_QB;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_C;
    use LaravelIdea\Helper\App\Models\_IH_QuizzesResult_QB;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_C;
    use LaravelIdea\Helper\App\Models\_IH_Quiz_QB;
    use LaravelIdea\Helper\App\Models\_IH_Region_C;
    use LaravelIdea\Helper\App\Models\_IH_Region_QB;
    use LaravelIdea\Helper\App\Models\_IH_RegistrationPackage_C;
    use LaravelIdea\Helper\App\Models\_IH_RegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_RelatedCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_C;
    use LaravelIdea\Helper\App\Models\_IH_ReserveMeeting_QB;
    use LaravelIdea\Helper\App\Models\_IH_RewardAccounting_C;
    use LaravelIdea\Helper\App\Models\_IH_RewardAccounting_QB;
    use LaravelIdea\Helper\App\Models\_IH_Reward_C;
    use LaravelIdea\Helper\App\Models\_IH_Reward_QB;
    use LaravelIdea\Helper\App\Models\_IH_Role_C;
    use LaravelIdea\Helper\App\Models\_IH_Role_QB;
    use LaravelIdea\Helper\App\Models\_IH_SaleLog_C;
    use LaravelIdea\Helper\App\Models\_IH_SaleLog_QB;
    use LaravelIdea\Helper\App\Models\_IH_Sale_C;
    use LaravelIdea\Helper\App\Models\_IH_Sale_QB;
    use LaravelIdea\Helper\App\Models\_IH_Section_C;
    use LaravelIdea\Helper\App\Models\_IH_Section_QB;
    use LaravelIdea\Helper\App\Models\_IH_SelectedInstallmentStep_C;
    use LaravelIdea\Helper\App\Models\_IH_SelectedInstallmentStep_QB;
    use LaravelIdea\Helper\App\Models\_IH_SelectedInstallment_C;
    use LaravelIdea\Helper\App\Models\_IH_SelectedInstallment_QB;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_C;
    use LaravelIdea\Helper\App\Models\_IH_SessionRemind_QB;
    use LaravelIdea\Helper\App\Models\_IH_Session_C;
    use LaravelIdea\Helper\App\Models\_IH_Session_QB;
    use LaravelIdea\Helper\App\Models\_IH_Setting_C;
    use LaravelIdea\Helper\App\Models\_IH_Setting_QB;
    use LaravelIdea\Helper\App\Models\_IH_SpecialOffer_C;
    use LaravelIdea\Helper\App\Models\_IH_SpecialOffer_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeRemind_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeRemind_QB;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_C;
    use LaravelIdea\Helper\App\Models\_IH_SubscribeUse_QB;
    use LaravelIdea\Helper\App\Models\_IH_Subscribe_C;
    use LaravelIdea\Helper\App\Models\_IH_Subscribe_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportConversation_QB;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_C;
    use LaravelIdea\Helper\App\Models\_IH_SupportDepartment_QB;
    use LaravelIdea\Helper\App\Models\_IH_Support_C;
    use LaravelIdea\Helper\App\Models\_IH_Support_QB;
    use LaravelIdea\Helper\App\Models\_IH_Tag_C;
    use LaravelIdea\Helper\App\Models\_IH_Tag_QB;
    use LaravelIdea\Helper\App\Models\_IH_Testimonial_C;
    use LaravelIdea\Helper\App\Models\_IH_Testimonial_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLessonAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_C;
    use LaravelIdea\Helper\App\Models\_IH_TextLesson_QB;
    use LaravelIdea\Helper\App\Models\_IH_TicketUser_C;
    use LaravelIdea\Helper\App\Models\_IH_TicketUser_QB;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_C;
    use LaravelIdea\Helper\App\Models\_IH_Ticket_QB;
    use LaravelIdea\Helper\App\Models\_IH_TrendCategory_C;
    use LaravelIdea\Helper\App\Models\_IH_TrendCategory_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseFilterOption_C;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseFilterOption_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseFollower_C;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseFollower_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseReport_C;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourseReport_QB;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourse_C;
    use LaravelIdea\Helper\App\Models\_IH_UpcomingCourse_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_C;
    use LaravelIdea\Helper\App\Models\_IH_UserBadge_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserBankSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_UserBankSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserBank_C;
    use LaravelIdea\Helper\App\Models\_IH_UserBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserCommission_C;
    use LaravelIdea\Helper\App\Models\_IH_UserCommission_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserCookieSecurity_C;
    use LaravelIdea\Helper\App\Models\_IH_UserCookieSecurity_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserFormField_C;
    use LaravelIdea\Helper\App\Models\_IH_UserFormField_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_C;
    use LaravelIdea\Helper\App\Models\_IH_UserLoginHistory_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_C;
    use LaravelIdea\Helper\App\Models\_IH_UserMeta_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_C;
    use LaravelIdea\Helper\App\Models\_IH_UserOccupation_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_C;
    use LaravelIdea\Helper\App\Models\_IH_UserProfileAttachment_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserRegistrationPackage_C;
    use LaravelIdea\Helper\App\Models\_IH_UserRegistrationPackage_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBankSpecification_C;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBankSpecification_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBank_C;
    use LaravelIdea\Helper\App\Models\_IH_UserSelectedBank_QB;
    use LaravelIdea\Helper\App\Models\_IH_UserZoomApi_C;
    use LaravelIdea\Helper\App\Models\_IH_UserZoomApi_QB;
    use LaravelIdea\Helper\App\Models\_IH_Verification_C;
    use LaravelIdea\Helper\App\Models\_IH_Verification_QB;
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
    use LaravelIdea\Helper\App\Models\_IH_WebinarReport_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReport_QB;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_C;
    use LaravelIdea\Helper\App\Models\_IH_WebinarReview_QB;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_C;
    use LaravelIdea\Helper\App\Models\_IH_Webinar_QB;
    use LaravelIdea\Helper\Illuminate\Notifications\_IH_DatabaseNotification_QB;
    
    /**
     * @property int $id
     * @property string $action
     * @property int|null $discount_id
     * @property int $action_cycle
     * @property float|null $minimum_cart_amount
     * @property float|null $maximum_cart_amount
     * @property int|null $start_at
     * @property int|null $end_at
     * @property bool $enable
     * @property int $created_at
     * @property string $target_type
     * @property string|null $target
     * @property bool $repeat_action
     * @property int|null $repeat_action_count
     * @property-read $title attribute
     * @property _IH_Bundle_C|Bundle[] $bundles
     * @property-read int $bundles_count
     * @method BelongsToMany|_IH_Bundle_QB bundles()
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property Discount|null $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] $specificationItems
     * @property-read int $specification_items_count
     * @method HasMany|_IH_AbandonedCartRuleSpecificationItem_QB specificationItems()
     * @property _IH_Group_C|Group[] $userGroups
     * @property-read int $user_groups_count
     * @method BelongsToMany|_IH_Group_QB userGroups()
     * @property _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] $usersAndGroups
     * @property-read int $users_and_groups_count
     * @method HasMany|_IH_AbandonedCartRuleUserGroup_QB usersAndGroups()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method BelongsToMany|_IH_Webinar_QB webinars()
     * @method static _IH_AbandonedCartRule_QB onWriteConnection()
     * @method _IH_AbandonedCartRule_QB newQuery()
     * @method static _IH_AbandonedCartRule_QB on(null|string $connection = null)
     * @method static _IH_AbandonedCartRule_QB query()
     * @method static _IH_AbandonedCartRule_QB with(array|string $relations)
     * @method _IH_AbandonedCartRule_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AbandonedCartRule_C|AbandonedCartRule[] all()
     * @ownLinks discount_id,\App\Models\Discount,id
     * @foreignLinks id,\App\Models\Translation\AbandonedCartRuleTranslation,abandoned_cart_rule_id|id,\App\Models\AbandonedCartRuleUserGroup,abandoned_cart_rule_id|id,\App\Models\AbandonedCartRuleSpecificationItem,abandoned_cart_rule_id
     * @mixin _IH_AbandonedCartRule_QB
     */
    class AbandonedCartRule extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $cart_rule_id
     * @property string $rule_action
     * @property string $type
     * @property int $created_at
     * @method static _IH_AbandonedCartRuleHistory_QB onWriteConnection()
     * @method _IH_AbandonedCartRuleHistory_QB newQuery()
     * @method static _IH_AbandonedCartRuleHistory_QB on(null|string $connection = null)
     * @method static _IH_AbandonedCartRuleHistory_QB query()
     * @method static _IH_AbandonedCartRuleHistory_QB with(array|string $relations)
     * @method _IH_AbandonedCartRuleHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AbandonedCartRuleHistory_C|AbandonedCartRuleHistory[] all()
     * @ownLinks 
     * @mixin _IH_AbandonedCartRuleHistory_QB
     */
    class AbandonedCartRuleHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $abandoned_cart_rule_id
     * @property int|null $category_id
     * @property int|null $instructor_id
     * @property int|null $seller_id
     * @property int|null $webinar_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @method static _IH_AbandonedCartRuleSpecificationItem_QB onWriteConnection()
     * @method _IH_AbandonedCartRuleSpecificationItem_QB newQuery()
     * @method static _IH_AbandonedCartRuleSpecificationItem_QB on(null|string $connection = null)
     * @method static _IH_AbandonedCartRuleSpecificationItem_QB query()
     * @method static _IH_AbandonedCartRuleSpecificationItem_QB with(array|string $relations)
     * @method _IH_AbandonedCartRuleSpecificationItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AbandonedCartRuleSpecificationItem_C|AbandonedCartRuleSpecificationItem[] all()
     * @ownLinks abandoned_cart_rule_id,\App\Models\AbandonedCartRule,id|category_id,\App\Models\Api\Category,id|webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id
     * @mixin _IH_AbandonedCartRuleSpecificationItem_QB
     */
    class AbandonedCartRuleSpecificationItem extends Model {}
    
    /**
     * @property int $id
     * @property int $abandoned_cart_rule_id
     * @property int|null $group_id
     * @property int|null $user_id
     * @method static _IH_AbandonedCartRuleUserGroup_QB onWriteConnection()
     * @method _IH_AbandonedCartRuleUserGroup_QB newQuery()
     * @method static _IH_AbandonedCartRuleUserGroup_QB on(null|string $connection = null)
     * @method static _IH_AbandonedCartRuleUserGroup_QB query()
     * @method static _IH_AbandonedCartRuleUserGroup_QB with(array|string $relations)
     * @method _IH_AbandonedCartRuleUserGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AbandonedCartRuleUserGroup_C|AbandonedCartRuleUserGroup[] all()
     * @ownLinks abandoned_cart_rule_id,\App\Models\AbandonedCartRule,id|group_id,\App\Models\Group,id
     * @mixin _IH_AbandonedCartRuleUserGroup_QB
     */
    class AbandonedCartRuleUserGroup extends Model {}
    
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
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property MeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property OrderItem|null $orderItem
     * @method BelongsTo|_IH_OrderItem_QB orderItem()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Webinar|null $webinar
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
     * @property string $position
     * @property int $size
     * @property string $link
     * @property bool $published
     * @property int $created_at
     * @property-read $image attribute
     * @property-read $title attribute
     * @method static _IH_AdvertisingBanner_QB onWriteConnection()
     * @method _IH_AdvertisingBanner_QB newQuery()
     * @method static _IH_AdvertisingBanner_QB on(null|string $connection = null)
     * @method static _IH_AdvertisingBanner_QB query()
     * @method static _IH_AdvertisingBanner_QB with(array|string $relations)
     * @method _IH_AdvertisingBanner_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AdvertisingBanner_C|AdvertisingBanner[] all()
     * @foreignLinks id,\App\Models\Translation\AdvertisingBannerTranslation,advertising_banner_id
     * @mixin _IH_AdvertisingBanner_QB
     */
    class AdvertisingBanner extends Model {}
    
    /**
     * @property int $id
     * @property int $affiliate_user_id
     * @property int $referred_user_id
     * @property int $created_at
     * @method static _IH_Affiliate_QB onWriteConnection()
     * @method _IH_Affiliate_QB newQuery()
     * @method static _IH_Affiliate_QB on(null|string $connection = null)
     * @method static _IH_Affiliate_QB query()
     * @method static _IH_Affiliate_QB with(array|string $relations)
     * @method _IH_Affiliate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Affiliate_C|Affiliate[] all()
     * @ownLinks 
     * @mixin _IH_Affiliate_QB
     */
    class Affiliate extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $code
     * @property int $created_at
     * @method static _IH_AffiliateCode_QB onWriteConnection()
     * @method _IH_AffiliateCode_QB newQuery()
     * @method static _IH_AffiliateCode_QB on(null|string $connection = null)
     * @method static _IH_AffiliateCode_QB query()
     * @method static _IH_AffiliateCode_QB with(array|string $relations)
     * @method _IH_AffiliateCode_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AffiliateCode_C|AffiliateCode[] all()
     * @ownLinks 
     * @mixin _IH_AffiliateCode_QB
     */
    class AffiliateCode extends Model {}
    
    /**
     * @property int $id
     * @property int $session_id
     * @property int $start_at
     * @property int|null $end_at
     * @property Session $session
     * @method BelongsTo|_IH_Session_QB session()
     * @method static _IH_AgoraHistory_QB onWriteConnection()
     * @method _IH_AgoraHistory_QB newQuery()
     * @method static _IH_AgoraHistory_QB on(null|string $connection = null)
     * @method static _IH_AgoraHistory_QB query()
     * @method static _IH_AgoraHistory_QB with(array|string $relations)
     * @method _IH_AgoraHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AgoraHistory_C|AgoraHistory[] all()
     * @ownLinks session_id,\App\Models\Api\Session,id
     * @mixin _IH_AgoraHistory_QB
     */
    class AgoraHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $service_type
     * @property int|null $service_id
     * @property string|null $keyword
     * @property string|null $language
     * @property string|null $prompt
     * @property string|null $result
     * @property int $created_at
     * @property AiContentTemplate|null $template
     * @method BelongsTo|_IH_AiContentTemplate_QB template()
     * @method static _IH_AiContent_QB onWriteConnection()
     * @method _IH_AiContent_QB newQuery()
     * @method static _IH_AiContent_QB on(null|string $connection = null)
     * @method static _IH_AiContent_QB query()
     * @method static _IH_AiContent_QB with(array|string $relations)
     * @method _IH_AiContent_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AiContent_C|AiContent[] all()
     * @ownLinks service_id,\App\Models\AiContentTemplate,id
     * @mixin _IH_AiContent_QB
     */
    class AiContent extends Model {}
    
    /**
     * @property int $id
     * @property string $type
     * @property bool $enable_length
     * @property int|null $length
     * @property string|null $image_size
     * @property bool $enable
     * @property int $created_at
     * @property-read $prompt attribute
     * @property-read $title attribute
     * @property _IH_AiContent_C|AiContent[] $contents
     * @property-read int $contents_count
     * @method HasMany|_IH_AiContent_QB contents()
     * @method static _IH_AiContentTemplate_QB onWriteConnection()
     * @method _IH_AiContentTemplate_QB newQuery()
     * @method static _IH_AiContentTemplate_QB on(null|string $connection = null)
     * @method static _IH_AiContentTemplate_QB query()
     * @method static _IH_AiContentTemplate_QB with(array|string $relations)
     * @method _IH_AiContentTemplate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_AiContentTemplate_C|AiContentTemplate[] all()
     * @foreignLinks id,\App\Models\Translation\AiContentTemplateTranslation,ai_content_template_id|id,\App\Models\AiContent,service_id
     * @mixin _IH_AiContentTemplate_QB
     */
    class AiContentTemplate extends Model {}
    
    /**
     * @property int $id
     * @property string $image
     * @property string $type
     * @property string $condition
     * @property int $created_at
     * @property int|null $score
     * @property-read $description attribute
     * @property-read $title attribute
     * @method static _IH_Badge_QB onWriteConnection()
     * @method _IH_Badge_QB newQuery()
     * @method static _IH_Badge_QB on(null|string $connection = null)
     * @method static _IH_Badge_QB query()
     * @method static _IH_Badge_QB with(array|string $relations)
     * @method _IH_Badge_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Badge_C|Badge[] all()
     * @foreignLinks id,\App\Models\UserBadge,badge_id|id,\App\Models\Translation\BadgeTranslation,badge_id
     * @mixin _IH_Badge_QB
     */
    class Badge extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string|null $certificate
     * @property string|null $description
     * @property string $status
     * @property int $created_at
     * @property string $role
     * @property int|null $package_id
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @method static _IH_BecomeInstructor_QB onWriteConnection()
     * @method _IH_BecomeInstructor_QB newQuery()
     * @method static _IH_BecomeInstructor_QB on(null|string $connection = null)
     * @method static _IH_BecomeInstructor_QB query()
     * @method static _IH_BecomeInstructor_QB with(array|string $relations)
     * @method _IH_BecomeInstructor_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BecomeInstructor_C|BecomeInstructor[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\UserFormField,become_instructor_id|id,\App\Models\OrderItem,become_instructor_id
     * @mixin _IH_BecomeInstructor_QB
     */
    class BecomeInstructor extends Model {}
    
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
     * @property-read $content attribute
     * @property-read $description attribute
     * @property-read $meta_description attribute
     * @property-read $title attribute
     * @property BlogCategory|null $category
     * @method BelongsTo|_IH_BlogCategory_QB category()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|_IH_ProductBadgeContent_QB productBadgeContent()
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
     * @property-read $title attribute
     * @property _IH_Blog_C|Blog[] $blog
     * @property-read int $blog_count
     * @method HasMany|_IH_Blog_QB blog()
     * @method static _IH_BlogCategory_QB onWriteConnection()
     * @method _IH_BlogCategory_QB newQuery()
     * @method static _IH_BlogCategory_QB on(null|string $connection = null)
     * @method static _IH_BlogCategory_QB query()
     * @method static _IH_BlogCategory_QB with(array|string $relations)
     * @method _IH_BlogCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BlogCategory_C|BlogCategory[] all()
     * @foreignLinks id,\App\Models\Api\Blog,category_id|id,\App\Models\Translation\BlogCategoryTranslation,blog_category_id
     * @mixin _IH_BlogCategory_QB
     */
    class BlogCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $bundle_id
     * @property int $filter_option_id
     * @method static _IH_BundleFilterOption_QB onWriteConnection()
     * @method _IH_BundleFilterOption_QB newQuery()
     * @method static _IH_BundleFilterOption_QB on(null|string $connection = null)
     * @method static _IH_BundleFilterOption_QB query()
     * @method static _IH_BundleFilterOption_QB with(array|string $relations)
     * @method _IH_BundleFilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_BundleFilterOption_C|BundleFilterOption[] all()
     * @ownLinks filter_option_id,\App\Models\FilterOption,id
     * @mixin _IH_BundleFilterOption_QB
     */
    class BundleFilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $bundle_id
     * @property int $webinar_id
     * @property int|null $order
     * @property Bundle $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
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
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentPayment()
     * @property ProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property ReserveMeeting|null $reserveMeeting
     * @method BelongsTo|_IH_ReserveMeeting_QB reserveMeeting()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Ticket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property Webinar $webinar
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
     * @property int $discount_id
     * @property bool $show_only_on_empty_cart
     * @property bool $enable
     * @property int $created_at
     * @property-read $subtitle attribute
     * @property-read $title attribute
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @method static _IH_CartDiscount_QB onWriteConnection()
     * @method _IH_CartDiscount_QB newQuery()
     * @method static _IH_CartDiscount_QB on(null|string $connection = null)
     * @method static _IH_CartDiscount_QB query()
     * @method static _IH_CartDiscount_QB with(array|string $relations)
     * @method _IH_CartDiscount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CartDiscount_C|CartDiscount[] all()
     * @ownLinks discount_id,\App\Models\Discount,id
     * @foreignLinks id,\App\Models\Translation\CartDiscountTranslation,cart_discount_id
     * @mixin _IH_CartDiscount_QB
     */
    class CartDiscount extends Model {}
    
    /**
     * @property int $id
     * @property string $target_type
     * @property string|null $target
     * @property int|null $start_date
     * @property int|null $end_date
     * @property float|null $amount
     * @property string|null $amount_type
     * @property bool $apply_cashback_per_item
     * @property float|null $max_amount
     * @property float|null $min_amount
     * @property bool $enable
     * @property int $created_at
     * @property-read $title attribute
     * @property _IH_Bundle_C|Bundle[] $bundles
     * @property-read int $bundles_count
     * @method BelongsToMany|_IH_Bundle_QB bundles()
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_RegistrationPackage_C|RegistrationPackage[] $registrationPackages
     * @property-read int $registration_packages_count
     * @method BelongsToMany|_IH_RegistrationPackage_QB registrationPackages()
     * @property _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] $specificationItems
     * @property-read int $specification_items_count
     * @method HasMany|_IH_CashbackRuleSpecificationItem_QB specificationItems()
     * @property _IH_Subscribe_C|Subscribe[] $subscribes
     * @property-read int $subscribes_count
     * @method BelongsToMany|_IH_Subscribe_QB subscribes()
     * @property _IH_Group_C|Group[] $userGroups
     * @property-read int $user_groups_count
     * @method BelongsToMany|_IH_Group_QB userGroups()
     * @property _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] $usersAndGroups
     * @property-read int $users_and_groups_count
     * @method HasMany|_IH_CashbackRuleUserGroup_QB usersAndGroups()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method BelongsToMany|_IH_Webinar_QB webinars()
     * @method static _IH_CashbackRule_QB onWriteConnection()
     * @method _IH_CashbackRule_QB newQuery()
     * @method static _IH_CashbackRule_QB on(null|string $connection = null)
     * @method static _IH_CashbackRule_QB query()
     * @method static _IH_CashbackRule_QB with(array|string $relations)
     * @method _IH_CashbackRule_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CashbackRule_C|CashbackRule[] all()
     * @foreignLinks id,\App\Models\Translation\CashbackRuleTranslation,cashback_rule_id|id,\App\Models\CashbackRuleSpecificationItem,cashback_rule_id|id,\App\Models\CashbackRuleUserGroup,cashback_rule_id
     * @mixin _IH_CashbackRule_QB
     */
    class CashbackRule extends Model {}
    
    /**
     * @property int $id
     * @property int $cashback_rule_id
     * @property int|null $category_id
     * @property int|null $instructor_id
     * @property int|null $seller_id
     * @property int|null $webinar_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @property int|null $subscribe_id
     * @property int|null $registration_package_id
     * @method static _IH_CashbackRuleSpecificationItem_QB onWriteConnection()
     * @method _IH_CashbackRuleSpecificationItem_QB newQuery()
     * @method static _IH_CashbackRuleSpecificationItem_QB on(null|string $connection = null)
     * @method static _IH_CashbackRuleSpecificationItem_QB query()
     * @method static _IH_CashbackRuleSpecificationItem_QB with(array|string $relations)
     * @method _IH_CashbackRuleSpecificationItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CashbackRuleSpecificationItem_C|CashbackRuleSpecificationItem[] all()
     * @ownLinks cashback_rule_id,\App\Models\CashbackRule,id|category_id,\App\Models\Api\Category,id|webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id
     * @mixin _IH_CashbackRuleSpecificationItem_QB
     */
    class CashbackRuleSpecificationItem extends Model {}
    
    /**
     * @property int $id
     * @property int $cashback_rule_id
     * @property int|null $group_id
     * @property int|null $user_id
     * @method static _IH_CashbackRuleUserGroup_QB onWriteConnection()
     * @method _IH_CashbackRuleUserGroup_QB newQuery()
     * @method static _IH_CashbackRuleUserGroup_QB on(null|string $connection = null)
     * @method static _IH_CashbackRuleUserGroup_QB query()
     * @method static _IH_CashbackRuleUserGroup_QB with(array|string $relations)
     * @method _IH_CashbackRuleUserGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CashbackRuleUserGroup_C|CashbackRuleUserGroup[] all()
     * @ownLinks cashback_rule_id,\App\Models\CashbackRule,id|group_id,\App\Models\Group,id
     * @mixin _IH_CashbackRuleUserGroup_QB
     */
    class CashbackRuleUserGroup extends Model {}
    
    /**
     * @property int $id
     * @property int|null $parent_id
     * @property int|null $order
     * @property string|null $icon
     * @property string $slug
     * @property-read $title attribute
     * @property Category|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Filter_C|Filter[] $filters
     * @property-read int $filters_count
     * @method HasMany|_IH_Filter_QB filters()
     * @property _IH_UserOccupation_C|UserOccupation[] $userOccupations
     * @property-read int $user_occupations_count
     * @method HasMany|_IH_UserOccupation_QB userOccupations()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method HasMany|_IH_Webinar_QB webinars()
     * @method static _IH_Category_QB onWriteConnection()
     * @method _IH_Category_QB newQuery()
     * @method static _IH_Category_QB on(null|string $connection = null)
     * @method static _IH_Category_QB query()
     * @method static _IH_Category_QB with(array|string $relations)
     * @method _IH_Category_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Category_C|Category[] all()
     * @foreignLinks id,\App\Models\Filter,category_id|id,\App\Models\Api\Webinar,category_id|id,\App\Models\Api\TrendCategory,category_id|id,\App\Models\UserOccupation,category_id|id,\App\Models\Translation\CategoryTranslation,category_id|id,\App\Models\DiscountCategory,category_id|id,\App\Models\UpcomingCourse,category_id|id,\App\Models\InstallmentSpecificationItem,category_id|id,\App\Models\CashbackRuleSpecificationItem,category_id|id,\App\Models\AbandonedCartRuleSpecificationItem,category_id
     * @mixin _IH_Category_QB
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
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Quiz $quiz
     * @method HasOne|_IH_Quiz_QB quiz()
     * @property QuizzesResult $quizzesResult
     * @method HasOne|_IH_QuizzesResult_QB quizzesResult()
     * @property Webinar|null $webinar
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
     * @property string $image
     * @property string|null $position_x
     * @property string|null $position_y
     * @property string|null $font_size
     * @property string|null $text_color
     * @property string $status
     * @property int $created_at
     * @property int|null $updated_at
     * @property-read $body attribute
     * @property-read $elements attribute
     * @property-read $rtl attribute
     * @property-read $title attribute
     * @method static _IH_CertificateTemplate_QB onWriteConnection()
     * @method _IH_CertificateTemplate_QB newQuery()
     * @method static _IH_CertificateTemplate_QB on(null|string $connection = null)
     * @method static _IH_CertificateTemplate_QB query()
     * @method static _IH_CertificateTemplate_QB with(array|string $relations)
     * @method _IH_CertificateTemplate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CertificateTemplate_C|CertificateTemplate[] all()
     * @foreignLinks id,\App\Models\Translation\CertificateTemplateTranslation,certificate_template_id
     * @mixin _IH_CertificateTemplate_QB
     */
    class CertificateTemplate extends Model {}
    
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
     * @property Blog|null $blog
     * @method BelongsTo|_IH_Blog_QB blog()
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ProductReview|null $productReview
     * @method BelongsTo|_IH_ProductReview_QB productReview()
     * @property _IH_Comment_C|Comment[] $replies
     * @property-read int $replies_count
     * @method HasMany|_IH_Comment_QB replies()
     * @property WebinarReview|null $review
     * @method BelongsTo|_IH_WebinarReview_QB review()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Comment_QB onWriteConnection()
     * @method _IH_Comment_QB newQuery()
     * @method static _IH_Comment_QB on(null|string $connection = null)
     * @method static _IH_Comment_QB query()
     * @method static _IH_Comment_QB with(array|string $relations)
     * @method _IH_Comment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Comment_C|Comment[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|review_id,\App\Models\Api\WebinarReview,id|reply_id,\App\Models\Api\Comment,id|product_id,\App\Models\Api\Product,id|upcoming_course_id,\App\Models\UpcomingCourse,id|product_review_id,\App\Models\ProductReview,id
     * @foreignLinks id,\App\Models\Api\Comment,reply_id|id,\App\Models\CommentReport,comment_id
     * @mixin _IH_Comment_QB
     */
    class Comment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $blog_id
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property int $comment_id
     * @property string $message
     * @property int $created_at
     * @property int|null $product_id
     * @property Blog|null $blog
     * @method BelongsTo|_IH_Blog_QB blog()
     * @property Comment $comment
     * @method BelongsTo|_IH_Comment_QB comment()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_CommentReport_QB onWriteConnection()
     * @method _IH_CommentReport_QB newQuery()
     * @method static _IH_CommentReport_QB on(null|string $connection = null)
     * @method static _IH_CommentReport_QB query()
     * @method static _IH_CommentReport_QB with(array|string $relations)
     * @method _IH_CommentReport_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CommentReport_C|CommentReport[] all()
     * @ownLinks comment_id,\App\Models\Api\Comment,id|product_id,\App\Models\Api\Product,id|webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_CommentReport_QB
     */
    class CommentReport extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property string $email
     * @property string $phone
     * @property string $subject
     * @property string $message
     * @property string $status
     * @property int $created_at
     * @property string|null $reply
     * @method static _IH_Contact_QB onWriteConnection()
     * @method _IH_Contact_QB newQuery()
     * @method static _IH_Contact_QB on(null|string $connection = null)
     * @method static _IH_Contact_QB query()
     * @method static _IH_Contact_QB with(array|string $relations)
     * @method _IH_Contact_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Contact_C|Contact[] all()
     * @mixin _IH_Contact_QB
     */
    class Contact extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property string|null $description
     * @property string|null $content_title
     * @property int|null $content_published_date
     * @property int|null $customers_count
     * @property float|null $sales
     * @property string $status
     * @property int $created_at
     * @property Bundle $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Blog $post
     * @method BelongsTo|_IH_Blog_QB post()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_ContentDeleteRequest_QB onWriteConnection()
     * @method _IH_ContentDeleteRequest_QB newQuery()
     * @method static _IH_ContentDeleteRequest_QB on(null|string $connection = null)
     * @method static _IH_ContentDeleteRequest_QB query()
     * @method static _IH_ContentDeleteRequest_QB with(array|string $relations)
     * @method _IH_ContentDeleteRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ContentDeleteRequest_C|ContentDeleteRequest[] all()
     * @ownLinks 
     * @mixin _IH_ContentDeleteRequest_QB
     */
    class ContentDeleteRequest extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $user_id
     * @property string $title
     * @property string $description
     * @property string|null $attach
     * @property bool $pin
     * @property int $created_at
     * @property _IH_CourseForumAnswer_C|CourseForumAnswer[] $answers
     * @property-read int $answers_count
     * @method HasMany|_IH_CourseForumAnswer_QB answers()
     * @property Webinar $webinar
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
     * @method static _IH_CourseForumAnswer_QB onWriteConnection()
     * @method _IH_CourseForumAnswer_QB newQuery()
     * @method static _IH_CourseForumAnswer_QB on(null|string $connection = null)
     * @method static _IH_CourseForumAnswer_QB query()
     * @method static _IH_CourseForumAnswer_QB with(array|string $relations)
     * @method _IH_CourseForumAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseForumAnswer_C|CourseForumAnswer[] all()
     * @ownLinks forum_id,\App\Models\Api\CourseForum,id
     * @mixin _IH_CourseForumAnswer_QB
     */
    class CourseForumAnswer extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $text_lesson_id
     * @property int|null $file_id
     * @property int|null $session_id
     * @property int $created_at
     * @method static _IH_CourseLearning_QB onWriteConnection()
     * @method _IH_CourseLearning_QB newQuery()
     * @method static _IH_CourseLearning_QB on(null|string $connection = null)
     * @method static _IH_CourseLearning_QB query()
     * @method static _IH_CourseLearning_QB with(array|string $relations)
     * @method _IH_CourseLearning_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseLearning_C|CourseLearning[] all()
     * @ownLinks text_lesson_id,\App\Models\Api\TextLesson,id|file_id,\App\Models\Api\File,id|session_id,\App\Models\Api\Session,id
     * @mixin _IH_CourseLearning_QB
     */
    class CourseLearning extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $item_id
     * @property string $item_type
     * @property int $visited_at
     * @property int $webinar_id
     * @method static _IH_CourseLearningLastView_QB onWriteConnection()
     * @method _IH_CourseLearningLastView_QB newQuery()
     * @method static _IH_CourseLearningLastView_QB on(null|string $connection = null)
     * @method static _IH_CourseLearningLastView_QB query()
     * @method static _IH_CourseLearningLastView_QB with(array|string $relations)
     * @method _IH_CourseLearningLastView_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseLearningLastView_C|CourseLearningLastView[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_CourseLearningLastView_QB
     */
    class CourseLearningLastView extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property string $color
     * @property string $title
     * @property string $message
     * @property int $created_at
     * @property CourseNoticeboardStatus $noticeboardStatus
     * @method HasOne|_IH_CourseNoticeboardStatus_QB noticeboardStatus()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_CourseNoticeboard_QB onWriteConnection()
     * @method _IH_CourseNoticeboard_QB newQuery()
     * @method static _IH_CourseNoticeboard_QB on(null|string $connection = null)
     * @method static _IH_CourseNoticeboard_QB query()
     * @method static _IH_CourseNoticeboard_QB with(array|string $relations)
     * @method _IH_CourseNoticeboard_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseNoticeboard_C|CourseNoticeboard[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\CourseNoticeboardStatus,noticeboard_id
     * @mixin _IH_CourseNoticeboard_QB
     */
    class CourseNoticeboard extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $noticeboard_id
     * @property int $seen_at
     * @method static _IH_CourseNoticeboardStatus_QB onWriteConnection()
     * @method _IH_CourseNoticeboardStatus_QB newQuery()
     * @method static _IH_CourseNoticeboardStatus_QB on(null|string $connection = null)
     * @method static _IH_CourseNoticeboardStatus_QB query()
     * @method static _IH_CourseNoticeboardStatus_QB with(array|string $relations)
     * @method _IH_CourseNoticeboardStatus_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CourseNoticeboardStatus_C|CourseNoticeboardStatus[] all()
     * @ownLinks noticeboard_id,\App\Models\CourseNoticeboard,id
     * @mixin _IH_CourseNoticeboardStatus_QB
     */
    class CourseNoticeboardStatus extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $course_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property string|null $note
     * @property string|null $attachment
     * @property int $created_at
     * @property Webinar $course
     * @method BelongsTo|_IH_Webinar_QB course()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @method static _IH_CoursePersonalNote_QB onWriteConnection()
     * @method _IH_CoursePersonalNote_QB newQuery()
     * @method static _IH_CoursePersonalNote_QB on(null|string $connection = null)
     * @method static _IH_CoursePersonalNote_QB query()
     * @method static _IH_CoursePersonalNote_QB with(array|string $relations)
     * @method _IH_CoursePersonalNote_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_CoursePersonalNote_C|CoursePersonalNote[] all()
     * @ownLinks course_id,\App\Models\Api\Webinar,id
     * @mixin _IH_CoursePersonalNote_QB
     */
    class CoursePersonalNote extends Model {}
    
    /**
     * @property int $id
     * @property string $currency
     * @property string $currency_position
     * @property string $currency_separator
     * @property int|null $currency_decimal
     * @property float|null $exchange_rate
     * @property int|null $order
     * @property int $created_at
     * @method static _IH_Currency_QB onWriteConnection()
     * @method _IH_Currency_QB newQuery()
     * @method static _IH_Currency_QB on(null|string $connection = null)
     * @method static _IH_Currency_QB query()
     * @method static _IH_Currency_QB with(array|string $relations)
     * @method _IH_Currency_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Currency_C|Currency[] all()
     * @mixin _IH_Currency_QB
     */
    class Currency extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $created_at
     * @method static _IH_DeleteAccountRequest_QB onWriteConnection()
     * @method _IH_DeleteAccountRequest_QB newQuery()
     * @method static _IH_DeleteAccountRequest_QB on(null|string $connection = null)
     * @method static _IH_DeleteAccountRequest_QB query()
     * @method static _IH_DeleteAccountRequest_QB with(array|string $relations)
     * @method _IH_DeleteAccountRequest_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DeleteAccountRequest_C|DeleteAccountRequest[] all()
     * @ownLinks 
     * @mixin _IH_DeleteAccountRequest_QB
     */
    class DeleteAccountRequest extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property string $name
     * @property int|null $percent
     * @property int|null $amount
     * @property int $count
     * @property int $created_at
     * @property int $expired_at
     * @property string $title
     * @property string $code
     * @property string $type
     * @property string|null $subtitle
     * @property string $discount_type
     * @property string $source
     * @property int|null $max_amount
     * @property int|null $minimum_order
     * @property bool $for_first_purchase
     * @property bool $private
     * @property string|null $product_type
     * @property _IH_DiscountBundle_C|DiscountBundle[] $discountBundles
     * @property-read int $discount_bundles_count
     * @method HasMany|_IH_DiscountBundle_QB discountBundles()
     * @property _IH_DiscountCategory_C|DiscountCategory[] $discountCategories
     * @property-read int $discount_categories_count
     * @method HasMany|_IH_DiscountCategory_QB discountCategories()
     * @property _IH_DiscountCourse_C|DiscountCourse[] $discountCourses
     * @property-read int $discount_courses_count
     * @method HasMany|_IH_DiscountCourse_QB discountCourses()
     * @property _IH_DiscountGroup_C|DiscountGroup[] $discountGroups
     * @property-read int $discount_groups_count
     * @method HasMany|_IH_DiscountGroup_QB discountGroups()
     * @property DiscountUser $discountUsers
     * @method HasOne|_IH_DiscountUser_QB discountUsers()
     * @method static _IH_Discount_QB onWriteConnection()
     * @method _IH_Discount_QB newQuery()
     * @method static _IH_Discount_QB on(null|string $connection = null)
     * @method static _IH_Discount_QB query()
     * @method static _IH_Discount_QB with(array|string $relations)
     * @method _IH_Discount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Discount_C|Discount[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\DiscountUser,discount_id|id,\App\Models\DiscountCourse,discount_id|id,\App\Models\DiscountGroup,discount_id|id,\App\Models\DiscountCategory,discount_id|id,\App\Models\DiscountBundle,discount_id|id,\App\Models\CartDiscount,discount_id|id,\App\Models\AbandonedCartRule,discount_id|id,\App\Models\OrderItem,discount_id|id,\App\Models\Api\ProductOrder,discount_id
     * @mixin _IH_Discount_QB
     */
    class Discount extends Model {}
    
    /**
     * @property int $id
     * @property int $discount_id
     * @property int $bundle_id
     * @property int $created_at
     * @property Bundle $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @method static _IH_DiscountBundle_QB onWriteConnection()
     * @method _IH_DiscountBundle_QB newQuery()
     * @method static _IH_DiscountBundle_QB on(null|string $connection = null)
     * @method static _IH_DiscountBundle_QB query()
     * @method static _IH_DiscountBundle_QB with(array|string $relations)
     * @method _IH_DiscountBundle_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountBundle_C|DiscountBundle[] all()
     * @ownLinks discount_id,\App\Models\Discount,id
     * @mixin _IH_DiscountBundle_QB
     */
    class DiscountBundle extends Model {}
    
    /**
     * @property int $id
     * @property int $discount_id
     * @property int $category_id
     * @property int $created_at
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @method static _IH_DiscountCategory_QB onWriteConnection()
     * @method _IH_DiscountCategory_QB newQuery()
     * @method static _IH_DiscountCategory_QB on(null|string $connection = null)
     * @method static _IH_DiscountCategory_QB query()
     * @method static _IH_DiscountCategory_QB with(array|string $relations)
     * @method _IH_DiscountCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountCategory_C|DiscountCategory[] all()
     * @ownLinks discount_id,\App\Models\Discount,id|category_id,\App\Models\Api\Category,id
     * @mixin _IH_DiscountCategory_QB
     */
    class DiscountCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $discount_id
     * @property int $course_id
     * @property int $created_at
     * @property Webinar $course
     * @method BelongsTo|_IH_Webinar_QB course()
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @method static _IH_DiscountCourse_QB onWriteConnection()
     * @method _IH_DiscountCourse_QB newQuery()
     * @method static _IH_DiscountCourse_QB on(null|string $connection = null)
     * @method static _IH_DiscountCourse_QB query()
     * @method static _IH_DiscountCourse_QB with(array|string $relations)
     * @method _IH_DiscountCourse_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountCourse_C|DiscountCourse[] all()
     * @ownLinks discount_id,\App\Models\Discount,id|course_id,\App\Models\Api\Webinar,id
     * @mixin _IH_DiscountCourse_QB
     */
    class DiscountCourse extends Model {}
    
    /**
     * @property int $id
     * @property int $discount_id
     * @property int $group_id
     * @property int $created_at
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @property Group $group
     * @method BelongsTo|_IH_Group_QB group()
     * @method static _IH_DiscountGroup_QB onWriteConnection()
     * @method _IH_DiscountGroup_QB newQuery()
     * @method static _IH_DiscountGroup_QB on(null|string $connection = null)
     * @method static _IH_DiscountGroup_QB query()
     * @method static _IH_DiscountGroup_QB with(array|string $relations)
     * @method _IH_DiscountGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountGroup_C|DiscountGroup[] all()
     * @ownLinks discount_id,\App\Models\Discount,id|group_id,\App\Models\Group,id
     * @mixin _IH_DiscountGroup_QB
     */
    class DiscountGroup extends Model {}
    
    /**
     * @property int $id
     * @property int $discount_id
     * @property int $user_id
     * @property int $created_at
     * @property int $count
     * @property Discount $discount
     * @method BelongsTo|_IH_Discount_QB discount()
     * @method static _IH_DiscountUser_QB onWriteConnection()
     * @method _IH_DiscountUser_QB newQuery()
     * @method static _IH_DiscountUser_QB on(null|string $connection = null)
     * @method static _IH_DiscountUser_QB query()
     * @method static _IH_DiscountUser_QB with(array|string $relations)
     * @method _IH_DiscountUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_DiscountUser_C|DiscountUser[] all()
     * @ownLinks discount_id,\App\Models\Discount,id
     * @mixin _IH_DiscountUser_QB
     */
    class DiscountUser extends Model {}
    
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
     * @property Webinar $webinar
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
     * @property Webinar $webinar
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
     * @property-read $description attribute
     * @property-read $title attribute
     * @property WebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
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
     * @property int $category_id
     * @property-read $title attribute
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_FilterOption_C|FilterOption[] $options
     * @property-read int $options_count
     * @method HasMany|_IH_FilterOption_QB options()
     * @method static _IH_Filter_QB onWriteConnection()
     * @method _IH_Filter_QB newQuery()
     * @method static _IH_Filter_QB on(null|string $connection = null)
     * @method static _IH_Filter_QB query()
     * @method static _IH_Filter_QB with(array|string $relations)
     * @method _IH_Filter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Filter_C|Filter[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @foreignLinks id,\App\Models\FilterOption,filter_id|id,\App\Models\Translation\FilterTranslation,filter_id
     * @mixin _IH_Filter_QB
     */
    class Filter extends Model {}
    
    /**
     * @property int $id
     * @property int $filter_id
     * @property int|null $order
     * @property-read $title attribute
     * @method static _IH_FilterOption_QB onWriteConnection()
     * @method _IH_FilterOption_QB newQuery()
     * @method static _IH_FilterOption_QB on(null|string $connection = null)
     * @method static _IH_FilterOption_QB query()
     * @method static _IH_FilterOption_QB with(array|string $relations)
     * @method _IH_FilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FilterOption_C|FilterOption[] all()
     * @ownLinks filter_id,\App\Models\Filter,id
     * @foreignLinks id,\App\Models\WebinarFilterOption,filter_option_id|id,\App\Models\Translation\FilterOptionTranslation,filter_option_id|id,\App\Models\BundleFilterOption,filter_option_id|id,\App\Models\UpcomingCourseFilterOption,filter_option_id
     * @mixin _IH_FilterOption_QB
     */
    class FilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int|null $start_at
     * @property int|null $end_at
     * @property string|null $title_color
     * @property string|null $description_color
     * @property string|null $icon
     * @property string|null $background_color
     * @property string|null $background_image
     * @property string|null $btn_url
     * @property string|null $btn_color
     * @property string|null $btn_text_color
     * @property int|null $bar_height
     * @property string $position
     * @property bool $fixed
     * @property bool $enable
     * @property-read $btn_text attribute
     * @property-read $description attribute
     * @property-read $title attribute
     * @method static _IH_FloatingBar_QB onWriteConnection()
     * @method _IH_FloatingBar_QB newQuery()
     * @method static _IH_FloatingBar_QB on(null|string $connection = null)
     * @method static _IH_FloatingBar_QB query()
     * @method static _IH_FloatingBar_QB with(array|string $relations)
     * @method _IH_FloatingBar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FloatingBar_C|FloatingBar[] all()
     * @foreignLinks id,\App\Models\Translation\FloatingBarTranslation,floating_bar_id
     * @mixin _IH_FloatingBar_QB
     */
    class FloatingBar extends Model {}
    
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
     * @property string $url
     * @property string|null $cover
     * @property string|null $image
     * @property bool $enable_login
     * @property bool $enable_resubmission
     * @property bool $enable_welcome_message
     * @property bool $enable_tank_you_message
     * @property string|null $welcome_message_image
     * @property string|null $tank_you_message_image
     * @property int|null $start_date
     * @property int|null $end_date
     * @property bool $enable
     * @property int $created_at
     * @property-read $description attribute
     * @property-read $heading_title attribute
     * @property-read $tank_you_message_description attribute
     * @property-read $tank_you_message_title attribute
     * @property-read $title attribute
     * @property-read $welcome_message_description attribute
     * @property-read $welcome_message_title attribute
     * @property _IH_FormField_C|FormField[] $fields
     * @property-read int $fields_count
     * @method HasMany|_IH_FormField_QB fields()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @property _IH_FormRoleUserGroup_C|FormRoleUserGroup[] $rolesAndUersAndGroups
     * @property-read int $roles_and_uers_and_groups_count
     * @method HasMany|_IH_FormRoleUserGroup_QB rolesAndUersAndGroups()
     * @property _IH_FormSubmission_C|FormSubmission[] $submissions
     * @property-read int $submissions_count
     * @method HasMany|_IH_FormSubmission_QB submissions()
     * @property _IH_Group_C|Group[] $userGroups
     * @property-read int $user_groups_count
     * @method BelongsToMany|_IH_Group_QB userGroups()
     * @method static _IH_Form_QB onWriteConnection()
     * @method _IH_Form_QB newQuery()
     * @method static _IH_Form_QB on(null|string $connection = null)
     * @method static _IH_Form_QB query()
     * @method static _IH_Form_QB with(array|string $relations)
     * @method _IH_Form_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Form_C|Form[] all()
     * @foreignLinks id,\App\Models\Translation\FormTranslation,form_id|id,\App\Models\FormRoleUserGroup,form_id|id,\App\Models\FormField,form_id|id,\App\Models\FormSubmission,form_id
     * @mixin _IH_Form_QB
     */
    class Form extends Model {}
    
    /**
     * @property int $id
     * @property int $form_id
     * @property string $type
     * @property int|null $order
     * @property bool $required
     * @property-read $title attribute
     * @property _IH_FormFieldOption_C|FormFieldOption[] $options
     * @property-read int $options_count
     * @method HasMany|_IH_FormFieldOption_QB options()
     * @method static _IH_FormField_QB onWriteConnection()
     * @method _IH_FormField_QB newQuery()
     * @method static _IH_FormField_QB on(null|string $connection = null)
     * @method static _IH_FormField_QB query()
     * @method static _IH_FormField_QB with(array|string $relations)
     * @method _IH_FormField_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormField_C|FormField[] all()
     * @ownLinks form_id,\App\Models\Form,id
     * @foreignLinks id,\App\Models\Translation\FormFieldTranslation,form_field_id|id,\App\Models\FormFieldOption,form_field_id|id,\App\Models\FormSubmissionItem,form_field_id|id,\App\Models\UserFormField,form_field_id
     * @mixin _IH_FormField_QB
     */
    class FormField extends Model {}
    
    /**
     * @property int $id
     * @property int $form_field_id
     * @property int|null $order
     * @property-read $title attribute
     * @method static _IH_FormFieldOption_QB onWriteConnection()
     * @method _IH_FormFieldOption_QB newQuery()
     * @method static _IH_FormFieldOption_QB on(null|string $connection = null)
     * @method static _IH_FormFieldOption_QB query()
     * @method static _IH_FormFieldOption_QB with(array|string $relations)
     * @method _IH_FormFieldOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormFieldOption_C|FormFieldOption[] all()
     * @ownLinks form_field_id,\App\Models\FormField,id
     * @foreignLinks id,\App\Models\Translation\FormFieldOptionTranslation,form_field_option_id
     * @mixin _IH_FormFieldOption_QB
     */
    class FormFieldOption extends Model {}
    
    /**
     * @property int $id
     * @property int $form_id
     * @property int|null $role_id
     * @property int|null $user_id
     * @property int|null $group_id
     * @property Group|null $group
     * @method BelongsTo|_IH_Group_QB group()
     * @property Role|null $role
     * @method BelongsTo|_IH_Role_QB role()
     * @method static _IH_FormRoleUserGroup_QB onWriteConnection()
     * @method _IH_FormRoleUserGroup_QB newQuery()
     * @method static _IH_FormRoleUserGroup_QB on(null|string $connection = null)
     * @method static _IH_FormRoleUserGroup_QB query()
     * @method static _IH_FormRoleUserGroup_QB with(array|string $relations)
     * @method _IH_FormRoleUserGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormRoleUserGroup_C|FormRoleUserGroup[] all()
     * @ownLinks form_id,\App\Models\Form,id|role_id,\App\Models\Role,id|group_id,\App\Models\Group,id
     * @mixin _IH_FormRoleUserGroup_QB
     */
    class FormRoleUserGroup extends Model {}
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int $form_id
     * @property int $created_at
     * @property Form $form
     * @method BelongsTo|_IH_Form_QB form()
     * @property _IH_FormSubmissionItem_C|FormSubmissionItem[] $items
     * @property-read int $items_count
     * @method HasMany|_IH_FormSubmissionItem_QB items()
     * @method static _IH_FormSubmission_QB onWriteConnection()
     * @method _IH_FormSubmission_QB newQuery()
     * @method static _IH_FormSubmission_QB on(null|string $connection = null)
     * @method static _IH_FormSubmission_QB query()
     * @method static _IH_FormSubmission_QB with(array|string $relations)
     * @method _IH_FormSubmission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormSubmission_C|FormSubmission[] all()
     * @ownLinks form_id,\App\Models\Form,id
     * @foreignLinks id,\App\Models\FormSubmissionItem,submission_id
     * @mixin _IH_FormSubmission_QB
     */
    class FormSubmission extends Model {}
    
    /**
     * @property int $id
     * @property int $submission_id
     * @property int $form_field_id
     * @property string|null $value
     * @property FormField $field
     * @method BelongsTo|_IH_FormField_QB field()
     * @method static _IH_FormSubmissionItem_QB onWriteConnection()
     * @method _IH_FormSubmissionItem_QB newQuery()
     * @method static _IH_FormSubmissionItem_QB on(null|string $connection = null)
     * @method static _IH_FormSubmissionItem_QB query()
     * @method static _IH_FormSubmissionItem_QB with(array|string $relations)
     * @method _IH_FormSubmissionItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_FormSubmissionItem_C|FormSubmissionItem[] all()
     * @ownLinks submission_id,\App\Models\FormSubmission,id|form_field_id,\App\Models\FormField,id
     * @mixin _IH_FormSubmissionItem_QB
     */
    class FormSubmissionItem extends Model {}
    
    /**
     * @property int $id
     * @property string $slug
     * @property int|null $role_id
     * @property int|null $group_id
     * @property int|null $parent_id
     * @property string|null $icon
     * @property string|null $status
     * @property bool $close
     * @property int|null $order
     * @property-read $description attribute
     * @property-read $title attribute
     * @property Forum|null $parent
     * @method BelongsTo|_IH_Forum_QB parent()
     * @property _IH_ForumTopic_C|ForumTopic[] $topics
     * @property-read int $topics_count
     * @method HasMany|_IH_ForumTopic_QB topics()
     * @method static _IH_Forum_QB onWriteConnection()
     * @method _IH_Forum_QB newQuery()
     * @method static _IH_Forum_QB on(null|string $connection = null)
     * @method static _IH_Forum_QB query()
     * @method static _IH_Forum_QB with(array|string $relations)
     * @method _IH_Forum_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Forum_C|Forum[] all()
     * @ownLinks role_id,\App\Models\Role,id|group_id,\App\Models\Group,id
     * @foreignLinks id,\App\Models\Translation\ForumTranslation,forum_id|id,\App\Models\ForumTopic,forum_id
     * @mixin _IH_Forum_QB
     */
    class Forum extends Model {}
    
    /**
     * @property int $id
     * @property int $topic_id
     * @property string $icon
     * @property int $created_at
     * @property ForumTopic $topic
     * @method BelongsTo|_IH_ForumTopic_QB topic()
     * @method static _IH_ForumFeaturedTopic_QB onWriteConnection()
     * @method _IH_ForumFeaturedTopic_QB newQuery()
     * @method static _IH_ForumFeaturedTopic_QB on(null|string $connection = null)
     * @method static _IH_ForumFeaturedTopic_QB query()
     * @method static _IH_ForumFeaturedTopic_QB with(array|string $relations)
     * @method _IH_ForumFeaturedTopic_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumFeaturedTopic_C|ForumFeaturedTopic[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id
     * @mixin _IH_ForumFeaturedTopic_QB
     */
    class ForumFeaturedTopic extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $icon
     * @property int $created_at
     * @property _IH_ForumTopic_C|ForumTopic[] $topics
     * @property-read int $topics_count
     * @method BelongsToMany|_IH_ForumTopic_QB topics()
     * @method static _IH_ForumRecommendedTopic_QB onWriteConnection()
     * @method _IH_ForumRecommendedTopic_QB newQuery()
     * @method static _IH_ForumRecommendedTopic_QB on(null|string $connection = null)
     * @method static _IH_ForumRecommendedTopic_QB query()
     * @method static _IH_ForumRecommendedTopic_QB with(array|string $relations)
     * @method _IH_ForumRecommendedTopic_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumRecommendedTopic_C|ForumRecommendedTopic[] all()
     * @foreignLinks id,\App\Models\ForumRecommendedTopicItem,recommended_topic_id
     * @mixin _IH_ForumRecommendedTopic_QB
     */
    class ForumRecommendedTopic extends Model {}
    
    /**
     * @property int $id
     * @property int $recommended_topic_id
     * @property int $topic_id
     * @property int $created_at
     * @method static _IH_ForumRecommendedTopicItem_QB onWriteConnection()
     * @method _IH_ForumRecommendedTopicItem_QB newQuery()
     * @method static _IH_ForumRecommendedTopicItem_QB on(null|string $connection = null)
     * @method static _IH_ForumRecommendedTopicItem_QB query()
     * @method static _IH_ForumRecommendedTopicItem_QB with(array|string $relations)
     * @method _IH_ForumRecommendedTopicItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumRecommendedTopicItem_C|ForumRecommendedTopicItem[] all()
     * @ownLinks recommended_topic_id,\App\Models\ForumRecommendedTopic,id|topic_id,\App\Models\ForumTopic,id
     * @mixin _IH_ForumRecommendedTopicItem_QB
     */
    class ForumRecommendedTopicItem extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $forum_id
     * @property string $slug
     * @property string $title
     * @property string $description
     * @property bool $pin
     * @property bool $close
     * @property int $created_at
     * @property _IH_ForumTopicAttachment_C|ForumTopicAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_ForumTopicAttachment_QB attachments()
     * @property Forum $forum
     * @method BelongsTo|_IH_Forum_QB forum()
     * @property _IH_ForumTopicLike_C|ForumTopicLike[] $likes
     * @property-read int $likes_count
     * @method HasMany|_IH_ForumTopicLike_QB likes()
     * @property _IH_ForumTopicPost_C|ForumTopicPost[] $posts
     * @property-read int $posts_count
     * @method HasMany|_IH_ForumTopicPost_QB posts()
     * @method static _IH_ForumTopic_QB onWriteConnection()
     * @method _IH_ForumTopic_QB newQuery()
     * @method static _IH_ForumTopic_QB on(null|string $connection = null)
     * @method static _IH_ForumTopic_QB query()
     * @method static _IH_ForumTopic_QB with(array|string $relations)
     * @method _IH_ForumTopic_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopic_C|ForumTopic[] all()
     * @ownLinks forum_id,\App\Models\Forum,id
     * @foreignLinks id,\App\Models\ForumTopicAttachment,topic_id|id,\App\Models\ForumTopicPost,topic_id|id,\App\Models\ForumTopicReport,topic_id|id,\App\Models\ForumTopicBookmark,topic_id|id,\App\Models\ForumTopicLike,topic_id|id,\App\Models\ForumFeaturedTopic,topic_id|id,\App\Models\ForumRecommendedTopicItem,topic_id
     * @mixin _IH_ForumTopic_QB
     */
    class ForumTopic extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $topic_id
     * @property string $path
     * @method static _IH_ForumTopicAttachment_QB onWriteConnection()
     * @method _IH_ForumTopicAttachment_QB newQuery()
     * @method static _IH_ForumTopicAttachment_QB on(null|string $connection = null)
     * @method static _IH_ForumTopicAttachment_QB query()
     * @method static _IH_ForumTopicAttachment_QB with(array|string $relations)
     * @method _IH_ForumTopicAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopicAttachment_C|ForumTopicAttachment[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id
     * @mixin _IH_ForumTopicAttachment_QB
     */
    class ForumTopicAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $topic_id
     * @property int $created_at
     * @property ForumTopic $topic
     * @method BelongsTo|_IH_ForumTopic_QB topic()
     * @method static _IH_ForumTopicBookmark_QB onWriteConnection()
     * @method _IH_ForumTopicBookmark_QB newQuery()
     * @method static _IH_ForumTopicBookmark_QB on(null|string $connection = null)
     * @method static _IH_ForumTopicBookmark_QB query()
     * @method static _IH_ForumTopicBookmark_QB with(array|string $relations)
     * @method _IH_ForumTopicBookmark_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopicBookmark_C|ForumTopicBookmark[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id
     * @mixin _IH_ForumTopicBookmark_QB
     */
    class ForumTopicBookmark extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $topic_id
     * @property int|null $topic_post_id
     * @method static _IH_ForumTopicLike_QB onWriteConnection()
     * @method _IH_ForumTopicLike_QB newQuery()
     * @method static _IH_ForumTopicLike_QB on(null|string $connection = null)
     * @method static _IH_ForumTopicLike_QB query()
     * @method static _IH_ForumTopicLike_QB with(array|string $relations)
     * @method _IH_ForumTopicLike_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopicLike_C|ForumTopicLike[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id|topic_post_id,\App\Models\ForumTopicPost,id
     * @mixin _IH_ForumTopicLike_QB
     */
    class ForumTopicLike extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $topic_id
     * @property int|null $parent_id
     * @property string $description
     * @property string|null $attach
     * @property bool $pin
     * @property int $created_at
     * @property _IH_ForumTopicLike_C|ForumTopicLike[] $likes
     * @property-read int $likes_count
     * @method HasMany|_IH_ForumTopicLike_QB likes()
     * @property ForumTopicPost|null $parent
     * @method BelongsTo|_IH_ForumTopicPost_QB parent()
     * @property ForumTopic $topic
     * @method BelongsTo|_IH_ForumTopic_QB topic()
     * @method static _IH_ForumTopicPost_QB onWriteConnection()
     * @method _IH_ForumTopicPost_QB newQuery()
     * @method static _IH_ForumTopicPost_QB on(null|string $connection = null)
     * @method static _IH_ForumTopicPost_QB query()
     * @method static _IH_ForumTopicPost_QB with(array|string $relations)
     * @method _IH_ForumTopicPost_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopicPost_C|ForumTopicPost[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id|parent_id,\App\Models\ForumTopicPost,id
     * @foreignLinks id,\App\Models\ForumTopicPost,parent_id|id,\App\Models\ForumTopicReport,topic_post_id|id,\App\Models\ForumTopicLike,topic_post_id
     * @mixin _IH_ForumTopicPost_QB
     */
    class ForumTopicPost extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $topic_id
     * @property int|null $topic_post_id
     * @property string $message
     * @property int $created_at
     * @property ForumTopic|null $topic
     * @method BelongsTo|_IH_ForumTopic_QB topic()
     * @property ForumTopicPost|null $topicPost
     * @method BelongsTo|_IH_ForumTopicPost_QB topicPost()
     * @method static _IH_ForumTopicReport_QB onWriteConnection()
     * @method _IH_ForumTopicReport_QB newQuery()
     * @method static _IH_ForumTopicReport_QB on(null|string $connection = null)
     * @method static _IH_ForumTopicReport_QB query()
     * @method static _IH_ForumTopicReport_QB with(array|string $relations)
     * @method _IH_ForumTopicReport_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ForumTopicReport_C|ForumTopicReport[] all()
     * @ownLinks topic_id,\App\Models\ForumTopic,id|topic_post_id,\App\Models\ForumTopicPost,id
     * @mixin _IH_ForumTopicReport_QB
     */
    class ForumTopicReport extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property int|null $product_id
     * @property string $name
     * @property string $email
     * @property int|null $date
     * @property string|null $description
     * @property bool $viewed for show modal in recipient user panel
     * @property string $status
     * @property int $created_at
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Sale $sale
     * @method HasOne|_IH_Sale_QB sale()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Gift_QB onWriteConnection()
     * @method _IH_Gift_QB newQuery()
     * @method static _IH_Gift_QB on(null|string $connection = null)
     * @method static _IH_Gift_QB query()
     * @method static _IH_Gift_QB with(array|string $relations)
     * @method _IH_Gift_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Gift_C|Gift[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id
     * @foreignLinks id,\App\Models\Api\Cart,gift_id|id,\App\Models\OrderItem,gift_id|id,\App\Models\Api\ProductOrder,gift_id|id,\App\Models\Api\Sale,gift_id|id,\App\Models\Api\Accounting,gift_id
     * @mixin _IH_Gift_QB
     */
    class Gift extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property string|null $name
     * @property int|null $percent
     * @property int $created_at
     * @property int|null $discount
     * @property int|null $commission
     * @property string $status
     * @property _IH_UserCommission_C|UserCommission[] $commissions
     * @property-read int $commissions_count
     * @method HasMany|_IH_UserCommission_QB commissions()
     * @property GroupRegistrationPackage $groupRegistrationPackage
     * @method HasOne|_IH_GroupRegistrationPackage_QB groupRegistrationPackage()
     * @property _IH_GroupUser_C|GroupUser[] $groupUsers
     * @property-read int $group_users_count
     * @method HasMany|_IH_GroupUser_QB groupUsers()
     * @property _IH_GroupUser_C|GroupUser[] $users
     * @property-read int $users_count
     * @method HasMany|_IH_GroupUser_QB users()
     * @method static _IH_Group_QB onWriteConnection()
     * @method _IH_Group_QB newQuery()
     * @method static _IH_Group_QB on(null|string $connection = null)
     * @method static _IH_Group_QB query()
     * @method static _IH_Group_QB with(array|string $relations)
     * @method _IH_Group_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Group_C|Group[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\Api\GroupUser,group_id|id,\Illuminate\Notifications\DatabaseNotification,group_id|id,\App\Models\GroupRegistrationPackage,group_id|id,\App\Models\DiscountGroup,group_id|id,\App\Models\Forum,group_id|id,\App\Models\InstallmentUserGroup,group_id|id,\App\Models\CashbackRuleUserGroup,group_id|id,\App\Models\FormRoleUserGroup,group_id|id,\App\Models\PurchaseNotificationRoleGroupContent,group_id|id,\App\Models\AbandonedCartRuleUserGroup,group_id|id,\App\Models\UserCommission,user_group_id
     * @mixin _IH_Group_QB
     */
    class Group extends Model {}
    
    /**
     * @property int $id
     * @property int $group_id
     * @property int|null $instructors_count
     * @property int|null $students_count
     * @property int|null $courses_capacity
     * @property int|null $courses_count
     * @property int|null $meeting_count
     * @property string $status
     * @property int $created_at
     * @method static _IH_GroupRegistrationPackage_QB onWriteConnection()
     * @method _IH_GroupRegistrationPackage_QB newQuery()
     * @method static _IH_GroupRegistrationPackage_QB on(null|string $connection = null)
     * @method static _IH_GroupRegistrationPackage_QB query()
     * @method static _IH_GroupRegistrationPackage_QB with(array|string $relations)
     * @method _IH_GroupRegistrationPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_GroupRegistrationPackage_C|GroupRegistrationPackage[] all()
     * @ownLinks group_id,\App\Models\Group,id
     * @mixin _IH_GroupRegistrationPackage_QB
     */
    class GroupRegistrationPackage extends Model {}
    
    /**
     * @property int $id
     * @property int $group_id
     * @property int $user_id
     * @property int $created_at
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
     * @property string $icon
     * @property string $color
     * @property int $count
     * @property int|null $order
     * @property int $created_at
     * @property-read $description attribute
     * @property-read $title attribute
     * @method static _IH_HomePageStatistic_QB onWriteConnection()
     * @method _IH_HomePageStatistic_QB newQuery()
     * @method static _IH_HomePageStatistic_QB on(null|string $connection = null)
     * @method static _IH_HomePageStatistic_QB query()
     * @method static _IH_HomePageStatistic_QB with(array|string $relations)
     * @method _IH_HomePageStatistic_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_HomePageStatistic_C|HomePageStatistic[] all()
     * @foreignLinks id,\App\Models\Translation\HomePageStatisticTranslation,home_page_statistic_id
     * @mixin _IH_HomePageStatistic_QB
     */
    class HomePageStatistic extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int $order
     * @method static _IH_HomeSection_QB onWriteConnection()
     * @method _IH_HomeSection_QB newQuery()
     * @method static _IH_HomeSection_QB on(null|string $connection = null)
     * @method static _IH_HomeSection_QB query()
     * @method static _IH_HomeSection_QB with(array|string $relations)
     * @method _IH_HomeSection_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_HomeSection_C|HomeSection[] all()
     * @mixin _IH_HomeSection_QB
     */
    class HomeSection extends Model {}
    
    /**
     * @property int $id
     * @property string $target_type
     * @property string|null $target
     * @property int|null $capacity
     * @property int|null $start_date
     * @property int|null $end_date
     * @property bool $verification
     * @property bool $request_uploads
     * @property bool $bypass_verification_for_verified_users
     * @property int|null $upfront
     * @property string|null $upfront_type
     * @property bool $enable
     * @property int $created_at
     * @property-read $banner attribute
     * @property-read $description attribute
     * @property-read $main_title attribute
     * @property-read $options attribute
     * @property-read $title attribute
     * @property-read $verification_banner attribute
     * @property-read $verification_description attribute
     * @property-read $verification_video attribute
     * @property _IH_Bundle_C|Bundle[] $bundles
     * @property-read int $bundles_count
     * @method BelongsToMany|_IH_Bundle_QB bundles()
     * @property _IH_Category_C|Category[] $categories
     * @property-read int $categories_count
     * @method BelongsToMany|_IH_Category_QB categories()
     * @property _IH_InstallmentOrder_C|InstallmentOrder[] $orders
     * @property-read int $orders_count
     * @method HasMany|_IH_InstallmentOrder_QB orders()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_RegistrationPackage_C|RegistrationPackage[] $registrationPackages
     * @property-read int $registration_packages_count
     * @method BelongsToMany|_IH_RegistrationPackage_QB registrationPackages()
     * @property _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] $specificationItems
     * @property-read int $specification_items_count
     * @method HasMany|_IH_InstallmentSpecificationItem_QB specificationItems()
     * @property _IH_InstallmentStep_C|InstallmentStep[] $steps
     * @property-read int $steps_count
     * @method HasMany|_IH_InstallmentStep_QB steps()
     * @property _IH_Subscribe_C|Subscribe[] $subscribes
     * @property-read int $subscribes_count
     * @method BelongsToMany|_IH_Subscribe_QB subscribes()
     * @property _IH_InstallmentUserGroup_C|InstallmentUserGroup[] $userGroups
     * @property-read int $user_groups_count
     * @method HasMany|_IH_InstallmentUserGroup_QB userGroups()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method BelongsToMany|_IH_Webinar_QB webinars()
     * @method static _IH_Installment_QB onWriteConnection()
     * @method _IH_Installment_QB newQuery()
     * @method static _IH_Installment_QB on(null|string $connection = null)
     * @method static _IH_Installment_QB query()
     * @method static _IH_Installment_QB with(array|string $relations)
     * @method _IH_Installment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Installment_C|Installment[] all()
     * @foreignLinks id,\App\Models\Translation\InstallmentTranslation,installment_id|id,\App\Models\InstallmentSpecificationItem,installment_id|id,\App\Models\InstallmentStep,installment_id|id,\App\Models\InstallmentUserGroup,installment_id|id,\App\Models\InstallmentOrder,installment_id|id,\App\Models\SelectedInstallment,installment_id
     * @mixin _IH_Installment_QB
     */
    class Installment extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @property int|null $subscribe_id
     * @property int|null $registration_package_id
     * @property int|null $product_order_id
     * @property string $status
     * @property int $created_at
     * @property int|null $refund_at
     * @property float $item_price
     * @property _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_InstallmentOrderAttachment_QB attachments()
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Installment $installment
     * @method BelongsTo|_IH_Installment_QB installment()
     * @property _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] $payments
     * @property-read int $payments_count
     * @method HasMany|_IH_InstallmentOrderPayment_QB payments()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property SelectedInstallment $selectedInstallment
     * @method HasOne|_IH_SelectedInstallment_QB selectedInstallment()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_InstallmentOrder_QB onWriteConnection()
     * @method _IH_InstallmentOrder_QB newQuery()
     * @method static _IH_InstallmentOrder_QB on(null|string $connection = null)
     * @method static _IH_InstallmentOrder_QB query()
     * @method static _IH_InstallmentOrder_QB with(array|string $relations)
     * @method _IH_InstallmentOrder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentOrder_C|InstallmentOrder[] all()
     * @ownLinks installment_id,\App\Models\Installment,id|webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id|product_order_id,\App\Models\Api\ProductOrder,id
     * @foreignLinks id,\App\Models\InstallmentOrderPayment,installment_order_id|id,\App\Models\InstallmentOrderAttachment,installment_order_id|id,\App\Models\Api\ProductOrder,installment_order_id|id,\App\Models\SubscribeUse,installment_order_id|id,\App\Models\SelectedInstallment,installment_order_id|id,\App\Models\Api\Accounting,installment_order_id|id,\App\Models\InstallmentReminder,installment_order_id
     * @mixin _IH_InstallmentOrder_QB
     */
    class InstallmentOrder extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_order_id
     * @property string $title
     * @property string $file
     * @method static _IH_InstallmentOrderAttachment_QB onWriteConnection()
     * @method _IH_InstallmentOrderAttachment_QB newQuery()
     * @method static _IH_InstallmentOrderAttachment_QB on(null|string $connection = null)
     * @method static _IH_InstallmentOrderAttachment_QB query()
     * @method static _IH_InstallmentOrderAttachment_QB with(array|string $relations)
     * @method _IH_InstallmentOrderAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentOrderAttachment_C|InstallmentOrderAttachment[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id
     * @mixin _IH_InstallmentOrderAttachment_QB
     */
    class InstallmentOrderAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_order_id
     * @property int|null $sale_id
     * @property string $type
     * @property int|null $step_id
     * @property float $amount
     * @property string $status
     * @property int $created_at
     * @property int|null $selected_installment_step_id
     * @property InstallmentOrder $installmentOrder
     * @method BelongsTo|_IH_InstallmentOrder_QB installmentOrder()
     * @property Sale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @property SelectedInstallmentStep|null $step
     * @method BelongsTo|_IH_SelectedInstallmentStep_QB step()
     * @method static _IH_InstallmentOrderPayment_QB onWriteConnection()
     * @method _IH_InstallmentOrderPayment_QB newQuery()
     * @method static _IH_InstallmentOrderPayment_QB on(null|string $connection = null)
     * @method static _IH_InstallmentOrderPayment_QB query()
     * @method static _IH_InstallmentOrderPayment_QB with(array|string $relations)
     * @method _IH_InstallmentOrderPayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentOrderPayment_C|InstallmentOrderPayment[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id|step_id,\App\Models\InstallmentStep,id|sale_id,\App\Models\Api\Sale,id|selected_installment_step_id,\App\Models\SelectedInstallmentStep,id
     * @foreignLinks id,\App\Models\Api\Cart,installment_payment_id|id,\App\Models\Api\Accounting,installment_payment_id|id,\App\Models\Api\Sale,installment_payment_id
     * @mixin _IH_InstallmentOrderPayment_QB
     */
    class InstallmentOrderPayment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $installment_order_id
     * @property int $installment_step_id
     * @property string $type
     * @property int $created_at
     * @method static _IH_InstallmentReminder_QB onWriteConnection()
     * @method _IH_InstallmentReminder_QB newQuery()
     * @method static _IH_InstallmentReminder_QB on(null|string $connection = null)
     * @method static _IH_InstallmentReminder_QB query()
     * @method static _IH_InstallmentReminder_QB with(array|string $relations)
     * @method _IH_InstallmentReminder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentReminder_C|InstallmentReminder[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id|installment_step_id,\App\Models\InstallmentStep,id
     * @mixin _IH_InstallmentReminder_QB
     */
    class InstallmentReminder extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_id
     * @property int|null $category_id
     * @property int|null $instructor_id
     * @property int|null $seller_id
     * @property int|null $webinar_id
     * @property int|null $product_id
     * @property int|null $bundle_id
     * @property int|null $subscribe_id
     * @property int|null $registration_package_id
     * @method static _IH_InstallmentSpecificationItem_QB onWriteConnection()
     * @method _IH_InstallmentSpecificationItem_QB newQuery()
     * @method static _IH_InstallmentSpecificationItem_QB on(null|string $connection = null)
     * @method static _IH_InstallmentSpecificationItem_QB query()
     * @method static _IH_InstallmentSpecificationItem_QB with(array|string $relations)
     * @method _IH_InstallmentSpecificationItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentSpecificationItem_C|InstallmentSpecificationItem[] all()
     * @ownLinks installment_id,\App\Models\Installment,id|category_id,\App\Models\Api\Category,id|webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id
     * @mixin _IH_InstallmentSpecificationItem_QB
     */
    class InstallmentSpecificationItem extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_id
     * @property int|null $deadline
     * @property int|null $amount
     * @property string|null $amount_type
     * @property int|null $order
     * @property-read $title attribute
     * @property Installment $installment
     * @method BelongsTo|_IH_Installment_QB installment()
     * @method static _IH_InstallmentStep_QB onWriteConnection()
     * @method _IH_InstallmentStep_QB newQuery()
     * @method static _IH_InstallmentStep_QB on(null|string $connection = null)
     * @method static _IH_InstallmentStep_QB query()
     * @method static _IH_InstallmentStep_QB with(array|string $relations)
     * @method _IH_InstallmentStep_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentStep_C|InstallmentStep[] all()
     * @ownLinks installment_id,\App\Models\Installment,id
     * @foreignLinks id,\App\Models\Translation\InstallmentStepTranslation,installment_step_id|id,\App\Models\InstallmentOrderPayment,step_id|id,\App\Models\SelectedInstallmentStep,installment_step_id|id,\App\Models\InstallmentReminder,installment_step_id
     * @mixin _IH_InstallmentStep_QB
     */
    class InstallmentStep extends Model {}
    
    /**
     * @property int $id
     * @property int $installment_id
     * @property int|null $group_id
     * @method static _IH_InstallmentUserGroup_QB onWriteConnection()
     * @method _IH_InstallmentUserGroup_QB newQuery()
     * @method static _IH_InstallmentUserGroup_QB on(null|string $connection = null)
     * @method static _IH_InstallmentUserGroup_QB query()
     * @method static _IH_InstallmentUserGroup_QB with(array|string $relations)
     * @method _IH_InstallmentUserGroup_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_InstallmentUserGroup_C|InstallmentUserGroup[] all()
     * @ownLinks installment_id,\App\Models\Installment,id|group_id,\App\Models\Group,id
     * @mixin _IH_InstallmentUserGroup_QB
     */
    class InstallmentUserGroup extends Model {}
    
    /**
     * @property int $id
     * @property string $type
     * @property string $value full ip or ip range or country name
     * @property string $reason
     * @property int $created_at
     * @method static _IH_IpRestriction_QB onWriteConnection()
     * @method _IH_IpRestriction_QB newQuery()
     * @method static _IH_IpRestriction_QB on(null|string $connection = null)
     * @method static _IH_IpRestriction_QB query()
     * @method static _IH_IpRestriction_QB with(array|string $relations)
     * @method _IH_IpRestriction_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_IpRestriction_C|IpRestriction[] all()
     * @mixin _IH_IpRestriction_QB
     */
    class IpRestriction extends Model {}
    
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
     * @property _IH_MeetingTime_C|MeetingTime[] $meetingTimes
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
     * @property Meeting $meeting
     * @method BelongsTo|_IH_Meeting_QB meeting()
     * @method static _IH_MeetingTime_QB onWriteConnection()
     * @method _IH_MeetingTime_QB newQuery()
     * @method static _IH_MeetingTime_QB on(null|string $connection = null)
     * @method static _IH_MeetingTime_QB query()
     * @method static _IH_MeetingTime_QB with(array|string $relations)
     * @method _IH_MeetingTime_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_MeetingTime_C|MeetingTime[] all()
     * @ownLinks meeting_id,\App\Models\Api\Meeting,id
     * @foreignLinks id,\App\Models\Api\ReserveMeeting,meeting_time_id|id,\App\Models\Api\Sale,meeting_time_id
     * @mixin _IH_MeetingTime_QB
     */
    class MeetingTime extends Model {}
    
    /**
     * @property int $id
     * @property int|null $role_id
     * @property bool $for_guest
     * @property-read $title attribute
     * @property-read $url attribute
     * @property Role|null $role
     * @method BelongsTo|_IH_Role_QB role()
     * @method static _IH_NavbarButton_QB onWriteConnection()
     * @method _IH_NavbarButton_QB newQuery()
     * @method static _IH_NavbarButton_QB on(null|string $connection = null)
     * @method static _IH_NavbarButton_QB query()
     * @method static _IH_NavbarButton_QB with(array|string $relations)
     * @method _IH_NavbarButton_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NavbarButton_C|NavbarButton[] all()
     * @ownLinks role_id,\App\Models\Role,id
     * @foreignLinks id,\App\Models\Translation\NavbarButtonTranslation,navbar_button_id
     * @mixin _IH_NavbarButton_QB
     */
    class NavbarButton extends Model {}
    
    /**
     * @property int $id
     * @property string $email
     * @property int $created_at
     * @property int|null $user_id
     * @method static _IH_Newsletter_QB onWriteConnection()
     * @method _IH_Newsletter_QB newQuery()
     * @method static _IH_Newsletter_QB on(null|string $connection = null)
     * @method static _IH_Newsletter_QB query()
     * @method static _IH_Newsletter_QB with(array|string $relations)
     * @method _IH_Newsletter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Newsletter_C|Newsletter[] all()
     * @ownLinks 
     * @mixin _IH_Newsletter_QB
     */
    class Newsletter extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $description
     * @property string $send_method
     * @property string|null $bcc_email
     * @property int|null $email_count
     * @property int $created_at
     * @method static _IH_NewsletterHistory_QB onWriteConnection()
     * @method _IH_NewsletterHistory_QB newQuery()
     * @method static _IH_NewsletterHistory_QB on(null|string $connection = null)
     * @method static _IH_NewsletterHistory_QB query()
     * @method static _IH_NewsletterHistory_QB with(array|string $relations)
     * @method _IH_NewsletterHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NewsletterHistory_C|NewsletterHistory[] all()
     * @mixin _IH_NewsletterHistory_QB
     */
    class NewsletterHistory extends Model {}
    
    /**
     * @property int $id
     * @property int|null $organ_id
     * @property int|null $user_id
     * @property string $type
     * @property string $sender
     * @property string $title
     * @property string $message
     * @property int $created_at
     * @property int|null $instructor_id
     * @property int|null $webinar_id
     * @property NoticeboardStatus $noticeboardStatus
     * @method HasOne|_IH_NoticeboardStatus_QB noticeboardStatus()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Noticeboard_QB onWriteConnection()
     * @method _IH_Noticeboard_QB newQuery()
     * @method static _IH_Noticeboard_QB on(null|string $connection = null)
     * @method static _IH_Noticeboard_QB query()
     * @method static _IH_Noticeboard_QB with(array|string $relations)
     * @method _IH_Noticeboard_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Noticeboard_C|Noticeboard[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\NoticeboardStatus,noticeboard_id
     * @mixin _IH_Noticeboard_QB
     */
    class Noticeboard extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $noticeboard_id
     * @property int $seen_at
     * @method static _IH_NoticeboardStatus_QB onWriteConnection()
     * @method _IH_NoticeboardStatus_QB newQuery()
     * @method static _IH_NoticeboardStatus_QB on(null|string $connection = null)
     * @method static _IH_NoticeboardStatus_QB query()
     * @method static _IH_NoticeboardStatus_QB with(array|string $relations)
     * @method _IH_NoticeboardStatus_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NoticeboardStatus_C|NoticeboardStatus[] all()
     * @ownLinks noticeboard_id,\App\Models\Noticeboard,id
     * @mixin _IH_NoticeboardStatus_QB
     */
    class NoticeboardStatus extends Model {}
    
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
     * @property Group|null $group
     * @method BelongsTo|_IH_Group_QB group()
     * @property NotificationStatus $notificationStatus
     * @method HasOne|_IH_NotificationStatus_QB notificationStatus()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Notification_QB onWriteConnection()
     * @method _IH_Notification_QB newQuery()
     * @method static _IH_Notification_QB on(null|string $connection = null)
     * @method static _IH_Notification_QB query()
     * @method static _IH_Notification_QB with(array|string $relations)
     * @method _IH_Notification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Notification_C|Notification[] all()
     * @ownLinks group_id,\App\Models\Group,id|webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\NotificationStatus,notification_id
     * @mixin _IH_Notification_QB
     */
    class Notification extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $notification_id
     * @property int $seen_at
     * @method static _IH_NotificationStatus_QB onWriteConnection()
     * @method _IH_NotificationStatus_QB newQuery()
     * @method static _IH_NotificationStatus_QB on(null|string $connection = null)
     * @method static _IH_NotificationStatus_QB query()
     * @method static _IH_NotificationStatus_QB with(array|string $relations)
     * @method _IH_NotificationStatus_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NotificationStatus_C|NotificationStatus[] all()
     * @ownLinks notification_id,\Illuminate\Notifications\DatabaseNotification,id
     * @mixin _IH_NotificationStatus_QB
     */
    class NotificationStatus extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $template
     * @method static _IH_NotificationTemplate_QB onWriteConnection()
     * @method _IH_NotificationTemplate_QB newQuery()
     * @method static _IH_NotificationTemplate_QB on(null|string $connection = null)
     * @method static _IH_NotificationTemplate_QB query()
     * @method static _IH_NotificationTemplate_QB with(array|string $relations)
     * @method _IH_NotificationTemplate_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_NotificationTemplate_C|NotificationTemplate[] all()
     * @mixin _IH_NotificationTemplate_QB
     */
    class NotificationTemplate extends Model {}
    
    /**
     * @property int $id
     * @property string $logo
     * @property int $created_at
     * @property-read $title attribute
     * @property _IH_OfflineBankSpecification_C|OfflineBankSpecification[] $specifications
     * @property-read int $specifications_count
     * @method HasMany|_IH_OfflineBankSpecification_QB specifications()
     * @method static _IH_OfflineBank_QB onWriteConnection()
     * @method _IH_OfflineBank_QB newQuery()
     * @method static _IH_OfflineBank_QB on(null|string $connection = null)
     * @method static _IH_OfflineBank_QB query()
     * @method static _IH_OfflineBank_QB with(array|string $relations)
     * @method _IH_OfflineBank_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OfflineBank_C|OfflineBank[] all()
     * @foreignLinks id,\App\Models\Translation\OfflineBankTranslation,offline_bank_id|id,\App\Models\OfflineBankSpecification,offline_bank_id|id,\App\Models\OfflinePayment,offline_bank_id
     * @mixin _IH_OfflineBank_QB
     */
    class OfflineBank extends Model {}
    
    /**
     * @property int $id
     * @property int $offline_bank_id
     * @property string $value
     * @property-read $name attribute
     * @method static _IH_OfflineBankSpecification_QB onWriteConnection()
     * @method _IH_OfflineBankSpecification_QB newQuery()
     * @method static _IH_OfflineBankSpecification_QB on(null|string $connection = null)
     * @method static _IH_OfflineBankSpecification_QB query()
     * @method static _IH_OfflineBankSpecification_QB with(array|string $relations)
     * @method _IH_OfflineBankSpecification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OfflineBankSpecification_C|OfflineBankSpecification[] all()
     * @ownLinks offline_bank_id,\App\Models\OfflineBank,id
     * @foreignLinks id,\App\Models\Translation\OfflineBankSpecificationTranslation,offline_bank_specification_id
     * @mixin _IH_OfflineBankSpecification_QB
     */
    class OfflineBankSpecification extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $amount
     * @property string $bank
     * @property string $reference_number
     * @property string $status
     * @property int $created_at
     * @property string $pay_date
     * @property string|null $attachment
     * @property int|null $offline_bank_id
     * @property OfflineBank|null $offlineBank
     * @method BelongsTo|_IH_OfflineBank_QB offlineBank()
     * @method static _IH_OfflinePayment_QB onWriteConnection()
     * @method _IH_OfflinePayment_QB newQuery()
     * @method static _IH_OfflinePayment_QB on(null|string $connection = null)
     * @method static _IH_OfflinePayment_QB query()
     * @method static _IH_OfflinePayment_QB with(array|string $relations)
     * @method _IH_OfflinePayment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OfflinePayment_C|OfflinePayment[] all()
     * @ownLinks offline_bank_id,\App\Models\OfflineBank,id
     * @mixin _IH_OfflinePayment_QB
     */
    class OfflinePayment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $status
     * @property string $payment_method
     * @property int $amount
     * @property int|null $tax
     * @property int|null $total_discount
     * @property int $total_amount
     * @property int|null $reference_id
     * @property int $created_at
     * @property string $type
     * @property bool $is_charge_account
     * @property string|null $payment_data
     * @property float|null $product_delivery_fee
     * @property _IH_OrderItem_C|OrderItem[] $orderItems
     * @property-read int $order_items_count
     * @method HasMany|_IH_OrderItem_QB orderItems()
     * @method static _IH_Order_QB onWriteConnection()
     * @method _IH_Order_QB newQuery()
     * @method static _IH_Order_QB on(null|string $connection = null)
     * @method static _IH_Order_QB query()
     * @method static _IH_Order_QB with(array|string $relations)
     * @method _IH_Order_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Order_C|Order[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\OrderItem,order_id|id,\App\Models\Api\Sale,order_id
     * @mixin _IH_Order_QB
     */
    class Order extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $order_id
     * @property int|null $webinar_id
     * @property int|null $meeting_id
     * @property int|null $ticket_id
     * @property int|null $amount
     * @property int|null $tax
     * @property int|null $commission
     * @property int|null $discount
     * @property int $total_amount
     * @property int|null $created_at
     * @property int|null $tax_price
     * @property int|null $commission_price
     * @property int|null $discount_id
     * @property int|null $subscribe_id
     * @property int|null $promotion_id
     * @property int|null $registration_package_id
     * @property int|null $become_instructor_id
     * @property int|null $product_order_id
     * @property int|null $bundle_id
     * @property float|null $product_delivery_fee
     * @property int|null $installment_payment_id
     * @property int|null $gift_id
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentPayment()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property ProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property ReserveMeeting $reserveMeeting
     * @method BelongsTo|_IH_ReserveMeeting_QB reserveMeeting()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Ticket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_OrderItem_QB onWriteConnection()
     * @method _IH_OrderItem_QB newQuery()
     * @method static _IH_OrderItem_QB on(null|string $connection = null)
     * @method static _IH_OrderItem_QB query()
     * @method static _IH_OrderItem_QB with(array|string $relations)
     * @method _IH_OrderItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_OrderItem_C|OrderItem[] all()
     * @ownLinks order_id,\App\Models\Order,id|webinar_id,\App\Models\Api\Webinar,id|meeting_id,\App\Models\Api\Meeting,id|ticket_id,\App\Models\Api\Ticket,id|reserve_meeting_id,\App\Models\Api\ReserveMeeting,id|subscribe_id,\App\Models\Api\Subscribe,id|promotion_id,\App\Models\Promotion,id|gift_id,\App\Models\Gift,id|discount_id,\App\Models\Discount,id|registration_package_id,\App\Models\Api\RegistrationPackage,id|become_instructor_id,\App\Models\BecomeInstructor,id|product_order_id,\App\Models\Api\ProductOrder,id
     * @foreignLinks id,\App\Models\Api\Accounting,order_item_id
     * @mixin _IH_OrderItem_QB
     */
    class OrderItem extends Model {}
    
    /**
     * @property int $id
     * @property string $link
     * @property string $name
     * @property bool $robot
     * @property string $status
     * @property int $created_at
     * @property-read $content attribute
     * @property-read $seo_description attribute
     * @property-read $title attribute
     * @method static _IH_Page_QB onWriteConnection()
     * @method _IH_Page_QB newQuery()
     * @method static _IH_Page_QB on(null|string $connection = null)
     * @method static _IH_Page_QB query()
     * @method static _IH_Page_QB with(array|string $relations)
     * @method _IH_Page_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Page_C|Page[] all()
     * @foreignLinks id,\App\Models\Translation\PageTranslation,page_id
     * @mixin _IH_Page_QB
     */
    class Page extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property string $class_name
     * @property string|null $image
     * @property mixed|null $credentials
     * @property int $created_at
     * @property string|null $disabled_at
     * @property string $status
     * @property array|null $currencies
     * @method static _IH_PaymentChannel_QB onWriteConnection()
     * @method _IH_PaymentChannel_QB newQuery()
     * @method static _IH_PaymentChannel_QB on(null|string $connection = null)
     * @method static _IH_PaymentChannel_QB query()
     * @method static _IH_PaymentChannel_QB with(array|string $relations)
     * @method _IH_PaymentChannel_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PaymentChannel_C|PaymentChannel[] all()
     * @mixin _IH_PaymentChannel_QB
     */
    class PaymentChannel extends Model {}
    
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
     * @property int|null $role_id
     * @property int|null $section_id
     * @property bool $allow
     * @property Section|null $sections
     * @method BelongsTo|_IH_Section_QB sections()
     * @method static _IH_Permission_QB onWriteConnection()
     * @method _IH_Permission_QB newQuery()
     * @method static _IH_Permission_QB on(null|string $connection = null)
     * @method static _IH_Permission_QB query()
     * @method static _IH_Permission_QB with(array|string $relations)
     * @method _IH_Permission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Permission_C|Permission[] all()
     * @ownLinks section_id,\App\Models\Section,id|role_id,\App\Models\Role,id
     * @mixin _IH_Permission_QB
     */
    class Permission extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $prerequisite_id
     * @property bool $required
     * @property int $created_at
     * @property int|null $updated_at
     * @property int|null $order
     * @property Webinar $prerequisiteWebinar
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
     * @property-read $seo_description attribute
     * @property-read $summary attribute
     * @property-read null $thumbnail attribute
     * @property-read $title attribute
     * @property-read null $video_demo attribute
     * @property ProductCategory|null $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_Comment_C|Comment[] $comments
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
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_ProductOrder_C|ProductOrder[] $productOrders
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
     * @method static _IH_Product_QB onWriteConnection()
     * @method _IH_Product_QB newQuery()
     * @method static _IH_Product_QB on(null|string $connection = null)
     * @method static _IH_Product_QB query()
     * @method static _IH_Product_QB with(array|string $relations)
     * @method _IH_Product_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Product_C|Product[] all()
     * @ownLinks category_id,\App\Models\ProductCategory,id
     * @foreignLinks id,\App\Models\Translation\ProductTranslation,product_id|id,\App\Models\ProductDiscount,product_id|id,\App\Models\ProductFile,product_id|id,\App\Models\ProductMedia,product_id|id,\App\Models\ProductSelectedFilterOption,product_id|id,\App\Models\ProductSelectedSpecification,product_id|id,\App\Models\ProductFaq,product_id|id,\App\Models\ProductReview,product_id|id,\App\Models\Api\Comment,product_id|id,\App\Models\CommentReport,product_id|id,\App\Models\InstallmentSpecificationItem,product_id|id,\App\Models\InstallmentOrder,product_id|id,\App\Models\CashbackRuleSpecificationItem,product_id|id,\App\Models\Gift,product_id|id,\App\Models\PurchaseNotificationRoleGroupContent,product_id|id,\App\Models\AbandonedCartRuleSpecificationItem,product_id|id,\App\Models\Api\Accounting,product_id|id,\App\Models\Api\ProductOrder,product_id
     * @mixin _IH_Product_QB
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
     * @property Bundle $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Blog $post
     * @method BelongsTo|_IH_Blog_QB post()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @property UpcomingCourse $upcomingCourse
     * @method BelongsTo|_IH_UpcomingCourse_QB upcomingCourse()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
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
     * @property int|null $parent_id
     * @property string|null $icon
     * @property int|null $order
     * @property-read $title attribute
     * @property ProductCategory|null $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_ProductFilter_C|ProductFilter[] $filters
     * @property-read int $filters_count
     * @method HasMany|_IH_ProductFilter_QB filters()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method HasMany|_IH_Product_QB products()
     * @method static _IH_ProductCategory_QB onWriteConnection()
     * @method _IH_ProductCategory_QB newQuery()
     * @method static _IH_ProductCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductCategory_QB query()
     * @method static _IH_ProductCategory_QB with(array|string $relations)
     * @method _IH_ProductCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductCategory_C|ProductCategory[] all()
     * @foreignLinks id,\App\Models\Translation\ProductCategoryTranslation,product_category_id|id,\App\Models\ProductFilter,category_id|id,\App\Models\Api\Product,category_id|id,\App\Models\ProductSpecificationCategory,category_id
     * @mixin _IH_ProductCategory_QB
     */
    class ProductCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $product_id
     * @property string|null $name
     * @property int $percent
     * @property int|null $count
     * @property string $status
     * @property int $start_date
     * @property int $end_date
     * @property int $created_at
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductDiscount_QB onWriteConnection()
     * @method _IH_ProductDiscount_QB newQuery()
     * @method static _IH_ProductDiscount_QB on(null|string $connection = null)
     * @method static _IH_ProductDiscount_QB query()
     * @method static _IH_ProductDiscount_QB with(array|string $relations)
     * @method _IH_ProductDiscount_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductDiscount_C|ProductDiscount[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @foreignLinks id,\App\Models\Api\Cart,product_discount_id
     * @mixin _IH_ProductDiscount_QB
     */
    class ProductDiscount extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $product_id
     * @property int|null $order
     * @property int $created_at
     * @property-read $answer attribute
     * @property-read $title attribute
     * @method static _IH_ProductFaq_QB onWriteConnection()
     * @method _IH_ProductFaq_QB newQuery()
     * @method static _IH_ProductFaq_QB on(null|string $connection = null)
     * @method static _IH_ProductFaq_QB query()
     * @method static _IH_ProductFaq_QB with(array|string $relations)
     * @method _IH_ProductFaq_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFaq_C|ProductFaq[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @foreignLinks id,\App\Models\Translation\ProductFaqTranslation,product_faq_id
     * @mixin _IH_ProductFaq_QB
     */
    class ProductFaq extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $product_id
     * @property string $path
     * @property int|null $order
     * @property string $status
     * @property int $created_at
     * @property string|null $file_type
     * @property string|null $volume
     * @property bool $online_viewer
     * @property-read $description attribute
     * @property-read $title attribute
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductFile_QB onWriteConnection()
     * @method _IH_ProductFile_QB newQuery()
     * @method static _IH_ProductFile_QB on(null|string $connection = null)
     * @method static _IH_ProductFile_QB query()
     * @method static _IH_ProductFile_QB with(array|string $relations)
     * @method _IH_ProductFile_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFile_C|ProductFile[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @foreignLinks id,\App\Models\Translation\ProductFileTranslation,product_file_id
     * @mixin _IH_ProductFile_QB
     */
    class ProductFile extends Model {}
    
    /**
     * @property int $id
     * @property int $category_id
     * @property-read $title attribute
     * @property ProductCategory $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @property _IH_ProductFilterOption_C|ProductFilterOption[] $options
     * @property-read int $options_count
     * @method HasMany|_IH_ProductFilterOption_QB options()
     * @method static _IH_ProductFilter_QB onWriteConnection()
     * @method _IH_ProductFilter_QB newQuery()
     * @method static _IH_ProductFilter_QB on(null|string $connection = null)
     * @method static _IH_ProductFilter_QB query()
     * @method static _IH_ProductFilter_QB with(array|string $relations)
     * @method _IH_ProductFilter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFilter_C|ProductFilter[] all()
     * @ownLinks category_id,\App\Models\ProductCategory,id
     * @foreignLinks id,\App\Models\Translation\ProductFilterTranslation,product_filter_id|id,\App\Models\ProductFilterOption,filter_id
     * @mixin _IH_ProductFilter_QB
     */
    class ProductFilter extends Model {}
    
    /**
     * @property int $id
     * @property int $filter_id
     * @property int|null $order
     * @property-read $title attribute
     * @method static _IH_ProductFilterOption_QB onWriteConnection()
     * @method _IH_ProductFilterOption_QB newQuery()
     * @method static _IH_ProductFilterOption_QB on(null|string $connection = null)
     * @method static _IH_ProductFilterOption_QB query()
     * @method static _IH_ProductFilterOption_QB with(array|string $relations)
     * @method _IH_ProductFilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductFilterOption_C|ProductFilterOption[] all()
     * @ownLinks filter_id,\App\Models\ProductFilter,id
     * @foreignLinks id,\App\Models\Translation\ProductFilterOptionTranslation,product_filter_option_id|id,\App\Models\ProductSelectedFilterOption,filter_option_id
     * @mixin _IH_ProductFilterOption_QB
     */
    class ProductFilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $product_id
     * @property string $type
     * @property string $path
     * @property int|null $order
     * @property int $created_at
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductMedia_QB onWriteConnection()
     * @method _IH_ProductMedia_QB newQuery()
     * @method static _IH_ProductMedia_QB on(null|string $connection = null)
     * @method static _IH_ProductMedia_QB query()
     * @method static _IH_ProductMedia_QB with(array|string $relations)
     * @method _IH_ProductMedia_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductMedia_C|ProductMedia[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @mixin _IH_ProductMedia_QB
     */
    class ProductMedia extends Model {}
    
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
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Sale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @method static _IH_ProductOrder_QB onWriteConnection()
     * @method _IH_ProductOrder_QB newQuery()
     * @method static _IH_ProductOrder_QB on(null|string $connection = null)
     * @method static _IH_ProductOrder_QB query()
     * @method static _IH_ProductOrder_QB with(array|string $relations)
     * @method _IH_ProductOrder_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductOrder_C|ProductOrder[] all()
     * @ownLinks installment_order_id,\App\Models\InstallmentOrder,id|gift_id,\App\Models\Gift,id|product_id,\App\Models\Api\Product,id|sale_id,\App\Models\Api\Sale,id|discount_id,\App\Models\Discount,id
     * @foreignLinks id,\App\Models\Api\Cart,product_order_id|id,\App\Models\InstallmentOrder,product_order_id|id,\App\Models\OrderItem,product_order_id|id,\App\Models\Api\Sale,product_order_id
     * @mixin _IH_ProductOrder_QB
     */
    class ProductOrder extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property int $creator_id
     * @property int $product_quality
     * @property int $purchase_worth
     * @property int $delivery_quality
     * @property int $seller_quality
     * @property string $rates
     * @property string|null $description
     * @property int $created_at
     * @property string $status
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @method static _IH_ProductReview_QB onWriteConnection()
     * @method _IH_ProductReview_QB newQuery()
     * @method static _IH_ProductReview_QB on(null|string $connection = null)
     * @method static _IH_ProductReview_QB query()
     * @method static _IH_ProductReview_QB with(array|string $relations)
     * @method _IH_ProductReview_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductReview_C|ProductReview[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id
     * @foreignLinks id,\App\Models\Api\Comment,product_review_id
     * @mixin _IH_ProductReview_QB
     */
    class ProductReview extends Model {}
    
    /**
     * @property int $id
     * @property int $product_id
     * @property int $filter_option_id
     * @method static _IH_ProductSelectedFilterOption_QB onWriteConnection()
     * @method _IH_ProductSelectedFilterOption_QB newQuery()
     * @method static _IH_ProductSelectedFilterOption_QB on(null|string $connection = null)
     * @method static _IH_ProductSelectedFilterOption_QB query()
     * @method static _IH_ProductSelectedFilterOption_QB with(array|string $relations)
     * @method _IH_ProductSelectedFilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSelectedFilterOption_C|ProductSelectedFilterOption[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id|filter_option_id,\App\Models\ProductFilterOption,id
     * @mixin _IH_ProductSelectedFilterOption_QB
     */
    class ProductSelectedFilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $product_id
     * @property int $product_specification_id
     * @property string $type
     * @property bool $allow_selection
     * @property int|null $order
     * @property string $status
     * @property int $created_at
     * @property-read $value attribute
     * @property _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] $selectedMultiValues
     * @property-read int $selected_multi_values_count
     * @method HasMany|_IH_ProductSelectedSpecificationMultiValue_QB selectedMultiValues()
     * @property ProductSpecification $specification
     * @method BelongsTo|_IH_ProductSpecification_QB specification()
     * @method static _IH_ProductSelectedSpecification_QB onWriteConnection()
     * @method _IH_ProductSelectedSpecification_QB newQuery()
     * @method static _IH_ProductSelectedSpecification_QB on(null|string $connection = null)
     * @method static _IH_ProductSelectedSpecification_QB query()
     * @method static _IH_ProductSelectedSpecification_QB with(array|string $relations)
     * @method _IH_ProductSelectedSpecification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSelectedSpecification_C|ProductSelectedSpecification[] all()
     * @ownLinks product_id,\App\Models\Api\Product,id|product_specification_id,\App\Models\ProductSpecification,id
     * @foreignLinks id,\App\Models\Translation\ProductSelectedSpecificationTranslation,product_selected_specification_id|id,\App\Models\ProductSelectedSpecificationMultiValue,selected_specification_id
     * @mixin _IH_ProductSelectedSpecification_QB
     */
    class ProductSelectedSpecification extends Model {}
    
    /**
     * @property int $id
     * @property int $selected_specification_id
     * @property int $specification_multi_value_id
     * @property ProductSpecificationMultiValue $multiValue
     * @method BelongsTo|_IH_ProductSpecificationMultiValue_QB multiValue()
     * @property ProductSelectedSpecification $selectedSpecification
     * @method BelongsTo|_IH_ProductSelectedSpecification_QB selectedSpecification()
     * @method static _IH_ProductSelectedSpecificationMultiValue_QB onWriteConnection()
     * @method _IH_ProductSelectedSpecificationMultiValue_QB newQuery()
     * @method static _IH_ProductSelectedSpecificationMultiValue_QB on(null|string $connection = null)
     * @method static _IH_ProductSelectedSpecificationMultiValue_QB query()
     * @method static _IH_ProductSelectedSpecificationMultiValue_QB with(array|string $relations)
     * @method _IH_ProductSelectedSpecificationMultiValue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSelectedSpecificationMultiValue_C|ProductSelectedSpecificationMultiValue[] all()
     * @ownLinks selected_specification_id,\App\Models\ProductSelectedSpecification,id|specification_multi_value_id,\App\Models\ProductSpecificationMultiValue,id
     * @mixin _IH_ProductSelectedSpecificationMultiValue_QB
     */
    class ProductSelectedSpecificationMultiValue extends Model {}
    
    /**
     * @property int $id
     * @property string $input_type
     * @property-read $title attribute
     * @property _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] $categories
     * @property-read int $categories_count
     * @method HasMany|_IH_ProductSpecificationCategory_QB categories()
     * @property _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] $multiValues
     * @property-read int $multi_values_count
     * @method HasMany|_IH_ProductSpecificationMultiValue_QB multiValues()
     * @method static _IH_ProductSpecification_QB onWriteConnection()
     * @method _IH_ProductSpecification_QB newQuery()
     * @method static _IH_ProductSpecification_QB on(null|string $connection = null)
     * @method static _IH_ProductSpecification_QB query()
     * @method static _IH_ProductSpecification_QB with(array|string $relations)
     * @method _IH_ProductSpecification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSpecification_C|ProductSpecification[] all()
     * @foreignLinks id,\App\Models\Translation\ProductSpecificationTranslation,product_specification_id|id,\App\Models\ProductSpecificationCategory,specification_id|id,\App\Models\ProductSelectedSpecification,product_specification_id|id,\App\Models\ProductSpecificationMultiValue,specification_id
     * @mixin _IH_ProductSpecification_QB
     */
    class ProductSpecification extends Model {}
    
    /**
     * @property int $id
     * @property int $specification_id
     * @property int $category_id
     * @property ProductCategory $category
     * @method BelongsTo|_IH_ProductCategory_QB category()
     * @method static _IH_ProductSpecificationCategory_QB onWriteConnection()
     * @method _IH_ProductSpecificationCategory_QB newQuery()
     * @method static _IH_ProductSpecificationCategory_QB on(null|string $connection = null)
     * @method static _IH_ProductSpecificationCategory_QB query()
     * @method static _IH_ProductSpecificationCategory_QB with(array|string $relations)
     * @method _IH_ProductSpecificationCategory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSpecificationCategory_C|ProductSpecificationCategory[] all()
     * @ownLinks specification_id,\App\Models\ProductSpecification,id|category_id,\App\Models\ProductCategory,id
     * @mixin _IH_ProductSpecificationCategory_QB
     */
    class ProductSpecificationCategory extends Model {}
    
    /**
     * @property int $id
     * @property int $specification_id
     * @property-read $title attribute
     * @method static _IH_ProductSpecificationMultiValue_QB onWriteConnection()
     * @method _IH_ProductSpecificationMultiValue_QB newQuery()
     * @method static _IH_ProductSpecificationMultiValue_QB on(null|string $connection = null)
     * @method static _IH_ProductSpecificationMultiValue_QB query()
     * @method static _IH_ProductSpecificationMultiValue_QB with(array|string $relations)
     * @method _IH_ProductSpecificationMultiValue_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ProductSpecificationMultiValue_C|ProductSpecificationMultiValue[] all()
     * @ownLinks specification_id,\App\Models\ProductSpecification,id
     * @foreignLinks id,\App\Models\Translation\ProductSpecificationMultiValueTranslation,product_specification_multi_value_id|id,\App\Models\ProductSelectedSpecificationMultiValue,specification_multi_value_id
     * @mixin _IH_ProductSpecificationMultiValue_QB
     */
    class ProductSpecificationMultiValue extends Model {}
    
    /**
     * @property int $id
     * @property int $days
     * @property int $price
     * @property string $icon
     * @property bool $is_popular
     * @property int $created_at
     * @property-read $description attribute
     * @property-read $title attribute
     * @property _IH_Sale_C|Sale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @method static _IH_Promotion_QB onWriteConnection()
     * @method _IH_Promotion_QB newQuery()
     * @method static _IH_Promotion_QB on(null|string $connection = null)
     * @method static _IH_Promotion_QB query()
     * @method static _IH_Promotion_QB with(array|string $relations)
     * @method _IH_Promotion_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Promotion_C|Promotion[] all()
     * @foreignLinks id,\App\Models\OrderItem,promotion_id|id,\App\Models\Api\Sale,promotion_id|id,\App\Models\Api\Cart,promotion_id|id,\App\Models\Translation\PromotionTranslation,promotion_id|id,\App\Models\Api\Accounting,promotion_id
     * @mixin _IH_Promotion_QB
     */
    class Promotion extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $user_id
     * @property int $created_at
     * @method static _IH_Purchase_QB onWriteConnection()
     * @method _IH_Purchase_QB newQuery()
     * @method static _IH_Purchase_QB on(null|string $connection = null)
     * @method static _IH_Purchase_QB query()
     * @method static _IH_Purchase_QB with(array|string $relations)
     * @method _IH_Purchase_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Purchase_C|Purchase[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_Purchase_QB
     */
    class Purchase extends Model {}
    
    /**
     * @property int $id
     * @property int|null $start_at
     * @property int|null $end_at
     * @property int|null $popup_duration
     * @property int|null $popup_delay
     * @property int|null $maximum_purchase_amount
     * @property int|null $maximum_community_age
     * @property string $display_type
     * @property int|null $display_time
     * @property bool $display_for_logged_out_users
     * @property bool $enable
     * @property int $created_at
     * @property-read $popup_subtitle attribute
     * @property-read $popup_title attribute
     * @property-read $times attribute
     * @property-read $title attribute
     * @property-read $users attribute
     * @property _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] $allRelatives
     * @property-read int $all_relatives_count
     * @method HasMany|_IH_PurchaseNotificationRoleGroupContent_QB allRelatives()
     * @property _IH_Bundle_C|Bundle[] $bundles
     * @property-read int $bundles_count
     * @method BelongsToMany|_IH_Bundle_QB bundles()
     * @property _IH_Product_C|Product[] $products
     * @property-read int $products_count
     * @method BelongsToMany|_IH_Product_QB products()
     * @property _IH_Role_C|Role[] $roles
     * @property-read int $roles_count
     * @method BelongsToMany|_IH_Role_QB roles()
     * @property _IH_Group_C|Group[] $userGroups
     * @property-read int $user_groups_count
     * @method BelongsToMany|_IH_Group_QB userGroups()
     * @property _IH_Webinar_C|Webinar[] $webinars
     * @property-read int $webinars_count
     * @method BelongsToMany|_IH_Webinar_QB webinars()
     * @method static _IH_PurchaseNotification_QB onWriteConnection()
     * @method _IH_PurchaseNotification_QB newQuery()
     * @method static _IH_PurchaseNotification_QB on(null|string $connection = null)
     * @method static _IH_PurchaseNotification_QB query()
     * @method static _IH_PurchaseNotification_QB with(array|string $relations)
     * @method _IH_PurchaseNotification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PurchaseNotification_C|PurchaseNotification[] all()
     * @foreignLinks id,\App\Models\Translation\PurchaseNotificationTranslation,purchase_notification_id|id,\App\Models\PurchaseNotificationRoleGroupContent,purchase_notification_id|id,\App\Models\PurchaseNotificationHistory,purchase_notification_id
     * @mixin _IH_PurchaseNotification_QB
     */
    class PurchaseNotification extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $purchase_notification_id
     * @property string $display_type
     * @property int $count_view
     * @property bool $session_ended Get True After the user login, we update all the per_session records
     * @method static _IH_PurchaseNotificationHistory_QB onWriteConnection()
     * @method _IH_PurchaseNotificationHistory_QB newQuery()
     * @method static _IH_PurchaseNotificationHistory_QB on(null|string $connection = null)
     * @method static _IH_PurchaseNotificationHistory_QB query()
     * @method static _IH_PurchaseNotificationHistory_QB with(array|string $relations)
     * @method _IH_PurchaseNotificationHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PurchaseNotificationHistory_C|PurchaseNotificationHistory[] all()
     * @ownLinks purchase_notification_id,\App\Models\PurchaseNotification,id
     * @mixin _IH_PurchaseNotificationHistory_QB
     */
    class PurchaseNotificationHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $purchase_notification_id
     * @property int|null $role_id
     * @property int|null $group_id
     * @property int|null $webinar_id
     * @property int|null $bundle_id
     * @property int|null $product_id
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Group|null $group
     * @method BelongsTo|_IH_Group_QB group()
     * @property Product|null $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property Role|null $role
     * @method BelongsTo|_IH_Role_QB role()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_PurchaseNotificationRoleGroupContent_QB onWriteConnection()
     * @method _IH_PurchaseNotificationRoleGroupContent_QB newQuery()
     * @method static _IH_PurchaseNotificationRoleGroupContent_QB on(null|string $connection = null)
     * @method static _IH_PurchaseNotificationRoleGroupContent_QB query()
     * @method static _IH_PurchaseNotificationRoleGroupContent_QB with(array|string $relations)
     * @method _IH_PurchaseNotificationRoleGroupContent_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_PurchaseNotificationRoleGroupContent_C|PurchaseNotificationRoleGroupContent[] all()
     * @ownLinks purchase_notification_id,\App\Models\PurchaseNotification,id|role_id,\App\Models\Role,id|group_id,\App\Models\Group,id|webinar_id,\App\Models\Api\Webinar,id|product_id,\App\Models\Api\Product,id
     * @mixin _IH_PurchaseNotificationRoleGroupContent_QB
     */
    class PurchaseNotificationRoleGroupContent extends Model {}
    
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
     * @property-read $description attribute
     * @property-read $title attribute
     * @property _IH_Certificate_C|Certificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|_IH_Certificate_QB certificates()
     * @property WebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_QuizzesQuestion_C|QuizzesQuestion[] $quizQuestions
     * @property-read int $quiz_questions_count
     * @method HasMany|_IH_QuizzesQuestion_QB quizQuestions()
     * @property _IH_QuizzesResult_C|QuizzesResult[] $quizResults
     * @property-read int $quiz_results_count
     * @method HasMany|_IH_QuizzesResult_QB quizResults()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Quiz_QB onWriteConnection()
     * @method _IH_Quiz_QB newQuery()
     * @method static _IH_Quiz_QB on(null|string $connection = null)
     * @method static _IH_Quiz_QB query()
     * @method static _IH_Quiz_QB with(array|string $relations)
     * @method _IH_Quiz_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Quiz_C|Quiz[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Api\Certificate,quiz_id|id,\App\Models\Api\QuizzesResult,quiz_id|id,\App\Models\Api\QuizzesQuestion,quiz_id|id,\App\Models\Translation\QuizTranslation,quiz_id
     * @mixin _IH_Quiz_QB
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
     * @property-read $correct attribute
     * @property-read $title attribute
     * @property _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] $quizzesQuestionsAnswers
     * @property-read int $quizzes_questions_answers_count
     * @method HasMany|_IH_QuizzesQuestionsAnswer_QB quizzesQuestionsAnswers()
     * @method static _IH_QuizzesQuestion_QB onWriteConnection()
     * @method _IH_QuizzesQuestion_QB newQuery()
     * @method static _IH_QuizzesQuestion_QB on(null|string $connection = null)
     * @method static _IH_QuizzesQuestion_QB query()
     * @method static _IH_QuizzesQuestion_QB with(array|string $relations)
     * @method _IH_QuizzesQuestion_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizzesQuestion_C|QuizzesQuestion[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id
     * @foreignLinks id,\App\Models\Api\QuizzesQuestionsAnswer,question_id|id,\App\Models\Translation\QuizzesQuestionTranslation,quizzes_question_id
     * @mixin _IH_QuizzesQuestion_QB
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
     * @property-read $title attribute
     * @method static _IH_QuizzesQuestionsAnswer_QB onWriteConnection()
     * @method _IH_QuizzesQuestionsAnswer_QB newQuery()
     * @method static _IH_QuizzesQuestionsAnswer_QB on(null|string $connection = null)
     * @method static _IH_QuizzesQuestionsAnswer_QB query()
     * @method static _IH_QuizzesQuestionsAnswer_QB with(array|string $relations)
     * @method _IH_QuizzesQuestionsAnswer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizzesQuestionsAnswer_C|QuizzesQuestionsAnswer[] all()
     * @ownLinks question_id,\App\Models\Api\QuizzesQuestion,id
     * @foreignLinks id,\App\Models\Translation\QuizzesQuestionsAnswerTranslation,quizzes_questions_answer_id
     * @mixin _IH_QuizzesQuestionsAnswer_QB
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
     * @property Quiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @method static _IH_QuizzesResult_QB onWriteConnection()
     * @method _IH_QuizzesResult_QB newQuery()
     * @method static _IH_QuizzesResult_QB on(null|string $connection = null)
     * @method static _IH_QuizzesResult_QB query()
     * @method static _IH_QuizzesResult_QB with(array|string $relations)
     * @method _IH_QuizzesResult_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_QuizzesResult_C|QuizzesResult[] all()
     * @ownLinks quiz_id,\App\Models\Api\Quiz,id
     * @foreignLinks id,\App\Models\Api\Certificate,quiz_result_id
     * @mixin _IH_QuizzesResult_QB
     */
    class QuizzesResult extends Model {}
    
    /**
     * @property int $id
     * @property int|null $country_id
     * @property int|null $province_id
     * @property int|null $city_id
     * @property mixed|null $geo_center
     * @property string $type
     * @property string $title
     * @property int $created_at
     * @method static _IH_Region_QB onWriteConnection()
     * @method _IH_Region_QB newQuery()
     * @method static _IH_Region_QB on(null|string $connection = null)
     * @method static _IH_Region_QB query()
     * @method static _IH_Region_QB with(array|string $relations)
     * @method _IH_Region_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Region_C|Region[] all()
     * @ownLinks country_id,\App\Models\Region,id|province_id,\App\Models\Region,id|city_id,\App\Models\Region,id
     * @foreignLinks id,\App\Models\Region,country_id|id,\App\Models\Region,province_id|id,\App\Models\Region,city_id
     * @mixin _IH_Region_QB
     */
    class Region extends Model {}
    
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
     * @property-read $title attribute
     * @property _IH_Sale_C|Sale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @method static _IH_RegistrationPackage_QB onWriteConnection()
     * @method _IH_RegistrationPackage_QB newQuery()
     * @method static _IH_RegistrationPackage_QB on(null|string $connection = null)
     * @method static _IH_RegistrationPackage_QB query()
     * @method static _IH_RegistrationPackage_QB with(array|string $relations)
     * @method _IH_RegistrationPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RegistrationPackage_C|RegistrationPackage[] all()
     * @foreignLinks id,\App\Models\Translation\RegistrationPackageTranslation,registration_package_id|id,\App\Models\InstallmentSpecificationItem,registration_package_id|id,\App\Models\InstallmentOrder,registration_package_id|id,\App\Models\CashbackRuleSpecificationItem,registration_package_id|id,\App\Models\SpecialOffer,registration_package_id|id,\App\Models\OrderItem,registration_package_id|id,\App\Models\Api\Sale,registration_package_id|id,\App\Models\Api\Accounting,registration_package_id
     * @mixin _IH_RegistrationPackage_QB
     */
    class RegistrationPackage extends Model {}
    
    /**
     * @property int $id
     * @property int|null $creator_id
     * @property int $targetable_id
     * @property string $targetable_type
     * @property int $course_id
     * @property int|null $order
     * @property Webinar $course
     * @method BelongsTo|_IH_Webinar_QB course()
     * @property Model $targetable
     * @method MorphTo targetable()
     * @method static _IH_RelatedCourse_QB onWriteConnection()
     * @method _IH_RelatedCourse_QB newQuery()
     * @method static _IH_RelatedCourse_QB on(null|string $connection = null)
     * @method static _IH_RelatedCourse_QB query()
     * @method static _IH_RelatedCourse_QB with(array|string $relations)
     * @method _IH_RelatedCourse_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_RelatedCourse_C|RelatedCourse[] all()
     * @ownLinks course_id,\App\Models\Api\Webinar,id
     * @mixin _IH_RelatedCourse_QB
     */
    class RelatedCourse extends Model {}
    
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
     * @property Meeting $meeting
     * @method BelongsTo|_IH_Meeting_QB meeting()
     * @property MeetingTime $meetingTime
     * @method BelongsTo|_IH_MeetingTime_QB meetingTime()
     * @property Sale|null $sale
     * @method BelongsTo|_IH_Sale_QB sale()
     * @property Session $session
     * @method HasOne|_IH_Session_QB session()
     * @method static _IH_ReserveMeeting_QB onWriteConnection()
     * @method _IH_ReserveMeeting_QB newQuery()
     * @method static _IH_ReserveMeeting_QB on(null|string $connection = null)
     * @method static _IH_ReserveMeeting_QB query()
     * @method static _IH_ReserveMeeting_QB with(array|string $relations)
     * @method _IH_ReserveMeeting_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_ReserveMeeting_C|ReserveMeeting[] all()
     * @ownLinks meeting_id,\App\Models\Api\Meeting,id|meeting_time_id,\App\Models\Api\MeetingTime,id|sale_id,\App\Models\Api\Sale,id
     * @foreignLinks id,\App\Models\OrderItem,reserve_meeting_id|id,\App\Models\Api\Cart,reserve_meeting_id|id,\App\Models\Api\Session,reserve_meeting_id
     * @mixin _IH_ReserveMeeting_QB
     */
    class ReserveMeeting extends Model {}
    
    /**
     * @property int $id
     * @property string $type
     * @property int|null $score
     * @property string|null $condition
     * @property string $status
     * @property int $created_at
     * @method static _IH_Reward_QB onWriteConnection()
     * @method _IH_Reward_QB newQuery()
     * @method static _IH_Reward_QB on(null|string $connection = null)
     * @method static _IH_Reward_QB query()
     * @method static _IH_Reward_QB with(array|string $relations)
     * @method _IH_Reward_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Reward_C|Reward[] all()
     * @mixin _IH_Reward_QB
     */
    class Reward extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $item_id
     * @property string $type
     * @property int $score
     * @property string $status
     * @property int $created_at
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
     * @property string $name
     * @property string $caption
     * @property int $users_count
     * @property bool $is_admin
     * @property int $created_at
     * @method static _IH_Role_QB onWriteConnection()
     * @method _IH_Role_QB newQuery()
     * @method static _IH_Role_QB on(null|string $connection = null)
     * @method static _IH_Role_QB query()
     * @method static _IH_Role_QB with(array|string $relations)
     * @method _IH_Role_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Role_C|Role[] all()
     * @foreignLinks id,\App\Models\Permission,role_id|id,\App\Models\Forum,role_id|id,\App\Models\NavbarButton,role_id|id,\App\Models\FormRoleUserGroup,role_id|id,\App\Models\PurchaseNotificationRoleGroupContent,role_id
     * @mixin _IH_Role_QB
     */
    class Role extends Model {}
    
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
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Gift|null $gift
     * @method BelongsTo|_IH_Gift_QB gift()
     * @property InstallmentOrderPayment|null $installmentOrderPayment
     * @method BelongsTo|_IH_InstallmentOrderPayment_QB installmentOrderPayment()
     * @property Meeting|null $meeting
     * @method BelongsTo|_IH_Meeting_QB meeting()
     * @property Order $order
     * @method BelongsTo|_IH_Order_QB order()
     * @property ProductOrder|null $productOrder
     * @method BelongsTo|_IH_ProductOrder_QB productOrder()
     * @property Promotion|null $promotion
     * @method BelongsTo|_IH_Promotion_QB promotion()
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property SaleLog $saleLog
     * @method HasOne|_IH_SaleLog_QB saleLog()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Ticket|null $ticket
     * @method BelongsTo|_IH_Ticket_QB ticket()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Sale_QB onWriteConnection()
     * @method _IH_Sale_QB newQuery()
     * @method static _IH_Sale_QB on(null|string $connection = null)
     * @method static _IH_Sale_QB query()
     * @method static _IH_Sale_QB with(array|string $relations)
     * @method _IH_Sale_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Sale_C|Sale[] all()
     * @ownLinks order_id,\App\Models\Order,id|webinar_id,\App\Models\Api\Webinar,id|meeting_id,\App\Models\Api\Meeting,id|ticket_id,\App\Models\Api\Ticket,id|promotion_id,\App\Models\Promotion,id|installment_payment_id,\App\Models\InstallmentOrderPayment,id|meeting_time_id,\App\Models\Api\MeetingTime,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id|product_order_id,\App\Models\Api\ProductOrder,id|gift_id,\App\Models\Gift,id
     * @foreignLinks id,\App\Models\SubscribeUse,sale_id|id,\App\Models\SaleLog,sale_id|id,\App\Models\Api\ReserveMeeting,sale_id|id,\App\Models\InstallmentOrderPayment,sale_id|id,\App\Models\Api\ProductOrder,sale_id
     * @mixin _IH_Sale_QB
     */
    class Sale extends Model {}
    
    /**
     * @property int $id
     * @property int $sale_id
     * @property int $viewed_at
     * @method static _IH_SaleLog_QB onWriteConnection()
     * @method _IH_SaleLog_QB newQuery()
     * @method static _IH_SaleLog_QB on(null|string $connection = null)
     * @method static _IH_SaleLog_QB query()
     * @method static _IH_SaleLog_QB with(array|string $relations)
     * @method _IH_SaleLog_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SaleLog_C|SaleLog[] all()
     * @ownLinks sale_id,\App\Models\Api\Sale,id
     * @mixin _IH_SaleLog_QB
     */
    class SaleLog extends Model {}
    
    /**
     * @property int $id
     * @property string $name
     * @property int|null $section_group_id
     * @property string $caption
     * @property string $type
     * @method static _IH_Section_QB onWriteConnection()
     * @method _IH_Section_QB newQuery()
     * @method static _IH_Section_QB on(null|string $connection = null)
     * @method static _IH_Section_QB query()
     * @method static _IH_Section_QB with(array|string $relations)
     * @method _IH_Section_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Section_C|Section[] all()
     * @foreignLinks id,\App\Models\Permission,section_id
     * @mixin _IH_Section_QB
     */
    class Section extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $installment_id
     * @property int $installment_order_id
     * @property int|null $start_date
     * @property int|null $end_date
     * @property float|null $upfront
     * @property string|null $upfront_type
     * @property int $created_at
     * @property Installment $installment
     * @method BelongsTo|_IH_Installment_QB installment()
     * @property InstallmentOrder $order
     * @method BelongsTo|_IH_InstallmentOrder_QB order()
     * @property _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] $steps
     * @property-read int $steps_count
     * @method HasMany|_IH_SelectedInstallmentStep_QB steps()
     * @method static _IH_SelectedInstallment_QB onWriteConnection()
     * @method _IH_SelectedInstallment_QB newQuery()
     * @method static _IH_SelectedInstallment_QB on(null|string $connection = null)
     * @method static _IH_SelectedInstallment_QB query()
     * @method static _IH_SelectedInstallment_QB with(array|string $relations)
     * @method _IH_SelectedInstallment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SelectedInstallment_C|SelectedInstallment[] all()
     * @ownLinks installment_id,\App\Models\Installment,id|installment_order_id,\App\Models\InstallmentOrder,id
     * @foreignLinks id,\App\Models\SelectedInstallmentStep,selected_installment_id
     * @mixin _IH_SelectedInstallment_QB
     */
    class SelectedInstallment extends Model {}
    
    /**
     * @property int $id
     * @property int $selected_installment_id
     * @property int $installment_step_id
     * @property int|null $deadline
     * @property float|null $amount
     * @property string|null $amount_type
     * @property-read null $title attribute
     * @property InstallmentStep $installmentStep
     * @method BelongsTo|_IH_InstallmentStep_QB installmentStep()
     * @property InstallmentOrderPayment $orderPayment
     * @method HasOne|_IH_InstallmentOrderPayment_QB orderPayment()
     * @property SelectedInstallment $selectedInstallment
     * @method BelongsTo|_IH_SelectedInstallment_QB selectedInstallment()
     * @method static _IH_SelectedInstallmentStep_QB onWriteConnection()
     * @method _IH_SelectedInstallmentStep_QB newQuery()
     * @method static _IH_SelectedInstallmentStep_QB on(null|string $connection = null)
     * @method static _IH_SelectedInstallmentStep_QB query()
     * @method static _IH_SelectedInstallmentStep_QB with(array|string $relations)
     * @method _IH_SelectedInstallmentStep_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SelectedInstallmentStep_C|SelectedInstallmentStep[] all()
     * @ownLinks selected_installment_id,\App\Models\SelectedInstallment,id|installment_step_id,\App\Models\InstallmentStep,id
     * @foreignLinks id,\App\Models\InstallmentOrderPayment,selected_installment_step_id
     * @mixin _IH_SelectedInstallmentStep_QB
     */
    class SelectedInstallmentStep extends Model {}
    
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
     * @property-read $title attribute
     * @property AgoraHistory $agoraHistory
     * @method HasOne|_IH_AgoraHistory_QB agoraHistory()
     * @property WebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property _IH_SessionRemind_C|SessionRemind[] $sessionReminds
     * @property-read int $session_reminds_count
     * @method HasMany|_IH_SessionRemind_QB sessionReminds()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Session_QB onWriteConnection()
     * @method _IH_Session_QB newQuery()
     * @method static _IH_Session_QB on(null|string $connection = null)
     * @method static _IH_Session_QB query()
     * @method static _IH_Session_QB with(array|string $relations)
     * @method _IH_Session_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Session_C|Session[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id|reserve_meeting_id,\App\Models\Api\ReserveMeeting,id
     * @foreignLinks id,\App\Models\CourseLearning,session_id|id,\App\Models\SessionRemind,session_id|id,\App\Models\Translation\SessionTranslation,session_id|id,\App\Models\AgoraHistory,session_id|id,\App\Models\UserLoginHistory,session_id
     * @mixin _IH_Session_QB
     */
    class Session extends Model {}
    
    /**
     * @property int $id
     * @property int $session_id
     * @property int $user_id
     * @property int $created_at
     * @method static _IH_SessionRemind_QB onWriteConnection()
     * @method _IH_SessionRemind_QB newQuery()
     * @method static _IH_SessionRemind_QB on(null|string $connection = null)
     * @method static _IH_SessionRemind_QB query()
     * @method static _IH_SessionRemind_QB with(array|string $relations)
     * @method _IH_SessionRemind_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SessionRemind_C|SessionRemind[] all()
     * @ownLinks session_id,\App\Models\Api\Session,id
     * @mixin _IH_SessionRemind_QB
     */
    class SessionRemind extends Model {}
    
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
     * @property int $creator_id
     * @property int $webinar_id
     * @property string|null $name
     * @property int $percent
     * @property string $status
     * @property int $created_at
     * @property int $from_date
     * @property int $to_date
     * @property int|null $bundle_id
     * @property int|null $subscribe_id
     * @property int|null $registration_package_id
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property Product $product
     * @method BelongsTo|_IH_Product_QB product()
     * @property RegistrationPackage|null $registrationPackage
     * @method BelongsTo|_IH_RegistrationPackage_QB registrationPackage()
     * @property Subscribe|null $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_SpecialOffer_QB onWriteConnection()
     * @method _IH_SpecialOffer_QB newQuery()
     * @method static _IH_SpecialOffer_QB on(null|string $connection = null)
     * @method static _IH_SpecialOffer_QB query()
     * @method static _IH_SpecialOffer_QB with(array|string $relations)
     * @method _IH_SpecialOffer_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SpecialOffer_C|SpecialOffer[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|subscribe_id,\App\Models\Api\Subscribe,id|registration_package_id,\App\Models\Api\RegistrationPackage,id
     * @foreignLinks id,\App\Models\Api\Cart,special_offer_id
     * @mixin _IH_SpecialOffer_QB
     */
    class SpecialOffer extends Model {}
    
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
     * @property-read $title attribute
     * @property _IH_Sale_C|Sale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property _IH_SubscribeUse_C|SubscribeUse[] $uses
     * @property-read int $uses_count
     * @method HasMany|_IH_SubscribeUse_QB uses()
     * @method static _IH_Subscribe_QB onWriteConnection()
     * @method _IH_Subscribe_QB newQuery()
     * @method static _IH_Subscribe_QB on(null|string $connection = null)
     * @method static _IH_Subscribe_QB query()
     * @method static _IH_Subscribe_QB with(array|string $relations)
     * @method _IH_Subscribe_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Subscribe_C|Subscribe[] all()
     * @foreignLinks id,\App\Models\OrderItem,subscribe_id|id,\App\Models\SubscribeUse,subscribe_id|id,\App\Models\Api\Cart,subscribe_id|id,\App\Models\Translation\SubscribeTranslation,subscribe_id|id,\App\Models\SubscribeRemind,subscribe_id|id,\App\Models\InstallmentSpecificationItem,subscribe_id|id,\App\Models\InstallmentOrder,subscribe_id|id,\App\Models\CashbackRuleSpecificationItem,subscribe_id|id,\App\Models\SpecialOffer,subscribe_id|id,\App\Models\Api\Sale,subscribe_id|id,\App\Models\Api\Accounting,subscribe_id
     * @mixin _IH_Subscribe_QB
     */
    class Subscribe extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $subscribe_id
     * @property int $created_at
     * @method static _IH_SubscribeRemind_QB onWriteConnection()
     * @method _IH_SubscribeRemind_QB newQuery()
     * @method static _IH_SubscribeRemind_QB on(null|string $connection = null)
     * @method static _IH_SubscribeRemind_QB query()
     * @method static _IH_SubscribeRemind_QB with(array|string $relations)
     * @method _IH_SubscribeRemind_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubscribeRemind_C|SubscribeRemind[] all()
     * @ownLinks subscribe_id,\App\Models\Api\Subscribe,id
     * @mixin _IH_SubscribeRemind_QB
     */
    class SubscribeRemind extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $subscribe_id
     * @property int $webinar_id
     * @property int $sale_id
     * @property int|null $bundle_id
     * @property int|null $installment_order_id
     * @property InstallmentOrder|null $installmentOrder
     * @method BelongsTo|_IH_InstallmentOrder_QB installmentOrder()
     * @property Sale $sale
     * @method HasOne|_IH_Sale_QB sale()
     * @property Subscribe $subscribe
     * @method BelongsTo|_IH_Subscribe_QB subscribe()
     * @method static _IH_SubscribeUse_QB onWriteConnection()
     * @method _IH_SubscribeUse_QB newQuery()
     * @method static _IH_SubscribeUse_QB on(null|string $connection = null)
     * @method static _IH_SubscribeUse_QB query()
     * @method static _IH_SubscribeUse_QB with(array|string $relations)
     * @method _IH_SubscribeUse_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SubscribeUse_C|SubscribeUse[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|subscribe_id,\App\Models\Api\Subscribe,id|sale_id,\App\Models\Api\Sale,id|installment_order_id,\App\Models\InstallmentOrder,id
     * @mixin _IH_SubscribeUse_QB
     */
    class SubscribeUse extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $webinar_id
     * @property int|null $department_id
     * @property string $title
     * @property string $status
     * @property int|null $created_at
     * @property int|null $updated_at
     * @property _IH_SupportConversation_C|SupportConversation[] $conversations
     * @property-read int $conversations_count
     * @method HasMany|_IH_SupportConversation_QB conversations()
     * @property SupportDepartment|null $department
     * @method BelongsTo|_IH_SupportDepartment_QB department()
     * @property Webinar|null $webinar
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
     * @method static _IH_SupportConversation_QB onWriteConnection()
     * @method _IH_SupportConversation_QB newQuery()
     * @method static _IH_SupportConversation_QB on(null|string $connection = null)
     * @method static _IH_SupportConversation_QB query()
     * @method static _IH_SupportConversation_QB with(array|string $relations)
     * @method _IH_SupportConversation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportConversation_C|SupportConversation[] all()
     * @ownLinks support_id,\App\Models\Api\Support,id|support_id,\App\Models\Api\Support,id
     * @mixin _IH_SupportConversation_QB
     */
    class SupportConversation extends Model {}
    
    /**
     * @property int $id
     * @property int $created_at
     * @property string|null $icon
     * @property string|null $color
     * @property-read $title attribute
     * @property _IH_Support_C|Support[] $supports
     * @property-read int $supports_count
     * @method HasMany|_IH_Support_QB supports()
     * @method static _IH_SupportDepartment_QB onWriteConnection()
     * @method _IH_SupportDepartment_QB newQuery()
     * @method static _IH_SupportDepartment_QB on(null|string $connection = null)
     * @method static _IH_SupportDepartment_QB query()
     * @method static _IH_SupportDepartment_QB with(array|string $relations)
     * @method _IH_SupportDepartment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_SupportDepartment_C|SupportDepartment[] all()
     * @foreignLinks id,\App\Models\Api\Support,department_id|id,\App\Models\Translation\SupportDepartmentTranslation,support_department_id
     * @mixin _IH_SupportDepartment_QB
     */
    class SupportDepartment extends Model {}
    
    /**
     * @property int $id
     * @property string $title
     * @property int $webinar_id
     * @property int|null $bundle_id
     * @property int|null $upcoming_course_id
     * @method static _IH_Tag_QB onWriteConnection()
     * @method _IH_Tag_QB newQuery()
     * @method static _IH_Tag_QB on(null|string $connection = null)
     * @method static _IH_Tag_QB query()
     * @method static _IH_Tag_QB with(array|string $relations)
     * @method _IH_Tag_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Tag_C|Tag[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @foreignLinks 
     * @mixin _IH_Tag_QB
     */
    class Tag extends Model {}
    
    /**
     * @property int $id
     * @property string $user_avatar
     * @property string $rate
     * @property string $status
     * @property int $created_at
     * @property-read $comment attribute
     * @property-read $user_bio attribute
     * @property-read $user_name attribute
     * @method static _IH_Testimonial_QB onWriteConnection()
     * @method _IH_Testimonial_QB newQuery()
     * @method static _IH_Testimonial_QB on(null|string $connection = null)
     * @method static _IH_Testimonial_QB query()
     * @method static _IH_Testimonial_QB with(array|string $relations)
     * @method _IH_Testimonial_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Testimonial_C|Testimonial[] all()
     * @foreignLinks id,\App\Models\Translation\TestimonialTranslation,testimonial_id
     * @mixin _IH_Testimonial_QB
     */
    class Testimonial extends Model {}
    
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
     * @property-read $content attribute
     * @property-read $summary attribute
     * @property-read $title attribute
     * @property _IH_TextLessonAttachment_C|TextLessonAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_TextLessonAttachment_QB attachments()
     * @property WebinarChapter|null $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property CourseLearning $learningStatus
     * @method HasOne|_IH_CourseLearning_QB learningStatus()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
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
     * @property File $file
     * @method BelongsTo|_IH_File_QB file()
     * @method static _IH_TextLessonAttachment_QB onWriteConnection()
     * @method _IH_TextLessonAttachment_QB newQuery()
     * @method static _IH_TextLessonAttachment_QB on(null|string $connection = null)
     * @method static _IH_TextLessonAttachment_QB query()
     * @method static _IH_TextLessonAttachment_QB with(array|string $relations)
     * @method _IH_TextLessonAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TextLessonAttachment_C|TextLessonAttachment[] all()
     * @ownLinks text_lesson_id,\App\Models\Api\TextLesson,id|file_id,\App\Models\Api\File,id
     * @mixin _IH_TextLessonAttachment_QB
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
     * @property-read $title attribute
     * @method static _IH_Ticket_QB onWriteConnection()
     * @method _IH_Ticket_QB newQuery()
     * @method static _IH_Ticket_QB on(null|string $connection = null)
     * @method static _IH_Ticket_QB query()
     * @method static _IH_Ticket_QB with(array|string $relations)
     * @method _IH_Ticket_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Ticket_C|Ticket[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\Cart,ticket_id|id,\App\Models\OrderItem,ticket_id|id,\App\Models\Api\Sale,ticket_id|id,\App\Models\TicketUser,ticket_id|id,\App\Models\Translation\TicketTranslation,ticket_id
     * @mixin _IH_Ticket_QB
     */
    class Ticket extends Model {}
    
    /**
     * @property int $id
     * @property int $ticket_id
     * @property int $user_id
     * @property int $created_at
     * @method static _IH_TicketUser_QB onWriteConnection()
     * @method _IH_TicketUser_QB newQuery()
     * @method static _IH_TicketUser_QB on(null|string $connection = null)
     * @method static _IH_TicketUser_QB query()
     * @method static _IH_TicketUser_QB with(array|string $relations)
     * @method _IH_TicketUser_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_TicketUser_C|TicketUser[] all()
     * @ownLinks ticket_id,\App\Models\Api\Ticket,id
     * @mixin _IH_TicketUser_QB
     */
    class TicketUser extends Model {}
    
    /**
     * @property int $id
     * @property int $category_id
     * @property string $icon
     * @property string $color
     * @property int $created_at
     * @property Category $category
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
     * @property int $creator_id
     * @property int $teacher_id
     * @property int|null $category_id
     * @property int|null $webinar_id when assigned a course
     * @property string $type
     * @property string $slug
     * @property string|null $thumbnail
     * @property string|null $image_cover
     * @property string|null $video_demo
     * @property string|null $video_demo_source
     * @property int|null $publish_date
     * @property string|null $timezone
     * @property int|null $points
     * @property int|null $capacity
     * @property float|null $price
     * @property int|null $duration
     * @property int|null $sections
     * @property int|null $parts
     * @property int|null $course_progress
     * @property bool $support
     * @property bool $certificate
     * @property bool $include_quizzes
     * @property bool $downloadable
     * @property bool $forum
     * @property string|null $message_for_reviewer
     * @property string $status
     * @property int $created_at
     * @property-read $description attribute
     * @property-read $seo_description attribute
     * @property-read $title attribute
     * @property Category|null $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property _IH_WebinarExtraDescription_C|WebinarExtraDescription[] $extraDescriptions
     * @property-read int $extra_descriptions_count
     * @method HasMany|_IH_WebinarExtraDescription_QB extraDescriptions()
     * @property _IH_Faq_C|Faq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_Faq_QB faqs()
     * @property _IH_Favorite_C|Favorite[] $favorite
     * @property-read int $favorite_count
     * @method HasMany|_IH_Favorite_QB favorite()
     * @property _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] $filterOptions
     * @property-read int $filter_options_count
     * @method HasMany|_IH_UpcomingCourseFilterOption_QB filterOptions()
     * @property _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] $followers
     * @property-read int $followers_count
     * @method HasMany|_IH_UpcomingCourseFollower_QB followers()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method HasMany|_IH_Tag_QB tags()
     * @property Webinar|null $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_UpcomingCourse_QB onWriteConnection()
     * @method _IH_UpcomingCourse_QB newQuery()
     * @method static _IH_UpcomingCourse_QB on(null|string $connection = null)
     * @method static _IH_UpcomingCourse_QB query()
     * @method static _IH_UpcomingCourse_QB with(array|string $relations)
     * @method _IH_UpcomingCourse_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UpcomingCourse_C|UpcomingCourse[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id|webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Translation\UpcomingCourseTranslation,upcoming_course_id|id,\App\Models\UpcomingCourseFilterOption,upcoming_course_id|id,\App\Models\UpcomingCourseFollower,upcoming_course_id|id,\App\Models\UpcomingCourseReport,upcoming_course_id|id,\App\Models\Tag,upcoming_course_id|id,\App\Models\Api\Faq,upcoming_course_id|id,\App\Models\Api\Favorite,upcoming_course_id|id,\App\Models\Api\Comment,upcoming_course_id|id,\App\Models\WebinarExtraDescription,upcoming_course_id
     * @mixin _IH_UpcomingCourse_QB
     */
    class UpcomingCourse extends Model {}
    
    /**
     * @property int $id
     * @property int $upcoming_course_id
     * @property int $filter_option_id
     * @method static _IH_UpcomingCourseFilterOption_QB onWriteConnection()
     * @method _IH_UpcomingCourseFilterOption_QB newQuery()
     * @method static _IH_UpcomingCourseFilterOption_QB on(null|string $connection = null)
     * @method static _IH_UpcomingCourseFilterOption_QB query()
     * @method static _IH_UpcomingCourseFilterOption_QB with(array|string $relations)
     * @method _IH_UpcomingCourseFilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UpcomingCourseFilterOption_C|UpcomingCourseFilterOption[] all()
     * @ownLinks upcoming_course_id,\App\Models\UpcomingCourse,id|filter_option_id,\App\Models\FilterOption,id
     * @mixin _IH_UpcomingCourseFilterOption_QB
     */
    class UpcomingCourseFilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int $upcoming_course_id
     * @property int $user_id
     * @property int $created_at
     * @method static _IH_UpcomingCourseFollower_QB onWriteConnection()
     * @method _IH_UpcomingCourseFollower_QB newQuery()
     * @method static _IH_UpcomingCourseFollower_QB on(null|string $connection = null)
     * @method static _IH_UpcomingCourseFollower_QB query()
     * @method static _IH_UpcomingCourseFollower_QB with(array|string $relations)
     * @method _IH_UpcomingCourseFollower_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UpcomingCourseFollower_C|UpcomingCourseFollower[] all()
     * @ownLinks upcoming_course_id,\App\Models\UpcomingCourse,id
     * @mixin _IH_UpcomingCourseFollower_QB
     */
    class UpcomingCourseFollower extends Model {}
    
    /**
     * @property int $id
     * @property int $upcoming_course_id
     * @property int $user_id
     * @property string $reason
     * @property string $message
     * @property int $created_at
     * @property UpcomingCourse $upcomingCourse
     * @method BelongsTo|_IH_UpcomingCourse_QB upcomingCourse()
     * @method static _IH_UpcomingCourseReport_QB onWriteConnection()
     * @method _IH_UpcomingCourseReport_QB newQuery()
     * @method static _IH_UpcomingCourseReport_QB on(null|string $connection = null)
     * @method static _IH_UpcomingCourseReport_QB query()
     * @method static _IH_UpcomingCourseReport_QB with(array|string $relations)
     * @method _IH_UpcomingCourseReport_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UpcomingCourseReport_C|UpcomingCourseReport[] all()
     * @ownLinks upcoming_course_id,\App\Models\UpcomingCourse,id
     * @mixin _IH_UpcomingCourseReport_QB
     */
    class UpcomingCourseReport extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $badge_id
     * @property int $created_at
     * @property Badge $badge
     * @method BelongsTo|_IH_Badge_QB badge()
     * @method static _IH_UserBadge_QB onWriteConnection()
     * @method _IH_UserBadge_QB newQuery()
     * @method static _IH_UserBadge_QB on(null|string $connection = null)
     * @method static _IH_UserBadge_QB query()
     * @method static _IH_UserBadge_QB with(array|string $relations)
     * @method _IH_UserBadge_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserBadge_C|UserBadge[] all()
     * @ownLinks badge_id,\App\Models\Badge,id
     * @mixin _IH_UserBadge_QB
     */
    class UserBadge extends Model {}
    
    /**
     * @property int $id
     * @property string $logo
     * @property int $created_at
     * @property-read $title attribute
     * @property _IH_UserBankSpecification_C|UserBankSpecification[] $specifications
     * @property-read int $specifications_count
     * @method HasMany|_IH_UserBankSpecification_QB specifications()
     * @method static _IH_UserBank_QB onWriteConnection()
     * @method _IH_UserBank_QB newQuery()
     * @method static _IH_UserBank_QB on(null|string $connection = null)
     * @method static _IH_UserBank_QB query()
     * @method static _IH_UserBank_QB with(array|string $relations)
     * @method _IH_UserBank_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserBank_C|UserBank[] all()
     * @foreignLinks id,\App\Models\Translation\UserBankTranslation,user_bank_id|id,\App\Models\UserBankSpecification,user_bank_id|id,\App\Models\UserSelectedBank,user_bank_id
     * @mixin _IH_UserBank_QB
     */
    class UserBank extends Model {}
    
    /**
     * @property int $id
     * @property int $user_bank_id
     * @property-read $name attribute
     * @method static _IH_UserBankSpecification_QB onWriteConnection()
     * @method _IH_UserBankSpecification_QB newQuery()
     * @method static _IH_UserBankSpecification_QB on(null|string $connection = null)
     * @method static _IH_UserBankSpecification_QB query()
     * @method static _IH_UserBankSpecification_QB with(array|string $relations)
     * @method _IH_UserBankSpecification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserBankSpecification_C|UserBankSpecification[] all()
     * @ownLinks user_bank_id,\App\Models\UserBank,id
     * @foreignLinks id,\App\Models\Translation\UserBankSpecificationTranslation,user_bank_specification_id|id,\App\Models\UserSelectedBankSpecification,user_bank_specification_id
     * @mixin _IH_UserBankSpecification_QB
     */
    class UserBankSpecification extends Model {}
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int|null $user_group_id
     * @property string $source
     * @property string $type
     * @property float|null $value
     * @method static _IH_UserCommission_QB onWriteConnection()
     * @method _IH_UserCommission_QB newQuery()
     * @method static _IH_UserCommission_QB on(null|string $connection = null)
     * @method static _IH_UserCommission_QB query()
     * @method static _IH_UserCommission_QB with(array|string $relations)
     * @method _IH_UserCommission_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserCommission_C|UserCommission[] all()
     * @ownLinks user_group_id,\App\Models\Group,id
     * @mixin _IH_UserCommission_QB
     */
    class UserCommission extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $type
     * @property string|null $settings
     * @property int $created_at
     * @method static _IH_UserCookieSecurity_QB onWriteConnection()
     * @method _IH_UserCookieSecurity_QB newQuery()
     * @method static _IH_UserCookieSecurity_QB on(null|string $connection = null)
     * @method static _IH_UserCookieSecurity_QB query()
     * @method static _IH_UserCookieSecurity_QB with(array|string $relations)
     * @method _IH_UserCookieSecurity_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserCookieSecurity_C|UserCookieSecurity[] all()
     * @ownLinks 
     * @mixin _IH_UserCookieSecurity_QB
     */
    class UserCookieSecurity extends Model {}
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property int|null $become_instructor_id
     * @property int $form_field_id
     * @property string|null $value
     * @property int $created_at
     * @property FormField $field
     * @method BelongsTo|_IH_FormField_QB field()
     * @method static _IH_UserFormField_QB onWriteConnection()
     * @method _IH_UserFormField_QB newQuery()
     * @method static _IH_UserFormField_QB on(null|string $connection = null)
     * @method static _IH_UserFormField_QB query()
     * @method static _IH_UserFormField_QB with(array|string $relations)
     * @method _IH_UserFormField_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserFormField_C|UserFormField[] all()
     * @ownLinks become_instructor_id,\App\Models\BecomeInstructor,id|form_field_id,\App\Models\FormField,id
     * @mixin _IH_UserFormField_QB
     */
    class UserFormField extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string|null $browser
     * @property string|null $device
     * @property string|null $os
     * @property string|null $ip
     * @property string|null $country
     * @property string|null $city
     * @property object|null $location
     * @property string $session_id
     * @property int|null $session_start_at
     * @property int|null $session_end_at
     * @property string|null $end_session_type
     * @property int $created_at
     * @method static _IH_UserLoginHistory_QB onWriteConnection()
     * @method _IH_UserLoginHistory_QB newQuery()
     * @method static _IH_UserLoginHistory_QB on(null|string $connection = null)
     * @method static _IH_UserLoginHistory_QB query()
     * @method static _IH_UserLoginHistory_QB with(array|string $relations)
     * @method _IH_UserLoginHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserLoginHistory_C|UserLoginHistory[] all()
     * @ownLinks session_id,\App\Models\Api\Session,id
     * @mixin _IH_UserLoginHistory_QB
     */
    class UserLoginHistory extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $name
     * @property string $value
     * @method static _IH_UserMeta_QB onWriteConnection()
     * @method _IH_UserMeta_QB newQuery()
     * @method static _IH_UserMeta_QB on(null|string $connection = null)
     * @method static _IH_UserMeta_QB query()
     * @method static _IH_UserMeta_QB with(array|string $relations)
     * @method _IH_UserMeta_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserMeta_C|UserMeta[] all()
     * @ownLinks 
     * @mixin _IH_UserMeta_QB
     */
    class UserMeta extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $category_id
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @method static _IH_UserOccupation_QB onWriteConnection()
     * @method _IH_UserOccupation_QB newQuery()
     * @method static _IH_UserOccupation_QB on(null|string $connection = null)
     * @method static _IH_UserOccupation_QB query()
     * @method static _IH_UserOccupation_QB with(array|string $relations)
     * @method _IH_UserOccupation_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserOccupation_C|UserOccupation[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @mixin _IH_UserOccupation_QB
     */
    class UserOccupation extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $file_type
     * @property string|null $attachment
     * @property int $created_at
     * @property-read $description attribute
     * @property-read $title attribute
     * @method static _IH_UserProfileAttachment_QB onWriteConnection()
     * @method _IH_UserProfileAttachment_QB newQuery()
     * @method static _IH_UserProfileAttachment_QB on(null|string $connection = null)
     * @method static _IH_UserProfileAttachment_QB query()
     * @method static _IH_UserProfileAttachment_QB with(array|string $relations)
     * @method _IH_UserProfileAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserProfileAttachment_C|UserProfileAttachment[] all()
     * @ownLinks 
     * @foreignLinks id,\App\Models\Translation\UserProfileAttachmentTranslation,user_profile_attachment_id
     * @mixin _IH_UserProfileAttachment_QB
     */
    class UserProfileAttachment extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int|null $instructors_count
     * @property int|null $students_count
     * @property int|null $courses_capacity
     * @property int|null $courses_count
     * @property int|null $meeting_count
     * @property string $status
     * @property int $created_at
     * @method static _IH_UserRegistrationPackage_QB onWriteConnection()
     * @method _IH_UserRegistrationPackage_QB newQuery()
     * @method static _IH_UserRegistrationPackage_QB on(null|string $connection = null)
     * @method static _IH_UserRegistrationPackage_QB query()
     * @method static _IH_UserRegistrationPackage_QB with(array|string $relations)
     * @method _IH_UserRegistrationPackage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserRegistrationPackage_C|UserRegistrationPackage[] all()
     * @ownLinks 
     * @mixin _IH_UserRegistrationPackage_QB
     */
    class UserRegistrationPackage extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $user_bank_id
     * @property UserBank $bank
     * @method BelongsTo|_IH_UserBank_QB bank()
     * @property _IH_Payout_C|Payout[] $payouts
     * @property-read int $payouts_count
     * @method HasMany|_IH_Payout_QB payouts()
     * @property _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] $specifications
     * @property-read int $specifications_count
     * @method HasMany|_IH_UserSelectedBankSpecification_QB specifications()
     * @method static _IH_UserSelectedBank_QB onWriteConnection()
     * @method _IH_UserSelectedBank_QB newQuery()
     * @method static _IH_UserSelectedBank_QB on(null|string $connection = null)
     * @method static _IH_UserSelectedBank_QB query()
     * @method static _IH_UserSelectedBank_QB with(array|string $relations)
     * @method _IH_UserSelectedBank_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserSelectedBank_C|UserSelectedBank[] all()
     * @ownLinks user_bank_id,\App\Models\UserBank,id
     * @foreignLinks id,\App\Models\UserSelectedBankSpecification,user_selected_bank_id|id,\App\Models\Api\Payout,user_selected_bank_id
     * @mixin _IH_UserSelectedBank_QB
     */
    class UserSelectedBank extends Model {}
    
    /**
     * @property int $id
     * @property int $user_selected_bank_id
     * @property int $user_bank_specification_id
     * @property string $value
     * @property UserBankSpecification $bankSpecification
     * @method BelongsTo|_IH_UserBankSpecification_QB bankSpecification()
     * @method static _IH_UserSelectedBankSpecification_QB onWriteConnection()
     * @method _IH_UserSelectedBankSpecification_QB newQuery()
     * @method static _IH_UserSelectedBankSpecification_QB on(null|string $connection = null)
     * @method static _IH_UserSelectedBankSpecification_QB query()
     * @method static _IH_UserSelectedBankSpecification_QB with(array|string $relations)
     * @method _IH_UserSelectedBankSpecification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserSelectedBankSpecification_C|UserSelectedBankSpecification[] all()
     * @ownLinks user_selected_bank_id,\App\Models\UserSelectedBank,id|user_bank_specification_id,\App\Models\UserBankSpecification,id
     * @mixin _IH_UserSelectedBankSpecification_QB
     */
    class UserSelectedBankSpecification extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property string $jwt_token
     * @property int $created_at
     * @property string|null $api_key
     * @property string|null $api_secret
     * @property string|null $account_id
     * @method static _IH_UserZoomApi_QB onWriteConnection()
     * @method _IH_UserZoomApi_QB newQuery()
     * @method static _IH_UserZoomApi_QB on(null|string $connection = null)
     * @method static _IH_UserZoomApi_QB query()
     * @method static _IH_UserZoomApi_QB with(array|string $relations)
     * @method _IH_UserZoomApi_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_UserZoomApi_C|UserZoomApi[] all()
     * @ownLinks 
     * @mixin _IH_UserZoomApi_QB
     */
    class UserZoomApi extends Model {}
    
    /**
     * @property int $id
     * @property int|null $user_id
     * @property string|null $mobile
     * @property string|null $email
     * @property string $code
     * @property int|null $verified_at
     * @property int|null $expired_at
     * @property int $created_at
     * @property DatabaseNotificationCollection|DatabaseNotification[] $notifications
     * @property-read int $notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB notifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $readNotifications
     * @property-read int $read_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB readNotifications()
     * @property DatabaseNotificationCollection|DatabaseNotification[] $unreadNotifications
     * @property-read int $unread_notifications_count
     * @method MorphToMany|_IH_DatabaseNotification_QB unreadNotifications()
     * @method static _IH_Verification_QB onWriteConnection()
     * @method _IH_Verification_QB newQuery()
     * @method static _IH_Verification_QB on(null|string $connection = null)
     * @method static _IH_Verification_QB query()
     * @method static _IH_Verification_QB with(array|string $relations)
     * @method _IH_Verification_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Verification_C|Verification[] all()
     * @ownLinks 
     * @mixin _IH_Verification_QB
     */
    class Verification extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int|null $user_id
     * @property string|null $full_name
     * @property string|null $email
     * @property string|null $phone
     * @property int $created_at
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_Waitlist_QB onWriteConnection()
     * @method _IH_Waitlist_QB newQuery()
     * @method static _IH_Waitlist_QB on(null|string $connection = null)
     * @method static _IH_Waitlist_QB query()
     * @method static _IH_Waitlist_QB with(array|string $relations)
     * @method _IH_Waitlist_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Waitlist_C|Waitlist[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_Waitlist_QB
     */
    class Waitlist extends Model {}
    
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
     * @property-read $description attribute
     * @property-read $seo_description attribute
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|WebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property Category $category
     * @method BelongsTo|_IH_Category_QB category()
     * @property _IH_Certificate_C|Certificate[] $certificates
     * @property-read int $certificates_count
     * @method HasMany|_IH_Certificate_QB certificates()
     * @property _IH_WebinarChapter_C|WebinarChapter[] $chapters
     * @property-read int $chapters_count
     * @method HasMany|_IH_WebinarChapter_QB chapters()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property ContentDeleteRequest $deleteRequest
     * @method MorphToMany|_IH_ContentDeleteRequest_QB deleteRequest()
     * @property _IH_Faq_C|Faq[] $faqs
     * @property-read int $faqs_count
     * @method HasMany|_IH_Faq_QB faqs()
     * @property FeatureWebinar $feature
     * @method HasOne|_IH_FeatureWebinar_QB feature()
     * @property _IH_File_C|File[] $files
     * @property-read int $files_count
     * @method HasMany|_IH_File_QB files()
     * @property _IH_WebinarFilterOption_C|WebinarFilterOption[] $filterOptions
     * @property-read int $filter_options_count
     * @method HasMany|_IH_WebinarFilterOption_QB filterOptions()
     * @property _IH_CourseForum_C|CourseForum[] $forums
     * @property-read int $forums_count
     * @method HasMany|_IH_CourseForum_QB forums()
     * @property _IH_CourseNoticeboard_C|CourseNoticeboard[] $noticeboards
     * @property-read int $noticeboards_count
     * @method HasMany|_IH_CourseNoticeboard_QB noticeboards()
     * @property _IH_Prerequisite_C|Prerequisite[] $prerequisites
     * @property-read int $prerequisites_count
     * @method HasMany|_IH_Prerequisite_QB prerequisites()
     * @property _IH_ProductBadgeContent_C|ProductBadgeContent[] $productBadgeContent
     * @property-read int $product_badge_content_count
     * @method MorphToMany|_IH_ProductBadgeContent_QB productBadgeContent()
     * @property _IH_Purchase_C|Purchase[] $purchases
     * @property-read int $purchases_count
     * @method HasMany|_IH_Purchase_QB purchases()
     * @property _IH_Quiz_C|Quiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property _IH_RelatedCourse_C|RelatedCourse[] $relatedCourses
     * @property-read int $related_courses_count
     * @method MorphToMany|_IH_RelatedCourse_QB relatedCourses()
     * @property _IH_WebinarReview_C|WebinarReview[] $reviews
     * @property-read int $reviews_count
     * @method HasMany|_IH_WebinarReview_QB reviews()
     * @property _IH_Sale_C|Sale[] $sales
     * @property-read int $sales_count
     * @method HasMany|_IH_Sale_QB sales()
     * @property _IH_Session_C|Session[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property _IH_Tag_C|Tag[] $tags
     * @property-read int $tags_count
     * @method HasMany|_IH_Tag_QB tags()
     * @property _IH_TextLesson_C|TextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|_IH_TextLesson_QB textLessons()
     * @property _IH_Ticket_C|Ticket[] $tickets
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
     * @method static _IH_Webinar_QB onWriteConnection()
     * @method _IH_Webinar_QB newQuery()
     * @method static _IH_Webinar_QB on(null|string $connection = null)
     * @method static _IH_Webinar_QB query()
     * @method static _IH_Webinar_QB with(array|string $relations)
     * @method _IH_Webinar_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_Webinar_C|Webinar[] all()
     * @ownLinks category_id,\App\Models\Api\Category,id
     * @foreignLinks id,\App\Models\WebinarPartnerTeacher,webinar_id|id,\App\Models\WebinarFilterOption,webinar_id|id,\App\Models\Api\Prerequisite,webinar_id|id,\App\Models\Api\Prerequisite,prerequisite_id|id,\App\Models\Purchase,webinar_id|id,\App\Models\Api\Favorite,webinar_id|id,\App\Models\Api\Comment,webinar_id|id,\App\Models\Api\Faq,webinar_id|id,\App\Models\Api\File,webinar_id|id,\App\Models\Tag,webinar_id|id,\App\Models\Api\Ticket,webinar_id|id,\App\Models\Api\Session,webinar_id|id,\App\Models\Api\Quiz,webinar_id|id,\App\Models\Api\WebinarReview,webinar_id|id,\App\Models\Api\Cart,webinar_id|id,\App\Models\OrderItem,webinar_id|id,\App\Models\Api\Sale,webinar_id|id,\App\Models\Api\FeatureWebinar,webinar_id|id,\App\Models\Api\Support,webinar_id|id,\App\Models\Api\TextLesson,webinar_id|id,\App\Models\SubscribeUse,webinar_id|id,\App\Models\Api\WebinarReport,webinar_id|id,\Illuminate\Notifications\DatabaseNotification,webinar_id|id,\App\Models\SpecialOffer,webinar_id|id,\App\Models\Api\WebinarChapter,webinar_id|id,\App\Models\Translation\WebinarTranslation,webinar_id|id,\App\Models\DiscountCourse,course_id|id,\App\Models\Api\WebinarAssignment,webinar_id|id,\App\Models\Api\BundleWebinar,webinar_id|id,\App\Models\CourseNoticeboard,webinar_id|id,\App\Models\Api\CourseForum,webinar_id|id,\App\Models\Api\Certificate,webinar_id|id,\App\Models\Noticeboard,webinar_id|id,\App\Models\WebinarExtraDescription,webinar_id|id,\App\Models\UpcomingCourse,webinar_id|id,\App\Models\InstallmentSpecificationItem,webinar_id|id,\App\Models\InstallmentOrder,webinar_id|id,\App\Models\CashbackRuleSpecificationItem,webinar_id|id,\App\Models\Waitlist,webinar_id|id,\App\Models\Gift,webinar_id|id,\App\Models\RelatedCourse,course_id|id,\App\Models\PurchaseNotificationRoleGroupContent,webinar_id|id,\App\Models\CoursePersonalNote,course_id|id,\App\Models\AbandonedCartRuleSpecificationItem,webinar_id|id,\App\Models\CourseLearningLastView,webinar_id|id,\App\Models\Api\Accounting,webinar_id|id,\App\Models\CommentReport,webinar_id
     * @mixin _IH_Webinar_QB
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
     * @property-read $description attribute
     * @property-read $title attribute
     * @property WebinarAssignmentHistory $assignmentHistory
     * @method HasOne|_IH_WebinarAssignmentHistory_QB assignmentHistory()
     * @property _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] $attachments
     * @property-read int $attachments_count
     * @method HasMany|_IH_WebinarAssignmentAttachment_QB attachments()
     * @property WebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property WebinarAssignmentHistory $getAssignmentHistoryByStudentId
     * @method HasOne|_IH_WebinarAssignmentHistory_QB getAssignmentHistoryByStudentId()
     * @property _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] $instructorAssignmentHistories
     * @property-read int $instructor_assignment_histories_count
     * @method HasMany|_IH_WebinarAssignmentHistory_QB instructorAssignmentHistories()
     * @property CoursePersonalNote $personalNote
     * @method MorphToMany|_IH_CoursePersonalNote_QB personalNote()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_WebinarAssignment_QB onWriteConnection()
     * @method _IH_WebinarAssignment_QB newQuery()
     * @method static _IH_WebinarAssignment_QB on(null|string $connection = null)
     * @method static _IH_WebinarAssignment_QB query()
     * @method static _IH_WebinarAssignment_QB with(array|string $relations)
     * @method _IH_WebinarAssignment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarAssignment_C|WebinarAssignment[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|chapter_id,\App\Models\Api\WebinarChapter,id
     * @foreignLinks id,\App\Models\Translation\WebinarAssignmentTranslation,webinar_assignment_id|id,\App\Models\Api\WebinarAssignmentAttachment,assignment_id|id,\App\Models\Api\WebinarAssignmentHistory,assignment_id
     * @mixin _IH_WebinarAssignment_QB
     */
    class WebinarAssignment extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $assignment_id
     * @property string $title
     * @property string $attach
     * @method static _IH_WebinarAssignmentAttachment_QB onWriteConnection()
     * @method _IH_WebinarAssignmentAttachment_QB newQuery()
     * @method static _IH_WebinarAssignmentAttachment_QB on(null|string $connection = null)
     * @method static _IH_WebinarAssignmentAttachment_QB query()
     * @method static _IH_WebinarAssignmentAttachment_QB with(array|string $relations)
     * @method _IH_WebinarAssignmentAttachment_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarAssignmentAttachment_C|WebinarAssignmentAttachment[] all()
     * @ownLinks assignment_id,\App\Models\Api\WebinarAssignment,id
     * @mixin _IH_WebinarAssignmentAttachment_QB
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
     * @property WebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] $messages
     * @property-read int $messages_count
     * @method HasMany|_IH_WebinarAssignmentHistoryMessage_QB messages()
     * @method static _IH_WebinarAssignmentHistory_QB onWriteConnection()
     * @method _IH_WebinarAssignmentHistory_QB newQuery()
     * @method static _IH_WebinarAssignmentHistory_QB on(null|string $connection = null)
     * @method static _IH_WebinarAssignmentHistory_QB query()
     * @method static _IH_WebinarAssignmentHistory_QB with(array|string $relations)
     * @method _IH_WebinarAssignmentHistory_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarAssignmentHistory_C|WebinarAssignmentHistory[] all()
     * @ownLinks assignment_id,\App\Models\Api\WebinarAssignment,id
     * @foreignLinks id,\App\Models\Api\WebinarAssignmentHistoryMessage,assignment_history_id
     * @mixin _IH_WebinarAssignmentHistory_QB
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
     * @method static _IH_WebinarAssignmentHistoryMessage_QB onWriteConnection()
     * @method _IH_WebinarAssignmentHistoryMessage_QB newQuery()
     * @method static _IH_WebinarAssignmentHistoryMessage_QB on(null|string $connection = null)
     * @method static _IH_WebinarAssignmentHistoryMessage_QB query()
     * @method static _IH_WebinarAssignmentHistoryMessage_QB with(array|string $relations)
     * @method _IH_WebinarAssignmentHistoryMessage_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarAssignmentHistoryMessage_C|WebinarAssignmentHistoryMessage[] all()
     * @ownLinks assignment_history_id,\App\Models\Api\WebinarAssignmentHistory,id
     * @mixin _IH_WebinarAssignmentHistoryMessage_QB
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
     * @property-read $title attribute
     * @property _IH_WebinarAssignment_C|WebinarAssignment[] $assignments
     * @property-read int $assignments_count
     * @method HasMany|_IH_WebinarAssignment_QB assignments()
     * @property _IH_WebinarChapterItem_C|WebinarChapterItem[] $chapterItems
     * @property-read int $chapter_items_count
     * @method HasMany|_IH_WebinarChapterItem_QB chapterItems()
     * @property _IH_File_C|File[] $files
     * @property-read int $files_count
     * @method HasMany|_IH_File_QB files()
     * @property _IH_Quiz_C|Quiz[] $quizzes
     * @property-read int $quizzes_count
     * @method HasMany|_IH_Quiz_QB quizzes()
     * @property _IH_Session_C|Session[] $sessions
     * @property-read int $sessions_count
     * @method HasMany|_IH_Session_QB sessions()
     * @property _IH_TextLesson_C|TextLesson[] $textLessons
     * @property-read int $text_lessons_count
     * @method HasMany|_IH_TextLesson_QB textLessons()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_WebinarChapter_QB onWriteConnection()
     * @method _IH_WebinarChapter_QB newQuery()
     * @method static _IH_WebinarChapter_QB on(null|string $connection = null)
     * @method static _IH_WebinarChapter_QB query()
     * @method static _IH_WebinarChapter_QB with(array|string $relations)
     * @method _IH_WebinarChapter_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarChapter_C|WebinarChapter[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\File,chapter_id|id,\App\Models\Api\TextLesson,chapter_id|id,\App\Models\Api\Session,chapter_id|id,\App\Models\Api\Quiz,chapter_id|id,\App\Models\Translation\WebinarChapterTranslation,webinar_chapter_id|id,\App\Models\Api\WebinarChapterItem,chapter_id|id,\App\Models\Api\WebinarAssignment,chapter_id
     * @mixin _IH_WebinarChapter_QB
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
     * @property WebinarAssignment $assignment
     * @method BelongsTo|_IH_WebinarAssignment_QB assignment()
     * @property WebinarChapter $chapter
     * @method BelongsTo|_IH_WebinarChapter_QB chapter()
     * @property File $file
     * @method BelongsTo|_IH_File_QB file()
     * @property Quiz $quiz
     * @method BelongsTo|_IH_Quiz_QB quiz()
     * @property Session $session
     * @method BelongsTo|_IH_Session_QB session()
     * @property TextLesson $textLesson
     * @method BelongsTo|_IH_TextLesson_QB textLesson()
     * @method static _IH_WebinarChapterItem_QB onWriteConnection()
     * @method _IH_WebinarChapterItem_QB newQuery()
     * @method static _IH_WebinarChapterItem_QB on(null|string $connection = null)
     * @method static _IH_WebinarChapterItem_QB query()
     * @method static _IH_WebinarChapterItem_QB with(array|string $relations)
     * @method _IH_WebinarChapterItem_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarChapterItem_C|WebinarChapterItem[] all()
     * @ownLinks chapter_id,\App\Models\Api\WebinarChapter,id
     * @mixin _IH_WebinarChapterItem_QB
     */
    class WebinarChapterItem extends Model {}
    
    /**
     * @property int $id
     * @property int $creator_id
     * @property int $webinar_id
     * @property string $type
     * @property int|null $order
     * @property int $created_at
     * @property int|null $upcoming_course_id
     * @property-read $value attribute
     * @method static _IH_WebinarExtraDescription_QB onWriteConnection()
     * @method _IH_WebinarExtraDescription_QB newQuery()
     * @method static _IH_WebinarExtraDescription_QB on(null|string $connection = null)
     * @method static _IH_WebinarExtraDescription_QB query()
     * @method static _IH_WebinarExtraDescription_QB with(array|string $relations)
     * @method _IH_WebinarExtraDescription_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarExtraDescription_C|WebinarExtraDescription[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|upcoming_course_id,\App\Models\UpcomingCourse,id
     * @foreignLinks id,\App\Models\Translation\WebinarExtraDescriptionTranslation,webinar_extra_description_id
     * @mixin _IH_WebinarExtraDescription_QB
     */
    class WebinarExtraDescription extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $filter_option_id
     * @method static _IH_WebinarFilterOption_QB onWriteConnection()
     * @method _IH_WebinarFilterOption_QB newQuery()
     * @method static _IH_WebinarFilterOption_QB on(null|string $connection = null)
     * @method static _IH_WebinarFilterOption_QB query()
     * @method static _IH_WebinarFilterOption_QB with(array|string $relations)
     * @method _IH_WebinarFilterOption_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarFilterOption_C|WebinarFilterOption[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id|filter_option_id,\App\Models\FilterOption,id
     * @mixin _IH_WebinarFilterOption_QB
     */
    class WebinarFilterOption extends Model {}
    
    /**
     * @property int $id
     * @property int $webinar_id
     * @property int $teacher_id
     * @method static _IH_WebinarPartnerTeacher_QB onWriteConnection()
     * @method _IH_WebinarPartnerTeacher_QB newQuery()
     * @method static _IH_WebinarPartnerTeacher_QB on(null|string $connection = null)
     * @method static _IH_WebinarPartnerTeacher_QB query()
     * @method static _IH_WebinarPartnerTeacher_QB with(array|string $relations)
     * @method _IH_WebinarPartnerTeacher_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarPartnerTeacher_C|WebinarPartnerTeacher[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @mixin _IH_WebinarPartnerTeacher_QB
     */
    class WebinarPartnerTeacher extends Model {}
    
    /**
     * @property int $id
     * @property int $user_id
     * @property int $webinar_id
     * @property string $reason
     * @property string $message
     * @property int $created_at
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
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
     * @property Bundle|null $bundle
     * @method BelongsTo|_IH_Bundle_QB bundle()
     * @property _IH_Comment_C|Comment[] $comments
     * @property-read int $comments_count
     * @method HasMany|_IH_Comment_QB comments()
     * @property Webinar $webinar
     * @method BelongsTo|_IH_Webinar_QB webinar()
     * @method static _IH_WebinarReview_QB onWriteConnection()
     * @method _IH_WebinarReview_QB newQuery()
     * @method static _IH_WebinarReview_QB on(null|string $connection = null)
     * @method static _IH_WebinarReview_QB query()
     * @method static _IH_WebinarReview_QB with(array|string $relations)
     * @method _IH_WebinarReview_QB newModelQuery()
     * @method false|int increment(string $column, float|int $amount = 1, array $extra = [])
     * @method false|int decrement(string $column, float|int $amount = 1, array $extra = [])
     * @method static _IH_WebinarReview_C|WebinarReview[] all()
     * @ownLinks webinar_id,\App\Models\Api\Webinar,id
     * @foreignLinks id,\App\Models\Api\Comment,review_id
     * @mixin _IH_WebinarReview_QB
     */
    class WebinarReview extends Model {}
}