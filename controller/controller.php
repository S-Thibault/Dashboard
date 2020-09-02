<?php

require('./model/model.php');

function index() {
    $projs = getProduits();
    $cats = getCat();

    // pagination
    $pagesProduit = new Paginator('5','prod');
    $stmt = $db->query('SELECT idp FROM produits');
    $pagesProduits->set_total($stmt->rowCount());
    $adminProjs = $db->query('SELECT * FROM produits ORDER BY idp DESC ' .$pagesProduits->get_limit());

    require('./view/indexView.php');
}

function produit() {
  if (isset($_GET['idp']) && $_GET['idp'] > 0) {
    $proj = getProduit($_GET['idp']);
    require('./view/produitView.php');
  }
  else {
      echo 'Erreur : aucun identifiant de produit envoyé';
  }
}

function recherche() {
  $rech = getRecherche();
  require('./view/rechercheView.php');
}

function contact() {
  require('./view/contactView.php');
}

function login() {
  $db = dbConnect();
  $user = new User($db);
  require('./view/admin/loginView.php');
}

function deconnexion() {
  $db = dbConnect();
  $user = new User($db);
  require('./view/admin/logoutView.php');
}

function DelProduit($idp) {
  $db = dbConnect();



}

function addProduitView() {
  require('./view/admin/addProduitView.php');
}

function addProduitBDD($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien,$phototicket-achat,$manuelutilisation) {
  $addprod = addProduit($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien$phototicketachat,$manuelutilisation);
  require('./view/admin/indexAdminView.php');
}

function editProduitView() {
  require('./view/admin/editProjetAdminView.php');
}

function editProduitBDD($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien,$phototicket-achat,$manuelutilisatio) {
  $editprod = editProduit($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien,$phototicket-achat,$manuelutilisatio);
  require('./view/admin/indexAdminView.php');
}

function erreur404() {
  require('./view/404View.php');
}
