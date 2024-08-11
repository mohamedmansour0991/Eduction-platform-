<?php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
?>

<footer style='background: #334155 !important;' class="footer bg-secondary position-relative user-select-none">
 

    <?php
        $columns = ['first_column','second_column','third_column','forth_column'];
    ?>

    <div class="container">


        <div class="py-50 " style='margin: auto;display: table;'>
           

            <div class="footer-social">
                <?php if(!empty($socials) and count($socials)): ?>
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($social['link']); ?>" target="_blank">
                            <img src="<?php echo e($social['image']); ?>" alt="<?php echo e($social['title']); ?>" >
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
<br><br>
            <div style='    text-align: center;' class="font-14 text-white">All Copy Rights Reserved @2024 
                <br>
                <a style='color:#eee' href='https://www.facebook.com/Marhala.eg'>Developed By Marhala</a></div>
        </div>
    </div>

   

</footer>
<?php /**PATH J:\Systems\Eduction-platform-\resources\views/web/default/includes/footer.blade.php ENDPATH**/ ?>