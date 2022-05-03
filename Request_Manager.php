
<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>
<?php include_once('includes/dbh.inc.php')?>


<?php

if(!isset($_SESSION["admin"])){  

  echo '  
  <p class= "center"> YOU DONT HAVE ACCESS TO THIS CONTENT <br> <br></p>


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




<?php

$sql = "SELECT * FROM claim;";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

    if(isset($_POST['approve']))
    {
      $itemid = $_POST["Item_id"];
        require 'includes/dbh.inc.php';

        $sth = $conn->prepare("UPDATE claim SET Claim_status = 'True' WHERE Claim_id= '$itemid' ");
        $sth->execute();
        header("location: ./index.php?error=none");

        die("Posted, now redirecting");
    }

    if(isset($_POST['deny']))
    {
      $itemid = $_POST["Item_id"];
      require 'includes/dbh.inc.php';

      $sth = $conn->prepare("UPDATE claim SET Claim_status = 'False' WHERE Claim_id= '$itemid' ");
      $sth->execute();

      die("Posted, now redirecting");
    }


if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
    
    
        echo '  
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
                  <br>
                </div>
                <div class="card-content">';

                if ($row['Claim_status'] === 'True'){


                  echo '
                  <div class="row">
        
                  <div class="col s3 offset-s4">
                  <section>
                  <div class="card green center">
                  <br>
                      <h4 class="center white-text"> You have approved this claim </h4>
                      <br>
                      </section>
                      </div>
                      
                    </div>
                  </div> 
        
                  
                  ';
        
        
        
        
              }
        
              if ($row['Claim_status'] === 'False'){
        
        
                  echo '
                  <div class="row">
        
                  <div class="col s3 offset-s4">
                  <section>
                  <div class="card red center">

                  <br>
                      <h4 class="center white-text">You have rejected this claim </h4>
                      <br>
                      </section>
                      </div>
                      
                    </div>
                  </div> 
        
                  
                  ';
        
        
            
            }






                echo '

                <p> Claim Userid: <br>'.$row['Item_claimer'].'</p>
                  <p> Claim reason: <br>'.$row['Item_Creason'].'</p>
                


                <br>
                <form method="POST" action="Request_Manager.php">
                <input type= "hidden"  name="Item_id" value= "'.$row['Claim_id'].'  " readonly="readonly">
                <div class="center">
                <input type="submit" name="approve" class="btn green brand" value= "Approve">
              </div>
            </form>
             <br>

            <form method="POST" action="Request_Manager.php">
            <input type= "hidden"  name="Item_id" value= "'.$row['Claim_id'].'  " readonly="readonly">
                <div class="center">
                <input type="submit" name="deny" class="btn red brand"  value= "Deny">
              </div>
            </form>
      <br>
                </div>
              </div>
            
            </div>
          </div>
        
        ';

    



}
}
   
   
   
   
   
   
   ?>


<?php include('template/footer.php') ?>