<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill  border-light active">
                            <a href="index.php" class="nav-link ">Reservasi</a>
                        </li>
                        
                    </div>
            </div>

        </div>
</div>
    
<br><br>
<div class="container">
    <div class="col-md-6 mx-auto bg-light p-4">
                <?php 
                $id = $_GET['id'];
                $sql = mysqli_query($con, "SELECT * FROM tb_reservasi WHERE res_id=$id");
                $d = mysqli_fetch_array($sql); 

                ?>

                <form action="action/reservasiUpdate.php" method="post">
                    <h3>Edit Reservasi</h3>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div class="form-group">
                        <label>Nama Pemesan</label>
                        <input type="text" value="<?php echo $d['res_namapesan']?>" class="form-control" name="namapesan" required="required">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" value="<?php echo $d['res_email']?>" class="form-control" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="number" value="<?php echo $d['res_nohp']?>" class="form-control" name="nohp" required="required">
                    </div>
                    <div class="form-group">
                        <label>Nama Tamu</label>
                        <input type="text" value="<?php echo $d['res_namatamu']?>" class="form-control" name="namatamu" required="required">
                    </div>
                    <div class="form-group">
                        <?php 
                        $kamar = mysqli_query($con, "SELECT * FROM tb_jkamar");
                        ?>
                        <label>Nama Tipe Kamar</label>
                        <select name="tipe" class="form-control" name="tipe" required="required">
                            <option disabled selected>-- Plih Tipe Kamar --</option>
                            <?php while($dk = mysqli_fetch_array($kamar)){ ?>
                                <option value="<?php echo $dk['jk_id']?>"><?php echo $dk['jk_tipe']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="number"  value="<?php echo $d['res_jumlah']?>" class="form-control" name="jumlah" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Cek In</label>
                        <input type="date"  value="<?php echo $d['res_cekin']?>" class="form-control" name="cekin" required="required">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Cek Out</label>
                        <input type="date" value="<?php echo $d['res_cekout']?>" class="form-control" name="cekout" required="required">
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" class="btn btn-primary" value="Ubah" name="ubah">
                        <a href="index.php" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
    </div>
</div>