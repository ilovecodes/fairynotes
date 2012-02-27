<?php /* Smarty version Smarty-3.1.7, created on 2012-01-02 14:20:03
         compiled from "application/views\users\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7184efc6393e05b46-59015357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a6de512c4c22ffb05f318099ef272f30e2f69a' => 
    array (
      0 => 'application/views\\users\\nav.tpl',
      1 => 1325510401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7184efc6393e05b46-59015357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4efc639404274',
  'variables' => 
  array (
    'logged_in' => 0,
    'username' => 0,
    'back_to_home' => 0,
    'logout' => 0,
    'is_admin' => 0,
    'manage_users' => 0,
    'manage_posts' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4efc639404274')) {function content_4efc639404274($_smarty_tpl) {?><div id="navigation">
<ul>
	<?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
	<li>Welcome <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
!</li>
	<li><?php echo $_smarty_tpl->tpl_vars['back_to_home']->value;?>
</li>
	<li><?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
</li>
	<?php if ($_smarty_tpl->tpl_vars['is_admin']->value){?>
		<li><?php echo $_smarty_tpl->tpl_vars['manage_users']->value;?>
</li>
		<li><?php echo $_smarty_tpl->tpl_vars['manage_posts']->value;?>
</li>
	<?php }else{ ?>
	<?php }?>
<?php }else{ ?>
<li><?php echo $_smarty_tpl->tpl_vars['login']->value;?>
</li>
<?php }?>
</ul>
</div><?php }} ?>