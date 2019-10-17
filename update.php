<?php 
include "koneksi.php";


$kode=$_GET['kode'];
$nama=$_GET['nama'];
$harga=$_GET['harga'];
$jumlah=$_GET['jumlah'];
$total=$_GET['total'];
$bonus=$_GET['bonus'];

$ubah="UPDATE dncc SET nama='$nama', harga='$harga', jumlah='$jumlah', total='$total', bonus='$bonus'
 WHERE kode='$kode'";
mysqli_query($conn,$ubah);
header('location:tampildata.php');

 ?>