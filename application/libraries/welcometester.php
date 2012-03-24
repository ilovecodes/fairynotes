<?php
	require_once("application/controllers/welcome.php");
	require_once("controllertester.php");
	
	class Welcometester extends Controllertester{
		
		public $welcome_controller;
		
		public function __construct() {
			parent :: __construct('test_welcome');
			$this -> welcome_controller = new Welcome();
		}
		
		public function execute_viewdashboard($parameters) {
			$return_value = $this -> welcome_controller -> viewdashboard($parameters);
			/*echo "return value</br>";
			print_r($return_value);
			echo "expected_results</br>";
			print_r($parameters['expected_result']);*/
			$this -> conditions_passed($parameters['expected_result'], $return_value);
		}
	
		public function test_viewdashboard() {
			foreach($this -> config -> item('viewdashboard') as $parameters) {
				$this -> execute_viewdashboard($parameters);
			}
		}
		
		public function execute_index($parameters) {
			$return_value = $this -> welcome_controller -> index($parameters);
			/*echo "return value</br>";
			print_r($return_value);
			echo "expected_results</br>";
			print_r($parameters['expected_result']);*/
			$this -> conditions_passed($parameters['expected_result'], $return_value);
		}
		
		public function test_index() {
			foreach($this -> config -> item('index') as $parameters) {
				$this -> execute_index($parameters);
			}
		}
	}