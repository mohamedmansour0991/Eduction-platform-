<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/daterangepicker/daterangepicker.min.css">
<?php $__env->stopPush(); ?>
<style>
.footer {
    margin-top: -40px!important;
}.pl-0, .px-0 {
    padding-left: 15px !important;
    padding-right: 0 !important;
}
</style>
<?php $__env->startSection('content'); ?>
    <?php
        $registerMethod = getGeneralSettings('register_method') ?? 'mobile';
        $showOtherRegisterMethod = getFeaturesSettings('show_other_register_method') ?? false;
        $showCertificateAdditionalInRegister = getFeaturesSettings('show_certificate_additional_in_register') ?? false;
        $selectRolesDuringRegistration = getFeaturesSettings('select_the_role_during_registration') ?? null;
    ?>

    
        <div class="row login-container">
            <div class="col-12 col-md-5 pl-0">
                <img src="<?php echo e(getPageBackgroundSettings('register')); ?>" class="img-cover" alt="Login">
            </div>
            <div class="col-12 col-md-7">
                <div class="login-card">
                    <h1 class="font-20 font-weight-bold"><span style="padding: 5px;font-size: 20px;color: #3875bf;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M17 17c0-2.21-2.239-4-5-4s-5 1.79-5 4"/><rect width="18" height="18" x="3" y="3" rx="3"/></g></svg></span><?php echo e(trans('auth.signup')); ?></h1>

                    <form method="post" action="/register" class="mt-35">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                       
                        <?php if($registerMethod == 'mobile'): ?>
                            <?php echo $__env->make('web.default.auth.register_includes.mobile_field', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php if($showOtherRegisterMethod): ?>
                                <?php echo $__env->make('web.default.auth.register_includes.email_field',['optional' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php echo $__env->make('web.default.auth.register_includes.email_field', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php if($showOtherRegisterMethod): ?>
                                <?php echo $__env->make('web.default.auth.register_includes.mobile_field',['optional' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <div class="form-group">
                            <label class="input-label" for="full_name"><?php echo e(trans('auth.full_name')); ?>:</label>
                            <input name="full_name" type="text" value="<?php echo e(old('full_name')); ?>" class="form-control <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                            <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group">
                            <label class="input-label" for="password"><?php echo e(trans('auth.password')); ?>:</label>
                            <input name="password" type="password"
                                   class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                                   aria-describedby="passwordHelp">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group ">
                            <label class="input-label" for="confirm_password"><?php echo e(trans('auth.retype_password')); ?>:</label>
                            <input name="password_confirmation" type="password"
                                   class="form-control <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="confirm_password"
                                   aria-describedby="confirmPasswordHelp">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <?php if($showCertificateAdditionalInRegister): ?>
                            <div class="form-group">
                                <label class="input-label" for="certificate_additional"><?php echo e(trans('update.certificate_additional')); ?></label>
                                <input name="certificate_additional" id="certificate_additional" class="form-control <?php $__errorArgs = ['certificate_additional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                <?php $__errorArgs = ['certificate_additional'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>

                        <?php if(getFeaturesSettings('timezone_in_register')): ?>
                            <?php
                                $selectedTimezone = getGeneralSettings('default_time_zone');
                            ?>

                            <div class="form-group">
                                <label class="input-label"><?php echo e(trans('update.timezone')); ?></label>
                                <select name="timezone" class="form-control select2" data-allow-clear="false">
                                    <option value="" <?php echo e(empty($user->timezone) ? 'selected' : ''); ?> disabled><?php echo e(trans('public.select')); ?></option>
                                    <?php $__currentLoopData = getListOfTimezones(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $timezone): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($timezone); ?>" <?php if($selectedTimezone == $timezone): ?> selected <?php endif; ?>><?php echo e($timezone); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['timezone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>

                        <?php if(!empty($referralSettings) and $referralSettings['status']): ?>
                            <div class="form-group ">
                                <label class="input-label" for="referral_code"><?php echo e(trans('financial.referral_code')); ?>:</label>
                                <input name="referral_code" type="text"
                                       class="form-control <?php $__errorArgs = ['referral_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="referral_code"
                                       value="<?php echo e(!empty($referralCode) ? $referralCode : old('referral_code')); ?>"
                                       aria-describedby="confirmPasswordHelp">
                                <?php $__errorArgs = ['referral_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <div class="invalid-feedback">
                                    <?php echo e($message); ?>

                                </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        <?php endif; ?>

                        <div class="js-form-fields-card">
                            <?php if(!empty($formFields)): ?>
                                <?php echo $formFields; ?>

                            <?php endif; ?>
                        </div>

                        <?php if(!empty(getGeneralSecuritySettings('captcha_for_register'))): ?>
                            <?php echo $__env->make('web.default.includes.captcha_input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="term" value="1" <?php echo e((!empty(old('term')) and old('term') == '1') ? 'checked' : ''); ?> class="custom-control-input <?php $__errorArgs = ['term'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="term">
                            <label class="custom-control-label font-14" for="term"><?php echo e(trans('auth.i_agree_with')); ?>

                                <a href="pages/terms" target="_blank" class="text-secondary font-weight-bold font-14"><?php echo e(trans('auth.terms_and_rules')); ?></a>
                            </label>

                            <?php $__errorArgs = ['term'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <?php $__errorArgs = ['term'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback">
                            <?php echo e($message); ?>

                        </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <button type="submit" class="btn btn-primary btn-block mt-20"><?php echo e(trans('auth.signup')); ?></button>
                    </form>

                    <div class="text-center mt-20">
                        <span class="text-secondary">
                            <?php echo e(trans('auth.already_have_an_account')); ?>

                            <a href="/login" class="text-secondary font-weight-bold"><?php echo e(trans('auth.login')); ?></a>
                        </span>
                    </div>

                </div>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/daterangepicker/daterangepicker.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="/assets/default/js/parts/forms.min.js"></script>
    <script src="/assets/default/js/parts/register.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate().'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\W10 21H2\Desktop\mftp_zip_2024_08_08_15_42_54\resources\views/web/default/auth/register.blade.php ENDPATH**/ ?>