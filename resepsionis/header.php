<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="../assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Hotel Hebat</title>
    <?php
        include '../config.php';
        session_start();
        if($_SESSION['status'] != "resepsionis_login"){
            header("location:../login.php?alert=belum_login");
        }
    ?>
</head>
<body style="background: #f0f0f0;">
<div class="header navbar-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-3 align-self-end">
                    <div class="foto-box">
                        
                        <img src="../assets/img/dummy.jpeg" alt="Logo Hotel" class="border circle">

                    </div>
                </div>

                <div class="col-md-9 d-flex justify-content-end align-self-end">
                        <div class="d-flex flex-row ">
                            <p>Halo&nbsp;</p>
                            <p><?php 
                            if($_SESSION['role'] =="resep"){
                               echo "Resepsionis,"; 
                            }else{
                                echo "Administrator,";
                            }
                            ?>&nbsp;</p>
                            <p><?php echo $_SESSION['nama']."!"?>&nbsp;&nbsp;</p>
                        </div>
                    <a href="action/logout.php" ><div class="btn btn-sm btn-danger">Logout</div></a>
                </div>
            </div>
            <div class="row d-flex justify-content-end">
                <div class="navbar-nav col-md-4 d-flex flex-row justify-content-evenly text-center">