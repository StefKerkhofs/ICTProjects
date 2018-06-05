@extends('admin.main')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
        @endif
    <h2>Richting Toevoegen</h2>
    {{Form::open(array('action' => 'AdminStudyController@addStudy', 'method' => 'post'))}}
    {{ Form::label('studyName', 'Richting') }}
    {{form::text('studyName', '', ['class' => 'form-control', 'placeholder' => 'Richting', 'required'])}}
    <div class="actions">
        {{ Form::submit('Richting Toevoegen') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{Form::close()}}

    <h2>Afstudeerrichting Toevoegen</h2>
    {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post', 'onchange' => 'openMajorTable'))}}
    {{ Form::label('studySelect', 'Selecteer Richting') }}
    {{Form::select('studySelect', $aStudyForm, null, ['class' => 'form-control'])}}
    <table id="majors" class="table"></table>
    {{ Form::label('majorName', 'Afstudeerrichting') }}
    {{form::text('majorName','' , ['class' => 'form-control', 'placeholder' => 'Afstudeerrichting', 'required'])}}
    <div class="actions">
        {{ Form::submit('Afstudeerrichting Toevoegen') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{Form::close()}}

    <script type="text/javascript">
        var select = document.getElementsByName('studySelect')[0];
        var table = document.getElementById('majors');

        select.addEventListener('change', function () {
            openMajorTable();
        });

        function openMajorTable(){
            var majorData = <?php echo $aMajorData ?>;
            table.innerHTML = "";
            var studyId = select.value;
            for(var major of majorData)
            {
                if(major.study_id == studyId)
                {
                    var row = document.createElement('tr');
                    var column = document.createElement('td');
                    column.innerHTML = major.major_name;
                    row.appendChild(column);
                    table.appendChild(row);
                }
            }
        }
        openMajorTable();
    </script>
@endsection




