<?php
/*
Nama database adalah peminjaman_alat
*/
include_once("koneksidb.php");
$sql = "CREATE DATABASE peminjaman_alat;";
$hsl = mysqli_query($cnn,$sql);
if($hsl){-
    echo "Pembuatan Database Sukses";
}else{
    echo "Pembuatan Database Gagal";
}
mysqli_close($cnn);