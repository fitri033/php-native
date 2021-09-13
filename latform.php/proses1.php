<?php
if(isset ($_POST['Input'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 + $bil2;
    $hasil1 = $bil1 - $bil2;
    $hasil2 = $bil1 * $bil2;
    $hasil3 = $bil1 / $bil2;
    echo "Bilangan 1 + Bilangan 2 = $hasil <br>";
    echo "Bilangan 1 - Bilangan 2 = $hasil1 <br>";
    echo "Bilangan 1 * Bilangan 2 = $hasil2 <br>";
    echo "Bilangan 1 / Bilangan 2 = $hasil3 <br>";
}
?>