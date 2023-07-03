<?php include("header.php");?>
<style>
   body, html{
   width: 100%;
   height: 100%;
   margin: 0;
   font-family: 'Helvetica Neue', sans-serif;
   letter-spacing: 0.5px;
   }
   .price{
   margin-left: 420px;
   margin-top: -79px;
   padding-bottom: 0px;
   margin-bottom: -10px;
   color: #212020;
   padding-top: 10px;
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
   height: 350px;
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
<div class="container2">
   <p style="background-color: white; color:  rgb(87, 86, 86); font-weight:bolder;
      font-size: 40px ; margin-left: 50px; font-family: 'Courier New', monospace; margin-top: -10px;">
      Offers list: <br>
      <br>
   </p>
   <div class="row">
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["reject_submit"])){
                $sel_id = sanitizeInput($_POST["sel_id"]);
                
                $inss = "UPDATE selected_request SET  status='Rejected' WHERE sel_id='$sel_id'";
                $qrr = mysqli_query($conf,$inss) or die(mysqli_error($conf));
                
         }
        elseif(isset($_POST["accept_submit"])){
          $sel_id = sanitizeInput($_POST["sel_id"]);
          $inss = "UPDATE selected_request SET  status='Accepted' WHERE sel_id='$sel_id'";
          $qrr = mysqli_query($conf,$inss) or die(mysqli_error($conf));
        }
        if($qrr) 
                   header("location:HO-viewOffer.php");
    }
        
          //----------------------- Fetch all requests 
        $sel_all_av = "SELECT * FROM ho_requests ,users ho, users hk ,selected_request  WHERE r_id ".
                 " in (SELECT req_id FROM selected_request ".
                "WHERE ".
                " ho_user_id='".$_SESSION["User_code"]."') 
                 and ho_requests.user_id = ho.id
                 and selected_request.req_id = ho_requests.r_id
                 and selected_request.hk_user_id = hk.id
                 and selected_request.status ='Pending'";
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
   
      <div style= float:<?=$css?>; class="cardOL">
          <image src="../image/userIcon.png" class="imagei" alt="userIcon"></image>
          <h5> <strong><a href="../HK-profile.php?id=<?=$rows["hk_user_id"]?>" target="_blank"><?=$rows["fname"] . ' ' .$rows["lname"]?></a></strong></h5>
          <p class="price">
            <strong> <?=$rows["price"]?>SR</strong> 
            <i class="fa fa-money"  style="font-size:24px"></i> <br /><small> per hr</small>
          </p>
          </p>
          <div class="praOL" >
            <p style="font-size: 17px ; margin-top: 30px; ;">
                <strong>You received an offer!</strong>
            <p><strong> Request details:</strong> <br>
                <strong>Kind of job:</strong><?=$rows["kindOfjob"]?>  
                <strong>Type of job:</strong><?=$rows["typeOfjob"]?><br>
                <strong>Availability: </strong><?=$rows["availability"]?><br>
                <strong>Duration: </strong><?=$rows["Duration"]?><br> <br> 
            <p title="Professional cleaner to make your home sparkling clean" style="text-decoration: underline;"> 
                <strong><a href="../HK-profile.php?id=<?=$rows["hk_user_id"]?>"  target="_blank">For more detail</a></strong></p>
            <br> 
            </p>
            
            <form method="post" style=" width: 25px;">
              <input type="hidden" name="sel_id" value="<?=$rows["sel_id"]?>" />
             <p style= "margin-left: 130px; margin-bottom: -59px;">
                <button type="submit" name="reject_submit" class="button" style="color:red;">Reject </button>
            </p>
            </form>
            <form method="post" style=" width: 25px;">
              <input type="hidden" name="sel_id" value="<?=$rows["sel_id"]?>" />
                <p style= "margin-right: 150px; ">
                    <button type="submit" name="accept_submit" class="button" style="color:green;">Accept </button>
                </p>
            </form>
          </div>
      </div>
      <?php } ?>
  </div>
</div>
<?php include("footer.php");?>