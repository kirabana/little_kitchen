<?php

session_start();

require_once '../libraries/config.class.php';
require_once '../libraries/database.class.php';
require_once '../libraries/form.lib.php';
require_once '../libraries/hash.lib.php';
require_once '../libraries/login.lib.php';
require_once '../libraries/model.lib.php';

if($_POST && $_POST['password'] == $_POST['confirmpassword']){

	$user = new Model(tb_users);

	$user->username 	= $_POST['username'];
	$user->password     = Hash::make_password($_POST['password']);
	$user->salt         = Hash::salt();

	$user->save();
	header('location: login.php');
	exit;
}

else if($_POST){

	$error = 'Passwords do not match.';

}

include '../views/header.php';
include '../views/navigation.php';
include '../views/register_form.php';
include '../views/footer.php';