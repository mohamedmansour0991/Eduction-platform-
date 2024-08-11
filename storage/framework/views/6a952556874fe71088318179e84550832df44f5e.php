<?php
    $showLoading = true;

    // Check if any content is present to determine whether to show the loading screen
    if (
        (!empty($noticeboards) && $noticeboards) ||
        !empty($assignment) ||
        (!empty($isForumPage) && $isForumPage) ||
        (!empty($isForumAnswersPage) && $isForumAnswersPage)
    ) {
        $showLoading = false;
    }
?>

<div class="learning-content" id="learningPageContent">
    <!-- Display the appropriate content based on conditions -->
    <?php if(!empty($isForumAnswersPage) && $isForumAnswersPage): ?>
        <?php echo $__env->make('web.default.course.learningPage.components.forum.forum_answers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif(!empty($isForumPage) && $isForumPage): ?>
        <?php echo $__env->make('web.default.course.learningPage.components.forum.forum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif(!empty($noticeboards) && $noticeboards): ?>
        <?php echo $__env->make('web.default.course.learningPage.components.noticeboards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php elseif(!empty($assignment)): ?>
        <?php echo $__env->make('web.default.course.learningPage.components.assignment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <!-- Loading screen -->
    <div class="learning-content-loading align-items-center justify-content-center flex-column w-100 h-100 <?php echo e($showLoading ? 'd-flex' : 'd-none'); ?>">
        <img src="/assets/default/img/loading.gif" alt="<?php echo e(trans('update.please_wait_for_the_content_to_load')); ?>">
        <p class="mt-10"><?php echo e(trans('update.please_wait_for_the_content_to_load')); ?></p>
    </div>

    <!-- Overlay box -->
    <div id="overlay" class="overlay-box">
        <!-- Content to display in the overlay -->
    </div>
</div>

<?php /**PATH J:\Systems\Eduction-platform-\resources\views/web/default/course/learningPage/components/content.blade.php ENDPATH**/ ?>