

@if(!isset($_COOKIE['cookieGDPR']))
    <style>
        .cookiepopup {
            background:#e1e1e1;
            top:100px;
            left:25%;
            width:50%;
            position:absolute;
            z-index:41;
            padding:30px;
            -webkit-box-shadow:0 0 10px rgba(0,0,0,0.4);
            -moz-box-shadow:0 0 10px rgba(0,0,0,0.4);
            box-shadow:0 0 10px rgba(0,0,0,0.4)
        }
        button {
            display: block;
            margin: auto;
        }
    </style>
    <div class="cookiepopup">
        <p>Deze site bevat cookies die je inloggegevens bewaren zodat je je niet iedere keer terug hoeft in te loggen.</p>
        <button type="button"> Accepteer </button>
    </div>
@endif