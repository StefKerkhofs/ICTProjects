@extends('admin.templates.templateBackend')
@section('content')
    {{ Form::open(array('action' => 'TripController@createTrip', 'method' => 'post')) }}
    {{ Form::label('sNameTrip', 'Naam reis') }}
    {{ Form::text('sNameTrip') }}
    {{ Form::label('sYearTrip', 'Jaar') }}
    {{ Form::text('sYearTrip') }}
    {{ Form::label('sPriceTrip', 'Kostprijs') }}
    {{ Form::text('sPriceTrip') }}
    {{ Form::submit('Opslaan') }}
    <a href="{{ url()->previous()}}"><input type="button" value="Annuleren"/></a>
    {{ Form::close() }}
@endsection