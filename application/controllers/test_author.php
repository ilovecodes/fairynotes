<?php
	class Test_author extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('authortester');
		}
		
		public function index() {
			$this -> authortester -> run_all_tests();
		}
	}