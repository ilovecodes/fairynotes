<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 15:40:19
         compiled from "application/views\themes\kiuch\auth\pages\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166064f0b0363dc2342-88948774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3abe4dde2e99c4327cea9cbbc4536c8877dcec6a' => 
    array (
      0 => 'application/views\\themes\\kiuch\\auth\\pages\\login.tpl',
      1 => 1326379182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166064f0b0363dc2342-88948774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b0363e7ae5',
  'variables' => 
  array (
    'base_url' => 0,
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b0363e7ae5')) {function content_4f0b0363e7ae5($_smarty_tpl) {?>	  
	<fieldset id="signin_menu">
	<form method="post" id="signin" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/login">
							
		<p><label>Username/Email*</label>
		<input id="username" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" 
		       title="username" tabindex="4" type="text"/>
		</p>
				
		<p><label>Password*</label>
		
		<input id="password" name="password"
			   value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" title="password" tabindex="5" type="password"/>
		</p>
			
		<p class="remember">
			<input id="signin_submit" value="Login" name="login" tabindex="6" type="submit"/>
			<!--<input id="remember" name="remember_me" value="1" tabindex="7" type="checkbox"/>-->
			<!--<label>Remember me</label>-->
		</p>
				
		<!--<p><a href="">Forgot your password?</a></p>
				
		<p><a href="">Forgot your username?</a></p>-->
		
	</form>
	</fieldset>
		
		
			
			


		<?php }} ?>