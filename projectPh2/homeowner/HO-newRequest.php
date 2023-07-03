<?php include("header.php");
?>
<style>

        .card{ width:800px; height:75%; margin-left: 215px;
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
              color: rgb(104, 104, 104);;
              text-decoration: none;
              border: 2px solid transparent;
              font-weight: bold; 
              border-radius: 30px;
              margin-bottom: 20;
              width: 180px;
              height: 30px;

            }

            .card {
              background-color:#ffe3e3;
              color: rgb(104, 104, 104);
              height: 800px;
              

            }
            .button{
              background-color:rgb(255, 247, 237);;
              color: rgb(104, 104, 104);;
                width:25%;
                border: 0;
              width: 80px;
              padding: 10px;
              align-items: center;
              -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                      border-radius: 5px; 
              text-decoration: none;
              text-align: center;
              font-family:'Courier New', monospace;; 
              font-size: 1.2em;
              justify-content: space-between;

            }



            h5{
              color: rgb(76, 76, 76);
              font-size: 20px;
              margin-left: 70px;
              font-family: 'Courier New', monospace;
              margin-top: -30px;
              
            }
</style>
  <div class="container2" style=height:1000px;> 
    <div class=box style="	display: block; margin-left: -65px ;">
                <!--------- Card 1 -------->
      <div class="card" style="padding-top: 70px; text-align:left;"  >
        <h5>My new request :</h5> 
      
        <div class="pra" style="  font-family: 'Courier New', monospace;"></div>
       
        <?php 
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("conn/conn.php");
            if(isset($_POST["btn_r_submit"])){
                  // Sanitize user input
 

                    $kindOfjob = sanitizeInput($_POST["kindOfjob"]);
                    $typeOfjob = sanitizeInput($_POST["typeOfjob"]);
                    $availability = sanitizeInput($_POST["availability"]);
                    $Duration = sanitizeInput($_POST["Duration"]);
                    $user_id =  !empty($_SESSION["User_code"])? sanitizeInput($_SESSION["User_code"]) : exit;
           
              $ins = mysqli_query($conf,"INSERT INTO  `ho_requests` (`kindOfjob`, `typeOfjob`,`availability`,`Duration`,`user_id`) 
                                  VALUES('$kindOfjob','$typeOfjob','$availability','$Duration','$user_id')") or die (mysqli_error($conf));
              if($ins )
                 $alert = "<b style='color:white'>Data Are saved Succeessfuly</b>";
                echo "<meta http-equiv='refresh' content='2;url=HO-newRequest.php'";
              
            }
          }
          ?>    
        <img src="../image/userIcon.png "  id = "imagee" name="imagee"style="width:100px ; height: 100px; padding-left: 340px;"><br> 
        <center><?=!empty($alert)? $alert:"" ?></center>

        <form enctype='multipart/form-data' id="sign-up-form-homeowner" class="parent" style="padding-left:100px ;" action=" " method="post"><br>

          <lable style="margin-left: -40px; color: black; font-family: 'Courier New', monospace;">Kind of job:</lable>
          <select class="form-control" name="kindOfjob" placeholder="ex: cleaner">
            <option value="Housekeeper">Housekeeper</option>
            <option value="Cleaner">Cleaner</option>
            <option value="Painter">Painter</option>
            <option value="Electrician">Electrician</option>
            <option value="Plumber">Plumber</option>
            <option value="Carpenter">Carpenter</option>
          </select>
        
          
          
          <lable style="margin-left: -40px; color: black;font-family: 'Courier New', monospace;">Type Of job:</lable>
           <select class="form-control" name="typeOfjob" placeholder="full/part time job">
              <option value="full time">Full Time</option>            
              <option value="part time">Part Time</option>
          </select>
          <lable style="margin-left: -40px; font-family: 'Courier New', monospace; color: black;">Availability: </lable>
           <select class="form-control" name="availability" placeholder="morning">
            <option value="morning">Morning</option>
            <option value="afternoon">Afternoon</option>
            <option value="night">Night</option>
           </select>
          <lable style="margin-left: -40px; color: black; font-family: 'Courier New', monospace;">Duration:</lable>
          <select class="form-control" name="Duration" placeholder="ex: 10am-3pm">
            <option value="10am-3pm">10am-3pm</option>
            <option value="3pm-6pm">3pm-6pm</option>
            <option value="6pm-9pm">6pm-9pm</option>
            <option value="9pm-12am">9pm-12am</option>
            <option value="12am-3pm">12am-3pm</option>
            <option value="3pm-6pm">3pm-6pm</option>
            <option value="6pm-9pm">6pm-9pm</option>
          </select>
          <br>
          <br>
          <br>
          <br>
          <div style="text-align: center; display:flex; align-items: center;"></div>
          <button class="btn btn-default" name="btn_r_submit" type="submit" onclick="unlock()"   style="color:rgb(104, 104, 104); margin-left:140 ;margin-right:10 ;    width: 145px;" >Submit</button>
          <div style="text-align:center; display:flex; align-items: center; "></div>
          <button class="btn btn-default" type="reset"  onclick="unlock()" style="color:rgb(104, 104, 104);margin-left:290 ;margin-right:0 ; margin-bottom: 30px; margin-top: -42px;" >Clear</button>     
        </form >
      </div>
    </div>
  </div>

  <?php include("footer.php");?>

   