<?php
    $data = [
        ["dosen" => "Aceng Fikri", "submenu" => [
            [ "nama" => "fitri",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika "],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Berenang"],
            ["Hobi" => "bermain"]]],

            [ "nama" =>
             "fajar",
            "MataKuliah" => [
            ["MataKuliah" => "Ipa"],
            ["MataKuliah" => "Ips"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "batminton"],
            ["Hobi" => "Bermain"]]],

            [ "nama" => "Farid",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],

        ["dosen" => "Ujang Betok", "submenu" => [
            [ "nama" => "iqbal",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "Bahasa Indonesia"],
            ["MataKuliah" => "Bahasa Inggris"]],

            "Hobi" => [
            ["Hobi" => "Futsal"],
            ["Hobi" => "Bermain"]]],

            [ "nama" =>
             "Alya",
            "MataKuliah" => [
            ["MataKuliah" => "Matematika"],
            ["MataKuliah" => "B indonesia"],
            ["MataKuliah" => "Sejarah Peradaban Islam"]],
            
            "Hobi" => [
            ["Hobi" => "Traveling"],
            ["Hobi" => "membaca"]]],

            [ "nama" => "jojo   ",
            "MataKuliah" => [
            ["MataKuliah" => "Pendidikan Pancasila"],
            ["MataKuliah" => "Bingbingan Konseling"],
            ["MataKuliah" => "Pendidikan Kewarga Negaran"]],

            "Hobi" => [
            ["Hobi" => "Bermain Golf"],
            ["Hobi" => "Bermain Billiar"]]],
        ]
        ],
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hobi</th>
        </tr>
        
        <?php $no=1 ; ?>
             <?php foreach($data as $key=> $menu) {
            foreach($menu['submenu'] as $val){
                ?><tr><td><?php 
                
                echo $no ++; ?></td>
                  <td><?php echo $val['nama'];?></td>
                  <td><?php echo $menu['dosen']?></td>
            
                  
            <?php
                 echo "<td>";
                  foreach($val['MataKuliah'] as $sub) {
                ?>   <li><?php echo  $sub['MataKuliah'] ;?></li>
                <?php
                }
                ?><?php
                 echo "<td>";
                foreach($val['Hobi'] as $hobi) {
                    echo "<li>". $hobi['Hobi']. "</li>";
                }
                echo "</td>";
            }
            }
            ?>
            </td>
            </tr>
        
        </table>
    </body>
    </html>