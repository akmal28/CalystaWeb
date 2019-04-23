<?php include('header.php');
$x = intval($_GET['no']);
$query = pg_query($db, "SELECT nama FROM list_pelanggan WHERE id_pelanggan = $x");
$row = pg_fetch_assoc($query);
if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $hapus = pg_query($db, "UPDATE id_pelanggan SET nama='$nama' WHERE id_pelanggan=$x");
    echo "Data Updated";
    header("refresh:5;url=http://localhost/calysta/list_pelanggan.php");
} else {
    ?>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h3>Edit Tabel Pelanggan</h3>
                    <form id="testform" name="testform" method="post" action="">
                        <label for="nama">Nama:</label>
                        <input name="nama" type="text" id="nama" class="form-control" value="<?php echo $row['nama'] ?>" />
                        <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;" />Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

}
include('footer.php');
?>

