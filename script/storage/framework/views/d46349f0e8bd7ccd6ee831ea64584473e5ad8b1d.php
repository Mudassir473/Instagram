
<?php $__env->startSection('title','Settings'); ?>
<?php $__env->startSection('content'); ?>

<!-- success-alert start -->
<div class="alert-message-area">
	<div class="alert-content">
		<h4 class="ale"><?php echo e(__('Your Settings Successfully Updated')); ?></h4>
	</div>
</div>
<!-- success-alert end -->

<!-- error-alert start -->
<div class="error-message-area">
	<div class="error-content">
		<h4 class="error-msg"><?php echo e(__('Your Settings Successfully Updated')); ?></h4>
	</div>
</div>
<!-- error-alert end -->


<!-- main area start -->
<section>
	<div class="main-area pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="settings-area">
						<div class="user-settings-info text-center">
							<div class="user-img">
								<a href="#"><img src="<?php echo e(asset(Auth::User()->image)); ?>" alt=""> <?php echo e(Auth::User()->first_name); ?> <?php echo e(Auth::User()->last_name); ?></a>
							</div>
							<div class="alert alert-danger d-none"></div>
						</div>
						<div class="settings-menu">
							<ul class="nav nav-tabs justify-content-center">
								<li class="active"><a data-toggle="tab" class="active" href="#description"><?php echo e(__('General')); ?></a></li>
								<li><a data-toggle="tab" href="#menu1"><?php echo e(__('Profile')); ?></a></li>
								<li><a data-toggle="tab" href="#menu2"><?php echo e(__('Password')); ?></a></li>
							</ul>
						</div>
						<?php 
						$user = json_decode(Auth::User()->value);
						?>
						<div class="product-info-tab">
							<div class="tab-content">
								<div id="description" class="tab-pane fade in active show">
									<form action="<?php echo e(route('profile.update')); ?>" method="POST" class="setting_form">
										<?php echo csrf_field(); ?>
										<div class="card-section">
											<div class="row">
												<div class="col-lg-6">
													<h6><?php echo e(__('Username')); ?></h6>
													<div class="login-form-gorup">
														<input type="text" id="username" class="login-form-control" name="username" placeholder="<?php echo e(__('Username')); ?>" value="<?php echo e(Auth::User()->username); ?>">
													</div>
												</div>
												<div class="col-lg-6">
													<h6><?php echo e(__('Email')); ?></h6>
													<div class="login-form-gorup">
														<input type="text" id="email" class="login-form-control" name="email" placeholder="<?php echo e(__('Email')); ?>" value="<?php echo e(Auth::User()->email); ?>">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<h6><?php echo e(__('Gender')); ?></h6>
													<div class="login-birthday-display">
														<div class="login-form-gorup">
															<select name="gender">
																<option <?php echo e($user->gender == 'male' ? 'selected' : ''); ?> value="male"><?php echo e(__('Male')); ?></option>
																<option <?php echo e($user->gender == 'female' ? 'selected' : ''); ?> value="female"><?php echo e(__('Female')); ?></option>
																<option <?php echo e($user->gender == 'others' ? 'selected' : ''); ?> value="others"><?php echo e(__('Others')); ?></option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<h6><?php echo e(__('Country')); ?></h6>
													<div class="login-birthday-display">
														<div class="login-form-gorup">
															<select name="country">
																<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
																<option <?php echo e($user->country == $country ? 'selected' : ''); ?> value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
																<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<h6><?php echo e(__('Age')); ?></h6>
													<div class="login-birthday-display">
														<div class="login-form-gorup">
															<select name="age">
																<?php for($i=1; $i <= 100; $i++): ?>
																<option <?php echo e($i == $user->age ? 'selected' : ''); ?> value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
																<?php endfor; ?>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-6">
													<h6><?php echo e(__('Relation')); ?></h6>
													<div class="login-birthday-display">
														<div class="login-form-gorup">
															<select name="relation">
																<option <?php echo e($user->relation == 'single' ? 'selected' : ''); ?> value="single"><?php echo e(__('Single')); ?></option>
																<option <?php echo e($user->relation == 'married' ? 'selected' : ''); ?> value="married"><?php echo e(__('Married')); ?></option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="save-button text-center mt-3">
												<button class="usersettings_update" type="submit"><?php echo e(__('Update')); ?></button>
											</div>
										</div>
									</form>
								</div>
								<div id="menu1" class="tab-pane fade">
									<form action="<?php echo e(route('profile.update')); ?>" method="POST" class="setting_form">
										<?php echo csrf_field(); ?>
										<div class="card-section">
											<h6><?php echo e(__('First & Last Name')); ?></h6>
											<div class="login-birthday-display d-flex">
												<div class="login-form-gorup first-name">
													<input type="text" id="first_name" class="login-form-control" name="first_name" placeholder="<?php echo e(__('First Name')); ?>" value="<?php echo e(Auth::User()->first_name); ?>">
												</div>
												<div class="login-form-gorup last-name">
													<input type="text" id="last_name" class="login-form-control" name="last_name" placeholder="<?php echo e(__('Last Name')); ?>" value="<?php echo e(Auth::User()->last_name); ?>">
												</div>
											</div>
											<h6><?php echo e(__('About Me')); ?></h6>
											<div class="login-form-gorup">
												<textarea name="bio" class="login-form-control" cols="7" rows="5" placeholder="<?php echo e(__('About Me')); ?>"><?php echo e($user->bio); ?></textarea>
											</div>
											<h6><?php echo e(__('Facbook')); ?></h6>
											<div class="login-form-gorup">
												<input type="text" id="facebook" class="login-form-control" name="facebook" placeholder="<?php echo e(__('Facbook')); ?>" value="<?php echo e($user->facebook); ?>">
											</div>
											<h6><?php echo e(__('Twitter')); ?></h6>
											<div class="login-form-gorup">
												<input type="text" id="twitter" class="login-form-control" name="twitter" placeholder="<?php echo e(__('Twitter')); ?>" value="<?php echo e($user->twitter); ?>">
											</div>
											<h6><?php echo e(__('Instagram')); ?></h6>
											<div class="login-form-gorup">
												<input type="text" id="instagram" class="login-form-control" name="instagram" placeholder="<?php echo e(__('Instagram')); ?>" value="<?php echo e($user->instagram); ?>">
											</div>
											<h6><?php echo e(__('Pinterest')); ?></h6>
											<div class="login-form-gorup">
												<input type="text" id="pinterest" class="login-form-control" name="pinterest" placeholder="<?php echo e(__('Pinterest')); ?>" value="<?php echo e($user->pinterest); ?>">
											</div>
											<div class="save-button text-center mt-3">
												<button class="usersettings_update" type="submit"><?php echo e(__('Update')); ?></button>
											</div>
										</div>
									</form>
								</div>
								<div id="menu2" class="tab-pane fade">
									<form action="<?php echo e(route('profile.update')); ?>" method="POST" class="setting_form">
										<?php echo csrf_field(); ?>
										<div class="card-section">
											<h6><?php echo e(__('Current Password')); ?></h6>
											<div class="login-form-gorup">
												<input type="password" id="current_password" name="current_password" class="login-form-control" placeholder="<?php echo e(__('Current Password')); ?>">
											</div>
											<h6><?php echo e(__('New Password')); ?></h6>
											<div class="login-form-gorup">
												<input type="password" id="password" name="password" class="login-form-control" placeholder="<?php echo e(__('New Password')); ?>">
											</div>
											<h6><?php echo e(__('Confirm Password')); ?></h6>
											<div class="login-form-gorup">
												<input type="password" id="password_confirmation" name="password_confirmation" class="login-form-control" placeholder="<?php echo e(__('Confirm Password')); ?>">
											</div>
											<div class="save-button text-center mt-3">
												<button class="usersettings_update" type="submit"><?php echo e(__('Update')); ?></button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- main area end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/usersetting.blade.php ENDPATH**/ ?>