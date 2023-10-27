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
    <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Déconnexion</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('main') ?>
    </main>

    <footer class="footer mt-auto py-3 bg-dark text-white">
        <div class="container">
            <span class="text-muted">Copyright &copy; Portfolio</span>
            <ul class="list-inline">
             
            </ul>
        </div>
    </footer>

</body>

</html>