<?php /* Smarty version Smarty-3.1.7, created on 2012-01-13 08:03:36
         compiled from "application/views\themes\nodame\auth\pages\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258844f0f5b6bd5d574-35249180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c629064c9576c8044529294747e2c4d9cf69d103' => 
    array (
      0 => 'application/views\\themes\\nodame\\auth\\pages\\login.tpl',
      1 => 1326438211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258844f0f5b6bd5d574-35249180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0f5b6be2237',
  'variables' => 
  array (
    'username' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0f5b6be2237')) {function content_4f0f5b6be2237($_smarty_tpl) {?><div class="art-Block">
                            <div class="art-Block-body">
                                        <div class="art-BlockHeader">
                                            <div class="art-header-tag-icon">
                                                <div class="t">Login</div>
                                            </div>
                                        </div><div class="art-BlockContent">
                                            <div class="art-BlockContent-tl"></div>
                                            <div class="art-BlockContent-tr"></div>
                                            <div class="art-BlockContent-bl"></div>
                                            <div class="art-BlockContent-br"></div>
                                            <div class="art-BlockContent-tc"></div>
                                            <div class="art-BlockContent-bc"></div>
                                            <div class="art-BlockContent-cl"></div>
                                            <div class="art-BlockContent-cr"></div>
                                            <div class="art-BlockContent-cc"></div>
                                            <div class="art-BlockContent-body">
                                                
                                                      <form method="post" id="user-login-form"> 
                                                <div><div class="form-item">
                                                 <label for="edit-name">Username: <span class="form-required" title="This field is required.">*</span></label>
                                                 <input type="text" maxlength="60" name="username" id="edit-name" style="width: 95%;" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"  />
                                                </div>
                                                <div class="form-item">
                                                 <label for="edit-pass">Password: <span class="form-required" title="This field is required.">*</span></label>
                                                 <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" name="password" id="edit-pass"  maxlength="60"  style="width: 95%;" class="form-text required" />
                                                </div>
                                                <span class="art-button-wrapper">
                                                	<span class="l"> </span>
                                                	<span class="r"> </span>
                                                	<input class="art-button" type="submit" name="login" value="Login" />
                                                </span>
                                                
                                                <div class="cleared"></div>
                                                </div></form>
                                        		<div class="cleared"></div>
                                            </div>
                                        </div>
                        		<div class="cleared"></div>
                            </div>
                        </div><?php }} ?>