<?php
    include '../../config.php';

    $tipe = $_POST['tipe'];
    $jk = $_POST['jk'];

    $sql = mysqli_query($con, "INSERT INTO tb_jkamar (jk_tipe, jk_jumlah) VALUES ('$tipe', '$jk')");
    if($sql){
        header("location:../index.php?alert=insert");
    }else{
        header("location:../index.php?alert=insert_gagal");
    }
?>