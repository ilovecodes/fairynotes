<?php
	require_once('simpletest/unit_tester.php');
	require_once('simpletest/reporter.php');
	
	class Modeltester extends UnitTestCase {
		protected $ci;
		protected $config;
		protected $test_to_be_executed;
		protected $inputs;
		
		public function __construct($config_file_name = "") { 
			parent :: __construct();
			$this -> ci =& get_instance();
			
			if(!empty($config_file_name)) {
				$this -> ci -> config -> load($config_file_name);
				$this -> config = $this -> ci -> config;
			}
		
		}
		
		public function getTests() {
			return $this -> tests_to_be_executed;
		}
		
		public function set_tests($tests) {
			$this -> tests_to_be_executed = $tests;
		}
		
		public function run_all() {
			$this -> run(new HtmlReporter());
		}
		
		public function run_all_tests() {
			$this -> set_tests(parent :: getTests()); 
			$this -> run_all();
		}
		public function set_input_array($inputs) {
				foreach($this ->inputs as $key => $value) {
					if(array_key_exists($key, $inputs)) {
						$this ->inputs[$key] = $inputs[$key];
					}
				}			
		}
	}
?>