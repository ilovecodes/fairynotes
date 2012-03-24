<?php
	require_once('modeltester.php');
	
	class PostTester extends Modeltester {
	
		public $post;
		
		public function __construct() {
			parent :: __construct('test_post');
			$this -> inputs = array('title' => '',
								  'content' => '',
								  'author_id' => 0,
								  'expected_result' => FALSE,
								  'id' => 0);
			$this -> post = new Post();
		}
		
		//runs all tests
		public function run_all_tests() {
			parent :: run_all_tests();
		}
		
		public function execute_get_post() {
			$post = $this -> post;
			$condition = $post -> get_post($this -> inputs['id']);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_post() {
			foreach($this -> config -> item('post_formatting') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_post();
			}
		}
		
		//executes a single create_post method test case
		public function execute_create_post() {
				$post = $this -> post;
				$post -> populate_using_fields($this -> inputs);
				$condition = $post -> save();
				
				if($condition) {
					$this-> config -> set_item('last_saved_post', $post -> id);
				}
				
				$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		//executes multiple create_post method test cases
		public function test_create_post() {
			foreach($this -> config -> item('save_post') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_create_post();
			}
		}
		
		public function execute_update_post() {
			$post = $this -> post;
			$post -> where('id', $this -> config -> item('last_saved_post')) -> get();
			$post -> populate_using_fields($this -> inputs);
			$condition = $post -> save();
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_update_post() {
			foreach($this -> config -> item('update_post') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_update_post();
			}
		}
		
		public function execute_get_all_posts() {
			$post = $this -> post;
			$posts = $post -> get_all_posts();
			$condition = !empty($posts);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_all_posts() {
			$parameters = $this -> config -> item('get_all_posts');
			$this -> set_input_array($parameters);
			$this -> execute_get_all_posts();
		}
		
		public function execute_get_all_displayed_posts() {
			$post = $this -> post;
			$posts = $post -> get_all_displayed_posts();
			
			$displayed_posts_only = TRUE;
			
			foreach($posts as $individual_post) {
				$displayed_posts_only = $individual_post -> is_displayed == 1;
				
				if(!$displayed_posts_only) {
					break;
				}
			
			}
			$this -> assertEqual($displayed_posts_only, $this -> inputs['expected_result']);
		}
		
		public function test_get_all_displayed_posts() {
			$parameters = $this -> config -> item('get_all_displayed_posts');
			$this -> set_input_array($parameters);
			$this -> execute_get_all_displayed_posts();
		}
		
		public function execute_get_all_hidden_posts() {
			$post = $this -> post;
			$posts = $post -> get_all_hidden_posts();
			
			$hidden_posts_only = TRUE;
			
			foreach($posts as $individual_post) {
				$hidden_posts_only = $individual_post -> is_displayed == 0;
				
				if(!$hidden_posts_only) {
					break;
				}
			
			}
			
			$this -> assertEqual($hidden_posts_only, $this -> inputs['expected_result']);
		}
		
		public function test_get_all_hidden_posts() {
			$parameters = $this -> config -> item('get_all_hidden_posts');
			$this -> set_input_array($parameters);
			$this -> execute_get_all_hidden_posts();
		}
		
		public function execute_format_posts() {
			$post = $this -> post;
			$posts = $post -> get_all_posts();
			$formatted_posts = $post -> format_posts($posts);
			$condition = !empty($formatted_posts);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_format_posts() {
			$parameters = $this -> config -> item('format_posts');
			$this -> set_input_array($parameters);
			$this -> execute_format_posts();
		}
		
		public function execute_format_date() {
			$post = $this -> post;
			$post -> where('id', $this -> inputs['id']) -> get();
			$date = $post -> format_date();
			$condition = !empty($date);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_format_date() {
			foreach($this -> config -> item('post_formatting') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_format_date();
			}
		}
		
		public function execute_get_content() {
			$post = $this -> post;
			$post -> where('id', $this -> inputs['id']) -> get();
			$content = $post -> get_content();
			$condition = !empty($content);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_get_content() {
			foreach($this -> config -> item('post_formatting') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_get_content();
			}
		}
		
		public function execute_status_to_word() {
			$post = $this -> post;
			$post -> where('id', $this -> inputs['id']) -> get();
			$content = $post -> status_to_word();
			$condition = !empty($content);
			$this -> assertEqual($condition, $this -> inputs['expected_result']);
		}
		
		public function test_status_to_word() {
			foreach($this -> config -> item('post_formatting') as $parameters) {
				$this -> set_input_array($parameters);
				$this -> execute_status_to_word();
			}
		}
		
	}