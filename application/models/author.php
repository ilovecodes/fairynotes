<?php

	//For more details, please see datamapper for codeigniter documentation
	
	class Author extends DataMapper {
		var $has_many = array('post'); //an author has many posts
		var $has_one = array('user');  //an author belongs to one user
		
		//first name is required
		//last name is required
		
		var $validation = array('first_name' => array('label' => 'First Name', 
		                                             'rules' => array('required')),
								'last_name' => array('label' => 'Last Name',
								                     'rules' => array('required')));
		
		
		/*
		 * 	What is it: get_related_posts()
		 *	What it does: get all author's displayed posts
		 *	What it asks: none
		 *	What it returns: - an array of post objects if author is in the database
		 *					 - an empty array if author does not exist
		 *	TODO: rename and do regression test
		 */
		
		public function get_related_posts() { 
			if($this -> exists()) {
				return $this -> posts -> where('is_displayed', 1) -> get();
			} else {
				return array();
			}
		}
		
		/*
		 * 	What is it: get_all_posts()
		 *	What it does: get all author's posts
		 *	What it asks: none
		 *	What it returns: - an array of post objects if author is in the database
		 *					 - an empty array if author does not exist
		 */
		 
		public function get_all_posts() {
			if($this -> exists()) {
				return $this -> posts -> get();
			} else {
				return array();
			}
		}
		
		/*
		 * 	What is it: get_author_full_name()
		 *	What it does: combines author's first_name and last_name attribute to
						  form a complete name
		 *	What it asks: none
		 *	What it returns: - a nonempty string if author exists in the database
							 - an empty string is author does not exist
		 */
		public function get_author_full_name() {
			if($this -> exists()) {
				return $this -> first_name. ' ' .$this -> last_name;
			} else {
				return "";
			}
		}
		
		/*
		 * 	What is it: populate_using_fields()
		 *	What it does: sets the instance variable of the object 
						  using an associative array
		 *	What it asks: an associative array
		 *	What it returns: - TRUE if the array is not empty
							 - FALSE if the array is empty
		 */
		public function populate_using_fields($fields = array()) {
			$fields_not_empty = !empty($fields);
			
			if($fields_not_empty) {
				$this -> first_name = $fields['first_name'];
				$this -> last_name = $fields['last_name'];
			}
			return $fields_not_empty;
		}
		
	}
?>