<?php $__currentLoopData = $video->comments()->where('parent_id',null)->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="single-comment">
    <a class="pjax" href="<?php echo e(route('profile.show',$comment->user->slug)); ?>" onclick="profileshow()">
        <img src="<?php echo e(asset($comment->user->image)); ?>" alt="">
    </a>
    <span> 
        <a class="pjax" href="<?php echo e(route('profile.show',$comment->user->slug)); ?>" onclick="profileshow()"><?php echo e($comment->user->username); ?></a><?php echo e($comment->message); ?> 
        <div class="comment-info">
            <span><?php echo e($comment->created_at->isoFormat('Do')); ?> <span id="comment_like_count<?php echo e($comment->id); ?>" class="likes"> <?php echo e($comment->favourite_to_user->count()); ?>likes</span><a href="javascript:void(0)" onclick="reply('<?php echo e($comment->id); ?>','<?php echo e($comment->user->username); ?>','<?php echo e($comment->user->id); ?>')"><?php echo e(__('Reply')); ?></a></span>
        </div>
    </span>
    <input type="hidden" id="comment_like_url" value="<?php echo e(route('comment_like')); ?>">
    <div class="favourite-icon">
        <?php if(Auth::check()): ?>
        <a href="javascript:void(0)" onclick="comment_like('<?php echo e($comment->id); ?>')"><i id="comment_like<?php echo e($comment->id); ?>" class="<?php echo e(!Auth::User()->favourite_comments->where('pivot.comment_id',$comment->id)->count() == 0 ? 'fas fa-heart' : 'far fa-heart'); ?>"></i></a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="pjax" onclick="profileshow()"><i id="like" class="far fa-heart"></i></a>
        <?php endif; ?>
    </div>
</div>
<?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="single-comment ml-50">
    <a class="pjax" href="<?php echo e(route('profile.show',$value->user->slug)); ?>" onclick="profileshow()">
        <img src="<?php echo e(asset($value->user->image)); ?>" alt="">
    </a>
    <span> 
        <a class="pjax" href="<?php echo e(route('profile.show',$value->user->slug)); ?>" onclick="profileshow()"><?php echo e($value->user->username); ?></a><br><a class="username" href="<?php echo e($value->mention_id != null ? route('profile.show',$value->mention_user->slug) : ''); ?>" onclick="profileshow()"><?php echo e($value->mention_id != null ? $value->mention_user->username : ''); ?></a><?php echo e($value->message); ?> 
        <div class="comment-info">
            <span><?php echo e($value->created_at->isoFormat('Do')); ?> <span id="comment_like_count<?php echo e($value->id); ?>" class="likes"> <?php echo e($value->favourite_to_user->count()); ?>likes</span><a href="javascript:void(0)" onclick="reply('<?php echo e($value->main_comment->id); ?>','<?php echo e($value->user->username); ?>','<?php echo e($value->user->id); ?>')">Reply</a></span>
        </div>
    </span>
    <div class="favourite-icon">
         <?php if(Auth::check()): ?>
        <a href="javascript:void(0)" onclick="comment_like('<?php echo e($value->id); ?>')"><i id="comment_like<?php echo e($value->id); ?>" class="<?php echo e(!Auth::User()->favourite_comments->where('pivot.comment_id',$value->id)->count() == 0 ? 'fas fa-heart' : 'far fa-heart'); ?>"></i></a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="pjax" onclick="profileshow()"><i id="like" class="far fa-heart"></i></a>
        <?php endif; ?>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\newtong\script\resources\views/comment.blade.php ENDPATH**/ ?>