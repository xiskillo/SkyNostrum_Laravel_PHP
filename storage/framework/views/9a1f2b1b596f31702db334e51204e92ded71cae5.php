<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SkyNostrum</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #C6B6F7;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        
    </head>
    <body>

    
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Bienvenido</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Iniciar sesión</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Registro</a>
                        <?php endif; ?>
                    <?php endif; ?>
                    
                </div>
            <?php endif; ?>
            
            <div class="content">
                <div class="title m-b-md">
                    <div style="text-shadow:1px -3px 5px rgba(67,255,46,0.7);font-weight:normal;
                    color:#565691;letter-spacing:6pt;word-spacing:-1pt;font-size:100px;text-align:center;
                    font-family:palatino linotype, palatino, serif;line-height:3;margin:0px;padding:0px;">
                        SkyNostrum</div>

                        <div style="text-shadow:1px -3px 5px rgba(67,255,46,0.7);font-weight:normal;font-style:italic;color:#565691;
                        letter-spacing:6pt;word-spacing:-1pt;font-size:41px;text-align:center;
                        font-family:palatino linotype, palatino, serif;line-height:3;">
                        Tu web interestelar</div>
                </div>
                
                <div class="links">
                    <a href="<?php echo e(url('/noticias')); ?>">Noticias</a>
                    <a href="<?php echo e(url('/productos')); ?>">Productos</a>                                                               
                    <a href="<?php echo e(url('/clientes')); ?>">Clientes</a>
                    <a href="<?php echo e(url('/ventas')); ?>">Ventas</a>
                    <a href="<?php echo e(url('/contacto')); ?>">Contacto</a>

                  
                    
                </div>
                <p>Copyright 2019 - Francisco José Acaso Valverde</p>
            </div>
            
        </div>
        
    </body>
    
</html>
