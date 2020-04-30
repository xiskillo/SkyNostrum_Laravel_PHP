<?php $__env->startSection('content'); ?>
<div class="card">

         <div class="card-header">
             <a href="<?php echo e(route('clientes.show', ['id'=> $cliente->id])); ?>"style="text-shadow:1px 1px 1px rgba(79,185,255,1);font-weight:normal;font-style:italic;color:#7E90BF;
                                    letter-spacing:1pt;word-spacing:2pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;
                                    line-height:1;">
                 <?php echo e($cliente->nombre); ?></a>
                                
        </div>
         <div class="card-body">
                                    
         <b>Nombre:</b> <?php echo e($cliente->nombre); ?>


        <br>

        <b> Apellidos:</b> <?php echo e($cliente->apellidos); ?>


        <br>

        <b> Dirección:</b> <?php echo e($cliente->direccion); ?>


        <br>

        <b> Ciudad:</b> <?php echo e($cliente->ciudad); ?>


        <br>

        <b> CP:</b> <?php echo e($cliente->cp); ?>

        </div>

                  
        <br>                  
        <a class="btn btn-info" style="width:75px" href="<?php echo e(route('clientes')); ?>">Volver</a>
  
</div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>