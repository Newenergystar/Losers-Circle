<?php include('template/header.php') ?>


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