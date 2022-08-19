<form id="report_form" action="<?php echo e(route('report')); ?>" method="POST">
	<?php echo csrf_field(); ?>
	<textarea class="embed_textarea" name="body" placeholder="Write report issue"></textarea>
	<input type="hidden" name="video_id" value="<?php echo e($video->id); ?>">
	<button type="submit" class="embed_action"><?php echo e(__('Send Report')); ?></button>
</form>

<script src="<?php echo e(asset('frontend/js/report.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/frontend/section/report.blade.php ENDPATH**/ ?>