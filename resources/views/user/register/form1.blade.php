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
        .container{
            margin-bottom: 100px;
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
@endsection
@section('content')
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
        {{ Form::open(array('action' => 'RegisterController@form1POST', 'method' => 'post')) }}
            <div class="formcontainer">
                <div class="middleform">
                    <p>{{ Form::label('lblNummer', 'Ben je een student of een docent aan de ucll?*', ['class' => 'field1']) }}</p>
                    <p> <input type="radio" onclick="javascript:yesnoCheck();" id="radioJa" name="radio" value="1" class="radio" checked="checked"/><label for="radioJa">Ja</label>
                        &nbsp&nbsp&nbsp <input type="radio" onclick="javascript:yesnoCheck();" id="radioNee" name="radio" value="2" class="radio"/><label for="radioNee">Nee</label></p>
                    <div id="ifYes">
                    <p>{{ Form::label('lblNummer', 'Studenten-/docentennummer*', ['class' => 'field']) }}</p>
                    <p>{{ Form::text('txtNummer', '', ['class' => 'textbox'] )}} </p>
                    </div>
                    <p>{{ Form::label('lblmail', 'Email*', ['class' => 'field']) }}</p>
                    <p>{{ Form::text('txtEmail', '', ['class' => 'textbox'] )}} </p>
                    <p>{{ Form::label('lblWachtwoord', 'Wachtwoord*', ['class' => 'field']) }}</p>
                    <p>{{ Form::input('password', 'txtWachtwoord', '', ['class' => 'textbox']) }} </p>
                    <p>{{ Form::label('lblBWachtwoord', 'Bevestig wachtwoord*', ['class' => 'field']) }}</p>
                    <p>{{ Form::input('password', 'txtWachtwoord_confirmation', '', ['class' => 'textbox'])  }} </p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/">Annuleren</a>
                </div>
                {{ Form::submit('Volgende') }}
            </div>
        {{ Form::close() }}
    </div>
@endsection