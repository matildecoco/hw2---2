<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'CatGram')); ?></title>

    <?php echo $__env->yieldContent('script'); ?>

    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    
    <?php echo $__env->yieldContent('style'); ?>

</head>

<body>
    <header>
        <h1 id='titolo'>CatGram</h1>
            
    </header>  
        
    <nav>
        <?php echo $__env->yieldContent('menu'); ?>   
    </nav>
        
    <?php echo $__env->yieldContent('content'); ?>

</body>

<?php /**PATH C:\xampp\htdocs\hw2\resources\views/layouts/app.blade.php ENDPATH**/ ?>