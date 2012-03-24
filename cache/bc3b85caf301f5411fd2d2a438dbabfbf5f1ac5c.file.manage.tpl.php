<?php /* Smarty version Smarty-3.1.7, created on 2012-03-16 00:48:30
         compiled from "application/views\themes\kiuch\admin\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153704f124fad01a714-45477428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc3b85caf301f5411fd2d2a438dbabfbf5f1ac5c' => 
    array (
      0 => 'application/views\\themes\\kiuch\\admin\\manage.tpl',
      1 => 1328065816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153704f124fad01a714-45477428',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f124fad3f241',
  'variables' => 
  array (
    'manage_posts' => 0,
    'manage_users' => 0,
    'choose_site_theme' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f124fad3f241')) {function content_4f124fad3f241($_smarty_tpl) {?><div id="content">
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