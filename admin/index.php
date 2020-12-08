<?php 
include 'header.php';
?>

<?php
$query = mysqli_query($koneksi,"select * from barang_laku");
?>

<div class="col-md-10">
	<h3>Selamat datang</h3>	
    <h3>Sistem Informasi Penjualan Dessert</h3>
    
</div>
<!-- kalender -->
<div class="pull-right">
	<div id="kalender"></div>
</div>

<?php 
include 'footer.php';

?>