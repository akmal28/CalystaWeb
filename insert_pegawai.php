<?php include('header.php');
if (!empty($_POST)) {
    $id_pegawai = pg_escape_string($db, $_POST['id_pegawai']);
    $nama = pg_escape_literal($db, $_POST['nama']);
    $role = pg_escape_literal($db, $_POST['role']);
    $query = pg_query($db, "insert into list_pegawai (id_pegawai, nama, role) values ($id_pegawai, $nama, $role)");
}
?>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h3>Data Pegawai Baru</h3>
                    <form id="testform" name="testform" method="post" action="">
                        <label for="id_pegawai">ID:</label>
                        <input name="id_pegawai" type="text" class="form-control" id="id_pegawai" />
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
