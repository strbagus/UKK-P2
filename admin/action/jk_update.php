<?php
    include '../../config.php';

    $id = $_POST['id'];
    $jk = $_POST['jk'];

    $sql = mysqli_query($con, "UPDATE tb_jkamar set  jk_jumlah='$jk' WHERE jk_id=$id");

    if ($sql) {
        header("location:../index.php?alert=kamar_update");
    }else{
        echo "gagal";
    }
?>