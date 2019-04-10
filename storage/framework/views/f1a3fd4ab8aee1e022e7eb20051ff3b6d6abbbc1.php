<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="app">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(config('app.name')); ?></title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="<?php echo e(asset('css/jplayer.flat.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome.min.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/simple-line-icons.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/font.css')); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" type="text/css" />
    <script src="<?php echo e(asset('js/ie/respond.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/ie/excanvas.js')); ?>"></script>
  <![endif]-->
</head>
<body class="">
  <section class="vbox">
    <?php echo $__env->make('includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <section>
      <section class="hbox stretch">
        <!-- .sidebave -->
        <?php echo $__env->make('includes.sidenav', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /.sidenav -->
        <section id="content">
          <section class="vbox">
          <section class="w-f-md">
              <section class="hbox stretch bg-black dker">
                  <section class="scrollable padder-lg">
                    <?php echo $__env->yieldContent('content'); ?>
                  </section>
              </section>
          </section>
          <?php echo $__env->make('includes.footer-player', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
        </section>
      </section>
    </section>
  </section>
  <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
  <!-- App -->
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('js/parsley/parsley.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/parsley/parsley.extend.js')); ?>"></script>
  <script src="<?php echo e(asset('js/app.plugin.js')); ?>"></script>
  <script src="<?php echo e(asset('js/slimscroll/jquery.slimscroll.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/app.plugin.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/jquery.jplayer.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/add-on/jplayer.playlist.min.js')); ?>"></script>
  <script src="<?php echo e(asset('js/jPlayer/demo.js')); ?>"></script>
</body>
</html>
