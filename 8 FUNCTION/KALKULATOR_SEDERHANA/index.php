<?php 

	if (isset($_POST['tambah']) || isset($_POST['kurang']) || isset($_POST['kali']) || isset($_POST['bagi'])) {
		$a=$_POST['angka1'];
		$b=$_POST['angka2'];
	}
		
	function tambah(){
		global $a, $b;
		return $a + $b;
	}

	function kurang(){
		global $a, $b;
		return $a - $b;
	}

	function kali(){
		global $a, $b;
		return $a * $b;
	}

	function bagi(){
		global $a, $b;
		return $a / $b;
	}

if (isset($_POST['tambah'])) 
	{
		$hasil=tambah();
	}elseif(isset($_POST['kurang'])){
		$hasil=kurang();
	}elseif(isset($_POST['kali'])){
		$hasil=kali();
	}elseif(isset($_POST['bagi'])){
		$hasil=bagi();
	}else{
		$hasil=0;
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/style/style.css">

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid bg-img d-flex justify-content-center align-items-center">
		<div class="card p-5 bg-glasses border border-light text-light">
			<h4 class="mb-3">Kalkulator Sederhana</h4>	
			<div class="alert alert-light text-end bg-glasses" role="alert">
			 <?= $hasil  ?>
			</div>
			<form method="post" action="">
				<input class="form-control my-3" type="number" name="angka1">
				<input class="form-control my-3" type="number" name="angka2">
				<div class="d-flex justify-content-between">
					<button class="btn btn-light col-2" type="submit" name="tambah">+</button>
					<button class="btn btn-light col-2" type="submit" name="kurang">-</button>
					<button class="btn btn-light col-2" type="submit" name="kali">x</button>
					<button class="btn btn-light col-2" type="submit" name="bagi">/</button>
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>