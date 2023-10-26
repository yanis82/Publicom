<?php
/**
 * @var CodeIgniter\View\View $this
*/
    $success = session() -> getFlashdata('success');
    $error = session() -> getFlashdata('error');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
</head>
<body>
    <header>
        <?php if($error): ?>
            <aside class='error'>
                <?= $error ?>
            </aside>
        <?php endif; ?>

        <?php if($success): ?>
            <aside class='success'>
                <?= $success ?>
            </aside>
        <?php endif; ?>

    <h1><?= $this->renderSection('titre') ?></h1>
    <nav>
        <ul>
            <li>exemple de croutes</li>
            <li>exemple de croutes</li>
            <li>exemple de croutes</li>
            <li>exemple de croutes</li>
        </ul>
    </nav>
    </header>
    <main>
        <?= $this->renderSection('main') ?>
    </main>

    <footer>
        mon pied de page
    </footer>
</body>
</html>