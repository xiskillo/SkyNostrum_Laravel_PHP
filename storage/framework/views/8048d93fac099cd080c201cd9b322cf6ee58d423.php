<?php $__env->startSection('content'); ?>

<div class="row p-5">

<div class="col-8 offset-2">


                    <?php if($errors->any()): ?>

                    <div class="alert alert-danger">

                        <ul>

                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li>
                                    <?php echo e($error); ?>

                                </li>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </ul>

                    </div>
                    <?php endif; ?>
        <h3 class="text-center">Editar Noticia</h3>
        <form method="POST" action="<?php echo e(route('noticias.update', ['id'=> $noticia->id])); ?>" >
                <?php echo csrf_field(); ?>

                

                <?php echo method_field("PUT"); ?>

                

                <div class="form-group">
                    <label for="titulo"> Titulo </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" value="<?php echo e(old('titulo') ?: $noticia->titulo); ?>"/>


                </div>


                <div class="form-group">
                    <label for="contenido"> Contenido </label>
                    <textarea class="form-control" name="contenido" id="contenido" rows="3"><?php echo e(old('contenido') ?: $noticia-> contenido); ?> </textarea>


                </div>



                <a class="btn btn-info "  href="<?php echo e(route('noticias')); ?>">Volver</a>
                

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>