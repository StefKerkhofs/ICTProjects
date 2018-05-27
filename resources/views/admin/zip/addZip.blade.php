@extends('admin.main')
@section('content')
    <h2>Postcodes Aanmaken</h2>
    {{ Form::open(array('action' => 'AdminZipController@addZipForm', 'method' => 'post')) }}
    {{ Form::label('zipCode', 'Postcode') }}
    {{ Form::text('zipCode', '', ['class' => 'form-control', 'required']) }}
    {{ Form::label('zipTown', 'Gemeente') }}
    {{ Form::text('zipTown', '', ['class' => 'form-control', 'required']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection