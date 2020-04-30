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
        <h3 class="text-center">Editar Cliente</h3>
        <form method="POST" action="<?php echo e(route('clientes.update', ['id'=> $cliente->id])); ?>" >
                <?php echo csrf_field(); ?>

                

                <?php echo method_field("PUT"); ?>

                

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control"  id="nombre" name="nombre" value="<?php echo e(old('nombre') ?: $cliente->nombre); ?>">                 
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control"  id="apellidos" name="apellidos" value="<?php echo e(old('apellidos') ?: $cliente->apellidos); ?>">                 
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control"  id="direccion" name="direccion" value="<?php echo e(old('direccion') ?: $cliente->direccion); ?>">                 
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control"  id="ciudad" name="ciudad" value="<?php echo e(old('ciudad') ?: $cliente->ciudad); ?>">                 
                </div>
                <div class="form-group">
                    <label for="cp">CP</label>
                    <input type="number" class="form-control"  id="cp" name="cp" value="<?php echo e(old('cp') ?: $cliente->cp); ?>">                 
                </div>



                <a class="btn btn-info "  href="<?php echo e(route('clientes')); ?>">Volver</a>

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>