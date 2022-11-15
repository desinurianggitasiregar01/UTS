<?php

include "koneksitas.php";

$id=$_POST['tas_id'];
$nama_pembeli=$_POST['nama_pembeli'];
$merk=$_POST['merk'];
$size=$_POST['size'];
$harga=$_POST['harga'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];


$ubah=$koneksi->query("update uts set nama_pembeli='$nama_pembeli', merk='$merk', size='$size', harga='$harga', alamat='$alamat', no_telp='$no_telp' where tas_id='$id'");

if($ubah==true){

    header("location:menampilkantas.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>