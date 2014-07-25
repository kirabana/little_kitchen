<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/form.lib.php';
require_once '../models/category_collection.php';
require_once '../models/page_collection.php';
require_once '../models/page_model.php';

Login::kickout();


$form = new Form();
$title = 'Create Page';

#If the form is just posted
if($_POST){
	$page = new Page();

	$page->name = $_POST['name'];
	$page->content = $_POST['textarea'];
	$page->subject_id = $_GET['subject_id'];

	$page->save();
}

require_once '../views/admin_header.php';
require_once '../views/admin_navigation.php';
require_once '../views/page_form.php';
require_once '../views/footer.php';


 ?>