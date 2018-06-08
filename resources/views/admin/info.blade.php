<p>{{ $oPageContent }}</p>
{{ Form::open(array('action' => 'AdminInfoController@updateInfo', 'method' => 'post')) }}
    {{ Form::label('content', 'Page Content') }}
    {{ Form::textArea('content', $oPageContent->page_content) }}
    {{ Form::submit('Update') }}
{{ Form::close() }} 