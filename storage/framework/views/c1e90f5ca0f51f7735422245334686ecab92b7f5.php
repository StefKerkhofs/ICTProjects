

<html>
<head>
    <title>Template <?php $__env->startSection('title'); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/template.css')); ?>" rel="stylesheet">
</head>
<body>
<?php $__env->startSection('userbar'); ?>
    <?php echo $__env->make('user.layout.userbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('headbar'); ?>
    <?php echo $__env->make('user.layout.headbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldSection(); ?>

<div class="container">
    <?php $__env->startSection('content'); ?>
</div>

<div class="footer">
    <?php $__env->startSection('footer'); ?>
        <?php echo $__env->make('user.layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>