<?php
	$colors = 'FFF,58DD34,F1C9BD,DFD734,4394D0,CAD8F5,F1EC9B';
	$config['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'post-content',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"750px",	//Setting a custom width
				'height' 	=> 	'200px',	//Setting a custom height
				'bodyId'    =>  'post-content-text',
				'colorButton_colors' => $colors,
				'colorButton_enableMore' => FALSE,
				'skin' => 'v2',
				'resize_enabled' => FALSE
             )
		);
?>