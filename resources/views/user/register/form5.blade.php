@extends("user.templates.templateFrontEnd")
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
@endsection
@section('content')
    <div class="container">
        {{ Form::open(array('action' => 'RegisterController@form6', 'method' => 'post')) }}
        <div class="formcontainer">
            <div class="middle">
                <p><label class="field">Medische behandeling*:</label></p>
                <p><input type="radio" name="MedischeAandoening" value="true"> Ja
                    <input type="radio" name="MedischeAandoening" value="false"> Nee</p>
                <p><label class="field" for="MedischeInfo">Medische info:</label></p>
                <p><textarea rows="4" cols="50" name="MedischeInfo"></textarea> </p>
            </div>
        </div>
        <div class="formbutton">
            <div class="button">
                <a class="nav-link" href="/">Annuleren</a>
            </div>
            <input type="submit" value="Bevestigen">
        </div>
        {{ Form::close() }}
    </div>
@endsection