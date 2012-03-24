<?php

	/*
		POSTS CONTROLLER
		Author: ilovecodes
	*/
	
	class Posts extends Application {
		public $post;
		
		public function __construct() {
			parent::__construct();
			$this -> load -> library(array('pagination','authorization'));
			$this -> load -> helper(array('pagination','date','form','ckeditor',
			                              'view','posts'));
			$this -> post = new Post();
		}
	
		//loads all posts, but not so useful :)
		public function index() {
				$this -> ag_auth -> restrict('user');
				posts_index('posts/index');
				load_views(array('posts/index'));
		}
		
		//as the name implies, the method views a post given a particular id
		public function view_post($id=0) {
			$this -> post -> where('id', $id) -> get();
			$this -> post_not_empty();
			
			$back_to_posts = anchor(site_url('/posts'),'all posts');
			$author = $this -> post -> author -> get();
			
			authorize('view', $this -> post, 'posts/index', 'Back To Posts');
			
			$this -> post -> format_post($this -> post); 
			
			set_variables(array(
								array('name' => 'post', 'value' => $this -> post),
								array('name' => 'view_profile', 
									  'value' => site_url('/authors/view_profile/').$author->id),
								array('name' => 'back_to_posts', 
									  'value' => $back_to_posts)
								)
						  );
			load_views(array('posts/view'));
		}
		
		public function new_post() {
			$this -> ag_auth->restrict('user');
			
			$user = new User();
			$user -> where('username', username()) -> get();
			$author_id = $user -> author -> get() -> id;
			$this -> post -> author_id = $author_id;
			
			$this -> mysmarty -> assign('form_fields',
									     create_post_form($this -> post,'posts/create_post'));
			
			load_views(array('posts/new'));
		}
		
		
		//edits post given an id
		public function edit_post($id) {
			$this -> ag_auth -> restrict('user');
			$this -> post -> where('id', $id) -> get();
			
			$this -> post_not_empty();
			authorize('edit', $this -> post, site_url('posts/index'), 'Back To Posts');
			
			$this -> mysmarty -> assign('form_fields', 
			                             create_post_form($this -> post,'posts/update_post'));
			
			load_views(array('posts/new'));
		}
		
		//creates a post using the form data submitted from new_post()
		public function create_post()
		{			
			$this->ag_auth->restrict('user');
			
			if($this -> input -> post()) {
				$this -> post -> populate_using_fields($this -> input -> post());
			
				$save_success = $this -> post -> save();
			
			
				if($save_success) {
					$this -> session -> set_flashdata('notice', 'Post successfully created.');
					$formatted_post = $this -> post -> format_post();
					$options = array('message' => 'Hey I posted something!', 
									 'post_link' => site_url("/posts/view_post/$this->post->id"),
									 'name' => $this -> post -> title,
									 'caption' => $this -> post -> get_content());
				
					$fb_enabled = fb_enabled() == 'enabled';
			
					if($fb_enabled) {
						$this -> load -> model('Facebook_user', 'fbuser');
						$this -> fbuser -> post_to_feed($options);
					}
						redirect('welcome/viewdashboard','refresh');
				} else {
					$this -> mysmarty -> assign('form_fields', 
												 create_post_form($post,'posts/create_post'));
					$this -> mysmarty -> assign('has_errors',true);
					load_views(array('posts/new'));
				}
			}
		}
		
		//updates post using the form data submitted from edit_post()
		public function update_post()
		{	
		
			$this->ag_auth->restrict('user');
			
			if($this -> input -> post()) {
				$this -> post -> where('id', $this -> input -> post('id')) -> get();
			
				authorize('update', $this -> post, site_url('/posts'), 'back');
			
				$this -> post -> populate_using_fields($this -> input -> post());
				$this -> post -> date_updated = now();
			
				$post_saved = $this -> post -> save();
				
				if($post_saved) {
					$this -> session -> set_flashdata('notice', 'Post successfully updated.');
					redirect('posts/edit_post/'.$this -> post -> id.'/');
				} else {
					$this -> mysmarty -> assign('form_fields', 
				    create_post_form($this -> post,'posts/create_post'));
					load_views(array('posts/new'));
				 }
			}
		}
		
		//deletes a post given the id and if redirect is set to true, the
		//method automatically redirects
		public function delete_post($id=0, $redirect = true)
		{	
			$this->ag_auth->restrict('user');
			
			$this -> post -> where('id',$id) -> get();
			$this -> post_not_empty();
			
			//makes sure that user accessing this method can delete posts
			authorize('delete', $this -> post, site_url('/posts'), 'back to posts');
			
			$deletion_successful = $this -> post -> delete();
			
			if($deletion_successful) {
				if($redirect) {
					$this -> session -> set_flashdata('notice', 'Post successfully deleted.');
					redirect('welcome/viewdashboard');
				}
			}
		}
		
		//approves a post given the id and if redirect is set to true, the
		//method automatically redirects
		public function approve_post($id=0, $redirect=true) 
		{	
			
			$this -> ag_auth -> restrict('user');
			$this -> post -> where('id',$id) -> get();
			
			$this -> post_not_empty();
			authorize('approve', $this -> post, site_url('/posts'), 'back to posts');
			
			$this -> post -> is_displayed = 1;
			
			$post_saved = $this -> post -> save();
			
			if($post_saved) {
				$this -> session -> set_flashdata('notice', 'Post is successfully 
				                                                 approved for display.');
			}

			if($redirect) {
				$user_role = current_user() -> get_role(); 
				$own_post = $this -> post -> own_post(current_author());
				if($user_role == 'admin' && !$own_post) {
					redirect('posts/manage');
				} else {
					redirect('welcome/viewdashboard');
				}
			}
		}
		
		//hides a post given the id and if redirect is set to true, the
		//method automatically redirects
		public function hide_post($id=0, $redirect=true)
		{
			$this -> ag_auth -> restrict('user');
			$this -> post -> where('id',$id) -> get();
			
			$this -> post_not_empty($post);
			authorize('approve', $this -> post, site_url('/posts'), 'back to posts');
			
			$this -> post -> is_displayed = 0;
			$post_saved = $this -> post -> save();
			
			
			if($post_saved) {
				$this -> session -> set_flashdata('notice', 'Post is successfully 
				                                                 hidden.');
			}
				
			if ($redirect) {
				redirect('posts');
			}
		}

		//lets admin manage posts
		public function manage() {
			$this -> ag_auth -> restrict('user');
			authorize('manage', $this -> post, site_url('/'),'back');
			$posts = add_links_to_posts($this -> post -> format_posts
			                            ($this -> post -> get_all_posts('date_created','desc')));
			
			$post_form = create_manage_forms($posts);
			$form = form_open('/posts/do_post_action');
			$approve = form_submit('submit', 'Display Selected');
			$delete = form_submit('submit', 'Hide Selected');
			
			set_variables(array(
									array('name' => 'form', 'value' => $form),
									array('name' => 'form_elements', 'value' => $post_form),
									array('name' => 'approve', 'value' => $approve),
									array('name' => 'delete', 'value' => $delete)
								)
						   );
			load_views(array('posts/manage'));
		}
		
		//does action based on for submitted from manage()
		public function do_post_action($redirect='posts/manage')
		{
			
			$this -> ag_auth -> restrict('user');
			authorize('manage', 'Post', site_url('/posts'), 'posts');
			
			$submit_value = $this ->input -> post('submit'); 
			$selected_posts = $this -> input -> post('selected');
			
			if($submit_value == 'Display Selected') {
				$this -> approve_posts($selected_posts);
			} else if($submit_value == 'Hide Selected') {
				$this -> hide_posts($selected_posts);
			  } else if($submit_value == 'Delete Selected') {
			  		$this -> delete_posts($selected_posts);
			  	}
			redirect(dashed_to_url($redirect));
		}
		
		private function hide_posts($selected_posts) {
			foreach($selected_posts as $selected_post) {
					$this -> hide_post($selected_post,false);
			}
		}
		
		private function approve_posts($selected_posts) {
			foreach($selected_posts as $selected_post) {
					$this -> approve_post($selected_post,false);
			}
		}
		
		private function delete_posts($selected_posts) {
			foreach($selected_posts as $selected_post) {
				$this -> delete_post($selected_post,false);
			}
		}
		
		public function postnotfound() {
			load_message('Post Not Found', 'posts', 'back to posts');
		}
		
		
		public function post_not_empty()
		{
			$post_is_empty = !$this -> post -> exists();
			if($post_is_empty) {
				redirect('/posts/postnotfound','refresh');
			}
		}
	}
//end of posts.php