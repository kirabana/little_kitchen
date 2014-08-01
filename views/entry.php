<?php 

$p = new Model('tb_posts');
$p->load($_GET['entry_id']);

?>

	<div class="containerC">
		<div class="containerB">
			<h2><?=Security::filter_html($p->title)?></h2>
			
			<div class="entryImg">
				<img src="<?=Security::filter_html($p->image)?>" alt="">
			</div>
			
			<p><?=Security::filter_html($p->description)?></p>
			<div class="line"></div>
			<h5>Ingredients</h5>
			<p><?=Security::filter_html($p->ingredients)?></p>
			<h5>Method</h5>
			<?=Security::filter_html($p->method)?>
		</div>
	</div>



<!-- 
<div class="containerC">
	<div class="containerB">
		<h2>Title of the Food</h2>
		<div class="postFooterB">
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

		<div class="entryImg">
			<img src="assets/img/fried_rice.png" alt="">
		</div>

		<p><span class="red">Serves:</span> 4-5</p>
		<p><span class="red">Prep time:</span> 30 minutes</p>
		<p><span class="red">Cooking time:</span> 20 minutes + 20 minutes to set</p><br>

		<p>Cras nec mauris eget enim volutpat ornare. Donec eget lorem ac metus porta sodales. Nam ut lectus ut metus mattis vehicula. Nunc nec massa mauris.</p>
		<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacinia interdum lorem, laoreet venenatis justo. Maecenas blandit orci sit amet.</p>
		<div class="lineB"></div>
		<h5>Ingredients</h5>
		<p>1 bowl of cooked rice</p>
		<p>1/4 onion, sliced</p>
		<p>1/2 chicken thigh, cut into small pieces</p>
		<p>100ml water</p>
		<p>1/2 tsp Dashi Powder</p>
		<p>1 tsp Soy Sauce</p>
		<p>1/2 tsp Mirin</p>
		<p>1/2 tsp Cooking Sake</p>
		<p>1 egg, lightly beaten</p>
		<p>Spring onion, chopped</p>

		<h5>Method</h5>
		<ol>
			<li>Add water, dashi, soy sauce, mirin and cooking sake into a small saucepan and bring to the boil. Reduce heat to medium, add onion and chicken and cook for couple of minutes or until chicken is cooked through.</li>
			<li>Put cooked rice in a serving bowl and set aside.</li>
			<li>When the chicken is cooked, bring the heat to high. Pour the lightly beaten egg and add the spring onion to the pot, cover with a lid and cook for 30sec. Turn off the heat and slide the chicken & egg on top of the rice.</li>
			<li>Garnish with shredded nori before you serve.</li>
			<li>Enjoy!</li>
		</ol>
	</div>


	<div class="categorySide">
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
	</div>


	<div class="commentBox">
		<h2>Add Your Comment</h2>
		<p>Your email address will not be published.</p>
		<p>Name:</p>
		<input type="text"><br>
		<p>Email:</p>
		<input type="text"><br>
		<p>Comment:</p>
		<textarea> 
		</textarea><br>
		<input class="submit "type="submit" value="Login">
	</div>

	<div class="commentSection">
		<h2>Name</h2>
		<p>12 July 2014</p>
		<p>Your comment here</p>
		<div class="line"></div>
	</div>
</div> -->