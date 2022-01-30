

<?php

include '../config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * FROM tb_user WHERE user_username='$username' AND user_password='$password'";

$login = mysqli_query($con, $sql);

$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    session_start();
    $_SESSION['id'] = $data['user_id'];
    $_SESSION['username'] = $data['user_username'];
    $_SESSION['nama'] = $data['user_name'];
    $_SESSION['role'] = $data['user_role'];

    if($data['user_role'] == "admin"){
        header("location:../admin/");
        $_SESSION['status'] = "admin_login";
    }else if($data['user_role'] == "resep"){
        header("location:../resepsionis/");
        $_SESSION['status'] = "resepsionis_login";
    }else{
        header("location:../login.php?alert=gagal");
    }

}else{
    
    header("location:../login.php?alert=gagal_userpass");
}
?>
