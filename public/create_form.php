<?php 

require_once '../libraries/database.class.php';
require_once '../libraries/form.lib.php';
require_once '../models/category_collection.php';
require_once '../models/page_collection.php';
require_once '../models/page_model.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/upload.lib.php';
require_once '../libraries/collection.lib.php';

Login::kickout();


$form = new Form();
$title = 'Create Entry';
$page = new Page($_GET['id']);

$categories_col = new Collection('tb_categories');

if($_POST){
	$page->title = $_POST['title'];
	$page->image = $_FILES['file']['image'];
	$page->description = $_POST['description'];
	$page->ingredients = $_POST['ingredients'];
	$page->method = $_POST['method'];
	$page->category_id = $_POST['category'];


	if($_FILES){
		$upload_result = Upload::to_folder('assets/uploads/');

		foreach($upload_result as $file){
			if($file['error_message']){
				echo '<p class="error">'.$file['error_message'].'</p>';
			}
			else {
				$page->image = $file['filepath'];	
			}
			
		}
	}

	$page->save();	
}


$categories = array();

foreach ($categories_col->items as $category) {
	if($category['deleted']==0) $categories[$category['id']] = $category['name'];
}






include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/create_entry.php';
include '../views/footer.php';