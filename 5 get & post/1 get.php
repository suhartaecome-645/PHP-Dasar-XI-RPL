<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get di PHP</title>
</head>
<body>
    <h1>Get di PHP</h1>
    <form action="" >
        <input type="text" name="nama" placeholder="Nama">
        <input type="submit" value="Submit">
    </form>
    <?php
    echo $_GET['nama'];
    ?>
</body>
</html>