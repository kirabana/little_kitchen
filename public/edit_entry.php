<?php
require_once '../libraries/database.class.php'; 
require_once '../libraries/config.class.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/admin.lib.php';
require_once '../libraries/security.lib.php';
require_once '../models/entry_list.collection.php';


Login::kickout();

include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/adminEditEntry.php';
include '../views/admin_page.php';
include '../views/footer.php';