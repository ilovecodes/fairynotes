<?php /* Smarty version Smarty-3.1.7, created on 2012-01-09 03:36:38
         compiled from "application/views\posts\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199874ef5d64d450d00-78067567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1cffdf896af1bde4647c1376c49d562cc844553' => 
    array (
      0 => 'application/views\\posts\\view.tpl',
      1 => 1326035077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199874ef5d64d450d00-78067567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef5d64d62967',
  'variables' => 
  array (
    'post' => 0,
    'back_to_posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef5d64d62967')) {function content_4ef5d64d62967($_smarty_tpl) {?><div id="container">
	<h1><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h1><br/>
		<?php echo $_smarty_tpl->tpl_vars['post']->value->author_name;?>
<br/>

	Created, <?php echo $_smarty_tpl->tpl_vars['post']->value->date_created;?>
<br/>
	Updated, <?php echo $_smarty_tpl->tpl_vars['post']->value->date_updated;?>
<br/>

	<div id="content">
		<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>
<br/>
	</div>
		<?php echo $_smarty_tpl->tpl_vars['back_to_posts']->value;?>

</div><?php }} ?>