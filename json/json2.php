<?php

$Datajson = '{
  "nama": "fitri",
  "usia": 23,
  "domisili": "Bandung",
  "wni": true,
  "hobi": [
    "Futsal", "Main Game", "Main Kelereng"
  ]
}';

$data = json_decode($Datajson);

echo "Nama: {$data->nama} <br>";
echo "Usia: {$data->usia} <br>";
echo "domisili: {$data->domisili} <br>";

echo "Hobi: " . implode(", ", $data->hobi);
?>