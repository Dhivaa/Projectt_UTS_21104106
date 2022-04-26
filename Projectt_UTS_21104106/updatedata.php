<?php

    include_once("koneksidb.php");
    $namaalat = "kamera sony a6000";
    $kode = "mmpdd";
    $sql = "UPDATE peminjaman SET KODE='$kode' WHERE nama_alat='$namaalat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Update Data Sukses<br>";
    }else{
        echo "Update Data Gagal";
    }