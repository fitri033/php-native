<?php 

if(isset($_POST['buat'])){
    $bintang = $_POST['bintang'];

    for($i = 1; $i <= $bintang; $i++){
        for($j = $bintang; $j >= $i; $j--){
            echo "  ";
        }
        for($k = 1; $k <= $i; $k++){
            echo "*";
        }
        echo "<br>";
    }

    echo " ";

    for($l = $bintang; $l >= 1; $l--){
        for($m = $bintang; $m >= $l; $m--){
            echo "  ";
        }
        for($n = 1; $n <= $l; $n++){
            echo "*";
        }
        echo "<br>";
    }
}
