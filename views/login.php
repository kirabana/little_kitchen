<div class="container">
	<div class="login">
		<h2>Login</h2>
		<p>Please login using the form below.</p>
		<p>If you are not a member yet and wish to be, please register by clicking on the register button below.</p>
		<br>

		<?php if($error): ?>
		<p class="error"><?=$error?></p>
		<?php endif; ?>

		<?=Form::open()?>
			
			<div class="row">
				<?=Form::label('username', 'Username:')?><br>
				<?=Form::input('text', 'username', $_POST['username'], 'required')?>
			</div>

			<div class="row">
				<?=Form::label('password', 'Password:')?><br>
				<?=Form::input('password', 'password', $_POST['password'], 'required')?>
			</div>

			<div class="row">
				<?=Form::submit('Login')?>
			</div>

		<?=Form::close()?>
	</div>
</div>


<!-- <div class="containerC">
	<p>Please login using the form below.</p>
	<p>If you are not a member yet and wish to be, please register by clicking here and filling out the details as written.</p>
	<br>
	<p>Username:</p>
	<input type="text"><br>
	<p>Password:</p>
	<input type="password"><br>
	<input class="submit "type="submit" value="Login">
</div> -->