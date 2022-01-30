<?php
    include '../../config.php';

    $tipe = $_POST['tipe'];
    $jf = $_POST['jfasilitas'];
    $fasilitas = $_POST['fasilitas'];

    $sql = mysqli_query($con, "INSERT INTO tb_fkamar (fk_tipe, fk_jumlah, fk_fasilitas) VALUES ('$tipe', '$jf', '$fasilitas')");
    if($sql){
        header("location:../fkamar.php?alert=insert");
    }else {
        
        header("location:../fkamar.php?alert=insert_gagal");
    }
?>