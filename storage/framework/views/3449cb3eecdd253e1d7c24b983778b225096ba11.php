<?php $__env->startSection('title', "login"); ?>

<?php $__env->startSection('content'); ?>
    <section id="wrapper">
        <div class="login-register"  style="background-image:url(<?php echo e(asset("/images/bg.jpg")); ?>)">
            <div class="login-box card">
                <div class="card-block">

                    <div style="margin-top: 30px">
                        <a href="<?php echo e(url("/")); ?>" class="text-center db">
                            <img width="120px" height="120px" src=" <?php echo e(asset("images/logo.jpeg")); ?>" alt="Home" /><br/>
                            <h3>Pizza Online</h3>
                        </a>
                    </div>
                    <h2 style="text-align: center"> <?php echo e("Pizza online"); ?></h2>
                    <hr/>

                    <?php if($errors->has('username')): ?>
                        <span class="help-block text-danger"><strong><?php echo e($errors->first('username')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <form class="form-horizontal " id="loginform" method="post" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <h4 class="box-title ">Login to panel </h4>

                        <div class="form-group  ">
                            <div class="col-xs-12">
                                <input class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  id="username"
                                       name="username" value="<?php echo e(old('username')); ?>"  type="text" required="" placeholder="username"> </div>

                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password"
                                       name="password" type="password" required="" placeholder="password"> </div>
                        </div>
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                    
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div style="text-align: center">
                        <a href="<?php echo e(url("/")); ?>">home page</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts.login-layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/javad/workspace/pizzaTask/resources/views/auth/login.blade.php ENDPATH**/ ?>