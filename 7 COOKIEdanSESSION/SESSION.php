<?php 
	session_start();

	// ketika button buat di klik
	if (isset($_POST['buat'])) {
		// Nama dari inputan
		$namaSession=$_POST['session'];
		// membuat Cookie
		$_SESSION['isi']= $namaSession;

		header("Location:SESSION.php");
	}

	// ketika button hapus di klik
	if (isset($_POST['hapus'])) {

		// Menghapus session 
		session_unset();

		header("Location:SESSION.php");
	}
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session </title>
</head>
<body>
	<h1>Nanti Session muncul di bawah !</h1>
	<?php if (isset($_SESSION['isi'])): ?>
		<h4>Isi dari session akan muncul <?= $_SESSION['isi']?></h4>
	<?php endif ?>
	<form method="post" action="">
		<input type="text" name="session">
		<button type="submit" name="buat">Buat</button>
		<button type="submit" name="hapus">Hapus</button>
	</form>
</body>
</html>