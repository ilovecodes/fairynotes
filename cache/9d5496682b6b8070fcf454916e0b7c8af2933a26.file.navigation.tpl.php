<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 05:56:09
         compiled from "application/views\themes\kiuch\users\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61674f0b033d99a882-27131905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d5496682b6b8070fcf454916e0b7c8af2933a26' => 
    array (
      0 => 'application/views\\themes\\kiuch\\users\\navigation.tpl',
      1 => 1329153681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61674f0b033d99a882-27131905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b033ddb455',
  'variables' => 
  array (
    'logged_in' => 0,
    'fb_enabled' => 0,
    'logout' => 0,
    'is_admin' => 0,
    'manage' => 0,
    'new_post' => 0,
    'username' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b033ddb455')) {function content_4f0b033ddb455($_smarty_tpl) {?>	<div id="pages">
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
				<?php if ($_smarty_tpl->tpl_vars['fb_enabled']->value=="disabled"){?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['logout']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['logout']->value['label'];?>
</a></li>
				<?php }?>
				
				<?php if ($_smarty_tpl->tpl_vars['is_admin']->value){?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['manage']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['manage']->value['label'];?>
</a></li>
				<?php }?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['new_post']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['new_post']->value['label'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['username']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value['label'];?>
</a></li>
			<?php }else{ ?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value['link'];?>
" class="signin"><span><?php echo $_smarty_tpl->tpl_vars['login']->value['label'];?>
</span></a></li>
			<?php }?>
		</ul>
	</div>
<?php }} ?>