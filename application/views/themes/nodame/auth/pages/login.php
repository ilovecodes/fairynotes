<div id="container">
	<div id="login">
	
		<!--<h2>Login</h2>-->
		<div class="box">
				<form method="POST">
					Username/Email:
					<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="20" class="form" /><?php echo form_error('username'); ?>
					Password:
					<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="20" class="form" /><?php echo form_error('password'); ?>
					<input type="submit" value="Login" name="login" />
				</form>
		</div>
	
	</div>
</div>