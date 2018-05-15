@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col">
                    <h3>Richtingen</h3>


            {{Form::open(array('action' => 'AdminStudyController@addStudy', 'method' => 'post'))}}
            {{form::select('studySelect', $aStudyForm)}}
            {{Form::submit('+')}}
            {{Form::close()}}
        </div>
        <div class="col">
            <table id="majorTable" class="table table-hover">
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
                <tfoot>
                <tr>
                    <td class="row">
                        {{Form::open(array('action' => 'AdminStudyController@addMajor', 'method' => 'post'))}}
                        {{form::text('majorName', '', ['class' => 'col-xs'])}}
                        {{Form::submit('+'),'', ['class' => 'btn-xs']}}
                        {{Form::close()}}
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection