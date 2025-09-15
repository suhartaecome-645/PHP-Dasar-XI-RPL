<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>
<body>
    <h1>Operator Logika</h1>
    <p>Operator logika digunakan untuk menghubungkan dua atau lebih kondisi.</p>
    <p>Operator logika ada 3 yaitu AND, OR, dan NOT.</p>
    <p>Operator AND digunakan untuk menghubungkan dua atau lebih kondisi yang harus benar.</p>
    <p>Operator OR digunakan untuk menghubungkan dua atau lebih kondisi yang salah satu harus benar.</p>
    <p>Operator NOT digunakan untuk menghubungkan dua atau lebih kondisi yang harus salah.</p>
    <p>Contoh:</p>
    <?php 

        $n = true;
        $i = false;

        echo "== OPERATOR LOGIKA AND ==";
        echo "<br>";
        echo "True && False : ";
        var_dump($n && $i);
        echo "<br>";
        echo "False && Flase : ";
        var_dump($i && $i);
        echo "<br>";
        echo "True && True : ";
        var_dump($n && $n);
        echo "<br>";
        echo "False && True : ";
        var_dump($i && $n);
        echo "<br><br>";

        echo "== OPERATOR LOGIKA OR ==";
        echo "<br>";
        echo "N || I : ";
        var_dump($n || $i);
        echo "<br>";
        echo "I || I : ";
        var_dump($i || $i);
        echo "<br>";
        echo "N || N : ";
        var_dump($n || $n);
        echo "<br>";
        echo "I || N : ";
        var_dump($i || $n);
        echo "<br><br>";

        echo "== OPERATOR LOGIKA Negasi ==";
        echo "<br>";
        echo "Negasi I: ";
        var_dump(!$i);
        echo "<br>";
        echo "Negasi N: ";
        var_dump(!$n);
    ?>

</body>
</html>