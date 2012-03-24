<?php
	require_once('application/controllers/users.php');
	require_once('controllertester.php');
	
	class Userstester extends Controllertester {
		public function __construct() {
			parent :: __construct('test_users');
			$this -> controller = new Users();
		}
		
		public function test_manage() {
			foreach($this -> config -> item('manage') as $parameters) {
				$this -> execute_method($parameters, 'manage');
			}
		}
		
		public function test_delete_all() {
			foreach($this -> config -> item('delete_all') as $parameters) {
				$this -> execute_method($parameters, 'delete_all');
			}
		}
	}