<?php include("Hk-header.php");
        include("ratingsys/functions.php");   
?>
<style>
    li.star {
                list-style: none;
                display: inline-block;
                margin-right: 5px;
                cursor: pointer;
                color: #9E9E9E;
                font-size:35px;
            }

            li.star.selected {
                color: #ff6e00;
            }

            .row-title {
                font-size: 20px;
                color: #00BCD4;
            }

            .review-note {
                font-size: 12px;
                color: #999;
                font-style: italic;
            }
            .row-item {
                margin-bottom: 20px;
                border-bottom: #F0F0F0 1px solid;
            }
            p.text-address {
                font-size: 12px;
            }
   
</style>
<div class="container2">
   <p style="background-color: white; color:  rgb(87, 86, 86); 
      font-weight:bolder; 
      font-size: 40px ;
      margin-left: 50px; 
      font-family: 'Courier New', monospace; margin-top: -10px;">
      Your Previous jobs:    
   </p>
   <div class="row">
      <?php
          //----------------------- Fetch all requests 
        $sel_all_av = "SELECT sel_id,
                   ho.`fname` hofname , ho.`lname` holname, ho.`email`,  ho.`h_type`,  ho.`passwords`,  ho.`userID`,  ho.`age`,  ho.`phone`,  ho.`Gender`,  ho.`city`,  ho.`comment` , 
                  `price` ,`status`,`rate`,`review`, `kindOfjob`,`typeOfjob`,`availability`,`Duration`
                FROM ho_requests ,users ho, users hk ,selected_request  WHERE r_id ".
                 " in (SELECT req_id FROM selected_request ".
                "WHERE ".
                " hk_user_id='".$_SESSION["User_code"]."') 
                 and ho_requests.user_id = ho.id
                 and selected_request.req_id = ho_requests.r_id
                 and selected_request.hk_user_id = hk.id
                 and selected_request.status ='Accepted'";
             //echo $sel_all_av; exit;
               $qr = mysqli_query($conf,$sel_all_av) or die(mysqli_error($conf));
               $c = 0 ; 
               while($rows = mysqli_fetch_array($qr)){
                  $userRating = userRating($rows["sel_id"], $conf);
               if($c%2 == 0 )
               $css = "";
               else
               $css = "left";
      ?>
         <div style= float:<?=$css?>; class="cardOL">
            <image src="image/userIcon.png" class="imagei" alt="userIcon"></image>
            <h5><strong><?=$rows["hofname"] . ' ' .$rows["holname"]?></strong></h5>
            <p 
               class="price">
               <strong style="color: rgb(61, 137, 76) ;"><?=$rows["status"]?><br></strong> 
               <strong> <?=$rows["price"]?>  SR</strong> <i class="fa fa-money"  style="font-size:24px"></i> <small> per hr</small>
            </p>
            <div class="praOL">
               <p><strong>details:</strong><br>
                  <strong>Kind of job:</strong><?=$rows["kindOfjob"]?> 
                  <strong>Type of job:</strong><?=$rows["typeOfjob"]?> <br>
                  <strong>Availability:</strong> <?=$rows["availability"]?> <br>
                  <strong>Duration: </strong>  <?=$rows["Duration"]?>
               </p>
               <br>
               <div class="cardOL1">
                  <p  >
                  <?php 
            $outputString = '
            <div class="row-item">
              <center>
               <ul class="list-inline"  onMouseLeave="mouseOutRating(' . $rows['sel_id'] . ',' . $userRating . ');"> ';
                           for ($count = 1; $count <= 5; $count ++) {
                              $starRatingId = $rows['sel_id'] . '_' . $count;
                              
                              if ($count <= $userRating) {
                                 
                                 $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
                              } else {
                                 $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star" onclick="addRating(' . $rows['sel_id'] . ',' . $count . ',' . $rows['hk_user_id']. ',' . $rows['req_id'] . ');" onMouseOver="mouseOverRating(' . $rows['sel_id'] . ',' . $count . ');">&#9733;</li>';
                              }
                           } // endForlll
                           
                           $outputString .= '
                        </ul>
                        </center>
                     </div> ';
                        echo  $outputString;   
                  
                  ?>
                  </p>
                  <p style="font-family: 'Courier New', Courier, monospace; width: 300px; margin-right: 10px; margin-bottom: 400px; margin-top: -30px; font-size: larger;"class="price">
                     <lable >
                     <strong style="font-weight: bold;color:rgb(93, 91, 91)"  ;>Review:</strong>
                      <br>
                     <small><strong><?=$rows["review"]?></strong></small>
                  </p>
               </div>
            </div>
         </div>
      <?php } ?>
         
   </div>
</div>
<?php include("Hk-footer.php");?>