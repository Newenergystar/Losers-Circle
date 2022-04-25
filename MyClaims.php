
<!DOCTYPE html>
<html>

<?php include('template/header.php') ?>
<?php include_once('includes/dbh.inc.php')?>

<?php


$sql = "SELECT * FROM claim;";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);


if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){

        if ($_SESSION['userid'] == $row["Item_claimer"]){


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
                    <div class="card-content">
                      <p> CLAIM REASON: <br>'.$row['Item_Creason'].'</p>
                    </div>
        
                    </div>
                  </div>
                
                </div>
              </div>
            
            ';

            if ($row['Claim_status'] === ''){


                echo '
                <div class="row">
  
                <div class="col s3 offset-s1">
                <section>
                <div class="card indigo center">
                    <h4 class="center white-text"> Your claim request is being processed </h4>
                    <br>
                    </section>
                    </div>
                    
                  </div>
                </div> 

                
                ';




            }
            if ($row['Claim_status'] === 'True'){


                echo '
                <div class="row">
  
                <div class="col s3 offset-s1">
                <section>
                <div class="card green center">
                    <h4 class="center white-text"> Your claim request was successful </h4>
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
  
                <div class="col s3 offset-s1">
                <section>
                <div class="card red center">
                    <h4 class="center white-text"> Your claim request is was rejected </h4>
                    <br>
                    </section>
                    </div>
                    
                  </div>
                </div> 

                
                ';




            }
                 
        
        }

    
        

        

    }
}
?>


<?php include('template/footer.php') ?>