

<?php $__env->startSection('content'); ?>

    <?php if(session()->has('msg')): ?>
        <div>
            <p class="message-success"><?php echo e(session('msg')); ?></p>
        </div>
    <?php endif; ?>

<section id="form-posts">
        
    <div class="form">
        <form action="<?php echo e(route('create-posts')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <div>
                <label>Categoria</label>
                <input type="text" value="<?php echo e(old('category')); ?>" name="category" placeholder="Ex: anime, jogos, tecnologia, filmes...">
                <?php $__errorArgs = ['category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>

            <div>
                <label>Titulo Na URL</label>
                <input type="text" value="<?php echo e(old('name_slug')); ?>" name="name_slug" placeholder="seu-titulo-ficara-desse-jeito-na-url">
                <?php $__errorArgs = ['name_slug'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <label>Descrição do Post</label>
                <input type="text" value="<?php echo e(old('description')); ?>" name="description" placeholder="Uma pequena descrição do Post">
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            
            <div>
                <label>Imagem do Post</label>
                <input type="file" name="image">
                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div>
                <button type="submit" class="btn btn-success">Criar Post</button>
            </div>
        </form>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/Admin/create-post.blade.php ENDPATH**/ ?>