

<?php $__env->startSection('title','General Settings'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('General Settings')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('General Settings')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('General Settings')); ?></h2>
			<p class="section-lead"><?php echo e(__('General Settings Section')); ?></p>

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('User Settings')); ?></h4>
						</div>
						<div class="card-body">
							<form action="<?php echo e(route('admin.settings.general.update')); ?>" method="POST">
								<?php echo csrf_field(); ?>
								<div class="form-group">
									<label><?php echo e(__('User Registration')); ?></label>
									<select class="form-control selectric" name="user_registation">
										<option <?php echo e($info->user_registation == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->user_registation == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('User Email Verification')); ?></label>
									<select class="form-control selectric" name="email_verification">
										<option <?php echo e($info->email_verification == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->email_verification == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('Delete User Account')); ?></label>
									<select class="form-control selectric" name="delete_account">
										<option <?php echo e($info->delete_account == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->delete_account == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('User Monetization')); ?></label>
									<select class="form-control selectric" name="user_monetization">
										<option <?php echo e($info->user_monetization == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->user_monetization == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('User Payment Withdraw')); ?></label>
									<select class="form-control selectric" name="user_payment_withdraw">
										<option <?php echo e($info->user_payment_withdraw == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->user_payment_withdraw == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="form-group">
									<label><?php echo e(__('User Verification')); ?></label>
									<select class="form-control selectric" name="user_verification">
										<option <?php echo e($info->user_verification == 'enabled' ? 'selected' : ''); ?> value="enabled"><?php echo e(__('Enabled')); ?></option>
										<option <?php echo e($info->user_verification == 'disabled' ? 'selected' : ''); ?> value="disabled"><?php echo e(__('Disabled')); ?></option>
									</select>
								</div>
								<div class="text-right">
									<button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
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
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/settings/general.blade.php ENDPATH**/ ?>