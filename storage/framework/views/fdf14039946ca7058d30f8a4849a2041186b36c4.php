<?php $__env->startSection('title'); ?>
    <title>Registratie</title>
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
        form p{
            clear: both;
            padding: 19px;
        }
        .select{
            width: 250px;
            float: left;
            padding-left: 1px;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php echo e(Form::open(array('action' => 'RegisterController@form3POST', 'method' => 'post'))); ?>

            <div class="formcontainer">
                <div class="leftform">
                    <p><label class="field" for="name">Naam:</label>            <input type="text" class="textbox" value="" name="lastname" ></p>
                    <p><label class="field" for="name">Voornaam:</label>        <input type="text" class="textbox" value="" name="firstname"></p>
                    <p><label class="field" for="name">Geslacht:</label>        <input type="text" class="textbox" value="" name="gender"></p>
                    <p><label class="field" for="name">Geboortedatum:</label>   <input type="text" class="textbox" placeholder="DD/MM/YYYY" name="birthdate"></p>
                    <p><label class="field" for="name">Geboorteplaats:</label>  <input type="text" class="textbox" value="" name="birthplace"></p>
                </div>

                <div class="rightform">
                    <p><label class="field" for="name">Nationaliteit:</label>   <input type="text" class="textbox" value="" name="nationality"></p>
                    <p><label class="field" for="name">Adres: </label>          <input type="text" class="textbox" value="" name="address"></p>
                    <p><label class="field" for="name">Gemeente:</label>
                        <select name="Postcode" class="select">
                            <?php
                            $aAllZip = \App\ZipCode::all();
                            foreach ($aAllZip as $oZip){
                            ?>
                            <option value="<?php echo $oZip->zip_code_id ?>"><?php echo $oZip->town ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                    <p><label class="field" for="name">Land:</label>            <input type="text" class="textbox" value="" name="country"></p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/">Annuleren</a>
                </div>
                <input type="submit" value="volgende">
            </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>