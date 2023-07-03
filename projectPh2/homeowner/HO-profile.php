<?php include("header.php");?>
      <style>
            
                      
                        #sign-up-form-homeowner input {
                          margin: 12px;
                          font-size: 14px;
                          padding: 15px;
                          width: 260px;
                          font-weight: 300;
                          border: none;
                          background-color: #e4e4e494;
                          font-family: 'Helvetica Neue', sans-serif;
                          letter-spacing: 1.5px;
                          padding-left: 20px;
                        }
                      
                        .header{
                      
                      width:100%;
                      margin:auto;
                      padding:15px 0;
                      display:flex;
                      align-items:center;
                      justify-content:space-between;
                      background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
                      }
                      .logo{
                      margin-left : 30px;
                        width:130px;
                        cursor:pointer;
                        border-radius: 10px; 
                        transition: 0.5s ease;
                        cursor: pointer;
                      }
                      /*
                      .logo:hover{
                        margin-left : 30px;
                          width:100px;
                          cursor:pointer;
                          border-radius: 10px; 
                          box-shadow: 2px 5px 12px rgba(60, 53, 53, 0.4);
                          transform: scale(1.09);
                      
                        }*/
                      
                      .header ul li{
                      list-style:none;
                      display:inline-block;
                      margin: 0 20px;
                      position: relative;
                      
                      }
                      .header ul li a{
                      text-decoration: none;
                      color: white ;
                      font-family: 'Courier New', monospace;
                      font-weight: 800;
                      margin-left: -8px;
                      
                      }
                      .header ul li ::after{
                      content: '';
                      height: 3px;
                      width: 0;
                      background: white;
                      position: absolute;
                      left: 0;
                      bottom: -10px;
                      transition:0.5s ;
                      }
                      .header ul li :hover::after{
                      width: 100%;
                      }
                      .image {
                        margin-right : 30px;
                        margin-left: 0px;
                        width:80px;
                        cursor:pointer;
                        border-radius: 20px;
                        transition: 0.5s ease;
                        cursor: pointer;
                      }
                      .image:hover {
                        margin-right : 30px;
                        margin-left: 0px;
                        width:80px;
                        cursor:pointer;
                        border-radius: 200px;
                        box-shadow: 2px 5px 12px rgba(8, 8, 8, 0.4);
                        transform: scale(1.09);
                      }
                      
                      
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
                      
                      h5{
                          color: rgb(76, 76, 76);
                          font-size: 20px;
                          margin-left: 70px;
                        font-family: 'Courier New', monospace;
                        margin-top: -30px;
                        
                      
                      
                      }
                      
                      
                        footer {
                          text-align: center;
                          padding: 0.05px;
                          background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
                      
                          color: white;
                        } 
                      
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
                          margin:3px;
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
                      
                      
                      
                      
                      h5{
                          border-radius: 30px;
                        padding: 9px 22px;
                          background-color:white;
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
                <img src="../image/userIcon.png "  id = "imagee" name="imagee"style="width:100px ; height: 100px; padding-left: 340px;">
          <?php 
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include("conn/conn.php");
            if(isset($_POST["btn_ho"])){
                  // Sanitize user input
                    $fname = sanitizeInput($_POST["firstName"]);
                    $lname = sanitizeInput($_POST["lastName"]);
                    $email = sanitizeInput($_POST["email"]);
                     $city = sanitizeInput($_POST["city"]);
                    $h_type = sanitizeInput($_POST["h_type"]);
            if(redundancy_where_value_s($conf , "users" , "email" , clean_value($conf,$email) , " and h_type = 'ho' AND id <>'$id'") > 0 )
            {
                  $alert = "Data you have sent are exist! ";
            }
            else{
              $ins = mysqli_query($conf,"UPDATE `users` 
                                        SET `fname` = '".clean_value($conf, $fname)."' , `lname` = '".clean_value($conf, $lname)."' , 
                                            `email` ='".clean_value($conf, $email)."' , `city` = '".clean_value($conf, $city)."' 
                                        WHERE id = '$id'") or die (mysqli_error($conf));
              if($ins )
                 $alert = "Data Are saved Succeessfuly";
                echo "<meta http-equiv='refresh' content='2;url=HO-profile.php'";
              }
            }
          }
          ?>      
          <center><?=!empty($alert)? $alert:"" ?></center>
       <form enctype='multipart/form-data' id="sign-up-form-homeowner" class="parent" style="padding-left:100px ;"  method="post">
              <input type="text" id="firstName" placeholder="First Name "  name="firstName" value="<?=!empty($header_useridrow["fname"])? $header_useridrow["fname"] :""?>" style="background-color:white;" required />
              <input type="text" id="lastName" placeholder="Last Name " name="lastName" value="<?=!empty($header_useridrow["lname"])? $header_useridrow["lname"] :""?>" style="background-color:white;"  required/>
              <input type="email" id="email"  placeholder="Your Email " name="email" value="<?=!empty($header_useridrow["email"])? $header_useridrow["email"] :""?>" style="background-color:white;" readonly  required/>
              <input type="text" id="city"  placeholder="Your city " name="city" value="<?=!empty($header_useridrow["city"])? $header_useridrow["city"] :""?>" style="background-color:white;"   required/>
             
              <input type="file" id="imgfile"  name="imgfile"  value="choose profile " style="background-color:white;"  accept="image/*" disabled /> <br><br>
              <h4 style=" margin-left: 125px ; color: black;"> your location:</h4> 
              <div id="map-container-google-3" class="z-depth-1-half map-container-3" style=" margin-left: 120px ;">
                  <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
              </div>
              <br>

              
              <?php 
                  if(!empty($id) && $header_useridrow["id"] == $_SESSION["User_code"]){ // this variable declared in the header 
              ?>                  
              <br> <br><br>
              <div style="text-align: center; display:flex;">
                  <button class="button"  type="submit" style="margin-left: 90px; color:rgb(104, 104, 104); " name="btn_ho">save</button>
                   <a class="button"  onclick="unlock()" href="deleteaccount.php?id=<?=$id?>" style="color:rgb(244, 50, 50); " >Delete Account!</a>
              </div>
              <?php }?>
              
      
                  

        </form >
    
                  
               
                </div>
              </div>
    
    
    
    
     
    
    
        </div>
      </div>
    
  <?php include("footer.php");?>  
       