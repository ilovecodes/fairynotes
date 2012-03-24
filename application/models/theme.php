<?php
	class Theme extends DataMapper {
		
		//var $default_theme = 'nodame';
		var $has_many = array('user');
		
		public function get_all_themes($order_by = 'id', $order = 'asc') {
			return $this -> order_by($order_by, $order) -> get();
		}
		
		/*public static function get_default_theme() {
			return 'nodame';
		}
		
		/*public function __construct() {
			parent::__construct();
			$ci =& get_instance();
			$this -> get_selected_theme();
		}
		
		public function get_selected_theme() {
			$is_selected;
			
			if (fb_enabled() == 'enabled') {
				$is_selected = 'is_fb_selected';
			} else {
				$is_selected = 'is_selected';
			  }
			
			$theme_name = $this -> selected_theme = $this -> where("$is_selected", 1) -> get() -> name;
			
			return $theme_name;
		}
		
		public function get_all_themes($order_by = 'id', $order = 'asc') {
			return $this -> order_by($order_by, $order) -> get();
		}
		
		public function switch_theme($new_selected_theme_id) {
			$this -> where('is_selected', 1) -> get();
			$this -> is_selected = 0;
			$this -> save();
			$this -> where('id', $new_selected_theme_id) -> get();
			$this -> is_selected = 1;
			$this -> save();
		}*/
	}
?>