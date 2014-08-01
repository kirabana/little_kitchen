<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$p = new Entry_list($_GET['category_id'], $page);

$c = new model('tb_posts');
$c->load(1);

$n = $p->count_items();

 ?>

			<div class="col-12">
				<? foreach($p->items as $prod): ?>

					<div class="col-12B">

						<h2><?=Security::filter_html($prod['title'])?></h2>
						<div class="col-4">
							<img src="<?=Security::filter_html($prod['image'])?>" alt="">
						</div>
						<div class="col-8">
							<p><?=Security::filter_html($prod['description'])?></p>
							<div class="readMoreButton"><a href="index.php?entry_id=<?=$prod['id']?>">Read More</a></div>
						</div>
					</div>
				<? endforeach; ?>

				<div class="pagecount">
					<ul class="pagination-links">
						<?php for($i = 1; $i <= ceil($p->count_items() / $p->per_page); $i++): ?>
							<li class="<? if($i == $_GET['page']) echo 'current'?>"><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>