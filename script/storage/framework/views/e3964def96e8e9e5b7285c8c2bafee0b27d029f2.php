

<?php $__env->startSection('title','Withdraw'); ?>

<?php $__env->startSection('content'); ?>
<!-- main area start -->
<section>
	<div class="main-area pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="settings-area p-0">
						<div class="withdraw-body">
							<h4><?php echo e(__('Withdraw History')); ?></h4>
							<div class="ads-table table-responsive mt-30">
								<table class="table">
									<thead class="thead-light">
										<tr>
											<th scope="col">#</th>
											<th scope="col"><?php echo e(__('Transaction Id')); ?></th>
											<th scope="col"><?php echo e(__('Email')); ?></th>
											<th scope="col"><?php echo e(__('Payment Method')); ?></th>
											<th scope="col"><?php echo e(__('Total Amount')); ?></th>
											<th scope="col"><?php echo e(__('Status')); ?></th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$currency_code = App\Option::where('key','currency')->first();
        								$currency_value = json_decode($currency_code->value);
										?>
										<?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$withdraw): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<th scope="row"><?php echo e($key + 1); ?></th>
											<td><?php echo e($withdraw->withdraw_id); ?></td>
											<td class="email"><?php echo e($withdraw->email); ?></td>
											<td><?php echo e($withdraw->type); ?></td>
											<td><?php echo e($currency_value->symbol); ?><?php echo e(number_format($withdraw->amount,2)); ?></td>
											<td>
												<?php if($withdraw->status == 'pending'): ?>
												<div class="ads-publish">
										      		<a href="javascript:void(0)" class="pjax pending disabled"><?php echo e(__('Pending')); ?></a>
										      	</div>
												<?php elseif($withdraw->status == 'approve'): ?>
												<div class="ads-publish">
										      		<a href="javascript:void(0)" class="pjax publish disabled"><?php echo e(__('Approved')); ?></a>
										      	</div>
										      	<?php else: ?>
										      	<div class="ads-publish">
										      		<a href="javascript:void(0)" class="pjax reject disabled"><?php echo e(__('Rejected')); ?></a>
										      	</div>
												<?php endif; ?>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
									<tfoot class="thead-light">
										<tr>
											<th scope="col">#</th>
											<th scope="col"><?php echo e(__('Transaction Id')); ?></th>
											<th scope="col"><?php echo e(__('Email')); ?></th>
											<th scope="col"><?php echo e(__('Payment Method')); ?></th>
											<th scope="col"><?php echo e(__('Total Amount')); ?></th>
											<th scope="col"><?php echo e(__('Status')); ?></th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/withdraw.blade.php ENDPATH**/ ?>