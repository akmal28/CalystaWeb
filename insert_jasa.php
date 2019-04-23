<?php
include('header.php');
if (!empty($_POST)) {
    $id_jasa = pg_escape_string($db, $_POST['id_jasa']);
    $kategori = pg_escape_literal($db, $_POST['kategori']);
    $perawatan = pg_escape_literal($db, $_POST['perawatan']);
    $harga = pg_escape_literal($db, $_POST['harga']);
    $query = pg_query($db, "insert into list_jasa (id_jasa, kategori, perawatan, harga) values ($id_jasa, $kategori, $perawatan, $harga)");

}
?>

<div class="container-fluid" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h3>Data Jasa Baru</h3>
                <form id="testform" name="testform" method="post" action="">
                    <label for="id_jasa">ID:</label>
                    <input name="id_jasa" type="text" class="form-control" id="id_jasa" />
                    <label for="kategori">Kategori:</label>
                    <input name="kategori" type="text" class="form-control" id="kategori" />
                    <label for="perawatan">Nama/Kode Perawatan:</label>
                    <input name="perawatan" type="text" class="form-control" id="perawatan" />
                    <label for="harga">Harga:</label>
                    <input name="harga" type="text" class="form-control" id="harga" />
                    <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Insert</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
