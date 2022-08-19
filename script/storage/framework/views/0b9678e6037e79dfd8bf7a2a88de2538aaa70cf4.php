<div class="col-lg-4 mb-25">
  <div class="video-card">
    <video id='<?php echo e($video->slug ? $video->slug : $video->id); ?>' onclick="popup('<?php echo e($video->slug ? $video->slug : $video->id); ?>')" loop muted="muted" onmouseover="mouseover('<?php echo e($video->slug ? $video->slug : $video->id); ?>')" onmouseout="mouseout('<?php echo e($video->slug ? $video->slug : $video->id); ?>')">
      <source src='<?php echo e(asset($video->url)); ?>' type='video/mp4'>
    </video>
    <div class="video-card-details-info">
      <div class="video-author-profile-img">
        <a class="pjax" href="<?php echo e(route('profile.show',$video->user->slug)); ?>"><img src="<?php echo e(asset($video->user->image)); ?>" alt=""></a>
      </div>
      <div class="video-total-view">
       <i class="fas fa-play"></i> <?php echo e(App\Helpers\UserSystemInfo::conveter($video->view)); ?>

     </div>
   </div>
   <div class="loader<?php echo e($video->slug); ?> d-none">
     <div class="video-loader"></div>
   </div>
 </div>
</div><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/frontend/section/singlevideo.blade.php ENDPATH**/ ?>