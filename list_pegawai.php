<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px">
    <div class="row align-items-start">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Role</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM list_pegawai order by id_pegawai asc";
                $result = pg_query($db, $sql);
                $row_array = array();
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>
                        <th>{$row['id_pegawai']}</th>
                        <td>{$row['nama']}</td>
                        <td>{$row['role']}</td>
                        " ?>
                <td class="btn-group" role="group">
                    <a href="updatetablepegawai.php?page=edit&id_pegawai=<?php echo $row['id_pegawai']; ?>" type="submit"
                        class="btn btn-secondary btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this data?') " href="?aksi=delete&no=<?php echo $row['id_pegawai']; ?>"
                        type="submit" class="btn btn-secondary btn-sm">Delete</a>
                </td>
                <?php

            } ?>

            </tbody>
        </table>
    </div>
</div>
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == "edit") {
        include('updatetablepegawai.php');
        header("Location: localhost/calysta/updatetablepegawai.php");
    }
}
if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    if ($aksi == "delete") {
        include('delete_pegawai.php');
        header("Location: localhost/calysta/delete_pegawai.php");
    } else if ($aksi == "edit") {
        include('updatetablepegawai.php');
        header("Location: localhost/calysta/updatetablepegawai.php");
    }
}
include('footer.php');
?>
