

<?php $__env->startSection('content'); ?>

    <section id="form-records">
        <div class="form">

            <form action="<?php echo e(route('create-records')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div>
                    <label>Titulo</label>
                    <input type="text" name="title">
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label>Categorias</label>
                    <select name="post_category">
                        <option disabled selected>Categorias Criadas</option>
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->category); ?>"><?php echo e($item->category); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['post_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label>Descrição do Registro</label>
                </div>
                <?php $__errorArgs = ['description_records'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <textarea name="description_records" id="" cols="60" rows="3"></textarea>
                
                <div>
                    <label>Imagem do Registro</label>
                    <input type="file" name="image_records">
                    <?php $__errorArgs = ['image_records'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div>
                    <input type="submit" name="submit_record" value="Criar Registro" id="submit-record" class="btn btn-success">
                </div>
            </form>
        </div>
    </section>

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
                    <input type="file" name="image_posts">
                    <?php $__errorArgs = ['image_posts'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <div>
                    <input type="submit" name="submit_post" value="Criar Post" id="submit-post" class="btn btn-success">
                </div>
            </form>
        </div>
    </section>
    
        <div>
            <button class="btn btn-primary" id="btn-post" >Criar Post</button>
            <button class="btn btn-primary" id="btn-record">Criar Registro</button>
        </div>

<?php $__env->startSection('scripts'); ?>
<script>
    $("#btn-post").click(function(){
        $("#btn-post").css('display', 'none');
        $("#form-records").css('display', 'none');
        $("#btn-record").show();
        $("#form-posts").fadeIn('slow');
    });

    $("#btn-record").click(function(){
        $("#btn-record").css('display', 'none');
        $("#form-posts").css('display', 'none');
        $("#btn-post").show();
        $("#form-records").fadeIn('slow');
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/admin/create.blade.php ENDPATH**/ ?>