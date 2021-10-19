<!DOCTYPE html>
<html>
<head>
    <title>Mobile Web</title>
    
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="./public/images/icon.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <link rel="apple-touch-icon-precomposed" href="./public/images/icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="../public/images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="./public/images/icon.png">
</head>
<style>    
    .center {
        margin: auto;
        width: 50%;
        border: 3px solid black;
        padding: 10px;
    }
</style>

<body background="./public/images/bg.jpg">
    <br>
    <center><img src="public/images/icon.png" alt="icon" width="200" height="200" style="text-align: center;"></center>
    <h3 style="text-align: center;">Storytelling Login</h3>
    <br>
    <div class="">


       
        <div style="text-align:center">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="username-label">
                <label class="mdl-textfield__label" for="username">username</label>
            </div>
            <br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="pw-label">
                <label class="mdl-textfield__label" for="pw">password</label>
            </div>
            <br>
            <br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="sign_btn">
                Sign In
            </button>
        </div>
    </div>


</body>
</html>

<script type="text/javascript">
    document.getElementById("sign_btn").onclick = function () {
        window.location.href =  "view/main.php";
    };
</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>