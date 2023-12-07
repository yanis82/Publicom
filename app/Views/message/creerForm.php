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
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" name="titre" id="titre" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <input type="textarea" name="message" id="message" class="form-control" style="height: 200px"
                        required>
                </div>
                <div>
                    <label for="policeTitre" class="form-label">Police titre</label>
                    <select id="policeTitre" name="policeTitre">
                        <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                        <option value="Arial Narrow">Arial Narrow</option>
                        <option value="Arial">Arial</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Courier">Courier</option>
                        <option value="Gill Sans">Gill Sans</option>
                        <option value="Gill Sans MT">Gill Sans MT</option>
                        <option value="Calibri">Calibri</option>
                        <option value="Trebuchet MS">Trebuchet MS</option>
                        <option value="Lucida Sans">Lucida Sans</option>
                        <option value="Lucida Grande">Lucida Grande</option>
                        <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Times">Times</option>
                        <option value="Impact">Impact</option>
                        <option value="Haettenschweiler">Haettenschweiler</option>
                        <option value="Arial Narrow Bold">Arial Narrow Bold</option>
                        <option value="Verdana">Verdana</option>
                        <option value="Geneva">Geneva</option>
                        <option value="Tahoma">Tahoma</option>
                    </select>

                </div>
                <div>
                    <label for="policeMessage" class="form-label">Police message</label>
                    <select id="policeMessage" name="policeMessage">
                        <option value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                        <option value="Arial Narrow">Arial Narrow</option>
                        <option value="Arial">Arial</option>
                        <option value="Courier New">Courier New</option>
                        <option value="Courier">Courier</option>
                        <option value="Gill Sans">Gill Sans</option>
                        <option value="Gill Sans MT">Gill Sans MT</option>
                        <option value="Calibri">Calibri</option>
                        <option value="Trebuchet MS">Trebuchet MS</option>
                        <option value="Lucida Sans">Lucida Sans</option>
                        <option value="Lucida Grande">Lucida Grande</option>
                        <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                        <option value="Times New Roman">Times New Roman</option>
                        <option value="Times">Times</option>
                        <option value="Impact">Impact</option>
                        <option value="Haettenschweiler">Haettenschweiler</option>
                        <option value="Arial Narrow Bold">Arial Narrow Bold</option>
                        <option value="Verdana">Verdana</option>
                        <option value="Geneva">Geneva</option>
                        <option value="Tahoma">Tahoma</option>
                    </select>
                </div>
                
                <div>
                    <label for="tailleContenuTitre" class="form-label">Taille titre</label>
                    <input type="number" name="tailleContenuTitre" id="tailleContenuTitre" class="form-control" value="14" required>
                </div>
                <div>
                    <label for="policeContenuMessage" class="form-label">Taille message</label>
                    <input type="number" name="policeContenuMessage" id="policeContenuMessage" class="form-control" value="14" required>
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" name="enLigne" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">En ligne</label>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" accept="image/*" name="imageBackground" type="file" id="formFile">
                </div>
                <div class="mb-3">

                    <input type="submit" value="Créer message" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>