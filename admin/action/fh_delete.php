<?php
    include '../../config.php';
    $id = $_GET['id'];

    $sql = mysqli_query($con, "DELETE FROM tb_fhotel WHERE fh_id=$id");
    header("location:../fhotel.php?alert=fasilitas_delete");
?>