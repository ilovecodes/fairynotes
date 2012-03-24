<?php /* Smarty version Smarty-3.1.7, created on 2012-03-22 04:27:36
         compiled from "application/views\themes\nodame\authors\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222124f13b95699af47-09966993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa3317ff10214dd861fb2eb746ddc21785bc234' => 
    array (
      0 => 'application/views\\themes\\nodame\\authors\\edit.tpl',
      1 => 1328065818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222124f13b95699af47-09966993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f13b956c6b48',
  'variables' => 
  array (
    'no_name' => 0,
    'no_name_notice' => 0,
    'form_fields' => 0,
    'form_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f13b956c6b48')) {function content_4f13b956c6b48($_smarty_tpl) {?><div id="art-Post">
<br/>
	<?php if ($_smarty_tpl->tpl_vars['no_name']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['no_name_notice']->value;?>

	<?php }?>
	
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