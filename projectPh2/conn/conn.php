<?php  error_reporting(0);
// بيانات الاتصال على قاعدة البيانات 
	$user = 'root';  // اسم المستخدم على القاعدة
	$pass = ''; // كلمة مرور المستحدم
	$server = 'localhost'; // السيرفر 
	$db_name = 'homeservdb'; // اسم قاعدة البيانات
	 
 
	
	//$paypal_email = "mohdpay.il@gmail.com"; // بريد البيبال
	$conf = mysqli_connect($server,$user , $pass,$db_name); // عمل اتصال على البيانات الي بالاعلى 
 
	function clean_value($conf, $var)
	{
		$var = htmlspecialchars($var);
		$var = htmlentities($var);
		$var = mysqli_real_escape_string($conf, $var);
		$var = strip_tags($var);
		$var = trim($var);
		$var = htmlspecialchars_decode($var);
		return $var;
	}
	 
	 function redundancy_where_value_s($conf , $table , $where_coll , $val , $other_conds)
	 {
		$sel = mysqli_query($conf,"select count(*) CT from ".$table." where ".$where_coll." = '".$val."' ".$other_conds) or die(mysql_error());
		$row = mysqli_fetch_array($sel);
		return $row["CT"];
	 }
	    // Function to sanitize user input
		function sanitizeInput($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
	 
?>