<html>
    <head><title>Data Array</title></head>
    <body>
        <fieldset>
            <legend>Program Masuk Sekolah</legend>
            <form action="" method ="post">
                <table>
                <tr>
                    <th>Masukan Jumlah Data</th>
                    <td>:</td>
                    <input type="number" name="jumlah">
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type="submit" name="simpan">simpan</button>
                        <button type="reset">Reset</button>
                    </td>
                </tr>
                </table>
            </form>
        </fieldset>

        <?php
        if(isset($_POST['simpan'])){
        
        $row = $_POST['jumlah'];
        ?>

        <fieldset>
    
            <legend>Input Data Siswa</legends>
            <table>
                <tr>
                <form action="latihan1pro.php" method="post">
                    <?php
                    for($i =1; $i<= $row; $i++){
                    ?>
                    </tr>
            <tr>
             <th colspan=2>Data Ke <?php echo $i;?>
             <td>Nama</td>
             <td><input type="text" name="nama[]"></td>
             <td></td> 
            </tr>
            <tr>
             <th colspan=2></th>
             <td>Asal Sekolah</td>
             <td><input type="text" name="asal[]"></td>
             <td></td> 
            </tr>
            <tr>
             <th colspan=2></th>
             <td>Nilai Indonesia</td>
             <td><input type="number" name="indo[]" min=1 max=100 required></td>
             <td></td> 
            </tr>
            <tr>
             <th colspan=2></th>
             <td>Nilai MTK</td>
             <td><input type="number" name="mtk[]" min=1 max=100 required></td>
             <td></td> 
            </tr>
            <tr>
             <th colspan=2></th>
             <td>Nilai Inggris</td>
             <td><input type="number" name="inggris[]" min=1 max=100 required></td>
             <td></td> 
            </tr>
            <tr>
             <th colspan=2></th>
             <td>Nilai Ipa</td>
             <td><input type="number" name="ipa[]" min=1 max=100 required></td>
             <td></td> 
            </tr>

<?php
}
?>
    <tr>
        <th></th>
        <td><button type="submit" name="save">simpan</button></td>
    </tr>
</form>
</table>
</fieldset>
<?php
}
?>
    </body>
</html>