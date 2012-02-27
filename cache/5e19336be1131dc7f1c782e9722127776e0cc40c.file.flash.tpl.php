<?php /* Smarty version Smarty-3.1.7, created on 2011-12-30 11:20:01
         compiled from "application/views\flash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4394efd9051d4c273-06526612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e19336be1131dc7f1c782e9722127776e0cc40c' => 
    array (
      0 => 'application/views\\flash.tpl',
      1 => 1325235083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4394efd9051d4c273-06526612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4efd9051f3580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4efd9051f3580')) {function content_4efd9051f3580($_smarty_tpl) {?><div id="flash">
	 <?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

</div><?php }} ?>