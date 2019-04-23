<?php
include('config.php');
$x = $_GET['no'];
$hapus = pg_query($db, "DELETE FROM list_jasa WHERE id_jasa = $x");

?>

<script type="text/javascript">
	window.location.href="list_jasa.php";
</script>
