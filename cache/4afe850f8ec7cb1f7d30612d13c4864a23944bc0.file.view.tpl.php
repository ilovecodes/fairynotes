<?php /* Smarty version Smarty-3.1.7, created on 2012-03-06 05:56:18
         compiled from "application/views\themes\kiuch\posts\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239794f0b06266dd113-89528919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4afe850f8ec7cb1f7d30612d13c4864a23944bc0' => 
    array (
      0 => 'application/views\\themes\\kiuch\\posts\\view.tpl',
      1 => 1328065816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239794f0b06266dd113-89528919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b06269e011',
  'variables' => 
  array (
    'post' => 0,
    'back_to_posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b06269e011')) {function content_4f0b06269e011($_smarty_tpl) {?>
	<!--<div id="pages"></div>-->
		
	<div id = "content">
		
		<h3><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h3><br/>
		Posted by <?php echo $_smarty_tpl->tpl_vars['post']->value->author_name;?>
<br/>

		on <?php echo $_smarty_tpl->tpl_vars['post']->value->date_created;?>
<br/>
		<!--Updated, <br/>-->
		<br/>
		<br/>
		<div id="post-content">
			<?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>
<br/>
		</div>
		<br><br><br>			
		<div id="back"><?php echo $_smarty_tpl->tpl_vars['back_to_posts']->value;?>
</div><br><br><br>
	
	</div><?php }} ?>