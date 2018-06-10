@extends("user.templates.templateFrontEnd")
@section('title')
    <title>Registratie</title>
@section('style')
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
        .select{
            width: 250px;
            float: left;
            padding-left: 1px;
        }
        form p{
            clear: both;
            padding: 19px;
        }

    </style>
@endsection
@section('content')
    <?php
    $aData = unserialize($_COOKIE['register']);
    ?>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Form::open(array('action' => 'RegisterController@form2POST', 'method' => 'post')) }}
            <div class="formcontainer">
                <div class="middleform">
                    <p><label class="field" for="name">Reis*</label></p>
                    <p>
                        <select name="ReisKiezen" class="select">
                            <?php
                                $aAllTrips = \App\Trip::all()->where('is_active','=',true)->where('trip_name','<>','Info');
                                foreach ($aAllTrips as $oTrip){
                                    ?>
                                <option value="<?php echo $oTrip->trip_id ?>"><?php echo $oTrip->trip_name ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </p>
                    <?php
                    if(isset($_SESSION['StudentOrDocent'])){
                        if($_SESSION['StudentOrDocent'] == 1){
                        ?>
                    <p><label class="field" for="name">Afstudeerrichting*</label></p>
                    <p>
                        <select name="AfstudeerrichtingKiezen"class="select">
                            <?php
                            $aAllMajors = \App\Major::all();
                            foreach ($aAllMajors as $oMajor){
                            ?>
                            <option value="<?php echo $oMajor->major_id ?>"><?php echo $oMajor->major_name ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </p>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/">Annuleren</a>
                </div>
                <input type="submit" value="volgende">
            </div>
        {{ Form::close() }}
    </div>
@endsection