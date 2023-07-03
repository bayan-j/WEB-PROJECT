<?php
require_once ('../conn/conn.php');
if (isset($_POST["rate"], $_POST["selected_requestid"])) {
    
    $selected_requestid = $_POST["selected_requestid"];
    $rating = $_POST["rate"];
    $hkuserid = $_POST["hkuserid"];
    $req_id = $_POST["req_id"];
    
    $checkIfExistQuery = "select * from selected_request where sel_id = '" . $selected_requestid . "' and hk_user_id ='$hkuserid' and req_id='$req_id' and rate > 0";
    if ($result = mysqli_query($conf, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }
    
    if ($rowcount == 0) {
        $insertQuery = "UPDATE selected_request SET rate ='$rating' 
             WHERE sel_id='$selected_requestid'";
        $result = mysqli_query($conf, $insertQuery);
        echo "Request Voted successfuly ";
    } else {
        echo "Already Voted!";
    }
}
