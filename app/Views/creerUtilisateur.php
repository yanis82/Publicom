<?php
/**
 * @var CodeIgniter\View\View $this
*/
?>
<?= $this->extend('default') ?>

<?= $this -> section('titre') ?>
<<<<<<< HEAD
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
=======

<?= $this -> endSection() ?>

<?= $this -> section('main') ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="mb-3">
          <label for="nom" class="form-label">Nom</label>
          <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">Prénom</label>
          <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" name="pass" id="pass" class="form-control" min="4" required>
        </div>
        <div class="mb-3">
          <label for="rePassword" class="form-label">Vérification mot de passe</label>
          <input type="password" name="verifPass" id="verifPass" class="form-control" min="4" required>
        </div>
        <input type="submit" value="Créer utilisateur" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>

>>>>>>> yanis
<?= $this -> endSection() ?>
