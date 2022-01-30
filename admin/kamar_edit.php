<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light active">
                            <a href="index.php" class="nav-link ">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item ">
                            <a href="kamar.php" class="nav-link">Fasilitas Kamar</a>
                        </li>
                        <li class="flex-fill nav-item border-start border-light">
                            <a href="fasilitas.php" class="nav-link">Fasilitas Hotel</a>

                        </li>
                        
                    </div>
            </div>

        </div>
</div>
        <!-- header END -->



<div class="container">
    <?php
        $id = $_GET['id'];

        include '../config.php';
        $sql = mysqli_query($con,"SELECT * FROM tb_jkamar WHERE jk_id=$id");
        $d = mysqli_fetch_array($sql);
    ?>
        <br><br><br><br><br><br>
        <div class="row">
            <div class="col-md-4 mx-auto bg-light p-5">
                <h3 class="text-center">Edit Data Kamar</h3>
                <h6><?php echo $d['jk_tipe']; ?></h6>
                <hr>
                <form action="action/jk_update.php?" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <label>Jumlah Kamar</label>
                        <input type="number" name="jk" value="<?php echo $d['jk_jumlah']; ?>" class="form-control" required="required">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Simpan" class="btn btn-primary" name="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>