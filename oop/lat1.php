<?php
    // mendefinisikan sebuah class
    class komputer
    {
        // membuat property atau attributes
        public $pemilik= "fitri";
        public $merk = "philips";
        public $ukuran = 42;
    // membuat methode
    public function bernyala()
    {
        return " komputer di nyalakan";
    }
    public function mati()
        {
            return "komputer di matikan"; 
        }
    
    }
    //membuat object (inisiasi object)
    $komputer1 = new komputer;
    echo "Nama pemilik : " . $komputer1->pemilik . "<br>";
    echo "merk komputer : " . $komputer1->merk . "<br>";
    echo "ukuran komputer : " . $komputer1->ukuran . "<br>";
    echo "kondisi komputer : " . $komputer1->bernyala() . "<hr>";

    $kompuer2 = new komputer();



?>