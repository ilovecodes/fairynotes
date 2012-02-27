<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 14:23:10
         compiled from "application/views\themes\default\auth\pages\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95134f0e7b58a3f220-53339636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2225106c813fa43a42542917bfb559cefbebacbf' => 
    array (
      0 => 'application/views\\themes\\default\\auth\\pages\\login.tpl',
      1 => 1326374585,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95134f0e7b58a3f220-53339636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0e7b58b589e',
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0e7b58b589e')) {function content_4f0e7b58b589e($_smarty_tpl) {?><div id="container">
	<div id="login">
	
		<!--<h2>Login</h2>-->
		<div class="box">
				<form method="POST">
					Username/Email:
					<input type="text" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" size="20" class="form" />
					<span id="error"></span>
					Password:
					<input type="password" name="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" size="20" class="form" />
					<span id="error"></span>
					<input type="submit" value="Login" name="login" />
				</form>
		</div>
	
	</div>
</div><?php }} ?>