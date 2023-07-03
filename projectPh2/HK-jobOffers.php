<?php include("Hk-header.php");?>
    
<div class="container2">
   <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; 
      font-size: 40px ; margin-left: 50px; font-family: 'Courier New', monospace; margin-top: -10px;">
      Jobs you received:    <br>
      <br>
   </p>

   <div class="row">
    <?php 
       if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if(isset($_POST["btn_price_submit"])){
       
              $ho_user_id = sanitizeInput($_POST["ho_user_id"]);
              $hk_user_id = sanitizeInput($_POST["hk_user_id"]);
              $req_id = sanitizeInput($_POST["req_id"]);
              $status = sanitizeInput($_POST["status"]);
              $price = sanitizeInput($_POST["price"]);

              $ins = "INSERT INTO selected_request(`ho_user_id`,`hk_user_id`,`req_id`,`price`,`status`) 
                      VALUES('$ho_user_id','$hk_user_id','$req_id','$price','$status')";
              $QRIN = mysqli_query($conf,$ins) or die(mysqli_error($conf));
              if($QRIN){
                echo "<script>alert('Price Sent Successfuly');</script>";
                header("location:HK-jobOffers.php");
              }
          }
       }
       //----------------------- Fetch all requests 
        $sel_all_av = "SELECT * FROM ho_requests , users  WHERE r_id ".
                        "not in(SELECT req_id FROM selected_request ".
                                "WHERE status='Pending' ".
                                "and hk_user_id='".$_SESSION["User_code"]."') 
                                  and ho_requests.user_id = users.id";
                              //  echo $sel_all_av; exit;
        $qr = mysqli_query($conf,$sel_all_av) or die(mysqli_error($conf));
        $c = 0 ; 
        while($rows = mysqli_fetch_array($qr)){
           if($c%2 == 0 )
             $css = "right";
             else
             $css = "left";
       
    ?>
      <div style= float:<?=$css?>; class="cardOL">
          <image src="image/userIcon.png" class="imagei" alt="userIcon"></image>
          <h5> <strong><?=$rows["fname"] . ' ' .$rows["lname"]?></strong></h5>
          <div class="praOL" >
            <p style="font-size: 17px ; margin-top: 30px; ;"><strong>you received a job!</strong><br>
                <br>
                <strong>Kind of job:</strong><?=$rows["kindOfjob"]?> 
                <strong>Type of job:</strong><?=$rows["typeOfjob"]?>
                <br>
                <strong>Availability: </strong><?=$rows["availability"]?>
                <br>
                <strong>Duration: </strong><?=$rows["Duration"]?> <br><br>
            </p>
            <form method="post" action="HK-jobOffers.php">
              <input type="hidden" name="ho_user_id" value="<?=$rows["id"]?>" />
              <input type="hidden" name="hk_user_id" value="<?=$_SESSION["User_code"]?>" />
              <input type="hidden" name="req_id" value="<?=$rows["r_id"]?>" />
              <input type="hidden" name="status" value="Pending" />
              <p style= "margin-left: 285px; float: left;margin-top: 13px; position: absolute;" >
                  <button type="submit" class="button" name="btn_price_submit">send offer </button>
              </p>
              <p style="font-family: 'Courier New', Courier, monospace; width: 300px; margin-right: 10px; margin-bottom: 400px;     margin-top: -11px; font-size: larger;"class="price">
                  <lable style="color:rgb(93, 91, 91)">
                  <strong>Price:</strong>
                  <input   type="text" size="17" maxlength="20" placeholder="enter your price" name="price"
                    style="font-family:'Courier New', Courier, monospace;font-size: 13px; padding: 8px;" />
                  <small><strong>per\hr</strong></small>
              </p>
            </form>
          </div>
      </div>
      <?php $c++; 
        } 
      ?>
    </div>

 
   
</div>
    <?php include("Hk-footer.php");?>