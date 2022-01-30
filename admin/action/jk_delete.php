<?php
    include '../../config.php';
    $id = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM tb_jkamar WHERE jk_id=$id");
    if ($sql) {
        header("location:../index.php?alert=kamar_delete");
    }else{
        header("location:../index.php?alert=gagal_delete$id");
    }
?>