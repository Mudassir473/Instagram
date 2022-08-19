

<?php $__env->startSection('title','Manage Verification Request'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage Verification Request')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage Verification Request')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage Verification Request')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage Verification Request section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage Verification Request')); ?></h4>
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
										<th><?php echo e(__('National Id')); ?></th>
										<th><?php echo e(__('User Name')); ?></th>
										<th><?php echo e(__('Message')); ?></th>
										<th><?php echo e(__('Status')); ?></th>
										<th><?php echo e(__('Action')); ?></th>
									</tr>
									<?php $__currentLoopData = $verifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$verification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($key + 1); ?></td>
										<td><img class="table_img" src="<?php echo e(asset($verification->image)); ?>"></td>
										<th><a target="__blank" href="<?php echo e(route('profile.show',App\User::find($verification->user_id)->slug)); ?>"><?php echo e(App\User::find($verification->user_id)->username); ?></a></th>
										<td><?php echo e($verification->message); ?></td>
										<td>
											<?php if($verification->status == 'pending'): ?>
											<div class="badge badge-danger"><?php echo e(__('Pending')); ?></div>
											<?php endif; ?>
										</td>
										<td>
											<a href="<?php echo e(route('admin.user.verify',$verification->id)); ?>" class="btn btn-primary"><?php echo e(__('Verify')); ?></a>
											<a href="#" data-toggle="modal" data-target="#verify_<?php echo e($verification->id); ?>" class="btn btn-info">View</a>
											<a href="<?php echo e(route('admin.user.verify_delete',$verification->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="f-right">
									<?php echo e($verifications->links()); ?>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $__currentLoopData = $verifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $verify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="verify_<?php echo e($verify->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('National Id Card')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="<?php echo e(asset($verify->image)); ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
      </div>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/user/verification.blade.php ENDPATH**/ ?>