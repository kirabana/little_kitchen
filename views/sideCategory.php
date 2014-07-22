<?php 
require_once '../models/category_collection.php';
?>

<div class="categorySide">
	<?php $categories = new Category_collection(); ?>
		<h4>Category</h4>
			<?php foreach($categories->items as $catname): ?>
			<div class="catTextSide"><?=$catname['name']?></div>
	<?php endforeach; ?>
</div>





<!-- 	<div class="categorySide">
		<h4>Category</h4>
		<div class="catTextSide">Asian</div>
		<div class="catTextSide">Baking</div>
		<div class="catTextSide">Breakfast</div>
		<div class="catTextSide">Dinner</div>
		<div class="catTextSide">Fish</div>
		<div class="catTextSide">Japanese</div>
		<div class="catTextSide">Lunch</div>
		<div class="catTextSide">Meat</div>
		<div class="catTextSide">Vegetable</div>
		<div class="catTextSide">Western</div>
	</div> -->