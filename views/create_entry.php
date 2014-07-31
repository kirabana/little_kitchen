<div class="container">
	<div class="main">
	<h2><?=$title?></h2>

	<?=Form::open_upload()?>
		<div class="row">
			<?=Form::label('title', 'Title:')?><br>
			<?=Form::input('text', 'title', $page->title)?>
		</div>

		<div class="row">
			<?=Form::label('image','Image:')?><br>
			<?=Form::max_file_size()?>
			<?=Form::file()?>
			<p><img src="<?=$page->image?>"></p>
		</div>

		<div class="row">
			<?=Form::label('description', 'Description:')?><br>
			<?=Form::textarea('description', $page->description)?>
		</div>
		<div class="row">
			<?=Form::label('ingredients', 'Ingredients:')?><br>
			<?=Form::textarea('ingredients', $page->ingredients)?>
		</div>
		<div class="row">
			<?=Form::label('method', 'Method:')?><br>
			<?=Form::textarea('method', $page->method)?>
		</div>

		<div class="row">
			<?=Form::label('textarea', 'Category:')?><br>
			<select name='category' id='catgory_select'>";
				<?=Form::options($categories, $pre_selected)?>
			</select>
		</div>

		<div class="row">
			<?=Form::submit('Create')?>
		</div>

	<?=Form::close()?>

</div>
</div>