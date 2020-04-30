<?php $__env->startSection('content'); ?>
<div class="card">

         <div class="card-header">
             <a href="/productos/<?php echo e($producto->id); ?>" style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                 <?php echo e($producto->nombre); ?></a>
                                
        </div>
         <div class="card-body">
                                    
        <b>Código:</b> <?php echo e($producto->codigo); ?>


          <br>

          <b>Stock:</b> <?php echo e($producto->stock); ?> Unidades.
        <br>
        <b>Precio:</b> <?php echo e($producto->precio); ?> Euros.

        <br>
        <?php if($producto->attachment): ?>

        <p style="text-align:center">

        <img src="<?php echo e($producto->rutaFoto()); ?>" style="width:300px;height:300;border-radius: 20px" />
        </p>

        <?php endif; ?>

         </div>

         <br>                  
        <a class="btn btn-info" style="width:75px" href="<?php echo e(route('productos')); ?>">Volver</a>
                               
  </div>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>