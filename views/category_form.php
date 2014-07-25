<div class="container">
	<h2>Edit Category</h2>

	<?=$form->open()?>
		<div class="row">
			<?=$form->label('name', 'Name')?><br>
			<?=$form->input('text', 'name', $category->title)?>
		</div>
		
		<? if($_GET['id']): ?>
			<div class="row">
				<?=$form->submit('Edit')?>
			</div>
				<a class="editText" href="delete_category.php?id=<?=$_GET['id']?>">Delete Category</a>
			</div>
		<? else: ?>

			<div class="row">
				<?=$form->submit('Create')?>
			</div>
			

		<? endif; ?>


	<?=$form->close()?>

</div>