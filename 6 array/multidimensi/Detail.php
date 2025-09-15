<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Siswa</title>
	<!-- menghubungkan CDN Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<!-- menghubungkan CDN Bootstrap JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Menghubungkan CDN icon bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	
</head>
<body>
	<div class="container-fluid bg-primary-subtle py-5">
		<div class="container">

			<!-- card -->
			<div class="card">
			  <div class="card-header">
			    Detail Siswa
			  </div>
			  <div class="card-body">
			  	<div class="row">
			  		<div class="col-3">
			  			<img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="width: 100%;">
			  		</div>
			  		<div class="col-6">
			  			<table>
			  				<tr>
			  					<td><h5>Nama</h5></td>
			  					<td class="px-3"><h5>:</h5></td>
			  					<td><h5><?= $_GET['nama'] ?></h5></td>
			  				</tr>
			  				<tr>
			  					<td><h5>NISN</h5></td>
			  					<td class="px-3"><h5>:</h5></td>
			  					<td><h5><?= $_GET['nisn'] ?></h5></td>
			  				</tr>
			  				<tr>
			  					<td><h5>Gender</h5></td>
			  					<td class="px-3"><h5>:</h5></td>
			  					<td><h5><?= $_GET['jk'] ?></h5></td>
			  				</tr>
			  				<tr>
			  					<td><h5>Kelas</h5></td>
			  					<td class="px-3"><h5>:</h5></td>
			  					<td><h5><?= $_GET['kls'] ?></h5></td>
			  				</tr>
			  				<tr>
			  					<td><h5>Alamat</h5></td>
			  					<td class="px-3"><h5>:</h5></td>
			  					<td><h5><?= $_GET['alamat'] ?></h5></td>
			  				</tr>
			  			</table>
			  			
			  			 <a href="Data_Siswa.php" class="btn btn-warning">Kembali</a>
			  		</div>
			  	</div>
			   
			  </div>
			</div>

		</div>
	</div>
</body>
</html>