<?php
	class Facebook_user extends CI_Model {
		
		public function __construct() {
			parent :: __construct();
			
			$this -> load -> config('facebook');
			$this -> load -> library('Facebook', array(
					'appId' => $this->config->item('fb_app_id'),
					'secret'=> $this->config->item('fb_secret_key'),
					'cookie'=> TRUE
					));
			
			
		}
		
		public function login() {
			$user = $this -> facebook -> getUser();
			
			if($user) { //if logged in on facebook
				try {
			
					$userdata = $this -> facebook -> api('/me?fields=email,username,first_name,last_name,id', 'GET'); 
					//retrieve user details to see if user exists in the app's db
					$app_user = new User();
					$app_user -> where('email', $userdata['email']) -> get();
					
					if($app_user -> exists()) { //if user exists, login
						$this -> login_fb_user($app_user);
					} else { 
						//if user does not exist, automatically sign the user up
						$this -> load -> helper('string');
						$this -> load -> helper('date');
						
						$random_username = random_string('alnum',20);
						$exists = $app_user -> where('username', $random_username) -> get() -> exists();
						
						while($exists) {
							$random_username = random_string('alnum',20);	
						}
						
						$this -> ag_auth -> register(
								 				random_string('alnum',20), 
												random_string('alnum',20),
								                $userdata['email']
								            );
						
						$app_user -> where('email',$userdata['email']) -> get();
						$author = new Author();
						
						$author -> new_author(
												array('first_name' => $userdata['first_name'], 
											  		  'last_name' => $userdata['last_name'],
								                      'user' => $app_user
													 )
								             );
						$this -> login_fb_user($app_user);
					  }
				} catch(FacebookApiException $fb_exception) {
					error_log($fb_exception);
				  }
				
			} else {
				redirect($this -> facebook -> getLoginUrl(array('scope' => 'user_about_me,email,publish_stream', 'next' => 'http://apps.facebook.com/fairynotes')));
			  }	
			
		}
		
		public function logged_in_on_facebook() {
			$return_value = true;
			try {
				if($this -> facebook -> getUser()) {
					$return_value = true;
				} else {
					$return_value = false;
				}
			} catch(FacebookApiException $e) {
				$return_value = false;
			}
			
			return $return_value;
		}
		
		public function is_app_user() {
			
		}
		
		public function get_authorization_code() {
			
		}
		
		public function post_to_feed($options) {
			$user = $this -> facebook -> getUser();
			if($user) {
				try {
						$ret_obj = $this -> facebook->api('/me/feed', 'POST',
				
							array(
									'message' => $options['message'],
									'link' => $options['post_link'],
									'name' => $options['name'],
									'picture' => base_url().'/images/fairytail.jpg',
									'caption' => $options['caption']
								));
					
					} catch(FacebookApiException $e) {
						error_log($e);
					  }
									
			}
		}
		
		public function login_fb_user($app_user) {
			$this -> ag_auth -> login_user(array('username' => $app_user -> username, 
					                             'group_id' => $app_user -> group_id, 
					                             'fb_enabled' => 'enabled'
					                       ));
		}
		
		public function get_friends() {
			login();
		}
		
		public function get_picture_url() {
			$uid = $this -> facebook -> getUser();
			$link = "http://graph.facebook.com/$uid/picture";
			return $link;
		}
		
		/*public function log_in() {
			$user = $this -> facebook -> getUser();
			
			if($user) {
				echo "Hello";
			} else {
				echo "<a href=\"".$this -> facebook -> getLoginUrl()."\">Login</a>";
			  }
		}*/
	}
?>