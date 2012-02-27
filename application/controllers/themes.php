<?php
	class Themes extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> ag_auth -> restrict('user');
			$this -> load -> helper('theme');
		}
		
		public function configure() {
			$form = load_edit_theme_form();
			$this -> mysmarty -> assign('form',$form);
			load_views(array('themes/edit'));
		}
		
		public function update_theme() {
			current_user() -> set_user_theme($this -> input -> post('theme'));
			$this -> session -> set_flashdata('notice',get_theme_name()." theme has been selected.");
			redirect('themes/configure');
		}
	}
?>