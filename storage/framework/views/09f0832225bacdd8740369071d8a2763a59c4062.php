<?php $__env->startSection('style'); ?>
    <style>
        /*
        body{
            background: #E9F3F8;
        }
        .container{
            background: #FFF;
            height: auto;
            font-weight: bold;
            color: #003469;
            overflow: hidden;
            margin-top: 20px;
        }
         */
        .formcontainer{
            display:flex;
            justify-content:center;
            align-items:center;
            padding-top:20px;
        }
        .leftform{

            height: 500px;
            float:left;
        //border: 1px solid red;
        }
        .rightform{
            height: 500px;
        //border: 1px solid green;
            float: left;
        }
        .formbutton{
        //border: 1px solid blue;
            display:flex;
            justify-content:center;
            align-items:center;
            margin: 5px;
        }
        .button a{
            background: #003469;
            border: none;
            width: 275px;
            height: 70px;
            margin: 20px;
            font-weight: bold;
            display:flex;
            justify-content:center;
            align-items:center;
            color: #FFF;
            text-transform: none;
        }
        .formbutton input{
            background: #003469;
            font-weight: bold;
            color: #FFF;
            border: none;
            width: 275px;
            height: 70px;
            margin: 20px;
        }
        label.field{
            text-align: left;
            width: 150px;
            float: left;
        }
        input.textbox{
            width: 250px;
            float: left;
            padding-left: 1px;
        }
        .radiobuttons{
            width: 250px;
            float: left;
            padding-left: 1px;
            border: 1px solid #0b2e13;
            align: right;
        }
        form p{
            clear: both;
            padding: 19px;
        }
        .radiolabel{
            width: 50px;

        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php $__currentLoopData = $aTravellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $traveller => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo e(Form::open(array('url' => "/profileEdit/$data->user_id", 'method' => 'post'))); ?>

            <div class="formcontainer">
                <div class="leftform">
                    <p><?php echo e(Form::label('lblLastName',    'Naam:',           ['class' => 'field'])); ?>  <?php echo e(Form::text('txtLastName',    $data->lastname,    ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblFirstName',   'Voornaam:',       ['class' => 'field'])); ?>  <?php echo e(Form::text('txtFirstName',   $data->firstname,   ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblSex',         'Geslacht:',       ['class' => 'field'])); ?>  <?php echo e(Form::text('txtSex',         $data->sex,         ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblBirthdate',   'Geboortedatum:',  ['class' => 'field'])); ?>  <?php echo e(Form::text('txtBirthdate',   $data->birthdate,   ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblBirthplace',  'Geboorteplaats:', ['class' => 'field'])); ?>  <?php echo e(Form::text('txtBirthplace',  $data->birthplace,  ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblNationality', 'Nationaliteit:',  ['class' => 'field'])); ?>  <?php echo e(Form::text('txtNationality', $data->nationality, ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblAddress',     'Adres:',          ['class' => 'field'])); ?>  <?php echo e(Form::text('txtAddress',     $data->address,     ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblCity',        'Gemeente:',       ['class' => 'field'])); ?>  <?php echo e(Form::text('txtCity',        $data->city,        ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblCountry',     'Land:',           ['class' => 'field'])); ?>  <?php echo e(Form::text('txtCountry',     $data->country,     ['class' => 'textbox'] )); ?> </p>
                </div>

                <div class="rightform">
                    <p><?php echo e(Form::label('lblEmail',           'Email:',         ['class' => 'field'])); ?>  <?php echo e(Form::text('txtEmail',           $data->email,             ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblPhone',           'Telefoon:',      ['class' => 'field'])); ?>  <?php echo e(Form::text('txtPhone',           $data->phone,             ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblEmergencyPhone1', 'Noodnummer 1:',  ['class' => 'field'])); ?>  <?php echo e(Form::text('txtEmergencyPhone1', $data->emergency_phone_1, ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblEmergencyPhone2', 'Noodnummer 2:',  ['class' => 'field'])); ?>  <?php echo e(Form::text('txtEmergencyPhone2', $data->emergency_phone_2, ['class' => 'textbox'] )); ?> </p>

                    <p style="padding-bottom: 0px;margin-bottom: 0px;">
                        <?php echo e(Form::label('lblMedicalIssue', 'Behandeling:',  ['class' => 'field'])); ?>

                        <input type="radio"  name="txtMedicalIssue" value="1" id="1" <?php echo e($data->MedicalIssue == '1' ? 'checked' : ''); ?> > <label class="radiolabel" for="1">Ja</label>
                        <input type="radio"  name="txtMedicalIssue" value="0" id="0" <?php echo e($data->MedicalIssue  == '0' ? 'checked' : ''); ?>> <label class="radiolabel" for="0">Nee</label>
                    </p>
                    <p><?php echo e(Form::label('lblMedicalInfo',     'Medische info:', ['class' => 'field'])); ?>  <?php echo e(Form::textarea('txtMedicalInfo', $data->medical_info, ['size' => '30x5'])); ?>


                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/profile">Annuleren</a>
                </div>
                <?php echo e(Form::submit('Opslaan')); ?>

            </div>
            <?php echo e(Form::close()); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>