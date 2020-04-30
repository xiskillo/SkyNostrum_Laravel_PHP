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
        <h3 class="text-center">Editar Producto</h3>
        <form method="POST" action="<?php echo e(route('productos.update', ['id'=> $producto->id])); ?>" >
                <?php echo csrf_field(); ?>

                

                <?php echo method_field("PUT"); ?>

                

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control"  id="nombre" name="nombre" value="<?php echo e(old('nombre') ?: $producto->nombre); ?>">                 
                </div>
                <div class="form-group">
                    <label for="codigo">Codigo</label>
                    <input type="number" class="form-control"  id="codigo" name="codigo" value="<?php echo e(old('codigo') ?: $producto->codigo); ?>">                 
                </div>
                <div class="form-group">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control"  id="stock" name="stock" value="<?php echo e(old('stock') ?: $producto->stock); ?>">                 
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control"  id="precio" name="precio" value="<?php echo e(old('precio') ?: $producto->precio); ?>">                 
                </div>



                <a class="btn btn-info "  href="<?php echo e(route('productos')); ?>">Volver</a>

                


                <input type="submit" class="btn btn-secondary float-right" value="Aceptar"/>
        </form>
</div>

<div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>