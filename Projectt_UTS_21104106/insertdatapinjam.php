<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masukan data ke </title>
</head>
<body>
    
    <form method="POST" action="insertdatadenganform.php">
        NAMA_ALAT <br>
        <input type="text" name="txALAT"><br>
        KODE<br>
        <input type="text" name="txKODE"><br>
        JUMLAH<br>
        <input type="text" name="txJUMLAH"><br>
        TGL_PEMINJAMAN<br>
        <input type="date" name="dtWP"><br>
        TGL_PENGEMBALIAN<br>
        <input type="date" name="dtWK"><br>
        <br><br>
        <button type=submit> Simpan Data </button>
    </form>
</body>
</html>