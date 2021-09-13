<?php
    // mendefinisikan sebuah class
    class kucing
    {
        // membuat property atau attributes
        public $warna = "coklat";
        public $jumlahkaki = 4;
        public $jenisbulu = "panjang";
        public $makananfavorit = "ikan pindang";
    // membuat methode
    public function bersuara()
    {
        return " meow... meow... meow...";
    }
    public function berburu()
        {
            return "berburu ikan"; 
        }
    
    }
    //membuat object (inisiasi object)
    $kucing1 = new kucing();
    echo "warna kucing : " . $kucing1->warna . "<br>";
    echo "sifat kucing : " . $kucing1->bersuara() . "<hr>";

    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna = "oren";
    echo "warna kucing : " . $kucing2->warna ."<br>";
    echo "sifat kucing : " . $kucing2->bersuara() . "<hr>";
?>