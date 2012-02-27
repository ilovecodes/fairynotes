<?php /* Smarty version Smarty-3.1.7, created on 2012-01-07 05:47:31
         compiled from "application/views\users\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:134204ef3e4bec32413-11940052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24ad6ac124ffbea9f2475583710bec66ca9139da' => 
    array (
      0 => 'application/views\\users\\dashboard.tpl',
      1 => 1325911648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134204ef3e4bec32413-11940052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef3e4bf15400',
  'variables' => 
  array (
    'empty_posts' => 0,
    'no_post_message' => 0,
    'posts' => 0,
    'post' => 0,
    'new_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef3e4bf15400')) {function content_4ef3e4bf15400($_smarty_tpl) {?><div id="container">
	<br/>
	<h1>My Posts</h2>
	<br/>
	<?php if ($_smarty_tpl->tpl_vars['empty_posts']->value){?>
		<?php echo $_smarty_tpl->tpl_vars['no_post_message']->value;?>

	<?php }else{ ?>
		<table>
			<tr><th>Title</th><th></th>
			<th>Date Created</th>
			<th>Status</th>
			<th></th>
			<th></th>
			<th>Actions</th>
			<th></th></tr>
				<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</td><td></td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['date_created'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['status'];?>
</td>
						<td></td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['view_link'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['edit_link'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['post']->value['delete_link'];?>
</td>
					</tr>
				<?php } ?>
		</table>
	<br/>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['new_post']->value;?>

</div><?php }} ?>