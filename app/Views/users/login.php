<!-- Afficher un message d'erreur si la connexion à échouée -->
<?php if ($errors) : ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<!-- Formulaire de connexion -->
<div style="padding-left: 15px;">

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>
			</div>
			<div class="card-body ">
        <h4 class="text-white text-center">Veuillez vous connecter pour accéder à l'admin</h4>
        <br>
				<form method="post">
					<div class="input-group form-group text-white">
						<?= $form->input('username', 'pseudo'); ?>
					</div>
					<div class="input-group form-group text-white">
						<?= $form->input('password', 'mot de passe', ['type' => 'password']); ?>
					</div>
					<div class="form-group text-center">
					<button class="btn btn-primary ">Envoyer</button>
					</div>
				</form>
			</div>
      <div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>
<br>
