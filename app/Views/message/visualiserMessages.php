<?php
use App\Controllers\Message;

/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('default') ?>

<?= $this->section('titre') ?>
Visualiser Messages
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <h1>Visualiser Messages</h1>



    <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            <?php foreach ($data as $key => $message): ?>
                <!-- <div class="carousel-item active">
                    <img class="d-block w-100" src="<?= base_url('images/' . $message['IMAGEMESSAGE']) ?>" alt="slide">
                </div> -->
                <li id="carousel__slide<?= $key ?>" tabindex="0" class="carousel__slide">
                    <div class="carousel__snapper">
                        <p><?= $key ?></p>
                        <p>count<?= count($data) ?></p>
                        <p>suiv : <?= $key + 1 >= count($data) ? 0 : $key +1 ?></p>
                        <a href="#carousel__slide<?= $key - 1 <= -1 ? count($data)-1 : $key-1 ?>" class="carousel__prev">Go
                            to last slide</a>
                        <a href="#carousel__slide<?= $key + 1 >= count($data) ? 0 : $key +1 ?>" class="carousel__next">Go to next slide</a>
                    </div>
                </li>
            <?php endforeach; ?>

        </ol>

        <!-- <div id="visualiserContainer">
        
    </div> -->
</div>
<?= $this->endSection() ?>