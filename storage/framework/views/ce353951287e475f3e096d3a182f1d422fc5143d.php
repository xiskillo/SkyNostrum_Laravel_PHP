<?php $__env->startSection('content'); ?>



<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"><?php echo e(__('Productos SkyNostrum')); ?></div>
                
                <a href="<?php echo e(route ('productos.create')); ?>" class="btn btn-primary float-right">Añadir Producto</a>
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        


                        <div class="card">
                                <div class="card-header">
                                <a href="<?php echo e(route('productos.show', ['id'=> $producto->id])); ?>" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                                <?php echo e($producto->nombre); ?></a>
                                
                                </div>
                                <div class="card-body" >

                                <?php if($producto->attachment): ?>

                                    <p style="text-align:center">

                                    <img src="<?php echo e($producto->rutaFoto()); ?>" style="width:200px;height:200;border-radius: 20px" />
                                    </p>

                                    <?php endif; ?>

                                    <br>
                                    
                                    <b>Código:</b> <?php echo e($producto->codigo); ?>


                                <br>

                                <b> Stock:</b> <?php echo e($producto->stock); ?> Unidades.

                                <br>
                                <b> Precio:</b> <?php echo e($producto->precio); ?> Euros.

                                <br>

                               

                                </div>
                                       
                                       
                                    
                                        <div class="card-footer">
                                                <div class="float-right">

                                                
                                                        <a href="<?php echo e(route('productos.show', ['id'=> $producto->id])); ?>" class="btn btn-info">Detalles</a>
                                                        <a href="<?php echo e(route('productos.edit', ['id'=> $producto->id])); ?>" class="btn btn-secondary">Editar</a>
                                                            <form  method="POST" class="float-right" action="<?php echo e(route('productos.destroy', ['id'=> $producto->id])); ?>">
                                                                                                        


                                                            <?php echo e(method_field('DELETE')); ?>

                                                            <?php echo e(csrf_field()); ?>


                                                           
                                                            <input  type="submit" class="btn btn-danger" value="Borrar"/>
                                                           



                                                            </form>
                                                            
                                                </div>
                                        </div>
                                  </div>

                        

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <div class="alert alert-danger">
                            <?php echo e(__("SIN PRODUCTOS")); ?>

                        </div>


                    <?php endif; ?>

                    <?php if($productos-> count()): ?>

                        <?php echo e($productos->links()); ?>


                    <?php endif; ?>





                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>