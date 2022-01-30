<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light ">
                            <a href="index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="flex-fill nav-item">
                            <a href="kamar.php" class="nav-link">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item border-start border-light active">
                            <a href="fasilitas.php" class="nav-link">Fasilitas</a>

                        </li>
                        
                    </div>
            </div>

        </div>

    </div>
    <br><br>
        <!-- MULAI DISINI -->
    <div class="container bg-light px-3 py-5 rounded">
        <h3>Fasilitas Hotel</h3>
        <hr>
        <div class="row">
            <?php
                include 'config.php';
                $sql = mysqli_query($con, "SELECT * FROM tb_fhotel");
                while($d=mysqli_fetch_array($sql)){
                    ?>
                    <div class="border col-md-5 mx-auto py-3 rounded px-3 my-2">
                        <img src="assets/img/dummy2.jpeg" alt="gambar tipe" style="width: 100%">
                        <h4><?php echo $d['fh_fasilitas']?></h4>
                        <hr>
                        <p><?php echo $d['fh_keterangan']?></p>
                    </div>
                    

                    <?php
                }
            ?>
        </div>

        <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href="reservasi.php" class="btn btn-primary">Pesan Kamar</a>
                </div>
            </div>
    </div>
    <br>
    <br>