<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>

<br>
<br>



<?php

///// WELCOME MESSAGE///

if (isset($_SESSION["userid"])) {
    
  echo'<h1 class="center"> WELCOME TO LOSERS CIRCLE </h1> <br> <br>';

if (isset($_SESSION["admin"])){

  echo '<h1 class="center"> You are currently logged in as an admin </h1> <br> <br>';

} else{
  

  echo '<h2 class="center"> Glad to see you '. $_SESSION["name"] .'  </h2> <br> <br>';

}
  

?>

<?php
      // Error messages
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "Claimmade") {
          echo "<div class=\"card-panel green \">
        <span class=\"white-text \"> Claim Sucessfully made, view in my claims </span>
      </div> ";
        } else if ($_GET["error"] == "reportdone") {
          echo "<div class=\"card-panel green \">
          <span class=\"white-text \"> Item Sucessfully Reported, Report another Item? </span>
      ";
      } 
    }
      ?>




<?php
echo'
<p class= "center"> Our brilliant leader Elon Musk has partnered with Travis Scott to make sure all people going to Astroworld have a way to <br> find, report and retreive any lost items <br> <br></p>


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


    
}

if (!isset($_SESSION["userid"])) {
    
  echo '  
  <p class= "center"> LOGIN TO ACCESS FEATURES <br> <br></p>


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
}


?>



<?php include('template/footer.php') ?>