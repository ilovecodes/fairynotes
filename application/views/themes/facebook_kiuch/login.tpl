	  
	<fieldset id="signin_menu"><form method="post" id="signin" action="{$loginAction}">
							
		<p><label>Username/Email</label><input id="username" name="username"
			value="" title="username" tabindex="4" type="text">
		</p>
				
		<p><label>Password</label><input id="password" name="password"
			value="" title="password" tabindex="5" type="password">
		</p>
			
		<p class="remember">
			<input id="signin_submit" value="Log In" tabindex="6" type="submit">
			<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox"><label>Remember me</label>
		</p>
				
		<p><a href="{$forgotpassword}">Forgot your password?</a></p>
				
		<p><a href="{$forgotusername}">Forgot your username?</a></p>
		
	</form>
	</fieldset>
		
		
			
			{* <---------------------JAVASCRIPT FOR LOG IN----------------------> *}


		<script src="javascript/jquery.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
		</script>