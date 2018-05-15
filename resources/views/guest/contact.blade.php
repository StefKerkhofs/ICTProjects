@extends('user.templates.templateFrontEnd')

@section('content')
    <div class="container">
        <H1>Contactpagina</H1>
        <table>
            @foreach($aActiveTrips as $aActiveTrip)
                <tr>
                    <td>{{ $aActiveTrip->trip_name }}</td>
                    <td>{{$aActiveTrip->trip_contact}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection