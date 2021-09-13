<html>
    <head>
        <title>Segitiga</title>
    </head> 
    <body>
        <h2>LUAS DAN KELILING Segitiga</h2><br>
    <form METHOD = "POST">
        Masukkan Alas : <input type = "text" name = "alas"><br>
        Masukkan Tinggi : <input type = "text" name = "tinggi"><br>
        Masukkan sisi 1 : <input type = "text" name = "sisi1"><br>
        Masukkan sisi 2 : <input type = "text" name = "sisi2"><br>
        Masukkan sisi 3 : <input type = "text" name = "sisi3"><br>
        <input type = "submit" name = "input" value = "input"><br>
</form>
    </body>
</html>

<?php 
if (isset($_POST['input'])){
    $a = $_POST ['alas'];
    $t = $_POST ['tinggi'];
    $s1 = $_POST ['sisi1'];
    $s2 = $_POST ['sisi2'];
    $s3 = $_POST ['sisi3'];


    $luas = 0.5 * $a * $t;
    $ke1 = $s1 * $s2 * $s3;

    echo "Luas segitiga = $luas <br>";
    echo "Keliling segitiga = $ke1 " ;
}
?>