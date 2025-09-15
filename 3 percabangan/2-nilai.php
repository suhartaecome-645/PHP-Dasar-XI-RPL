<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai 2</title>
</head>
<body>
    <?php
        // input
        $nilai = 70;

        // desicion 1
        if ($nilai >= 80) {
            // output 1
            echo "Nilai Anda $nilai, Anda Lulus";

        // desicion 2
        } elseif ($nilai >= 60) {
            // output 2
            echo "Nilai Anda $nilai, Anda Remedial";

        // Tidak ada
        } else {

            // output 3
            echo "Nilai Anda $nilai, Anda Tidak Lulus";
        }
    ?>  
</body>
</html>