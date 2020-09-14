<!-- Afficher le titre, la catégorie et le contenu de l'article -->
<h2><?= $article->titre; ?></h2>
<p><b>Lieu d'achat : </b><em><?= $article->lieuachat; ?></em></p>
<p><b>Adresse d'achat : </b><em><?= $article->adresseachat; ?></em></p>
<p><b>URL d'achat : </b><em><?= $article->urlachat; ?></em></p>
<p><b>Référence : </b><em><?= $article->ref; ?></em></p>
<p><b>Date d'achat : </b><em><?= $article->dateachat; ?></em></p>
<p><b>Date de fin de garantie : </b><em><?= $article->datefingarantie; ?></em></p>
<p><b>Catégorie : </b><em><?= $article->categorie; ?></em></p>
<p><b>Prix : </b><em><?= $article->prix; ?> €</em></p>
<p><b>Conseils d'entretien : </b><em><?= $article->conseilsentretien; ?></em></p>
<p><b>Photo du ticket d'achat : </b><em><?= $article->phototicketachat; ?></em></p>
<p><b>Manuel d'utilisation : </b><em><?= $article->manuelutilisation; ?></em></p>
