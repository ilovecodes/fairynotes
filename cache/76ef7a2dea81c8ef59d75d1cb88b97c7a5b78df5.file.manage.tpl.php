<?php /* Smarty version Smarty-3.1.7, created on 2012-01-07 08:24:53
         compiled from "application/views\posts\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110174efbd0d4044243-18945968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76ef7a2dea81c8ef59d75d1cb88b97c7a5b78df5' => 
    array (
      0 => 'application/views\\posts\\manage.tpl',
      1 => 1325921088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110174efbd0d4044243-18945968',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4efbd0d46985b',
  'variables' => 
  array (
    'form' => 0,
    'form_elements' => 0,
    'form_element' => 0,
    'approve' => 0,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4efbd0d46985b')) {function content_4efbd0d46985b($_smarty_tpl) {?><div id="container">
<table>
	<tr>
		<th></th>
		<th>Title</th>
		<th>Author</th>
		<th>Status</th>
		<th>Date Created</th>
		<th>Date Updated</th>
		<th>Actions</th>
	</tr>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	
		<?php  $_smarty_tpl->tpl_vars['form_element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['form_element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['form_elements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['form_element']->key => $_smarty_tpl->tpl_vars['form_element']->value){
$_smarty_tpl->tpl_vars['form_element']->_loop = true;
?>
			<tr>
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
				<td><?php echo $_smarty_tpl->tpl_vars['form_element']->value['view_link'];?>
</td>
			</tr>
		<?php } ?>
</table>
	<?php echo $_smarty_tpl->tpl_vars['approve']->value;?>

	<?php echo $_smarty_tpl->tpl_vars['delete']->value;?>

</div><?php }} ?>