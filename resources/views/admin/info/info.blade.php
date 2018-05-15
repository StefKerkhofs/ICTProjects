@extends('admin.main')
@section('content')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=ehx8bfmpyigk7t2szqgjzgjcxudwmge7f5isi5cn0m2f2uu3"></script>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    {{ Form::open(array('action' => 'AdminInfoController@updateInfo', 'method' => 'post')) }}
        {{ Form::textArea('content', $oPageContent->page_content, ['class' => 'form-control']) }}
        <div class="actions">
            {{ Form::submit('Opslaan') }}
            <input type="button" onclick="history.go(0)" value="Annuleren"/>
        </div>
    {{ Form::close() }}
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea',
            height: 500,
            theme: 'modern',
            toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
            image_advtab: true,
            templates: [
                { title: 'Test template 1', content: 'Test 1' },
                { title: 'Test template 2', content: 'Test 2' }
            ],
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });
    </script>
@endsection