<?php
require_once '../libraries/database.class.php'; 
require_once '../libraries/config.class.php';
require_once '../libraries/admin.lib.php';
require_once '../models/entry_list.collection.php';

$p = new Entry_list($_GET['category_id']);

$c = new model('tb_posts');
$c->load(1);

$n = $p->count_items();

 ?>


 <div class="container">
	<div class="catText2"><a href="edit_cat.php">Click Here To Create/Edit/Delete Categories</a></div>
	<div class="catText2"><a href="edit_entry.php">Click Here To Create/Edit/Delete Entries</a></div>
	<div class="catText2"><a href="admin_register.php">Click Here To Create New Admins</a></div>
</div>