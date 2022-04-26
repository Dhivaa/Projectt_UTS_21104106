<?php
    include_once ("koneksidb.php");
    $namaalat ="kamera sony a6000";
    $kode = "xlmpdd";
    $jumlah = "3";
    $peminjaman = "2022-12-12";
    $pengembalian = "2022-15-12";

    $sql = "INSERT INTO peminjaman(NAMA_ALAT,KODE,JUMLAH,TGL_PEMINJAMAN,TGL_PENGEMBALIAN) Values('$namaalat','$kode','$jumlah','$peminjaman','$pengembalian');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Sukses<br>";
    }else{
        echo "insert Data Gagal<br>";
    }
