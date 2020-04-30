<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>SkyNostrum</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
            html, body {
                background-color: #E3DEF9;
                }
    </style>
</head>

<body>
    <div id="app"  >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #DCDAE5">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?> "style="color:#0E4C8F">
                   <!-- <?php echo e(config('app.name', 'Laravel')); ?>  style="background-color:#D2DFFA background-color: #F2DFFA;"-->
                 <b> <i> Bienvenido </i></b>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="<?php echo e(url('/noticias')); ?>" style="color:#3C75B3">
                  <b>  Noticias</b>
                </a>

                <a class="navbar-brand" href="<?php echo e(url('/productos')); ?>" style="color:#3C75B3">
                   <b> Productos </b>
                </a>

                <a class="navbar-brand" href="<?php echo e(url('/clientes')); ?>"style="color:#3C75B3">
                <b>   Clientes</b>
                </a>

                <a class="navbar-brand" href="<?php echo e(url('/ventas')); ?>"style="color:#3C75B3">
                <b>    Ventas</b>
                </a>

                <a class="navbar-brand" href="<?php echo e(url('/contacto')); ?>"style="color:#3C75B3">
                <b>   Contacto</b>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Iniciar Sesión')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registro')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Cerrar Sesión')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">


            <?php if(session('creacion')): ?>
                <div class="w-100 p-3">
                    <div class="alert alert-<?php echo e(session('creacion')[0]); ?>">
                        <?php echo e(session('creacion')[1]); ?>

                    </div>
                </div>

            <?php endif; ?>
            <div class='container'>
           
            <?php echo $__env->yieldContent('content'); ?>
            

            </div>
        </main>
      
    </div>
</body>

</html>
