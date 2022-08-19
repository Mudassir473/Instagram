<div class="advise-show">
	<a target="__blank" href="<?php echo e(route('ads.redirect',['ads_id'=>$advertising->id,'user_id'=>$login_user->id])); ?>"><img src="<?php echo e(asset($advertising->media)); ?>"></a>
	<a href="javascript:void(0)" class="ads_close" onclick="ads_close()"><img src="<?php echo e(asset('frontend/img/cancel.png')); ?>"></a>
</div><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/advertising/show.blade.php ENDPATH**/ ?>