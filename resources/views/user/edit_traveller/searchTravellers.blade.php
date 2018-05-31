@extends("user.templates.templateFrontEnd")
@section('style')
    <style>
        .topdiv{
            //border: 1px solid orangered;
            display:flex;
            justify-content: flex-end;
            align-items:center;
            margin: 15px 0px;
        }
        .search{
            margin: 20px;
            float: right;
            border: 1px solid black;
            font-size: 2em;
            display:flex;
            justify-content: center;
            align-items:center;
        }
        .search .input{
            width: 300px;
            height: 50px;
            border: transparent;
            border-right: none;
            outline: none;
            padding-left: 5px;
            float: left;
        }
        table, th, td {
            border: 1px solid darkgray;
            border-collapse: collapse;
        }
        table{
            margin-bottom: 20px;
        }
        th{
            text-align: center;
            background-color: #e00049;
            color: #E9F3F8;
        }
        th:not(:last-child){
            height: 50px;
            width: 350px;
        }
        td:not(:last-child){
            padding: 15px;
            text-align: left;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="topdiv">
            <div class="search">
                {{ Form::open(array('action' => 'EditTravellerController@searchTravellers', 'method' => 'post')) }}
                <p><input type="text" id="lastname" name="lastname" class="input"/><input type="image" name="submit"  src="{{asset("/image/magnifying_glass.png")}}" alt="magnifying_glass.png" height="45" width="45" style="float:right" /></p>
                {{ Form::close() }}
            </div>
        </div>

        <div class="tablediv">
            <table>
                <tr>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Klas</th>
                    <th></th>
                </tr>
                {{--@for($i = 0; $i<5; $i++)--}}
                @foreach($aTravellers as $traveller => $data)
                <tr>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->firstname}}</td>
                    <td>{{$data->study_name}}&nbsp {{$data->major_name}}</td>
                    <td><a href="/editTraveller/{{$data->user_id}}"><img src="{{asset("/image/pen.png")}}" alt="pen.png" height="40" width="40"/></a></td>
                </tr>
                @endforeach
                {{--@endfor--}}
            </table>
        </div>

    </div>
@endsection