<?php


require_once "dbh.inc.php";
require_once 'functions.inc.php';

if (isset($_POST["submit"])) {

  session_start();

  $file = $_FILES['file'];

  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png');

  if(in_array($fileActualExt, $allowed )){
     if($fileError === 0){
         if($fileSize < 1000000){

          $fileNameNew = uniqid('', true).".".$fileActualExt;
          $fileDestination = 'uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
          
      } else{
        ///file too big
        header("location: ../Report_items.php?error=filetoobig");
		exit();

      }
}else {

  //error happened
  header("location: ../Report_items.php?error=errorhappened");
  exit();
} 

  } else{
    //type not allowed
    header("location: ../Report_items.php?error=filetypenotallowed");
		exit();
  }


  


  $item_name = $_POST["Iname"];
  $item_description = $_POST["description"];
  $item_picture = $fileNameNew;
  $item_finder = $_SESSION["name"];
  $item_date = date("Y/m/d");
  $item_catagory = $_POST["catagory"];
  $item_location = $_POST["location"];
 



 
   //if (EmptyReportInput($item_name,  $item_description, $item_finder,  $item_picture, $item_date, $item_catagory ) !== false) {
   // header("location: ../Report_items.php?error=emptyinput");
	//	exit();
  // }
	// Proper name chosen
  if (invaiditemname($item_name) !== false) {
    header("location: ../Report_items.php?error=invaiditemname");
		exit();
  }


  // Now we insert the user into the database
  InsertItem($conn, $item_name, $item_description, $item_finder, $item_picture, $item_date, $item_catagory, $item_location);

 // header("location: ../Report_items.php?error=none");

} else {
	header("location: ../index.php");
    exit();
}