<?php 

require_once '../libraries/database.class.php';
require_once '../models/page_model.php';
require_once '../libraries/login.lib.php';

Login::kickout();

if($_GET['id']){
	$page = new Page($_GET['id']);

	$page->delete();

}


//redirect the browser
header('location: edit_entry.php');
exit;