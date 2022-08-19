<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if(!Auth::User()->isFollowing($user->id)): ?>
<div class="col-lg-3 mb-30">
    <div class="single-user">
        <?php 
        $user_data = json_decode($user->value);
        ?>
        <img src="<?php echo e(asset($user_data->cover)); ?>">
        <div class="single-user-info text-center">
            <div class="single-user-img">
                <img src="<?php echo e(asset($user->image)); ?>">
                <h3><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></h3>
                <h5><?php echo e($user->username); ?></h5>
                <div class="follow-unfollow-action">
                    <a class="pjax" href="<?php echo e(route('profile.show',$user->slug)); ?>"><?php echo e(__('View Profile')); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/frontend/section/user.blade.php ENDPATH**/ ?>