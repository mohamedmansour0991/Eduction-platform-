<style>
    .top-navbar {
height: 100px!important;
    position: absolute!important;
    z-index: 9999!important;
    width: 100%!important;
}.top-navbar a {
    color: #fff;
    font-weight: 500;
}
.top-navbar button {
    color: #fff !important;
    opacity: 1 !important;
}a.navbar-brand.navbar-order.d-flex.align-items-center.justify-content-center.mr-0.ml-auto .img-cover {
    filter: brightness(10);
}
</style>

<?php $__env->startSection('content'); ?>

        <div class="home-years__head bg-orange-800 text-slate-100"><div class="relative pt-50 px-50 overflow-hidden">
        <div class="home-years__title font-big py-5 font-w-bold relative"><div class="relative overflow-hidden container " style='padding-top: 150px;margin-bottom: 30px;'><?php echo e(trans('update.products')); ?></div></div></div><svg class="svg-waves fill-primary-container" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none"><defs><path id="waveHref" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18v44h-352z"></path></defs><g class="svg-waves__parallax"><use xlink:href="#waveHref" x="48"></use><use xlink:href="#waveHref" x="48" y="3"></use><use xlink:href="#waveHref" x="48" y="5"></use><use xlink:href="#waveHref" x="48" y="7"></use></g></svg></div>
  

    <div class="container mt-30">
        <section class="mt-lg-50 pt-lg-20 mt-md-40 pt-md-40">
            <form action="<?php echo e((!empty($isRewardProducts) and $isRewardProducts) ? '/reward-products' : '/products'); ?>" method="get" id="filtersForm">


                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-12 col-md-4 col-lg-3 mt-20">
                                    <?php echo $__env->make('web.default.products.includes.card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>


                   
                </div>

            </form>

            <div class="mt-50 pt-30">
                <?php echo e($products->appends(request()->input())->links('vendor.pagination.panel')); ?>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/js/parts/products_lists.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('web.default.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/dh_qnb2zj/masar-edu.online/resources/views/web/default/products/search.blade.php ENDPATH**/ ?>