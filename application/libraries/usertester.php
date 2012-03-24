<?php
	require_once('modeltester.php');
	
	class UserTester extends Modeltester {

		public function __construct() {
			parent :: __construct('test_user');
			
			$this ->inputs = array('id' => 0,
								  'group_id' => 0,
								  'username' => '',
								  'theme_id' => 0,
								  'expected_result' => FALSE,
								  'fb_enabled' => 'disabled',
								  'group_title' => '');
		}
		
		public function test_get_user() {
			foreach($this -> config -> item('get_user') as $parameters) {
				$this -> execute_get_user($parameters['username'], $parameters['expected_result']);
			}
		}
	
		
		public function run_all_tests() {
			$this -> set_tests(array(
											'test_get_user',
											'test_get_related_author',
											'test_get_related_posts',
											'test_disable',
											'test_enable',
											'test_get_role',
											'test_toggle_user_group',
											'test_set_user_theme',
											'test_get_user_theme'
			                           )
								  );
		}
		
		public function execute_get_user() {
				$user = new User();
				$user -> get_user($this ->inputs['username']);
				$condition =  $user -> exists();
				$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_get_related_author() {
			$user = new User();
			$condition = $user -> get_user($this ->inputs['username']) 
							   -> get_related_author() 
							   -> exists();
			$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_get_related_posts() {
			$user = new User();
			$return_value = $user -> get_user($this ->inputs['username']) 
							      -> get_related_posts();
			$condition = !empty($return_value);
			$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_disable() {
				$user = new User();
				$condition = $user -> disable($this ->inputs['id']);
				$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_enable() {
				$user = new User();
				$condition = $user -> enable($this ->inputs['id']);
				$this -> assertEqual($condition, $this ->inputs['expected_result']);

		}
		
		public function execute_get_role() {
				$user = new User();
				$condition = $user -> get_user($this ->inputs['username']) -> get_role();
				$this -> assertEqual($condition, $this ->inputs['expected_result']);	
		}
		
		public function execute_toggle_user_group() {
				$user = new User();
				$condition = $user -> toggle_user_group($this ->inputs['id'], $this ->inputs['group_title']);
				$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_set_user_theme() {
				$user = new User();
				$user -> get_user($this ->inputs['username']);
				$condition = $user -> set_user_theme($this ->inputs['theme_id'], $this ->inputs['fb_enabled']);
				$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function execute_get_user_theme() {
				$user = new User();
				$user -> get_user($this ->inputs['username']);
				$condition = $user -> get_user_theme($this ->inputs['fb_enabled']);
				$this -> assertEqual($condition, $this ->inputs['expected_result']);
		}
		
		public function test_get_related_author() {
			foreach($this -> config -> item('get_user') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_related_author();
			}
		}
		
		public function test_get_related_posts() {
			foreach($this -> config -> item('get_related_posts') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_related_posts();
			}
		}
		
		public function test_disable() {
			foreach($this -> config -> item('toggle_access') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_disable();
			}
			
		}
		
		public function test_enable() {
			foreach($this -> config -> item('toggle_access') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_enable();
			}
		}
		
		public function test_get_role() {
			foreach($this -> config -> item('get_role') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_role();
			}
		}
		
		public function test_toggle_user_group() {
			foreach($this -> config -> item('toggle_user_group') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_toggle_user_group();
			}
		}
		
		public function test_set_user_theme() {
		
			foreach($this -> config -> item('set_user_theme') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_set_user_theme();
			}
		}
		
		public function test_get_user_theme() {
			foreach($this -> config -> item('get_user_theme') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_user_theme();
			}
		}
	}	