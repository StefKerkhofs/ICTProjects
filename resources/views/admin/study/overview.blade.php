@extends('admin.main')
@section('content')
    <h4>Richtingen</h4>
    {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post', 'onchange' => 'openMajorTable'))}}
    {{Form::select('studySelect', $aStudyForm)}}
    {{form::text('majorName')}}
    {{Form::submit('+')}}
    {{Form::close()}}

    <h4>Afstudeerrichtingen</h4>

    {{Form::open(array('action' => 'AdminStudyController@addStudy', 'method' => 'post'))}}
    {{form::text('studyName')}}
    {{Form::submit('+ ')}}
    <table id = "majors">
    </table>
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




