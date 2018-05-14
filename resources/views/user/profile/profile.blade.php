<!DOCTYPE html>
<html>
<head>
    <title>Profile @section('title') @endsection()</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('css/template.css')}}" rel="stylesheet">

</head>
<body>
@section('userbar')
    @include('user.inc.header')
@section('headbar')
    @include('user.inc.nav')
@show

<div class="container">
    @section('content')@endsection
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
                <input type="submit" value="Aanpassen">
            </div>
        </form>

</div>

<div class="footer">
    @section('footer')
        @include('user.inc.footer')
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>