<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 17:24:12
         compiled from "application/views\themes\nodame\posts\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113874f0f6476392135-76439043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21a7bf532f47c167bec5e336921872e64e8028b7' => 
    array (
      0 => 'application/views\\themes\\nodame\\posts\\view.tpl',
      1 => 1326731048,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113874f0f6476392135-76439043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f647656630',
  'variables' => 
  array (
    'post' => 0,
    'base_url' => 0,
    'view_profile' => 0,
    'contact' => 0,
    'back_to_posts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f647656630')) {function content_4f0f647656630($_smarty_tpl) {?><div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-body">
								<div class="art-Post-inner">
                                        <div class="art-PostMetadataHeader">
                                            <h2 class="art-PostHeader">
                                                <?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>

                                            </h2>
                                            <div class="art-PostHeaderIcons art-metadata-icons">
                                                <img class="art-metadata-icon" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/nodame/PostDateIcon.png" width="18" height="19" alt="" />
                                                <?php echo $_smarty_tpl->tpl_vars['post']->value->date_created;?>

                                                 | <img class="art-metadata-icon" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
images/nodame/PostAuthorIcon.png" width="18" height="18" alt="" />
                                                Author: <a href="<?php echo $_smarty_tpl->tpl_vars['view_profile']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->author_name;?>
</a> <!--<a href="#" title="View user profile."><?php echo $_smarty_tpl->tpl_vars['contact']->value->name;?>
</a>-->
                                            </div>
											<hr size=3>
                                        </div>
                                        <div class="art-PostContent">
                                                <p><?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>
</p>
												<br>               
                                        </div>
                                        <div class="cleared"></div>
       
										<br>
                        </div>   <?php echo $_smarty_tpl->tpl_vars['back_to_posts']->value;?>

                        		<div class="cleared">
                        			
                        		</div>
                            </div> <!--end art-post-body -->
						</div>
					</div>  
<?php }} ?>