<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Penjualan</title>
<script src="jquery.js" type="text/javascript"></script>
<!-- <script src="prosesjs.js" type="text/javascript"></script> -->
<link rel="stylesheet" type="text/css" href="tampilan.css"/>
</head>
<body class="bekgron" >
<div> 
<img src="logo-udinus.png" height="200" width="150" class="gambar"/>
</div>
<form action="simpan.php" method="post" name="formbuku"> 
<table border="0" cellpadding="10" cellspacing="0" width="800" align="center">
<tr>
	<td colspan="3" align="center"><h2>Pendataan Penjualan</h2></td>
</tr>
<tr>
        <td align="left">Kode</td><td align="left">:</td>
        <td align="left"><input type="text" name="kode" id="kode" size="14" placeholder="23" maxlength="14"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Nama Barang
        </td>
        <td align="left">:</td>
        <td align="left">
            <input type="text" name="nama" id="nama" size="40" placeholder="isikan nama barang" maxlength="40"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Harga Satuan
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="harga" id="harga" size="40"  placeholder="isikan harga barang.." maxlength="40"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Jumlah Barang
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="jumlah" id="jumlah" size="40"  placeholder="isikan jumlah barang.." maxlength="40"/><br />
        </td>
    </tr>
    <tr>
        <td align="left">
            Total
        </td>
        <td align="left">:</td>
        <td align="left">
            <input type="text" name="total" id="total" size="40" maxlength="40"/><br />
        </td>
    </tr>
    
    <tr>
        <td align="left">
            Bonus
        </td>
        <td>:</td>
        <td align="left">
            <input type="text" name="bonus" id="bonus" size="40"  maxlength="40"/><br />
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
