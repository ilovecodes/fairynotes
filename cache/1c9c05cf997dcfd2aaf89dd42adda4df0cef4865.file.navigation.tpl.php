<?php /* Smarty version Smarty-3.1.7, created on 2012-03-22 04:32:44
         compiled from "application/views\themes\nodame\users\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:235224f0f05c49262e9-98296799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c9c05cf997dcfd2aaf89dd42adda4df0cef4865' => 
    array (
      0 => 'application/views\\themes\\nodame\\users\\navigation.tpl',
      1 => 1332387156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '235224f0f05c49262e9-98296799',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f05c4d4ba3',
  'variables' => 
  array (
    'logged_in' => 0,
    'username' => 0,
    'new_post' => 0,
    'dashboard' => 0,
    'is_admin' => 0,
    'manage' => 0,
    'fb_enabled' => 0,
    'logout' => 0,
    'login' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f05c4d4ba3')) {function content_4f0f05c4d4ba3($_smarty_tpl) {?><div class="art-nav">
                	<div class="l"></div>
                	<div class="r"></div>
                	<ul class="art-menu">
					<?php if ($_smarty_tpl->tpl_vars['logged_in']->value){?>
                		<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['username']->value['link'];?>
" class=" active"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['username']->value['label'];?>
</span></a>
                		</li>
                		
						<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['new_post']->value['link'];?>
"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['new_post']->value['label'];?>
</span></a>
                		</li>

						<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['dashboard']->value['link'];?>
"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['dashboard']->value['label'];?>
</span></a>
                		</li>
						<?php if ($_smarty_tpl->tpl_vars['is_admin']->value){?>
                		<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['manage']->value['link'];?>
"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['manage']->value['label'];?>
</span></a>
                		</li>
						
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['fb_enabled']->value=="disabled"){?>
							<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['logout']->value['link'];?>
"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['logout']->value['label'];?>
</span></a>
      
                			</li>	
                		<?php }?>
                		
					<?php }else{ ?>
						<li>
                			<a href="<?php echo $_smarty_tpl->tpl_vars['login']->value['link'];?>
"><span class="l"></span><span class="r"></span><span class="t"><?php echo $_smarty_tpl->tpl_vars['login']->value['label'];?>
</span></a>
                		</li>
					<?php }?>
                	</ul>
</div><?php }} ?>