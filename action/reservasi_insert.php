<?php
    
include '../config.php';

    $namapesan = $_POST['namapesan'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $namatamu = $_POST['namatamu'];
    $tipe = $_POST['tipe'];
    $jumlah = $_POST['jumlah'];
    $cekin = $_POST['cekin'];
    $cekout = $_POST['cekout'];
                
    $sql = mysqli_query($con, "INSERT INTO tb_reservasi (res_namapesan, res_email, res_nohp, res_namatamu, res_tipe, res_jumlah, res_cekin, res_cekout) VALUES ('$namapesan','$email','$nohp','$namatamu','$tipe','$jumlah','$cekin','$cekout')");

    if($sql){
        header("location:../reservasi_detail.php");
    }else{
        header("location:../index.php?alert=insert_gagal");
    }
    
?>