<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('js/login.js')); ?>" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form id = 'login' action = "<?php echo e(route('login')); ?>" method = 'POST'>
    
    <?php echo csrf_field(); ?>

    <div id = 'boxLogin'>
    <h3>Login </h3>
    <p>
    <label>Username <input type='text' name='nomeUtente'></label>
    </p>
    
    <?php $__errorArgs = ['nomeUtente'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <p>
    <label>Password <input type='password' name='password'></label>
    </p>
    
    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    </div>
    
    <p>
    <label>&nbsp;<input type='submit' value='Accedi'></label>
    </p>
    
    <div id = 'boxRegistrazione'>
    <span> Non sei registrato? </span>
    <a href='<?php echo e(route("register")); ?>' id='nuovoAccount'> Clicca qui!</a>
    </div>

</form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/auth/login.blade.php ENDPATH**/ ?>