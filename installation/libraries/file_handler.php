<?php
	
	class File_handler {
		private $session;
		
		public function __construct() {
			$ci =& get_instance();
			$this -> session = $ci -> session;
		}
		
		public function write_db_config() {
			$replace = array(
								'__USERNAME__' =>	
									$this -> session -> userdata('db_username'),
								'__PASSWORD__' => 	
									$this -> session -> userdata('db_password'),
								'__HOST__'	   => 	
									$this -> session -> userdata('db_host'),
								'__DBNAME__'   =>	
									$this -> session -> userdata('db_name')
			           );
			echo $replace;
			
			$template = file_get_contents('./assets/database.php');
			foreach($replace as $key => $value) {
				$template = str_replace($key, $value, $template);
			}
			
			$handle   = fopen('../application/config/database.php','w+');
			
			if($handle) {
				return fwrite($handle, $template);
			}
		}
	}