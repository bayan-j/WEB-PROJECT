
<?php include("../conn/conn.php"); ob_start(); session_start();
 
    $id = "";
  if((
      (!isset($_SESSION["User_code"]) && $_SESSION["User_code"] == '') || 
      (!isset($_SESSION["User_email"]) && $_SESSION["User_email"] == '') ) && 
      $_SESSION["h_type"] == "ho"
    )
   { 
        unset($_SESSION);
	     if(!empty($_GET["id"])) 
         $id = $_GET["id"];
   }
  else
    {
        if($_SESSION["h_type"] =='ho')
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
<html>
    <head>
      <title> House Keeper and owner system</title>
      <link rel = "stylesheet" href ="../css/home.css">
      <script src="../js/postButton.js"></script>
    
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="style.css" />
       <style>
    
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
              background-color: rgb(255, 247, 237);
          
          
            }
          
            footer {
              text-align: center;
              padding: 0.05px;
              background-image: linear-gradient(to bottom right,#95aac1, #4b6480);
          
              color: white;
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
          .logo:hover{
            margin-left : 30px;
              width:100px;
              cursor:pointer;
              border-radius: 10px; 
              box-shadow: 2px 5px 12px rgba(60, 53, 53, 0.4);
              transform: scale(1.09);
          
            }
          .header ul li{
          list-style:none;
          display:inline-block;
          margin: 0 20px;
          position: relative;
          
          }
          .header ul li a{
          text-decoration: none;
          color:white;
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
          
          
          .card{ width:720px; height:388px; margin-left: 215px;
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
            background-color: #353836;
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
      </style>
    </head>
    
    <body>
      <div class="header" >
        <img src="../image/logooo.png" class="logo">
        <?php $page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
            <ul>
                <li <?=$page=="HO-homepage.php"? "style='text-decoration:underline ;'":""?>><a href="HO-homepage.php">Home</a></li>
                <li <?=$page=="HO-PreviousRequest.php"? "style='text-decoration:underline ;'":""?>><a href="HO-PreviousRequest.php">Previous Request</a></li>
                <?php if(!empty($_SESSION["User_code"])){?>
                <li <?=$page=="HO-newRequest.php"? "style='text-decoration:underline ;'":""?>><a href="HO-newRequest.php">New Request</a></li>
                <?php } ?>
                <li <?=$page=="HO-viewOffer.php"? "style='text-decoration:underline ;'":""?>><a href="HO-viewOffer.php">Offer list</a></li>
                <li  <?=$page=="HO-currentBooking.php"? "style='text-decoration:underline ;'":""?>><a href="HO-currentBooking.php">Current Booking</a></li>
                <li <?=$page=="HO-PreviousBooking.php"? "style='text-decoration:underline ;'":""?>><a href="HO-PreviousBooking.php">Previous Booking</a></li>
            
            </ul>
         <?php if(!empty($_SESSION["User_code"]) && $_SESSION["h_type"] == "ho"){?>
          <div class="dropdown">
                <img src="../image/userIcon.png" class="image">
                <ul>
                
                  <li><a href="HO-profile.php">View Profile</a></li><br>
                  <li><a href="#"><br><br></a></li>
                  <li><a href="../signout.php">Sign-Out</a></li>
                </ul>
           </div> 
           <?php } else{
            echo "<a href='../login.php' style='color:white; marign-right:25px' class='btn btn-danger btn-lg'>Login</a>";
         }?>
      </div> 
    
      <a href="#" class="back">
        <img src="../image/back.png" class="back" alt="back" style="width:40px ; margin-left: 30px; margin-top: 30px;" onclick="history.go(-1);"></image>
      </a>