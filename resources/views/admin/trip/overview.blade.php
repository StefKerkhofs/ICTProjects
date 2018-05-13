@extends('admin.main')
@section('content')
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
    </table>
@endsection