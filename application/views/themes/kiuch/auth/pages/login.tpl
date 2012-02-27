	  
	<fieldset id="signin_menu">
	<form method="post" id="signin" action="{$base_url}index.php/login">
							
		<p><label>Username/Email*</label>
		<input id="username" name="username" value="{$username}" 
		       title="username" tabindex="4" type="text"/>
		</p>
				
		<p><label>Password*</label>
		
		<input id="password" name="password"
			   value="{$password}" title="password" tabindex="5" type="password"/>
		</p>
			
		<p class="remember">
			<input id="signin_submit" value="Login" name="login" tabindex="6" type="submit"/>
			<!--<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox"/>-->
			<!--<label>Remember me</label>-->
		</p>
				
		<!--<p><a href="{*$forgotpassword*}">Forgot your password?</a></p>
				
		<p><a href="{*$forgotusername*}">Forgot your username?</a></p>-->
		
	</form>
	</fieldset>
		
		
			
			{* <---------------------JAVASCRIPT FOR LOG IN----------------------> *}


		