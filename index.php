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
<body>
    <br>
    <img src="public/img/icon.png" alt="icon" width="300" height="300" style="text-align: center;">
    <h1 style="text-align: center;">Login</h1>
    <br>
    <!-- <?php 
    include("public/php/routing.php");
    ?> -->
    <br>
    <div class="">
        <div style="text-align:center">
            <div><h3>Username</h3><input class="mdl-textfield__input" type="text" placeholder="username"></input></div>

            <div><h3>Password</h3><input class="mdl-textfield__input" type="text" placeholder="passowrd"></input></div>

            <br>
            <br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="sign_btn">Sign In</button>
        </div>
    </div>


</body>
</html>

<script type="text/javascript">
    document.getElementById("sign_btn").onclick = function () {
        window.location.href =  "view/Dashboard.html";
    };
</script>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>