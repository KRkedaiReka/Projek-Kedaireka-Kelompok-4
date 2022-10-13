<?php
include "conection.php";

$nim = $_GET['nim'];

$sql = "Delete from peserta_4 where nim = '$nim'";

if (mysqli_query($koneksi,$sql)){
    header("location:tabelpeserta.php");
}
else {
    echo "gagal terinput";
}

?>