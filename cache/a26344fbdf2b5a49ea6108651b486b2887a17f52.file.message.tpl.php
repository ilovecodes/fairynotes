<?php /* Smarty version Smarty-3.1.7, created on 2012-03-16 21:10:04
         compiled from "application/views\themes\nodame\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246974f144cc38b6016-71276721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26344fbdf2b5a49ea6108651b486b2887a17f52' => 
    array (
      0 => 'application/views\\themes\\nodame\\message.tpl',
      1 => 1328065802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246974f144cc38b6016-71276721',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f144cc3b6875',
  'variables' => 
  array (
    'message' => 0,
    'backlink' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f144cc3b6875')) {function content_4f144cc3b6875($_smarty_tpl) {?><div id="art-Post">
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<br/>
	<?php echo $_smarty_tpl->tpl_vars['backlink']->value;?>

</div><?php }} ?>