    
<div id="modal-edit">

    <div class="modal-edit">
             
        <form action="<?php echo e(route('create-records')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
                <input type="hidden" value="<?php echo e($record->id); ?>">
            <div class="image-edit">
                <img src="<?php echo e(asset("storage/records/{$record->image}")); ?>" alt="<?php echo e($record->title); ?>">
            </div>
                <div class="input-edit">
                    <label>Titulo</label>
                    <input type="text" name="title" value="<?php echo e($record->title); ?>">
                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            
            <div class="input-edit">
                <label>Categorias</label>
                <select name="post_category">
                    <option disabled selected>Categorias Criadas</option>
                        <option value="<?php echo e($record->post_category); ?>"><?php echo e($record->post_category); ?></option>
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
            
            <div class="input-edit">
                <label>Descrição do Registro</label>
            </div>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <textarea name="description"><?php echo e($record->description); ?></textarea>
                            
            <div class="input-edit">
                <label>Imagem do Registro</label>
                <input type="file" name="image">
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
                            
            <div>
                <button type="submit" class="btn btn-success">Atualizar Registro</button>
            </div>
        </form>
        <div>
            <button id="btn-cancel-edit" class="btn btn-danger" >Cancelar Atualização</button>
        </div>

    </div>  
</div>
<?php /**PATH C:\Laravel-Sites\Blog\resources\views/modal-edit.blade.php ENDPATH**/ ?>