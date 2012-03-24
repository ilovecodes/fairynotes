<?php
	
	class Test_user extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('usertester');
		}
		
		public function index() {
			$this -> usertester -> run_all_tests();
			$this -> usertester -> run_all();
		}
		
		public function test_get_user() {
			$parameters = array('username' => 'iaminvalid', 'expected_result' => FALSE);
			$this -> usertester -> set_user_array($parameters);
			$this -> usertester -> set_tests(array('execute_get_user'));
			$this -> usertester -> run_all();
		}
		
	}