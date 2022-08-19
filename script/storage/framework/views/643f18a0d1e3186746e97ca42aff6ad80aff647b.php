<!DOCTYPE html>
<html>
<head>
	<title><?php echo e(__('Installer')); ?></title>
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/fontawesome-all.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/font.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/default.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('frontend/img/favicon.ico')); ?>">
	
</head>
<body>

	

	<!-- requirments-section-start -->
	<section class="pt-50 mb-50">
		<div class="requirments-section">
			<div class="content-requirments d-flex justify-content-center">
				<div class="requirments-main-content">
					<div class="multi-step text-center">
						<nav>
							<ul id="progressbar">
								<li class="active">
									<div class="step-number">
										<span><?php echo e(__(1)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Requirments')); ?>

									</div>
								</li>
								<li class="active">
									<div class="step-number">
										<span><?php echo e(__(2)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Verify')); ?>

									</div>
								</li>
								<li>
									<div class="step-number">
										<span><?php echo e(__(3)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Configuration')); ?>

									</div>
								</li>
								<li>
									<div class="step-number">
										<span><?php echo e(__(4)); ?></span>
									</div>
									<div class="step-info">
										<?php echo e(__('Complete')); ?>

									</div>
								</li>
							</ul>
						</nav>
					</div>
					<div class="installer-header text-center">

					</div>
					<form action="<?php echo e(route('install.verify_check')); ?>" method="POST">
						<?php echo csrf_field(); ?>
						<div class="custom-form install-form">
							<div class="row">
								<div class="col-lg-12">
									<?php if(Session::has('error_msg')): ?>
									<div class="alert alert-danger" role="alert">
									  <?php echo e(Session::get('error_msg')); ?>

									</div>
									<?php endif; ?>
									<div class="form-group">
										<label for="key"><?php echo e(__('Enter Purchase Key')); ?></label>
										<input type="text" class="form-control" id="key" name="key" required placeholder="Enter Purchase Key">
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary install-btn f-right"><?php echo e(__('Verify')); ?></button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- requirments-section-end -->
	<script src="<?php echo e(asset('frontend/js/vendor/jquery-3.5.1.js')); ?>"></script>
	<script src="<?php echo e(asset('frontend/js/install/install.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/installer/verify.blade.php ENDPATH**/ ?>