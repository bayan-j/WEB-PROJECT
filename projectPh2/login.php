<?php ob_start();?>
<!DOCTYPE html>
<html>
  
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Welcome back</title>
  <style>
  
            body{
          background-color: rgb(255, 247, 237);
          }

          :root{
              --form-height:1000px;
              --form-width: 900px;
              
              --left-color:#FFB3B3;
              
              --right-color: #FFDBA4;
            }

            body, html{
              width: 100%;
              height: 100%;
              margin: 0;
              font-family: 'Helvetica Neue', sans-serif;
              letter-spacing: 0.5px;


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

          .backicon{
          margin-left : 30px;
            width:40px;
            cursor:pointer;
            border-radius: 10px; 
            transition: 0.5s ease;
            cursor: pointer;
          }

          /* start heder bar */
          .header{

          width:100%;
          margin:auto;
          padding:15px 0;
          display:flex;
          align-items:center;
          justify-content:space-between;
          background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
          }
          /*  heder bar END */

          /*  logo */
          .logo{
          margin-left : 30px;
            width:130px;
            cursor:pointer;
            border-radius: 10px; 
            transition: 0.5s ease;
            cursor: pointer;
          }
          /*
          مدري احطه او لا 
          .logo:hover{
            margin-left : 30px;
              width:100px;
              cursor:pointer;
              border-radius: 10px; 
              box-shadow: 2px 5px 12px rgba(60, 53, 53, 0.4);
              transform: scale(1.09);

            }
            */
          /*  logo END */

          .header ul li{
          list-style:none;
          display:inline-block;
          margin: 0 20px;
          position: relative;

          }
          .header ul li a{
          text-decoration: none;
          color: whitesmoke;
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



          /* DROPDOWN MENU TO USER ICON */

          .dropdown {
            position: relative;
            display: inline-block;
            

          }
          .dropdown ul {
              margin-left: -140px;
            padding-right:40px;
            margin-top: -1px;
            padding-top: 10px;
            padding-bottom: 15px;
            margin-right: 5px;
              display: none;
            position: absolute;
            background-color: #383535;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;


          }

          .dropdown:hover ul {
            display: block;
          }
          .dropdown a{
              text-decoration: none;
          color: rgb(0, 0, 0);
          text-transform: uppercase;
          font-family: 'Courier New', monospace;
          padding-bottom: 10px;
          }



          /* DROPDOWN MENU TO USER ICON ENDs*/

          .ToTop{
          margin-left : 0;
            width:30px;
            cursor:pointer;
            border-radius: 10px; 
            transition: 0.5s ease;
            cursor: pointer;
          }

          .praOL p{
            color: rgba(0, 0, 0, 0.8);
            font-size: 14px;
            width: 800px;
            line-height: 20px;
            font-family: 'Courier New', monospace;
            margin-top: 10px;
            margin-left: 20px;
            margin-bottom: -5px;

          }
          #login1{
              left: 50px;
              
          }
          #login2{
              left: 450px;
              
          }




            .imagei {
            margin-top : 10px;
            margin-left: 10px;
            width: 40px;
            cursor:pointer;
            border-radius: 10px;
            z-index: -5;
            }

            .imagei:hover {
            margin-left: 10px;
            width:40px;
            cursor:pointer;
            border-radius: 15px;
            box-shadow: 2px 5px 5px rgba(8, 8, 8, 0.4);
          }

            


          
          div1 {
              display: none;
              
          }
              
          a1:hover + div1 {
              display: block;
              position:fixed;
              z-index: 999999999999999999;
              text-align: left;
            background-color:ffe3e3;
            color: rgb(104, 104, 104);;
            text-decoration: none;
            border: 1px solid  rgb(104, 104, 104);
            padding: 5px 10px;
            border-radius: 15px;
            margin-left: 650px;
            transition: .4s; 
            z-index: 999999999999999999999999999999999999999999999999999;

          }
          input{
            background-color: rgb(255, 247, 237);
            color: rgb(104, 104, 104);
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold; 
            border-radius: 30px;
            margin-bottom: 5px;
          }


          h5{
            color: rgb(76, 76, 76);
            font-size: 20px;
            margin-left: 70px;
            font-family: 'Courier New', monospace;
            margin-top: -30px; 

          }
          .from-box{
              width: 450px;
              height: 1100px;
              position: relative;
              margin: 6% auto;
              background-color: rgb(255, 247, 237);;
              padding:5px ;
              box-shadow: 0px 8px 16px 0px #4b6480;
              overflow: hidden;
          }

          .from-box1{
              width: 450px;
              height: 450px;
              position: relative;
              margin: 6% auto;
              background-color: rgb(255, 247, 237);;
              padding:5px ;
              box-shadow: 0px 8px 16px 0px #4b6480;
              overflow: hidden;
          }
          .button-box{
            
              width: 200px;
              margin: 35px auto;
              margin-right: 173px;
              position: relative;
              box-shadow:0 0 20px 9px #e3dcdc;
              border-radius: 30px;
              height: 50px;
              display: flex;
              

            
            
            
          }

          .toggle-btn{
              padding: 10px 30px;
              cursor: pointer;
              background: transparent;
              border: 0;
              transform: scale(1.09);
              font-family: 'Courier New', monospace;
              font-weight: bold;
              position: relative;
              width: 20px;
              height: 49px;
              border-radius:30px ;
              padding: 0px 0px 0px 3px ;

            
            
            
          }
          button-box:hover{
          text-decoration: none;}
          #btn{
              top: 0;
              left: 0;
              position: relative;
              width: 110;
              height: 100;
              background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
              border-radius: 30px;
              transition: .5s;
              display: flex;
              padding: 0px 6px 6px 9px ;
            
              
          }
          .input-ground{
              top: 180px;
              position: absolute;
              width: 280px;
              transition: .5s;
          }
          .input-fild{
              width: 100%;
              padding: 10px 0;
              margin: 5px 0;
              border-left: 0;
              border-top: 0;
              border-right: 0;
              border-bottom: 1px solid #999 ;
              outline: none;
              background: transparent;
          }
          .submit-btn{
              width: 85%;
              padding: 10px 30px;
              cursor: pointer;
              display:block ;
              margin: auto;
              background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
          border:0 ;
          outline: none;
          border-radius: 30px;
          margin-left: 52px;
          }
          .check-box{
              margin: 50px 15px 30px 0 ;
              font-family: 'Courier New', monospace;
              font-weight: bold;
              box-shadow: 0px 8px 16px 0px #4b6480;
              color: rgb(76, 76, 76);

          }
          span{
              cursor: #777;
              font-size: 12px;
              bottom: 68px;
              position: absolute;
          }

          /* About US */
          .about{
            width: 100%;
            padding: 70px 0px 0px 430px;

          }


          .about img{
            height: auto;
            width: 430px;
            margin-left: -400px;
            margin-top: 40px;
            position: absolute;

            

          }
          .about-text{
            width: 550px;
            
          }

          .about-text h2{
            color: #101010;
            font-size: 75px;
            text-transform: capitalize;
            margin-bottom: -50px;
            font-family: 'Courier New', monospace;
            margin-left: 70px;

          }
          .about-text h5{
            color: #718dac;
            letter-spacing: 2px;
            font-size: 35px;
            margin-bottom: 25px;
            margin-top: 37px;
            text-transform: capitalize;
            font-family: 'Courier New', monospace;
            margin-left: 70px;

          }
          .about-text p{
            color: rgba(0, 0, 0, 0.8);
            letter-spacing: 1px;
            line-height: 28px;
            font-size: 18px;
            margin-bottom: 45px;
            font-family: 'Courier New', monospace;
            margin-left: 70px;

          }

          footer {
              text-align: center;
              padding: 0.05px;
              background-image: linear-gradient(to bottom right,#95aac1, #4b6480);

              color: white;
            }
</style>
</head>

<body>
    <div class="header" >
      <image src="image/logooo.png" class="logo">
    
      <ul>
        <li><a href="homeowner/HO-homepage.php">Home Owner Home</a></li>
        <li><a href="HK-homepage.php">Home Keeper Home</a></li>
        <li><a href="mailto:luxurytimeInfo.sa@gmail.com">Contact Us</a></li>
      </ul>
 
 
   </div> 
    <!--
   <a href="#" class="back">
    <image src="../image/back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
  </a>
-->


    <div class="container2">  
      <!---- About us -->

<section id="aboutus" class="about">
  <div class="main">
      <img src="image/hotel_housekeeper.webp"  style="border-radius:20px ; box-shadow: 2px 5px 12px rgba(8, 8, 8, 0.4);
      " alt="housekeeper picture">
      <div class="about-text" >
          <h2>About Us</h2>
          <h5>luxuryTime <span> </span></h5>
          <p style="font-size:22px; width: 700px;">Trust and safety sets Housekeeper apart from the other Housekeepers sites.<br> You’ll get the quickest response from Housekeeper in your area.<br> LuxuryTime provides you with Housekeeper reviews written by Homeowners.</p>            <p> </p>
      </div>
  </div>
</section>
        <div class="from-box1">
            <div class="button-box">
                <div id="btn">
               <button type="button" class="toggle-btn " onclick="Homeowners()" style="  width: 150px;">Homeowners</button>
               <button type="button" class="toggle-btn" onclick="Housekeeper()" style=" width: 150px;"> Housekeeper</button>
                </div>
            </div>
 <?php 
	if(isset($_POST['btn_submit']))
	{ 
     include('conn/conn.php');
		$u = $_POST["Username"];
		$p = $_POST["password"];
 	  if($u == '' || empty($u))
	  {
		  header("location:login.php?err=1");
	  }
	  elseif($p == '' || empty($p))
	  {
		  header("location:login.php?err=2");
	  }	
	  else
	  {
      $h_type = $_POST["h_type"];
      if($h_type == 'hk') 
      $stm= "SELECT * FROM `users` WHERE `userID`='".$u."' and `passwords`='".$p."' AND h_type='".$h_type ."'" ;

      else
 			$stm= "SELECT * FROM `users` WHERE `email`='".$u."' and `passwords`='".$p."' AND h_type='".$h_type ."'" ;
 		// echo $stm; exit;
 			$sqls = mysqli_query($conf,$stm) or die(mysqli_error($conf));
  			// Mysql_num_row is counting table row
 			$count=mysqli_num_rows($sqls);
 			// If result matched $myusername and $mypassword, table row must be 1 row
			if($count==1){
 				$row_usr_data = mysqli_fetch_array($sqls);
	       session_start();
				$_SESSION['User_code'] = $row_usr_data['id'];
 				$_SESSION['User_fullname'] = $row_usr_data['fname'] . ' '.  $row_usr_data['lname'];
				$_SESSION['User_email'] = $row_usr_data['email'];
				$_SESSION['h_type'] = $row_usr_data['h_type'];
				$_SESSION['User_city_id'] = $row_usr_data['city'];
 
        if($row_usr_data['h_type'] == 'ho')
				 {
					  
					header("location:homeowner/HO-homepage.php");
				 }
					else
					{
						header("location:HK-homepage.php");
					}
			}
			else {
			$alrt =  "<b style='color:#f00;'>Wrong data , Please try again</b>";
			}
	  }
	   unset($_POST);	
	}
?>
            <center><b><?=!empty($alrt)?$alrt:""?></b></center>
            <form class="input-ground" id="login1" method="post">
              <h3>House owner Login</h3>
              <input type="hidden" name="h_type" value="ho" />
              <input type="text" id="Username"  name="Username"  style="background-color:white;  width: 300px; height: 35px;"placeholder="user name" required />
              <input type="password" id="password"  name="password"  style="background-color:white; width: 300px ; box-shadow: #080000;height: 35px;"  required placeholder="Password"/>
              <br>
              <br>
              <p style="font-size:19px; color: #516e9c;" >Not registered? <a href="SIgnup.php" style="font-size: smaller;">create an account</a></p>
                  <button type="submit" name="btn_submit" class="submit-btn">Log in</button>
           </form>
           <form class="input-ground" id="login2" method="post">
              <h3>House Keeper Login</h3>
              <input type="hidden" name="h_type" value="hk" />
            <input type="text" id="Username"  name="Username"  style="background-color:white;  width: 300px; height: 35px;"placeholder="ID" required />
            <input type="password" id="password"  name="password"  style="background-color:white; width: 300px ; box-shadow: #080000;height: 35px;"  required placeholder="Password"/>
            <br>
            <br>
            <p style="font-size:19px; color: #516e9c;" >Not registered? <a href="SIgnup.php" style="font-size: smaller;">create an account</a></p>

            <button type="submit" name="btn_submit" class="submit-btn" >Log in</button>


        </form>
        </div>
    

 

      

    </div>

    
    
    </div>  


 <!-- Footer -->
<footer>
  <p>Copyright &copy; 2023 luxuryTime </p>
  <p><a href="mailto:luxurytimeInfo.sa@gmail.com" style="font-size:10px ; color:rgb(255, 255, 255); text-decoration:none;">Contact Us</a></p>

      <!------------  BACK TO TOP   ----------->
      <a href="#" class="to-top">
          <image src="image/to top.png" class="ToTop" alt="toTop"></image>
        </a>
</footer>    

<script>
    var x= document.getElementById("login1")
    var y= document.getElementById("login2")
    var z= document.getElementById("btn")
    function Housekeeper(){
        x.style.left="-400px";
        y.style.left="50px";
        z.style.left="110px";

    }

    function Homeowners(){
        x.style.left="50px";
        y.style.left="450px";
        z.style.left="0px";

    }


  </script>  
   

  
  
  </body>




</html>