<?php 
	
	$students=[
			['083321','Fulan','XI RPL','Jl. Bagus Yabin','Laki-Laki','1.jpg'],
			['032112','Fulana','XI RPL','Jl. Ra Kartini','Perempuan','3.jpg'],
			['021213','Mila','XI RPL','Jl. Ra Gajah Mada','Perempuan','4.jpg'],
			['021214','Duta','XI RPL','Jl. Ra Pagon','Laki-Laki','2.jpg']
		   ];
    $no=1;
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Siswa</title>
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
			    Data Siswa
			  </div>
			  <div class="card-body">
			   <table class="table">
				  <thead>
				    <tr>
				      <th scope="col">No.</th>
				      <th scope="col">Foto</th>
				      <th scope="col">NISN</th>
				      <th scope="col">Nama</th>
				      <th scope="col">Gender</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php foreach ($students as $student): ?>
				    <tr>
				      <th scope="row"><?= $no ?></th>
				      <td><img src="../foto/<?= $student['5'] ?>" class="rounded"></td>
				      <td><?= $student['0'] ?></td>
				      <td><?= $student['1'] ?></td>
				      <td><?= $student['4'] ?></td>
				      <td><?= $student['2'] ?></td>
				      <td><?= $student['3'] ?></td>
				      <td>
				      	<a href="Edit.php?foto=<?= $student['5'] ?>&nisn=<?= $student['0'] ?>&nama=<?= $student['1'] ?>&jk=<?= $student['4'] ?>&kls=<?= $student['2'] ?>&alamat=<?= $student['3'] ?>" class="btn btn-success"><i class="bi bi-pencil"></i></a>
				      	<a href="Detail.php?foto=<?= $student['5'] ?>&nisn=<?= $student['0'] ?>&nama=<?= $student['1'] ?>&jk=<?= $student['4'] ?>&kls=<?= $student['2'] ?>&alamat=<?= $student['3'] ?>" class="btn btn-primary"><i class="bi bi-list"></i></a>
				  	  </td>
				    </tr>
				    <?php $no++ ?>
				    <?php endforeach ?>
				  </tbody>
				</table>
			  </div>
			</div>

		</div>
	</div>
</body>
</html>