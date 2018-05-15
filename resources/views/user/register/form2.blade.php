@extends("user.templates.templateFrontEnd")
@section('style')
    <style>
        /*
        body{
            background: #E9F3F8;
        }
        .container{
            background: #FFF;
            height: auto;
            font-weight: bold;
            color: #003469;
            overflow: hidden;
            margin-top: 20px;
        }
         */
        .formcontainer{
            display:flex;
            justify-content:center;
            align-items:center;
            padding-top:20px;
        }
        .leftform{

            height: 500px;
            float:left;
        //border: 1px solid red;
        }
        .rightform{
            height: 500px;
        //border: 1px solid green;
            float: left;
        }
        .formbutton{
        //border: 1px solid blue;
            display:flex;
            justify-content:center;
            align-items:center;
            margin: 5px;
        }
        .button a{
            background: #003469;
            border: none;
            width: 275px;
            height: 70px;
            margin: 20px;
            font-weight: bold;
            display:flex;
            justify-content:center;
            align-items:center;
            color: #FFF;
            text-transform: none;
        }
        .formbutton input{
            background: #003469;
            font-weight: bold;
            color: #FFF;
            border: none;
            width: 275px;
            height: 70px;
            margin: 20px;
        }
        label.field{
            text-align: left;
            width: 150px;
            float: left;
        }
        input.textbox{
            width: 250px;
            float: left;
            padding-left: 1px;
        }
        .select{
            width: 250px;
            float: left;
            padding-left: 1px;
        }
        form p{
            clear: both;
            padding: 19px;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        {{ Form::open(array('action' => 'RegisterController@form3', 'method' => 'post')) }}
            <div class="formcontainer">
                <div class="middleform">
                    <p><label class="field" for="name">Reis*</label></p>
                    <p>
                        <select name="ReisKiezen" class="select">
                            <option value="1">Cup</option> <!-- Suppose this option selected -->
                            <option value="2">Pen</option>
                            <option value="3">Book</option>
                        </select>
                    </p>
                    <p><label class="field" for="name">Afstudeerrichting*</label></p>
                    <p>
                        <select name="AfstudeerrichtingKiezen"class="select">
                            <option value="1">Cup</option> <!-- Suppose this option selected -->
                            <option value="2">Pen</option>
                            <option value="3">Book</option>
                        </select>
                    </p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/reg/form3">Annuleren</a>
                </div>
                <input type="submit" value="Opslaan">
            </div>
        </form>
    </div>
@endsection