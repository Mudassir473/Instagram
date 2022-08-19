

<?php $__env->startSection('title','Add New Page'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Add New Page')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Add New Page')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Add New Page')); ?></h2>
			<p class="section-lead"><?php echo e(__('Add New Page section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Create Page')); ?></h4>
						</div>
						<div class="card-body">
							<form action="<?php echo e(route('admin.page.store')); ?>" method="POST" enctype="multipart/form-data">
								<?php echo csrf_field(); ?>
								<div class="form-group">
									<label><?php echo e(__('Title')); ?></label>
									<input type="text" class="form-control" name="title">
								</div>
								<div class="form-group">
									<label><?php echo e(__('Description')); ?></label>
									<textarea class="form-control" name="description"></textarea>
								</div>
								<div class="form-group imgUp">
									<label class="logo_label" for="page_image"><?php echo e(__('Image')); ?>

										<div class="form-logo-area imagePreview">
											<i class="fas fa-camera-retro"></i>
										</div>
									</label>
									<input type="file" name="image" id="page_image" class="uploadFile form-control d-none">
								</div>
								<div class="text-right">
									<button class="btn btn-primary"><?php echo e(__('Save')); ?></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/page/create.blade.php ENDPATH**/ ?>