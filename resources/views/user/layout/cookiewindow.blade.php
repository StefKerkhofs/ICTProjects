

@if(!isset($_COOKIE['cookieGDPR']))
    <style>
        .cookiepopup {
            background:#e1e1e1;
            top:200px;
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
        <button type="button" class="acceptCookie"> Accepteer </button>
    </div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/JavaScript">
        $('.acceptCookie').click(function() {
            Cookies.set('cookieGDPR', 'yes', {expires: 7 });
            location.reload();
            })
    </script>
@endif