<?php
    if (isset($_POST['proses'])) {
        $nama = $_POST['nama'];
        $nik = $_POST['nik'];
        $merek = $_POST['merek'];
        $kelamin = $_POST['kelamin'];
        $agama = $_POST['agama'];
        $namamobil = $_POST['namamobil'];
        $jenismobil = $_POST['jenismobil'];
        $tanggalpeminjaman = $_POST['tanggalpeminjaman'];
        $tanggalkembali = $_POST['tanggalkembali'];
        $supir = $_POST['supir'];
        $penjamin = $_POST['penjamin'];
        $tanggalverivikasi = $_POST['tanggalverivikasi'];
        
   
        
       
 function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
}

$biayaharian = 25000;
$tgl1 =  Date_create("$tanggalpeminjaman");
$tgl2 =  Date_create("$tanggalkembali");
$jarak = $tgl2->diff($tgl1);

$tgl11 = Date_create("$tanggalkembali");
$tgl22 = Date_create("$tanggalverivikasi");
$lama = $tgl22->diff($tgl11);

$denda = 240000 * $jarak->d;

$totalbiaya = $biayaharian*$jarak->d;
$totaldenda =$jarak->d * $denda;
$totalpembayaran= $totalbiaya + $totaldenda;
} 
 
?>
<html>
<style>   
    @media print
    {
    .noprint {display:none;}
    }
</style>
 
<div class="noprint">
<!-- Tombol print / element yang ingin dihilangkan saat print -->
</div>
<fieldset>
    <table border=5 width=100% align=”center”>
        <tr><th colspan="8">Data Diri</th></tr>
        <tr>
            <th>Nama</th>
            <th>Nomor Induk Kependudukan</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            
            <th colspan="4">Penjamin</th>
            <tr>
                <td><?php echo "$nama"; ?> </td>
                <td><?php echo "$nik"; ?> </td>
                <td><?php echo "$kelamin"; ?> </td>
                <td><?php echo "$agama"; ?> </td>
                <td colspan="4"><?php echo "$penjamin"; ?></td>
                <!-- <td><?php echo "$tanggalpeminjaman"; ?> </td>
                <td><?php echo "$tanggalkembali"; ?> </td> -->


            </tr>

        </tr>
        
        <tr>
            <th colspan="8">Data Rental Mobil</th>
        </tr>
        <tr>
            <th>Nama Mobil</th>
            <th>Jenis Mobil</th>
            <th>Merk Mobil</th>
            <th>Tanggal Peminjaman</th>
            <th>No plat mobil</th>
            <th>Tanggal Kembali</th>
            <th>Tanggal Verivikasi Kembali</th>
            <th>Menggunakan Supir</th>
        </tr>
        <tr>
            <td><?php echo "$namamobil";?></td>
            <td><?php echo "$jenismobil";?></td>
            <td><?php echo "$merek"; ?></td>`
            <td><?php echo "$tanggalpeminjaman"; ?></td>
            <td><?php echo "$namamobil";?></td>
            <td><?php echo "$tanggalkembali";?></td>
            <td><?php echo "$tanggalverivikasi";?></td>
            <td><?php echo "$supir" ?></td>
           

        </tr>
        <tr>
            <th colspan="8">Rincian Biaya</th>
        </tr>
        <tr>
            <th colspan="7" align="left">Lama Pinjaman</th>
            <td><?php echo"$jarak->d";?> Hari</td>
        </tr>
        <tr>
        <?php  
        
        ?>
            <th colspan="7" align="left">Biaya Harian</th>
            <td><?php echo rupiah($biayaharian); ?></td>
        </tr>

        <tr>
            <th colspan="7" align="left">Telat Mengembalikan</th>
            <td><?php echo"$lama->d"?> Hari</td>
        </tr>
        <tr>
            <th colspan="7" align="left">Denda</th>
            <td><?php echo rupiah($denda); ?></td>
        </tr>
        <tr>
            <th colspan="8">Total Biaya</th>
        </tr>

        <tr>
            <th colspan="7" align="left">Total Biaya (Lama Pinjaman * Harian)</th>
            <td><?php echo rupiah($totalbiaya)?>;</td>
        </tr>
        <tr>
        <th colspan="7" align="left">Total Denda (Telat Mengembalikan  * Biaya Denda)</th>
            <td><?php echo rupiah($totaldenda);?></td>
        </tr>
        <tr>
            <th colspan="8">Pembayaran</th>
        </tr>

        <tr>
            <th colspan="7" align="left">Total Pembayaran (Biaya Telat + Total Denda)</th>
            <td><?php echo rupiah($totalpembayaran);?></td>
        </tr>

        

        
    </table><br>
    <form action="latihan5prooo.php" method="post">
    <br>
    <b>Masukan Uang pembayaran :</b>
        <input type="text" name="uangpembayaran">
        <input type="submit" value="Bayar" name="proses">  
        <input type="hidden" name="totalpembayaran" value=<?php echo "$totalpembayaran";?> >
        </form>
    <form action="latihan5prooo.php"></form>
    <div style=text-align:right>Bandung,<?php echo date('d  M  Y');?>
    <br><br><br><br><br>
    <br>Bendahara<br><br>
    <div class="noprint">
    <button onClick="window.print();">Print</button>
    </div>
    

</div>
</fieldset>
</html>