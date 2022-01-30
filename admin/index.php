<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light active">
                            <a href="index.php" class="nav-link ">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item ">
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
        <br><br><br>
    <div class="container py-5 px-3 bg-light">
        
        <h3>Data Kamar</h3>
        
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                include '../config.php';

                $sql = mysqli_query($con, "SELECT * FROM tb_jkamar");
                while($d = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                        <td><?php echo $d['jk_tipe'] ?></td>
                        <td><?php echo $d['jk_jumlah']?></td>
                        <td><a href="kamar_edit.php?id=<?php echo $d['jk_id']?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;<a href="action/jk_delete.php?id=<?php echo $d['jk_id']?>" class="btn btn-sm btn-danger">hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
            
           



        </table>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href="kamar_tambah.php" class="btn btn-sm btn-success m-1">Tambah Tipe</a>
            </div>
        </div>
    </div>