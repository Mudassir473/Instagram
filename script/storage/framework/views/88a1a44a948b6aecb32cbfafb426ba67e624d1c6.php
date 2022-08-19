<?php 
$option = App\Option::where('key','site_value')->first();
$site_value = json_decode($option->value);
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($site_value->site_name); ?></title>
    <meta name="description" content="<?php echo e($site_value->site_description); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset($site_value->favicon)); ?>">
  
    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/font.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/nprogress.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/default.css')); ?>">
    <?php if(Session::has('mode')): ?>
    <?php if(Session::get('mode')['id'] == 'night'): ?>
    <link id="mode" rel="stylesheet" href="<?php echo e(asset('frontend/css/dark.css')); ?>">
    <?php else: ?>
    <link id="mode" rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <?php endif; ?>
    <?php else: ?>
    <link id="mode" rel="stylesheet" href="<?php echo e(asset('frontend/css/style.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('frontend/css/responsive.css')); ?>">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- loading area start -->
    <div class="loading d-none">
      <div class="loader-effect"></div>
    </div>
    <!-- loading area end -->

    
    <!-- header area start -->
    <?php echo $__env->make('layouts.frontend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- header area end -->

    <!-- main area start -->
    <div id="pjax-container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- main area end -->

    <!-- footer area start -->
    <?php echo $__env->make('layouts.frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="<?php echo e(asset('frontend/js/vendor/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/infinite-scroll.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/jquery.pjax.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/nprogress.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/custom-pjax.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/loadmore/loadmore.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/loadmore/videoloadmore.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/settings/settings.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/settings/customsettings.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/modal/modal.js')); ?>"></script>
    <script src="<?php echo e(asset('frontend/js/loadmore/userloadmore.js')); ?>"></script>
    <?php if(Auth::check()): ?>
    <script src="<?php echo e(asset('frontend/js/notification/notification.js')); ?>"></script>
    <?php endif; ?>
    <?php echo $__env->yieldPushContent('js'); ?>
   
</body>

</html><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/frontend/app.blade.php ENDPATH**/ ?>