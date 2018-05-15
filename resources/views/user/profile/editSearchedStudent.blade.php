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
        form p{
            clear: both;
            padding: 19px;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        <form>
            <div class="formcontainer">
                <div class="leftform">
                    <p><label class="field" for="name">Naam:</label>            <input type="text" class="textbox" value="lastname" name="lastname" ></p>
                    <p><label class="field" for="name">Voornaam:</label>        <input type="text" class="textbox" value="firstname" name="firstname"></p>
                    <p><label class="field" for="name">Geslacht:</label>        <input type="text" class="textbox" value="gender" name="gender"></p>
                    <p><label class="field" for="name">Geboortedatum:</label>   <input type="text" class="textbox" value="birthdate" name="birthdate"></p>
                    <p><label class="field" for="name">Geboorteplaats:</label>  <input type="text" class="textbox" value="birthplace" name="birthplace"></p>
                    <p><label class="field" for="name">Nationaliteit:</label>   <input type="text" class="textbox" value="nationality" name="nationality"></p>
                    <p><label class="field" for="name">Adres: </label>          <input type="text" class="textbox" value="address" name="address"></p>
                    <p><label class="field" for="name">Gemeente:</label>        <input type="text" class="textbox" value="town" name="town"></p>
                    <p><label class="field" for="name">Land:</label>            <input type="text" class="textbox" value="country" name="country"></p>
                </div>

                <div class="rightform">
                    <p><label class="field" for="name">Email:</label>           <input type="text" class="textbox" value="email" name="email"></p>
                    <p><label class="field" for="name">Telefoon:</label>        <input type="text" class="textbox" value="phone" name="phone"></p>
                    <p><label class="field" for="name">Noodnummer 1:</label>    <input type="text" class="textbox" value="emergency_phone_1" name="emergency_phone_1"></p>
                    <p><label class="field" for="name">Noodnummer 2:</label>    <input type="text" class="textbox" value="emergency_phone_2" name="emergency_phone_2"></p>
                    <p><label class="field" for="name">Behandeling:</label>     <input type="text" class="textbox" value="treatment" name="treatment"></p>
                    <p><label class="field" for="name">Medische info:</label>   <input type="text" class="textbox" value="medical_info" name="medical_info"></p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/searchStudentEdit">Annuleren</a>
                </div>
                <input type="submit" value="Opslaan">
            </div>
        </form>
    </div>
@endsection
