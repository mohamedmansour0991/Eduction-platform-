<?php $__env->startSection('body'); ?>
    <!-- content -->
    <td valign="top" class="bodyContent" mc:edit="body_content">
        <h1 class="h1"><?php echo e($notification['title']); ?></h1>
        <p><?php echo nl2br($notification['message']); ?></p>

        <p><?php echo e(trans('notification.email_ignore_msg')); ?></p>
    </td>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.default.layouts.email', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\W10 21H2\Desktop\mftp_zip_2024_08_08_15_42_54\resources\views/web/default/emails/notification.blade.php ENDPATH**/ ?>