<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/home.css')); ?>" rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src=<?php echo e(asset('js/home.js')); ?> defer></script>
    <script type="text/javascript" defer>
        const utenti_seguiti='<?php echo e(route("utenti_seguiti")); ?>'
        const stampa_like='<?php echo e(route("stampa_like")); ?>'
        const aggiungi_like='<?php echo e(route("aggiungi_like")); ?>'
        const like_users='<?php echo e(route("like_users")); ?>'
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <a href="<?php echo e(route('home')); ?>">Home </a>
    <a href="<?php echo e(route('searchPeople')); ?>">Cerca utente </a>
    <a href="<?php echo e(route('searchContent')); ?>">Cerca post </a>
    <a class='button' href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
        <?php echo csrf_field(); ?>
    </form>    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div id = 'boxPosts'>
</div>

<section id="modalView" class="hidden">
</section> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/home.blade.php ENDPATH**/ ?>