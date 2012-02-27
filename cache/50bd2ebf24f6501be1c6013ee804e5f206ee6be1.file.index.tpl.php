<?php /* Smarty version Smarty-3.1.7, created on 2012-01-13 01:29:54
         compiled from "application/views\themes\nodame\posts\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215504f0f05c51ffb59-58319328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50bd2ebf24f6501be1c6013ee804e5f206ee6be1' => 
    array (
      0 => 'application/views\\themes\\nodame\\posts\\index.tpl',
      1 => 1326414588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215504f0f05c51ffb59-58319328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f05c53d8b8',
  'variables' => 
  array (
    'articles' => 0,
    'article' => 0,
    'base_url' => 0,
    'contact' => 0,
    'pagination' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f05c53d8b8')) {function content_4f0f05c53d8b8($_smarty_tpl) {?> 
                    <div class="art-content">
                        <div class="art-Post">
							<?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['articles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value){
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
                            <div class="art-Post-body">
								<div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                <?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>

                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/nodame/PostDateIcon.png" width="18" height="19" alt="" />
                                                <?php echo $_smarty_tpl->tpl_vars['article']->value['date_created'];?>

                                                 | <img class="art-metadata-icon" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/nodame/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
 <!--<a href="#" title="View user profile."><?php echo $_smarty_tpl->tpl_vars['contact']->value->name;?>
</a>-->
                                            </div>
											<hr size=3>
                                        </div>
                                        <div class="art-PostContent">
                                                <p><?php echo $_smarty_tpl->tpl_vars['article']->value['content'];?>
</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
       
										<br>
										<div class="read"><?php echo $_smarty_tpl->tpl_vars['article']->value['view_link'];?>
</div>
                        </div>   
                        		<div class="cleared"></div>
                            </div> <!--end art-post-body -->
							<?php } ?>
						</div>
						<?php echo $_smarty_tpl->tpl_vars['pagination']->value;?>

					</div>  
				<?php }} ?>