<?php
use App\Controllers\Utilisateur;

/**
 * @var CodeIgniter\View\View $this
 */
$success = session()->getFlashdata('success');
$error = session()->getFlashdata('error');
$user = session()->get('isConnected');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/inc/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>
        <?= $this->renderSection('title') ?>
    </title>
</head>

<body>
    <header>
        <aside>
            <?php if ($error): ?>
                <section class='notification error'>
                    <?= $error ?>
                </section>
            <?php endif; ?>

            <?php if ($success): ?>
                <section class='notification success'>
                    <?= $success ?>
                </section>
            <?php endif; ?>

            <?php if (Utilisateur::isConnected()): ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Connecte en tant que :</h5>
                        <p class="card-text text-center">
                            <?= $user['PRENOMUTILISATEUR'] ?>
                            <?= $user['NOMUTILISATEUR'] ?>
                        </p>
                        <a href="/logout" class="btn btn-primary">Logout</a>
                    </div>
                </div>

            <?php else: ?>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">pas connecte :</h5>
                    </div>
                </div>
            <?php endif; ?>
        </aside>

        <h1>
            <?= $this->renderSection('titre') ?>
        </h1>
        <nav class="navbar navbar-dark bg-dark">
            <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Barre de navigation</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/creer-utilisateur">Creer utilisateur</a>
                        <a class="nav-link active" aria-current="page" href="/se-connecter">Se connecter</a>
                        <a class="nav-link active" aria-current="page" href="/creer-message">Creer message</a>
                        <a class="nav-link active" aria-current="page" href="/liste-messages">liste-messages</a>
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