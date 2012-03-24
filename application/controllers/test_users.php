<?php

	class Test_users extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library('userstester');
		}
		
		public function index(){
			$this -> userstester -> run_all_tests();
		}
	}