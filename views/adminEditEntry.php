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
	<div class="catText2"><a href="create_form.php">Create Entry</a></div>
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
						<div class="readMoreButton2"><a href="edit_form.php?id=<?=$prod['id']?>">Edit This</a></div>
						<div class="readMoreButton2"><a href="delete_entry.php?id=<?=$prod['id']?>">Delete This</a></div>
					</div>
				</div>
			<? endforeach; ?>
			<ul class="pagination-links">
				<?php for($i = 1; $i <= ceil($p->count_items() / $p->per_page); $i++): ?>
					<li class="<? if($i == $_GET['page']) echo 'current'?>"><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
				<?php endfor; ?>
			</ul>
		</div>

	</div>
