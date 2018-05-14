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
            padding:4px;
        }
        .leftform{
            width: 500px;
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
            font-weight: bold;
            display:flex;
            justify-content:center;
            align-items:center;
            color: #FFF;
            border: none;
            width: 275px;
            height: 70px;
            margin: 10px;
        }
        .formbutton input{
            background: #003469;
            font-weight: bold;
            color: #FFF;
            border: none;
            width: 275px;
            height: 70px;
            margin: 10px;
        }
        label.field{
            text-align: left;
            width: 150px;
            float: left;
        }
        input.textbox{
            width: 250px;
            float: left;
        }
        form p{
            clear: both;
            padding: 20px;
        }

    </style>
@endsection
@section('content')
    <form>
        <div class="formcontainer">
            <div class="leftform">
                <p><label class="field" for="name">Naam:</label>            <input type="text" class="textbox" value="" name="lastname" ></p>
                <p><label class="field" for="name">Voornaam:</label>        <input type="text" class="textbox" value="" name="firstname"></p>
                <p><label class="field" for="name">Geslacht:</label>        <input type="text" class="textbox" value="" name="gender"></p>
                <p><label class="field" for="name">Geboortedatum:</label>   <input type="text" class="textbox" value="" name="birthdate"></p>
                <p><label class="field" for="name">Geboorteplaats:</label>  <input type="text" class="textbox" value="" name="birthplace"></p>
                <p><label class="field" for="name">Nationaliteit:</label>   <input type="text" class="textbox" value="" name="nationality"></p>
                <p><label class="field" for="name">Adres: </label>          <input type="text" class="textbox" value="" name="address"></p>
                <p><label class="field" for="name">Gemeente:</label>        <input type="text" class="textbox" value="" name="town"></p>
                <p><label class="field" for="name">Land:</label>            <input type="text" class="textbox" value="" name="country"></p>
            </div>

            <div class="rightform">
                <p><label class="field" for="name">Email:</label>           <input type="text" class="textbox" value="" name="email"></p>
                <p><label class="field" for="name">Telefoon:</label>        <input type="text" class="textbox" value="" name="phone"></p>
                <p><label class="field" for="name">Noodnummer 1:</label>    <input type="text" class="textbox" value="" name="emergency_phone_1"></p>
                <p><label class="field" for="name">Noodnummer 2:</label>    <input type="text" class="textbox" value="" name="emergency_phone_2"></p>
                <p><label class="field" for="name">Behandeling:</label>     <input type="text" class="textbox" value="" name="treatment"></p>
                <p><label class="field" for="name">Medische info:</label>   <input type="text" class="textbox" value="" name="medical_info"></p>
            </div>
        </div>
        <div class="formbutton">
            <a class="nav-link" href="/profile">Annuleren</a>
            <input type="submit" value="Opslaan">
        </div>
    </form>
@endsection
