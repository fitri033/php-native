<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kucing</title>
</head>
<body>
    <fieldset>
        <legend>kucing</legend>
        <form action="" method="post">
            <table>
            <tr>
                <td>Nama Kucing</td>
                <td> : </td>
                <td><input type="text" name="nama"><br></td>
            </tr>
            <tr>
                <td>Warna Kucing</td>
                <td> : </td>
                <td><input type="text" name="warna"><br></td>
            </tr>
            <tr>
                <td>Jumlah Kaki</td>
                <td> : </td>
                <td><input type="number" name="kaki" id=""></td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Masuk">
                    <input type="reset" name="reset" value="Hapus"></td>
            </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['nama'];
    $b = $_POST['warna'];
    $c = $_POST['kaki'];

    class kucing
    {
        public $a;
        public $b;
        public $c;

        public function emeng($a, $b, $c)
        {
            if ($c == 4) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Berwarna : " . $b . "<br>";
                echo "Memiliki Kaki : " . $c . "<br>";
                echo "Keterangan : Normal";
            } else if ($c <= 3) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Berwarna : " . $b . "<br>";
                echo "Memiliki Kaki : " . $c . "<br>";
                echo "Keterangan : sakit";
            } else if ($c >= 5) {
                echo "Nama Kucing : " . $a . "<br>";
                echo "Berwarna : " . $b . "<br>";
                echo "Memiliki Kaki : " . $c . "<br>";
                echo "Keterangan : bahaya";
            }
        }
    }
    $kucing = new kucing();
    echo $kucing->emeng($a, $b, $c);
}
?>