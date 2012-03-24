<?php
	require_once('modeltester.php');
	
	class AuthorTester extends Modeltester {
		public function __construct() {
			parent :: __construct('test_author');
			$this -> inputs = array('username' => '',
									'first_name' => '',
									'last_name' => '',
									'expected_result' => FALSE);
		}
		
		public function run_all_tests() {
			$this -> set_tests(array(
										'test_get_related_posts',
										'test_get_all_posts',
										'test_get_author_full_name',
										'test_save'
									));
			$this -> run_all();
		}
		public function execute_get_related_posts() {
			$user = new User();
			$author = $user -> get_user($this -> inputs['username']) -> get_related_author();
			$posts = $author -> get_related_posts();
			$condition = !empty($posts);
			
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_related_posts() {
			foreach($this -> config -> item('get_posts') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_related_posts();
			}
		}
		
		public function execute_get_all_posts() {
			$user = new User();
			$author = $user -> get_user($this -> inputs['username']) -> get_related_author();
			$posts = $author -> get_all_posts();
			$condition = !empty($posts);
			
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_all_posts() {
			foreach($this -> config -> item('get_posts') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_all_posts();
			}
		}
		
		public function execute_get_author_full_name() {
			$user = new User();
			$author = $user -> get_user($this -> inputs['username']) -> get_related_author();
			$condition = $author -> get_full_name(); 
			
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_author_full_name() {
			foreach($this -> config -> item('get_author_full_name') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_all_posts();
			}
		}
		
		public function execute_save() {
			$user = new User();
			$author = $user -> get_user($this -> inputs['username']) -> get_related_author();
			$author -> populate_using_fields($this -> inputs);
			$condition = $author -> save();
			
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_save() {
			foreach($this -> config -> item('populate_using_fields') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_save();
			}
		}
		
	}