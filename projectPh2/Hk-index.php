<?php include("conn/conn.php"); ob_start(); session_start();
 
    $id = "";
  if((
      (!isset($_SESSION["User_code"]) && $_SESSION["User_code"] == '') || 
      (!isset($_SESSION["User_email"]) && $_SESSION["User_email"] == '') ) && 
      $_SESSION["h_type"] == "hk"
    )
   {
        unset($_SESSION);
	     if(!empty($_GET["id"])) 
         $id = $_GET["id"];
   }
  else
    {
        if($_SESSION["h_type"] =='hk')
        {   
               $id = $_SESSION["User_code"] ; 
               $admin_name = $_SESSION["User_fullname"];
               $h_type= $_SESSION["h_type"];
            
        }
    }
    if(!empty($_GET["id"])) 
       $id = $_GET["id"];
 
    $header_userid= mysqli_query($conf,"SELECT * FROM users where id='$id'") or die(mysqli_error($conf));
    $header_useridrow = mysqli_fetch_array($header_userid);
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="stylesheet.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <title>Home page</title>
      <style>
         body{
         background-color: rgb(255, 247, 237);
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
         .title h2{
         color: rgb(104, 104, 104);
         font-size: 30px;
         width: 1130px;
         margin: 30px auto;
         text-align: center;
         font-family: 'Courier New', monospace;
         }
         .box{
         display: flex;
         justify-content: center;
         align-items: center;
         min-height: 400px;
         }
         .card{
         height: 300px;
         width: 380px;
         padding: 20px 35px;
         background: linear-gradient(to bottom right,#a9bdd4,#95aac1);
         border-radius: 20px;
         margin: 15px;
         position: relative;
         overflow: hidden;
         text-align: center;
         box-shadow: 2px 10px 40px rgba(8, 8, 8, 0.4);
         transition: 0.5s ease;
         cursor: pointer;
         }
         .card:hover{
         background: linear-gradient(to bottom right,#a9bdd4,#95aac1);
         background: linear-gradient(to bottom right,#95aac1,#a9bdd4);
         transform: scale(1.09);
         }
         .icon{
         margin-left: 120px;
         margin-bottom: 23px;
         margin-top: 13px;
         color: #983b60;
         height: 55px;
         width: 55px;
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
         background-color:#b3c9e1;
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
         .main{
         border-top: 3px solid #bbb ;
         width: 1000px;
         max-width: 95%;
         margin: 0 auto;
         display: flex;
         align-items: center;
         justify-content: space-around;
         padding: 50px;
         margin: 20px;
         }
         /* About US */
         .about{
         width: 100%;
         padding: 100px 0px;
         }
         .about img{
         height: auto;
         width: 430px;
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
         <image src="image/logooo.png" class="logo" alt="logo">
         <ul>
            <li style="text-decoration:underline ;"><a href="">Home</a></li>
            <li><a href="HK-jobOffers.html">Job offers</a></li>
            <li><a href="HK-jobStatus.html">Job status</a></li>
            <li><a href="HK-current.html">Current job</a></li>
            <li><a href="HK-PREVIOUS.html">Previous job</a></li>
         </ul>
         <?php if(!empty($_SESSION["User_code"]) && $_SESSION["h_type"] == "hk"){?>
         <div class="dropdown">
            <image src="image/userIcon.png" class="image" alt="User Icon">
            <ul>
               <li><a href="../html/HK-profile.php">View Profile</a></li>
               <br><br>
               <li><a href="#"><br></a></li>
               <li><a href="signout.php">Sign-Out</a></li>
            </ul>
         </div>
         <?php } else{
            echo "<a href='login.php' style='color:white; marign-right:25px' class='btn btn-danger btn-lg'>Login</a>";
         }?>
      </div>
      <a href="#" class="back">
         <image src="image/back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
      </a>
      <div class="container2" style=" height: 1350px;">
         <div class="option">
            <div class="title">
               <!--chsnhge the qouts-->
               <h2>“There is nothing more beautiful than someone who goes out of their way to make life beautiful for others.” </h2>
            </div>
            <div class="box">
               <!------------  VIEW JOB OFFERS   ----------->
               <div class="card">
                  <image src="image/job.png" alt="Request icon" class="icon">
                  <h5 style="margin-left: -10px;">View job offers</h5>
                  <div class="pra">
                     <p>view the new offers and see the status of it</p>
                     <p style="text-align: center;" >
                        <a class="button" href="HK-jobOffers.php" >view</a>
                        <a class="button" href="HK-jobStatus.php" >status</a>
                     </p>
                  </div>
               </div>
               <!------------  MY JOBS   ----------->
               <div class="card">
                  <image src="image/check-list.png" alt="job icon" class="icon">
                  <h5 style="    margin-left: -10px;">My jobs</h5>
                  <div class="pra">
                     <p>view current and previous jobs</p>
                     <br>
                     <!--أحط الروابط--------------------------------------------------------------------------->
                     <p style="text-align: center;">
                        <a class="button" href="HK-current.php" >current </a>
                        <a class="button" href="HK-PREVIOUS.php">previous</a>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <!---- About us -->
         <section id="aboutus" class="about">
            <div class="main">
               <img src="../image/hotel_housekeeper.webp"  style="border-radius:20px ;   box-shadow: 2px 5px 12px rgba(8, 8, 8, 0.4);
                  " alt="housekeeper picture">
               <div class="about-text">
                  <h2>About Us</h2>
                  <h5>luxuryTime <span> </span></h5>
                  <p style="font-size:22px; width: 550px;">Trust and safety sets Housekeeper apart from the other Housekeepers sites. You’ll get the quickest response from Housekeeper in your area.<br> LuxuryTime provides you with Housekeeper reviews written by Homeowners.</p>
                  <p> </p>
               </div>
            </div>
         </section>
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
   </body>
</html>