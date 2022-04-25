
<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>
<?php include_once('includes/dbh.inc.php')?>

<?php

$sql = "SELECT * FROM lost_items;";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

if (!isset($_SESSION["userid"])) {
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
    
    echo '  
    <br>
  <br>
  <br>
  <br>
        
        <br>
        <br>
        <br>
        
        <div class="row">
        <div class="col s12 m7">
          <div class="card medieum">
            <div>
            <li> <img src="includes/uploads/'.$row['item_picture'].'" width="200" height="200" alt="" class="responsive-img user"/></li>
              <span class="card-title white"> Item name: '.$row['Item_name'].'</span>
              <br>
              <span class="card-title white">Item location: '.$row['item_location'].'</span>
              <br>
              <span class="card-title white">Found on: '.$row['item_date'].'</span>
            </div>
            <div class="card-content">
              <p> item desctiption: <br>'.$row['item_description'].'</p>
            </div>

            </div>
          </div>
          <p> PLEASE LOG IN TO CLAIM ITEMS</p>
        </div>
      </div>
    
     
  <br>
  <br>
  <br>
  <br>
    ';
        }
  
    exit();
  }
}




if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){

        echo'
        <br>
        <br>
        <br>
        
        <div class="row">
        <div class="col s12 m7">
          <div class="card medieum">
            <div>
            <li> <img src="includes/uploads/'.$row['item_picture'].'" width="200" height="200" alt="" class="responsive-img user"/></li>
              <span class="card-title white"> Item name: '.$row['Item_name'].'</span>
              <br>
              <span class="card-title white">Item location: '.$row['item_location'].'</span>
              <br>
              <span class="card-title white">Found on: '.$row['item_date'].'</span>
            </div>
            <div class="card-content">
              <p> item desctiption: <br>'.$row['item_description'].'</p>
            </div>
          
            <form action="includes/claim.inc.php" method="post">
            <h4 class= "center" > CLAIM ITEM </h4>
            <span> Item id </span>
            <input type= "hidden"  name="Item_id" value= "'.$row['Item_id'].'  " readonly="readonly">
            <input type= "hidden"  name="Item_name" value= "'.$row['Item_name'].'  " readonly="readonly">
            <input type= "hidden"  name="Item_picture" value= "'.$row['item_picture'].'  " readonly="readonly">

            <br>
            <input type="text" name="claimreason" placeholder="Reason for claim" size ="3" > 
            <br>
            <br>
            <div class="center">
              <input type="submit" name="report" class="btn green brand">
            </div>
            <br>
          </form>

            </div>
          </div>
        </div>
      </div>
     ' ;


    }

}

?>



<br>




<?php include('template/footer.php') ?>
