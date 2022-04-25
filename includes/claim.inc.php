<?php



require_once "dbh.inc.php";
require_once 'functions.inc.php';


if (isset($_POST["report"])) {
  

    session_start();
    $itemp = $_POST["Item_id"];

  $name = $_SESSION['userid'];
  $item = "$itemp";
  $claimreason = $_POST["claimreason"];
  $itemname = $_POST["Item_name"];
  $itempic = $_POST["Item_picture"];



  InsertClaim($conn, $item, $name, $claimreason, $itemname, $itempic);

header("location: ../index.php?error=Claimmade");



}
