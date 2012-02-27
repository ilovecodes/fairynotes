<?php
	class Authors extends Application {
		public function __construct() {
			parent :: __construct();
			$this -> load -> library(array('authorization'));
			$this -> load -> helper(array('view'));
		}
		
		public function edit_author($id) {
			$this -> ag_auth -> restrict('user');
			$author = new Author();
			$author -> where('id', $id) -> get();
			
			$this -> author_exists($author);
			authorize('edit', $author, site_url('/'), 'back');
			
			$no_name = ($author -> first_name == "first_name") &&
				   ($author -> last_name == "last_name");
			
			$this -> mysmarty -> assign('no_name', $no_name);
			$this -> load -> helper('form_generator');
				
			if($no_name) {
				$author -> first_name = "";
				$author -> last_name = "";
				$no_name_notice = "You haven't entered your name yet. 
					               Please enter your name.";
				$this -> mysmarty -> assign('no_name_notice', $no_name_notice);
			}
				$form = create_author_form($author);
				$this -> mysmarty -> assign('form_fields', $form);
				load_views(array('authors/edit'));
		}
		
		public function update_author() {
			echo "Hello!";
			$author = new Author();
			$author -> where ('id', $this -> input -> post('id')) -> get();
			authorize('edit', $author, site_url('/'), 'back');
			
			$author -> first_name = $this -> input -> post('first_name');
			$author -> last_name = $this -> input -> post('last_name');
			
			if($author -> save()) {
				redirect('welcome/viewdashboard');
			} else {
				$form = create_author_form($author);
				$this -> mysmarty -> assign('form_fields', $form);
				load_views(array('authors/edit'));
			  }
		}
		
		
		public function view_profile($id) {
			$this -> load -> helper(array('posts'));
			$author = null;
			
			if(is_numeric($id)) {
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
			/*if(fb_enabled() == 'enabled') {
				$fb_user = new Facebook_user();
				$this -> mysmarty -> assign('profile_picture_link', $fb_user -> get_picture_url());
			}*/
			$this -> mysmarty -> assign('posts', $posts);
			load_views(array('users/profile'));
		}
		
		private function author_exists($author) {
			if(empty($author -> id)) {
				redirect(site_url('/').'authors/authornotfound','refresh');
			}
 		}
		
		public function authornotfound() {
			load_message('Author Profile not found.','','back');
		}
		
	}
?>