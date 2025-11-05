<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Latihan</h3>
    <?php
    $nilai = 100;
    if($nilai >= 86){
        echo "Nilai A";
    }else if($nilai >= 70 && $nilai <= 85) {
        echo "Nilai B";
    }else if($nilai >= 50 && $nilai <= 69 ) {
        echo "Nilai C";
    }else if($nilai < 50 && $nilai >= 30 ) {
        echo "Nilai D";
    }else if($nilai < 30) {
        echo "Nilai E";
    }

?>

</body>
</html>