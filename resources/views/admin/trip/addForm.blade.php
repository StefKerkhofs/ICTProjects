@extends('admin.main')

@section('content')

        {{ Form::open(array('action' => 'AdminTripController@createTrip', 'method' => 'post')) }}
        {{ Form::label('sNameTrip', 'Naam reis') }}
        {{ Form::text('sNameTrip') }}
        {{ Form::label('iYearTrip', 'Jaar') }}
        {{ Form::number('iYearTrip') }}
        {{ Form::label('iPriceTrip', 'Kostprijs') }}
        {{ Form::number('iPriceTrip') }}
        {{ Form::checkbox('bActive', 1, true) }}
        {{ Form::label('bActive', 'Actief') }}

        <div class="actions">
                {{ Form::submit('Opslaan') }}
                <input type="button" onclick="history.go(-1)" value="Annuleren"/>
        </div>
        {{ Form::close() }}
@endsection