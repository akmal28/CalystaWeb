<?php include('header.php');
$x = intval($_GET['no']);
$query = pg_query($db, "SELECT kategori,perawatan,harga FROM list_jasa WHERE id_jasa = '$x'");
$row = pg_fetch_assoc($query);
if (!empty($_POST)) {
    $kategori = $_POST['kategori'];
    $perawatan = $_POST['perawatan'];
    $harga = $_POST['harga'];
    $hapus = pg_query($db, "UPDATE list_produk SET kategori='$kategori',perawatan='$perawatan',harga=$harga WHERE id_jasa=$x");
    echo "Data Updated";
    header("refresh:5;url=http://localhost/calysta/list_jasa");
} else {
    ?>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h3>Edit Tabel Jasa</h3>
                <form id="testform" name="testform" method="post" action="">
                    <label for="kategori">Kategori:</label>
                    <input name="kategori" type="text" class="form-control" id="kategori" value="<?php echo $row['kategori']; ?>" />
                    <label for="perawatan">Perawatan:</label>
                    <input name="perawatan" type="text" class="form-control" id="perawatan" value="<?php echo $row['perawatan']; ?>" />
                    <label for="harga">Harga:</label>
                    <input name="harga" type="int" class="form-control" id="harga" value="<?php echo $row['harga']; ?>" />
                    <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;" />Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

}
include('footer.php'); ?>
