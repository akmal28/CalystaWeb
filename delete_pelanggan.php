<?php
include('config.php');
$x = $_GET['no'];
$hapus = pg_query($db, "DELETE FROM list_pelanggan WHERE id_pelanggan = $x");

?>

<script type="text/javascript">
	window.location.href="list_pelanggan.php";
</script>
