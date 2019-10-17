<?php
include "koneksi.php";
$tampil="select*from dncc";
$hasil=mysqli_query($conn,$tampil);
?>
<style>
	table{
		border-collapse: collapse;
		font-size:18px;
		margin-top:30px;
	}
	.tbl_laporan{
		font-family: "Times New Roman", Times, serif;
		width: 100%;
		
	}
	input[type=submit]{
	background-color: #00BFFF;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 4px;
}

	th{
		padding-top: 12px;
		padding-bottom: 12px;
		border: 1px solid #ddd;
		background-color: #00BFFF;
		color: #FFF;
		font-family: "Times New Roman", Times, serif;
	}

	td{
		border: 1px solid #ddd;
		padding: 8px;
	}

	h2{
		font-family: segoe ui;
		text-align: center;
	}

	.tbl_laporan tr:nth-child(even){
		background-color: ##00BFFF;
	}

	.tbl_laporan tr:hover{
		background-color: #ddd;
	}

	a{
		text-decoration: none;
		color: #c0392b;
		text-align: center;
		font-weight: bold;
	}
</style><style>
	table{
		border-collapse: collapse;
	}
	.tbl_laporan{
		font-family:"Times New Roman", Times, serif;
		width: 100%;
		
	}

	th{
		padding-top: 12px;
		padding-bottom: 12px;
		border: 1px solid #ddd;
		background-color: #00BFFF;
		color: #FFF;
		font-family: "Times New Roman", Times, serif;
	}

	td{
		border: 1px solid #ddd;
		padding: 8px;
	}

	h2{
		font-family: "Times New Roman", Times, serif;
		text-align: center;
		margin-bottom:55px;
	}

	.tbl_laporan tr:nth-child(even){
		background-color: #00BFFF;
	}

	.tbl_laporan tr:hover{
		background-color: #ddd;
	}

	a{
		text-decoration: none;
		color: #c0392b;
		text-align: center;
		font-weight: bold;
	}
</style>
<h2>TAMPIL DATA</h2>
<table class="tbl_laporan" align="center">
<tr>
	<th>NO</th>
    <th>KODE</th>
    <th>NAMA</th>
    <th>HARGA</th>
    <th>JUMLAH</th>
    <th>TOTAL</th>
    <th>BONUS</th>
    <th>AKSI</th>
 </tr>
 <form action="form.php">
 	<input type="submit" name="ok" value="Tambah Data Buku">
 </form>
 <?php
 $nomer=0; 
while ($isi=mysqli_fetch_array($hasil))
{
$nomer++;
?>
<tr>
	<td><?php echo $nomer; ?></td>
	<td><?php echo $isi[0]; ?></td>
    <td><?php echo $isi[1]; ?></td>
    <td><?php echo $isi[2]; ?></td>
    <td><?php echo $isi[3]; ?></td>
    <td><?php echo $isi[4]; ?></td>
    <td><?php echo $isi[5]; ?></td>    
    <td><?php echo "<a href=koreksi.php?kode=$isi[0]>Edit</a>"; ?><br>
    <?php echo "<a href=delet.php?kode=$isi[0]>Delete</a>"; ?></td>
    <?php
			}

	?>
</tr>
</table>
