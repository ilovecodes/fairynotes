<?php
	class Test_authors extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('authorstester');
		}
		
		public function index() {
			$this -> authorstester -> run_all_tests();
		}
	}