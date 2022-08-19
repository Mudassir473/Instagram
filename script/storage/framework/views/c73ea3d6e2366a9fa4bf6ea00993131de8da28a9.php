

<?php $__env->startSection('title','Manage Ads'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage Ads')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage Ads')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage Ads')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage Ads Section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage Ads')); ?></h4>
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
										<th><?php echo e(__('Title')); ?></th>
										<th><?php echo e(__('Pricing')); ?></th>
										<th><?php echo e(__('Result')); ?></th>
										<th><?php echo e(__('Total Spent')); ?></th>
										<th><?php echo e(__('Status')); ?></th>
										<th><?php echo e(__('Action')); ?></th>
									</tr>
									<?php 
									$currency_code = App\Option::where('key','currency')->first();
        							$currency_value = json_decode($currency_code->value);
									?>
									<?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($key + 1); ?></td>
										<th><?php echo e($ad->title); ?></th>
										<td>
											<?php if($ad->pricing == 'per_link'): ?>
											<?php echo e(__('Per Link')); ?>

											<?php else: ?>
											<?php echo e(__('Per Impression')); ?>

											<?php endif; ?>
										</td>
										<td>
											<?php if($ad->pricing == 'per_link'): ?>
											<?php echo e($ad->result); ?> <?php echo e(__('Clicks')); ?>

											<?php else: ?>
											<?php echo e($ad->result); ?> <?php echo e(__('Impression')); ?>

											<?php endif; ?>
										</td>
										<td><?php echo e($currency_value->symbol); ?><?php echo e(number_format($ad->total_spent,2)); ?></td>
										<td>
											<?php if($ad->status == 'publish'): ?>
											<div class="badge badge-success"><?php echo e(__('published')); ?></div>
											<?php elseif($ad->status == 'pending'): ?>
											<div class="badge badge-danger"><?php echo e(__('pending')); ?></div>
											<?php elseif($ad->status == 'reject'): ?>
											<div class="badge badge-danger"><?php echo e(__('rejected')); ?></div>
											<?php elseif($ad->status == 'complete'): ?>
											<div class="badge badge-primary"><?php echo e(__('completed')); ?></div>
											<?php endif; ?>
										</td>
										<td>
											<a href="<?php echo e(route('admin.ads.edit',$ad->id)); ?>" class="btn btn-info"><?php echo e(__('Edit')); ?></a>
											<a href="<?php echo e(route('admin.ads.delete',$ad->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="f-right">
									<?php echo e($ads->links()); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/ads.blade.php ENDPATH**/ ?>