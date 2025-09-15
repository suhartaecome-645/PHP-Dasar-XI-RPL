<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;

        echo "== OPERATOR PERBANDINGAN ==";
        echo "<br>";
        echo "Nilai A adalah $a dan Nilai B adalah $b";
        echo "<br><br>";
        echo "A == B : ";
        var_dump($a == $b);
        echo "<br>";
        echo "A != B : ";
        var_dump($a != $b);
        echo "<br>";
        echo "A > B : ";
        var_dump($a > $b);
        echo "<br>";
        echo "A < B : ";
        var_dump($a < $b);
        echo "<br>";
        echo "A >= B : ";
        var_dump($a >= $b);
        echo "<br>";
        echo "A <= B : ";
        var_dump($a <= $b);
 
    ?>
</body>
</html>