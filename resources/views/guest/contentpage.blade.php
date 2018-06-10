@extends('user.templates.templateFrontEnd')

@section('content')
    <div class="container">
        @if($sType == "pdf")
            <embed style="margin: auto; display: block;" src="storage/pdf/{{$sContent}}" type="application/pdf" width="90%" class="responsive" height="600px" />
        @else
            {!! $sContent !!}
        @endif

    </div>
@endsection
