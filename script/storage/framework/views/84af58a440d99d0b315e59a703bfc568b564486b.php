

<?php $__env->startSection('content'); ?>
<div class="login-area pt-150 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="login-section mt-100">
					<div class="login-title text-center">
						<div class="comming-soon">
							<p><?php echo e(__("Your account is now pending approval. This process usually takes less than 24 hours, but may take several days.")); ?></p>
						</div>
					</div> 
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/verification.blade.php ENDPATH**/ ?>