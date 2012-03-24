<?php
	class Test_posts extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('poststester');
		}
		
		public function index() {
			$this -> poststester -> run_all_tests();
		}
	}