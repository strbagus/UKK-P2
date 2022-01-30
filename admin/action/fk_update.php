<?php
    include '../../config.php';
    $id = $_POST['id'];
    $jfasilitas = $_POST['jfasilitas'];
    $fasilitas = $_POST['fasilitas'];

    $sql = mysqli_query($con, "UPDATE tb_fkamar set  fk_jumlah='$jfasilitas',fk_fasilitas='$fasilitas' WHERE fk_id=$id");

    if ($sql) {
        header("location:../fkamar.php?alert=fk_update");
    }else{
        echo "gagal";
    }
?>