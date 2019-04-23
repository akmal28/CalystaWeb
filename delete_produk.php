<?php
include('config.php');
$x = $_GET['no'];
$hapus = pg_query($db, "DELETE FROM list_produk WHERE id_produk = $x");

?>

<script type="text/javascript">
	window.location.href="list_produk.php";
</script>
