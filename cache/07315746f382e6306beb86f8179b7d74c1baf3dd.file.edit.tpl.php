<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 10:28:06
         compiled from "application/views\themes\kiuch\themes\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85314f0ea78d86ad72-32356248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07315746f382e6306beb86f8179b7d74c1baf3dd' => 
    array (
      0 => 'application/views\\themes\\kiuch\\themes\\edit.tpl',
      1 => 1326360480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85314f0ea78d86ad72-32356248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0ea78df1af8',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0ea78df1af8')) {function content_4f0ea78df1af8($_smarty_tpl) {?><div id="content">
	<?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

		<?php echo $_smarty_tpl->tpl_vars['form']->value['dropdown'];?>
</br>
		<?php echo $_smarty_tpl->tpl_vars['form']->value['submit'];?>
</br>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

</div><?php }} ?>