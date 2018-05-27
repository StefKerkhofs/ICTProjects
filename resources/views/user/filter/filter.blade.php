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
        .gegTable {
            margin-bottom: 150px;
        }
        .filterTable,.filterTable td{
            border-bottom: 1px solid darkgray;
            border-top: 1px solid darkgray;
            border-left: 0px;
            border-right: 0px;
            border-collapse: collapse;
        }

        .filterTable td{
            padding: 15px 80px 15px 15px;
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
            margin-top: 50px;
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


    </style>
@endsection
@section('content')
    <div class="container">
        <table>
            <tr>
                <td>
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
                            <td>{{Form::checkbox('trip_name', 'trip_name')}}</td>
                        </tr>
                        <tr>
                            <td>{{ Form::label('lblKlas', 'Klas', ['class' => 'field']) }}</td>
                            <td>{{Form::checkbox('name', 'name')}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{Form::submit('Toon Lijst',['class'=>'button'])}}
                            </td>
                        </tr>
                        {{ Form::close() }}
                    </table>
                </td>
{{--
    @php
        var_dump($afilteredUserList);
    @endphp
--}}
                <td>
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
                                if($ofilters=='trip_name')
                                    {
                                    $ofilters='Reis';
                                    }
                                if($ofilters=='name')
                                    {
                                    $ofilters='Klas';
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
                </td>
            </tr>
        </table>
    </div>

@endsection