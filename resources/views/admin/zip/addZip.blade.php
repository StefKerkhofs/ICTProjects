@extends('admin.main')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h2>Postcodes Aanmaken</h2>
    {{ Form::open(array('action' => 'AdminZipController@addZipForm', 'method' => 'post')) }}
    {{ Form::label('zipCode', 'Postcode') }}
    {{ Form::number('zipCode', '', ['class' => 'form-control', 'required']) }}
    {{ Form::label('zipTown', 'Gemeente') }}
    {{ Form::text('zipTown', '', ['class' => 'form-control', 'required']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection