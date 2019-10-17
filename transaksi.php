<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<title>Aplikasi Belanja Sederhana</title>
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
function hitung() {
	var harga = $("#harga").val();
	var jumlah = $("#jumlah").val();
	if(harga>0 && jumlah>0){
		var total = parseInt(harga)*parseInt(jumlah);
		$("#total").val(total);
		diskon();
		bonus();
	}else{
		$("#total").val('');
		$("#diskon").val('');
		$("#bonus").val('');
	}
}
function diskon(){
var total = $("#total").val();
if(total>=500000){
	var diskon = parseInt(total)*20/100;
	$("#diskon").val(diskon);
}else if(total>=200000){
	var diskon = parseInt(total)*15/100;
	$("#diskon").val(diskon);
}else if(total>=100000){
	var diskon = parseInt(total)*10/100;
	$("#diskon").val(diskon);
}else if(total>=50000){
	var diskon = parseInt(total)*5/100;
	$("#diskon").val(diskon);
}else{
	$("#diskon").val(0);
	}
}
function bonus(){
var total = $("#total").val();
if(total>=500000){
	var bonus = 'Tas Pinggang';
	$("#bonus").val(bonus);
}else if(total>=200000){
	var bonus = 'Payung';
	$("#bonus").val(bonus);
}else if(total>=100000){
	var bonus = 'Kaos';
	$("#bonus").val(bonus);
}else if(total>=50000){
	var bonus = 'Cangkir';
	$("#bonus").val(bonus);
}else{
	$("#bonus").val('Tidak Ada');
	}
}

$("#harga").keyup(function(){
	hitung();
});
$("#jumlah").keyup(function(){
	hitung();
});
});
$(document).ready(function(){

 $('#kode').change(function(){    // KETIKA ISI DARI FIEL 'KODE' BERUBAH MAKA ......
  var kodefromfield = $('#kode').val();  // AMBIL isi dari fiel NPM masukkan variabel 'npmfromfield'
  $.ajax({        // Memulai ajax
    method: "POST",      
    url: "ajaxgoblog.php",    // file PHP yang akan merespon ajax
    data: { kode: kodefromfield}   // data POST yang akan dikirim
  })
    .done(function( hasilajax ) {   // KETIKA PROSES Ajax Request Selesai
        $('#nama').val(hasilajax);  // Isikan hasil dari ajak ke field 'nama' 
    });
    
 })
});
</script>
</head>

<body>
<h3>Aplikasi Penjualan</h3>
<form action="simpan.php" method="post" name="">
<table>

<tr>
   <td>Kode</td><td><input type="text" name="xkode" id="kode" size="20" />
</tr>
<tr>
   <td>Nama Barang</td><td><input type="text" name="xnama" id="nama" size="60" />
</tr>
<tr>
<td width="120">Harga Satuan</td>
<td><input type="text" name="harga" id="harga" size="15"></td>
</tr>
<tr>
<td width="120">Jumlah Barang</td>
<td><input type="text" name="jumlah" id="jumlah" size="15"></td>
</tr>
<tr>
<td width="120">Total</td>
<td><input type="text" name="total" id="total" size="15" readonly="readonly"></td>
</tr>
<tr>
<td width="120">Diskon</td>
<td><input type="text" name="diskon" id="diskon" size="15" readonly="readonly"></td>
</tr>
<tr>
<td width="120">Bonus</td>
<td><input type="text" name="bonus" id="bonus" size="25" readonly="readonly"></td>
</tr>
<tr>
    <td colspan="2" align="center">
        <input class="tombol" type="submit" value="Simpan"/>
        <input class="tombol" type="reset" value="Reset"/>
    </td>
</tr>
</table>
</form>
</body>
</html>
