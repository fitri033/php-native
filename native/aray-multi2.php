<?php

$artikel = [
    [
        "judul" => "Belajar php dan mysql untuk pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial php dari nol hingga mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "membuat aplikasi wen dengan php",
        "penulis" => "petanikode"
    ]
    ];

    foreach ($artikel as $post) {
        echo "<h2>".$post['judul']."</h2>";
        echo "<p>".$post['penulis']."<p>";
        echo "<hr>";
    }
?>