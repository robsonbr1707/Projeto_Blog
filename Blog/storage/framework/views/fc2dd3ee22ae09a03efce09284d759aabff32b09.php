

<?php $__env->startSection('content'); ?>

<?php if($post->isEmpty()): ?>
    <h1 style="color: #FFF" class="text-center">Nenhum registro no momento</h1>
<?php else: ?>
    <section class="section-record">
        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="div-record">
             
            <div class="div-record-description">
                <h3><?php echo e($record->title); ?></h3>
                <div class="div-record-image">
                    <figure>
                        <img src="<?php echo e(asset("storage/records/{$record->image}")); ?>" alt="<?php echo e($record->title); ?>">
                    </figure>
                </div> 
                
                <p><?php echo e($record->description); ?></p>
                <span><?php echo e($record->created_at->format('d/m/Y')); ?></span>
            </div>
        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </section>

    <section id="section-form-comment">
        <div>
            <h2>Comente sobre o Post</h2>
            <p>Oque achou? Alguma dúvida? comente!</p>
        </div>

        <div>
            <form action="<?php echo e(route('comment-post', ['category' => $record->post_category])); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <div>
                    <textarea name="comment" id="" cols="80" rows="3"></textarea>
                    <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  <p class="message-error"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Enviar comentario</button>
                </div>
            </form>
        </div>
    </section>

        <?php echo e($post->links()); ?>


    <section id="section-comment">
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="div-comment">
            <div>
                <h4><?php echo e(ucwords($item->user->name)); ?></h4>
                <p><?php echo e($item->comment); ?></p>
                <span><?php echo e($item->created_at->format('d/m/Y')); ?></span>
            </div>
            <?php if(auth()->guard()->check()): ?>
                
            <?php if(Auth::user()->autorize == 'mod' || Auth::user()->autorize == 'admin' || Auth::user()->id == $item->user_id): ?>
                    
                <form action="<?php echo e(route('comment-delete', $item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <div class="comment-icon">
                        <button><i><img src="<?php echo e(url('icons/x.svg')); ?>" alt="X"></i></button>
                    </div>
                </form>
            <?php endif; ?>
            <?php endif; ?>

        </div>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

    <?php endif; ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/show.blade.php ENDPATH**/ ?>