<?php
session_start();

// Jika belum ada sesi, inisialisasi variabel sesi
if (!isset($_SESSION['nilai'])) {
    $_SESSION['nilai'] = "";
}

if (isset($_POST['nilai'])) {
    $input = $_POST['nilai'];
    
    // Jika input adalah "C", hapus semua data dari sesi
    if ($input == "C") {
        $_SESSION['nilai'] = "";
        $hasil = 0;
    } 
    // Jika input adalah "=", evaluasi ekspresi matematika
    elseif ($input == "=") {
        try {
            // Eval berfungsi untuk menghitung ekspresi yang tersimpan
            $hasil = eval("return " . $_SESSION['nilai'] . ";");
            $_SESSION['nilai'] = $hasil; // Menyimpan hasilnya untuk operasi berikutnya
        } catch (Exception $e) {
            $hasil = "Error"; // Jika ada kesalahan dalam perhitungan
            $_SESSION['nilai'] = "";
        }
    } 
    // Jika input adalah angka atau operator
    else {
        // Tambahkan input ke dalam ekspresi
        $_SESSION['nilai'] .= $input;
        $hasil = $_SESSION['nilai']; // Tampilkan ekspresi yang sedang dibangun
    }
} else {
    $hasil = 0; // Nilai default sebelum ada input
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
		<div class="card p-4 pb-5 bg-glasses border border-light text-light col-3">
			<p class="mb-5 text-center">Kalkulator Sederhana</p>	
			<div class="alert alert-light text-end bg-glasses" role="alert">
			 <?= $hasil ?>
			</div>
			<form method="post" action="">
				<div class="d-flex justify-content-between my-3">
					<div class="col-3 pe-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="7">7</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="8">8</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="9">9</button>
					</div>
					<div class="col-3 ps-1">
						<button class="btn btn-outline-light btn-secondary col-12" type="submit" name="nilai" value="/">/</button>
					</div>
				</div>
				<div class="d-flex justify-content-between my-3">
					<div class="col-3 pe-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="4">4</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="5">5</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="6">6</button>
					</div>
					<div class="col-3 ps-1">
						<button class="btn btn-outline-light btn-secondary col-12" type="submit" name="nilai" value="*">x</button>
					</div>
				</div>
				<div class="d-flex justify-content-between my-3">
					<div class="col-3 pe-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="1">1</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="2">2</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="3">3</button>
					</div>
					<div class="col-3 ps-1">
						<button class="btn btn-outline-light btn-secondary col-12" type="submit" name="nilai" value="-">-</button>
					</div>
				</div>
				<div class="d-flex justify-content-between my-3">
					<div class="col-3 pe-1">
						<button class="btn btn-outline-light btn-danger col-12" type="submit" name="nilai" value="C">C</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-light col-12" type="submit" name="nilai" value="0">0</button>
					</div>
					<div class="col-3 px-1">
						<button class="btn btn-outline-light btn-primary col-12" type="submit" name="nilai" value="=">=</button>
					</div>
					<div class="col-3 ps-1">
						<button class="btn btn-outline-light btn-secondary col-12" type="submit" name="nilai" value="+">+</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>