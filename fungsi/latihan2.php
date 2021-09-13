<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menghitung lingkaran</title>
</head>
<body>
    Menghitung lingkaran
    <form action="" method="post">
        <input type="number" name="jari">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

if (isset($_POST['submit'])) {
    $a =$_POST ['jari'];

    function luasLingkaran($jari, $phi=3.14)
    {
        $luas =$phi *$jari * $jari;
        return $luas;
    }
    function kelilinglingkaran($jari, $phi=3.14)
    {
        $keliling = 2 * ($phi * $jari);
        return $keliling;
    }
}
?>