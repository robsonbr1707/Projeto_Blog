

<?php $__env->startSection('content'); ?>

    <div class="section-post">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1><?php echo e($record->category); ?></h1>

            <a class="link-post" href="<?php echo e(route('show-post', ['post' => $record])); ?>"> 
                <?php $__currentLoopData = $record->records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="div-post-search">
                        <h5><?php echo e($record->title); ?></h5>
                        <figure>
                            <img src="<?php echo e(asset("storage/records/{$record->image}")); ?>" alt="<?php echo e($record->post_category); ?>">
                        </figure>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php if(!isset($record)): ?>
            <p style="color:#FFF;">Não encontramos está pesquisa!</p>
        <?php endif; ?>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/search.blade.php ENDPATH**/ ?>