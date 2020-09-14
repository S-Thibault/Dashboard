<!-- Afficher un message d'erreur si la connexion à échouée -->
<?php if ($errors) : ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<!-- Formulaire de connexion -->
<div style="padding-left: 15px;">
<h2>Login : </h2>
<h4>Veuillez vous connecter pour accéder à l'admin</h4>
</div>
<hr>
<div class="col-sm-4 col-md-4">
<form method="post">
    <?= $form->input('username', 'pseudo'); ?>
    <?= $form->input('password', 'mot de passe', ['type' => 'password']); ?>
    <button class="btn btn-primary">Envoyer</button>
</form>
</div>
