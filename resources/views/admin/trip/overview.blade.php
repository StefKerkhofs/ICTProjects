@extends('admin.main')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>Reizen</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Jaar</th>
            <th>Kostprijs</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aTripData as $oTripData)
            <tr onclick="tableOnClick({{ $oTripData->trip_id }})">
                <td>{{ $oTripData->trip_name }}</td>
                <td>{{ $oTripData->trip_year }}</td>
                <td>{{ $oTripData->trip_price }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr><td colspan="3"><a href="/admin/trip/add" class="button">Nieuwe Reis</a></td></tr>
        </tfoot>
    </table>
@endsection