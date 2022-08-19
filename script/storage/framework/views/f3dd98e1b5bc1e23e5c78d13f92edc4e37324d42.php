

<?php $__env->startSection('title','Manage Withdraw Request'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage Withdraw Request')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage Withdraw Request')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage Withdraw Request')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage Withdraw Request section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage Withdraw Request')); ?></h4>
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
						<div class="card-body p-0">
							<div class="table-responsive">
								<table class="table table-striped">
									<tr>
										<th><?php echo e(__('Id')); ?></th>
										<th><?php echo e(__('Transaction id')); ?></th>
										<th><?php echo e(__('Email')); ?></th>
										<th><?php echo e(__('Payment Method')); ?></th>
										<th><?php echo e(__('Total Amount')); ?></th>
										<th><?php echo e(__('Status')); ?></th>
										<th><?php echo e(__('Action')); ?></th>
									</tr>
									<?php 
									$currency_code = App\Option::where('key','currency')->first();
        							$currency_value = json_decode($currency_code->value);
									?>
									<?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($key + 1); ?></td>
										<td><?php echo e($withdraw->withdraw_id); ?></td>
										<td><?php echo e($withdraw->email); ?></td>
										<td>
											<?php if($withdraw->type == 'paypal'): ?>
											<?php echo e(__('Paypal')); ?>

											<?php else: ?>
											<?php echo e(__('Swift')); ?>

											<?php endif; ?>
										</td>
										<td><?php echo e($currency_value->symbol); ?><?php echo e(number_format($withdraw->amount,2)); ?></td>
										<td>
											<?php if($withdraw->status == 'pending'): ?>
											<div class="badge badge-danger"><?php echo e(__('Pending')); ?></div>
											<?php elseif($withdraw->status == 'approve'): ?>
											<div class="badge badge-success"><?php echo e(__('Approved')); ?></div>
											<?php else: ?>
											<div class="badge badge-danger"><?php echo e(__('Rejected')); ?></div>
											<?php endif; ?>
										</td>
										<td>
											<a href="<?php echo e(route('admin.withdraw.accept',$withdraw->id)); ?>" class="btn btn-primary"><?php echo e(__('Accept')); ?></a>
											<a href="<?php echo e(route('admin.withdraw.reject',['user_id'=>$withdraw->user_id,'withdraw_id'=>$withdraw->id])); ?>" class="btn btn-info"><?php echo e(__('Reject')); ?></a>
											<?php if($withdraw->type != 'paypal'): ?>
											<a href="#" data-toggle="modal" data-target="#swift_<?php echo e($withdraw->id); ?>" class="btn btn-danger"><?php echo e(__('View')); ?></a>
											<?php endif; ?>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="f-right">
									<?php echo e($withdraws->links()); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($withdraw->type != 'paypal'): ?>
<?php 
$withdraw_data = json_decode($withdraw->value);
?>
<!-- Modal -->
<div class="modal fade" id="swift_<?php echo e($withdraw->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bank Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-lg-12">
        		<div class="single-content">
        			<strong>Billing Address 1:</strong><span> <?php echo e($withdraw_data->billing_address_1); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Billing Address 2(optional):</strong><span> <?php echo e($withdraw_data->billing_address_2); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>City:</strong><span> <?php echo e($withdraw_data->city); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>State:</strong><span> <?php echo e($withdraw_data->state); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Postal Code:</strong><span> <?php echo e($withdraw_data->postal_code); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Amount:</strong><span> <?php echo e($currency_value->symbol); ?><?php echo e($withdraw->amount); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Country:</strong><span> <?php echo e($withdraw_data->country); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Bank Account Holder's Name:</strong><span> <?php echo e($withdraw_data->account_holder_name); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Bank Account Number/IBAN:</strong><span> <?php echo e($withdraw_data->account_number); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>SWIFT Code:</strong><span> <?php echo e($withdraw_data->swift_code); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Bank Name in Full:</strong><span> <?php echo e($withdraw_data->bank_full_name); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Bank Branch City:</strong><span> <?php echo e($withdraw_data->bank_branch_city); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Bank Branch Country:</strong><span> <?php echo e($withdraw_data->bank_branch_country); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Intermediary Bank - Bank Code:</strong><span> <?php echo e($withdraw_data->intermediary_bank_code); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Intermediary Bank - Name:</strong><span> <?php echo e($withdraw_data->intermediary_bank_name); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Intermediary Bank - City:</strong><span> <?php echo e($withdraw_data->intermediary_bank_city); ?></span>
        		</div>
        		<div class="single-content">
        			<strong>Intermediary Bank - Country:</strong><span> <?php echo e($withdraw_data->intermediary_bank_country); ?></span>
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/withdraw/index.blade.php ENDPATH**/ ?>