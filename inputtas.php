 <!doctype HTML>
<html>
<head>
    <title>INPUT DATA TAS</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><center><b>INPUT DATA TAS</b></center></h1>
                <form action="prosesiinputtas.php" method="POST">
                    <div class="form-group">
                        <label for="nama_pembeli">NAMA PEMBELI</label>
                        <input type="text" name="nama_pembeli" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="merk">MERK</label>
                        <input type="text" name="merk" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="size">SIZE</label>
                        <input type="text" name="size" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="harga">HARGA</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <textarea name="alamat" class="form-control"></textarea>
                    </div>

                     <div class="form-group">
                        <label for="no_telp">NO TELP</label>
                        <input type="text" name="no_telp" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>