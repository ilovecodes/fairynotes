<?php

	class Test_post extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('posttester');
		}
		
		public function index() {
			$this -> posttester -> run_all_tests();
		}
	}