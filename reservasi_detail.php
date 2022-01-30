<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background: #f0f0f0;">
    <br><br><br>
    <div class="container bg-light py-5 px-3">
        <?php
            include 'config.php';

            $sql = mysqli_query($con, "SELECT * FROM tb_reservasi ORDER BY res_id DESC LIMIT 1");
            $d = mysqli_fetch_array($sql);
            $tipe = $d['res_tipe'];
            $sql2 = mysqli_query($con, "SELECT * FROM tb_jkamar WHERE jk_id=$tipe");
            $d2 = mysqli_fetch_array($sql2);
        ?>
        <h3>Detail Reservasi</h3>
        <hr>
        <p>Reservasi Atas Nama : <?php echo $d['res_namapesan'];?></p>
        <p>Rincian:</p>
        <div class="row border rounded py-4 px-3 mx-5 d-flex justify-content-center">
            <div class="col-md-2 d-flex flex-column text-right">
                <p>Email</p>
                <p>No Handphone</p>
                <p>Nama Tamu</p>
                <p>Tipe Kamar</p>
                <p>Jumlah Kamar</p>
                <p>Tanggal Cek In</p>
                <p>Tanggal Cek Out</p>

            </div>
            <div class="col-md-4 d-flex flex-column">
                <p>: <?php echo $d['res_email'];?></p>
                <p>: <?php echo $d['res_nohp'];?></p>
                <p>: <?php echo $d['res_namatamu'];?></p>
                <p>: <?php echo $d2['jk_tipe'];?></p>
                <p>: <?php echo $d['res_jumlah'];?></p>
                <p>: <?php echo $d['res_cekin'];?></p>
                <p>: <?php echo $d['res_cekout'];?></p>
            </div>
        </div>
        <br>
        <div >
            <p class="text-center alert alert-danger">Save PDF lalu Print Detail Reservasi sebagai Bukti untuk diserahkan kepada Resepsionis ketika Cek In.</p>
            <div class="d-flex justify-content-center">
                <a href="action/reservasi_pdf.php" class="btn btn-warning mx-2">Save PDF</a>
                <form action="index.php" method="post" onsubmit="return confirm('Pastikan sudah Save PDF atau Print. Setelah keluar tidak akan bisa kembali ke halaman ini')">
                    <input class="btn btn-primary" type="submit" name="submit" value="Kembali">
                </form>
            </div>
            <br><br>
        
        </div>
    </div>
    <br><br>    
    <script>
</body>
</html>