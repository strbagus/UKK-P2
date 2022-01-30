<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light">
                            <a href="index.php" class="nav-link ">Home</a>
                        </li>
                        <li class="flex-fill nav-item ">
                            <a href="kamar.php" class="nav-link">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item border-start border-light">
                            <a href="fasilitas.php" class="nav-link">Fasilitas</a>

                        </li>
                        
                    </div>
            </div>

        </div>
</div>
        <!-- Header END -->
<br><br>
    <div class="container">
        <div class="row ">
                <div class="col-md-6 form-reservasi mx-auto bg-light py-3 px-3 border">

                <?php 
                include "config.php";
                
                $kamar = mysqli_query($con, "SELECT * FROM tb_jkamar");
                ?>

                <form action="action/reservasi_insert.php" method="post">
                    <h3>Form Reservasi</h3>
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" class="form-control" name="namapesan" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="number" class="form-control" name="nohp" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Tamu</label>
                        <input type="text" class="form-control" name="namatamu" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Tipe Kamar</label>
                        <select name="tipe" class="form-control" name="tipe">
                            <option disabled selected>-- Plih Tipe Kamar --</option>
                            <?php while($d = mysqli_fetch_array($kamar)){ ?>
                                <option value="<?php echo $d['jk_id']?>"><?php echo $d['jk_tipe']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="number" class="form-control" name="jumlah" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Cek In</label>
                        <input type="date" class="form-control" name="cekin" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Cek Out</label>
                        <input type="date" class="form-control" name="cekout" required="required">
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" class="btn btn-primary" value="Pesan" name="Pesan">
                        <a href="index.php" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
                </div>
                
            </div>
    </div>
            
    <br><br>