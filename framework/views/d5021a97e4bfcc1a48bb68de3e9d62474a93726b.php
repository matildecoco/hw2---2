

<?php $__env->startSection('title', 'Crea post'); ?>

<?php $__env->startSection('style'); ?>
    <link href="<?php echo e(asset('css/create_post.css')); ?>" rel='stylesheet'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src=<?php echo e(asset('js/search_content.js')); ?> defer></script>
    <script type="text/javascript" defer>
        const condividiPost = '<?php echo e(route("condividiPost")); ?>'
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<form id = 'ricercaPost' action = '<?php echo e(route("do_search_content")); ?>' method = 'POST'>
    <?php echo csrf_field(); ?>
    <nav>
    <span>
        <input type='text' name='cerca' placeholder = 'Cerca'>
    </span>

    <select name='scelta'>
        <option value="spotify">Spotify</option>
        <option value="giphy">Giphy</option>
    </select>

    <span>
        <label>&nbsp;<input type='submit' value='Cerca'></label>
    </span>

    <a href= '<?php echo e(route('home')); ?>'>Ritorna alla home</a>
    </nav>
    </form>
    
    <section id = 'boxPost'>
    </section>
    
    <section id="modalView" class="hidden">
    </section>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hw2\resources\views/searchContent.blade.php ENDPATH**/ ?>