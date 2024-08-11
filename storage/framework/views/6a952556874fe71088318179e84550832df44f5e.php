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

<div class="learning-content" id="">
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
    

    <iframe id="youtube-iframe" width="100%" height="95%"
        src="<?php echo e($course['files'][0]['file']); ?>?rel=0&modestbranding=1&showinfo=0&controls=1" title="YouTube video player"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>



    <!-- Overlay box -->
    <div id="overlay" class="overlay-box">
        <!-- Content to display in the overlay -->
    </div>
</div>
<?php /**PATH J:\Systems\Eduction-platform-\resources\views/web/default/course/learningPage/components/content.blade.php ENDPATH**/ ?>