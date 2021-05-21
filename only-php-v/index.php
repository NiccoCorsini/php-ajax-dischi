<?php 

// Stampare a schermo i dischi musicali (vedi screenshot allegato) in due modi diversi:
// -   Solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
// -   Attraverso l’utilizzo di Axios: al caricamento della pagina axios chiederà attraverso una chiamata API i dischi a php e li stamperà attraverso vue.
// Utilizzare: Html, JS, Vue e Axios (CDN), Php
// Nella repo potete creare due cartelle: una per la versione solo PHP e una per la versione AJAX. Avremo sia oggi che domani per lavorarci.
require_once __DIR__ . '/dati/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>

    <link rel="stylesheet" href="./css/style.css
    ">
</head>
<body>
    <?php include __DIR__ . "/partial/template/header.php"; ?>

    <div class="container">

        <?php foreach ($database as $card) { ?>
            <div class="card">
                <img src="<?php echo $card['poster'] ?>" alt="<?php echo $card['title'] ?>">
                <div class="details">
                <h3><?php echo $card['title'] ?></h3>
                <h5><?php echo $card['author'] ?></h5>
                <h4><?php echo $card['year'] ?></h4>
                <h5><?php echo $card['genre'] ?></h5>
                </div>
            </div>
        <?php } ?>

    </div>
</body>
</html>