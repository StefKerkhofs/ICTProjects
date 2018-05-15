@extends('admin.main')
@section('content')
    <h4>Richtingen</h4>
    {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post'))}}
    {{Form::select('studySelect', $aStudyForm), ['onChange'=>"filterMajors($aStudyData, $aMajorData)"]}}
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
    filterMajors = function(aStudyData, aMajorData){

        fore
           var studies = {
               id: aStudyData['study_id'],

           }




    }
</script>

@endsection