<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$Bahasa_Inggris = 10;
$Front_End = 20;
$Back_End = 30;
$Matematika = 70;
$Fisika = 50;

$rerata = ($Bahasa_Inggris + $Front_End + $Back_End + $Matematika + $Fisika) / 5;

$passing_grade = 70;

echo "Rata-rata nilai Anda: " . $rerata . "\n";

if ($rerata >= $passing_grade) {
    echo "Selamat, Anda lolos ke tahap berikutnya!";
} else {
    echo "Maaf, Anda Tidak lolos";
}
?>

</body>
</html>