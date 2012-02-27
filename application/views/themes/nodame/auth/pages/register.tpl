<div id="container">
	<div id="login">
	
		{if $username_empty}
			<h2>Register</h2>
		{else}
			<h2>Update</h2>
		{/if}
	
	<div class="box">
			<form method="post">
			{if $username_empty}
			Username:<br />
			<input type="text" name="username" size="50" class="form" value="{$username_value}" /><br/>
			<span id="error">{$username_error}</span><br />
			Password:<br />
			<input type="password" name="password" size="50" class="form" value="{$password}" />
			<span id="error">{$password_error}</span><br /><br />
			Password confirmation:<br />
			<input type="password" name="password_conf" size="50" class="form" value="{$password_confirm}" />
			<span id="error">{$password_confirm_error}<br /><br />
			{/if}
			Email:<br />
			{*if $username_empty*}
				<input type="text" name="email" size="50" class="form" value="{$email}" />
				<span id="error">{$email_error}</span><br /><br />
			{*/if*}
			{if $username_empty}
			<input type="submit" value="Register" name="register" />
			{else}
			<input type="submit" value="Update" name="register" />
			{/if}
			</form>
	</div>
</div>
</div>