<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 07:19:04
         compiled from "application/views\themes\default\users\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:301954f0e7b5851ce57-68296316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae4eb3c8d08f32934765dfab02be94a2278d742b' => 
    array (
      0 => 'application/views\\themes\\default\\users\\navigation.tpl',
      1 => 1325510401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301954f0e7b5851ce57-68296316',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0e7b5884624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0e7b5884624')) {function content_4f0e7b5884624($_smarty_tpl) {?><div id="navigation">
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