<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

	require "smarty/libs_3.1.7/Smarty.class.php";

	class Mysmarty extends Smarty
	{
		public function __construct ( )
		{
			parent:: __construct();

			$config =& get_config( );			

			$this->left_delimiter	=  '{';
			$this->right_delimiter	=  '}';			

			// absolute path prevents "template not found" errors
			$this->template_dir = 'application/views';//(!empty($config['smarty_template_dir']) ? $config['smarty_template_dir'] : BASEPATH . 'application/views/');																		

			$this->compile_dir  = 'cache';//(!empty($config['smarty_compile_dir']) ? $config['compile_dir'] : BASEPATH . 'cache/'); //use CI's cache folder
		}

		public function view ( $resource_name, $cache_id = null )
		{
			if ( strpos($resource_name, '.') === false )
				$resource_name .= '.tpl';

			return parent::display( $resource_name, $cache_id );
		}
	}

?>