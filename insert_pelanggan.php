<?php include('header.php');
if (!empty($_POST)) {
    $id_pelanggan = pg_escape_string($db, $_POST['id_pelanggan']);
    $nama = pg_escape_literal($db, $_POST['nama']);
    $query = pg_query($db, "insert into list_pelanggan (id_pelanggan, nama) values ($id_pelanggan, $nama)");
}
?>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h3>Data pelanggan Baru</h3>
                    <form id="testform" name="testform" method="post" action="">
                        <label for="id_pelanggan">ID:</label>
                        <input name="id_pelanggan" type="text" class="form-control" id="id_pelanggan" />
                        <label for="nama">Nama:</label>
                        <input name="nama" type="text" class="form-control" id="nama" />
                        <label for="role">Role:</label>
                        <input name="role" type="text" class="form-control" id="role" />
                        <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Insert</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<? include('footer.php'); ?>
