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
	
	public function index() //$parameters)
	{
				/*$responses = array();
				$responses['logged_in'] = TRUE;*/
				
	 			posts_index('welcome/index');
				load_header();
				load_flash();
				load_navigation();
				load_logo();
				load_sidebar();
				
				$logged_in = logged_in();
				
				//$logged_in = $parameters['logged_in'];
				
				if(!$logged_in) {
					//$responses['logged_in'] = FALSE;
					$this -> login();
				}
				
				close_sidebar();
				load_views(array('posts/index'),false,false,false,false,false,false);
				load_footer();
				
				//return $responses;
	}
	
	public function fbindex() {
		$this -> load -> model('Facebook_user','FBuser');
		$this -> FBuser -> login();
		redirect('/welcome/viewdashboard');
	}
	
	public function viewdashboard()
	
	{
		$this -> ag_auth -> restrict('user');
		
		//get logged in user's full name
		$user = current_user();
		$author = $user -> author -> get();
		$author_name = $author -> get_author_full_name();
		
		
		$no_name = ($author_name == "first_name last_name");	
		$id = $author -> id;	
		
		if($no_name) {
			redirect('authors/edit_author/'.$id.'/');  
		} else { 
			$author_name = $author -> get_author_full_name(); 
			$post_form = create_user_manage_forms($author);
				
			$this -> mysmarty -> assign('edit_profile', $post_form['edit_author']);
			$this -> mysmarty -> assign('posts',$post_form['posts']);
			$this -> mysmarty -> assign('empty_posts', empty($posts));
			$this -> mysmarty -> assign('form', $post_form['post_form']);
			$this -> mysmarty -> assign('approve', $post_form['approve']);
			$this -> mysmarty -> assign('delete', $post_form['delete']);
			$this -> mysmarty -> assign('hide', $post_form['hide']);
					
			
		}
		$no_posts = empty($posts);
					
		if($no_posts) {
			$this -> mysmarty -> assign('no_post_message','You have no posts.');
		} 
		
		load_views(array('users/dashboard'));
	}
	
	public function register() {
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
