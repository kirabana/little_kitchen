<?php 

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$p = new Entry_list($_GET['category_id'], $page);

$c = new model('tb_posts');
$c->load(1);

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

			<ul class="pagination-links">
				<?php for($i = 1; $i <= ceil($p->count_items() / $p->per_page); $i++): ?>
					<li class="<? if($i == $_GET['page']) echo 'current'?>"><a href="index.php?page=<?=$i?>"><?=$i?></a></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>





<!-- <div class="container">
	<div class="col-12B">
		<div class="col-12">
			<h2>Title Comes Here Haha</h2>
			<div class="postFooter">
				<div class="footerImg">
					<img src="assets/img/footer_1.png" alt="">
				</div>
				<div class="text">04 Jul 2014</div>

				<div class="footerImg">
					<img src="assets/img/footer_2.png" alt="">
				</div>
				<div class="text">Hikari Tsukui</div>

				<div class="footerImg">
					<img src="assets/img/footer_3.png" alt="">
				</div>
				<div class="text">(4) Comments</div>
			</div>
			<div class="col-4">
				<img src="assets/img/fried_rice.png" alt="">
			</div>
			<div class="col-8">
				<p>Cras nec mauris eget enim volutpat ornare. Donec eget lorem ac metus porta sodales. Nam ut lectus ut metus mattis vehicula. Nunc nec massa mauris. </p>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia interdum lorem, laoreet venenatis justo. Maecenas blandit orci sit amet.</p>
				<div class="readMoreButton"><a href="entry.php">Read More</a></div>
			</div>
		</div>
	</div> -->

	<!--NEW-->