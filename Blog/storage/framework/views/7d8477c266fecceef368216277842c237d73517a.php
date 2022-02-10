

<?php $__env->startSection('content'); ?>

    <section>
        <?php if($records->isEmpty()): ?>
            <h2 class="message-success">Nenhum Registro No Momento..</h2>
            <p class="message-success">Entre como Admin, Para criar os Registros!</p>
            <p class="message-success">Login:Admin -- Senha:123123123</p>
        <?php else: ?>
        <div id="table-content">
            <table>
                <thead>
                    <tr>
                        <th>Imagem</th>
                        <th>Categoria</th>
                        <th>Titulo</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img src="<?php echo e(asset("storage/records/{$record->image}")); ?>" alt="<?php echo e($record->title); ?>">
                        </td>
                        <td><?php echo e($record->post_category); ?></td>
                        <td><?php echo e($record->title); ?></td>
                        <td class="td-buttons">
                            <a class="btn btn-primary btn-edit" href="<?php echo e(route('edit-records-show', $record)); ?>">Editar</a>
                        <?php if(Auth::user()->autorize == 'admin'): ?>
                                
                            <form action="<?php echo e(route('record-delete', $record->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
            
                                <div class="delete-icon">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </div>
                            </form>
                        <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </section>

    <?php echo e($records->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Laravel-Sites\Blog\resources\views/autorize/edit.blade.php ENDPATH**/ ?>