<?php
include "conection.php";

$tanggal = @$_POST['tanggal'];
$judul = @$_POST['judul'];
$deskripsi = @$_POST['deskripsi'];

/*echo $tanggal;
echo $judul;
echo $deskripsi;*/

$sql = "INSERT INTO logbook_4 (tanggal, judul, deskripsi) VALUES ('$tanggal', '$judul', '$deskripsi')";

//echo $sql;

if (mysqli_query($koneksi, $sql)) {
    header("location:tabellog.php");
} else {
    echo "Gagal";
}

?>