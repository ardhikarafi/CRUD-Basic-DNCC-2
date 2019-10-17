<?php
include ("koneksi.php");
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];
$total=$_POST['total'];
$bonus=$_POST['bonus'];
if(!empty($kode) && !empty($nama) && !empty($harga) && !empty($jumlah) && !empty($total))
{
	$dsave="INSERT INTO dncc (kode,nama,harga,jumlah,total,bonus) 
	values('$kode','$nama','$harga','$jumlah','$total','$bonus')";
	mysqli_query($conn,$dsave);
	?>
	
	<?php 
	header('location:tampildata.php');
	 ?>
	<?php
}
else
{
	?>
	<script type="text/javascript">
		alert("Ada yang belum terisi");
	</script>
	<?php
}
?>