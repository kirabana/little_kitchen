<div class="main">
	<h2><?=$title?></h2>

	<?=Form::open()?>
		<div class="row">
			<?=Form::label('name', 'Name:')?>
			<?=Form::input('text', 'name', $page->name)?>
		</div>

		<div class="row">
			<?=Form::label('textarea', 'Content:')?>
			<?=Form::textarea('textarea', $page->content)?>
		</div>

		<? if($_GET['id']): ?>
			<div class="row">
				<?=Form::submit('Edit')?>
				<a class="button" href="delete_page.php?id=<?=$_GET['id']?>">Delete Page</a>
			</div>
		<? else: ?>

			<div class="row">
				<?=Form::submit('Create')?>
			</div>

		<? endif; ?>

	<?=Form::close()?>
</div>