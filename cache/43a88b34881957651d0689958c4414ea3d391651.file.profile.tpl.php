<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 06:25:56
         compiled from "application/views\themes\nodame\users\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256454f13b4582c1003-31348973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43a88b34881957651d0689958c4414ea3d391651' => 
    array (
      0 => 'application/views\\themes\\nodame\\users\\profile.tpl',
      1 => 1326691553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256454f13b4582c1003-31348973',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f13b45864290',
  'variables' => 
  array (
    'author_name' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f13b45864290')) {function content_4f13b45864290($_smarty_tpl) {?><div id="art-Post">
	<h3><?php echo $_smarty_tpl->tpl_vars['author_name']->value;?>
</h3>
	<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</br>
	<?php } ?>
</div><?php }} ?>