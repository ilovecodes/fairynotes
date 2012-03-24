<?php
	class Post extends DataMapper {
	
		var $ci;
		var $has_one = array('author'); 
		var $validation = array( array('field' => 'title',
									   'label' => 'Title', 
		                               'rules' => array('required')
									   ),
								 array('field' => 'content',
								       'label' => 'Post Content',
									   'rules' => array('required')
								       ),
								 array('field' => 'date_created', 
								          'label' => '', 
										  'rules' => array()),
								 array('field' => 'author_id',
								           'label' => '', 
										   'rules' => array('required', 'valid_author'),
								       ),
								 array('field' => 'date_updated',
								       'label' => '',
									   'rules' => array())
								);
		
		public function __construct() {
			parent::__construct();
			$this -> ci =& get_instance();
			$this -> load -> helper('date');
		}
		
		function _valid_author($field) {
			$author = new Author();
			$author -> where('id', $this -> {$field}) -> get();
			
			if($author -> exists()) {
				return TRUE;
			} else {
				return FALSE;
			}
		}
	
		
		public function populate_using_fields($array) {
			$this -> title = $array['title'];
			$this -> content = $array['content'];
			$this -> author_id = $array['author_id'];
			
			if(empty($this -> date_created)) {
				$this -> date_created = now();
			} 
			
			$this -> date_updated = now();
			
			if($this -> date_created == $this -> date_updated) {
				$this -> is_displayed = 1;
			}
		}
		
		
		public function get_all_posts($order_by = 'id', 
									  $order= 'asc') {
			return $this -> order_by($order_by, $order) -> get(); 
		}
		
		public function get_all_displayed_posts($order_by = 'id', $order='asc') {
			return $this -> where('is_displayed',1) -> 
			                order_by($order_by, $order) -> 
							get();  
		}
		
		public function get_all_hidden_posts($order_by = 'id', $order='asc') {
			return $this -> where('is_displayed', 0) ->
			                order_by($order_by, $order) -> 
							get();
		}
		
		//returns an ARRAY of formatted posts
		public function format_posts($posts,
		                             $shorten_content=true,
									 $no_of_words=20,
		                             $date_formatting='standard', 
		                             $standard_date_type='DATE_COOKIE') 
		{
			
			
			$formatted_posts = array();
			
			foreach($posts as $post) {
				$id = $post -> id;
				$title = $post -> title;
				$author = $post -> author -> get();
				$author_id = $author -> id;
				$author_name = anchor("authors/view_profile/$author->id",$author -> get_author_full_name());
				$status = $post -> status_to_word();
				$content = $post -> get_content($shorten_content,$no_of_words);
				
				$date_created = $post -> format_date('created', $date_formatting,
				                                     $standard_date_type);
				
				$date_updated = $post -> format_date('updated', $date_formatting,
				                                     $standard_date_type);
				
				$formatted_posts[] = array('title' => $title, 
										   'author' => $author_name, 
										   'date_created' => $date_created, 
										   'date_updated' => $date_updated,
									       'status' => $status, 
										   'content' => $content,
										   'id' => $id,
										   'author_id' => $author_id);
			}
			
			return $formatted_posts;
		}
		
		
		public function format_date($type='created',
		                            $date_formatting='standard',
									$standard_date_type='DATE_COOKIE',
									$time_zone = 'UP8') 
		{
			if($this -> exists()) {
			$date_to_format = $type == 'created' ? $this -> date_created
			                                     : $this -> date_updated;
			$date_string = "%F %d, %Y";
			
			if($date_formatting == 'standard') {  
				$date_to_format = mdate($date_string, $date_to_format);
			} else if($date_formatting == 'timespan') {
				$date_timespan = strtolower(timespan($date_to_format, time()));
				if(strpos($date_timespan, 'day') || strpos($date_timespan, 'month') || 
				   strpos($date_timespan, 'year') || strpos($date_timespan, 'week')) {
					$date_string = "%F %d, %Y";
					$date_to_format = mdate($date_string, $date_to_format);
				} else {
					$time_to_show = '';
					$date_to_format = display_time($date_to_format, $time_to_show);
				  }
		      }
			} else {
				$date_to_format = '';
			}
			return $date_to_format;
		}
		
		
		
		/**/
		
		public function get_content($shorten_content=true,$no_of_words=30) 
		{
			if($this -> exists()) {
			$this -> ci -> load -> helper('text');
			$content = $shorten_content ? word_limiter(strip_tags($this -> content, 
			                                                      $no_of_words)) 
				                        : $this -> content;
			} else {
				$content = '';
			}
			return $content;
		}
		
		public function status_to_word() 
		{
			if($this -> exists()) {
			$status = $this -> is_displayed == 1 ? 'displayed' 
			                                     : 'hidden';
			} else {
				$status = '';
			}
			return $status;
		}
		
		public function get_post($id=0) {
			$this -> where('id',$id) -> get();
			return $this -> exists();
		}
		
		public function format_post() {
			if($this -> exists()) {
				$this -> author_name = $this -> author -> get_author_full_name();
				$this -> date_created = $this -> format_date('created');
				$this -> date_updated = $this -> format_date('updated');
			}
		}
		
		public function own_post($author) {
			return $this -> post -> id == $author -> id;
		}
	}
?>