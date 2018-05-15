@extends('admin.main')
@section('content')
    <h4>Richtingen</h4>
    {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post'))}}
    {{Form::select('studySelect', $aStudyForm)}}
    {{form::text('majorName')}}
    {{Form::submit('+')}}
    {{Form::close()}}

    <h4>Afstudeerrichtingen</h4>

    {{Form::open(array('action' => 'AdminStudyController@addStudy', 'method' => 'post'))}}
    {{form::text('studyName')}}
    {{Form::submit('+ ')}}
    <table id = "majors">
        @foreach($aMajorData = DB::table('majors')->get() as $oMajor)
            <tr>
                <td>
                    {{$oMajor->major_name}}
                </td>
            </tr>
        @endforeach
    </table>
<script type="text/javascript">
    var select = document.getElementsByName('studySelect')[0];
    var table = document.getElementById('majors');
    console.log(select);
    var majorData = <?php echo $aMajorData ?>;
    console.log(studyData);
    console.log(majorData);
    select.addEventListener('change', function () {
        var studyId = select.value;
        alert(studyId);
        table.innerHTML = "";
    })
</script>

@endsection