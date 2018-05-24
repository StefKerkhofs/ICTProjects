@extends('admin.main')

@section('content')
        <h2>Reis Aanmaken</h2>
        {{ Form::open(array('action' => 'AdminTripController@createTrip', 'method' => 'post')) }}
        {{ Form::label('sNameTrip', 'Naam reis') }}
        {{ Form::text('sNameTrip', '', ['class' => 'form-control']) }}
        {{ Form::label('iYearTrip', 'Jaar') }}
        {{ Form::number('iYearTrip', '', ['class' => 'form-control']) }}
        {{ Form::label('iPriceTrip', 'Kostprijs') }}
        {{ Form::number('iPriceTrip', '', ['class' => 'form-control']) }}
        {{ Form::checkbox('bActive', 1, true) }}
        {{ Form::label('bActive', 'Actief') }}

        <div class="actions">
                {{ Form::submit('Opslaan') }}
                <input type="button" onclick="history.go(-1)" value="Annuleren"/>
        </div>
        {{ Form::close() }}
@endsection