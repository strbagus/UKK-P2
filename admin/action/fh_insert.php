<?php
    include '../../config.php';

    $fas = $_POST['fas'];
    $ket = $_POST['ket'];

    $sql = mysqli_query($con, "INSERT INTO tb_fhotel (fh_fasilitas, fh_keterangan) VALUES ('$fas', '$ket')");
    if($sql){
        header("location:../fhotel.php?alert=insert");
    }else{
        header("location:../fhotel.php?alert=insert_gagal");
    }
?>