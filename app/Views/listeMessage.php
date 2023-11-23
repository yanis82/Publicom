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

<head>
    <title>Cours Complet Bootstrap 4</title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>



<body>
    <div class="container">
        <h1>Listes des messages</h1>
        <form action="/supprimer-message" method="POST" class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>image</th>
                        <th>Statut</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $message): ?>
                        <tr>
                            <td>
                                <?= $message['TITREMESSAGE']; ?>
                            </td>
                            <td>
                                <?= $message['CONTENUMESSAGE']; ?>
                            </td>
                            <td>
                                <a href='<?= base_url('images/' . $message['IMAGEMESSAGE']) ?>' target='_blank'>Voir
                                    l'image</a>
                            </td>
                            <td>
                                <?php if ($message['ENLIGNE'] == 0): ?>
                                    Hors ligne
                                <?php else: ?>
                                    En ligne
                                <?php endif; ?>
                            </td>
                            <td>
                                <label for="inputSupprimer<?= $message['IDMESSAGE'] ?>">
                                    <input 
                                    type="checkbox" 
                                    name="checkboxSupprimer[]" 
                                    value="<?= $message['IDMESSAGE']; ?>"
                                        id="inputSupprimer<?= $message['IDMESSAGE'] ?>">
                                    Supprimer
                                </label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <input type="submit" name="submit" value="Supprimer" />
        </form>
    </div>
</body>


</html>
<?= $this->endSection() ?>