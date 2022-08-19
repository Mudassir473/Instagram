

<?php $__env->startSection('title','Site Settings'); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Site Settings')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Site Settings')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Site Settings')); ?></h2>
			<p class="section-lead"><?php echo e(__('Site Settings Section')); ?></p>
			<form action="<?php echo e(route('admin.settings.sitesettings.update')); ?>" method="POST" enctype="multipart/form-data">
				<?php echo csrf_field(); ?>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4><?php echo e(__('Website Settings')); ?></h4>
							</div>
							<div class="card-body">
								<div class="form-group">
			                      <label><?php echo e(__('Site Title')); ?></label>
			                      <input type="text" name="site_title" class="form-control" value="<?php echo e($info->site_title); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Site Name')); ?></label>
			                      <input type="text" class="form-control" name="site_name" value="<?php echo e($info->site_name); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Site Email')); ?></label>
			                      <input type="text" class="form-control" name="site_email" value="<?php echo e($info->site_email); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Site Description')); ?></label>
			                      <textarea class="form-control" cols="8" name="site_description" rows="30"><?php echo e($info->site_description); ?></textarea>
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Facebook Url')); ?></label>
			                      <input type="text" class="form-control" name="facebook_url" value="<?php echo e($info->facebook_url); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Twitter Url')); ?></label>
			                      <input type="text" name="twitter_url" class="form-control" value="<?php echo e($info->twitter_url); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Google Url')); ?></label>
			                      <input type="text" class="form-control" name="google_url" value="<?php echo e($info->google_url); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Currency Code')); ?></label>
			                      <input type="text" class="form-control" name="code" value="<?php echo e($currency_value->code); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Currency Symbol')); ?></label>
			                      <input type="text" class="form-control" name="symbol" value="<?php echo e($currency_value->symbol); ?>">
			                    </div>
			                    <div class="form-group">
			                      <label><?php echo e(__('Ads Show Per Secound')); ?></label>
			                      <input type="text" class="form-control" name="ads_show_per_second" value="<?php echo e($ads_show_per_second); ?>" required>
			                    </div>
			                    <h6><?php echo e(__('Ads Settings')); ?></h6>
			                    <div class="form-group">
			                    	<label><?php echo e(__('Ads Per Click Price')); ?></label>
			                    	<input type="text" class="form-control" name="per_link" value="<?php echo e($per_link); ?>">
			                    </div>
			                    <div class="form-group">
			                    	<label><?php echo e(__('Ads Per Impression Price')); ?></label>
			                    	<input type="text" class="form-control" name="per_impression" value="<?php echo e($per_impression); ?>">
			                    </div>
			                    <div class="form-group">
			                    	<label><?php echo e(__('Author Get Per Click')); ?></label>
			                    	<input type="text" class="form-control" name="author_get_per_link" value="<?php echo e($author_get_per_link); ?>">
			                    </div>
			                    <div class="form-group">
			                    	<label><?php echo e(__('Author Get Per Impression')); ?></label>
			                    	<input type="text" class="form-control" name="author_get_per_impression" value="<?php echo e($author_get_per_impression); ?>">
			                    </div>
			                    <h6><?php echo e(__('Paypal Settings')); ?></h6>
			                    <div class="form-group">
			                    	<label for="PAYPAL_ID">Paypal Client Id</label>
			                    	<input type="text" class="form-control" id="PAYPAL_ID" name="PAYPAL_ID" value="<?php echo e(env('PAYPAL_ID')); ?>">
			                    </div>
			                    <div class="text-right">
									<button class="btn btn-primary"><?php echo e(__('Update')); ?></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-6">
						<div class="card">
							<div class="card-header">
								<h4><?php echo e(__('Other Settings')); ?></h4>
							</div>
							<div class="card-body">
								<div class="form-group imgUp">
			                      <label class="logo_label" for="dark_logo"><?php echo e(__('Dark Mode Logo')); ?>

			                      	<div class="form-logo-area imagePreview" style="background-image: url('<?php echo e(asset($info->dark_logo)); ?>');">
			                      	</div>
			                      </label>
			                      <input type="file" name="dark_logo" id="dark_logo" class="uploadFile form-control d-none">
			                    </div>
			                    <div class="form-group imgUp">
			                      <label class="logo_label" for="light_logo"><?php echo e(__('Light Mode Logo')); ?>

			                      	<div class="form-logo-area imagePreview" style="background-image: url('<?php echo e(asset($info->light_logo)); ?>');">
			                      	</div>
			                      </label>
			                      <input type="file" name="light_logo" id="light_logo" class="uploadFile form-control d-none">
			                    </div>
			                    <div class="form-group imgUp">
			                      <label class="logo_label" for="favicon"><?php echo e(__('Favicon Upload')); ?>

			                      	<div class="form-logo-area imagePreview" style="background-image: url('<?php echo e(asset($info->favicon)); ?>');">
			                      	</div>
			                      </label>
			                      <input type="file" name="favicon" id="favicon" class="uploadFile form-control d-none">
			                    </div>
			                    <div class="form-group">
									<div class="form-group">
										<label><?php echo e(__('Default Language')); ?></label>
										<select class="form-control selectric" name="default_language">
											<?php 
											$lang_option = App\Option::where('key','site_value')->first();
											$default_lang = json_decode($lang_option->value);
											?>
											<?php $__currentLoopData = App\Language::where('status','active')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option <?php echo e($lang->code == $default_lang->default_language ? 'selected' : ''); ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</select>
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary"><?php echo e(__('Update')); ?></button>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5><?php echo e(__('Mail Settings')); ?></h5>
							</div>
							<div class="card-body">
								<div class="form-group">
									<label for="MAIL_DRIVER"><?php echo e(__('MAIL DRIVER')); ?></label>
									<input id="MAIL_DRIVER" class="form-control" type="text" name="MAIL_DRIVER" value="<?php echo e(env('MAIL_DRIVER')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_HOST"><?php echo e(__('MAIL HOST')); ?></label>
									<input type="text" name="MAIL_HOST" class="form-control" value="<?php echo e(env('MAIL_HOST')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_PORT"><?php echo e(__('MAIL PORT')); ?></label>
									<input type="text" name="MAIL_PORT" class="form-control" value="<?php echo e(env('MAIL_PORT')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_USERNAME"><?php echo e(__('MAIL USERNAME')); ?></label>
									<input type="text" name="MAIL_USERNAME" class="form-control" value="<?php echo e(env('MAIL_USERNAME')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_PASSWORD"><?php echo e(__('MAIL PASSWORD')); ?></label>
									<input type="password" name="MAIL_PASSWORD" class="form-control" value="<?php echo e(env('MAIL_PASSWORD')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_ENCRYPTION"><?php echo e(__('MAIL ENCRYPTION')); ?></label>
									<input type="text" name="MAIL_ENCRYPTION" class="form-control" value="<?php echo e(env('MAIL_ENCRYPTION')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_FROM_ADDRESS"><?php echo e(__('MAIL FROM ADDRESS')); ?></label>
									<input type="text" name="MAIL_FROM_ADDRESS" class="form-control" value="<?php echo e(env('MAIL_FROM_ADDRESS')); ?>">
								</div>
								<div class="form-group">
									<label for="MAIL_FROM_NAME"><?php echo e(__('MAIL FROM NAME')); ?></label>
									<input type="text" name="MAIL_FROM_NAME" class="form-control" value="<?php echo e(env('MAIL_FROM_NAME')); ?>">
									<input type="hidden" name="APP_NAME" value="<?php echo e(env('APP_NAME')); ?>">
									<input type="hidden" name="APP_ENV" value="<?php echo e(env('APP_ENV')); ?>">
									<input type="hidden" name="APP_URL" value="<?php echo e(env('APP_URL')); ?>">
									<input type="hidden" name="DB_HOST" value="<?php echo e(env('DB_HOST')); ?>">
									<input type="hidden" name="DB_PORT" value="<?php echo e(env('DB_PORT')); ?>">
									<input type="hidden" name="DB_DATABASE" value="<?php echo e(env('DB_DATABASE')); ?>">
									<input type="hidden" name="DB_USERNAME" value="<?php echo e(env('DB_USERNAME')); ?>">
									<input type="hidden" name="DB_PASSWORD" value="<?php echo e(env('DB_PASSWORD')); ?>">
								</div>
								<div class="text-right">
									<button class="btn btn-primary"><?php echo e(__('Update')); ?></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="<?php echo e(asset('backend/assets/js/jquery.selectric.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/settings/sitesetttings.blade.php ENDPATH**/ ?>