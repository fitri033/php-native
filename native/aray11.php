<?php

$hobi = [
    "membaca",
    "menulis",
    "ngeblog"
];

$hobi[1] = "coding";
unset($hobi[1]);
$hobi[] = "olahraga";

foreach($hobi as $hobiku) {
    echo $hobiku. "<br>";
}

?>