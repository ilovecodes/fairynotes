<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 13:53:22
         compiled from "application/views\themes\default\themes\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187044f0ed7c2ef0914-96880640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef474c6ca8cfb0fd86195eb3d89f453ee938692a' => 
    array (
      0 => 'application/views\\themes\\default\\themes\\edit.tpl',
      1 => 1326372798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187044f0ed7c2ef0914-96880640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0ed7c3391c1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0ed7c3391c1')) {function content_4f0ed7c3391c1($_smarty_tpl) {?><div id="container">
	<?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

		<?php echo $_smarty_tpl->tpl_vars['form']->value['dropdown'];?>
</br>
		<?php echo $_smarty_tpl->tpl_vars['form']->value['submit'];?>
</br>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

</div><?php }} ?>