<html>
	<head>
		<title> Fairy Tail CMS </title>
		<link type = "text/css" rel = "stylesheet" href = "{$base_url}css/kiuch/style.css" />
		<link rel="stylesheet" href="{$base_url}css/kiuch/jquery-ui/jquery-ui-1.8.17.custom.css" type="text/css" media="screen" />
    	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
    	<script type="text/javascript" src="{$base_url}js/effects.js"></script>
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
	<div id="wrap">