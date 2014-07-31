<div class="container">
	<div class="login">
		<h2>Register</h3>
			<p>Please fill i your detail below to register.</p>

		<?php if($error): ?>
		<p class="error"><?=$error?></p>
		<?php endif; ?>

		<?=Form::open()?>
			
			<div class="row">
				<?=Form::label('username', 'Username:')?><br>
				<?=Form::input('text', 'username', $_POST['username'])?>
			</div>

			<div class="row">
				<?=Form::label('password', 'Password:')?><br>
				<?=Form::input('password', 'password', $_POST['password'])?>
			</div>

			<div class="row">
				<?=Form::label('confirmpassword', 'Confirm Password:')?><br>
				<?=Form::input('password', 'confirmpassword')?>
			</div>

			<div class="row">
				<?=Form::submit('Register', '')?>
			</div>

		<?=Form::close()?>
	</div>
</div>