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
			    Edit Siswa
			  </div>
			  <div class="card-body">
			  	<div class="row">
			  		<div class="col-3">
			  			<img src="../foto/<?= $_GET['foto'] ?>" class="rounded" style="width: 100%;">
			  		</div>
			  		<div class="col-6">
			  			<form>
						  <div class="mb-3">
						    <label for="nisn" class="form-label">NISN</label>
						    <input type="number" class="form-control" id="nisn" aria-describedby="emailHelp" value="<?= $_GET['nisn']?>">
						  </div>
						  <div class="mb-3">
						    <label for="nama" class="form-label">Nama</label>
						    <input type="text" class="form-control" id="nama" value="<?= $_GET['nama']?>">
						  </div>
						   <div class="mb-3">
						    <label for="kelas" class="form-label">Kelas</label>
						    <input type="text" class="form-control" id="kelas" aria-describedby="emailHelp" value="<?= $_GET['kls']?>">
						  </div>
						  <div class="mb-3">
						    <label for="gender" class="form-label">Gender</label>
						    <input type="text" class="form-control" id="gender" value="<?= $_GET['jk']?>">
						  </div>
						  <div class="mb-3">
						    <label for="Alamat" class="form-label">Alamat</label>
						    <input type="text" class="form-control" id="Alamat" value="<?= $_GET['alamat']?>">
						  </div>

						  <button type="submit" class="btn btn-primary">Simpan</button>
						  <a href="Data_Siswa.php" class="btn btn-warning">Kembali</a>
						</form>
			  		</div>
			  	</div>
			   
			  </div>
			</div>

		</div>
	</div>
</body>
</html>