<?php
//log user out
session_destroy();
header('Location: index.php?p=users.login');
