

<?php $__env->startSection('title',$user->first_name.$user->last_name); ?>

<?php $__env->startSection('content'); ?>
<!-- success-alert start -->
<div class="alert-message-area">
    <div class="alert-content">
        <h4 class="ale"><?php echo e(__('Your Settings Successfully Updated')); ?></h4>
    </div>
</div>
<!-- success-alert end -->

<!-- error-alert start -->
<div class="error-message-area">
    <div class="error-content">
        <h4 class="error-msg"><?php echo e(__('Your Settings Successfully Updated')); ?></h4>
    </div>
</div>
<!-- error-alert end -->

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

<!-- main area start -->
<section>
    <div class="main-area pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-profile-main-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="user-main-info d-flex">
                                            <div class="profile-user-img">
                                                <img src="<?php echo e(asset($user->image)); ?>" alt="">
                                            </div>
                                            <div class="profile-another-info d-block">
                                                <div class="profile-username">
                                                    <h4><?php echo e($user->username); ?></h4>
                                                </div>
                                                <div class="profile-name">
                                                    <h5><?php echo e($user->first_name); ?>&nbsp;<?php echo e($user->last_name); ?></h5>
                                                </div>
                                                <div class="follow-btn">
                                                    <?php if(Auth::check()): ?>
                                                    <?php if($user->id == Auth::User()->id): ?>
                                                    <a class="pjax" href="<?php echo e(route('profile.edit')); ?>"><?php echo e(__('Edit Profile')); ?></a>
                                                    <?php else: ?>
                                                    <?php if(Auth::User()->isFollowing($user->id)): ?>
                                                    <a class="pjax" href="<?php echo e(route('unfollow',$user->id)); ?>"><?php echo e(__('Unfollow')); ?></a>
                                                    <?php else: ?>
                                                    <a class="pjax" href="<?php echo e(route('follow',$user->id)); ?>"><?php echo e(__('Follow')); ?></a>
                                                    <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php else: ?>
                                                    <a class="pjax" href="<?php echo e(route('follow',$user->id)); ?>"><?php echo e(__('Follow')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-follow-info">
                                            <span><strong><?php echo e(App\Helpers\UserSystemInfo::conveter($user->followings()->count())); ?></strong><?php echo e(__('Following')); ?></span>
                                            <span><strong><?php echo e(App\Helpers\UserSystemInfo::conveter($user->followers()->count())); ?></strong><?php echo e(__('Followers')); ?></span>
                                            <span><strong><?php echo e(App\Helpers\UserSystemInfo::conveter($user->videos()->sum('view'))); ?></strong><?php echo e(__('Views')); ?></span>
                                        </div>
                                        <?php 
                                        $user_value = json_decode($user->value);
                                        ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="profile-report-area f-right">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                            <?php if(Auth::check()): ?>
                                            <a href="javascript:void(0)" class="dropdown-item" onclick="user_report('<?php echo e($user->slug); ?>')"><i class="far fa-flag"></i> <?php echo e(__('Report')); ?></a>
                                            <?php else: ?>
                                            <a href="<?php echo e(route('login')); ?>" class="pjax dropdown-item"><i class="far fa-flag"></i> <?php echo e(__('Report')); ?></a>
                                            <?php endif; ?>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-bio">
                                    <p><?php echo e($user_value->bio); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row usergrid" id="results">
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
<!-- main area end -->
<input type="hidden" id="popup_url" value="<?php echo e(route('popup')); ?>">
<input type="hidden" id="ellipsis_url" value="<?php echo e(route('ellipsis')); ?>">
<input type="hidden" id="asset_url" value="<?php echo e(route('welcome')); ?>">
<input type="hidden" id="user_url" value="<?php echo e(route('profile.show',$user->slug)); ?>">
<input type="hidden" id="user_slug" value="<?php echo e($user->slug); ?>">
<input type="hidden" id="scroll_top" value="1">
<input type="hidden" id="user_report_url" value="<?php echo e(route('user_report')); ?>">

<!-- copied to clipboard -->
<div class="copied">
  <p><?php echo e(__('Link copied to clipboard.')); ?></p>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/profile.blade.php ENDPATH**/ ?>