<?php /* Smarty version Smarty-3.1.7, created on 2012-01-15 05:30:09
         compiled from "application/views\themes\kiuch\posts\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153794f0b144e86a025-01386576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c971d2ed1dd7a3a3858967ad5b63126744e48cfd' => 
    array (
      0 => 'application/views\\themes\\kiuch\\posts\\manage.tpl',
      1 => 1326601403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153794f0b144e86a025-01386576',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b144eb8974',
  'variables' => 
  array (
    'counter' => 0,
    'form' => 0,
    'form_elements' => 0,
    'form_element' => 0,
    'approve' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b144eb8974')) {function content_4f0b144eb8974($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\ci\\application\\libraries\\smarty\\libs_3.1.7\\plugins\\function.counter.php';
?><?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'assign'=>'counter','print'=>false),$_smarty_tpl);?>

<div id="content">
<table>
	
	<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['counter']->value%2+1;?>
">
	<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

		<th></th>
		<th>Title</th>
		<th>Author</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<!--<th>Actions</th>-->
	</tr>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	
		<?php  $_smarty_tpl->tpl_vars['form_element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_element']->key => $_smarty_tpl->tpl_vars['form_element']->value){
$_smarty_tpl->tpl_vars['form_element']->_loop = true;
?>
			<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['counter']->value%2+1;?>
">
			<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

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
				<!--<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['view_link'];?>
</td>-->
			</tr>
		<?php } ?>
</table>
	<?php echo $_smarty_tpl->tpl_vars['approve']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>

</div><?php }} ?>