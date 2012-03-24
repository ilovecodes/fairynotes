<?php

class Users extends Application
{
	
	public function __construct()
	{
		parent::__construct();
		
	}
	
	public function manage()//$parameters = array()) //TODO: make this clean!
	{
		
		authorize('manage','User', '', 'back');
		$table_headers = array('Username', 'Name', 'Email', 
		                       'Status', '', 'Actions', '','');
		$table_rows = array();
		$user = new User();
		$user -> get();
		
		
		foreach($user as $individual_user)
		{
			$author = $individual_user -> author -> get(); 
			$name =  $author -> first_name . ' ' .$author -> last_name;
			$edit_command = can('edit', $author) ? anchor_popup("authors/edit_author/".$author -> id."/", "Edit") : '';
			$status = $individual_user -> is_enabled == 0 ? 'disabled' : 'enabled';
			$is_user = $individual_user -> group -> get() -> title == "user";
			$own_account = $individual_user -> username == username();
			
			if($is_user) {
				$enable = $status == 'disabled' ? 'enable' : 'disable';
				$disable_command = anchor("users/$enable/".$individual_user -> id.
				                  "/", "$enable account"); // Build actions links
				$delete_all_command = array('link' => site_url('/')."users/delete_all/".$individual_user -> id.
				                  "/", 'label' => "Delete All User-related Content");
				$make_admin_command = anchor("users/make_admin/"
								.$individual_user -> id."/", "Make Admin");
			} else if ($own_account) {
				$disable_command = "current user";
				$delete_all_command = array('link' => '', 'label' => "current user");
				$make_admin_command = "";
			  } else {
					$disable_command = "";
					$delete_all_command = array('link' => '', 'label' => "");
					$make_admin_command = anchor("users/make_user/"
	                .$individual_user -> id."/", "Make Author");
				}
				
			$table_rows[] = array('username' => $individual_user -> username, 
			                      'name' => $name, 
								  'email' => $individual_user -> email, 
			                      'status' => $status,
			                      'make_admin' => $make_admin_command, 
								  'edit' => $edit_command, 
			                      'disable' => $disable_command, 
			                      'delete_all' => $delete_all_command); // Adding row to table
				
		}
		$this -> mysmarty -> assign('table_rows',$table_rows);
		$this -> mysmarty -> assign('table_headers',$table_headers);
		$this -> mysmarty -> assign('register_user',anchor('users/register','new user'));
		load_views(array('auth/pages/users/manage')); // Load the view*/
		
		//return $responses;
	}
	
	public function make_admin($id) {
		authorize('manage','User', '', 'back');
		$this -> toggle_user_group($id, 'admin');
		redirect('/users/manage','refresh');
	}
	
	public function make_user($id) {
		authorize('manage','User', '', 'back');
		$this -> toggle_user_group($id, 'user');
		redirect('/users/manage','refresh');
	}
	
	private function toggle_user_group($id, $new_user_group) {
		authorize('manage','User', '', 'back');
		$user = new User();
		$user -> toggle_user_group($id, $new_user_group);
	}
	
	public function edit($id) {
		authorize('manage','User', '', 'back');
	}
	
	public function disable($id)
	{
		authorize('manage','User', '', 'back');
		$user = new User();
		$user -> where('id',$id) -> get();
		$user -> is_enabled = 0;
		$user -> save();
		redirect('users/manage');
	}
	
	public function enable($id) {
		authorize('manage','User', '', 'back');
		$user = new User();
		//$user -> enable($id);
		$user -> where('id',$id) -> get();
		$user -> is_enabled = 1;
		$user -> save();
		redirect('users/manage');
	}
	
	public function delete_all($id=0)//$parameters=array(), $id=0) {
	
	{
			authorize('manage','User', '', 'back');
			$user = new User();
			$user -> where('id',$id) -> get();
			$post = new Post();
			$author = $user -> author -> get();
			$is_user = $user -> get_role() == 'user';
			/*$responses = array();
			$responses['is_user'] = NULL;*/
			
			$is_user = $parameters['is_user'];
				if($is_user) {
					//$responses['is_user'] = TRUE;
			    	$user -> author -> get() -> posts -> get() -> delete_all();
					$user -> author -> get() -> delete();
					$user -> delete();
					$this -> session -> set_flashdata('notice', 'Deletion Successful.');
				} else {
					//$responses['is_user'] = FALSE;
					$this -> session -> set_flashdata('notice','You cannot delete admins!');
		 		}
		redirect('users/manage');
		//return $responses;
	}

	public function register() {
		parent :: register();
	}
	
	
	public function register_with_facebook() {
		//$authorization
	}
	// WOKRING ON PROPER IMPLEMENTATION OF ADDING & EDITING USER ACCOUNTS
}

?>