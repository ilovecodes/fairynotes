<?php /* Smarty version Smarty-3.1.7, created on 2012-01-16 17:34:45
         compiled from "application/views\themes\kiuch\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265454f0b033ce98ec4-71969339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1fc2bd044cf63e055603f56e7f9cd66d0eba70' => 
    array (
      0 => 'application/views\\themes\\kiuch\\header.tpl',
      1 => 1326731682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265454f0b033ce98ec4-71969339',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f0b033d73683',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f0b033d73683')) {function content_4f0b033d73683($_smarty_tpl) {?><html>
	<head>
		<title> Fairy Tail CMS </title>
		<link type = "text/css" rel = "stylesheet" href = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/kiuch/style.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
css/kiuch/jquery-ui/jquery-ui-1.8.17.custom.css" type="text/css" media="screen" />
    	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jquery.js"></script>
    	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/jqueryui.js"></script>
    	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
js/effects.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {

            $(".signin").click(function(e) {          
				e.preventDefault();
                $("fieldset#signin_menu").toggle();
				$(".signin").toggleClass("menu-open");
            });
			
			$("fieldset#signin_menu").mouseup(function() {
				return false
			});
			
			$(document).mouseup(function(e) {
				if($(e.target).parent("a.signin").length==0) {
					$(".signin").removeClass("menu-open");
					$("fieldset#signin_menu").hide();
				}
			});			
			
        });
		</script>
	</head>

	<body>
	<div id="dialog">
	</div>
	<div id="wrap"><?php }} ?>