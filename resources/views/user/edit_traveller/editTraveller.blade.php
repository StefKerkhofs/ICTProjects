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
        input.radio{
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
    <div class="container">
        @foreach($aTravellers as $traveller => $data)
            {{ Form::open(array('url' => "/editTraveller/$data->user_id", 'method' => 'post')) }}
                <div class="formcontainer">
                    <div class="leftform">
                        <p>{{ Form::label('lblLastName',    'Naam:',           ['class' => 'field']) }}  {{ Form::text('txtLastName',    $data->lastname,    ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblFirstName',   'Voornaam:',       ['class' => 'field']) }}  {{ Form::text('txtFirstName',   $data->firstname,   ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblSex',         'Geslacht:',       ['class' => 'field']) }}  {{ Form::text('txtSex',         $data->sex,         ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblBirthdate',   'Geboortedatum:',  ['class' => 'field']) }}  {{ Form::text('txtBirthdate',   $data->birthdate,   ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblBirthplace',  'Geboorteplaats:', ['class' => 'field']) }}  {{ Form::text('txtBirthplace',  $data->birthplace,  ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblNationality', 'Nationaliteit:',  ['class' => 'field']) }}  {{ Form::text('txtNationality', $data->nationality, ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblAddress',     'Adres:',          ['class' => 'field']) }}  {{ Form::text('txtAddress',     $data->address,     ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblCity',        'Gemeente:',       ['class' => 'field']) }}  {{ Form::text('txtCity',        $data->city,        ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblCountry',     'Land:',           ['class' => 'field']) }}  {{ Form::text('txtCountry',     $data->country,     ['class' => 'textbox'] )}} </p>
                    </div>

                    <div class="rightform">
                        <p>{{ Form::label('lblEmail',           'Email:',         ['class' => 'field']) }}  {{ Form::text('txtEmail',           $data->email,             ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblPhone',           'Telefoon:',      ['class' => 'field']) }}  {{ Form::text('txtPhone',           $data->phone,             ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblEmergencyPhone1', 'Noodnummer 1:',  ['class' => 'field']) }}  {{ Form::text('txtEmergencyPhone1', $data->emergency_phone_1, ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblEmergencyPhone2', 'Noodnummer 2:',  ['class' => 'field']) }}  {{ Form::text('txtEmergencyPhone2', $data->emergency_phone_2, ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblMedicalIssue',    'Behandeling:',   ['class' => 'field']) }}  {{ Form::text('txtMedicalIssue',    $data->MedicalIssue,      ['class' => 'textbox'] )}} </p>
                        <p>{{ Form::label('lblMedicalInfo',     'Medische info:', ['class' => 'field']) }}  {{ Form::text('txtMedicalInfo',     $data->medical_info,      ['class' => 'textbox'] )}} </p>
                    </div>
                </div>
                <div class="formbutton">
                    <div class="button">
                        <a class="nav-link" href="/searchTravellers">Annuleren</a>
                    </div>
                    {{ Form::submit('Opslaan') }}
                </div>
            {{ Form::close() }}
        @endforeach
    </div>
@endsection
