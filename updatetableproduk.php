<?php include('header.php');
$x = intval($_GET['no']);
$query = pg_query($db, "SELECT kategori,kode,pack,harga FROM list_produk WHERE id_produk = '$x'");
$row = pg_fetch_assoc($query);
if (!empty($_POST)) {

  $kategori = $_POST['kategori'];
  $kode = $_POST['kode'];
  $pack = $_POST['pack'];
  $harga = $_POST['harga'];
  $hapus = pg_query($db, "UPDATE list_produk SET kategori='$kategori',kode='$kode',pack='$pack',harga=$harga WHERE id_produk=$x");
  echo "Data Updated";
  header("refresh:5;url=http://localhost/calysta/list_produk.php");
} else {
  ?>
<div class="container-fluid" style="margin-top: 20px;">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-body">
        <h3>Edit Tabel Produk</h3>
        <form id="testform" name="testform" method="post" action="">
          <label for="kategori">Kategori:</label>
          <input class="form-control form-control-sm" name="kategori" type="text" id="kategori" value="<?php echo $row['kategori']; ?>" />
          <label for="kode">Kode:</label>
          <input class="form-control form-control-sm" name="kode" type="text" id="kode" value="<?php echo $row['kode']; ?>" />
          <label for="pack">Pack:</label>
          <input class="form-control form-control-sm" name="pack" type="text" id="pack" value="<?php echo $row['pack']; ?>" />
          <label for="harga">Harga:</label>
          <input class="form-control form-control-sm" name="harga" type="int" id="harga" value="<?php echo $row['harga']; ?>" />
          <button name="edit" class="btn btn-primary btn-sm" type="submit" style="margin-top: 10px;">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php

}
include('footer.php');
?>
