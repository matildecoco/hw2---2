

<?php $__env->startSection('title', 'Cerca utente'); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/search_people.css')); ?>" rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src=<?php echo e(asset('js/search_people.js')); ?> defer></script>
    <script type="text/javascript" defer>
        const do_search_people_def = '<?php echo e(route("do_search_people_def")); ?>'
        const follow = '<?php echo e(route("follow")); ?>'
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <form id = 'ricercaUtente' action = '<?php echo e(route("do_search_people")); ?>' method = 'POST'>
    <?php echo csrf_field(); ?>
    <nav>
    <span>
        <input type='text' name='cerca' placeholder = 'Cerca'>
    </span>
    <span>
        <label>&nbsp;<input type='submit' value='Cerca'></label>
    </span>
    <a href= '<?php echo e(route('home')); ?>'>Ritorna alla home</a>
    </nav>
    </form>
    
    <div id = 'boxUtenti'>
    </div>  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/searchPeople.blade.php ENDPATH**/ ?>