<style>

</style>
<?php
	include "config/connect.php";
	$tampil=mysqli_query($conn, "select * from barang");
	$r = mysqli_fetch_array($tampil);
	$stok= $r['stok_barang'];
?>
<h3 class='head'><span class='glyphicon glyphicon-tasks'> Stok Roti</h3><br><br>
<table class="table table-bordered">
		<thead>
			
				<th>Tersedia</th>
				<th><?php echo floor($stok) ?></th>
				<th>Buah</th>
			</tr>
		</thead>
		<tbody>


