

<?php $__env->startSection('content'); ?>
<div class="main-area pt-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="page-desctiption">
					<p><?php echo e($page->description); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/page.blade.php ENDPATH**/ ?>