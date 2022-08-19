

<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('content'); ?>
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Dashboard')); ?></h1>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-primary">
						<i class="far fa-file-video"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4><?php echo e(__('Total Video')); ?></h4>
						</div>
						<div class="card-body">
							<?php echo e($video_count); ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-danger">
						<i class="far fa-user"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4><?php echo e(__('Total User')); ?></h4>
						</div>
						<div class="card-body">
							<?php echo e($user_count); ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-warning">
						<i class="fab fa-buysellads"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4><?php echo e(__('Total Advertising')); ?></h4>
						</div>
						<div class="card-body">
							<?php echo e($ads_count); ?>

						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6 col-12">
				<div class="card card-statistic-1">
					<div class="card-icon bg-success">
						<i class="fas fa-allergies"></i>
					</div>
					<div class="card-wrap">
						<div class="card-header">
							<h4><?php echo e(__('Total Sponsor')); ?></h4>
						</div>
						<div class="card-body">
							<?php echo e($sponsor_count); ?>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4><?php echo e(__('Manage Videos')); ?></h4>
						<div class="card-header-form">
							<div class="input-group">
								<input type="text" id="data_search" class="form-control" placeholder="Search">
								<div class="input-group-btn">
									<button class="btn btn-primary"><i class="fas fa-search"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="table-responsive">
							<table class="table table-striped">
								<tr>
									<th><?php echo e(__('Id')); ?></th>
									<th><?php echo e(__('Title')); ?></th>
									<th><?php echo e(__('Total View')); ?></th>
									<th><?php echo e(__('Status')); ?></th>
									<th><?php echo e(__('Action')); ?></th>
								</tr>
								<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($key + 1); ?></td>
									<th><a target="__blank" href="<?php echo e(route('video.show',$video->slug)); ?>"><?php echo e($video->title); ?></a></th>
									<td><?php echo e(App\Helpers\UserSystemInfo::conveter($video->view)); ?></td>
									<td>
										<?php if($video->status == 'public'): ?>
										<div class="badge badge-success"><?php echo e(__('public')); ?></div>
										<?php else: ?>
										<div class="badge badge-primary"><?php echo e(__('privet')); ?></div>
										<?php endif; ?>
									</td>
									<td>
										<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#fake<?php echo e($video->id); ?>"><?php echo e(__('Add Fake View')); ?></a>
										<a href="<?php echo e(route('admin.video.delete',$video->id)); ?>" class="btn btn-danger"><?php echo e(__('Delete')); ?></a>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</table>
							<div class="f-right">
								<?php echo e($videos->links()); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="fake<?php echo e($video->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Add Fake View')); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo e(route('admin.video.view',$video->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<div class="modal-body">
					<div class="form-group">
						<label for="view" class="col-form-label"><?php echo e(__('View')); ?>:</label>
						<input type="number" class="form-control" id="view" name="view">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
					<button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>