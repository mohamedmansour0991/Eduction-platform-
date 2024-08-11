 

<?php $__env->startPush('libraries_top'); ?>
    <link rel="stylesheet" href="/assets/admin/vendor/owl.carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/admin/vendor/owl.carousel/owl.theme.min.css">

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>


    <section class="section">
        
<h3 style='color:#fff'>اختصارات سريعة </h3>
  
        <div class="row">

                <div class="col-lg-2 col-md-6 col-sm-6 col-23">
                    <a href="<?php echo e(getAdminPanelUrl()); ?>/webinars/create" class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                            كورس جديد
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="<?php echo e(getAdminPanelUrl()); ?>/financial/discounts/new" class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-plus"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                               كود تفعيل
                            </div>
                        </div>
                    </a>
                </div>

            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_general_dashboard_new_tickets')): ?>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="<?php echo e(getAdminPanelUrl()); ?>/categories/create" class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-plus"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                               قسم جديد
                            </div>
                        </div>
                    </a>
                </div>
            <?php endif; ?>

         
                <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                    <a href="<?php echo e(getAdminPanelUrl()); ?>/assignments" class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-book"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-body">
                                الواجب
                            </div>
                        </div>
                    </a>
                </div>


        </div>


        
    </section>

    <section class="card">
        <div class="card-body">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold">جميع الحقوق محفوظة لمنصة مرحلة المالكة للمنصة</div>
                        <div class=" text-small font-600-bold mb-2">يتم تحديث المنصة تقريبا بشكل يومي لتصحيح الاخطاء وإضافة امكانيات جديدة لو واجهت اي عطل او اي مشكلة يرجى التواصل معنا على الواتساب .</div>
                    </div>
                </div>

                


            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/chartjs/chart.min.js"></script>
    <script src="/assets/admin/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="/assets/admin/js/dashboard.min.js"></script>

    <script>
        (function ($) {
            "use strict";

            <?php if(!empty($getMonthAndYearSalesChart)): ?>
            makeStatisticsChart('saleStatisticsChart', saleStatisticsChart, 'Sale', <?php echo json_encode($getMonthAndYearSalesChart['labels'], 15, 512) ?>,<?php echo json_encode($getMonthAndYearSalesChart['data'], 15, 512) ?>);
            <?php endif; ?>

            <?php if(!empty($usersStatisticsChart)): ?>
            makeStatisticsChart('usersStatisticsChart', usersStatisticsChart, 'Users', <?php echo json_encode($usersStatisticsChart['labels'], 15, 512) ?>,<?php echo json_encode($usersStatisticsChart['data'], 15, 512) ?>);
            <?php endif; ?>

        })(jQuery)
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH J:\Systems\Eduction-platform-\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>