<html>
    <head>
        <title>Lingkaran</title>
    </head> 
    <body>
        <form METHOD = "POST">
            <fieldset>
                <legend><h1>LUAS DAN KELILING LINGKARAN</h1></legend>
                <input type ="number" name="jari" placeholder ="Masukan Jari-Jari">
                <select name = "pilih" id=" ">
                    <option value = " ">pilih</option>
                    <option value = "1">Luas</option>
                    <option value = "2">Keliling</option>
                </select>
                <button type="submit" name="hitung">Hitung</button>
            </fieldset>
        </form>
    </body>
</html>

<?php 
if(isset($_POST['hitung'])){
    $jari = $_POST['jari'];
    $pilih = $_POST['pilih'];

    if( $pilih == "1" ){
        $jari **=2;
        $hasil = 3.14 * $jari;
    }else if ( $pilih == "2" ){
        $hasil = 2* (3.14 * $jari);
    }
    echo "Hasilnya :$hasil";
}
?>