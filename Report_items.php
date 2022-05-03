

<?php include('template/header.php') ?>
<?php
if (!isset($_SESSION["userid"])) {
    
    echo '  
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    <div class="row">
  
  <div class="center-align">
  <section>
  <div class="card indigo center">
      <h4 class="center white-text"> PLEASE LOGIN TO REPORT ITEMS </h4>
      </section>
      </div>
      
    </div>
  </div> 
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    ';
  
    exit();
  }
?>

<br><br><br>

<div class="row">
  <div class="col s3 offset-s4">
    <section>
      <div class="card indigo">
        <h4 class="center white-text">
          Report
        </h4>
        <form action="includes/report.inc.php" method="post" enctype="multipart/form-data">
          <input type="text" name="Iname" placeholder="Name of item....">
          <input type="text" name="description" placeholder="item description...">
          <input type="text" name="location" placeholder="Location...">



          <br>
          <br> 

          <input type="file" name="file">

          <br>
          <br>
       <div>
         <label>  Choose a catogory  </label>
        <br>
        <br>

          <select style ="display: block;"type ="text" name="catagory">
            <option value=""> Select a catagory </option>
            <option value="Clothing">  Clothing   </option>
            <option value="Electronics">  Electronics </option>
            <option value="Other"> Other </option>

          </select>

        </div>

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
        if ($_GET["error"] == "filetoobig") {
          echo "<div class=\"card-panel red \">
        <span class=\"white-text \"> FILE TOO BIG! </span>
      </div> ";
        } else if ($_GET["error"] == "errorhappened") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Corrupt file! </span>
      </div> ";
        } else if ($_GET["error"] == "filetypenotallowed") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> Only jpg, jpeg and png allowed </span>
      </div> ";
        } else if ($_GET["error"] == "invaiditemname") {
          echo "<div class=\"card-panel red \">
          <span class=\"white-text \"> invalid Item name </span>
      ";
      }else if ($_GET["error"] == "none") {
        echo "<div class=\"card-panel green \">
        <span class=\"white-text \"> Item Sucessfully Reported, Report another Item? </span>
    ";
    }
    }
      ?>
</div>
</div>






<br><br><br><br><br><br>

<?php include('template/footer.php') ?>