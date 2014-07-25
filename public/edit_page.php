<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/login.lib.php';

Login::kickout();

include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/entry_form.php';
include '../views/footer.php';
