<?php 
	
	session_start();

	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		header("Location:dashboard.php");
	}

	if (isset($_POST['login'])) {
		$username=$_POST['username'];
		$password=$_POST['password'];

		if ($username=="Susi Susanti" && $password=="123") {
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;

			header("Location:dashboard.php");
		}else{
			$pesan="
				<div class='alert alert-danger mt-4' role='alert'>
				  Username dan Password Salah!
				</div>
			";
		}

	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Cookie</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
		<div class="card py-5 px-4 text-center" style="border-radius:15px">
			<h3>LOGIN</h3>
			<?php 
				if (isset($pesan)) {
					echo $pesan;
				}
			?>
			<form method="post" action="">
				<input type="text" name="username" class="form-control my-3"  placeholder="Input Username">
				<input type="password" name="password" class="form-control my-3" placeholder="Input Password">
				<button type="submit" name="login" class="btn btn-primary btn-sm">Login</button>
			</form>
		</div>
	</div>
</body>
</html>