@extends('admin.templates.templateBackend')
@section('content')
<style>
    #content-left
    {width: 40%;
        display:flex;

        justify-content: flex-start;
    }
    #content-right
    {width: 40%;
        display:flex;

        justify-content: flex-end;
    }


</style>
<div id="content-left">
    <table id="studyTable">
        <thead>
        <tr>
            <th>Richtingen</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aStudyData = DB::table('studies')->get() as $oStudy)
            <tr>
                <td> {{$oStudy->study_name}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div id="content-right">
    <table id="majorTable">
        <thead>
        <tr>
            <th>Afstudeerrichtingen</th>

        </tr>
        </thead>
        <tbody>
        @foreach($aMajorData = DB::table('majors')->get() as $oMajor)
            <tr>
                <td> {{$oMajor->major_name}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>





@endsection


<!--

-->