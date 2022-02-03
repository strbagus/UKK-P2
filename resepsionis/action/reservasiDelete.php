<?php
    include '../../config.php';

    $id = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM  tb_reservasi WHERE res_id=$id");
    if($sql){
        header("location:../index.php?alert=delete");
    }else{
        header("location:../index.php?alert=delete_gagal");
    }
?>