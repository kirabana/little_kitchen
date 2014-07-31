<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/login.lib.php';

Login::kickout();

include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/admin_category.php';
include '../views/admin_page.php';
include '../views/footer.php';
