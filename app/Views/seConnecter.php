<?php

/**
 * @var CodeIgniter\View\View $this
 */
?>
<?= $this->extend('default') ?>

<?= $this->section('titre') ?>
Se connecter
<?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="container">
    <div class="row justify-content-center">
        <form action="" method="post" class="form-signin">
            <div class="form-label-group">
                <div class="mb-3">
                    <label for="inputEmail">Adresse e-mail</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Adresse e-mail" required autofocus>
                </div>

                <div class="form-label-group">
                    <div class="mb-3">
                        <label for="inputPassword">Mot de passe</label>
                        <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                    </div>
                    <div class="d-grid gap-2">

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
                    <div class="mb-5">
                    </div>
        </form>
        <?= $this->endSection() ?>