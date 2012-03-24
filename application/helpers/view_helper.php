
<?php
	/**
		@param : $views: array of views
	**/
	
	function load_views($views,$load_header=true,$load_flash=true,
	                           $load_footer=true,$load_navigation=true,
							   $load_logo=true, $load_sidebar=true) 
	{
		$CI =& get_instance();
		$theme_name = get_theme_name();
		
		if($load_header) {
			load_header($theme_name);
		}
		
		if($load_navigation){
			load_navigation($theme_name);
		}
		
		if($load_flash) {
			load_flash($theme_name);
		}
		
		if($load_logo) {
			load_logo($theme_name);
		}
		
		if($load_sidebar) {
			load_sidebar($theme_name);
			close_sidebar($theme_name);
		}
		
		/*if(!logged_in()) {
			//load_login($theme_name);
		}*/
		
		//load content
		foreach($views as $view) {
			$CI -> mysmarty -> view("themes/$theme_name/$view");
		}
		
		if($load_footer) {
			load_footer();
		}
	}
	
	/**
		@param: $variables: array of associative arrays which contain 
		                    the variable name and the value of the variable
	**/
	function set_variables($variables) {
		$CI =& get_instance();
		foreach($variables as $variable) {
			$CI -> mysmarty -> assign($variable['name'], $variable['value']);
		}
	}
	
	function get_theme_name() {
		if(current_user() -> exists()) { 
			return current_user() -> get_user_theme(fb_enabled());
		} else {
			//return Theme :: get_default_theme();
			return 'nodame';
		}
	}
	
	function load_navigation_variables() {
		$CI =& get_instance();
		$CI -> mysmarty -> assign('logged_in',logged_in());
		$CI -> mysmarty -> assign('notice', $CI ->session -> flashdata('notice'));
		$base_url = base_url();
		$link_prefix = site_url('/');
		
		if(logged_in()) {
			$user_author = current_user() -> author -> get();
			$user_author_name = $user_author -> first_name. ' '.$user_author -> last_name;
			$username = array('label' => $user_author_name , 'link' => $link_prefix.'authors/view_profile/'.current_user() -> author -> get() -> id);
			$dashboard = array('label' => 'dashboard', 'link' => $link_prefix.'welcome/viewdashboard');
			$logout = array('label' => 'logout', 'link' => $link_prefix.'logout');
			
			
			$new_post = array('label' => 'new post', 'link' => $link_prefix.'posts/new_post');
			$back_to_home = array('label' => 'welcome', 'link' => $link_prefix.'home');
			$change_theme = array('label' => 'change theme', 'link' => $link_prefix.'themes/configure');
			
			$CI -> mysmarty -> assign('fb_enabled', fb_enabled());
			$CI -> mysmarty -> assign('username', $username);
			$CI -> mysmarty -> assign('base_url', $base_url);
			$CI -> mysmarty -> assign('logout', $logout);
			$CI -> mysmarty -> assign('new_post', $new_post);
			$CI -> mysmarty -> assign('back_to_home', $back_to_home);
			$CI -> mysmarty -> assign('change_theme', $change_theme);
			$CI -> mysmarty -> assign('dashboard', $dashboard);
			$is_admin = can('manage', 'Post') || can('manage', 'User');
			$CI -> mysmarty -> assign('is_admin',$is_admin);
			
			if($is_admin) {
				$manage = array('label' => 'manage', 'link' => $link_prefix.'admin/manage');
				$manage_users = array('label' => 'manage users', 'link' => $link_prefix.'users/manage');
				$manage_posts = array('label' => 'manage posts', 'link' => $link_prefix.'posts/manage');
				$CI -> mysmarty -> assign('manage_users',$manage_users);
				$CI -> mysmarty -> assign('manage_posts',$manage_posts);
				$CI -> mysmarty -> assign('manage',$manage);
			}
		} else {
			$login = array('label' => 'login', 'link' => $link_prefix.'login');
			//$CI -> mysmarty -> assign('login',anchor('welcome','login', 'class="signin"'));
			$CI -> mysmarty -> assign('login',$login);
		  }
	}
	
	function load_header($theme_name = null) {
		$CI =& get_instance();
		$CI -> mysmarty -> assign('base_url',base_url());
		$CI -> mysmarty -> assign('fb_enabled', fb_enabled());
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
	    $CI -> mysmarty -> view("themes/$theme_name/header");
	}
	
	function load_footer($theme_name = null) {
		$CI =& get_instance();
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/footer");
	}
	
	function load_navigation($theme_name = null) {
		$CI =& get_instance();
		load_navigation_variables();
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/users/navigation");
	}
	
	function load_flash($theme_name = null) {
		load_flash_variables();
		$CI =& get_instance();
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/flash");
	}
	
	function load_sidebar($theme_name = null, $views=null) {
		$CI =& get_instance();
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/sidebar");
		if($views) {
			load_views($views);
		}
	}
	
	function close_sidebar($theme_name=null) {
	    $CI =& get_instance();
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/sidebarclose");
	}
	
	function load_login($theme_name = null) {
		
		$CI =& get_instance();
		$CI -> mysmarty -> assign('username', '');
		$CI -> mysmarty -> assign('password', '');
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/auth/pages/login");
		//$CI -> ag_auth -> login();
	}
	
	function load_logo($theme_name = null) {
		$CI =& get_instance();
		$CI -> mysmarty -> assign('group', anchor(base_url(),'Fairy Notes Beta'));
		$CI -> mysmarty -> assign('tagline', "Fairy Notes");
		if(!$theme_name) {
			$theme_name = get_theme_name();
		}
		$CI -> mysmarty -> view("themes/$theme_name/logo");
	}
	
	function load_flash_variables() {
		$CI =& get_instance();
		$CI -> mysmarty -> assign('notice', $CI -> session -> flashdata('notice'));
	}
	
	function load_message($message, $backlink_url='', 
	                      $backlink_message='back',
						  $load_header=true,
						  $load_flash=true,
						  $load_footer=true,
						  $load_navigation=true) 
	{
		$CI =& get_instance();
		$CI -> mysmarty -> assign('message', $message);
		$CI -> mysmarty -> assign('backlink',anchor($backlink_url, $backlink_message));
		
		load_views(array('message'),$load_header, $load_flash, $load_footer, $load_navigation);
	}
	
?>