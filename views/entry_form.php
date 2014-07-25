<div class="main">
	<h2><?=$title?></h2>

	<?=$form->open()?>
		<div class="row">
			<?=$form->label('name', 'Name:')?>
			<?=$form->input('text', 'name', $page->name)?>
		</div>
		<div class="row">
			<?=$form->label('textarea', 'Content:')?>
			<?=$form->textarea('textarea', $page->content)?>
		</div>

		<? if($_GET['id']): ?>
			<div class="row">
				<?=$form->submit('Edit')?>
				<a class="button" href="delete_page.php?id=<?=$_GET['id']?>">Delete Page</a>
			</div>
		<? else: ?>

			<div class="row">
				<?=$form->submit('Create')?>
			</div>

		<? endif; ?>

	<?=$form->close()?>
</div>