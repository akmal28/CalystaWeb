<?php include('header.php');
$x = $_GET['id_pegawai'];
$query = pg_query($db, "SELECT nama,role FROM list_pegawai WHERE id_pegawai = '$x'");
$row = pg_fetch_assoc($query);
if (!empty($_POST)) {
    $nama = $_POST['nama'];
    $role = $_POST['role'];
    $hapus = pg_query($db, "UPDATE list_pegawai SET nama='$nama',role='$role' WHERE id_pegawai='$x'");
    echo "Data Updated";
    header("refresh:5;http://localhost/calysta/list__pegawai.php");
} else {
    ?>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                <h3>Edit Tabel Pegawai</h3>
                <form id="testform" name="testform" method="post" action="">
                    <label for="nama">Nama:</label>
                    <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $row['nama']; ?>" />
                    <label for="role">Role:</label>
                    <input name="role" type="text" class="form-control" id="role" value="<?php echo $row['role']; ?>" />
                    <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

}
include('footer.php'); ?>
