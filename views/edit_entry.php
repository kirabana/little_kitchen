<div class="container">
	<div class="main">
	<div class="row">
		<div class="catText2"><a href="edit_entry.php">Go Back To View All Entries</a></div>
	</div>
	<h2><?=$title?></h2>
	<br>

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
				<?=Form::options($categories, $page->category_id)?>
			</select>
		</div>

		<div class="row">
			<?=Form::submit('Edit')?>
		</div>

	<?=Form::close()?>

</div>
</div>