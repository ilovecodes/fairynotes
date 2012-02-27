<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 17:36:44
         compiled from "application/views\themes\kiuch\users\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71624f14521ce36ba6-32943216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '096be1333439d7d46e289fdd76350d67ae7e807f' => 
    array (
      0 => 'application/views\\themes\\kiuch\\users\\profile.tpl',
      1 => 1326731801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71624f14521ce36ba6-32943216',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'author_name' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f14521d121e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f14521d121e8')) {function content_4f14521d121e8($_smarty_tpl) {?><div id="content">
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