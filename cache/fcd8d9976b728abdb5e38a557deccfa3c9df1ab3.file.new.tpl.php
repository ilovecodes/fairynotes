<?php /* Smarty version Smarty-3.1.7, created on 2012-03-20 14:39:10
         compiled from "application/views\themes\nodame\posts\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223024f0f67a1353447-13008555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd8d9976b728abdb5e38a557deccfa3c9df1ab3' => 
    array (
      0 => 'application/views\\themes\\nodame\\posts\\new.tpl',
      1 => 1328065825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223024f0f67a1353447-13008555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f67a16e26b',
  'variables' => 
  array (
    'form_fields' => 0,
    'formfield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f67a16e26b')) {function content_4f0f67a16e26b($_smarty_tpl) {?><div id="art-Post">
<?php  $_smarty_tpl->tpl_vars['formfield'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['formfield']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['formfield']->key => $_smarty_tpl->tpl_vars['formfield']->value){
$_smarty_tpl->tpl_vars['formfield']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['formfield']->value['label']!=''){?>
		<?php echo $_smarty_tpl->tpl_vars['formfield']->value['label'];?>
 :
    <?php }?>
	<?php echo $_smarty_tpl->tpl_vars['formfield']->value['field'];?>

    <?php echo $_smarty_tpl->tpl_vars['formfield']->value['error'];?>
<br/>
<?php } ?>
</div><?php }} ?>