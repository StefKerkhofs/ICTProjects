<?php $__env->startSection('style'); ?>
    <style>

        .search input{
            width: 300px;
            height: 50px;
            border: transparent;
            border-right: none;
            outline: none;
            padding-left: 5px;
        }
        .gegTable,.gegTable th,.gegTable td {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        .gegTable th{
            text-align: center;
            background-color: #e00049;
            color: #E9F3F8;
        }
        .gegTable th{
            height: 50px;
            width: 350px;
        }
        .gegTable td{
            padding: 15px;
            text-align: right;
        }

        .filterTable,.filterTable td{
            border-bottom: 1px solid darkgray;
            border-top: 1px solid darkgray;
            border-left: 0px;
            border-right: 0px;
            border-collapse: collapse;
        }

        .filterTable td{
            padding: 20px 0px 15px 15px;
            text-align: left;
        }
        .filterTable td:last-child{
            padding: 15px;
        }

        .filterTable tr:last-child td{
            text-align: center;
            padding: 10px 0px 0px;
        }


        .filterTable{
            margin-right: 50px;
        }
        .button{
            width: 100%;
            height: 100%;
            background-color: #003469;
            border: none;
            color: white;
            padding: 20px;
        }

        table{
            margin-top: 50px;
            display: inline-block;
            float: left;
            max-width: 800px;
            text-align: center;
        }
        .field{
            width: 180px;

        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">

                    <table class="filterTable">
                        <?php echo e(Form::open(array('action' => 'FilterController@getFilteredTraveller', 'method' => 'post'))); ?>

                        <tr>
                            <td><?php echo e(Form::label('lastname', 'Naam', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('lastname', 'lastname')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(Form::label('firstname', 'Voornaam', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('firstname', 'firstname')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(Form::label('email', 'Email', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('email', 'email')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(Form::label('phone', 'Telefoon', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('phone', 'phone')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(Form::label('trip_name', 'Reis', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('trip_name', 'trip_name')); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo e(Form::label('name', 'Klas', ['class' => 'field'])); ?></td>
                            <td><?php echo e(Form::checkbox('name', 'name')); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <?php echo e(Form::submit('Toon Lijst',['class'=>'button'])); ?>

                            </td>
                        </tr>
                        <?php echo e(Form::close()); ?>

                    </table>



                    <table class="gegTable">
                        <tr>
                            <?php $__currentLoopData = $afilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofilters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php
                                if($ofilters=='firstname')
                                    {
                                    $ofilters='Voornaam';
                                    }
                                if($ofilters=='lastname')
                                    {
                                    $ofilters='Naam';
                                    }

                                if($ofilters=='email')
                                    {
                                    $ofilters='Email';
                                    }
                                if($ofilters=='phone')
                                    {
                                    $ofilters='Telefoon';
                                    }
                                if($ofilters=='trip_name')
                                    {
                                    $ofilters='Reis';
                                    }
                                if($ofilters=='name')
                                    {
                                    $ofilters='Klas';
                                    }
                                ?>

                                <th><?php echo e($ofilters); ?></th>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                        <?php $__currentLoopData = $afilteredUserList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofiltereduserlist => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <?php $__currentLoopData = $afilters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ofilters=>$filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <?php echo e($data[$filter]); ?>

                                    </td>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>