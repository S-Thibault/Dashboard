<?php
ob_start();
?>

ERREUR 404

<?php
//$arch->closeCursor();
$content = ob_get_clean();
?>

<?php require('template.php'); ?>
