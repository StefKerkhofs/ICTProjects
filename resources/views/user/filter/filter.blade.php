@extends("user.templates.templateFrontEnd")
@section('content')

    <div class="container">
        {{Form::open(array('action' => 'FilterController@getFilteredTraveller', 'method' => 'post'))}}
        <div class="formcontainer">
            <div class="middleform">
                <p>{{Form::radio('Naam', 'Naam',true)}}</p>
                <p>{{Form::radio('Voornaam', 'Voornaam',true)}}</p>
                <p>{{Form::radio('Telefoon', 'Telefoon',true)}}</p>
                <p>{{Form::radio('Reis', 'Reis')}}</p>
                <p>{{Form::radio('Klas', 'Klas')}}</p>
            </div>
        </div>
        <div class="formbutton">
            {{Form::submit('Toon Lijst')}}
        </div>
        {{ Form::close() }}
    </div>



    <table>
        <tr>
        @foreach($afilteredUserList as $ofiltereduserlist)
            <tr>
                @foreach($afilters as $ofilters)
                    <td>
                        {{$ofiltereduserlist->$ofilters}}
                    </td>
                @endforeach
            </tr>
            @endforeach
            </tr>
    </table>


@endsection