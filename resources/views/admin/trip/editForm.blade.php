@extends('admin.main')
@section('content')
    {{ Form::open(array('url' => "admin/trip/$oTripData->trip_id/edit", 'method' => 'post')) }}
    {{ Form::label('sNameTrip', 'Naam reis') }}
    {{ Form::text('sNameTrip', $oTripData->trip_name, ['class' => 'form-control']) }}
    {{ Form::label('iYearTrip', 'Jaar') }}
    {{ Form::text('iYearTrip', $oTripData->trip_year, ['class' => 'form-control']) }}
    {{ Form::label('iPriceTrip', 'Kostprijs') }}
    {{ Form::text('iPriceTrip', $oTripData->trip_price, ['class' => 'form-control']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection