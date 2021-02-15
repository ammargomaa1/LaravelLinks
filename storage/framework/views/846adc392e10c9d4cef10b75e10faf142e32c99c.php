<?php $__env->startSection('content'); ?>
    <div class="container py-4">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <?php $__currentLoopData = $user->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="link">
                        <a 
                            href="<?php echo e($link->link); ?>"
                            class="user-link d-block p-4 mb-4 rounded h3 text-center"
                            data-link-id = "<?php echo e($link->id); ?>"
                            target="_blank"
                            rel="nofollow"
                            style="border: 2px solid <?php echo e($user->text_color); ?>; color: <?php echo e($user->text_color); ?> "
                            
                            >
                            <?php echo e($link->name); ?>

                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ammar/links/resources/views/users/show.blade.php ENDPATH**/ ?>