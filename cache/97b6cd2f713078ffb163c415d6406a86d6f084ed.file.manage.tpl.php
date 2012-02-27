<?php /* Smarty version Smarty-3.1.7, created on 2012-01-17 03:42:54
         compiled from "application/views\themes\nodame\auth\pages\users\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5804f1398d7a9dbc6-49851362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b6cd2f713078ffb163c415d6406a86d6f084ed' => 
    array (
      0 => 'application/views\\themes\\nodame\\auth\\pages\\users\\manage.tpl',
      1 => 1326732966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5804f1398d7a9dbc6-49851362',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f1398d89864b',
  'variables' => 
  array (
    'count' => 0,
    'table_headers' => 0,
    'table_header' => 0,
    'table_rows' => 0,
    'table_row' => 0,
    'register_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f1398d89864b')) {function content_4f1398d89864b($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\xampp\\htdocs\\ci\\application\\libraries\\smarty\\libs_3.1.7\\plugins\\function.counter.php';
?><?php echo smarty_function_counter(array('start'=>0,'skip'=>1,'print'=>false,'assign'=>'count'),$_smarty_tpl);?>

<div id="art-Post">
<h2>Manage Users</h2>
<table>
	<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

	<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
		<?php  $_smarty_tpl->tpl_vars['table_header'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['table_header']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_headers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['table_header']->key => $_smarty_tpl->tpl_vars['table_header']->value){
$_smarty_tpl->tpl_vars['table_header']->_loop = true;
?>
			<th><?php echo $_smarty_tpl->tpl_vars['table_header']->value;?>
</th>
		<?php } ?>
	</tr>
	
		<?php  $_smarty_tpl->tpl_vars['table_row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['table_row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['table_rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['table_row']->key => $_smarty_tpl->tpl_vars['table_row']->value){
$_smarty_tpl->tpl_vars['table_row']->_loop = true;
?>
			<?php echo smarty_function_counter(array(),$_smarty_tpl);?>

			<tr class="table_row_<?php echo $_smarty_tpl->tpl_vars['count']->value%2+1;?>
">
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['username'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['name'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['email'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['status'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['make_admin'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['edit'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['disable'];?>
</td>
				<?php if ($_smarty_tpl->tpl_vars['table_row']->value['delete_all']['link']!=''){?>
				<td><a href="javascript:void(0);" class="delete" rel="<?php echo $_smarty_tpl->tpl_vars['table_row']->value['delete_all']['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['table_row']->value['delete_all']['label'];?>
</a></td>
				<?php }else{ ?>
				<td><?php echo $_smarty_tpl->tpl_vars['table_row']->value['delete_all']['label'];?>
</td>
				<?php }?>
			</tr>
		<?php } ?>
	
</table>
<?php echo $_smarty_tpl->tpl_vars['register_user']->value;?>

</div><?php }} ?>