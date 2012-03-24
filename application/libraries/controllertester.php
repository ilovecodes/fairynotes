<?php
	require_once('modeltester.php');
	class Controllertester extends Modeltester {
		protected $controller;
		
		public function __construct($file_name) {
			parent :: __construct($file_name);
		}
		
		protected function execute_method($parameters, $method_name) {
			$return_value = $this -> controller -> $method_name($parameters);
			echo "</br>expected result</br>";
			print_r($parameters['expected_result']);
			echo "</br>return value:</br>";
			print_r($return_value);
			$this -> conditions_passed($parameters['expected_result'], $return_value);
		}
		
		protected function conditions_passed($expected_results, $results) {
			$is_equal = TRUE;
			foreach($expected_results as $key => $value) {
				$null_expected_results = is_null($value);
				
				if(!$null_expected_results) {
						$this -> assertEqual($results[$key], $value);
				} else {
						$this -> assertNull($results[$key]);
				}
			} 
			
			return $is_equal;
		}
	}