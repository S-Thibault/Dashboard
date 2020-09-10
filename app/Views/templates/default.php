<?php include("includes/header.php"); ?>

<div class="vertical-nav bg-white" id="sidebar">
<div class="py-4 px-3 mb-4 bg-light">
  <div class="media d-flex align-items-center"><img src="https://i.ibb.co/FbX5PCM/toppng-com-dashboard-svg-icon-free-dashboard-icon-981x823.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
    <div class="media-body">
      
    </div>
  </div>
</div>

<p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>


<ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="index.php" class="nav-link text-dark font-italic bg-light">
        <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
        Accueil
      </a>
      </li>

    <?php if(isset($_GET['p'])) : ?>
        <?php switch($_GET['p']) :
            case 'posts.single' : ?>
                <li class="nav-item"><a href="index.php?p=admin.posts.index" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i>
                  Admin
                </a>
              </li>
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
</div>

<?php include("includes/footer.php"); ?>
