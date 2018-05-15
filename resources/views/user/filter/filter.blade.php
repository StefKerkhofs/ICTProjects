@extends("user.templates.templateFrontEnd")
@section('content')
    <table>
        <tr>
            <td>
                {{Form::open(array('action' => 'FilterController@getFilteredTraveller'))}}
                {{Form::radio('Naam', 'Naam',true)}}
                {{Form::radio('Voornaam', 'Voornaam',true)}}
                {{Form::radio('Telefoon', 'Telefoon',true)}};
                {{Form::radio('Reis', 'Reis')}}
                {{Form::radio('Klas', 'Klas')}}
                {{Form::submit('Toon Lijst')}}
                {{Form::close()}}
            </td>
        </tr>
    </table>
    <table>
        <tr>
        @foreach($afiltereduserlist as $ofiltereduserlist)
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