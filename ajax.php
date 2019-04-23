<?php
	include ('config.php');

	$kategori = $_GET['kategori'];
	$kategori_jasa = $_GET['kategori_jasa'];

	if($kategori != ""){
		$query = pg_query($db, "SELECT id_produk,kode,harga FROM list_produk WHERE kategori = '$kategori'");
		while ($row = pg_fetch_assoc($query)){
			echo "<option value= '$row[id_produk]'>";
			echo $row["kode"];
			echo "</option>";
		}
	}
	if ($kategori_jasa != "") {
		$query2 = pg_query($db, "SELECT id_jasa,perawatan FROM list_jasa WHERE kategori = '$kategori_jasa'");
		while ($row2 = pg_fetch_assoc($query2)){
			echo "<option value= '$row2[id_jasa]'>";
			echo $row2["perawatan"];
			echo "</option>";
		}
	}
?>