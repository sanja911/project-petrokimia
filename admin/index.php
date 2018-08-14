<?php 
include 'header.php';
?>

<?php
$a = mysql_query("select * from barang_laku");
?>

<div class="col-md-10">
	<h3 align="center">Selamat datang</h3>	
    <h3 align="center">Aplikasi cek barangbp3k </h3>
    <h3 align="center">PETROKMIA GRESIK</h3>
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>