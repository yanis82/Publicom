<?php
use App\Controllers\Message;

/**
 * @var CodeIgniter\View\View $this
 */
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inc/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>
        <?= $this->renderSection('title') ?>
    </title>
</head>

<body>
    <div id="cadreVisu">
        <button id="backButton">←</button>
        <section id="containerVisu" class="carousel" aria-label="Gallery">
            <?php foreach ($data as $key => $message): ?>
                <div class="itemVisu"
                    style="background-image : url('<?= base_url('images/' . $message['IMAGEMESSAGE']) ?>');">
                    <h2 class="titreVisu" style="font-size: <?= $message['TAILLEPOLICETITRE'] ?>px; font-family: <?= $message['TYPEPOLICETITRE'] ?>;">
                        <?= $message['TITREMESSAGE'] ?>
                    </h2>
                    <p class="contenuVisu" style="font-size: <?= $message['TAILLEPOLICECONTENU'] ?>px; font-family: <?= $message['TYPEPOLICECONTENU'] ?>; text-align: <?= $message['ALIGNEMENTMESSAGE'] ?>">

                        <?= $message['CONTENUMESSAGE'] ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </section>
        <button id="nextButton">→</button>
    </div>
    <script src="inc/js/visualiser.js"></script>
</body>

</html>