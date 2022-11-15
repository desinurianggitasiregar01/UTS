<!doctype HTML>
<html>
<head>
    <title>EDIT DATA PENJUALAN</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-mahasiswa.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from uts where tas_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama_pembeli">NAMA PEMBELI</label>
                        <input type="hidden" name="tas_id" value="<?php echo $row['tas_id']?>" class="form-control">
                        <input type="text" name="nama_pembeli" value="<?php echo $row['nama_pembeli']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="merk">MERK</label>
                        <input type="text" name="merk" value="<?php echo $row['merk']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="size">SIZE</label>
                        <input type="text" name="size" value="<?php echo $row['size']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" value="<?php echo $row['harga']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">NO TELP</label>
                        <input type="text" name="no_telp" value="<?php echo $row['no_telp']?>" class="form-control">
                    </div>

                   

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>