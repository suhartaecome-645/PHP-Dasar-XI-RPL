<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan Nilai</title>
</head>
<body>
    <?php
        $nilai = 70;
        if ($nilai >= 80) {
            echo "Nilai Anda $nilai, Anda Lulus";
        } else {
            echo "Nilai Anda $nilai, Anda Tidak Lulus";
        }
    ?>
</body>
</html>