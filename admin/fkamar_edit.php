<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light">
                            <a href="index.php" class="nav-link ">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item active ">
                            <a href="fkamar.php" class="nav-link">Fasilitas Kamar</a>
                        </li>
                        <li class="flex-fill nav-item border-start border-light">
                            <a href="fhotel.php" class="nav-link">Fasilitas Hotel</a>

                        </li>
                        
                    </div>
            </div>

        </div>
</div>
        <!-- header END -->



<div class="container">
    <?php 
        include '../config.php';

        $id = $_GET['id'];
        $sql = mysqli_query($con, "SELECT * FROM tb_fkamar WHERE fk_id=$id");
        $d = mysqli_fetch_array($sql);
        
    ?>
        <br><br>
        <div class="row">
            <div class="col-md-4 mx-auto bg-light p-5">
                <h5>Edit</h5>
                <h3 class="text-center">Fasilitas Kamar</h3>
                <hr>
                <form action="action/fk_update.php?" method="post">
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div class="form-group">
                        <label>Nama Tipe Kamar</label>
                        <select type="text" name="tipe" class="form-control"  required="required">
                            <option selected><?php echo $d['fk_tipe']?></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Fasilitas</label>
                        <input type="number" name="jfasilitas" value="<?php echo $d['fk_jumlah']?>" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="text" name="fasilitas" value="<?php echo $d['fk_fasilitas']?>" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" value="Ubah" class="btn btn-primary" >
                        <a href="fkamar.php" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>