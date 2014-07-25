<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/login.lib.php';
require_once '../models/category_collection.php';
require_once '../models/page_collection.php';
require_once '../models/category_model.php';

Login::kickout();

$form = new Form();
$title = 'Edit Subject';
$subject = new Subject($_GET['id']);

if($_POST)
{
	$subject->name = $_POST['name'];
	$subject->save();

	header('location: admin.php');
	exit;
}

require_once '../views/header.php';
require_once '../views/admin_navigation.php';
require_once '../views/category_form.php';
require_once '../views/footer.php';
