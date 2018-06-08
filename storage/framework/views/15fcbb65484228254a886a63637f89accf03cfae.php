<!DOCTYPE html>
<html>
    <head>
        <title>Template <?php $__env->startSection('title'); ?></title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo e(asset('css/template.css')); ?>" rel="stylesheet">
        <link rel="icon" href="<?php echo e(asset("/image/UCLL_Logo.png")); ?>"/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


        <section id="style"> <?php echo $__env->yieldContent('style'); ?> </section>
    </head>
    <body>
        <?php $__env->startSection('cookiewindow'); ?> <?php echo $__env->make('user.layout.cookiewindow', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldSection(); ?>

        <?php $__env->startSection('userbar'); ?> <?php echo $__env->make('user.layout.userbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldSection(); ?>

        <?php $__env->startSection('headbar'); ?> <?php echo $__env->make('user.layout.headbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldSection(); ?>

        <section id="content"> <?php echo $__env->yieldContent('content'); ?> </section>

        <div class="footer">
            <?php $__env->startSection('footer'); ?> <?php echo $__env->make('user.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php echo $__env->yieldSection(); ?>
        </div>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    </body>
</html>