

<?php $__env->startSection('title','Find User'); ?>

<?php $__env->startSection('content'); ?>
<!-- main area start -->
<section>
    <div class="main-area pt-50">
        <div class="container">
            <div class="row allusergrid" id="user_results">
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!Auth::User()->isFollowing($user->id)): ?>
                <input type="hidden" id="follow_url" value="<?php echo e(route('follow',$user->id)); ?>">
                <input type="hidden" id="unfollow_url" value="<?php echo e(route('unfollow',$user->id)); ?>">
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
                <input type="hidden" id="user_loadmore_url" value="<?php echo e(route('users')); ?>">
            </div>
            <div class="page-load-status">
              <p class="scroll-request"></p>
              <p class="scroll-error"><?php echo e(__('No more pages to load')); ?></p>
            </div>
        </div>
    </div>
</section>
<!-- main area end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/users.blade.php ENDPATH**/ ?>