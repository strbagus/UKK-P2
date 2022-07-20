<?php 
    $con = new mysqli("localhost", "root", "", "hotelukk");

    if(!$con){
        echo "Connection ERROR: " . $con->connect_error();
    }
?>
