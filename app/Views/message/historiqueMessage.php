<?php
use App\Controllers\Message;

/**
 * @var CodeIgniter\View\View $this
 */
?>

<?= $this->extend('default') ?>

<?= $this->section('titre') ?>

<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <h1>Historique de messages : </h1>
    <a class="nav-link active" aria-current="page" target="_blank" href="/visualiser-messages-actifs">Visualiser</a>
    <a class="nav-link active" aria-current="page" href="/liste-messages">liste messages</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Image</th>
                    <th>Statut</th>
                    <th>date</th>
                    <th>taille titre</th>
                    <th>taille message</th>
                    <th>police titre</th>
                    <th>police message</th>
                    <th>alignement</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $historiqueMessage): ?>
                    <tr>
                        <td>
                            <?= $historiqueMessage['TITREHISTORIQUEMESSAGE']; ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['CONTENUHISTORIQUEMESSAGE']; ?>
                        </td>
                        <td>
                            <?php if($historiqueMessage['IMAGEMESSAGE']): ?>
                                <a href='<?= base_url('images/' . $historiqueMessage['IMAGEMESSAGE']) ?>' target='_blank'>Voir
                                    l'image</a>
                            <?php else: ?>
                                <p>Pas change</p>
                            <?php endif; ?>
                            

                        </td>
                        <td>
                            <?php if ($historiqueMessage['ENLIGNE'] == 0): ?>
                                Hors ligne
                            <?php else: ?>
                                En ligne
                            <?php endif; ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['DATEHISTORIQUEMESSAGE'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['TAILLEPOLICETITRE'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['TAILLEPOLICECONTENU'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['TYPEPOLICETITRE'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['TYPEPOLICECONTENU'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['ALIGNEMENTMESSAGE'] ?>
                        </td>
                        <td>
                            <?= $historiqueMessage['TYPEMODIFICATION'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
<?= $this->endSection() ?>