<?php
	class User extends DataMapper {
		var $has_one = array('author','group','theme','facebooktheme');
	
		public function __construct() {
			parent::__construct();
			$this -> group_id = '0';
		}
		
		public function get_user($username) {
			return $this -> where('username', $username) -> get();
		}
		
		public function get_related_author() {
			return $this -> author -> get();
		}
		
		public function get_related_posts() {
			if($this -> exists()) {
				return $this -> get_related_author() -> posts -> get();
			} else {
				return array();
			  }
		}
		
		public function disable($id) {
			$this -> where('id',$id) -> get();
			
			if($this -> exists()) {
				$this -> is_enabled = 0;
				return $this -> save();
			} else {
				return FALSE;
			}
		
		}
		
		public function enable($id) {
			$this -> where('id',$id) -> get();
			
			if($this -> exists()) {
				$this -> is_enabled = 1;
				return $this -> save();
			} else {
				return FALSE;
			}
		}
		
		public function get_role() {
			if($this -> exists()) {
				return $this -> group -> get() -> title;
			} else {
				return '';
			  }
		}
		
		public function toggle_user_group($id, $new_user_group) {
			$this -> where('id', $id) -> get();
			if($this -> exists()) {
				$group = new Group();
				$group -> where('title', $new_user_group) -> get();
				if($group -> exists()) {
					return $this -> save($group);
				} else {
					return FALSE;
				  }
			} else {
				return FALSE;
			  }
			
		}
		
		/*public function change_theme($new_theme_id, $fb_enabled) {
			if($this -> exists()) {
				if($fb_enabled == 'enabled') {
					$fb_theme = new FacebookTheme();
					$fb_theme -> where('id', $new_theme_id) -> get();
					
					return $this -> save($fb_theme);
					
				} else if($fb_enabled == 'disabled') {
					$theme = new Theme();
					$theme -> where('id', $new_theme_id) -> get();
					
					return $this -> save($theme);
				}
			} else {
				return FALSE;
			}
			
		}*/
		
		public function get_user_theme($fb_enabled) {
			
			if($this -> exists()) {
				if($fb_enabled == 'enabled') {
					$theme_name = $this -> facebooktheme -> get() -> name;
				} else if($fb_enabled == 'disabled') {
					$theme_name = $this -> theme -> get() -> name;
				}
			} else {
				if($fb_enabled == 'enabled') {
					$theme_name = 'facebook_kiuch';
				} else if($fb_enabled == 'disabled') {
					$theme_name = 'nodame';
				}
			}
			
			return $theme_name;
		}
		
		public function set_user_theme($theme_id, $fb_enabled) {
		
			if($this -> exists()) {
				$theme =  ($fb_enabled == 'enabled') ? new Facebooktheme() : new Theme();
				$theme -> where('id', $theme_id) -> get(); 
				
				if($theme -> exists()) {
					return $this -> save($theme);
				} else {
					return FALSE;
				}
			} else {
				return FALSE;
			}
		}
		
		public function count_admins() {
			return $this -> where('group_id', 1) -> get() -> count();
		}
		
		public function equals($user) {
			if($user -> exists()) {
				return $this -> username == $user -> username;
			} else {
				return FALSE;
			}
		}
	}
	
?>