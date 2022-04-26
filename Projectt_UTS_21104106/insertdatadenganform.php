<?php
    if(isset($_POST['txALAT'])){
    include_once ("koneksidb.php");
    $namaalat =$_POST['txALAT'];
    $kode = $_POST["txKODE"];
    $jumlah = $_POST["txJUMLAH"];
    $peminjaman = $_POST["dtWP"];
    $pengembalian = $_POST["dtWK"];

    $sql = "INSERT INTO peminjaman(NAMA_ALAT,KODE,JUMLAH,TGL_PEMINJAMAN,TGL_PENGEMBALIAN) Values('$namaalat','$kode','$jumlah','$peminjaman','$pengembalian');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Insert Data Sukses<br>";
    }else{
        echo "Insert Data Gagal<br>";
    }
}else{
    header("location: insertdatapinjam.php");
}

