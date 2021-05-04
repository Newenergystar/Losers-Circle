<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>
<?php include('database/querys.php') ?>


<?php
if (isset($_SESSION["useruid"])) {
    echo '<div> Hello there ' .  $_SESSION["useruid"] . '</div>';
} else {

    echo '  
    <div class="row">
  
<div class="col s4 offset-s4">
<section>
  <div class="card indigo">
      <h4 class="center white-text"> PLEASE LOGIN TO VIEW ANIMALS </h4>
      </section>
      </div>
      
    </div>
  </div> 
  
    ';
}









include('template/footer.php');
