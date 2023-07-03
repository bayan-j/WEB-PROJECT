<?php include("header.php");?>
<!--------- Container -------->
<div class="container2" style=height:1300px;>
  <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: Courier New, monospace; margin-top: -10px;">
  Current Bookings:    
  </p>
  <?php
    
          //----------------------- Fetch all requests 
        $sel_all_av = "SELECT * FROM ho_requests ,users ho, users hk ,selected_request  WHERE r_id ".
                 " in (SELECT req_id FROM selected_request ".
                "WHERE ".
                " ho_user_id='".$_SESSION["User_code"]."') 
                 and ho_requests.user_id = ho.id
                 and selected_request.req_id = ho_requests.r_id
                 and selected_request.hk_user_id = hk.id
                 and selected_request.status ='Accepted'";
           //echo $sel_all_av; exit;
               $qr = mysqli_query($conf,$sel_all_av) or die(mysqli_error($conf));
               $c = 0 ; 
               while($rows = mysqli_fetch_array($qr)){
                
               if($c%2 == 0 )
               $css = "";
               else
               $css = "left";
            echo "<!--------- Card $c -------->";
      ?>
   <div class="card" style="padding-top: 70px; text-align:left;"  >
     <h5>Previous Booking</h5>
     <div class="pra" style="  font-family: 'Courier New', monospace;">
        <form >
           <br>
           <lable>
           Kind of job:
           <input name="kindjob" type="text" size="12" maxlength="20" value="<?=$rows["kindOfjob"]?>" readonly>
           <br><br>
           <lable>
           Type of job:
           <input name="typejob" type="text" size="12" maxlength="20" value="<?=$rows["typeOfjob"]?>" readonly >
           <br><br>
           <lable>
           Availability:
           <input name="Availability" type="text" size="12" maxlength="20" value="<?=$rows["availability"]?>" readonly >
           <br>  
           <br><br>
           <lable>
           Duration:
            <input name="time" type="text" size="15" maxlength="20" value="<?=$rows["Duration"]?>" readonly >
           <br><br>
        </form>
     </div>
  </div>
  <?php } ?>
</div>
</div>
<?php include("footer.php");?>