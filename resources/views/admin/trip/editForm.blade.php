@extends('admin.main')
@section('content')
    {{ Form::open(array('action' => 'AdminTripController@createTrip', 'method' => 'post')) }}
    {{ Form::label('sNameTrip', 'Naam reis') }}
    {{ Form::text('sNameTrip', $oTripData->trip_name, ['class' => 'form-control']) }}
    {{ Form::label('sYearTrip', 'Jaar') }}
    {{ Form::text('sYearTrip', $oTripData->trip_year, ['class' => 'form-control']) }}
    {{ Form::label('sPriceTrip', 'Kostprijs') }}
    {{ Form::text('sPriceTrip', $oTripData->trip_price, ['class' => 'form-control']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection