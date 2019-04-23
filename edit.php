<?php
include('config.php');
$no = $_GET['no'];
$hapus = pg_query($db, "DELETE FROM list_produk WHERE no = $no");

?>

<script type="text/javascript">
	window.location.href="index.php";
</script>
