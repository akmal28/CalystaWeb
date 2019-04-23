<?php
include('header.php');
?>

<div class="container-fluid" style="margin-top: 20px;">
	<div class="row justify-content-center">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
						 aria-selected="true">Produk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
						 aria-selected="false">Jasa</a>
					</li>
				</ul>

				<!--Produk-->
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<form method="post">
							<div class="form-row">
								<div class="col">
									<label>ID Pelanggan</label>
									<input type="text" class="form-control form-control-sm" name="id_pelanggan" placeholder="ID pelanggan" style="margin-bottom: 10px;">
								</div>
							</div>
							<label>Kategori Produk</label>
							<select class="form-control form-control-sm" style="margin-bottom: 10px;" name="kategori" onchange="change_produk()"
							 id="kategori">
								<option value="" disabled="" selected="">--Pilih Kategori--</option>
								<?php
							$sql1 = "SELECT DISTINCT kategori FROM list_produk";
							$result1 = pg_query($db, $sql1);
							while ($row = pg_fetch_assoc($result1)) {
								?>
								<option value="<?php echo $row["kategori"]; ?>">
									<?php echo $row["kategori"]; ?>
								</option>
								<?php

						} ?>
							</select>
							<div class="form-row">
								<div class="col">
									<label>Kode Produk</label>
									<select class="form-control form-control-sm" style="margin-bottom: 10px;" name="kode" id="kode">
										<option value="" disabled="" selected="">--Pilih Produk--</option>
									</select>
								</div>
								<div class="col">
									<label>Jumlah</label>
									<input type="number" name="jumlah" id="jumlah" placeholder="Jumlah" class="form-control form-control-sm" min="1">
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-sm" name="insert">Insert</button>
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
						</form>
					</div>

					<!--Jasa-->
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<form method="post">
							<div class="form-row">
								<div class="col">
									<label>ID Pelanggan</label>
									<input type="text" class="form-control form-control-sm" name="id_pelanggan" placeholder="ID pelanggan" style="margin-bottom: 10px;">
								</div>
							</div>
							<label>Kategori Jasa</label>
							<select class="form-control form-control-sm" style="margin-bottom: 10px;" name="kategori_jasa" onchange="change_jasa()"
							 id="kategori_jasa">
								<option value="" disabled="" selected="">--Pilih Kategori--</option>
								<?php
							$sql2 = "SELECT DISTINCT kategori FROM list_jasa";
							$result2 = pg_query($db, $sql2);
							while ($row2 = pg_fetch_assoc($result2)) {
								?>
								<option value="<?php echo $row2["kategori"]; ?>">
									<?php echo $row2["kategori"]; ?>
								</option>
								<?php

						} ?>
							</select>
							<div class="form-row">
								<div class="col">
									<label>Kode Perawatan</label>
									<select class="form-control form-control-sm" style="margin-bottom: 10px;" name="perawatan" id="perawatan">
										<option value="" disabled="" selected="">--Pilih Jasa--</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-sm" name="insert2">Insert</button>
							<button type="reset" class="btn btn-secondary btn-sm">Reset</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (isset($_POST['insert'])) {
	$id_pelanggan = pg_escape_string($db, $_POST['id_pelanggan']);
	$jumlah = $_POST['jumlah'];
	$kode = $_POST['kode'];
	$tm = time();
	$tanggal = date('d-m-Y', ($tm));
	$query = pg_query($db, "INSERT INTO tx_produk (id_pelanggan,id_produk,jumlah,tanggal) VALUES ($id_pelanggan,$kode,$jumlah,'$tanggal')");
	?>
<script type="text/javascript">
	alert("Data berhasil dimasukkan!")
</script>
<?php

}
if (isset($_POST['insert2'])) {
	$id_pelanggan = pg_escape_string($db, $_POST['id_pelanggan']);
	$perawatan = $_POST['perawatan'];
	$tm = time();
	$tanggal = date('d-m-Y', ($tm));
	$query = pg_query($db, "INSERT INTO tx_jasa (id_pelanggan,id_jasa,tanggal) VALUES ($id_pelanggan,$perawatan,'$tanggal')");
	?>
<script type="text/javascript">
	alert("Data berhasil dimasukkan!")
</script>
<?php

}
?>

<script type="text/javascript">
	function change_produk() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "ajax.php?kategori="+document.getElementById("kategori").value, false);
		xmlhttp.send(null);
		document.getElementById("kode").innerHTML = xmlhttp.responseText;
	}

	function change_jasa() {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "ajax.php?kategori_jasa="+document.getElementById("kategori_jasa").value, false);
		xmlhttp.send(null);
		document.getElementById("perawatan").innerHTML = xmlhttp.responseText;
	}
</script>

<?php include('footer.php'); ?>
