

<?php $__env->startSection('title','Login'); ?>

<?php $__env->startSection('content'); ?>


<!-- main area start -->
<section>
    <div class="login-area pt-200 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-section">
                        <div class="login-title">
                            <h3><?php echo e(__('Log in')); ?></h3>
                            <div class="login-form">
                                <form action="<?php echo e(route('login')); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <h6><?php echo e(__('Email or Username')); ?></h6>
                                    <div class="login-form-gorup">
                                        <input type="text" id="email" class="login-form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" placeholder="<?php echo e(__('Email or Username')); ?>" required autocomplete="email" autofocus>
                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($message); ?></strong>
                                        </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="login-form-gorup">
                                        <input type="password" id="password" class="login-form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password" placeholder="<?php echo e(__('Password')); ?>">
                                    </div>
                                    <div class="login-form-group">
                                        <div class="custom-login-remember-forgotten">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                            <label class="form-check-label" for="remember">
                                                <?php echo e(__('Remember Me')); ?>

                                            </label>
                                            <?php if(Route::has('password.request')): ?>
                                            <a class="pjax f-right" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Forgot Your Password?')); ?>

                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="login-form-button">
                                        <button type="submit"><?php echo e(__('Login')); ?></button>
                                    </div>
                                    <div class="login-form-group not-registered text-center">
                                        <p><?php echo e(__('Not registered?')); ?><a class="pjax" href="<?php echo e(route('register')); ?>"><?php echo e(__('Create a account')); ?></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main area end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/auth/login.blade.php ENDPATH**/ ?>