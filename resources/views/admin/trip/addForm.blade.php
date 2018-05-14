@extends('admin.main')

@section('content')
        {{ Form::open(array('action' => 'AdminTripController@createTrip', 'method' => 'post')) }}
        {{ Form::label('sNameTrip', 'Naam reis') }}
        {{ Form::text('sNameTrip') }}
        {{ Form::label('iYearTrip', 'Jaar') }}
        {{ Form::text('iYearTrip') }}
        {{ Form::label('iPriceTrip', 'Kostprijs') }}
        {{ Form::text('iPriceTrip') }}
        {{ Form::radio('bActive', 'true',true) }}
        {{ Form::label('Ja') }}
        {{ Form::radio('bActive', 'false') }}
        {{ Form::label('Nee') }}
        {{ Form::submit('Opslaan') }}
        <a href="{{ url()->previous()}}"><input type="button" value="Annuleren"/></a>
        {{ Form::close() }}
@endsection