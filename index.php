<?php
session_start();

require('controller/controller.php');

if (isset($_GET['action'])) {

    if ($_GET['action'] == 'indexView') {
      index();
    }

    elseif ($_GET['action'] == 'produit') {
      produit();
    }

    elseif ($_GET['action'] == 'recherche') {
      recherche();
    }

    elseif($_GET['action'] == 'addProduitBDD') {
      addProduit(
        $_POST['nomp'],
        $_POST['slugp'],
        $_POST['lieu-achat'],
        $_POST['adresse-achat'],
        $_POST['url-achat'],
        $_POST['ref'],
        $_POST['categorie'],
        $_POST['date-achat'],
        $_POST['date-fin-garantie'],
        $_POST['prix'],
        $_POST['conseil-entretien'],
        $_POST['photo-ticket-achat'],
        $_POST['manuel-utilisation']
      );
      header('Location: index.php?action=indexView&actionP=added');
      exit;
    }

    elseif($_GET['action'] == 'editProduitView') {
      editProduit();
    }

    elseif($_GET['action'] == 'editProduitBDD') {
      editProduitBDD(
        $_POST['nomp'],
        $_POST['slugp'],
        $_POST['lieu-achat'],
        $_POST['adresse-achat'],
        $_POST['url-achat'],
        $_POST['ref'],
        $_POST['categorie'],
        $_POST['date-achat'],
        $_POST['date-fin-garantie'],
        $_POST['prix'],
        $_POST['conseil-entretien'],
        $_POST['photo-ticket-achat'],
        $_POST['manuel-utilisation']
      );
      header('Location: index.php?action=indexView&actionP=edited');
      exit;
    }

    elseif($_GET['action'] == 'deleteProduit') {
      deleteProduit();
      header('Location: index.php?action=indexView&actionP=deleted');
      exit;
    }

    elseif($_GET['action'] == 'register') {
      register();
    }

    elseif($_GET['action'] == 'login') {
      login();
    }

    elseif($_GET['action'] == 'logout') {
      logout();
    }

    else {
      erreur404();
    }
}

else {
   index();
}
