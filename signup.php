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


<!-- Sign up HTML-->
<br><br><br><br>
<div class="row">
  <div class="col s3 offset-s4">
    <section>
      <div class="card indigo">
        <h4 class="center white-text">
          Register
        </h4>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="name" placeholder="Full name...">
          <input type="text" name="email" placeholder="Email...">
          <input type="text" name="uid" placeholder="Username...">
          <input type="password" name="pwd" placeholder="Password...">
          <input type="password" name="pwdrepeat" placeholder="Repeat password...">
          <br>
          <br>

          <div class="center">
            <input type="submit" name="signup" class="btn green brand">
          </div>
          <br> <br>
        </form>
      </div>
      <?php
      // Error messages
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<div class=\"card-panel red \">
        <span class=\"white-text \"> Fill in Information! </span>
      </div> ";
        } else if ($_GET["error"] == "invaliduid") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Invalid Username! </span>
      </div> ";
        } else if ($_GET["error"] == "invalidemail") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Invalid email! </span>
      </div> ";
        } else if ($_GET["error"] == "passwordsdontmatch") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Passwords do not match! </span>
      </div> ";
        } else if ($_GET["error"] == "stmtfailed") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Error please try again! </span>
      </div> ";
        } else if ($_GET["error"] == "usernametaken") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Username taken! </span>
      </div> ";
        } else if ($_GET["error"] == "none") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Sucessfully Registered, Please Log in. </span>
      </div> ";
        }
      }
      ?>
      <br>
    </section>
  </div>
</div>

</div>



</div>

<br><br><br><br><br><br>
<?php include('template/footer.php') ?>