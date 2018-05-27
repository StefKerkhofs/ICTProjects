@extends('admin.main')
@section('content')
    <h2>Postcodes Aanpassen</h2>
    {{ Form::open(array('url' => "admin/zip/$oZipData->zip_id/edit", 'method' => 'post')) }}
    {{ Form::label('zipCode', 'Postcode') }}
    {{ Form::text('zipCode', $oZipData->zip_code, ['class' => 'form-control', 'required']) }}
    {{ Form::label('zipTown', 'Gemeente') }}
    {{ Form::text('zipTown', $oZipData->zip_town, ['class' => 'form-control', 'required']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close() }}
@endsection