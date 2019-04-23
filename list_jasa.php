<?php include('header.php'); ?>

    <div class="container" style="margin-top: 20px;">
        <div class="row align-items-start">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Perawatan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Option</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM list_jasa order by id_jasa asc";
                    $result = pg_query($db, $sql);
                    $row_array = array();
                    while ($row = pg_fetch_assoc($result)) {
					//list_jasa (id_jasa, kategori, perawatan, harga)
                        echo "<tr>
                    <th>{$row['id_jasa']}</th>
                    <td>{$row['kategori']}</td>
                    <td>{$row['perawatan']}</td>
                    <td>{$row['harga']}</td>
                    "; ?>
                    <td class="btn-group" role="group">
                        <a href="updatetablejasa.php?page=edit&no=<?php echo $row['id_jasa'] ?>" type="submit" class="btn btn-secondary btn-sm">Edit</a>
                        <a onclick="return confirm('Are you sure want to delete this data?') " href="?aksi=delete&no=<?php echo $row['id_jasa']; ?>"
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
            include('updatetablejasa.php');
            header("Location: localhost/calysta/updatetablejasa.php");
        }
    }
    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];
        if ($aksi == "delete") {
            include('delete_jasa.php');
            header("Location: localhost/calysta/delete_jasa.php");
        } else if ($aksi == "edit") {
            include('updatetablejasa.php');
            header("Location: localhost/calysta/updatetablejasa.php");
        }
    }
    include('footer.php');
    ?>
