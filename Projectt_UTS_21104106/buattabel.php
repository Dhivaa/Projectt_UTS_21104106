<?php
/*
Nama tabel adalah stok yang berisi Jenis baju, Ukuran, Warna, Harga, Jumlah, Waktu restok date

*/
include_once("koneksidb.php");
$sql = "CREATE TABLE peminjaman(
    NAMA_ALAT Varchar(20) PRIMARY KEY,
    KODE Varchar(5),
    JUMLAH Integer (5),
    TGL_PEMINJAMAN Varchar(10),
    TGL_PENGEMBALIAN Varchar(10),
);";
$hsl = mysqli_query($cnn,$sql);
if($hsl){
    echo "Pembuatan Tabel Sukses";
}else{
    echo "Pembuatan Tabel Gagal";
}