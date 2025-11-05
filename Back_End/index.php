<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Kuis/Latihan</h3>
    <table>
    <?php
    $nim = 2300010001;
    $nama = "A.A. Kompyang Surya Ananda";
    $kode_jurusan = "BA231";
    $angkatan = 2023;
    $umur = 20;
    $gender = "Laki_laki";
    $hobi = "Sepak bola, Futsal, Gamer";


    echo "
   
    <tr>
    <td>Nim : $nim <br></td>
    </tr>
     <tr>
    <td>Nama : $nama <br></td>
    </tr>
     <tr>
    <td>Kode Jurusan : $kode_jurusan <br></td>
    </tr>
     <tr>
    <td>Angkatan : $angkatan <br></td>
    </tr>
     <tr>
    <td>Umur : $umur <br></td>
    </tr>
     <tr>
    <td>Gender : $gender <br></td>
    </tr>
     <tr>
    <td>Hobi :$hobi <br></td>
    </tr>
    "
    ?>
    </table>
</body>
</html>