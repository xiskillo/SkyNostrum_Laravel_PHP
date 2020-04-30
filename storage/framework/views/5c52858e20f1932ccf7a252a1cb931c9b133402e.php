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



        <h3 class="text-center">Añadir Venta</h3>
        <form method="POST" action="<?php echo e(route('ventas.store')); ?>">
                <?php echo csrf_field(); ?>

                <div class="form-group">
                    <label for="clientes_id">Cliente</label>
                    <select id="clientes_id" class="form-control" name="clientes_id">
                    <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($cliente->id); ?>"><?php echo e($cliente->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php echo e(__("NO HAY CLIENTE REGISTRADOS EN ESTE MOMENTO")); ?>

                    <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="productos_id">Producto</label>
                    <select id="productos_id" class="form-control" name="productos_id">
                    <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <option value="<?php echo e($producto->id); ?>"><?php echo e($producto->nombre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php echo e(__("NO HAY PRODUCTOS REGISTRADOS EN ESTE MOMENTO")); ?>

                    <?php endif; ?>
                    </select>
                </div>


                
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control"  id="cantidad" name="cantidad" value="<?php echo e(old('cantidad') ?: $venta->cantidad); ?>">                 
                </div>
                <div class="form-group">
                    <label for="observaciones"> Observaciones </label>
                    <textarea class="form-control" name="observaciones" id="observaciones" rows="3"><?php echo e(old('observaciones') ?: $venta-> observaciones); ?> </textarea>


                </div>

                
                
                

                <a class="btn btn-info "  href="<?php echo e(route('ventas')); ?>">Volver</a>
                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>