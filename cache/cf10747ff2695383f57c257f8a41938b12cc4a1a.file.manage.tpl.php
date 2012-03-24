<?php /* Smarty version Smarty-3.1.7, created on 2012-03-22 15:34:29
         compiled from "application/views\themes\nodame\posts\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72044f0f67b6ba9344-76534834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf10747ff2695383f57c257f8a41938b12cc4a1a' => 
    array (
      0 => 'application/views\\themes\\nodame\\posts\\manage.tpl',
      1 => 1332426821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72044f0f67b6ba9344-76534834',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f67b6efe53',
  'variables' => 
  array (
    'count' => 0,
    'form' => 0,
    'form_elements' => 0,
    'form_element' => 0,
    'approve' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f67b6efe53')) {function content_4f0f67b6efe53($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\ftcmsinstaller\\application\\libraries\\smarty\\libs_3.1.7\\plugins\\function.counter.php';
?><!--  <?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'count'),$_smarty_tpl);?>
 -->
<div id="art-Post">
<table>
	<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
		<!---->
		<th></th>
		<th>Title</th>
		<th>Author</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	
		<?php  $_smarty_tpl->tpl_vars['form_element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_element']->key => $_smarty_tpl->tpl_vars['form_element']->value){
$_smarty_tpl->tpl_vars['form_element']->_loop = true;
?>
			<!-- <?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 -->
			<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['checkbox'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['title'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['author'];?>
 </td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['date_created'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['date_updated'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['edit_link'];?>
</td>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['form_element']->value['delete_link']!=''){?>
					<a href="javascript:void(0);" class="delete" 
							rel="<?php echo $_smarty_tpl->tpl_vars['form_element']->value['delete_link'];?>
">Delete</a>
				<?php }?>
				</td>
			</tr>
		<?php } ?>
</table>
	<div id="action">
		<?php echo $_smarty_tpl->tpl_vars['approve']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>

	</div>
</div><?php }} ?>