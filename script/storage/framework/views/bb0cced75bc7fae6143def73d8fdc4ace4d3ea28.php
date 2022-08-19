

<?php $__env->startSection('title','Manage Language'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage Language')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage Language')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage Language')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage language section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage Language')); ?></h4>
							<div class="card-header-form">
								<form>
									<div class="input-group">
										<input type="text" id="data_search" class="form-control" placeholder="Search">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="fas fa-search"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="card-body">
							<form action="<?php echo e(route('admin.language.active')); ?>" method="POST">
								<?php echo csrf_field(); ?>
								<div class="row">
									<div class="col-lg-3">
										<div class="form-group">
											<select class="form-control selectric">
												<option><?php echo e(__('Set active labguage')); ?></option>
											</select>
										</div>
									</div>
									<div class="col-lg-2 p-0">
										<button type="submit" class="btn btn-primary btn-lg"><?php echo e(__('Apply')); ?></button>
									</div>
								</div>
								<div class="table-responsive">
									<table class="table table-striped">
										<tr>
											<th class="text-center">
												<div class="custom-checkbox custom-control">
													<input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
													<label for="checkbox-all" class="custom-control-label">&nbsp;</label>
												</div>
											</th>
											<th><?php echo e(__('Language Name')); ?></th>
											<th><?php echo e(__('Action')); ?></th>
										</tr>
										<?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td class="text-center">
												<div class="custom-checkbox custom-control">
													<input name="lang_code[]" <?php echo e($lang->status == 'active' ? 'checked' : ''); ?> value="<?php echo e($lang->code); ?>" type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="lang_input_<?php echo e($lang->code); ?>">
													<label for="lang_input_<?php echo e($lang->code); ?>" class="custom-control-label">&nbsp;</label>
												</div>
											</td>
											<td><?php echo e($lang->name); ?></td>
											<td>
												<a href="<?php echo e(route('admin.language.edit',$lang->code)); ?>" class="btn btn-primary"><?php echo e(__('Edit')); ?></a>
												<a href="<?php echo e(route('admin.language.delete',$lang->code)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</table>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/language/index.blade.php ENDPATH**/ ?>