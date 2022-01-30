<?php 
    $con = new mysqli("localhost", "bagus", "1sampai8", "db_hotelukk");

    if(!$con){
        echo "Connection ERROR: " . $con->connect_error();
    }
?>