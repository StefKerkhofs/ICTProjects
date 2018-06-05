@extends('admin.main')

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>Contactpersoon Instellen</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Reis</th>
            <th>Contactpersoon</th>
        </tr>
        </thead>
        <tbody>
        {{Form::open(array('action' => 'AdminContactController@updateContact', 'method' => 'post'))}}
        @foreach($aTripData = DB::table('trips')->where('is_active', '1')->get(['trip_id','trip_name', 'trip_contact']) as $oTripData)

            <tr>
                <td>{{ $oTripData->trip_name }}</td>
                <td>
                {{ Form::email($oTripData->trip_id,$oTripData->trip_contact ) }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
        {{Form::close()}}
    </div>

    @endsection

