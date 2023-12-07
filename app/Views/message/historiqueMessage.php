

<?= $this->extend('default') ?>

<?= $this->section('titre') ?>
Visualiser Messages
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <h1>Visualiser Messages</h1>
    <div id="visualiserContainer"
        >
        <?php foreach ($data as $historiquemessage): ?>
            <h2>
                    <?= $historiquemessage['TITREMESSAGE']; ?>
                </h2>

                <h2>
                    <?= $historiquemessage['DATEHISTORIQUEMESSAGE']; ?>
                </h2>
                <p>
                    <?= $historiquemessage['CONTENUMESSAGE']; ?>
                </p>
                <p>
                    <?= $historiquemessage['CONTENUMESSAGE']; ?>
                </p>

            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>