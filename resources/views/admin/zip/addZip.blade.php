@extends('admin.main')
@section('content')
    {{ Form::open(array('action' => 'AdminZipController@addZipForm', 'method' => 'post')) }}
    {{ Form::label('zipCode', 'Postcode') }}
    {{ Form::text('zipCode', '', ['class' => 'form-control']) }}
    {{ Form::label('zipTown', 'Gemeente') }}
    {{ Form::text('zipTown', '', ['class' => 'form-control']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection