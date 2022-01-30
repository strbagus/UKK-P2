<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light">
                            <a href="index.php" class="nav-link ">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item  ">
                            <a href="fkamar.php" class="nav-link">Fasilitas Kamar</a>
                        </li>
                        <li class="flex-fill nav-item border-start border-light active">
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

        $sql = mysqli_query($con, "SELECT * FROM tb_fhotel");
        
    ?>
        <br><br><br><br>
        <div class="row">
            <div class="col-md-4 mx-auto bg-light p-5">
                <h3 class="text-center">Tambah Fasilitas Hotel</h3>
                <hr>
                <form action="action/fh_insert.php?" method="post">
                    
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <input type="text" name="fas"  class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <input type="text" name="ket"  class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group d-flex justify-content-between">
                        <input type="submit" value="Tambah" class="btn btn-primary" name="Simpan">
                        <a href="fhotel.php" class="btn btn-warning">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>