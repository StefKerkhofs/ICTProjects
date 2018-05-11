@extends('admin.main')
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

<table>
    <thead>
    <tr>
        <th>Richtingen</th>
    </tr>
    </thead>
    <tbody>
    @foreach($aStudyData as $oStudyData)
    <tr>
        <td>{{ $oStudyData->study_name }}</td>
    </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <td class="row">
            <div class="col-9">
                <input type="text" class="form-control"/>
            </div>
            <div class="col-3">
                <button type="submit" class="form-control">+</button>
            </div>
        </td>
    </tr>
    </tfoot>
</table>
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