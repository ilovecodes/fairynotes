<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Application {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	public function __construct() {
		parent::__construct();
		$this -> load -> library('pagination');
		$this -> load -> helper(array('date','view','pagination','posts'));
	}
	
	public function index()
	{
	 			posts_index('welcome/index');
				load_header();
				load_flash();
				load_navigation();
				load_logo();
				load_sidebar();
				
				if(!logged_in()) {
					$this -> login();
				}
				
				close_sidebar();
				load_views(array('posts/index'),false,false,false,false,false,false);
				load_footer();
	}
	
	public function fbindex() {
		$this -> load -> model('Facebook_user','FBuser');
		$this -> FBuser -> login();
		echo "went here";
		redirect('/');
	}
	
	public function viewdashboard() {
				$this -> ag_auth -> restrict('user');
				$this -> load -> helper('form');
				
				$user = new User();
				$author = current_author();
				$name_present = $author -> get_author_full_name() != "first_name last_name"; 
				$id = $author -> id;
			
				if(!$name_present) {
					redirect('authors/edit_author/'.$id.'/');
				}
				
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

				$this -> mysmarty -> assign('edit_profile', $edit_author);
				$this -> mysmarty -> assign('posts',$posts);
				$this -> mysmarty -> assign('empty_posts', empty($posts));
				$this -> mysmarty -> assign('form', $post_form);
				$this -> mysmarty -> assign('approve', $approve);
				$this -> mysmarty -> assign('delete', $delete);
				$this -> mysmarty -> assign('hide', $hide);
				
				if(empty($posts)) {
					$this -> mysmarty -> assign('no_post_message','You have no posts.');
				}
				
				load_views(array('users/dashboard'));
	
	}
	
	public function register() {
		//$this -> ag_auth -> restrict('admin',TRUE);
		parent::register();
	}
	
	public function login() {
		parent :: login();
	}
	
	public function access_denied() {
		load_message('Access Denied.');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
