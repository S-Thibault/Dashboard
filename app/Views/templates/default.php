<?php include("includes/header.php"); ?>

    <li><a href="index.php">Accueil</a></li>

    <?php if(isset($_GET['p'])) : ?>
        <?php switch($_GET['p']) :
            case 'posts.single' : ?>
                <li><a href="index.php?p=admin.posts.index">Admin</a></li>
                <?php break; ?>

            <?php case "posts.category": ?>
                <li><a href="index.php?p=admin.posts.index">Admin</a></li>
                <?php break; ?>

            <?php default: ?>
                <li><a href="index.php?p=admin.posts.index">Articles</a></li>
                <li><a href="index.php?p=admin.categories.index">Catégories</a></li>
                <?php
                if(isset($_SESSION['auth'])) {
                ?>
                  <li><a href="index.php?p=users.logout">Déconnexion</a></li>
                <?php
                }
                ?>

        <?php endswitch; ?>

    <?php else : ?>
        <li><a href="index.php?p=admin.posts.index">Admin</a></li>
    <?php endif; ?>


<?php include("includes/footer.php"); ?>
