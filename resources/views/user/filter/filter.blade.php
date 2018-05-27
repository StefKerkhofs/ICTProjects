@extends("user.templates.templateFrontEnd")
@section('style')
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
            padding: 15px;
            text-align: right;
        }


    </style>
@endsection
@section('content')
    <div class="container">
    <table class="filterTable">
        {{Form::open(array('action' => 'FilterController@getFilteredTraveller', 'method' => 'post'))}}
        <tr>
            <td>{{ Form::label('lblNaam', 'Naam', ['class' => 'field']) }}</td>
            <td>{{Form::checkbox('lastname', 'lastname')}}</td>
        </tr>
        <tr>
            <td>{{ Form::label('lblVoornaam', 'Voornaam', ['class' => 'field']) }}</td>
            <td>{{Form::checkbox('firstname', 'firstname')}}</td>
        </tr>
        <tr>
            <td>{{ Form::label('lblTelefoon', 'Telefoon', ['class' => 'field']) }}</td>
            <td>{{Form::checkbox('phone', 'phone')}}</td>
        </tr>
        <tr>
            <td>{{ Form::label('lblReis', 'Reis', ['class' => 'field']) }}</td>
            <td>{{Form::checkbox('Reis', 'Reis')}}</td>
        </tr>
        <tr>
            <td>{{ Form::label('lblKlas', 'Klas', ['class' => 'field']) }}</td>
            <td>{{Form::checkbox('Klas', 'Klas')}}</td>
        </tr>
        <tr>
            <td>
                {{Form::submit('Toon Lijst')}}
            </td>
        </tr>
        {{ Form::close() }}
    </table>
{{--
    @php
        var_dump($afilteredUserList);
    @endphp
--}}
    <table class="gegTable">
        <tr>
            @foreach($afilters as $ofilters)

                @php
                if($ofilters=='firstname')
                    {
                    $ofilters='Voornaam';
                    }
                if($ofilters=='lastname')
                    {
                    $ofilters='Naam';
                    }
                if($ofilters=='phone')
                    {
                    $ofilters='Telefoon';
                    }
                @endphp

                <th>{{$ofilters}}</th>
            @endforeach
        </tr>
        @foreach($afilteredUserList as $ofiltereduserlist => $data)
            <tr>
                @foreach($afilters as $ofilters=>$filter)
                    <td>
                        {{$data[$filter]}}
                    </td>
                @endforeach
            </tr>
        @endforeach

    </table>
    </div>

@endsection