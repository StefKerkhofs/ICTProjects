@extends('admin.main')
@section('content')
    {{ Form::open(array('action' => 'AdminPDFController@updateContent', 'method' => 'post','files' => true)) }}
    <select name="pageSelector" class="form-control">
        @foreach($aPageList as $oPage)
            <option value="{{ $oPage->page_id }}">{{ $oPage->page_name }}</option>
        @endforeach
    </select>
    {{ Form::file('pdf', array('class' => 'form-control', 'accept' => 'application/pdf', 'required' => 'required')) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{ Form::close()}}
@endsection