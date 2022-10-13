<?php
include "conection.php";

$no = $_GET['no'];

$sql = "Delete from logbook_4 where no = '$no'";

//echo $sql;

if (mysqli_query($koneksi,$sql)){
    header("location:tabellog.php");
}
else {
    echo "gagal terinput";
}

?>