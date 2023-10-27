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
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Statut</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $message) : ?>
                        <tr>
                            <td><?php echo $message['IDMESSAGE']; ?></td>
                            <td><?php echo $message['TITREMESSAGE']; ?></td>
                            <td><?php echo $message['CONTENUMESSAGE']; ?></td>
                            <td>
                                <?php if ($message['ENLIGNE'] == 0) : ?>
                                    Hors ligne
                                <?php else : ?>
                                    En ligne
                                <?php endif; ?>
                            </td>
                            <td><input type="checkbox" name="checkbox[]" value="<?php echo $message['IDMESSAGE']; ?>"> Supprimer</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button type="submit" name="submit">Valider</button>
        </div>
    </div>
</body>


</html>
<?= $this->endSection() ?>