<?php
include 'conection.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$bidang = $_POST['bidang'];
$concern = $_POST['concern'];

$query = "update peserta_4 set nama='$nama', email='$email', prodi='$prodi', bidang='$bidang', concern='$concern' where nim='$nim'";

if (mysqli_query($koneksi,$query)){
    header("location:tabelpeserta.php");
}
else {
    echo "gagal terinput";
}

?>