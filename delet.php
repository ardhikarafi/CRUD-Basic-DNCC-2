<?php
include 'koneksi.php';
$kode   = $_GET['kode'];

$kueri="delete from dncc where kode='$kode'";
mysqli_query($conn,$kueri);
header ('location:tampildata.php');
?>