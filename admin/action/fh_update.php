<?php
    include '../../config.php';
    $id = $_POST['id'];
    $fas = $_POST['fas'];
    $ket = $_POST['ket'];

    $sql = mysqli_query($con, "UPDATE tb_fhotel set  fh_fasilitas='$fas',fh_keterangan='$ket' WHERE fh_id=$id");

    if ($sql) {
        header("location:../fhotel.php?alert=fh_update");
    }else{
        echo "gagal";
    }
?>