<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Calysta Skincare</title>

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">Calysta Skincare</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
				<li>
					<a class="nav-link" href="about.html">About</a>
				</li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Tables
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="list_produk.php">List Produk</a>
	          <a class="dropdown-item" href="list_jasa.php">List Jasa</a>
	          <a class="dropdown-item active" href="pegawai.php">List Pegawai</a>
	          <a class="dropdown-item" href="list_pelanggan.php">List Pelanggan</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="omzet_sep_jasa.php">Omzet Jasa September</a>
						<a class="dropdown-item" href="omzet_okt_jasa.php">Omzet Jasa Oktober</a>
						<a class="dropdown-item" href="omzet_sep_barang.php">Omzet Produk September</a>
						<a class="dropdown-item" href="omzet_okt_barang.php">Omzet Produk Oktober</a>
	        </div>
	      </li>
	    <!--   <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li> -->
	    </ul>
	  </div>
	</nav>

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
	  	while ($row = pg_fetch_assoc($result)){
	    echo "<tr>
	      <th>{$row['id_pegawai']}</th>
	      <td>{$row['nama']}</td>
	      <td>{$row['role']}</td>
	      " ?>
	    <td class="btn-group" role="group">
	    	<a href="updatetablepegawai.php?page=edit&id_pegawai=<?php echo $row['id_pegawai']; ?>" type="submit" class="btn btn-secondary btn-sm">Edit</a>
			<a onclick="return confirm('Are you sure want to delete this data?') " href="?aksi=delete&no=<?php echo $row['no']; ?>" type="submit" class="btn btn-secondary btn-sm">Delete</a>
		</td><?php }?>

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
                    include('delete.php');
                }
								else if ($aksi == "edit") {
                    include('updatetablepegawai.php');
                    header("Location: localhost/calysta/updatetablepegawai.php");
                }
            }
?>
</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>
