

<?php $__env->startSection('title','Pending Users'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Pending Users')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Pending Users')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Pending Users')); ?></h2>
			<p class="section-lead"><?php echo e(__('Pending Users Section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Pending Users')); ?></h4>
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
										<th><?php echo e(__('Username')); ?></th>
										<th><?php echo e(__('Email')); ?></th>
										<th><?php echo e(__('Country')); ?></th>
										<th><?php echo e(__('Status')); ?></th>
										<th><?php echo e(__('Action')); ?></th>
									</tr>
									<?php $__currentLoopData = $pending_users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if(json_decode($user->value)->status == 'deactive'): ?>
									<tr>
										<td><?php echo e($key + 1); ?></td>
										<th><a target="__blank" href="<?php echo e(route('profile.show',$user->slug)); ?>"><?php echo e($user->username); ?></a></th>
										<td><?php echo e($user->email); ?></td>
										<td><?php echo e($user->country); ?></td>
										<?php 
										$user_data = json_decode($user->value);
										?>
										<td>
											<?php if($user_data->status == 'active'): ?>
											<div class="badge badge-success"><?php echo e(__('Approved')); ?></div>
											<?php else: ?>
											<div class="badge badge-danger"><?php echo e(__('Pending')); ?></div>
											<?php endif; ?>
										</td>
										<td>
											<a href="<?php echo e(route('admin.user.approved',$user->id)); ?>" class="btn btn-primary"><?php echo e(__('Approved')); ?></a>
											<a href="<?php echo e(route('admin.user.delete',$user->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
										</td>
									</tr>
									<?php endif; ?>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="f-right">
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

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/user/pending.blade.php ENDPATH**/ ?>