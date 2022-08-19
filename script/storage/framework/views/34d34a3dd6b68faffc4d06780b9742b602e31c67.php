

<?php $__env->startSection('title','Edit Language'); ?>

<?php $__env->startPush('css'); ?>

<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1><?php echo e(__('Manage & Edit Languages')); ?></h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a></div>
				<div class="breadcrumb-item"><?php echo e(__('Manage & Edit Languages')); ?></div>
			</div>
		</div>

		<div class="section-body">
			<h2 class="section-title"><?php echo e(__('Manage & Edit Languages')); ?></h2>
			<p class="section-lead"><?php echo e(__('Manage & Edit Languages section')); ?></p>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4><?php echo e(__('Manage & Edit Languages')); ?></h4>
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
								<table class="table table-striped" id="table_id">
									<thead>
										<tr>
											<th><?php echo e(__('Id')); ?></th>
											<th><?php echo e(__('Key Name')); ?></th>
											<th><?php echo e(__('Value')); ?></th>
											<th><?php echo e(__('Action')); ?></th>
										</tr>
									</thead>
									<?php 
									$a = 1;
									?>
									<tbody>
										<?php $__currentLoopData = $language_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<tr>
											<td><?php echo e($a++); ?></td>
											<td><?php echo e($key); ?></td>
											<td><?php echo e($lang); ?></td>
											<td>
												<a href="#" data-toggle="modal" data-target="#lang_value<?php echo e(Str::slug($key)); ?>" class="btn btn-primary"><?php echo e(__('Edit')); ?></a>
											</td>
										</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


<?php $__currentLoopData = $language_values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade mymodel" id="lang_value<?php echo e(Str::slug($key)); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Value')); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo e(route('admin.language.update',$id)); ?>" method="POST" class="edit_lang">
      	<?php echo csrf_field(); ?>
	      <div class="modal-body">
		      <div class="form-group">
		        <label for="message-text" class="col-form-label"><?php echo e(__('Value')); ?>:</label>
		        <input type="hidden" name="key" value="<?php echo e($key); ?>">
		        <textarea class="form-control" id="message-text" name="value"><?php echo e($lang); ?></textarea>
		      </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
	        <button type="submit" class="btn btn-primary"><?php echo e(__('Update')); ?></button>
	      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/admin/language/edit.blade.php ENDPATH**/ ?>