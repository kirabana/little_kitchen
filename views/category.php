<div class="catBack">
	<div class="category">
		<h3>Category</h3>
		<?php foreach($categories->items as $catname): ?>
			<a href="index.php?category_page_id=<?=Security::filter_html($catname['id'])?>">
				<div class="catText"><?=Security::filter_html($catname['name'])?></div>
			</a>
		<?php endforeach; ?>
	</div>
</div>

<!-- 	<div class="catBack">
		<div class="category">
			<h3>Category</h3>

			<div class="catText">Asian</div>
			<div class="catText">Baking</div>
			<div class="catText">Breakfast</div>
			<div class="catText">Dinner</div>
			<div class="catText">Fish</div>
			<div class="catText">Japanese</div>
			<div class="catText">Lunch</div>
			<div class="catText">Meat</div>
			<div class="catText">Vegetable</div>
			<div class="catText">Western</div>
		</div>
	</div> -->