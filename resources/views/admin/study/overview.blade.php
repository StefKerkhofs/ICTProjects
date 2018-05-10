@extends('admin.templates.templateBackend')
@section('content')

    <table id="studyTable">
        <thead>
        <tr>
            <th> Study ID</th>
            <th> Study Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aStudyData = DB::table('studies')->get() as $oStudy)
            <tr>
                <td> {{$oStudy->study_id}} </td>
                <td> {{$oStudy->study_name}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <table id="majorTable">
        <thead>
        <tr>
            <th> Major ID</th>
            <th> Major Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aMajorData = DB::table('majors')->get() as $oMajor)
            <tr>
                <td> {{$oMajor->major_id}} </td>
                <td> {{$oMajor->major_name}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection


<!--

-->