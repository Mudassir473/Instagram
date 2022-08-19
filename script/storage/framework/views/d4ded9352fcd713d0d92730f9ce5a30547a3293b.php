

<?php $__env->startSection('title','Verify'); ?>

<?php $__env->startSection('content'); ?>
<div class="verify-email pt-200 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Verify Your Email Address')); ?></div>

                    <div class="card-body text-center">
                        <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('A fresh verification link has been sent to your email address.')); ?>

                        </div>
                        <?php endif; ?>
                        <div class="some-content">
                            <?php echo e(__('Before proceeding, please check your email for a verification link.')); ?>

                            <?php echo e(__('If you did not receive the email')); ?>

                        </div>
                        <div class="verify-btn">
                            <form class="d-inline" method="POST" action="<?php echo e(route('verification.resend')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-link p-0 mt-2 align-baseline"><?php echo e(__('click here to request another')); ?></button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/auth/verify.blade.php ENDPATH**/ ?>