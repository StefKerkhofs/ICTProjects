<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if($sType == "pdf"): ?>
            <embed style="margin: auto; display: block;" src="storage/pdf/<?php echo e($sContent); ?>" type="application/pdf" width="90%" class="responsive" height="600px" />
        <?php else: ?>
            <?php echo e($sContent); ?>

        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.templates.templateFrontEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>