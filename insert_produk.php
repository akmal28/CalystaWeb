<?php
include('header.php');
if (!empty($_POST)) {
  $id_produk = pg_escape_string($db, $_POST['id_produk']);
  $kategori = pg_escape_literal($db, $_POST['kategori']);
  $kode = pg_escape_literal($db, $_POST['kode']);
  $pack = pg_escape_literal($db, $_POST['pack']);
  $harga = pg_escape_literal($db, $_POST['harga']);
  $query = pg_query($db, "insert into list_produk (id_produk, kategori, kode, pack, harga) values ($id_produk, $kategori, $kode, $pack, $harga)");
}
?>
<div class="container-fluid" style="margin-top: 20px;">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-body">
        <h3>Data Produk Baru</h3>
        <form id="testform" name="testform" method="post" action="">
          <label for="id_produk">ID:</label>
          <input name="id_produk" type="text" class="form-control" id="id_pegawai" />
          <label for="kategori">Kategori:</label>
          <input name="kategori" type="text" class="form-control" id="kategori" />
          <label for="kode">Nama/Kode Produk:</label>
          <input name="kode" type="text" class="form-control" id="kode" />
          <label for="pack">Pack:</label>
          <input name="pack" type="text" class="form-control" id="pack" />
          <label for="harga">Harga:</label>
          <input name="harga" type="text" class="form-control" id="harga" />
          <button type="submit" name="edit" class="btn btn-primary btn-sm" style="margin-top: 10px;">Insert</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include('footer.php'); ?>
