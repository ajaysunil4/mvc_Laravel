<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>"  class="app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'SkipCast')); ?></title>
    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('css/jPlayer/jplayer.flat.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/simple-line-icons.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/font.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" type="text/css" />
    <!--[if lt IE 9]>
    <script src="<?php echo e(asset('js/ie/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ie/respond.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ie/excanvas.js')); ?>"></script>
  <![endif]-->
</head>
<body  class="bg-info dker" style="height:100%;">


            <?php echo $__env->yieldContent('content'); ?>

 <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>skipcast <br>&copy; 2016</small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
  <!-- App -->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('js/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.plugin.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/jquery.jplayer.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/add-on/jplayer.playlist.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/demo.js')); ?>"></script>
</body>
</html>
