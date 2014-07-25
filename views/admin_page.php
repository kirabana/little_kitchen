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
	<div class="catText2"><a href="edit_entry.php">Click Here To Change Entries</a></div>
</div>