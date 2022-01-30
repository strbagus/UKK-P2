<?php
    include 'header.php';
?>
                        <li class="nav-item flex-fill border-end border-light">
                            <a href="index.php" class="nav-link ">Kamar</a>
                        </li>
                        <li class="flex-fill nav-item active">
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
    <div class="container px-3 py-5 bg-light">
        
        <h3>Data Fasilitas Kamar</h3>
        
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th>Tipe Kamar</th>
                    <th>Jumlah</th>
                    <th>Fasilitas</th>
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                include '../config.php';
                $sql = mysqli_query($con, "SELECT * FROM tb_fkamar");
                
                while($d=mysqli_fetch_array($sql)){
                    $tipe = $d['fk_tipe'];                    
                    $sql2 = mysqli_query($con, "SELECT * FROM tb_jkamar WHERE jk_id=$tipe");
                    $d2 = mysqli_fetch_array($sql2);
                    ?>
                    <tr>
                        <td>
                        <?php
                            echo $d2['jk_tipe'];
                        
                        ?></td>
                        <td><?php echo $d['fk_jumlah']?></td>
                        <td><?php echo $d['fk_fasilitas']?></td>
                        <td><a href="fkamar_edit.php?id=<?php echo $d['fk_id']?>" class="btn btn-sm btn-warning">Edit</a>&nbsp;<a href="action/fk_delete.php?id=<?php echo $d['fk_id']?>" class="btn btn-sm btn-danger">hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
            
           



        </table>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href="fkamar_tambah.php" class="btn btn-sm btn-success m-1">Tambah Tipe</a>
            </div>
        </div>
    </div>