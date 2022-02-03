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
<div class="container bg-light py-5 px-3">
        <h3>Data Reservasi</h3>
        <hr>
        <div class="row">
            <div class="col-md-8 border-end">
                <form action="index.php" method="get">
                    <h6>Filter Data</h6>
                    <div class="panel d-flex flex-row justify-content-evenly">
                        <div class="form-group">
                            <label>Dari Tanggal</label>
                            <input type="date" name="daritgl" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampaitgl" class="form-control" required="required">
                        </div>
                        <div class="form-group d-flex align-items-end">
                            <input type="submit" class="btn btn-primary" value="Filter">
                        </div>
                    </div>
                    
                </form>
            </div>

            <div class="col-md-4">
                <h6>Cari Nama Tamu</h6>
                <form action="index.php" method="get">
                    <div class="panel d-flex flex-row">
                        <div class="form-group mx-2">
                            <label>Isi Nama</label>
                            <input type="text" name="namacari" class="form-control" required="required">
                        </div>
                        <div class="form-group d-flex align-items-end">
                            <input type="submit" class="btn btn-primary" value="Cari">
                        </div>
                    </div>
                    
                </form>
            </div>

            <?php 
                $dari = $_GET['daritgl'];
                $sampai = $_GET['sampaitgl'];
                $nama = $_GET['namacari'];
                if(isset($_GET['daritgl'])&&isset($_GET['sampaitgl'])){
                    $sql = mysqli_query($con, "SELECT * 
                        FROM 
                        tb_reservasi INNER JOIN tb_jkamar 
                        ON
                        tb_reservasi.res_tipe = tb_jkamar.jk_id 
                        WHERE 
                        date(res_cekin) > '$dari' 
                        && 
                        date(res_cekin) < '$sampai'");
                    $ind = "visible";
                }else if(isset($_GET['namacari'])){
                    
                    $sql = mysqli_query($con, "SELECT * 
                        FROM 
                        tb_reservasi INNER JOIN tb_jkamar 
                        ON
                        tb_reservasi.res_tipe = tb_jkamar.jk_id 
                        WHERE 
                        LOWER(res_namatamu)=LOWER('$nama')
                        OR
                        LOWER(res_namapesan)=LOWER('$nama')");
                    $ind = "visible";
                }
                
                else{
                    $sql = mysqli_query($con, "SELECT * 
                        FROM 
                        tb_reservasi INNER JOIN tb_jkamar  
                        ON
                        tb_reservasi.res_tipe = tb_jkamar.jk_id");
                    $ind = "invisible";
                }
                

            ?>
        </div>
        <br><hr>
                <div class="<?php echo $ind;?> d-flex justify-content-end m-3">
                    <a href="index.php" class="btn btn-primary">Tampilkan Semua</a>
                </div>

        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <thead>
                <tr>
                    <th style="width:1%;">No</th>
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Nama Tamu</th>
                    <th>Tipe Kamar</th>
                    <th>Kamar</th>
                    <th>Cek In</th>
                    <th>Cek Out</th>
                    <th>Aksi</th>
                </tr> 
            </thead>
            <tbody>
                <?php
                $no = 1;
                while($d = mysqli_fetch_array($sql)){
                    
                    ?>

                    <tr>
                        <td><?php echo $no++?></td>
                        <td><?php echo $d['res_namapesan'] ?></td>
                        <td><?php echo $d['res_email']?></td>
                        <td><?php echo $d['res_nohp']?></td>
                        <td><?php echo $d['res_namatamu']?></td>
                        <td><?php echo $d['jk_tipe']?></td>
                        <td><?php echo $d['res_jumlah']?></td>
                        <td><?php echo $d['res_cekin']?></td>
                        <td><?php echo $d['res_cekout']?></td>
                        <td class="text-center">
                            <a href="reservasiEdit.php?id=<?php echo $d['res_id'];?>" class="m-1 btn btn-sm btn-warning">Edit</a>
                            <a href="action/reservasiDelete.php?id=<?php echo $d['res_id'];?>" class="m-1 btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

            
           



        </table>
</div>
<br><br>