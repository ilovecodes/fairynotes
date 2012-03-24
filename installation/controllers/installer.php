<?php

	class Installer extends CI_controller {
	
		public function __construct() {
			parent :: __construct(); 
			$this -> load -> helper('form');
			$this -> load -> library('database_installer');
			$this -> load -> library('file_handler');
		}
		
		public function index() {
			if(file_exists('../application/config/database.php')) {
				$this -> installation_complete();
			} else {
				$this -> ask_db_credentials();
			}
		}
		
		public function ask_db_credentials() {
			$this -> session -> set_userdata('ask_db_credentials', TRUE);
			
			$form_open = form_open('installer/setup_db_credentials');
			
			$username = array('label' => 'username', 'field' => form_input('username',''));
			$host = array('label' => 'host', 'field' => form_input('host',''));
			$password = array('label' => 'password', 'field' => form_password('password',''));
			$port = array('label' => 'port', 'field' => form_input('port','3306'));
			$submit_form = form_submit('submit', 'submit');
			
			$data = array();
			$data['form_open'] = $form_open;
			$data['fields'] = array($username, $password, $host, $port);
			$data['submit_form'] = $submit_form;
			$this -> load -> view('setup_form', $data);
		}
		
		public function setup_db_credentials() {
			
			if($this -> input -> post() && $this -> session -> userdata('ask_db_credentials')) {
				$username = $this -> input -> post('username');
				$password = $this -> input -> post('password');
				$host = $this -> input -> post('host');
				$port = $this -> input -> post('port');
			
				$connection = mysql_connect($host, $username, $password);
			
				if($connection) {
					$this -> session -> set_userdata('db_username', $username);
					$this -> session -> set_userdata('db_password', $password);
					$this -> session -> set_userdata('db_host', $host);
					$this -> session -> set_userdata('db_port', $port);
				
					$this -> session -> set_userdata('db_credentials_added', TRUE);
					mysql_close($connection);
					redirect('installer/fill_db_details','refresh');
				} else {
					redirect('installer/ask_db_credentials', 'refresh');
				}
			} else {
				redirect('installer/index');
			}
			
			$this -> session -> set_userdata('setup_db_credentials', TRUE);
		}
		
		public function fill_db_details() {
			//if($this ->)
				$form_open = form_open('installer/setup_db');
				$db_name = array('label' => 'db_name', 'field' => form_input('db_name',''));
				$submit_form = form_submit('submit', 'submit');
			
				$data = array();
				$data['form_open'] = $form_open;
				$data['fields'] = array($db_name);
				$data['submit_form'] = $submit_form;
			
				$this -> load -> view('setup_form', $data);
		}
		
		public function setup_db() {
			$username = $this -> session -> userdata('db_username');
			$password = $this -> session -> userdata('db_password');
			$host = $this -> session -> userdata('db_host');
			$db_name = $this -> input -> post('db_name');
			
			$connection = mysql_connect($host, $username, $password); 
			$query = "CREATE DATABASE $db_name";
			$success = mysql_query($query, $connection);
			
			if($success) {
				mysql_select_db($db_name, $connection);
				mysql_close($connection);
				$this -> session -> set_userdata('db_name', $db_name);
				redirect('installer/add_tables');
			} else {
				redirect('installer/fill_db_details');
			}
		}
		
		public function add_tables() {
			$this -> database_installer -> connect();
			$this -> database_installer -> test_connection();
			if ($this -> database_installer -> add_db_tables() && 
				$this -> database_installer -> add_db_data()) {
				redirect('installer/write_to_file');
			}
		}
		
		public function write_to_file() {
			if($this -> file_handler -> write_db_config()) {
				redirect('installer/installation_complete');
			}
		}
		
		public function installation_complete() {
			$this -> session -> sess_destroy();
			$site_url = site_url();
			$site_url = str_replace('/installation/index.php', "", $site_url);
			echo "Hey! installation is done, dude! Click ";
			echo anchor($site_url, 'me');
			echo ' to go to your blog. :)';
		}
}