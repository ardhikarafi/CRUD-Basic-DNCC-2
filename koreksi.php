<?php 
include("koneksi.php");

$kode= $_GET['kode'];
$cari = "SELECT * FROM dncc WHERE kode='$kode'";
$hasil = mysqli_query($conn,$cari);
$isi = mysqli_fetch_array($hasil);
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Penjualan</title>
<!-- <script src="jquery.js" type="text/javascript"></script> -->
<!-- <script src="prosesjs.js" type="text/javascript"></script> -->
<link rel="stylesheet" type="text/css" href="tampilan.css"/>
</head>
<body class="bekgron" >
<div> 
<img src="logo-udinus.png" height="200" width="150" class="gambar"/>
</div>
<form action="update.php" method="get" name="formbuku"> 
<table border="0" cellpadding="10" cellspacing="0" width="800" align="center">
<tr>
	<td colspan="3" align="center"><h2>Pendataan Penjualan</h2></td>
</tr>
<tr>
        <td align="left">Kode</td><td align="left">:</td>
        <td align="left"><input type="text" name="kode" id="kode" size="14" placeholder="23" maxlength="14"value="<?php echo $isi[0]; ?>"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Nama Barang
        </td>
        <td align="left">:</td>
        <td align="left">
            <input type="text" name="nama" id="nama" size="40" placeholder="isikan nama barang" maxlength="40"value="<?php echo $isi[1]; ?>"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Harga Satuan
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="harga" id="harga" size="40"  placeholder="isikan harga barang.." maxlength="40"value="<?php echo $isi[2]; ?>"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Jumlah Barang
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="jumlah" id="jumlah" size="40"  placeholder="isikan jumlah barang.." maxlength="40"value="<?php echo $isi[3]; ?>"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Total
        </td>
        <td align="left">:</td>
        <td align="left">
            <input type="text" name="total" id="total" size="40" maxlength="40"value="<?php echo $isi[4]; ?>"/><br />
        </td>
    </tr>
    
    <tr>
        <td align="left">
            Bonus
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="bonus" id="bonus" size="40"  maxlength="40"value="<?php echo $isi[5]; ?>" /><br />
        </td>
    </tr>
    <tr>
            <td colspan="3" align="center"> <input type="submit" name="ok" value="OK"/>
             <input type="reset" name="reset" value="Batal" /></td>
        </tr>
    </table>
	</form>              
</body>
</html>
