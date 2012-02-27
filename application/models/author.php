<?php
	class Author extends DataMapper {
		var $has_many = array('post');
		var $has_one = array('user');
		var $validation = array('first_name' => array('label' => 'First Name', 
		                                             'rules' => array('required')),
								'last_name' => array('label' => 'Last Name',
								                     'rules' => array('required')));
		
		public function get_related_posts() {
			return $this -> posts -> where('is_displayed', 1) -> get();
		}
		
		public function get_all_posts() {
			return $this -> posts -> get();
		}
		
		public function get_author_full_name() {
			return $this -> first_name. ' ' .$this -> last_name;
		}
		
		public function new_author($author_details) {
			$this -> first_name = $author_details['first_name'];
			$this -> last_name = $author_details['last_name'];
			$this -> save($author_details['user']);
		}
	}
?>