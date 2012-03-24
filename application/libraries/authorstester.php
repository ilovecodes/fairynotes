<?php
	require_once('application/controllers/authors.php');
	require_once('controllertester.php');
	
	class Authorstester extends Controllertester {
		public function __construct() {
			parent :: __construct('test_authors');
			$this -> controller = new Authors();
		}
		
		public function test_edit_author() {
			foreach($this -> config -> item('edit_author') as $parameters) {
				$this -> execute_method($parameters,'edit_author');
			}
		}
		
		public function test_update_author() {
			foreach($this -> config -> item('update_author') as $parameters) {
				$this -> execute_method($parameters,'update_author');
			}
		}
		
		public function test_view_profile() {
			foreach($this -> config -> item('view_profile') as $parameters) {
				$this -> execute_method($parameters,'view_profile');
			}
		}
		
		public function test_author_exists() {
			foreach($this -> config -> item('author_exists') as $parameters) {
				$this -> execute_method($parameters,'author_exists');
			}
		}
	}