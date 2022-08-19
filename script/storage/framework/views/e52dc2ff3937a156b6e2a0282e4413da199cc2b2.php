<div class="search-content-area">
    <?php if($data->count() > 0): ?>
    <div class="search-value">
        <nav>
            <ul>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a class="pjax" href="<?php echo e(route('profile.show',$user->slug)); ?>" onclick="user_search('<?php echo e($user->username); ?>')">
                        <div class="single-search-content d-flex">
                            <div class="single-search-user-image">
                                <img src="<?php echo e(asset($user->image)); ?>">
                            </div> 
                            <div class="search-user-another-info d-block">
                                <h5><?php echo e($user->username); ?></h5>
                                <span><?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?></span>
                            </div>  
                        </div>
                    </a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </nav>
    </div>
    <?php else: ?>
    <div class="search-not-found text-center">
        <span><?php echo e(__('No Result Found')); ?></span>
    </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/search.blade.php ENDPATH**/ ?>