<?php include("Hk-header.php");?>
<style>
 

.card .button{
	background-color:#b3c9e1;
	color: rgb(104, 104, 104);
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 9px 22px;
	border-radius: 30px;
	transition: .4s; 
  margin-right: 3px;
  width: 150px;

}

.card .button:hover{
	background-color: transparent;
	border: 2px solid  rgb(104, 104, 104);
	cursor: pointer;
}

 
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
margin-bottom: 5px;
}

.card {
	background-color:#ffe3e3;
	color: rgb(104, 104, 104);
  height: 850px;

}
.button{
	background-color:rgb(255, 247, 237);;
	color: rgb(104, 104, 104);;
    width:25%;
    margin:1px;
    border: 0;
  width: 80px;
  padding: 10px;

  -webkit-border-radius: 5px;
     -moz-border-radius: 5px;
           border-radius: 5px; 
  display: block;
  text-decoration: none;
   text-align: center;
  font-family:'Courier New', monospace;; 
  font-size: 1.2em;

}


h5 {
    border-radius: 30px;
    padding: 9px 22px;
    background-color: white;
    margin-left: -5px;
    margin-top: -42px;
}
  </style>
   
   <div class="container2" style=height:1000px;>
         <div class=box style="	display: block; margin-left: -65px ;">
            <!--------- Card 1 -------->
            <div class="card" style="padding-top: 70px; text-align:left;"  >
               <h5>My Profile:</h5>
               <div class="pra" style="  font-family: 'Courier New', monospace;">
                  <br>
                  <?php 
         
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
          
            if(isset($_POST["btn_hk"])){
                  // Sanitize user input
          
            
                    $fname = sanitizeInput($_POST["fname"]);
                    $lname = sanitizeInput($_POST["lname"]);
                    $email = sanitizeInput($_POST["email"]);
                     $city = sanitizeInput($_POST["city"]);
                    $userID = sanitizeInput($_POST["userID"]);
                    $age = sanitizeInput($_POST["age"]);
                    $phone = sanitizeInput($_POST["phone"]);
                    $Gender = sanitizeInput($_POST["Gender"]);
                    $comment = sanitizeInput($_POST["comment"]);
 
                  
            if(redundancy_where_value_s($conf , "users" , "email" , clean_value($conf,$email) , " and h_type = 'hk' AND id <>'$id'") > 0 )
            {
                   $alert = "Data you have sent are exist! ";
            }
            else{
               $ins = mysqli_query($conf,"UPDATE `users` 
                                        SET `fname` = '".clean_value($conf, $fname)."' ,
                                            `lname` = '".clean_value($conf, $lname)."' , 
                                            `email` ='".clean_value($conf, $email)."' ,
                                            `city` = '".clean_value($conf, $city)."' ,
                                            `userID` = '".clean_value($conf, $userID)."' ,
                                            `age` = '".clean_value($conf, $age)."' ,
                                            `phone` = '".clean_value($conf, $phone)."' ,
                                            `Gender` = '".clean_value($conf, $Gender)."' ,
                                            `comment` = '".clean_value($conf, $comment)."'  
                                         WHERE id = '$id'") or die (mysqli_error($conf));
               if($ins )
                 $alert = "Data Are saved Succeessfuly";
                echo "<meta http-equiv='refresh' content='2;url=HK-profile.php'";
               } 
            }
          }
          ?>      
          <center><?=!empty($alert)? $alert:"" ?></center>
                  <img src="image/userIcon.png "  id = "imagee" name="imagee"style="width:100px ; height: 100px; padding-left: 340px;">
                  <form enctype='multipart/form-data' id="sign-up-form-homeowner" class="parent" style="padding-left:100px ;"  method="post">
                     <input type="text" id="fname"  name="fname" value="<?=$header_useridrow["fname"]?>" style="background-color:white;" required />
                     <input type="text" id="lname"  name="lname" value="<?=$header_useridrow["lname"]?>" style="background-color:white;"  required/>
                     <input type="text" id="userID"  name="userID" value="<?=$header_useridrow["userID"]?>" style="background-color:white;"  required/>
                     <input type="text" id="age"  name="age" value="<?=$header_useridrow["age"]?>" style="background-color:white;"  required/>
                     <input type="text" name="Gender" id="Gender"   value="<?=$header_useridrow["Gender"]?>" style="border-radius:30px ; background-color:#fbf6ff;"  required/>
                     <input type="email" id="email"   name="email" value="<?=$header_useridrow["email"]?>" style="background-color:white;"  required/>
                     <input type="text" id="phone" name="phone" value="<?=$header_useridrow["phone"]?>" style="background-color:white;"  required/>
                     <input type="text" id="city"  name="city" value="<?=$header_useridrow["city"]?>" style="background-color:white;"   required/> <br>
                     <input type="file" id="image"  name="image"  style="background-color:white;"  accept="image/*" disabled /> <br>
                     <textarea name="comment" id="comment" cols="25" rows="10" style="border-radius :30px; resize: none; width:560px ; height: 150px; background-color:white;" > <?=$header_useridrow["comment"]?></textarea>
                     <br> <br><br>
                     <div style="text-align: center; display:flex;">
                        <button class="button" type="submit" name="btn_hk"  style="width: 130px;height: 80px;margin-left: 90px; color:rgb(104, 104, 104); " >save</button>
                        <a class="button"  onclick="unlock()" href="deleteaccount.php?id=<?=$id?>" style="color:rgb(244, 50, 50); " >Delete Account!</a>
                     </div>
                  </form >
               </div>
            </div>
         </div>
      </div>

  <?php include("Hk-footer.php");?>
   