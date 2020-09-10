<?php

    //Constante qui définit la racine de l'application
    define('ROOT', dirname(__DIR__));

    //Chargement de la class App
    require ROOT . '/app/App.php';

    //Chargement de l'autoloader
    //Accès statique par opérateur de résolution de portée ::
    App::load();

    //On vérifie qu'une variable url p existe,
    //si c'est le cas on la stocke dans une variable p
    if(isset($_GET['p'])){
        $page = $_GET['p'];
    }
    else{
        $page = 'posts.index';
    }

    //On affiche les contenus des pages chargées
    $page = explode('.', $page);
    if($page[0] == 'admin'){
        $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
        $action = $page[2];
    }
    else{
        $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
        $action = $page[1];
    }

		//On crée une instance de classe controller avec new
    $controller = new $controller();

		//On "récupère" les actions (URL)
    $controller->$action();

?>
