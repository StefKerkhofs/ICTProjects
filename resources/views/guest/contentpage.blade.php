@extends('user.templates.templateFrontEnd')
@section('title')
    <title>Reizen IWT</title>
@section('style')
    <style>
        .container{
            margin-bottom: 100px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        @if($sType == "pdf")
            <embed style="margin: auto; display: block;" src="storage/pdf/{{$sContent}}" type="application/pdf" width="90%" class="responsive" height="600px" />
        @else
            {!! $sContent !!}
        @endif

    </div>
@endsection
