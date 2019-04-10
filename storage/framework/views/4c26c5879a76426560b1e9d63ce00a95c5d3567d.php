<?php $__env->startSection('content'); ?>

<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold"><?php echo e(config('app.name')); ?></span></a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Your audience is waiting</strong>
        </header>

        <?php if($errors->has('name')): ?>
            <span class="invalid-feedback text-danger" role="alert">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
        <?php endif; ?>

        <?php if($errors->has('email')): ?>
            <span class="invalid-feedback text-danger" role="alert">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
        <?php if($errors->has('password')): ?>
            <span class="invalid-feedback text-danger" role="alert">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
        <br />
        <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
          <div class="form-group">
              <input id="name" placeholder="Name" type="text" class="rounded input-lg text-center no-border form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
          </div>
          <div class="form-group">
            <input id="email" placeholder="Email" type="email" class="rounded input-lg text-center no-border form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
          </div>
          <div class="form-group">
             <input id="password" placeholder="Password" type="password" class="rounded input-lg text-center no-border form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
          </div>
          <div class="form-group">
             <input id="password-confirm"  placeholder="Confirm Password" type="password" class="rounded input-lg text-center no-border form-control" name="password_confirmation" required>

          </div>
          
          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Already have an account?</small></p>
          <a href="<?php echo e(route('login')); ?>" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
        </form>
      </section>
    </div>
  </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>