<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$suplier=$_POST['suplier'];
$jumlah=$_POST['jumlah'];
$sisa=$_POST['jumlah'];

mysql_query("insert into barang values('$id','$nama','$jenis','$suplier','$jumlah','$sisa')");
header("location:barang.php");

 ?>