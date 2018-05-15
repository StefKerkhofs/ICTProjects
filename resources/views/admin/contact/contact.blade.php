@extends('admin.main')

@section('content')

    <table class="table table-hover">

        <thead>
        <tr>
            <th>Reis</th>
            <th>Contactpersoon</th>

        </tr>
        </thead>
        <tbody>

        {{Form::open(array('action' => 'AdminContactController@updateContact', 'method' => 'post'))}}
        @foreach($aTripData = DB::table('trips')->where('is_active', '1')->get(['trip_name', 'trip_contact']) as $oTripData)

            <tr>
                <td>{{ $oTripData->trip_name }}</td>
                <td>
                {{ Form::email($oTripData->trip_name,$oTripData->trip_contact ) }}
                </td>
            </tr>
        @endforeach

        </tbody>
        <tfoot>
        <tr>
            <td>

        {{Form::submit('Opslaan')}}
        {{Form::close()}}
            </td>
        </tr>

        </tfoot>
    </table>

    @endsection

