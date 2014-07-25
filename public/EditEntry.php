<?php
require_once '../libraries/database.class.php'; 
require_once '../libraries/config.class.php';
require_once '../libraries/admin.lib.php';
require_once '../models/entry_list.collection.php';

Login::kickout();

include '../views/header.php';
include '../views/admin_navigation.php';
include '../views/edit_entry.php';
include '../views/footer.php';

$p = new Entry_list($_GET['category_id']);

$c = new model('tb_posts');
$c->load(1);

$n = $p->count_items();

 ?>

<div class="container">
	<div class="catText">Create Entry</div>
	<div class="line"></div>
		<div class="col-12">
			<? foreach($p->items as $prod): ?>

				<div class="col-12B">

					<h2><?=$prod['title']?></h2>
					<div class="col-4">
						<img src="<?=$prod['image']?>" alt="">
					</div>
					<div class="col-8">
						<p><?=$prod['description']?></p>
						<div class="readMoreButton"><a href="edit_entry.php?entry_id=<?=$prod['id']?>">Edit This</a></div>
						<div class="readMoreButton"><a href="delete_entry.php?id=<?=$prod['id']?>">Delete This</a></div>
					</div>
				</div>
			<? endforeach; ?>
		</div>
	</div>
