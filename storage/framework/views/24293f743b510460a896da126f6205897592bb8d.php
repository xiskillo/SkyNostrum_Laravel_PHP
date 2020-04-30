<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
       
        <div class="col-md-8">
        
            <div class="card">
           
                <div class="card-header text-center" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                color:#2F6982;letter-spacing:3pt;word-spacing:5pt;font-size:30px;text-align:justify;
                font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"><?php echo e(__('Directorio de Clientes SkyNostrum')); ?></div>
                
                <a href="<?php echo e(route ('clientes.create')); ?>" class="btn btn-primary float-right">Añadir Cliente</a>
                
                <div class="card-body">
                    
                <div class="col-12 mb-2">

               


                </div>

                    <?php $__empty_1 = true; $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        


                        <div class="card">
                                <div class="card-header">
                                <a href="<?php echo e(route('clientes.show', ['id'=> $cliente->id])); ?>" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;text-decoration:underline;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                                Identificador de Cliente: <?php echo e($cliente->id); ?></a>
                                
                                </div>
                                <div class="card-body">
                                    
                             <b>   Nombre:</b> <?php echo e($cliente->nombre); ?>


                                <br>

                              <b>  Apellidos:</b> <?php echo e($cliente->apellidos); ?>


                                <br>

                                <b>   Dirección:</b> <?php echo e($cliente->direccion); ?>


                                <br>
                                <b>
                                Ciudad:</b> <?php echo e($cliente->ciudad); ?>


                                <br>

                                <b>  CP:</b> <?php echo e($cliente->cp); ?>


                                </div>
                                <div class="card-footer">
                                    <div class="float-right">
                                             
                                            <a href="<?php echo e(route('clientes.show', ['id'=> $cliente->id])); ?>" class="btn btn-info">Detalles</a>
                                            <a href="<?php echo e(route('clientes.edit', ['id'=> $cliente->id])); ?>" class="btn btn-secondary">Editar</a>

                                            <form method="POST" class="float-right" action="<?php echo e(route('clientes.destroy', ['id'=> $cliente->id])); ?>">
                                                                                                        


                                                 <?php echo e(method_field('DELETE')); ?>

                                                 <?php echo e(csrf_field()); ?>

                                            
                                                                                                     
                                                <input type="submit" class="btn btn-danger" value="Borrar"/>
                                            
                                            
                                            
                                            </form>
                                            
                                            
                                           
                                    </div>
                                    
                                </div>

                        </div>

                        

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <div class="alert alert-danger">
                            <?php echo e(__("SIN PRODUCTOS")); ?>

                        </div>


                    <?php endif; ?>

                    <a  href="<?php echo e(route('clientes.pdf')); ?>" class="btn btn-primary float-right"> Listado de clientes en PDF </a>

                    <?php if($clientes-> count()): ?>

                        <?php echo e($clientes->links()); ?>


                    <?php endif; ?>





                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>