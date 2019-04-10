<?php $__env->startSection('content'); ?>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html"><span class="h1 font-bold"><?php echo e(config('app.name')); ?></a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
            <?php if(count($errors) > 0): ?>
            <?php echo $__env->make('includes/login-error-msgs', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
        </header>
         <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
          <div class="form-group">
            <input type="email" placeholder="Email" class="form-control rounded input-lg text-center no-border form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
          </div>
          <div class="form-group">
             <input type="password" placeholder="Password" class="form-control rounded input-lg text-center no-border form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" id="password" name="password" required>
          </div>
          <div class="checkbox i-checks m-b">
            <label class="m-l">
                <input type="checkbox" checked="" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>><i></i>  <?php echo e(__('Remember Me')); ?>

            </label>
          </div>

          <button type="submit" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
          <a href="<?php echo e(route('register')); ?>" class="btn btn-lg btn-info btn-block rounded">Create an account</a>

          <div class="text-center m-t m-b">
            <?php if(Route::has('password.request')): ?>
                <a href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Forgot Your Password?')); ?>

                </a>
            <?php endif; ?>
          </div>
        </form>
      </section>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>