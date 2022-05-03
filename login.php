<?php include('template/header.php') ?>

<?php


if (isset($_SESSION["userid"])) {
    
    echo '  
    <p class= "center"> YOU ARE AREADY LOGGED IN <br> <br></p>
  
  
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-third w3-center">
        <li><img src="img/Capture.PNG"  width="300" height="200" style ="margin-top: 12px" alt="" class="responsive-img user" /></li>
        </div>
    
        <div class="w3-twothird center">
          <h3>ASTROWORLD X LOSERS CIRCLE</h3>
          <h5 class="w3-padding-32 center"> Every year thousands of people lose their items at astroworld, with Losers Circle you can claim and report lost items.</h5>
    
          <p class="w3-text-grey"> </p>
        </div>
      </div>
    </div>
  ';

  exit();
  }

  ?>

<!-- Login form -->
<br><br><br><br>
<div class="row">
  
  <div class="col s3 offset-s4">
  <section>
    <div class="card indigo">
        <h4 class="center white-text"> Login </h4>
        <form action="includes/login.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username/Email..." class="center">
          <input type="password" name="pwd" placeholder="Password..." class= "center">
          <br>
          <br>
          <div class="center">
            <input type="submit" name="login" class="btn green brand">
          </div>
          <br>
        </form>
        <br>
        <br>

        <?php
    // Error messages
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<div class=\"card-panel\">
        <span class=\"blue-text text-darken-2\"> Please fill in login infromation </span>
      </div> ";
      } else if ($_GET["error"] == "wronglogin") {
        echo "<div class=\"card-panel\">
        <span class=\"blue-text text-darken-2\"> Incorrect login information </span>
      </div> ";
      }
    }
    ?>
      </section>
    </div>
    
  </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br>

<?php include('template/footer.php') ?>