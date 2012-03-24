<?php
	class Authors extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library(array('authorization'));
			$this -> load -> helper(array('view'));
		}
		
		public function edit_author($id=0)
		{ 
			
			$this -> ag_auth -> restrict('user');
			$author = new Author();
			$author -> where('id', $id) -> get();
			$this -> author_exists($author);
			authorize('edit', $author, site_url('/'), 'back');
			
			$no_name = ($author -> first_name == "first_name") &&
				   ($author -> last_name == "last_name");
			
			$this -> mysmarty -> assign('no_name', $no_name);
			$this -> load -> helper('form_generator');
			
			//$no_name = $parameters['no_name'];	
			
			if($no_name) {
				//$responses['no_name'] = TRUE; 
				$author -> first_name = "";
				$author -> last_name = "";
				$no_name_notice = "You haven't entered your name yet. 
					               Please enter your name.";
				$this -> mysmarty -> assign('no_name_notice', $no_name_notice);
			}
				$form = create_author_form($author);
				$this -> mysmarty -> assign('form_fields', $form);
				load_views(array('authors/edit'));
				
				//return $responses;
		}
		
		public function update_author() 
		{
			
			$author = new Author();
			$author -> where ('id', $this -> input -> post('id')) -> get();
			authorize('edit', $author, site_url('/'), 'back');
			
			$author -> populate_using_fields($this -> input -> post());
			$author_saved = $author -> save();
			
			if($author_saved) {
				redirect('welcome/viewdashboard');
			} else {
				$form = create_author_form($author);
				$this -> mysmarty -> assign('form_fields', $form);
				load_views(array('authors/edit'));
			  }
		}
		
		
		public function view_profile($id=0)
		{ 
			$this -> load -> helper(array('posts'));
			$author = null;
			$id_is_numeric = is_numeric($id);
			
			if($id_is_numeric) {
				$author = new Author();
				$author -> where('id', $id) -> get();
			} else {
				$user = new User();
				$user -> where('username', $id) -> get();
				$author = $user -> author -> get();
			}
			  
			$this -> author_exists($author);
			$this -> mysmarty -> assign('author_name', $author 
			                                           -> get_author_full_name());
			$post = new Post();
			$posts = add_links_to_posts($post -> format_posts($author -> get_related_posts()));
			$fb_enabled = fb_enabled() == 'enabled';
			
			if($fb_enabled) {
				$fb_user = new Facebook_user();
				$fb_user_profile = $fb_user -> get_profile_details($author -> user -> get());
				$this -> mysmarty -> assign('profile_picture_link', $fb_user_profile['picture_url']);
				$this -> mysmarty -> assign('biography', $fb_user_profile['bio']);
				$this -> mysmarty -> assign('quotes', $fb_user_profile['quotes']);
			}
			
			$this -> mysmarty -> assign('posts', $posts);
			load_views(array('users/profile'));
		}
		
		private function author_exists($author)
		{
			$author_exists = $author -> exists();
			
			if(!$author_exists) {
				redirect(site_url('/').'authors/authornotfound','refresh');
			}
 		}
		
		public function authornotfound() {
			load_message('Author Profile not found.','','back');
		}
		
	}
?>