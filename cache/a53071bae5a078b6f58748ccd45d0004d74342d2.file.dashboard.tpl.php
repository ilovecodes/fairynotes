<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 05:56:09
         compiled from "application/views\themes\kiuch\users\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178514f0b0bb577e430-16641386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a53071bae5a078b6f58748ccd45d0004d74342d2' => 
    array (
      0 => 'application/views\\themes\\kiuch\\users\\dashboard.tpl',
      1 => 1329608537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178514f0b0bb577e430-16641386',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b0bb5a8417',
  'variables' => 
  array (
    'edit_profile' => 0,
    'new_post' => 0,
    'empty_posts' => 0,
    'no_post_message' => 0,
    'count' => 0,
    'form' => 0,
    'posts' => 0,
    'post' => 0,
    'approve' => 0,
    'hide' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b0bb5a8417')) {function content_4f0b0bb5a8417($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\ftcms2\\application\\libraries\\smarty\\libs_3.1.7\\plugins\\function.counter.php';
?><div id="content">
	<br/>
	<h1>My Posts</h2>
	<span><a href="<?php echo $_smarty_tpl->tpl_vars['edit_profile']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['edit_profile']->value['label'];?>
</a></span>
	<br/>
	<span><a href="<?php echo $_smarty_tpl->tpl_vars['new_post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new_post']->value['label'];?>
</a></span>
	
	<?php if ($_smarty_tpl->tpl_vars['empty_posts']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['no_post_message']->value;?>

	<?php }else{ ?>
		<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'count','print'=>false),$_smarty_tpl);?>

		<table>
			<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

			<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
			<th></th>
			<th>Title</th>
			<th>Date Created</th>
			<th>Status</th>
			<th></th>
			<th>Actions</th>
			</tr>
			<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
				    <?php echo smarty_function_counter(array(),$_smarty_tpl);?>

					<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['checkbox'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['date_created'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['status'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['edit_link'];?>
</td>
						<td><a href="javascript:void(0);" class="delete" 
						       rel="<?php echo $_smarty_tpl->tpl_vars['post']->value['delete_link'];?>
">Delete</a></td>
					</tr>
				<?php } ?>
		</table>
		<?php echo $_smarty_tpl->tpl_vars['approve']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['hide']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>

	<br/>
	<?php }?>
</div><?php }} ?>