<?php include("header.php");?>
<style>
   .pra p{
   color: rgba(0, 0, 0, 0.8);
   font-size: 16px;
   line-height: 27px;
   margin-bottom: 25px;
   font-family: 'Courier New', monospace;
   text-align: center;
   }
   .card .button{
   background-color:#ffe3e3;
   color: rgb(104, 104, 104);
   text-decoration: none;
   border: 2px solid transparent;
   font-weight: bold;
   padding: 9px 22px;
   border-radius: 30px;
   transition: .4s; 
   margin-right: 3px;
   }
   .card .button:hover{
   background-color: transparent;
   border: 2px solid  rgb(104, 104, 104);
   cursor: pointer;
   }
   h5{
   color: rgb(76, 76, 76);
   font-size: 20px;
   margin-left: 70px;
   font-family: 'Courier New', monospace;
   margin-top: -30px;
   }
   .card{ width:720px; height:517px; margin-left: 215px;
   padding: 20px 35px;
   background: linear-gradient(to bottom right,#95aac1, #4b6480);
   border-radius: 20px;
   position: relative;
   overflow: hidden;
   text-align: center;
   box-shadow: 2px 10px 40px rgba(8, 8, 8, 0.4);
   transition: 0.5s ease;
   cursor: pointer;
   margin-bottom: 40px;
   }
   .card:hover{
   background: linear-gradient(to bottom right,#95aac1, #4b6480);
   background: linear-gradient(to bottom right,#4b6480,#95aac1);
   transform: scale(1.01);
   }
   input{
   background-color:white;
   color: rgb(104, 104, 104);
   text-decoration: none;
   border: 2px solid transparent;
   font-weight: bold; 
   border-radius: 30px;
   margin-bottom: 5px;
   width: 180px;
   height: 30px;
   }
   .card .button{
   background-color:#b3c9e1;
   color: rgb(104, 104, 104);;
   }
   h5{
   border-radius: 30px;
   padding: 9px 22px;
   background-color:white;
   margin-left: -5px;
   margin-top: -42px;
   }
</style>
<!--------- Container -------->
<div class="container2" style=height:1300px;>
   <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: Courier New, monospace; margin-top: -10px;">
      Previous Requests:    
   </p>
    <?php 
       if((isset($_SESSION["User_code"]) && $_SESSION["User_code"] != '')){
          if(isset($_POST["btn_edit_submit"])){
            $kindOfjob = sanitizeInput($_POST["kindOfjob"]);
            $typeOfjob = sanitizeInput($_POST["typeOfjob"]);
            $availability = sanitizeInput($_POST["availability"]);
            $Duration = sanitizeInput($_POST["Duration"]);
            $user_id =  !empty($_SESSION["User_code"])? sanitizeInput($_SESSION["User_code"]) : exit;
            $ins = mysqli_query($conf,"UPDATE  `ho_requests` 
                                       SET    `kindOfjob` = '".$kindOfjob."', 
                                              `typeOfjob` = '".$typeOfjob."',
                                              `availability` = '".$availability."',
                                              `Duration` = '".$Duration."'
                                        WHERE
                                              `r_id` = '".$_GET["rid"]."'");
            if($ins )
                $alert = "<b style='color:white'>Data Are saved Succeessfuly</b>";
                  echo "<meta http-equiv='refresh' content='2;url=HO-PreviousRequest.php"."#c".$_GET["rid"]."' />";

          } 
          
        $sel = "SELECT * FROM ho_requests WHERE user_id='".$_SESSION["User_code"]."'" ;
        $qr = mysqli_query($conf,$sel) or die(mysqli_error($conf));
        $c = 1;
        while($rows= mysqli_fetch_array($qr)){
          echo "<!------- Card $c -------->";
    ?>
        <div class="card" style="padding-top: 70px; text-align:left;"  >
            <h5>Request <?=$c?>: </h5>
            <div class="pra" style="  font-family: 'Courier New', monospace;">
              <br> 
              <form id="<?="c".$rows["r_id"]?>" method="post" action="HO-PreviousRequest.php?rid=<?=$rows["r_id"]?>#<?="c".$rows["r_id"]?>">
                  <br>
                  <lable>
                  Kind of job:
                  <input name="kindOfjob" type="text" size="12" maxlength="20" value="<?=$rows["kindOfjob"]?>" />
                  <br><br>
                  <lable>
                  Type of job:
                  <input name="typeOfjob" type="text" size="12" maxlength="20" value="<?=$rows["typeOfjob"]?>" />
                  <br><br>
                  <lable>
                  Availability:
                  <input name="availability" type="text" size="12" maxlength="20" value="<?=$rows["availability"]?>" />
                  <br>  
                  <br><br>
                  <lable>
                  Duration: 
                  <input name="Duration" type="text" size="15" maxlength="20" value="<?=$rows["Duration"]?>" />
                  <br><br>
              </form>
              <br> <br> 
              <p style="text-align: center;">
                  <button type="submit" name="btn_edit_submit" class="button"  style="color:rgb(87, 86, 86);" >Edit</button>
                  <button type="reset"  class="button"   style="color:rgb(87, 86, 86)">Cancel</button>
                  <a class="button" href="HO-viewOffer.php?id=<?=$rows["r_id"]?>" style="color:rgb(87, 86, 86);">View Offers</a>
              </p>
            </div>
        </div>
   <?php
      $c++; 
      }
    }
      else{header("location:HO-homepage.php");}?>
</div>
</div>
    
    <?php include("footer.php");?>