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
                            <input type="date" name="daritgl" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sampai Tanggal</label>
                            <input type="date" name="sampaitgl" class="form-control">
                        </div>
                        <div class="form-group d-flex align-items-end">
                            <input type="submit" class="btn btn-primary" value="Filter">
                        </div>
                    </div>
                    
                </form>
            </div>

            <div class="col-md-4">
                <h6>Cari Nama</h6>
                <form action="index.php" method="get">
                    <div class="panel d-flex flex-row">
                        <div class="form-group mx-2">
                            <label>Isi Nama</label>
                            <input type="text" name="namacari" class="form-control">
                        </div>
                        <div class="form-group d-flex align-items-end">
                            <input type="submit" class="btn btn-primary" value="Cari">
                        </div>
                    </div>
                    
                </form>
            </div>

            <?php 
                if(isset($_GET['daritgl'])&&isset($_GET['sampaitgl'])){
                    $dari = $_GET['daritgl'];
                    $sampai = $_GET['sampaitgl'];
                    $sql = mysqli_query($con, "SELECT * FROM tb_reservasi WHERE date(res_cekin) > '$dari' and date(res_cekin) < '$sampai'");
                    $ind = "visible";
                }else if(isset($_GET['namacari'])){
                    $nama = $_GET['namacari'];
                    $sql = mysqli_query($con, "SELECT * FROM tb_reservasi WHERE res_namapesan='$nama' || res_namatamu='$nama' ");
                    $ind = "visible";
                }
                
                else{
                    $sql = mysqli_query($con, "SELECT * FROM tb_reservasi");
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
                    <th>Nama Pemesan</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Nama Tamu</th>
                    <th>Tipe Kamar</th>
                    <th>Jumlah Kamar</th>
                    <th>Cek In</th>
                    <th>Cek Out</th>
                </tr> 
            </thead>
            <tbody>
                <?php

                while($d = mysqli_fetch_array($sql)){
                    $tipe = $d['res_tipe'];                    
                    $sql2 = mysqli_query($con, "SELECT * FROM tb_jkamar WHERE jk_id=$tipe");
                    $d2 = mysqli_fetch_array($sql2);
                    
                    ?>

                    <tr>
                        <td><?php echo $d['res_namapesan'] ?></td>
                        <td><?php echo $d['res_email']?></td>
                        <td><?php echo $d['res_nohp']?></td>
                        <td><?php echo $d['res_namatamu']?></td>
                        <td><?php echo $d2['jk_tipe']?></td>
                        <td><?php echo $d['res_jumlah']?></td>
                        <td><?php echo $d['res_cekin']?></td>
                        <td><?php echo $d['res_cekout']?></td>
                        
                        
                    </tr>
                <?php } ?>
            </tbody>

            
           



        </table>
</div>
<br><br>