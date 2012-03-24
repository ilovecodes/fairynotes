<?php
	
	/* Accepts an array of post attributes */
	function add_links_to_posts($posts) 
	{
		$posts_with_links = array();
		
		foreach($posts as $post) {
			$post_object = new Post();
			$post_object -> id = $post['id'];
			$post_object -> author_id = $post['author_id'];
			$delete = site_url('/').'posts/delete_post/'.$post['id'].'/';
			$view_link = anchor('posts/view_post/'.$post['id'].'/', 'View');
			$title_link = anchor('posts/view_post/'.$post['id'].'/', $post['title']);
			$edit_link = can('edit', $post_object) ? anchor('posts/edit_post/'.$post['id'].'/', 'Edit') : '';
			$delete_link = can('delete', $post_object) ? $delete : '';
			$post['title'] = $title_link;
			$post['view_link'] = $view_link;
			$post['edit_link'] = $edit_link;
			$post['delete_link'] = $delete_link;
			$posts_with_links[] = $post;
		}
		
		return $posts_with_links;
	}
	
	function create_post_form($post, $submit_url) 
	{
			$CI =& get_instance();
			$CI -> load -> helper(array('form', 'ckeditor'));
			
			$form_fields = array();
			
			$form_fields[] = array('label' => '', 
			                       'field' => form_open($submit_url),
								   'error' => '');
			
			$form_fields[] = array('label' => '', 
			                       'field' => form_hidden('id', $post -> id),
								   'error' => '');
			
			$form_fields[] = array('label' => '', 
			                       'field' => form_hidden('author_id', $post -> author_id),
								   'error' => $post -> error -> author_id
								   );
			
			$form_fields[] = array('label' => 'title', 
								   'field' => form_input('title', $post -> title),
								   'error' => $post -> error -> title
								   );
			
			$form_fields[] = array('label' => '',
			                       'field' => form_textarea(array('id' => 'post-content', 
																  'name' => 'content',
																  'value'=> $post -> content)),
								   'error' => $post -> error -> content
								   );
			
			$form_fields[] = array('label' => '', 
			                       'field' => display_ckeditor(
								              setup_ck_editor()),
								   'error' => ''
								  );
			
			$form_fields[] = array('label' => '', 
			                       'field' => form_hidden('date_created',$post -> date_created),
			                       'error' => '');
			
			$form_fields[] = array('label' => '', 
								   'field' => form_submit('submit', 'Submit Post'),
								   'error' => '');
			
			return $form_fields;
	}
	
	function posts_index($url) {
		$CI =& get_instance();
		$quantity = 5;
		$start = $CI -> uri -> segment(3);
		$post = new Post();
		$raw_posts = $post -> get_all_displayed_posts('date_created','desc');
		$formatted_posts = add_links_to_posts($post -> format_posts($raw_posts,true,30,'timespan'));				
		$pagination_links = create_pagination_links(array('items' => $formatted_posts,
				                                          'start' => $start,
														  'per_page' => $quantity,
														  'uri_segment' => '3',
														  'url' => $url
				                                                  )
															);
		$sliced_array = slice_array(array('items' => $formatted_posts,
				                          'start' => $start,
										  'per_page' => $quantity));
				
		/*load view variables*/
		set_variables(array(array('name' => 'articles', 
				                  'value' => $sliced_array),
				                    array('name' => 'logged_in',
									      'value' => logged_in()),
									array('name' => 'pagination', 
									      'value' => $pagination_links)
								   )
							 );
	}
	
	function create_manage_forms($posts) {
			$form_elements = array();
			
			foreach($posts as $post) {
				$indiv_post = new Post();
				$indiv_post -> where('id',$post['id']) -> get(); 
				
				if(can('approve',$indiv_post)) {
					$checkbox = form_checkbox('selected[]', $post['id'], FALSE);
				} else {
					$checkbox = "";
				  }
					$post['checkbox'] = $checkbox;
					$form_elements[] = $post;
			}
			return $form_elements;
	}
	
	function create_user_manage_forms($author) {
				$ci =& get_instance();
				$ci -> load -> helper('form');
				$form_details = array('id' => 'manage-user-posts');
				$post_form = form_open('/posts/do_post_action/welcome-viewdashboard',$form_details);
				$post = new Post();
				
				$approve = form_submit(array('name' => 'submit', 
						                     'value' => 'Display Selected',
											 'class' => 'submit'));
				
				$hide = form_submit(array('name' => 'submit', 
						                  'value' => 'Hide Selected',
										  'class' => 'submit'));
				
				$delete = form_submit(array('name' =>  'submit', 
						                    'value' => 'Delete Selected',
											'class' => 'submit'
						              ));
				
				$posts = add_links_to_posts(create_manage_forms($post -> format_posts
				                            ($author -> get_all_posts())));
				                            
				$edit_author = array('link' => site_url('/').'authors/edit_author/'.$author->id,
				                     'label' => 'Edit Profile');         

			return array('post_form' => $post_form,
						 'approve' => $approve,
						 'hide' => $hide,
						 'delete' => $delete,
						 'posts' => $posts,
						 'edit_author' => $edit_author,
						 'posts' => $posts);
	}
	
?>