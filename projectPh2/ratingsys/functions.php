<?php

function userRating($userId, $conn)
{
    
    $average = 0;
    $avgQuery = "SELECT * FROM selected_request WHERE sel_id = '" . $userId . "'";
  
    $total_row = 0;
    
    if ($result = mysqli_query($conn, $avgQuery)) {
        // Return the number of rows in result set
        $total_row = mysqli_num_rows($result);
    } // endIf
   
    if ($total_row > 0) {
        foreach ($result as $row) {
            $average = round($row["rate"]);
        } // endForeach
    } // endIf
 
    return $average;
}
 // endFunction
// function totalRating($restaurantId, $conn)
// {
//     $totalVotesQuery = "SELECT * FROM tbl_rating WHERE restaurant_id = '" . $restaurantId . "'";
    
//     if ($result = mysqli_query($conn, $totalVotesQuery)) {
//         // Return the number of rows in result set
//         $rowCount = mysqli_num_rows($result);
//         // Free result set
//         mysqli_free_result($result);
//     } // endIf
    
//     return $rowCount;
// }//endFunction
