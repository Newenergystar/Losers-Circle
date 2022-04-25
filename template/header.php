

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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Losers Circle</title>
</head>

<body class = "grey lighten-4">
  
<nav class="nav-wrapper  indigo darken-3">
            <div class="container">
            <ul class="left">
				<li><img src="img\Logo1.png"  width="50" height="50" style ="margin-top: 2px" alt="" class="responsive-img user" /></li>
                <a href="#" class="brand-logo">Losers Circle</a>
             </ul>
                <a href="#" class="sidenav-trigger" data-target="mobile-links">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">






        
                    <li><a href="index.php">Home</a></li>
                    <?php

                     if(isset($_SESSION["name"])){
                        
                          //////// ADMIN HEADER//////

                        if(isset($_SESSION["admin"])){  
                            echo'<li><a href="Request_Manager.php" class= "waves-effect waves-light btn-small red">Requests</a></li>';
                            echo'<li><a href="logout.php" class= "waves-effect waves-light btn-small red">Logout</a></li>';
                        }
                        elseif(!isset($_SESSION["admin"])){

                        //////// User Header////

                        echo'<li><a href="Lost_items.php">Lost Items</a></li>';
                        echo'<li><a href="Report_items.php">Report Lost Item</a></li>';
                        echo'<li><a href="MyClaims.php"> My Claims </a></li>';

                        echo'<li><a href="logout.php" class= "waves-effect waves-light btn-small red">Logout</a></li>';
                        }
                    }
                  

                    //// NON USER HEADER////
                     else{
                        echo'<li><a href="Lost_items.php">Lost Items</a></li>';
                        echo'<li><a href="login.php">Login</a></li>';
                        echo'<li><a href="signup.php">Sign Up</a></li>';
                        
                    }
                    ?>
                </ul>
            </div>
        </nav>
        
    </div>

    
    
    <ul class="sidenav" id="mobile-links">
    
     <li><a href="index.php">Home</a></li>
     <?php

                     if(isset($_SESSION["name"])){
                        
                          //////// ADMIN HEADER//////

                        if(isset($_SESSION["admin"])){  
                            echo'<li><a href="Request_Manger.php" class= "waves-effect waves-light btn-small red">Requests</a></li>';
                            echo'<li><a href="logout.php" class= "waves-effect waves-light btn-small red">Logout</a></li>';
                        }
                        
                        elseif(!isset($_SESSION["admin"])){

                        //////// User Header////

                        echo'<li><a href="Lost_items.php">Lost Items</a></li>';
                        echo'<li><a href="Report_items.php">Report Lost Item</a></li>';
                        echo'<li><a href="MyClaims.php"> My Claims </a></li>';

                        echo'<li><a href="logout.php" class= "waves-effect waves-light btn-small red">Logout</a></li>';
                        }
                    }
                  

                    //// NON USER HEADER////
                     else{
                        echo'<li><a href="login.php">Login</a></li>';
                        echo'<li><a href="signup.php">Sign Up</a></li>';
                    }
                    ?>
                
            
            
            
    </ul>      
            

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.sidenav').sidenav();
        });
        </script>
