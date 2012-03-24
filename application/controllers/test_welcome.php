<?php

	class Test_welcome extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('welcometester');
		}
		
		public function index() {
			$this -> welcometester -> run_all_tests();
		}
	}