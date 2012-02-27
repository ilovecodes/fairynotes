<?php
	function create_post_form($post,$submit_url) {
			$form_fields = 	 array();
			
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
			                       'field' => form_textarea(array('id' => 'content', 
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
		
	    
		
		function create_author_form($author) {
			$form_fields = array();
			$form_fields[] = array('label' => '', 
								   'form_element' => form_open('/authors/update_author'));
			$form_fields[] = array('label' => '',
			                       'form_element' => form_hidden('id',$author -> id));					   
			$form_fields[] = array('label' => 'First Name',
			                       'form_element' => form_input('first_name',$author -> first_name));
            $form_fields[] = array('label' => 'Last Name', 
			                       'form_element' => form_input('last_name',$author -> last_name));
			$form_fields[] = array('label' => '', 
			                       'form_element' => form_submit('submit', 'Submit'));
		    return $form_fields;
		}
		
		
?>