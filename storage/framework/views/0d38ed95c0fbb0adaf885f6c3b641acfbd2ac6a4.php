<?php $__env->startSection('style'); ?>
    <style>
        table {
            margin-bottom: 2em;
            margin-top: 1em ;
        }
        table, th, td {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        th{
            text-align: center;
            background-color: #e00049;
            color: #E9F3F8;
        }
        th:not(:last-child){
            height: 50px;
            width: 250px;
        }
        td{
            padding: 15px 30px;
            text-align: right;
        }
        a{
            color: #000000;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <H1>Contactpagina</H1>
        <table>
            <tr>
                <th>Reis</th>

                <th>Mail contactpersoon</th>

            </tr>
            <?php $__currentLoopData = $aActiveTrips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aActiveTrip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($aActiveTrip->trip_name); ?></td>
                    <td><a href="mailto:<?php echo e($aActiveTrip->trip_contact); ?>"><?php echo e($aActiveTrip->trip_contact); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.templates.templateFrontEnd', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>