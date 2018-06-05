@extends('admin.main')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <h2>Postcodes</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Postcode</th>
            <th>Gemeente</th>
        </tr>
        </thead>
        <tbody>
        @foreach($aZipData as $oZipData)
            <tr onclick="tableOnClick({{$oZipData->zip_id}})">
                <td>{{ $oZipData->zip_code }}</td>
                <td>{{ $oZipData->zip_town }}</td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr><td colspan="3"><a href="{{ url('admin/zip/add') }}" class="button">Nieuwe Gemeente</a></td></tr>
        </tfoot>
    </table>
@endsection