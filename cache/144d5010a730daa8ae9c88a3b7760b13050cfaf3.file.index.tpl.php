<?php /* Smarty version Smarty-3.1.7, created on 2012-01-17 08:14:53
         compiled from "application/views\themes\kiuch\posts\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293754f0b0363ef2bb4-07254697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '144d5010a730daa8ae9c88a3b7760b13050cfaf3' => 
    array (
      0 => 'application/views\\themes\\kiuch\\posts\\index.tpl',
      1 => 1326784491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293754f0b0363ef2bb4-07254697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b03642df4b',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b03642df4b')) {function content_4f0b03642df4b($_smarty_tpl) {?>		<div id = "content">
			<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
					<div class="entry">
						<h3><?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
</h3>
						<div class="emeta"> 
							by <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>

							<?php echo $_smarty_tpl->tpl_vars['article']->value['date_created'];?>

						</div>
					
						<div class="ebody">
							<?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>

						</div>
					
						<div class="read"> 
							<?php echo $_smarty_tpl->tpl_vars['article']->value['view_link'];?>

						</div>
					</div>
			<?php } ?>
			<div class="posts"><?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>
</div>	
		</div><?php }} ?>