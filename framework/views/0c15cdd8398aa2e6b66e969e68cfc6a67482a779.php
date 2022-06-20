<?php $__env->startSection('title', 'Signup'); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/signup.css')); ?>" rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src=<?php echo e(asset('js/signup.js')); ?> defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form id = 'registrazione' action = "<?php echo e(route("register")); ?>" method = 'POST' enctype="multipart/form-data">
    
    <?php echo csrf_field(); ?>
    
    <div id = 'boxSignup'>
    <h3>Registrazione</h3>
    <p>
    <label>Nome <input type='text' name='nome'></label>
    </p>

    <?php $__errorArgs = ['nome'];
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
    <label>Cognome <input type='text' name='cognome'></label>
    </p>

    <?php $__errorArgs = ['cognome'];
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
    <label>E-Mail <input type='text' name='email'></label>
    </p>
    
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <span id = "ErroreMail"></span>
    <p>
    <label id ='username'>Username <input type='text' name='nomeUtente' verifyNomeUtente="<?php echo e(route('usernameCheck')); ?>"></label>
    </p>

    </p>
    <span id = "ErroreUser"></span>
    <p>

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

    <span id = "ErroreUser"></span>
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


    <span id = "ErrorePassword"></span>
    <p>
    <label>Conferma password <input type='password' name='password_confirmation'></label>
    </p>
    <p>
    <label>Immagine del profilo <input type='text' name='immagine'></label>
    </p>

    <?php $__errorArgs = ['immagine'];
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
    <label>&nbsp;<input type='submit' value='Registrati'></label>
    </p>
    <div id = 'boxLogin'>
    <span> Hai già un account? </span>
    <a href='<?php echo e(route('login')); ?>' id='accedi'> Clicca qui!</a>
    </div>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/auth/register.blade.php ENDPATH**/ ?>