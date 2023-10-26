<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<?= $this->extend('default') ?>

<?= $this -> section('titre') ?>
Se connecter
<?= $this -> endSection() ?>

<?= $this -> section('main') ?>
<form action="" method="post">
        <label for="email"> email : 
            <input type="email" name="email" id="email" required>
        </label>
        <label for="password"> mot de passe : 
            <input type="password" name="pass" id="pass" min="4" required>
        </label>
        <input type="submit" value="creer utilisateur">
    </form>
<?= $this -> endSection() ?>
