<?php 

require_once '../libraries/database.class.php';
require_once '../models/category_model.php';
require_once '../libraries/login.lib.php';
Login::kickout();

if($_GET['id']){
	$subject = new Subject($_GET['id']);

	$subject->delete();

}

//redirect the browser
header('location: admin.php');
exit;