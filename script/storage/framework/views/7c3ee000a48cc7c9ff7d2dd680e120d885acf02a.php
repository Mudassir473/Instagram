

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
                			<h4><i class="fab fa-adn ads"></i> <span class="ads"><?php echo e(__('Advertising')); ?></span></h4>
                			<h4><a href="#" data-toggle="modal" data-target="#wallet"><i class="far fa-credit-card"></i> <?php echo e(__('Wallet')); ?>(<?php echo e($currency_value->symbol); ?><?php echo e(number_format($user_data->wallet,2)); ?>)</a></h4>
                			<div class="create-ads-button">
                				<a class="pjax" href="<?php echo e(route('ads.create')); ?>"><i class="fas fa-plus"></i> <?php echo e(__('Create Ad')); ?></a>
                			</div>
                		</div>
                		<div class="ads-table table-responsive mt-30">
                			<table class="table">
							  <thead class="thead-light">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col"><?php echo e(__('Status')); ?></th>
							      <th scope="col"><?php echo e(__('Name')); ?></th>
							      <th scope="col"><?php echo e(__('Results')); ?></th>
							      <th scope="col"><?php echo e(__('Spent')); ?></th>
							      <th scope="col"><?php echo e(__('Action')); ?></th>
							    </tr>
							  </thead>
							  <tbody>
							  	<?php $__currentLoopData = $advertising; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$ads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    <tr>
							      <th scope="row"><?php echo e($key + 1); ?></th>
							      <td>
							      	<?php if($ads->status == 'publish'): ?>
							      	<div class="ads-publish">
							      		<a href="<?php echo e(route('ads.pending',$ads->id)); ?>" class="pjax publish"><?php echo e(__('published')); ?></a>
							      	</div>
							      	<?php elseif($ads->status == 'pending'): ?>
							      	<div class="ads-publish">
							      		<a href="<?php echo e(route('ads.approved',$ads->id)); ?>" class="pjax pending"><?php echo e(__('pending')); ?></a>
							      	</div>
							      	<?php elseif($ads->status == 'complete'): ?>
							      	<div class="ads-publish">
							      		<a href="javascript:void(0)" class="complete"><?php echo e(__('completed')); ?></a>
							      	</div>
							      	<?php else: ?>
							      	<div class="ads-publish">
							      		<a href="javascript:void(0)" class="reject disabled"><?php echo e(__('rejected')); ?></a>
							      	</div>
							      	<?php endif; ?>
							      </td>
							      <td><?php echo e($ads->title); ?></td>
							      <td>
							      	<?php if($ads->pricing == 'per_link'): ?>
							      	<?php echo e($ads->result); ?> <?php echo e(__('Clicks')); ?>

							      	<?php else: ?>
							      	<?php echo e($ads->result); ?> <?php echo e(__('People Impression')); ?>

							      	<?php endif; ?>
							      </td>
							      <td><?php echo e($currency_value->symbol); ?><?php echo e($ads->total_spent); ?></td>
							      <td>
							      	<a class="pjax" href="<?php echo e(route('ads.edit',$ads->id)); ?>"><i class="far fa-edit"></i></a>
							      	<a href="javascript:void(0)" onclick="ads_delete('<?php echo e($ads->id); ?>')"><i class="fas fa-trash-alt"></i></a>
							      </td>
							    </tr>
							    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							    <input type="hidden" id="ads_delete_url" value="<?php echo e(route('ads.delete')); ?>">
							  </tbody>
							  <tfoot class="thead-light">
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col"><?php echo e(__('Status')); ?></th>
							      <th scope="col"><?php echo e(__('Name')); ?></th>
							      <th scope="col"><?php echo e(__('Results')); ?></th>
							      <th scope="col"><?php echo e(__('Spent')); ?></th>
							      <th scope="col"><?php echo e(__('Action')); ?></th>
							    </tr>
							  </tfoot>
							</table>
                		</div>		
                	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main area end -->


<div class="modal fade" id="wallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content paypal-balence">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('My Balence')); ?> <span class="balence_color"><?php echo e($currency_value->symbol); ?><?php echo e(number_format($user_data->wallet,2)); ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="paypal_form">
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="wallet_amount" class="col-form-label"><?php echo e(__('Amount')); ?>:</label>
	            <input type="number" class="form-control" id="wallet_amount" required>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i> <?php echo e(__('Close')); ?></button>
	        <button type="submit" class="btn btn-primary"><i class="fab fa-paypal"></i> <?php echo e(__('Replenish')); ?></button>
	      </div>
       </form>
    </div>
  </div>
</div>

<div class="modal fade" id="paypalb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content paypal-balence">
    	<div class="modal-header">
    		<input type="hidden" id="_token" value="<?php echo e(csrf_token()); ?>">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Pay With Paypal')); ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	     <div class="modal-body text-center mt-5 mb-5">
	          <div id="paypal-button"></div>
	     </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script src="<?php echo e(asset('frontend/js/payment.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/advertising/index.blade.php ENDPATH**/ ?>