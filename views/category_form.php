	<div class="container">

	<h2><?=$title?></h2>

	<?=Form::open()?>
		<div class="row">
			<?=Form::label('name', 'Name')?><br>
			<?=Form::input('text', 'name', $category->title, 'required')?>
		</div>
		
		<? if($_GET['id']): ?>
			<div class="row">
				<?=Form::submit('Edit')?>
			</div>
				<a class="editText" href="delete_category.php?id=<?=$_GET['id']?>">Delete Category</a>
			</div>
		<? else: ?>

			<div class="row">
				<?=Form::submit('Create')?>
			</div>
			

		<? endif; ?>


	<?=Form::close()?>
	</div>