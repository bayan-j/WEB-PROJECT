<?php include("header.php");
      include("../ratingsys/functions.php");   
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
   .container2{
   width: 1300px;
   height: var(--form-height);
   position: relative;
   margin: auto;
   box-shadow: 2px 10px 40px rgba(8, 8, 8, 0.4);
   border-radius: 10px;
   margin-top: 50px;
   margin-bottom: 50px;
   background-image: url(../images/background.JPG) ;
   background-position:center ;
   background-size: cover;
   background-image: linear-gradient(WHITE, #ffefe6);
   padding-top: 55px;
   overflow: scroll;
   }
   /*--------------------*/
   .backicon{
   margin-left : 30px;
   width:40px;
   cursor:pointer;
   border-radius: 10px; 
   transition: 0.5s ease;
   cursor: pointer;
   }
   .ToTop{
   margin-left : 0;
   width:30px;
   cursor:pointer;
   border-radius: 10px; 
   transition: 0.5s ease;
   cursor: pointer;
   }
   .card{ width:720px; height:638px; margin-left: 215px;
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
   background-color:white;color: rgb(104, 104, 104);
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
<script type="text/javascript">

    function showRestaurantData(url)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200)
            {
                document.getElementById("restaurant_list").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", url, true);
        xhttp.send();

    } 


    function mouseOverRating(restaurantId, rating) {

        resetRatingStars(restaurantId)

        for (var i = 1; i <= rating; i++)
        {
            var ratingId = restaurantId + "_" + i;
            document.getElementById(ratingId).style.color = "#ff6e00";

        }
    }

    function resetRatingStars(restaurantId)
    {
        for (var i = 1; i <= 5; i++)
        {
            var ratingId = restaurantId + "_" + i;
            document.getElementById(ratingId).style.color = "#9E9E9E";
        }
    }

   function mouseOutRating(restaurantId, userRating) 
   {
	   var ratingId;
       if(userRating !=0) {
    	       for (var i = 1; i <= userRating; i++) {
    	    	      ratingId = restaurantId + "_" + i;
    	          document.getElementById(ratingId).style.color = "#ff6e00";
    	       }
       }
       if(userRating <= 5) {
    	       for (var i = (userRating+1); i <= 5; i++) {
	    	      ratingId = restaurantId + "_" + i;
	          document.getElementById(ratingId).style.color = "#9E9E9E";
	       }
       }
   }

    function addRating ($selected_request, ratingValue, hkuserid , req_id) 
    {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function ()
            {
                if (this.readyState == 4 && this.status == 200) {

                    //showRestaurantData('getRatingData.php');
                    
                    if(this.responseText != "success") {
                    	   alert(this.responseText);
                    }
                    else
                    {
                      alert(this.responseText);
                     
                    } 
                    history.go(0);
                }
            };

            xhttp.open("POST", "../ratingsys/insertRating.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            var parameters = "rate=" + ratingValue + 
                             "&selected_requestid=" + $selected_request + 
                             "&hkuserid= "+hkuserid + "&req_id="+req_id;
            xhttp.send(parameters);
   }
</script>
<!--------- Container -------->
<div class="container2" style=height:1300px;>
   <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder; font-size: 40px ; margin-left: 50px; font-family: Courier New, monospace; margin-top: -10px;">
      Previous Bookings:    
   </p>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["btn_submitcomm"])){
                $sel_id = sanitizeInput($_POST["sel_id"]);
                $review = sanitizeInput($_POST["review"]);
            if(!empty($review))
            {
                $inss = "UPDATE selected_request SET  review='$review' WHERE sel_id='$sel_id'";
                $qrr = mysqli_query($conf,$inss) or die(mysqli_error($conf));
                if($qrr) 
                   header("location:HO-PreviousBooking.php");
            }
        }
    }
        
          //----------------------- Fetch all requests 
        $sel_all_av = "SELECT * FROM ho_requests ,users ho, users hk ,selected_request  WHERE r_id ".
                 " in (SELECT req_id FROM selected_request ".
                "WHERE ".
                " ho_user_id='".$_SESSION["User_code"]."') 
                 and ho_requests.user_id = ho.id
                 and selected_request.req_id = ho_requests.r_id
                 and selected_request.hk_user_id = hk.id
                 and selected_request.status ='Accepted'";
         //   echo $sel_all_av; exit;
               $qr = mysqli_query($conf,$sel_all_av) or die(mysqli_error($conf));
               $c = 0 ; 
               while($rows = mysqli_fetch_array($qr)){
                 $userRating = userRating($rows["sel_id"], $conf);
               if($c%2 == 0 )
               $css = "";
               else
               $css = "left";
            echo "<!--------- Card $c -------->";
      ?>
   
   <div class="card" style="padding-top: 70px; text-align:left;"  >
      <h5>Previous Booking</h5>
      <div class="pra" style="  font-family: 'Courier New', monospace;">
         <form method="post" id="pb<?=$rows["sel_id"]?>">
            <br>
            <lable>
            Kind of job:
            <input name="kindjob" type="text" size="12" maxlength="20" value="<?=$rows["kindOfjob"]?> " readonly>
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
            <input name="day" type="text" size="12" maxlength="20" value="<?=$rows["Duration"]?>" readonly >
             <br><br>
         </form>
       
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
         <p style="text-align: below;">
            <textarea id="w3review" name="review" rows="4" cols="50" placeholder="ex: She is very tidy, fast and calm while working I recommend her!!"  style="text-align:left ; resize:none; " resize="none" ><?=$rows["review"]?></textarea>
         </p>
         <?php if($rows["review"] == '' || empty($rows["review"])){?>
         <p style="text-align: below;">
            <input type="hidden" name="sel_id" value="<?=$rows["sel_id"]?>" />
            <button class="button" name="btn_submitcomm" style="color:black;" >Post</button> 
         </p>
         <?php } ?>
      </div>
   </div>
 <?php } ?>
</div>
</div>
<?php include("footer.php");?>