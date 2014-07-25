<?php 

require_once '../models/category_collection.php';
$subjects = new  Category_collection(); 

?>


<div class="catBack">
	<div class="category">
		<h2>Categories</h2>
		<?php foreach($subjects->items as $nav_subject): ?>
			<a href="edit_category.php?id=<?=$nav_subject['id']?>">
				<div class="catText"><?=$nav_subject['name']?></div></a>

			<?php endforeach; ?>
			<a href="create_category.php" class="catText">Add New Category</a>
		</div>
	</div>