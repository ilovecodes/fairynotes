<?php /* Smarty version Smarty-3.1.7, created on 2011-12-27 23:17:25
         compiled from "application/views\user_options.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157624efa43f51a6cd2-99206659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5196461afa6a68e1aad67089dfd8363ed0ab7009' => 
    array (
      0 => 'application/views\\user_options.tpl',
      1 => 1325023954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157624efa43f51a6cd2-99206659',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged_in' => 0,
    'logout' => 0,
    'view_dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4efa43f543e2d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4efa43f543e2d')) {function content_4efa43f543e2d($_smarty_tpl) {?><h1> All Posts </h2>
	<?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
<br/>
		<?php echo $_smarty_tpl->tpl_vars['view_dashboard']->value;?>
<br/>
	<?php }?><?php }} ?>