<h1>salut</h1>
<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('default') ?>

<?= $this->section('titre') ?>

<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" name="titre" id="titre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="textarea" name="message" id="message" class="form-control" style="height: 200px"
                        required>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" name="enLigne" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">En ligne</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" name="imageBackground" type="file" id="formFile">
                </div>
                <input type="submit" value="Créer message" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>