<?php
function getProduits() {
   $db = dbConnect();
   $req = $db->query("SELECT * FROM produits ORDER BY idp DESC");

   return $req;
}

function getProduit($idp) {
    $db = dbConnect();
    $req = $db->prepare("SELECT * FROM projets WHERE idp = ?");
    $req->execute(array($idp));
    $prod = $req->fetch();

    return $prod;
}

function getRecherche() {
  if(isset($_POST['requete']) && $_POST['requete'] != NULL) {
    $db = dbConnect();
    $requete = html($_POST['requete']);
    $rech = $db->prepare('SELECT * FROM produits WHERE nomp LIKE :requete ORDER BY idp DESC');
    $rech->execute(array(':requete' => '%'.$requete.'%'));

    return $rech;
  }
}

function addProduitBDD($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien,$phototicketachat,$manuelutilisation) {
    $db = dbConnect();

    if(isset($_POST['submit'])){

      //insert into database
      $addProduit = $db->prepare('INSERT INTO produits (nomp,slugp,lieuachat,adresseachat,urlachat,ref,categorie,dateachat,datefingarantie,prix,conseilentretien,phototicketachat,manuelutilisation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
      $addProduit->execute(array($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,date('Y-m-d H:i:s'),date('Y-m-d H:i:s'),$prix,$conseilsentretien,$phototicketachat,$manuelutilisation));

      return $addProduit;

  }
}

function editProjetBDD($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,$dateachat,$datefingarantie,$prix,$conseilsentretien,$phototicketachat,$manuelutilisation) {
    $db = dbConnect();

    if(isset($_POST['submit'])){

      //update into database
      $editProduit = $db->prepare('UPDATE produits SET nomp = ?, slugp = ?, lieuachat = ?, adresseachat = ?, urlachat = ?, ref = ?, categorie = ?, dateachat = ?, datefingarantie = ?, prix = ?, conseilentretien = ?, phototicketachat = ?, manuelutilisation = ?  WHERE idp = ?');
      $editProduit->execute(array($nomp,$slugp,$lieuachat,$adresseachat,$urlachat,$ref,$categorie,date('Y-m-d H:i:s'),date('Y-m-d H:i:s'),$prix,$conseilsentretien,$phototicketachat,$manuelutilisation,$idp));

      return $editProduit;
    }
}







function dbConnect() {
    try {
      $db = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'dashboard', 'dashboard');
      return $db;
    }
    catch(Exception $e) {
      die('Erreur : '.$e->getMessage());
    }
}
