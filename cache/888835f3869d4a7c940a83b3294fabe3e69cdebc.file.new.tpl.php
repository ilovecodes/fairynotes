<?php /* Smarty version Smarty-3.1.7, created on 2012-03-16 00:47:52
         compiled from "application/views\themes\kiuch\posts\new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:281804f0b0c26693760-71882493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888835f3869d4a7c940a83b3294fabe3e69cdebc' => 
    array (
      0 => 'application/views\\themes\\kiuch\\posts\\new.tpl',
      1 => 1328065810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281804f0b0c26693760-71882493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b0c269501f',
  'variables' => 
  array (
    'form_fields' => 0,
    'formfield' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b0c269501f')) {function content_4f0b0c269501f($_smarty_tpl) {?><div class="content">
<div class="form">
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
<br/>
    <?php echo $_smarty_tpl->tpl_vars['formfield']->value['error'];?>
<br/>
<?php } ?>
</div>
</div><?php }} ?>