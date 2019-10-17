<?php
$conn=@mysqli_connect("localhost","root","") or die("Data base tidak terkoneksi");
$db=mysqli_select_db($conn,"divisiweb");
?>
