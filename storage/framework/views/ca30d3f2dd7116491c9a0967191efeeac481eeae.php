<?php $__env->startSection('content'); ?>
<p><?php echo e($oPageContent); ?></p>
<?php echo e(Form::open(array('action' => 'AdminInfoController@updateInfo', 'method' => 'post'))); ?>

    <?php echo e(Form::label('content', 'Page Content')); ?>

    <?php echo e(Form::textArea('content', $oPageContent->page_content)); ?>

    <?php echo e(Form::submit('Update')); ?>

<?php echo e(Form::close()); ?>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('user.templates.templateFrontEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>