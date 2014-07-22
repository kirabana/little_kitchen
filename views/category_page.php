<?php 

$p = new Model('tb_posts');
$p->load($_GET['category_page_id']);

?>


<div class="main col-12">

	<?php

	$p = new Entry_list($_GET['category_page_id']);

	$c = new model('tb_categories');
	$c->load($_GET['category_page_id']);

	$n = $p->count_items();


	?>

	<div class="container">
		<div class="col-12">
					<? foreach($p->items as $prod): ?>

						<div class="col-12B">

							<h2><?=$prod['title']?></h2>
							<div class="col-4">
								<img src="<?=$prod['image']?>" alt="">
							</div>
							<div class="col-8">
								<p><?=$prod['description']?></p>
								<div class="readMoreButton"><a href="index.php?entry_id=<?=$prod['id']?>">Read More</a></div>
							</div>
						</div>
					<? endforeach; ?>
		</div>
	</div>