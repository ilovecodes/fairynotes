<?php /* Smarty version Smarty-3.1.7, created on 2012-03-16 21:09:08
         compiled from "application/views\themes\nodame\auth\pages\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272634f1449da5d9cc2-74740365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9152fb5d6530fb97350b6ec5c6a474daf632aeb7' => 
    array (
      0 => 'application/views\\themes\\nodame\\auth\\pages\\register.tpl',
      1 => 1328065825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272634f1449da5d9cc2-74740365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1449da9abe6',
  'variables' => 
  array (
    'username_empty' => 0,
    'username_value' => 0,
    'username_error' => 0,
    'password' => 0,
    'password_error' => 0,
    'password_confirm' => 0,
    'password_confirm_error' => 0,
    'email' => 0,
    'email_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1449da9abe6')) {function content_4f1449da9abe6($_smarty_tpl) {?><div id="container">
	<div id="login">
	
		<?php if ($_smarty_tpl->tpl_vars['username_empty']->value){?>
			<h2>Register</h2>
		<?php }else{ ?>
			<h2>Update</h2>
		<?php }?>
	
	<div class="box">
			<form method="post">
			<?php if ($_smarty_tpl->tpl_vars['username_empty']->value){?>
			Username:<br />
			<input type="text" name="username" size="50" class="form" value="<?php echo $_smarty_tpl->tpl_vars['username_value']->value;?>
" /><br/>
			<span id="error"><?php echo $_smarty_tpl->tpl_vars['username_error']->value;?>
</span><br />
			Password:<br />
			<input type="password" name="password" size="50" class="form" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" />
			<span id="error"><?php echo $_smarty_tpl->tpl_vars['password_error']->value;?>
</span><br /><br />
			Password confirmation:<br />
			<input type="password" name="password_conf" size="50" class="form" value="<?php echo $_smarty_tpl->tpl_vars['password_confirm']->value;?>
" />
			<span id="error"><?php echo $_smarty_tpl->tpl_vars['password_confirm_error']->value;?>
<br /><br />
			<?php }?>
			Email:<br />
			
				<input type="text" name="email" size="50" class="form" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
				<span id="error"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</span><br /><br />
			
			<?php if ($_smarty_tpl->tpl_vars['username_empty']->value){?>
			<input type="submit" value="Register" name="register" />
			<?php }else{ ?>
			<input type="submit" value="Update" name="register" />
			<?php }?>
			</form>
	</div>
</div>
</div><?php }} ?>