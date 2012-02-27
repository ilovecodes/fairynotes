<?php /* Smarty version Smarty-3.1.7, created on 2012-01-03 15:03:17
         compiled from "application/views\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:138674f030aa5e86453-00795904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8a283b318c02c6051bc524799556848a19a9fb' => 
    array (
      0 => 'application/views\\message.tpl',
      1 => 1325599216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138674f030aa5e86453-00795904',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'backlink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f030aa61ca51',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f030aa61ca51')) {function content_4f030aa61ca51($_smarty_tpl) {?><div id="container">
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<br/>
	<?php echo $_smarty_tpl->tpl_vars['backlink']->value;?>

</div><?php }} ?>