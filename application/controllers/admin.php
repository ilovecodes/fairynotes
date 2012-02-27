<?php

class Admin extends Application
{
	public function __construct()
	{
		parent::__construct();
		$this -> ag_auth -> restrict('admin');
		$this -> load -> helper('view');
	}
	
	public function index()
	{
		if(logged_in())
		{
			$this->ag_auth->view('dashboard');
		}
		else
		{
			$this->login();
		}
	}
	
	public function manage() {
		$base_url = site_url('/');
		set_variables(array(array('name' => 'manage_posts', 
		                    	  'value' => array('label' => 'manage all posts', 
							                 'link' => $base_url.'posts/manage')),
					 		 array('name' => 'manage_users',
					               'value' => array('label' => 'manage all users',
							                 'link' => $base_url.'users/manage')),
					  		 array('name' => 'choose_site_theme', 
					        	   'value' => array('label' => 'choose site theme', 
					                         'link' => $base_url.'themes/configure'))
					       	)
					   );
		load_views(array('admin/manage'));
	}
	
	
}

/* End of file: dashboard.php */
/* Location: application/controllers/admin/dashboard.php */