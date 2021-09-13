<html>
    <head>
        <title>Persegi</title>
    </head> 
    <body>
        <h2>LUAS DAN KELILING PERSEGI</h2><br>
    <form METHOD = "POST">
        Masukkan Sisi : <input type = "text" name = "sisi"><br>
        Masukkan Panjang : <input type = "text" name = "panjang"><br>
        Masukkan Lebar : <input type = "text" name = "lebar"><br>
        <input type = "submit" name = "input" value = "input"><br>
</form>
    </body>
</html>

<?php 
if (isset($_POST['input'])){
    $s = $_POST ['sisi'];

    $luas = $s * $s;
    $ke1 = 4 * $s;

    echo "Luas Persegi = $luas <br>";
    echo "Keliling Persegi = $ke1 " ;
}
?>