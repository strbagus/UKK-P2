<?php
    include '../../config.php';
    $id = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM tb_fkamar WHERE fk_id=$id");
    if($sql){
        header("location:../fkamar.php?alert=fasilitas_delete");

    }
?>