<?php
include 'conection.php';

$no = $_POST['no'];
$tanggal = @$_POST['tanggal'];
$judul = @$_POST['judul'];
$deskripsi = @$_POST['deskripsi'];

$query = "update logbook_4 set tanggal='$tanggal', judul='$judul', deskripsi='$deskripsi' where no='$no'";

if (mysqli_query($koneksi,$query)){
    header("location:tabellog.php");
}else {
    echo "gagal terinput";
}
?>