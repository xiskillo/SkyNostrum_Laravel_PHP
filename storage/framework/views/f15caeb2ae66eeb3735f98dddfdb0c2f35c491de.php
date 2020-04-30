<?php $__env->startSection('content'); ?>

<div class="row p-5">
    <div class="col-12 mb-2">

    <a href="<?php echo e(route ('noticias.create')); ?>" class="btn btn-primary float-right">Añadir Noticia</a>


    </div>
    <?php $__empty_1 = true; $__currentLoopData = $noticias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $noticia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

       <?php echo $__env->make('noticias.partials.noticia', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            

       
    
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        
        <div class="w-100 p-3">

            <div class="alert alert-dark text-center"> NO HAY NOTICIAS </div>
        </div>
    <?php endif; ?>



    <?php if($noticias->count()): ?>
        <?php echo e($noticias->links()); ?>

    <?php endif; ?>




</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>