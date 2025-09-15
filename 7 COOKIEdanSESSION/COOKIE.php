<?php 

	// ketika button buat di klik
	if (isset($_POST['buat'])) {
		// Nama dari inputan
		$namaKue=$_POST['kue'];
		// membuat Cookie
		setcookie('kue', $namaKue , time() + 3600);

		header("Location:COOKIE.php");
	}

	// ketika button hapus di klik
	if (isset($_POST['hapus'])) {

		// Menghapus Cookie 
		setcookie('kue', "" , time() - 3600);

		header("Location:COOKIE.php");
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie </title>
</head>
<body>
	<h1>Nanti Cookie muncul di bawah !</h1>
	<?php if (isset($_COOKIE['kue'])): ?>
		<h4>Sekarang kita makan kue <?= $_COOKIE['kue']?></h4>
	<?php endif ?>
	<form method="post" action="">
		<input type="text" name="kue">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>