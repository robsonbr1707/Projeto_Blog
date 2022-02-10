<?php $__env->startSection('content'); ?>

    <section>
        <?php if($posts->isEmpty()): ?>
            <h2 class="message-success">Nenhum Post No Momento..</h2>
            <p class="message-success">Entre como Admin, Para criar os Posts!</p>
            <p class="message-success">Login:Admin -- Senha:123123123</p>
        <?php endif; ?>
        <div class="section-post">
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           
                <a class="div-post" href="<?php echo e(route('show-post', ['post'=>$post])); ?>"> 
                    <h5><?php echo e($post->category); ?></h5>
                    <figure>
                        <img src="<?php echo e(asset("storage/posts/{$post->image}")); ?>" alt="<?php echo e($post->category); ?>">
                    </figure>
                    <p><?php echo e($post->description); ?></p>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/home.blade.php ENDPATH**/ ?>