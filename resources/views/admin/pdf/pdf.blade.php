@extends('admin.main')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>PDF Toevoegen</h2>
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
    <embed id="preview" src="" type='application/pdf'>
    <script type="text/javascript">
        var select = document.getElementsByName('pageSelector')[0];
        var pdf = document.getElementById('preview');
        var baseUrl = "/storage/pdf/";

        select.addEventListener('change', function(){
            switchPdf();
        });

        function switchPdf() {
            var pageData = <?php echo $aPageList ?>;
            for(var page of pageData){
                if (page.page_id == select.value){
                    pdf.src = baseUrl + page.page_content;
                }
            }
        };
        switchPdf();
    </script>
@endsection