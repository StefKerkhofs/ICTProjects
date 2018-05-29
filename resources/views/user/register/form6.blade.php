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
            margin-top: -20px;
            padding: 19px;
        }
        .select{
            width: 250px;
            float: left;
            padding-left: 1px;
        }

    </style>
@endsection
@section('content')
    <div class="container">
        {{ Form::open(array('action' => 'RegisterController@form6POST', 'method' => 'post')) }}
            <div class="formcontainer">
                <div class="leftform">
                    <?php $aData = unserialize($_COOKIE['register']) ?>
                    <p><label class="field" for="name">Naam: </label>            <span><?php echo $aData['lastname']?></span></p>
                    <p><label class="field" for="name">Voornaam: </label>        <span><?php echo $aData['firstname']?></span></p>
                    <p><label class="field" for="name">Geslacht: </label>        <span><?php echo $aData['gender']?></span></p>
                    <p><label class="field" for="name">Geboortedatum: </label>   <span><?php echo $aData['birthdate']?></span></p>
                    <p><label class="field" for="name">Geboorteplaats: </label>  <span><?php echo $aData['birthplace']?></span></p>
                    <p><label class="field" for="name">Nationaliteit: </label>   <span><?php echo $aData['nationality']?></span></p>
                    <p><label class="field" for="name">Adres:  </label>          <span><?php echo $aData['address']?></span></p>
                    <p><label class="field" for="name">Gemeente: </label>        <span><?php echo $aData['Postcode']?></span></p>
                    <p><label class="field" for="name">Land: </label>            <span><?php echo $aData['country']?></span></p>
                </div>

                <div class="rightform">
                    <p><label class="field" for="name">Email: </label>           <span><?php echo $aData['email']?></span></p>
                    <p><label class="field" for="name">Telefoon: </label>        <span><?php echo $aData['gsm']?></span></p>
                    <p><label class="field" for="name">Noodnummer 1: </label>    <span><?php echo $aData['NoodNummer1']?></span></p>
                    <p><label class="field" for="name">Noodnummer 2: </label>    <span><?php echo $aData['NoodNummer2']?></span></p>
                    <p><label class="field" for="name">Behandeling:</label>      <span><?php echo $aData['MedischeAandoening']?></span></p>
                    <p><label class="field" for="name">Medische info: </label>   <span><?php echo $aData['MedischeInfo']?></span></p>
                </div>
            </div>
            <div class="formbutton">
                <div class="button">
                    <a class="nav-link" href="/">Annuleren</a>
                </div>
                <input type="submit" value="Bevestigen">
            </div>
        </form>
    </div>
@endsection