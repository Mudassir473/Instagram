

<?php $__env->startSection('title','Manage Reports'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage Reports')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage Reports')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage Reports')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage Reports section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage Reports')); ?></h4>
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
										<th><?php echo e(__('Reporter')); ?></th>
										<th><?php echo e(__('Report Text')); ?></th>
										<th><?php echo e(__('Report Time')); ?></th>
										<th><?php echo e(__('Action')); ?></th>
									</tr>
									<?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<tr>
										<td><?php echo e($key + 1); ?></td>
										<th><a target="__blank" href="<?php echo e(route('profile.show',App\User::find($report->user_id)->slug)); ?>"><?php echo e(App\User::find($report->user_id)->username); ?></a></th>
										<td><?php echo e($report->body); ?></td>
										<td><?php echo e($report->created_at->diffForHumans()); ?></td>
										<td>
											<a target="__blank" href="<?php echo e(route('video.show',App\Video::find($report->video_id)->slug)); ?>" class="btn btn-primary"><?php echo e(__('View')); ?></a>
											<a href="<?php echo e(route('admin.video.report_delete',$report->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
										</td>
									</tr>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</table>
								<div class="f-right">
									<?php echo e($reports->links()); ?>

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

<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/video/report.blade.php ENDPATH**/ ?>