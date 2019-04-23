<?php include('header.php'); ?>


<div class="container" style="margin-top: 20px;">
    <div class="row align-items-start">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Pack</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM list_produk order by id_produk asc";
                $result = pg_query($db, $sql);
                $row_array = array();
                while ($row = pg_fetch_assoc($result)) {
					//list_produk (id_produk, kategori, kode, pack, harga)
                    echo "<tr>
                    <th>{$row['id_produk']}</th>
                    <td>{$row['kategori']}</td>
                    <td>{$row['kode']}</td>
                    <td>{$row['pack']}</td>
                    <td>{$row['stok']}</td>
                    <td>{$row['harga']}</td>
                    "; ?>
                <td class="btn-group" role="group">
                    <a href="updatetableproduk.php?page=edit&no=<?php echo $row['id_produk']; ?>" type="submit" class="btn btn-secondary btn-sm">Edit</a>
                    <a onclick="return confirm('Are you sure want to delete this data?') " href="?aksi=delete&no=<?php echo $row['id_produk']; ?>"
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
        include('updatetableproduk.php');
        header("Location: localhost/calysta/updatetableproduk.php");
    }
}
if (isset($_GET['aksi'])) {
    $aksi = $_GET['aksi'];
    if ($aksi == "delete") {
        include('delete_produk.php');
        header("Location: localhost/calysta/delete_produk.php");
    } else if ($aksi == "edit") {
        include('updatetableproduk.php');
        header("Location: localhost/calysta/updatetableproduk.php");
    }
}
include('footer.php'); ?>
