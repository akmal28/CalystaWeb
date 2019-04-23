<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container" style="margin-top: 20px;">
	<div class="row align-items-start">
	<table class="table">
	  <thead class="thead-light">
	    <tr>
	      <th scope="col">No.</th>
	      <th scope="col">Kategori</th>
	      <th scope="col">Kode</th>
	      <th scope="col">Pack</th>
	      <th scope="col">Harga</th>
	      <th scope="col">Option</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php
	  	$sql = "SELECT * FROM list_produk";
	  	$result = pg_query($db, $sql);
	  	$row_array = array();
	  	while ($row = pg_fetch_assoc($result)){
	    echo "<tr>
	      <th>{$row['no']}</th>
	      <td>{$row['kategori']}</td>
	      <td>{$row['kode']}</td>
	      <td>{$row['pack']}</td>
	      <td>{$row['harga']}</td>
	    "; ?>
	    <td class="btn-group" role="group">
	    	<a href="?page=edit&no=<?php echo $row['no']; ?>" type="submit" class="btn btn-secondary btn-sm">Edit</a>
			<a onclick="return confirm('Are you sure want to delete this data?') " href="?page=list_produk&aksi=delete&no=<?php echo $row['no']; ?>" type="submit" class="btn btn-secondary btn-sm">Delete</a>
		</td><?php }?>
		</tr>
	  </tbody>
	</table>
</div>
</div>
</body>
</html>
