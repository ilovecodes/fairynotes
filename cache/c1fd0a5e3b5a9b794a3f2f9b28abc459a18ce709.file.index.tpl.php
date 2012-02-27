<?php /* Smarty version Smarty-3.1.7, created on 2012-01-12 13:53:38
         compiled from "application/views\themes\default\posts\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218154f0ed7d23212b9-18463400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1fd0a5e3b5a9b794a3f2f9b28abc459a18ce709' => 
    array (
      0 => 'application/views\\themes\\default\\posts\\index.tpl',
      1 => 1325838948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218154f0ed7d23212b9-18463400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0ed7d263e46',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0ed7d263e46')) {function content_4f0ed7d263e46($_smarty_tpl) {?><div id="container">
<table>
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
				<h2><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h2><br/>
					by: <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
<br/>
					created <?php echo $_smarty_tpl->tpl_vars['article']->value['date_created'];?>
 ago<br/>
					<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
<br/>
					<?php echo $_smarty_tpl->tpl_vars['article']->value['view_link'];?>
<br/>
				<?php } ?>
		</table>
		<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

</div><?php }} ?>