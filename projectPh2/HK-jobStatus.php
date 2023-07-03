<?php include("Hk-header.php");?>
<div class="container2">
   <p style="background-color: white; color:  rgb(87, 86, 86); 
      font-weight:bolder; 
      font-size: 40px ;
      margin-left: 50px; 
      font-family: 'Courier New', monospace; margin-top: -10px;">
      Your jobs status:    
   </p>
   <div class="row">
   <?php
          //----------------------- Fetch all requests 
        $sel_all_av = "SELECT 
               ho.`fname` hofname , ho.`lname` holname, ho.`email`,  ho.`h_type`,  ho.`passwords`,  ho.`userID`,  ho.`age`,  ho.`phone`,  ho.`Gender`,  ho.`city`,  ho.`comment` , 
                  `price` , `status`, `kindOfjob`,`typeOfjob`,`availability`,`Duration`
                FROM ho_requests ,users ho, users hk ,selected_request  WHERE r_id ".
                 " in (SELECT sel_id FROM selected_request ".
                "WHERE ".
                " hk_user_id='".$_SESSION["User_code"]."') 
                 and ho_requests.user_id = ho.id
                 and selected_request.req_id = ho_requests.r_id
                 and selected_request.hk_user_id = hk.id
                 and selected_request.status <> 'Accepted'";
             //echo $sel_all_av; exit;
               $qr = mysqli_query($conf,$sel_all_av) or die(mysqli_error($conf));
               $c = 0 ; 
               while($rows = mysqli_fetch_array($qr)){
               if($c%2 == 0 )
               $css = "";
               else
               $css = "left";
      ?>
         <div style= float:<?=$css?>;  class="cardOL">
            <img src="image/userIcon.png" class="imagei" alt="userIcon"></image>
            <h5><strong><?=$rows["hofname"] . ' ' .$rows["holname"]?></strong></h5>
            <p 
               class="price">
               <strong style="color: rgb(87, 86, 86) ;"><?=$rows["status"]?>  <br> </strong>  
               <strong> <?=$rows["price"]?>  SR</strong> <i class="fa fa-money"  style="font-size:24px"></i> <small> per hr</small>
            </p>
            <div class="praOL">
               <p><strong>details:</strong><br>
                  <strong>Kind of job:</strong><?=$rows["kindOfjob"]?> 
                  <strong>Type of job:</strong><?=$rows["typeOfjob"]?> <br>
                  <strong>Availability:</strong><?=$rows["availability"]?> <br>
                  <strong>Duration: </strong><?=$rows["Duration"]?>
               </p>
            </div>
         </div>
      <?php } ?> 
   </div>
</div>
<?php include("Hk-footer.php");?>