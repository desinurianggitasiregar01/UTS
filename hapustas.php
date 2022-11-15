<?php

$id=$_GET['id'];

include "koneksitas.php";

$hapus=$koneksi->query("delete from uts where tas_id='$id'");

if($hapus==true){

    header("location:menampilkantas.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>