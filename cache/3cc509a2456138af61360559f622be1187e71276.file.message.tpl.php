<?php /* Smarty version Smarty-3.1.7, created on 2012-01-09 16:22:15
         compiled from "application/views\themes\kiuch\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47334f0b06276d7614-47420335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3cc509a2456138af61360559f622be1187e71276' => 
    array (
      0 => 'application/views\\themes\\kiuch\\message.tpl',
      1 => 1326121190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47334f0b06276d7614-47420335',
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
  'unifunc' => 'content_4f0b0627902af',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b0627902af')) {function content_4f0b0627902af($_smarty_tpl) {?><div id="content">
	<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<br/>
	<?php echo $_smarty_tpl->tpl_vars['backlink']->value;?>

</div><?php }} ?>