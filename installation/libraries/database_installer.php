<?php

class Database_installer {
	private $db_connection;
	private $session;
	
	public function __construct() {
		$ci =& get_instance();
		$this -> session = $ci -> session;
	}
	
	public function connect() {
		$username = $this -> session -> userdata('db_username');
		$password = $this -> session -> userdata('db_password');
		$host = $this -> session -> userdata('db_host');
		$db_name = $this -> session -> userdata('db_name');
			
		$this -> db_connection = mysql_connect($host, $username, $password) 
		                         or die('oh no!');
		$db_select_success = mysql_select_db($db_name, $this -> db_connection) 
							 or die(mysql_error());
	}
	
	public function add_db_tables() {
		return $this -> execute_query_from_file('./databases/fairynotes.sql');
	}
	
	public function execute_query_from_file($file_name) {
		$success = TRUE;
		if($this -> test_connection()) {
			$queries = explode('--next command--', file_get_contents($file_name));
			
			foreach($queries as $query){
				$query = rtrim( trim($query), "\n;");
				$query_success = mysql_query($query, $this -> db_connection);
		
				if(!$query_success) {
					$success = FALSE;
					echo mysql_error();
				}
			}	
		} else {
			$success = FALSE;
		}
		
		return $success;
	}
	
	public function add_db_data() {
		return $this -> execute_query_from_file('./databases/data.sql');
	}
	
	public function close_connection() {
		mysql_close($this -> db_connection);
	}
	
	public function test_connection() {	
		return !is_null($this -> db_connection);
	}
}