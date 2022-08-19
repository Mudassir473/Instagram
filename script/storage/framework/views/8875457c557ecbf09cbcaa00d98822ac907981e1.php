<?php 
$option = App\Option::where('key','site_value')->first();
$site_value = json_decode($option->value);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $__env->yieldContent('title'); ?> | <?php echo e($site_value->site_name); ?></title>

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset($site_value->favicon)); ?>">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/font.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/fontawesome.min.css')); ?>">
  <?php echo $__env->yieldPushContent('css'); ?>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/style.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/components.css')); ?>">
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <?php echo $__env->make('layouts.backend.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <?php echo $__env->make('layouts.backend.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Main Content -->
      <?php echo $__env->yieldContent('content'); ?>

      <?php echo $__env->make('layouts.backend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>


  <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- General JS Scripts -->
  <script src="<?php echo e(asset('backend/assets/js/jquery-3.3.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('backend/assets/js/jquery.nicescroll.min.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('js'); ?>
  <script src="<?php echo e(asset('backend/assets/js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/layouts/backend/app.blade.php ENDPATH**/ ?>