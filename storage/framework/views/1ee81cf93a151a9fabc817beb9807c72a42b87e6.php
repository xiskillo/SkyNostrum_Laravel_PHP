<?php $__env->startSection('content'); ?>
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

                
      <br>                  
      <a class="btn btn-info" style="width:75px" href="<?php echo e(route('ventas')); ?>">Volver</a>
  
</div>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>