

<?php $__env->startSection('title','Two Factor'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content pt-200 pb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<?php if($errors->any()): ?>
				    <div class="alert alert-danger">
				        <ul>
				            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				                <li><?php echo e($error); ?></li>
				            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				        </ul>
				    </div>
				<?php endif; ?>
				<?php if(Session::has('message')): ?>
				<p class="alert alert-danger"><?php echo e(Session::get('message')); ?></p>
				<?php endif; ?>
				<div class="verification-form text-center">
					<div class="verification-title">
						<h3><?php echo e(__('Two-factor authentication')); ?></h3>
					</div>
					<div class="verification-header">
						<p><?php echo e(__('Please enter the 4-digit verification code we sent via Email:')); ?></p>
					</div>
					<form action="<?php echo e(route('two.step.verify')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<div class="form-group">
							<input type="text" class="form-control" name="two_factor">
						</div>
						<button type="submit"><?php echo e(__('Verify')); ?></button>
					</form>
					<div class="verification-footer">
						<p><?php echo e(__("Didn't receive the code?")); ?></p>
						<a href="<?php echo e(route('two.step.notify')); ?>"><?php echo e(__('Send code again')); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/twostep.blade.php ENDPATH**/ ?>