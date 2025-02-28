<?php
    $typeGerecht = "Vlees";
    $naamGerecht = "Biefstuk";
    $prijs = 48;
    $beschrijving = "Een groot stuk biefstuk van een koe";
    $ingredientenLijst = "Bief<br>Zout<br>Peper";
    $allergenenLijst = "Zout<br>Peper";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    Gerecht type: <?= $typeGerecht?><br>
    <br>
    <?=$naamGerecht ?> €<?= $prijs?><br>
    <br>
    <?= $beschrijving?><br>
    <br>
    Ingredienten Lijst:<br>
    <?= $ingredientenLijst?><br>
    <br>
    Bent u allergisch? Bekijk dan hieronder de allergenen:<br>
    <?= $allergenenLijst?><br>
    </p>
</body>
</html>


<!-- http://localhost:88/02/HTML/menu.php -->