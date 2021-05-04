

<?php

session_start();
 
include_once "includes/dbh.inc.php";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LOAD SCRIPTS HERE :3 -->

    <!-- This is the materilise CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- This is the google styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Aston Adopts</title>
</head>

<body class = "grey lighten-4">
  
<nav class="nav-wrapper  indigo darken-3">
            <div class="container">
                <a href="#" class="brand-logo">Aston Adopts</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="" class="waves-effect waves-light btn-small"> Make an adoption Request</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <ul class="sidenav" id="mobile-links">
        <li><a href="">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="">Contact</a></li>
    </ul>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
        </script>
