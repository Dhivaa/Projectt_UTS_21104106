<?php
    
    include_once("koneksidb.php");
    $namaalat = "kamera sony a6000";
    $sql = "DELETE FROM peminjaman WHERE nama_alat='$namaalat';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "Delete Data Sukses<br>";
    }else{
        echo "Delete Data Gagal";
    }