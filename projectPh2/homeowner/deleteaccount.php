<?php session_start(); ob_start();
if(isset($_GET)){
 if(!empty($_GET["id"])){
        $delaccout = "delete from users where id ='".$_GET["id"]."'";
   $del =      mysqli_query($conf,$delaccout) or die("Error delete");
   if($del){
        session_destroy(); 
        unset($_SESSION) ;
        header("location:../login.php");
    }
 }
}
?>