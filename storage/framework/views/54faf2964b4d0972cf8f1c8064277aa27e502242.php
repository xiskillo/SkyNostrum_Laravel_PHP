<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"><?php echo e(__('Gestión de Ventas')); ?></div>
                
                <a href="<?php echo e(route ('ventas.create')); ?>" class="btn btn-primary float-right">Añadir Venta</a>
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    <?php $__empty_1 = true; $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        


                        <div class="card">
                                <div class="card-header">
                                <a href="<?php echo e(route('ventas.show', ['id'=> $venta->id])); ?>" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;text-decoration:underline;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                                Identificador de Venta: <?php echo e($venta->id); ?></a>
                                
                                </div>
                                <div class="card-body">
                                    
                                <b>Identificador del Cliente:</b> <?php echo e($venta->clientes_id); ?> <br>
                                <b>Nombre del Cliente:</b> <?php echo e($venta->clientes->nombre); ?> 

                                <br> <br>
                                <b>Identificador del Producto:</b> <?php echo e($venta->productos_id); ?><br>

                                <b>Nombre del Producto:</b> <?php echo e($venta->productos->nombre); ?> 

                                <br><br>

                                <b>Cantidad:</b> <?php echo e($venta->cantidad); ?> <br>

                                <br>

                                <b> Observaciones:</b>  <br> <p style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;
                                font-style:italic;color:#6D7885;letter-spacing:1pt;word-spacing:2pt;font-size:17px;
                                text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"><?php echo e($venta->observaciones); ?>   <p>    

                               

                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                            <a href="<?php echo e(route('ventas.show', ['id'=> $venta->id])); ?>" class="btn btn-info">Detalles</a>
                                            <a href="<?php echo e(route('ventas.edit', ['id'=> $venta->id])); ?>" class="btn btn-secondary">Editar</a>

                                            <form method="POST" class="float-right" action="<?php echo e(route('ventas.destroy', ['id'=> $venta->id])); ?>">
                                                                                                        


                                                 <?php echo e(method_field('DELETE')); ?>

                                                 <?php echo e(csrf_field()); ?>

                                            
                                                                                                     
                                                <input type="submit" class="btn btn-danger" value="Borrar"/>
                                            
                                            
                                            
                                            </form>
                                            
                                           
                                    </div>
                                </div>
                        </div>

                        

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <div class="alert alert-danger">
                            <?php echo e(__("SIN REGISTROS")); ?>

                        </div>


                    <?php endif; ?>

                    <a  href="<?php echo e(route('ventas.pdf')); ?>" class="btn btn-primary float-right"> Listado de Ventas en PDF </a>

                    <?php if($ventas-> count()): ?>

                        <?php echo e($ventas->links()); ?>


                    <?php endif; ?>





                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>