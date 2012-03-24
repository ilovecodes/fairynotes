<?php
	require_once("application/controllers/posts.php");
	require_once("controllertester.php");
	
	class Poststester extends Controllertester {
		
		
		public function __construct() {
			parent :: __construct('test_posts');
			$this -> controller = new Posts();
		}
		
		
		
		public function test_create_post() {
			foreach($this -> config -> item('create_post') as $parameters) {
				$this -> execute_method($parameters, 'create_post');
			}
		}
		
		public function test_update_post() {
			foreach($this -> config -> item('update_post') as $parameters) {
				$this -> execute_method($parameters, 'update_post');
			}
		}
		
		public function test_delete_post() {
			foreach($this -> config -> item('delete_post') as $parameters) {
				$this -> execute_method($parameters, 'delete_post');
			}
		}
		
		public function test_approve_post() {
			foreach($this -> config -> item('approve_post') as $parameters) {
				$this -> execute_method($parameters, 'approve_post');
			}
		}
		
		public function test_hide_post() {
			foreach($this -> config -> item('hide_post') as $parameters) {
				$this -> execute_method($parameters, 'hide_post');
			}
		}
		
		public function test_do_post_action() {
			foreach($this -> config -> item('do_post_action') as $parameters) {
				$this -> execute_method($parameters, 'do_post_action');
			}
		}
		
		public function test_post_not_empty() {
			foreach($this -> config -> item('post_not_empty') as $parameters) {
				$this -> execute_method($parameters, 'post_not_empty');
			}
		}
		
		
		
	}
	