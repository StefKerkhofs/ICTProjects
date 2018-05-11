@extends('admin.templates.templateBackend')
@section('content')
{{ Form::open(array('action' => 'AdminInfoController@updateInfo', 'method' => 'post')) }}
    {{ Form::textArea('content', $oPageContent->page_content, ['class' => 'form-control']) }}
    <div class="actions">
        {{ Form::submit('Opslaan') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
{{ Form::close() }}
    @endsection