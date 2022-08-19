

<?php $__env->startSection('title','Advertising'); ?>

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
    <div class="main-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<div class="ads-content-area">
                		<?php 
						$currency_code = App\Option::where('key','currency')->first();
        				$currency_value = json_decode($currency_code->value);
						?>
                		<div class="ads-header d-flex">
                			<h4><i class="fab fa-adn ads"></i> <span class="ads"><?php echo e(__('Advertising > Edit Advertising')); ?></span></h4>
                			<h4><i class="far fa-credit-card"></i> <?php echo e(__('Wallet')); ?>(<?php echo e($currency_value->symbol); ?><?php echo e($currency_value->code); ?><?php echo e(number_format($user_data->wallet,2)); ?>)</h4>
                		</div>
                		<input type="hidden" id="ads_url" value="<?php echo e(route('ads.index')); ?>">
                		<div class="create-ads-area">
                			<form action="<?php echo e(route('ads.update',$advertising->id)); ?>" class="create-ads-form" id="update_ads_form" method="POST">
                				<?php echo csrf_field(); ?>
                				<div class="row">
	                				<div class="col-lg-8">
	                					<h6><?php echo e(__('Title')); ?></h6>
	                					<div class="login-form-group">
	                						<input type="text" name="title" class="login-form-control" placeholder="<?php echo e(__('Title')); ?>" value="<?php echo e($advertising->title); ?>">
	                					</div>
	                					<h6><?php echo e(__('Url')); ?></h6>
	                					<div class="login-form-group">
	                						<input type="text" name="url" class="login-form-control" placeholder="<?php echo e(__('Url')); ?>" value="<?php echo e($advertising->url); ?>">
	                					</div>
	                					<h6><?php echo e(__('Select Media(480*100)')); ?></h6>
	                					<div class="ads-select-media">
	                						<label for="ads_media" id="ads_label" style="background-image: url('<?php echo e(asset($advertising->media)); ?>');">
	                							<i class="fas fa-image d-none"></i>
	                						</label>
	                						<input type="file" name="media" id="ads_media" class="d-none">
	                					</div>
	                				</div>
	                				<div class="col-lg-4">
	                					<h6><?php echo e(__('Target Audience')); ?></h6>
	                					<div class="login-form-group">
	                						<select class="login-form-control" name="country">
	                							<option <?php echo e($advertising->country == 'select_all' ? 'selected' : ''); ?> value="select_all"><?php echo e(__('Select All')); ?></option>
	                							<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                							<option <?php echo e($country == $advertising->country ? 'selected' : ''); ?> value="<?php echo e($country); ?>"><?php echo e($country); ?></option>
	                							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                						</select>
	                					</div>
	                					<h6><?php echo e(__('Pricing')); ?></h6>
	                					<div class="login-form-group">
	                						<select class="login-form-control" name="pricing" id="ads_pricing">
	                							<option value="per_link" <?php echo e($advertising->pricing == 'per_link' ? 'selected' : ''); ?>><?php echo e(__('Pay per link')); ?>(<?php echo e($currency_value->symbol); ?><?php echo e($per_link->value); ?>)</option>
	                							<option <?php echo e($advertising->pricing == 'per_impression' ? 'selected' : ''); ?> value="per_impression"><?php echo e(__('Pay per Impression')); ?>(<?php echo e($currency_value->symbol); ?><?php echo e($per_impression->value); ?>)</option>
	                						</select>
	                					</div>
	                					<h6><?php echo e(__('Total ads spending limit')); ?></h6>
	                					<div class="login-form-group">
	                						<input type="number" name="total_limit" min="1" id="total_limit" class="login-form-control" value="<?php echo e($advertising->total_limit); ?>">
	                						<div class="up-down-btn">
	                							<a href="javascript:void(0)" class="minus" onclick="limit_minus()"><i class="fas fa-minus-circle"></i></a>
	                							<a href="javascript:void(0)" onclick="limit_plus()"><i class="fas fa-plus-circle"></i></a>
	                						</div>
	                					</div>
	                					<div class="boot-your-post">
	                						<a href="<?php echo e(route('ads.index')); ?>" class="pjax cancel"><?php echo e(__('Cancel')); ?></a>
	                						<button type="submit" class="ads_button publish"><?php echo e(__('Publish')); ?></button>
	                					</div>
	                				</div>
	                			</div>
                			</form>
                		</div>		
                	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main area end -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/advertising/edit.blade.php ENDPATH**/ ?>