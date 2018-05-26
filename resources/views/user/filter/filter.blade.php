@extends("user.templates.templateFrontEnd")
@section('content')

    <div class="container">
        {{Form::open(array('action' => 'FilterController@getFilteredTraveller', 'method' => 'post'))}}
        <div class="formcontainer">
            <div class="middleform">
                <p>{{ Form::label('lblNaam', 'Naam', ['class' => 'field']) }}
                {{Form::checkbox('Naam', 'Naam')}}</p>
                <p>{{ Form::label('lblVoornaam', 'Voornaam', ['class' => 'field']) }}
                {{Form::checkbox('Voornaam', 'Voornaam')}}</p>
                <p>{{ Form::label('lblTelefoon', 'Telefoon', ['class' => 'field']) }}
                {{Form::checkbox('Telefoon', 'Telefoon')}}</p>
                <p>{{ Form::label('lblReis', 'Reis', ['class' => 'field']) }}
                {{Form::checkbox('Reis', 'Reis')}}</p>
                <p>{{ Form::label('lblKlas', 'Klas', ['class' => 'field']) }}
                {{Form::checkbox('Klas', 'Klas')}}</p>
            </div>
        </div>
        <div class="formbutton">
            {{Form::submit('Toon Lijst')}}
        </div>
        {{ Form::close() }}
    </div>

    {{--@php
        var_dump($afilters);
        var_dump($afilteredUserList);
    @endphp
--}}
    <table>

        @foreach($afilteredUserList as $ofiltereduserlist)
            <tr>
                @foreach($afilters as $ofilters)
                    <td>
                        {{$ofiltereduserlist->$ofilters}}
                    </td>
                @endforeach
            </tr>
        @endforeach
    </table>


@endsection