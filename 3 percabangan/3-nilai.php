<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS Nilai 3</title>
</head>
<body>
    <h2>Menampilkan Predikat Nilai:</h2>
    <ul>
        <li>A = 90 – 100</li>
        <li>B = 80 – 89</li>
        <li>C = 70 – 79</li>
        <li>D = 60 – 69</li>
        <li>E = 0 – 59</li>
    </ul>
    <h2>Menampilkan Status Kelulusan:</h2>
    <ul>
        <li>Lulus jika nilai C ke atas (≥ 70)</li>
        <li>Tidak Lulus jika nilai D atau E (< 70)</li>
    </ul>
   
    <?php
    
        $nilai = 1;
        $predikat = '';
        $status = '';
        if ($nilai >= 90 && $nilai <= 100) {
            $predikat = 'A';
        } elseif ($nilai >= 80 && $nilai <= 89) {
            $predikat = 'B';
        } elseif ($nilai >= 70 && $nilai <= 79) {
            $predikat = 'C';
        } elseif ($nilai >= 60 && $nilai <= 69) {
            $predikat = 'D';
        } elseif ($nilai >= 0 && $nilai <= 59) {
            $predikat = 'E';
        } else {
            $predikat = 'Nilai tidak valid';
        }

        if ($nilai >= 70 && $nilai <= 100) {
            $status = 'Lulus';
        } elseif ($nilai >= 0 && $nilai < 70) {
            $status = 'Tidak Lulus';
        } else {
            $status = 'Nilai tidak valid';
        }
    ?>

    <h3>Hasil:</h3>
    <table>
        <tr>
            <td>Nilai </td>
            <td> : </td>
            <td><?= $nilai ?></td>
        </tr>
         <tr>
            <td>Predikat </td>
            <td> : </td>
            <td><?= $predikat ?></td>
        </tr>
         <tr>
            <td>Status </td>
            <td> : </td>
            <td><?= $status ?></td>
        </tr>
    </table>
</body>
</html>