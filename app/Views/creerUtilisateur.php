<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<?= $this->extend('default') ?>

<?= $this -> section('titre') ?>
mon titre
<?= $this -> endSection() ?>

<?= $this -> section('main') ?>
<form action="" method="post">
        <label for="nom"> nom : 
            <input type="text" name="nom" id="nom" required>
        </label>
        <label for="prenom"> prenom : 
            <input type="text" name="prenom" id="prenom" required>
        </label>
        <label for="email"> email : 
            <input type="email" name="email" id="email" required>
        </label>
        <label for="password"> mot de passe : 
            <input type="password" name="pass" id="pass" min="4" required>
        </label>
        <label for="rePassword"> verification mot de passe : 
            <input type="password" name="verifPass" id="verifPass" min="4" required>
        </label>
        <input type="submit" value="creer utilisateur">
    </form>
<?= $this -> endSection() ?>
