<?php

$nama_pembeli=$_POST['nama_pembeli'];
$merk=$_POST['merk'];
$size=$_POST['size'];
$harga=$_POST['harga'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];

include "koneksitas.php";

$simpan=$koneksi->query("insert into uts(nama_pembeli,merk,size,harga,alamat,no_telp) 
                        values ('$nama_pembeli', '$merk', '$size', '$harga', '$alamat', '$no_telp')");

if($simpan==true){

    header("location:menampilkantas.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>