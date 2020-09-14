<!-- Affichage du formulaire -->
<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?>
    <?= $form->input('lieuachat', 'Lieu d\'achat', ['type' => 'text']); ?>
    <?= $form->input('urlachat', 'URL d\'achat', ['type' => 'text']); ?>
    <?= $form->input('adresseachat', 'Adresse d\'achat', ['type' => 'text']); ?>
    <?= $form->input('ref', 'Référence', ['type' => 'text']); ?>
    <?= $form->input('dateachat', 'Date d\'achat', ['type' => 'date']); ?>
    <?= $form->input('datefingarantie', 'Date de fin de garantie', ['type' => 'date']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <?= $form->input('prix', 'Prix'); ?>
    <?= $form->input('conseilsentretien', 'Conseils d\'entretien', ['type' => 'textarea']); ?>
    <?= $form->input('phototicketachat', 'Photo du ticket d\'achat', ['type' => 'text']); ?>
    <?= $form->input('manuelutilisation', 'Manuel d\'utilisation', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
