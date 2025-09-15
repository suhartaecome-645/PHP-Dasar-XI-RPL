<?php 
	
	$students=[
		[
			"nisn"=>"0744323",
			"nama"=>"Ahmad Saepudin",
			"alamat"=>"Jl. Bagus Yabin",
			"Kelas"=>"XII TKJR",
			"JK"=>"Laki-Laki",
			"foto"=>"1.jpg"
		],
		[
			"nisn"=>"0744324",
			"nama"=>"Bunga Citra Lestari",
			"alamat"=>"Jl. Prabu Siliwangi",
			"Kelas"=>"X RPL",
			"JK"=>"Perempuan",
			"foto"=>"4.jpg"
		],
		[
			"nisn"=>"0744325",
			"nama"=>"Candra Kirain",
			"alamat"=>"Jl. Jaka Tingkir",
			"Kelas"=>"XI TKRO",
			"JK"=>"Laki-Laki",
			"foto"=>"2.jpg"
		],
		[
			"nisn"=>"0744356",
			"nama"=>"Desi Mulai Sekarang",
			"alamat"=>"Jl. Joko Sembung",
			"Kelas"=>"X MP",
			"JK"=>"Perempuan",
			"foto"=>"3.jpg"
		],
		[
			"nisn"=>"0744357",
			"nama"=>"Euis Sunda Pisan",
			"alamat"=>"Jl. Sikabayan",
			"Kelas"=>"X HTML",
			"JK"=>"Perempuan",
			"foto"=>"5.jpg"
		]
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
				      <td><img src="../foto/<?= $student['foto'] ?>" class="rounded"></td>
				      <td><?= $student['nisn'] ?></td>
				      <td><?= $student['nama'] ?></td>
				      <td><?= $student['JK'] ?></td>
				      <td><?= $student['Kelas'] ?></td>
				      <td><?= $student['alamat'] ?></td>
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