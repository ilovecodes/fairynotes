<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 13:53:44
         compiled from "application/views\themes\default\posts\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296134f0ed7d80bc155-54600281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '378e12d89c41f3133d4e127a892fdd952205c644' => 
    array (
      0 => 'application/views\\themes\\default\\posts\\view.tpl',
      1 => 1326035077,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296134f0ed7d80bc155-54600281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'back_to_posts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0ed7d834564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0ed7d834564')) {function content_4f0ed7d834564($_smarty_tpl) {?><div id="container">
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