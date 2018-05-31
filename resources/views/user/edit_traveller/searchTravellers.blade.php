@extends("user.templates.templateFrontEnd")
@section('title') <title>Editeer</title>
@section('style')
    <meta name="_token" content="{{ csrf_token() }}">

    <style>
        .searchdiv{
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
        .search input{
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
            overflow:hidden; overflow-y:scroll;
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
        <div class="searchdiv">
            <div class="search">
                <input type="text" class="form-controller" id="search" name="search">
                <img src="{{asset("/image/magnifying_glass.png")}}" alt="magnifying_glass.png" height="45" width="45"/>
            </div>
        </div>
        <div class="tablediv">
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Klas</th>
                    <th></th>
                </tr>
                </thead>
                @foreach($aTravellers as $traveller => $data)
                    <tr>
                        <td>{{$data->lastname}}</td>
                        <td>{{$data->firstname}}</td>
                        <td>{{$data->study_name}}&nbsp {{$data->major_name}}</td>
                        <td><a href="/editTraveller/{{$data->user_id}}"><img src="{{asset("/image/pen.png")}}" alt="pen.png" height="40" width="40"/></a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $('#search').on('keyup',function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{URL::to('search')}}',
                data: {'search': $value},
                success: function (data) {
                    $('tbody').html(data);
                }
            });
        });
    </script>
    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
    {{--
    <div class="container">
        <div class="searchdiv">
            <div class="search">
                    <input type="text" class="form-controller" id="search" name="search">
                    <img src="{{asset("/image/magnifying_glass.png")}}" alt="magnifying_glass.png" height="45" width="45"/>
            </div>
        </div>

        <div class="tablediv">
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Voornaam</th>
                    <th>Klas</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
                @foreach($aTravellers as $traveller => $data)
                <tr>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->firstname}}</td>
                    <td>{{$data->study_name}}&nbsp {{$data->major_name}}</td>
                    <td><a href="/editTraveller/{{$data->user_id}}"><img src="{{asset("/image/pen.png")}}" alt="pen.png" height="40" width="40"/></a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


    <script type="text/javascript">
        $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type : 'get',
                url : '{{URL::to('/searchTravellers')}}',
                data:{'search':$value},
                success:function(data){
                    $('tbody').html(data);
                }
            });
        });
    </script>
--}}
@endsection