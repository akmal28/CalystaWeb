<?php
include('config.php');
$id_pegawai = $_GET['no'];
$hapus = pg_query($db, "DELETE FROM list_pegawai WHERE id_pegawai = '$id_pegawai'");

?>

<script type="text/javascript">
    window.location.href = "list_pegawai.php";
</script>