<?php if(Session::has('alert.config')): ?>
    <?php if(config('sweetalert.animation.enable')): ?>
        <link rel="stylesheet" href="<?php echo e(config('sweetalert.animatecss')); ?>">
    <?php endif; ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        Swal.fire(<?php echo Session::pull('alert.config'); ?>);
    </script>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/vendor/sweetalert/alert.blade.php ENDPATH**/ ?>