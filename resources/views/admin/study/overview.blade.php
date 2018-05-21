@extends('admin.main')
@section('content')
    <h2>Richting Toevoegen</h2>
    {{Form::open(array('action' => 'AdminStudyController@addStudy', 'method' => 'post'))}}
    {{ Form::label('studyName', 'Richting') }}
    {{form::text('studyName', '', ['class' => 'form-control', 'placeholder' => 'Richting'])}}
    <div class="actions">
        {{ Form::submit('Richting Toevoegen') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{Form::close()}}

    <h2>Afstudeerrichting Toevoegen</h2>
    {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post', 'onchange' => 'openMajorTable'))}}
    {{ Form::label('studySelect', 'Selecteer Richting') }}
    {{Form::select('studySelect', $aStudyForm)}}
    <table id="majors" class="table"></table>
    {{ Form::label('majorName', 'Afstudeeerrichting') }}
    {{form::text('majorName','' , ['class' => 'form-control', 'placeholder' => 'Afstudeerrichting'])}}
    <div class="actions">
        {{ Form::submit('Afstudeerrichting Toevoegen') }}
        <input type="button" onclick="history.go(0)" value="Annuleren"/>
    </div>
    {{Form::close()}}

    <script type="text/javascript">
        openMajorTable();
        function openMajorTable(){
            var select = document.getElementsByName('studySelect')[0];
            var table = document.getElementById('majors');
            var majorData = <?php echo $aMajorData ?>;
            select.addEventListener('change', filter());
            function filter(){
                var studyId = select.value;
                table.innerHTML = "";
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
        }
    </script>
@endsection




