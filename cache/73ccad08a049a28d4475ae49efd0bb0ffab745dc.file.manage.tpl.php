<?php /* Smarty version Smarty-3.1.7, created on 2012-01-14 03:00:32
         compiled from "application/views\themes\nodame\admin\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36594f10ddc5a8b900-72347047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ccad08a049a28d4475ae49efd0bb0ffab745dc' => 
    array (
      0 => 'application/views\\themes\\nodame\\admin\\manage.tpl',
      1 => 1326506225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36594f10ddc5a8b900-72347047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f10ddc5d61eb',
  'variables' => 
  array (
    'manage_posts' => 0,
    'manage_users' => 0,
    'choose_site_theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f10ddc5d61eb')) {function content_4f10ddc5d61eb($_smarty_tpl) {?><div id="art-Post">
	<a href="<?php echo $_smarty_tpl->tpl_vars['manage_posts']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['manage_posts']->value['label'];?>
</a>
	<br/>
	<a href="<?php echo $_smarty_tpl->tpl_vars['manage_users']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['manage_users']->value['label'];?>
</a>
	<br/>
	<a href="<?php echo $_smarty_tpl->tpl_vars['choose_site_theme']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['choose_site_theme']->value['label'];?>
</a>
	<br/>
	
</div><?php }} ?>