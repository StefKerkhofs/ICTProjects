@extends('admin.main')
@section('content')
    <div class="row">
        <div class="col">
            <table class="table table-hover">
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
        </div>
    </div>

@endsection