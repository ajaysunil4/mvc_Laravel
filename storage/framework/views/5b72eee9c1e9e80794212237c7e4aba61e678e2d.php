<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">
                        &times;
                    </button>
            <?php if($errors->has('email')): ?>
                    <strong><?php echo e($errors->first('email')); ?></strong>
            <?php endif; ?>

            <?php if($errors->has('password')): ?>
                   <?php echo e($errors->first('password')); ?>

            <?php endif; ?>
</div>
