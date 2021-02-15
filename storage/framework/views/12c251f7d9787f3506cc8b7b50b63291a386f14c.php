<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">
                        Edit the link
                    </h2>
                    <form action="/dashboard/links/<?php echo e($link->id); ?>" method="POST">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" class="formcontrol <?php echo e($errors->first('name') ? 'is-invalid':''); ?>" placeholder="Your link name" value="<?php echo e($link->name); ?>">
                                    <?php if($errors->first('name')): ?>
                                    <div class="invalid-feedback "><?php echo e($errors->first('name')); ?></div>
                                        
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="link">Link URL</label>
                                    <input type="text" id="link" name="link" class="formcontrol <?php echo e($errors->first('link') ? 'is-invalid':''); ?>" placeholder="Your URL" value="<?php echo e($link->link); ?>">
                                    <?php if($errors->first('link')): ?>
                                    <div class="invalid-feedback "><?php echo e($errors->first('link')); ?></div>
                                        
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn btn-primary">Save link</button>
                                <button type="button" class="btn btn-secondary" onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete link</button>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="/dashboard/links/<?php echo e($link->id); ?>" id="delete-form">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ammar/links/resources/views/links/edit.blade.php ENDPATH**/ ?>