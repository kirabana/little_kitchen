<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../models/category_collection.php';
require_once '../models/page_collection.php';
require_once '../models/page_model.php';
require_once '../libraries/login.lib.php';

Login::kickout();


$form = new Form();
$title = 'Create Category';

$category = new Model('tb_categories');

#If the form is just posted
if($_POST){

	$category->name = $_POST['name'];

	$category->save();

	header('location: admin.php');
	exit;
}

require_once '../views/header.php';
require_once '../views/admin_navigation.php';
require_once '../views/category_form.php';
require_once '../views/footer.php';


 ?>