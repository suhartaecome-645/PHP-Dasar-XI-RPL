<?php 
	
	$students=[
			['083321','Fulan','XI RPL','Jl. Bagus Yabin','Laki-Laki','1.jpg'],
			['032112','Fulana','XI RPL','Jl. Ra Kartini','Perempuan','3.jpg'],
			['021213','Mila','XI RPL','Jl. Ra Gajah Mada','Perempuan','4.jpg'],
			['021214','Duta','XI RPL','Jl. Ra Pagon','Laki-Laki','2.jpg']
		   ];

		   // cara menampilkan array multidimensi
		   // var_dump($siswa[3][1]);
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Multidimensi</title>
</head>
<body>

	<?php foreach ($students as $student ) : ?>
		<ul>
			<li><img src="../foto/<?php echo $student['5'] ?>"></li>
			<li><?php echo $student['0'] ?></li>
			<li><?php echo $student['1'] ?></li>
			<li><?php echo $student['2'] ?></li>
			<li><?php echo $student['3'] ?></li>
			<li><?php echo $student['4'] ?></li>
		</ul>
	<?php endforeach ?>

</body>
</html>