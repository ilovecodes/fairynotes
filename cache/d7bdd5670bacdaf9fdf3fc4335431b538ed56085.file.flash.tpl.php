<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 07:19:04
         compiled from "application/views\themes\default\flash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164824f0e7b5845ddc4-84799625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7bdd5670bacdaf9fdf3fc4335431b538ed56085' => 
    array (
      0 => 'application/views\\themes\\default\\flash.tpl',
      1 => 1325235083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164824f0e7b5845ddc4-84799625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0e7b5849b81',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0e7b5849b81')) {function content_4f0e7b5849b81($_smarty_tpl) {?><div id="flash">
	 <?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

</div><?php }} ?>