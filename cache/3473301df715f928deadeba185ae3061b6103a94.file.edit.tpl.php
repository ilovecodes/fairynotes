<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 17:37:46
         compiled from "application/views\themes\kiuch\authors\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:295194f145229a1c3b5-24710028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3473301df715f928deadeba185ae3061b6103a94' => 
    array (
      0 => 'application/views\\themes\\kiuch\\authors\\edit.tpl',
      1 => 1326731863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295194f145229a1c3b5-24710028',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f145229d3f91',
  'variables' => 
  array (
    'no_name' => 0,
    'no_name_notice' => 0,
    'form_fields' => 0,
    'form_item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f145229d3f91')) {function content_4f145229d3f91($_smarty_tpl) {?><div id="content">
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