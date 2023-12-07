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
    <?php foreach ($data as $message): ?>
        <div id="visualiserContainer" style="background-image: url('<?= base_url('images/' . $message['IMAGEMESSAGE']) ?>')">
            <h2>
                <?= $message['TITREMESSAGE']; ?>
            </h2>
            <p>
                <?= $message['CONTENUMESSAGE']; ?>
            </p>
        </div>
    <?php endforeach; ?>
</div>
<?= $this->endSection() ?>