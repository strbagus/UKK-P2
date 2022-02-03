<?php
include '../../config.php';
$id = $_POST['id'];
$namapesan = $_POST['namapesan'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$namatamu = $_POST['namatamu'];
$tipe = $_POST['tipe'];
$jumlah = $_POST['jumlah'];
$cekin = $_POST['cekin'];
$cekout = $_POST['cekout'];

$sql = mysqli_query($con, "UPDATE 
                            tb_reservasi 
                            SET
                            res_namapesan='$namapesan',
                            res_email='$email',
                            res_nohp='$nohp',
                            res_namatamu='$namatamu',
                            res_tipe='$tipe',
                            res_jumlah='$jumlah',
                            res_cekin='$cekin',
                            res_cekout='$cekout'
                            WHERE
                            res_id=$id");

if ($sql) {
    header("location:../index.php?alert=update");
}else{
    echo "tipe: ".$tipe." pesan: ".$namapesan." email: ".$email." nohp: ".$nohp." tamu: ".$namatamu." jumlah: ".$jumlah." tgl: ".$cekin.$cekout;
    //header("location:../index.php?alert=update_gagal");
}

?>