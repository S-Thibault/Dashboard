<div class="container">

			 <ul class="nav nav-tabs">
				 <li class="nav-item text-dark">
			<!-- AFFICHER TOUTES LES CATEGORIES -->
			<?php foreach ($categories as $categorie) : ?>
						<li ><a class="text-dark" href="<?= $categorie->url; ?>"><?= $categorie->titre; ?></a></li>
				<?php endforeach; ?>
		</ul>
</div>
<br>


<div class="container">
    <div class="row">
		<!-- AFFICHER LES ARTICLES  -->
		<?php
		    //Lister les articles et les stocker dans une variable post
		    foreach ($posts as $post) :
		?>
		<div class="col-sm-4 py-2">
            <div class="card-2 card-body h-100 bg-secondary text-white">
		        <!-- Afficher les articles -->
		        <h2 ><a class="text-white" href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
		        <p><em><?= $post->categorie; ?></em></p>
		        <p><?= $post->extrait; ?></p>
					</div>
				        </div>
		<?php endforeach; ?>
	</div>
</div>
