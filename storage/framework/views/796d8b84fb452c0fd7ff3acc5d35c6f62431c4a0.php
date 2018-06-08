<?php $__env->startSection('title'); ?>
    <title>Registratie</title>
<?php $__env->startSection('style'); ?>
    <style>

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
        <h1 style="margin: auto;width:75%">Registratie voltooid, je kan je nu inloggen met jouw gegevens</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>