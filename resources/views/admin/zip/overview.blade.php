@extends('admin.main')
@section('content')
    <a href="{{ url('admin/zip/add') }}">+</a>
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
    </table>
@endsection