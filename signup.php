<?php include('template/header.php') ?>
<!-- Sign up HTML-->

<div class="row">
  <div class="col s6 offset-s3">
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
            <input type="submit" name="submit" class="btn green brand">
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

<?php include('template/footer.php') ?>