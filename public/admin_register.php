<?php 

session_start();

require_once '../libraries/database.class.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/model.lib.php';
require_once '../models/category_collection.php';
require_once '../models/page_collection.php';
require_once '../models/page_model.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/hash.lib.php';

Login::kickout();

if($_POST && $_POST['password'] == $_POST['confirmpassword']){

	$admin = new Model(tb_admins);

	$admin->username 	= $_POST['username'];
	$admin->password     = Hash::make_password($_POST['password']);
	$admin->salt         = Hash::salt();

	$admin->save();
	header('location: admin.php');
	exit;
}

else if($_POST){

	$error = 'Passwords do not match.';

}


include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/admin_register.php';
include '../views/fixedFooter.php';


 ?>