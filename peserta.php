<?php
include "conection.php";

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$prodi = $_POST['prodi'];
$bidang = $_POST['bidang'];
$concern = $_POST['concern'];

$sql = "INSERT INTO peserta_4 (nama, nim, email, prodi, bidang, concern) VALUES ('$nama', '$nim', '$email', '$prodi', '$bidang', '$concern')";

if (mysqli_query($koneksi, $sql)) {
    header("location:tabelpeserta.php");
} else {
    echo "Gagal";
}

?>