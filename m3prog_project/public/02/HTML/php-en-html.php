<?php 
    $title = "Een php html voorbeeld pagina";
    $url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrU8cxp7HggJT1uJCrlgFC7yESF4LjLdxgKergVXJH3NmioY4SEcFowJzkCkDRarThHsk&usqp=CAU";
    $altText = "Super Bekende Acteur Met Veel Banen";
    $auteur = "ColinJMMC";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <img src="<?php echo $url; ?>" alt="<?php echo $altText; ?>">
        <section>
            <p>Auteur: <?= $auteur;?></p>
        </section>




    </main>
</body>
</html>



<!-- http://localhost:88/02/HTML/php-en-html.php -->