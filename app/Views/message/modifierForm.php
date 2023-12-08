<h1>salut</h1>
<?php
/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('default') ?>
Modifier message
<?= $this->section('titre') ?>

<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/modifier-message" method="post" enctype="multipart/form-data">
                <input style="display: none;" name="idMessage" type="text" value="<?= $IDMESSAGE ?>">
                <div class="mb-3">
                    <label for="titre" class="form-label">Titre</label>
                    <input type="text" value="<?= $TITREMESSAGE ?>" name="titre" id="titre" class="form-control"
                        required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>;
                    <input type="textarea" name="message" id="message" class="form-control" style="height: 200px"
                        required value="<?= $CONTENUMESSAGE ?>">
                </div>
                <div>
                    <label for="policeTitre" class="form-label">Police titre</label>
                    <select id="policeTitre" name="policeTitre">
                        <option <?= $TYPEPOLICETITRE === 'Franklin Gothic Medium' ? 'selected' : '' ?> value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                        <option <?= $TYPEPOLICETITRE === 'Arial Narrow' ? 'selected' : '' ?> value="Arial Narrow">Arial Narrow</option>
                        <option <?= $TYPEPOLICETITRE === 'Arial' ? 'selected' : '' ?> value="Arial">Arial</option>
                        <option <?= $TYPEPOLICETITRE === 'Courier New' ? 'selected' : '' ?> value="Courier New">Courier New</option>
                        <option <?= $TYPEPOLICETITRE === 'Courier' ? 'selected' : '' ?> value="Courier">Courier</option>
                        <option <?= $TYPEPOLICETITRE === 'Gill Sans' ? 'selected' : '' ?> value="Gill Sans">Gill Sans</option>
                        <option <?= $TYPEPOLICETITRE === 'Gill Sans MT' ? 'selected' : '' ?> value="Gill Sans MT">Gill Sans MT</option>
                        <option <?= $TYPEPOLICETITRE === 'Calibri' ? 'selected' : '' ?> value="Calibri">Calibri</option>
                        <option <?= $TYPEPOLICETITRE === 'Trebuchet MS' ? 'selected' : '' ?> value="Trebuchet MS">Trebuchet MS</option>
                        <option <?= $TYPEPOLICETITRE === 'Lucida Sans' ? 'selected' : '' ?> value="Lucida Sans">Lucida Sans</option>
                        <option <?= $TYPEPOLICETITRE === 'Lucida Grande' ? 'selected' : '' ?> value="Lucida Grande">Lucida Grande</option>
                        <option <?= $TYPEPOLICETITRE === 'Lucida Sans Unicode' ? 'selected' : '' ?> value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                        <option <?= $TYPEPOLICETITRE === 'Times New Roman' ? 'selected' : '' ?> value="Times New Roman">Times New Roman</option>
                        <option <?= $TYPEPOLICETITRE === 'Times' ? 'selected' : '' ?> value="Times">Times</option>
                        <option <?= $TYPEPOLICETITRE === 'Impact' ? 'selected' : '' ?> value="Impact">Impact</option>
                        <option <?= $TYPEPOLICETITRE === 'Haettenschweiler' ? 'selected' : '' ?> value="Haettenschweiler">Haettenschweiler</option>
                        <option <?= $TYPEPOLICETITRE === 'Arial Narrow Bold' ? 'selected' : '' ?> value="Arial Narrow Bold">Arial Narrow Bold</option>
                        <option <?= $TYPEPOLICETITRE === 'Verdana' ? 'selected' : '' ?> value="Verdana">Verdana</option>
                        <option <?= $TYPEPOLICETITRE === 'Geneva' ? 'selected' : '' ?> value="Geneva">Geneva</option>
                        <option <?= $TYPEPOLICETITRE === 'Tahoma' ? 'selected' : '' ?> value="Tahoma">Tahoma</option>
                    </select>

                </div>
                <div>
                    <label for="policeContenu" class="form-label">Police message</label>
                    <select id="policeContenu" name="policeContenu">
                        <option <?= $TYPEPOLICECONTENU === 'Franklin Gothic Medium' ? 'selected' : '' ?> value="Franklin Gothic Medium">Franklin Gothic Medium</option>
                        <option <?= $TYPEPOLICECONTENU === 'Arial Narrow' ? 'selected' : '' ?> value="Arial Narrow">Arial Narrow</option>
                        <option <?= $TYPEPOLICECONTENU === 'Arial' ? 'selected' : '' ?> value="Arial">Arial</option>
                        <option <?= $TYPEPOLICECONTENU === 'Courier New' ? 'selected' : '' ?> value="Courier New">Courier New</option>
                        <option <?= $TYPEPOLICECONTENU === 'Courier' ? 'selected' : '' ?> value="Courier">Courier</option>
                        <option <?= $TYPEPOLICECONTENU === 'Gill Sans' ? 'selected' : '' ?> value="Gill Sans">Gill Sans</option>
                        <option <?= $TYPEPOLICECONTENU === 'Gill Sans MT' ? 'selected' : '' ?> value="Gill Sans MT">Gill Sans MT</option>
                        <option <?= $TYPEPOLICECONTENU === 'Calibri' ? 'selected' : '' ?> value="Calibri">Calibri</option>
                        <option <?= $TYPEPOLICECONTENU === 'Trebuchet MS' ? 'selected' : '' ?> value="Trebuchet MS">Trebuchet MS</option>
                        <option <?= $TYPEPOLICECONTENU === 'Lucida Sans' ? 'selected' : '' ?> value="Lucida Sans">Lucida Sans</option>
                        <option <?= $TYPEPOLICECONTENU === 'Lucida Grande' ? 'selected' : '' ?> value="Lucida Grande">Lucida Grande</option>
                        <option <?= $TYPEPOLICECONTENU === 'Lucida Sans Unicode' ? 'selected' : '' ?> value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                        <option <?= $TYPEPOLICECONTENU === 'Times New Roman' ? 'selected' : '' ?> value="Times New Roman">Times New Roman</option>
                        <option <?= $TYPEPOLICECONTENU === 'Times' ? 'selected' : '' ?> value="Times">Times</option>
                        <option <?= $TYPEPOLICECONTENU === 'Impact' ? 'selected' : '' ?> value="Impact">Impact</option>
                        <option <?= $TYPEPOLICECONTENU === 'Haettenschweiler' ? 'selected' : '' ?> value="Haettenschweiler">Haettenschweiler</option>
                        <option <?= $TYPEPOLICECONTENU === 'Arial Narrow Bold' ? 'selected' : '' ?> value="Arial Narrow Bold">Arial Narrow Bold</option>
                        <option <?= $TYPEPOLICECONTENU === 'Verdana' ? 'selected' : '' ?> value="Verdana">Verdana</option>
                        <option <?= $TYPEPOLICECONTENU === 'Geneva' ? 'selected' : '' ?> value="Geneva">Geneva</option>
                        <option <?= $TYPEPOLICECONTENU === 'Tahoma' ? 'selected' : '' ?> value="Tahoma">Tahoma</option>
                    </select>
                </div>

                <div>
                    <label for="alignementMessage" class="form-label">Alignement message</label>
                    <select id="alignementMessage" name="alignementMessage">
                        <option <?= $ALIGNEMENTMESSAGE === 'justify' ? 'selected' : '' ?> value="justify">Justifier</option>
                        <option <?= $ALIGNEMENTMESSAGE === 'center' ? 'selected' : '' ?> value="center">centrer</option>
                        <option <?= $ALIGNEMENTMESSAGE === 'right' ? 'selected' : '' ?> value="right">droite</option>
                        <option <?= $ALIGNEMENTMESSAGE === 'left' ? 'selected' : '' ?> value="left">gauche</option>
                    </select>
                </div>

                <div>
                    <label for="policeTailleTitre" class="form-label">Taille titre</label>
                    <input type="number" name="policeTailleTitre" id="policeTailleTitre" class="form-control" value="<?= $TAILLEPOLICETITRE ?>"
                        required>
                </div>
                <div>
                    <label for="policeTailleContenu" class="form-label">Taille message</label>
                    <input type="number" name="policeTailleContenu" id="policeTailleContenu" class="form-control"
                        value="<?= $TAILLEPOLICECONTENU ?>" required>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" accept="image/*" name="imageBackground" type="file" id="formFile">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" name="enLigne" type="checkbox" role="switch"
                        id="flexSwitchCheckDefault" <?= $ENLIGNE ? 'checked' : '' ?>>
                    <label class="form-check-label" for="flexSwitchCheckDefault">En ligne</label>
                </div>
                <input type="submit" value="Modifier message" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>