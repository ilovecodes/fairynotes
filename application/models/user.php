<?php
	class User extends DataMapper {
		var $has_one = array('author','group','theme','facebooktheme');
	
		public function __construct() {
			parent::__construct();
			$this -> group_id = '0';
		}
		
		public function get_related_author() {
			return $this -> author -> get();
		}
		
		public function get_related_posts() {
			return $this -> get_related_author() -> posts -> get();
		}
		
		public function disable($id) {
			$this -> where('id',$id) -> get();
			$this -> is_enabled = 0;
			return $this -> save();
		}
		
		public function enable($id) {
			$this -> where('id',$id) -> get();
			$this -> is_enabled = 1;
			return $this -> save();
		}
		
		public function get_role() {
			return $this -> group -> get() -> title;
		}
		
		public function toggle_user_group($id, $new_user_group) {
			$this -> where('id', $id) -> get();
			$group = new Group();
			$group -> where('title', $new_user_group) -> get();
			return $this -> save($group);
		}
		
		public function change_theme($new_theme_id) {
			if(fb_enabled() == 'enabled') {
				$fb_theme = new FacebookTheme();
				$fb_theme -> where('id', $new_theme_id) -> get();
				return $this -> save($fb_theme);
			} else if(fb_enabled() == 'disabled') {
				$theme = new Theme();
				$theme -> where('id', $new_theme_id) -> get();
				return $this -> save($theme);
			}
		}
		
		public function get_user_theme() {
			$theme_name = 'nodame';
			
			if(fb_enabled() == 'enabled') {
				$theme_name = $this -> facebooktheme -> get() -> name;
			} else if(fb_enabled() == 'disabled') {
				$theme_name = $this -> theme -> get() -> name;
			}
			
			return $theme_name;
		}
		
		public function set_user_theme($theme_id) {
			$theme =  (fb_enabled() == 'enabled') ? new Facebooktheme() : new Theme();
			$theme -> where('id', $theme_id) -> get(); 
			
			return $this -> save($theme);
		}
	}
	
?>