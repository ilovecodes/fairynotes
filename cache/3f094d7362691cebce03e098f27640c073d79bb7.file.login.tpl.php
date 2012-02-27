<?php /* Smarty version Smarty-3.1.7, created on 2012-01-02 14:08:46
         compiled from "application/views\auth\pages\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225684f019b1a6717c4-56653774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f094d7362691cebce03e098f27640c073d79bb7' => 
    array (
      0 => 'application/views\\auth\\pages\\login.tpl',
      1 => 1325509722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225684f019b1a6717c4-56653774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f019b1a6e682',
  'variables' => 
  array (
    'username' => 0,
    'username_error' => 0,
    'password' => 0,
    'password_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f019b1a6e682')) {function content_4f019b1a6e682($_smarty_tpl) {?><div id="container">
	<div id="login">
	
		<!--<h2>Login</h2>-->
		<div class="box">
				<form method="POST">
					Username/Email:
					<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" size="20" class="form" />
					<span id="error"><?php echo $_smarty_tpl->tpl_vars['username_error']->value;?>
</span>
					Password:
					<input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" size="20" class="form" />
					<span id="error"><?php echo $_smarty_tpl->tpl_vars['password_error']->value;?>
</span>
					<input type="submit" value="Login" name="login" />
				</form>
		</div>
	
	</div>
</div><?php }} ?>