<div class="col-12 pb-3">
    <div class="card">
                     <div class="card-header" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                     color:#264B82;letter-spacing:1pt;word-spacing:5pt;font-size:25px;text-align:center;font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"><?php echo e($noticia->titulo); ?>  </div>
                    <div class="card-body" style="text-shadow:1px -3px 5px rgba(200,145,255,0.7);font-weight:normal;
                    color:#2F6982;letter-spacing:1pt;word-spacing:5pt;font-size:16px;text-align:justify;font-family:lucida sans unicode, lucida grande, sans-serif;line-height:1;"> <?php echo e($noticia->contenido); ?>  

                    <br><br>

                    <?php if($noticia->attachment): ?>

                    <p style="text-align:center">

                    <img src="<?php echo e($noticia->rutaFoto()); ?>" style="width:200px;height:200;border-radius: 20px" />
                    </p>

                    <?php endif; ?>
        
                    </div>
                    
                    <div class="card-footer">
                        <div class="float-right">
                        <a href="<?php echo e(route('noticias.show', ['id' => $noticia->id])); ?>" class="btn btn-info"> Seguir leyendo..</a>
                        <a href="<?php echo e(route('noticias.edit', ['id'=> $noticia->id])); ?>" class="btn btn-secondary">Editar</a>
                            
                            
                            <form method="POST" class="float-right" action="<?php echo e(route('noticias.destroy', ['id'=> $noticia->id])); ?>">
                                                                                                        


                                                 <?php echo e(method_field('DELETE')); ?>

                                                 <?php echo e(csrf_field()); ?>

                                            
                                                                                                     
                                                <input type="submit" class="btn btn-danger" value="Borrar"/>
                                            
                                            
                                            
                            </form>

                        </div>
                  </div>
    </div>
</div>