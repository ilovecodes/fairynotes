<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 06:43:35
         compiled from "application/views\authors\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48594efc46f5b01b22-28920873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2862164545590af805e2690775d4a3a8d944f37' => 
    array (
      0 => 'application/views\\authors\\edit.tpl',
      1 => 1326692352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48594efc46f5b01b22-28920873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4efc46f6001a9',
  'variables' => 
  array (
    'form_fields' => 0,
    'form_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4efc46f6001a9')) {function content_4efc46f6001a9($_smarty_tpl) {?><div id="container">
{}
<?php  $_smarty_tpl->tpl_vars['form_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_item']->key => $_smarty_tpl->tpl_vars['form_item']->value){
$_smarty_tpl->tpl_vars['form_item']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['form_item']->value['label']!=''){?>
		<b><?php echo $_smarty_tpl->tpl_vars['form_item']->value['label'];?>
</b>:
	<?php }?>
		<?php echo $_smarty_tpl->tpl_vars['form_item']->value['form_element'];?>

		<br/>
<?php } ?>
</div><?php }} ?>