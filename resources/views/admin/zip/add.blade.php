@extends('admin.templates.templateBackend')
@section('content')
    {{ Form::open(array('action' => 'AdminZipController@addTown', 'method' => 'post')) }}
    {{ Form::label('sZipcode', 'Postcode') }}
    {{ Form::text('sZipcode') }}
    {{ Form::label('sTown', 'Gemeente') }}
    {{ Form::text('sTown') }}
    {{ Form::submit('Opslaan') }}
    <input type="button" href="{{ url()->previous()}}">Annuleren</input>
    {{ Form::close() }}
@endsection