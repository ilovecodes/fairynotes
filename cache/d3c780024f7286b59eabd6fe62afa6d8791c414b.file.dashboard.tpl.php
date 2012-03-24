<?php /* Smarty version Smarty-3.1.7, created on 2012-03-22 14:15:02
         compiled from "application/views\themes\nodame\users\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136664f0f63448cece4-51564978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c780024f7286b59eabd6fe62afa6d8791c414b' => 
    array (
      0 => 'application/views\\themes\\nodame\\users\\dashboard.tpl',
      1 => 1332422100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136664f0f63448cece4-51564978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f6344ca962',
  'variables' => 
  array (
    'counter' => 0,
    'form' => 0,
    'posts' => 0,
    'post' => 0,
    'approve' => 0,
    'hide' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f6344ca962')) {function content_4f0f6344ca962($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\ftcmsinstaller\\application\\libraries\\smarty\\libs_3.1.7\\plugins\\function.counter.php';
?><?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false,'assign'=>'count'),$_smarty_tpl);?>

<?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'counter','print'=>false),$_smarty_tpl);?>

<div id="content">
<table>
	
	<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['counter']->value%2+1;?>
">
	<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

		<th></th>
		<th>Title</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<th>Edit</th>
		<th>Actions</th>
	</tr>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['counter']->value%2+1;?>
">
				<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['checkbox'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['post']->value['date_updated'];?>
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

</div>
<?php }} ?>