<?php /* Smarty version Smarty-3.1.7, created on 2012-01-14 02:43:38
         compiled from "application/views\themes\nodame\themes\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307034f10ddca53e542-20604064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97f86effa6d15077ba02c43ecb71a02cf9f9650f' => 
    array (
      0 => 'application/views\\themes\\nodame\\themes\\edit.tpl',
      1 => 1326360480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307034f10ddca53e542-20604064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f10ddca85ba7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f10ddca85ba7')) {function content_4f10ddca85ba7($_smarty_tpl) {?><div id="content">
	<?php echo $_smarty_tpl->tpl_vars['form']->value['open'];?>

		<?php echo $_smarty_tpl->tpl_vars['form']->value['dropdown'];?>
</br>
		<?php echo $_smarty_tpl->tpl_vars['form']->value['submit'];?>
</br>
	<?php echo $_smarty_tpl->tpl_vars['form']->value['close'];?>

</div><?php }} ?>