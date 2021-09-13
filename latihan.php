<?php

class latihan
{
    public $nama;

    function getNama()
    {
        return $this->nama = "Fitri";
    }

    function setNama($nama)
    {
        return $this->nama = $nama;
    }
}

$namaLengkap = new latihan;

echo "Nama Saya : " . $namaLengkap->getNama();
echo "<br>";
echo "Nama Sayai : " . $namaLengkap->setNama('Kundakun');
