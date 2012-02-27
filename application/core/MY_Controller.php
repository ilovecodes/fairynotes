<?php
/**
* Authentication Library
*
* @package Authentication
* @category Libraries
* @author Adam Griffiths
* @link http://adamgriffiths.co.uk
* @version 2.0.3
* @copyright Adam Griffiths 2011
*
* Auth provides a powerful, lightweight and simple interface for user authentication .
*/

class Application extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		log_message('debug', 'Application Loaded');

		$this->load->library(array('form_validation', 'ag_auth','mysmarty'));
		$this->load->helper(array('url', 'email', 'ag_auth','view'));
		$this->config->load('ag_auth');
	}

	
	public function field_exists($value)
	{
		$field_name  = (valid_email($value)  ? 'email' : 'username');
		
		$user = $this->ag_auth->get_user($value, $field_name);
		
		if(array_key_exists('id', $user))
		{
			$this->form_validation->set_message('field_exists', 'The ' . $field_name . ' provided already exists, please use another.');
			
			return FALSE;
		}
		else
		{			
			return TRUE;
			
		} // if($this->field_exists($value) === TRUE)
		
	} // public function field_exists($value)
	
	public function register()
	{
		$this->form_validation->set_rules('username', 'Username', 
		                                  'required|min_length[6]|callback_field_exists');
		$this->form_validation->set_rules('password', 'Password', 
		                                  'required|min_length[6]|matches[password_conf]');
		$this->form_validation->set_rules('password_conf', 'Password Confirmation', 
		                                  'required|min_length[6]|matches[password]');
		$this->form_validation->set_rules('email', 'Email Address', 
		                                  'required|min_length[6]|valid_email|callback_field_exists');

		if($this->form_validation->run() == FALSE)
		{
			$empty_username = empty($username);
			set_variables(array(
								array('name' => 'username_empty', 'value' => $empty_username),
								array('name' => 'username_value', 'value' => set_value('username')),
								array('name' => 'password',		  'value' => set_value('password')),
								array('name' => 'password_confirm','value' => set_value('conf_password')),
								array('name' => 'username_error', 'value' => form_error('username')),
								array('name' => 'password_error', 'value' => form_error('password')),
								array('name' => 'password_confirm_error', 'value' => form_error('conf_password')),
								array('name' => 'email_error',    'value' => form_error('email'))
							   )
						 );
			
			//if(!$empty_username) {
				set_variables(array(array('name' => 'email', 'value' => set_value('email'))));
			/*} else {
				set_variables(array(array('name' => 'email',  'value' => set_value('email'))));
			  }*/
			//$this->ag_auth->view('register');
			load_views(array('auth/pages/register'));
		}
		else
		{
			$username = set_value('username');
			$password = $this->ag_auth->salt(set_value('password'));
			$email = set_value('email');

			if($this->ag_auth->register($username, $password, $email) === TRUE)
			{
				//$data['message'] = "The user account has now been created.";
				/* Create author */
					$user = new User();
					$user -> where('username', $username)->get();
					$author = new Author();
					$author -> first_name = "first_name";
					$author -> last_name = "last_name";
					$author -> save($user);
				/* End Create Author */
				//$this->ag_auth->view('message', $data);
					$this -> session -> set_flashdata('notice',
					                                  "The user account has now been created.");
					redirect('users/manage');
				
			} // if($this->ag_auth->register($username, $password, $email) === TRUE)
			else
			{
				$data['message'] = "The user account has not been created.";
				$this -> session -> set_flashdata('notice', $data['message']);
				//$this->ag_auth->view('message', $data);
			}

		} // if($this->form_validation->run() == FALSE)
		
	} // public function register()
	
	
	public function login($redirect = NULL)
	{
	  if($redirect === NULL)
		{
			$redirect = $this->ag_auth->config['auth_login'];
		}
		
		if(logged_in()) {
			redirect($redirect,'refresh');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
		
			if($this->form_validation->run() == FALSE)
			{
				set_variables(array(array('name' => 'username', 'value' => set_value('username')),
									array('name' => 'password' ,'value' => set_value('password')),
									array('name' => 'username_error', 'value' => form_error('username')),
									array('name' => 'password_error','value' => form_error('password'))
									)
							);
				load_views(array('auth/pages/login'),false,false,false,false,false,false);
			}
		
			else
			{
				$username = set_value('username');
				$password = $this->ag_auth->salt(set_value('password'));
				$field_type  = (valid_email($username)  ? 'email' : 'username');
			
				$user_data = $this->ag_auth->get_user($username, $field_type);
				$user_exists = ((array_key_exists('password', $user_data) 
			                                     AND $user_data['password'] === $password));
				if($user_exists)
				{
				
					unset($user_data['password']);
					unset($user_data['id']);
					$user_data['fb_enabled'] = 'disabled';
					if($user_data['is_enabled'] == 1) {
						$this->ag_auth->login_user($user_data);
						$data['message'] = "Welcome, ".username()."!";
						$this -> session -> set_flashdata('notice',$data['message']);
						redirect($redirect);
					} else {
						$this -> session -> set_flashdata('notice','Sorry, but your account 
						                                             has been disabled.');
						redirect(base_url());
					  }
				
				
				} // if($user_data['password'] === $password)
			
				else
				{
					$data['message'] = "The username and password did not match.";
					$this -> session -> set_flashdata('notice',$data['message']);
					redirect('welcome');
					//$this->ag_auth->view('message', $data);
				}
			}
		}		// if($this->form_validation->run() == FALSE)
		
	} // login()
	
	public function logout()
	{
		$this->ag_auth->logout();
	}
}

/* End of file: MY_Controller.php */
/* Location: application/core/MY_Controller.php */