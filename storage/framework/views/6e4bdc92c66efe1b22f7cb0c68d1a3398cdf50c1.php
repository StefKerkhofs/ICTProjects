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
            margin-top: -50px;
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
            width: 200px;
            float: left;
            margin-top: -40px;
        }
        label.field1{
            text-align: left;
            width: 250px;
            float: left;
        }
        input.textbox{
            width: 250px;
            float: left;
            padding-left: 1px;
            margin-top: -50px;
        }

        form p{
            clear: both;
            padding: 19px;
        }

    </style>
    <script type="text/javascript">
        document.getElementById('radioJa').checked = true;
        window.onload = function() {
            document.getElementById('ifYes').style.display = 'none';
            document.getElementById('ifNo').style.display = 'none';
        }
        function yesnoCheck() {
            if (document.getElementById('radioJa').checked) {
                document.getElementById('ifYes').style.display = 'block';
            }
            else if(document.getElementById('radioNee').checked) {
                document.getElementById('ifYes').style.display = 'none';
            }
        }
    </script>
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
        <?php echo e(Form::open(array('action' => 'RegisterController@form1POST', 'method' => 'post'))); ?>

            <div class="formcontainer">
                <div class="middleform">
                    <p><?php echo e(Form::label('lblNummer', 'Ben je een student of docent?*', ['class' => 'field1'])); ?></p>
                    <p> <input type="radio" onclick="javascript:yesnoCheck();" id="radioJa" name="radio" value="1" class="radio" checked="checked"/><label for="radioJa">Ja</label> &nbsp&nbsp&nbsp <input type="radio" onclick="javascript:yesnoCheck();" id="radioNee" name="radio" value="2" class="radio"/><label for="radioNee">Nee</label></p>
                    <div id="ifYes">
                    <p><?php echo e(Form::label('lblNummer', 'Studenten-/docentennummer*', ['class' => 'field'])); ?></p>
                    <p><?php echo e(Form::text('txtNummer', '', ['class' => 'textbox'] )); ?> </p>
                    </div>
                    <p><?php echo e(Form::label('lblmail', 'Email*', ['class' => 'field'])); ?></p>
                    <p><?php echo e(Form::text('txtEmail', '', ['class' => 'textbox'] )); ?> </p>
                    <p><?php echo e(Form::label('lblWachtwoord', 'Wachtwoord*', ['class' => 'field'])); ?></p>
                    <p><?php echo e(Form::input('password', 'txtWachtwoord', '', ['class' => 'textbox'])); ?> </p>
                    <p><?php echo e(Form::label('lblBWachtwoord', 'Bevestig wachtwoord*', ['class' => 'field'])); ?></p>
                    <p><?php echo e(Form::input('password', 'txtWachtwoord_confirmation', '', ['class' => 'textbox'])); ?> </p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/">Annuleren</a>
                </div>
                <?php echo e(Form::submit('volgende')); ?>

            </div>
        <?php echo e(Form::close()); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("user.templates.templateFrontEnd", array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>