<?php /* Smarty version Smarty-3.1.7, created on 2012-01-03 02:15:09
         compiled from "application/views\posts\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:299604ef7f4fbd11582-15051658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69d5d1d5e6011ba76c0a7a49c3814109eddb14f5' => 
    array (
      0 => 'application/views\\posts\\new.tpl',
      1 => 1325235717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299604ef7f4fbd11582-15051658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef7f4fd4eef6',
  'variables' => 
  array (
    'form_fields' => 0,
    'formfield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef7f4fd4eef6')) {function content_4ef7f4fd4eef6($_smarty_tpl) {?><div id="container">
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