@extends('admin.templates.templateBackend')

@section('content')
    @isset($oFormValues)
        {{ Form::open(array('action' => 'TripController@editTrip', 'method' => 'post')) }}
        {{ Form::label('sNameTrip', 'Naam reis') }}
        {{ Form::text('sNameTrip',$oFormValues->name) }}
        {{ Form::label('iYearTrip', 'Jaar') }}
        {{ Form::text('iYearTrip',$oFormValues->year) }}
        {{ Form::label('iPriceTrip', 'Kostprijs') }}
        {{ Form::text('iPriceTrip',$oFormValues->price) }}
        {{ Form::radio('bActive', 'true',true) }}
        {{ Form::label('Ja') }}
        {{ Form::radio('bActive', 'false') }}
        {{ Form::label('Nee') }}
        {{ Form::submit('Opslaan') }}
        <a href="{{ url()->previous()}}"><input type="button" value="Annuleren"/></a>
        {{ Form::close() }}
        @endisset
    @empty($oFormValues)
        {{ Form::open(array('action' => 'TripController@createTrip', 'method' => 'post')) }}
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
    @endempty

@endsection