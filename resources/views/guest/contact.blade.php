@extends('user.templates.templateFrontEnd')
@section('style')
    <style>
        table, th, td {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        th{
            text-align: center;
            background-color: #e00049;
            color: #E9F3F8;
        }
        th:not(:last-child){
            height: 50px;
            width: 250px;
        }
        td{
            padding: 15px 30px;
            text-align: right;
        }
    </style>
@endsection
@section('content')

    <div class="container">
        <H1>Contactpagina</H1>
        <table>
            <tr>
                <th>Reis</th>

                <th>Mail contactpersoon</th>

            </tr>
            @foreach($aActiveTrips as $aActiveTrip)
                <tr>
                    <td>{{ $aActiveTrip->trip_name }}</td>
                    <td>{{$aActiveTrip->trip_contact}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection