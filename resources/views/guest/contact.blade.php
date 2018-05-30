@extends('user.templates.templateFrontEnd')
@section('style')
    <style>
        table {
            margin-bottom: 2em;
            margin-top: 1em ;
        }
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
        a{
            color: #000000;
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
                    <td><a href="mailto:{{$aActiveTrip->trip_contact}}">{{$aActiveTrip->trip_contact}}</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection