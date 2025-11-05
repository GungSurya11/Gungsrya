<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       h1{
        text-align: center;
       }

       input[type="number"] {
        box-shadow: 10;
        width: 100%;
        padding: 10px 18px;
        margin: 7px 0;
        display: inline-block;
        box-sizing: border-box;
        }

        input[type="submit"] {
        background-color: lightgreen;
        }

    </style>
</head>
<body>
    <h1>Kalkulator Kece</h1>
    <form action="Latihan3.php" method="post">

        <label for="">Bilangan 1</label><br>
        <input type="number" name="fname"><br>
        <label for="">Bilangan 2</label><br>
        <input type="number" name="sname"><br>
        
        <input type="submit" name="add" value="jumlah">
        <input type="submit" name="substract" value="Kurang">
        <input type="submit" name="Multiple" value="Kali">
        <input type="submit" name="divide" value="Bagi">
        <input type="submit" name="break" value="Reset">

    </form>
    <?php

    ?>
</body>
</html>