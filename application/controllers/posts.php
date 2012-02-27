<?php
	class Posts extends Application {
	
		public function __construct() {
			parent::__construct();
			$this -> load -> library(array('pagination','authorization'));
			$this -> load -> helper(array('pagination','date','form','ckeditor',
			                              'view','posts'));
		}
		
		public function index() {
				$this -> ag_auth -> restrict('user');
				posts_index('posts/index');
				load_views(array('posts/index'));
		}
		
		public function view_post($id) {
			$post = new Post();
			$post -> where('id', $id) -> get();
			$author = $post -> author -> get();
			$back_to_posts = anchor(site_url('/posts'),'all posts');
			
			$this -> post_not_empty($post);
			authorize('view', $post, 'posts/index', 'Back To Posts');
			
			$post -> format_post($post); 
			set_variables(array(
								array('name' => 'post', 'value' => $post),
								array('name' => 'view_profile', 'value' => site_url('/authors/view_profile/').$author->id),
								array('name' => 'back_to_posts', 'value' => $back_to_posts)
								)
						  );
			load_views(array('posts/view'));
		}
		
		public function new_post() {
			$this -> ag_auth->restrict('user');
			$user = new User();
			$user -> where('username', username()) -> get();
			$author_id = $user -> author -> get() -> id;
			$post = new Post();
			$post -> author_id = $author_id;
			$this -> mysmarty -> assign('form_fields',create_post_form($post,'posts/create_post'));
			load_views(array('posts/new'));
		}
		
		
		
		public function edit_post($id) {
			$this -> ag_auth -> restrict('user');
			$post = new Post();
			$post -> where('id', $id) -> get();
			
			$this -> post_not_empty($post);
			authorize('edit', $post, site_url('posts/index'), 'Back To Posts');
			
			$this -> mysmarty -> assign('form_fields', 
			                             create_post_form($post,'posts/update_post'));
			
			load_views(array('posts/new'));
		}
		
		public function create_post() {
			$this->ag_auth->restrict('user');
			$post = new Post();
			$post -> populate_using_fields($this -> input -> post());
			
			/*if(user_group('admin')) {
				$post -> is_displayed = 1;
			}*/
			
			
			$post -> is_displayed = 1;
			$post -> date_created = now();
			$post -> date_updated = now();
			
			
			if($post -> save()) {
				$this -> session -> set_flashdata('notice', 'Post successfully created.');
				$this -> load -> model('Facebook_user', 'fbuser');
				$formatted_post = $post -> format_post();
				$options = array('message' => 'Hey I posted something!', 
						         'post_link' => site_url("/posts/view_post/$post->id"),
						         'name' => $post -> title,
								 'caption' => $post -> get_content());
				if(fb_enabled() == "enabled") {
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
		
		public function update_post() {
			$this->ag_auth->restrict('user');
			
			$post = new Post();
			$post -> where('id', $this -> input -> post('id')) -> get();
			
			authorize('update', $post, site_url('/posts'), 'back');
			
			$post -> populate_using_fields($this -> input -> post());
			$post -> date_updated = now();
			
				if($post -> save()) {
					$this -> session -> set_flashdata('notice', 'Post successfully updated.');
					redirect('posts/edit_post/'.$post->id.'/');
				} else {
					$this -> mysmarty -> assign('form_fields', 
				    create_post_form($post,'posts/create_post'));
					load_views(array('posts/new'));
				 }
			
		}
		
		public function delete_post($id, $redirect=true) {
			$this->ag_auth->restrict('user');
			$post = new Post();
			$post -> where('id',$id) -> get();
			
			authorize('delete', $post, site_url('/posts'), 'back to posts');
			
			if($post -> delete()) {
				if($redirect) {
					$this -> session -> set_flashdata('notice', 'Post successfully deleted.');
					redirect('welcome/viewdashboard');
				}
			}
		}
		
		public function approve_post($id,$redirect=true) {
			$this -> ag_auth -> restrict('user');
			$post = new Post();
			$post -> where('id',$id) -> get();
			
			$this -> post_not_empty($post);
			authorize('approve', $post, site_url('/posts'), 'back to posts');
			
			$post -> is_displayed = 1;
			
			if($post -> save()) {
				$this -> session -> set_flashdata('notice', 'Post is successfully 
				                                                 approved for display.');
			}
			
			if($redirect) {
				redirect('posts');
			}
		}
		
		public function hide_post($id, $redirect=true) {
			$this -> ag_auth -> restrict('user');
			$post = new Post();
			$post -> where('id',$id) -> get();
			
			$this -> post_not_empty($post);
			authorize('approve', $post, site_url('/posts'), 'back to posts');
			
			$post -> is_displayed = 0;
				
				if($post -> save()) {
					$this -> session -> set_flashdata('notice', 'Post is successfully 
				                                                 hidden.');
				}
				
				if ($redirect) {
				    redirect('posts');
			    }
		}

		public function manage() {
			$this -> ag_auth -> restrict('user');
			$post = new Post();
			
			authorize('manage',$post,site_url('/'),'back');
			$posts = add_links_to_posts($post -> format_posts
			                            ($post -> get_all_posts('date_created','desc')));
			
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
		
		public function do_post_action($redirect='posts/manage') {
			$this -> ag_auth -> restrict('user');
			authorize('manage', 'Post', site_url('/posts'), 'posts');
			
			$submit_value = $this ->input -> post('submit'); 
			$selected_posts = $this -> input -> post('selected');
			
			if($submit_value == 'Display Selected') {
				$this -> approve_posts($selected_posts);
			} else if($submit_value == 'Hide Selected'){
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
		
		private function post_not_empty($post) {
			if(empty($post->id)) {
				redirect('/posts/postnotfound','refresh');
			}
		}
		
		
	}
?>