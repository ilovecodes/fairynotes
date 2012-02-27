<?php
	
	class Authorization {
		public function is_authorized_to_edit($post) {
			$is_authorized = $this -> user_owns_post($post);
						     //|| $this -> is_admin();
			return $is_authorized;
		}
		
		public function is_authorized_to_view($post) {
			$is_authorized = $post -> is_displayed || 
			                 $this -> user_owns_post($post) || 
							 $this -> is_admin();
		    return $is_authorized;
		}
	
		public function is_admin() {
			return user_group('admin');
		}
	
		public function user_owns_post($post) {
			$author = $post -> author -> get();
			$user = $author -> user -> get();
			$same_user = username() == $user -> username;
			return $same_user;
		}
		
		public function is_self($object, $anotherobject) {
			if($object && $anotherobject) {
				return ($object -> id == $anotherobject -> id);
			} else {
				return false;
			  }
		}
		
		public function same_author($author) {
			$user = new User();
			$user -> where('username',username()) -> get(); 
			$user_author = $user -> author -> get();
			return $this -> is_self($user_author, $author);
		}
	}
?>