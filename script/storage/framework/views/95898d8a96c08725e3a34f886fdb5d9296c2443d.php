

<?php $__env->startSection('title','Latest Videos'); ?>

<?php $__env->startSection('content'); ?>
<!-- ellipsis modal -->
<div class="ellipish-modal d-none">
  <div class="ellipish-modal-content">
    
  </div>
</div>

<!-- modal -->
<div class="bg-modal d-none">
    <div class="close-btn">
        <a href="javascript:void(0)"><img src="<?php echo e(asset('frontend/img/cancel.png')); ?>"></a>
    </div>
    <div class="modal-content-area">
      
    </div>
</div>

<section>
    <div class="main-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-area-title">
                                <?php if($type == 'latest'): ?>
                                <h2><?php echo e(__('Latest Videos')); ?></h2>
                                <?php endif; ?>
                                <?php if($type == 'popular'): ?>
                                <h2><?php echo e(__('Most View')); ?></h2>
                                <?php endif; ?>
                                <?php if($type == 'trending'): ?>
                                <h2><?php echo e(__('Trending')); ?></h2>
                                <?php endif; ?>
                                <p><?php echo e(__('Watch the latest videos from our community')); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php echo csrf_field(); ?>
                    <div class="row <?php echo e($type == 'popular' ? 'popular' : ''); ?><?php echo e($type == 'latest' ? 'latest' : ''); ?><?php echo e($type == 'trending' ? 'trending' : ''); ?>" id="results">
                        <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make('layouts.frontend.section.singlevideo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="page-load-status">
                      <p class="scroll-request"></p>
                      <p class="scroll-error"><?php echo e(__('No more pages to load')); ?></p>
                    </div>
                </div>
                <?php echo $__env->make('layouts.frontend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</section>
<input type="hidden" id="popup_url" value="<?php echo e(route('popup')); ?>">
<input type="hidden" id="ellipsis_url" value="<?php echo e(route('ellipsis')); ?>">
<input type="hidden" id="asset_url" value="<?php echo e(route('welcome')); ?>">
<input type="hidden" id="latest_url" value="<?php echo e(route('latest')); ?>">
<input type="hidden" id="popular_url" value="<?php echo e(route('popular')); ?>">
<input type="hidden" id="trending_url" value="<?php echo e(route('trending')); ?>">

<!-- copied to clipboard -->
<div class="copied">
  <p><?php echo e(__('Link copied to clipboard.')); ?></p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/video.blade.php ENDPATH**/ ?>