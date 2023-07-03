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
      <!-- <link rel="stylesheet" type="text/css" href="./css/stylesheet.css"> -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
      <title>House Keeper and house owner</title>
      <style>
         body{
         background-color: rgb(255, 247, 237);
         }
         .price{
         margin-left: 420px;
         margin-top: -50px;
         padding-bottom: 0px;
         margin-bottom: -10px;
         color: #212020;
         padding-top: 10px;
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
         .cardOL .button{
         background-color: rgb(255, 247, 237);
         color: rgb(104, 104, 104);;
         text-decoration: none;
         font-weight: bold;
         border: 1px solid transparent;
         padding: 7px 15px;
         border-radius: 15px;
         transition: .4s; 
         margin-right:290px  ;
         margin-bottom: 10px;
         }
         .cardOL .button:hover{
         background-color: transparent;
         border: 2px solid  rgb(104, 104, 104);
         cursor: pointer;
         }
         .cardOL{
         height: 358px;
         width: 550px;
         padding: 10px 15px;
         background: linear-gradient(#95aac1, #a9bdd4 );
         border-radius: 20px;
         margin: 50px;
         position: relative;
         overflow: hidden;
         text-align: left;
         box-shadow: 2px 5px 20px rgba(210, 197, 197, 0.4);
         margin-top: -10px;
         }
         .cardOL h5{
         margin-bottom: 25px;
         margin-top: -30px;
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
         <?php $page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>

         <ul>
            <li <?=$page=="HK-homepage.php"? "style='text-decoration:underline ;'":""?>><a href="HK-homepage.php">Home</a></li>
            <li <?=$page=="HK-jobOffers.php"? "style='text-decoration:underline ;'":""?>><a href="HK-jobOffers.php">Job offers</a></li>
            <li <?=$page=="HK-jobStatus.php"? "style='text-decoration:underline ;'":""?>><a href="HK-jobStatus.php">Job status</a></li>
            <li <?=$page=="HK-current.php"? "style='text-decoration:underline ;'":""?>><a href="HK-current.php">Current job</a></li>
            <li <?=$page=="HK-PREVIOUS.php"? "style='text-decoration:underline ;'":""?>><a href="HK-PREVIOUS.php">Previous job</a></li>
         </ul>
         <?php if(!empty($_SESSION["User_code"]) &&  $_SESSION["h_type"] == "hk"){?>
         <div class="dropdown">
            <image src="image/userIcon.png" class="image" alt="User Icon">
            <ul>
               <li><a href="HK-profile.php">View Profile</a></li>
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