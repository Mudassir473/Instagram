

<?php $__env->startSection('title','Edit Ads'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Edit Ads')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Edit Ads')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Edit Ads')); ?></h2>
			<p class="section-lead"><?php echo e(__('Edit Ads Section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h4><?php echo e(__('Edit Ads')); ?></h4>
							<form action="<?php echo e(route('admin.ads.update',$ads->id)); ?>" method="POST" enctype="multipart/form-data">
								<?php echo csrf_field(); ?>
								<div class="form-group">
									<label><?php echo e(__('Ads Title')); ?></label>
									<input class="form-control" type="text" name="title" value="<?php echo e($ads->title); ?>">
								</div>
								<div class="form-group">
									<label><?php echo e(__('Url')); ?></label>
									<input class="form-control" type="text" name="url" value="<?php echo e($ads->url); ?>">
								</div>
								<div class="form-group imgUp">
									<label class="logo_label" for="page_image"><?php echo e(__('Select Image(480*100)')); ?>

										<div class="form-logo-area imagePreview" style="background-image: url('<?php echo e(asset($ads->media)); ?>');">
											<i class="fas fa-camera-retro"></i>
										</div>
									</label>
									<input type="file" name="media" id="page_image" class="uploadFile form-control d-none">
								</div>
								<div class="form-group">
									<label><?php echo e(__('Target Audience')); ?></label>
									<select class="form-control selectric" name="country">
            							<option value="select_all"><?php echo e(__('Select All')); ?></option>
            							<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            							<option <?php echo e($ads->country == $country ? 'selected' : ''); ?> value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
            							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            						</select>
								</div>
								<div class="form-group">
									<label for="ads_pricing"><?php echo e(__('Ads Type')); ?></label>
									<select class="form-control selectric" name="pricing" id="ads_pricing">
            							<option <?php echo e($ads->pricing == 'per_link' ? 'selected' : ''); ?> value="per_link"><?php echo e(__('Per Click')); ?></option>
            							<option <?php echo e($ads->pricing == 'per_impression' ? 'selected' : ''); ?> value="per_impression"><?php echo e(__('Per Impression')); ?></option>
            						</select>
								</div>
								<div class="form-group">
									<label for="ads_status"><?php echo e(__('Ads Status')); ?></label>
									<select class="form-control selectric" name="status" id="ads_status">
            							<option <?php echo e($ads->status == 'pending' ? 'selected' : ''); ?> value="pending"><?php echo e(__('Pending')); ?></option>
            							<option <?php echo e($ads->status == 'publish' ? 'selected' : ''); ?> value="publish"><?php echo e(__('Publish')); ?></option>
            							<option <?php echo e($ads->status == 'complete' ? 'selected' : ''); ?> value="complete"><?php echo e(__('Complete')); ?></option>
            							<option <?php echo e($ads->status == 'reject' ? 'selected' : ''); ?> value="reject"><?php echo e(__('Rejected')); ?></option>
            						</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('Total ads spending limit')); ?></label>
									<input type="number" name="total_limit" class="form-control" value="<?php echo e($ads->total_limit); ?>">
								</div>
								<div class="text-right">
									<button type="submit" class="btn btn-primary"><?php echo e(__('Save')); ?></button>
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

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('backend/assets/js/jquery.selectric.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/ads/edit.blade.php ENDPATH**/ ?>