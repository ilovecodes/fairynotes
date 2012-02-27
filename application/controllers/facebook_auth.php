<?php
	class Facebook_auth extends Application {
		
		public function __construct() {
			parent :: __construct();
			$this -> load -> model('Facebook_user','fbuser');
		}
		
		public function get_authorization_code() {
			$app_id = $this -> facebook -> getAppId();
			$app_secret = $this -> facebook -> getAppSecret();
			$redirect_uri = urlencode(site_url('/facebook_auth/authorize_app/'));
			
			/*$link = urlencode("http://www.facebook.com/dialog/oauth?client_id=$app_id
					  &redirect_uri=$redirect_uri&scope=email,publish_stream,offline_access");*/
			$link = "http://graph.facebook.com/oauth/authorize?client_id=$app_id&response_type=token
					  &redirect_uri=$redirect_uri&scope=user_status";
			redirect($link);
			/*$curl_handler = curl_init();
			curl_setopt($curl_handler, CURLOPT_URL, $link);
			$value = curl_exec($curl_handler);
			curl_close($curl_handler);
			//curl_exec($curl_session);*/
			//$value = file_get_contents($link);
			/*echo "success1";
			print_r($value);
			if($value) {
				echo "yes!";
			} else {
				echo "nooo!";
			  }*/
		}
		
		public function authorize_app() {
			//$authorization_code = $this -> input -> get('code');
			echo "success";
			print_r($this -> input -> get());
			
			//echo $authorization_code;
			/*$app_id = $this -> facebook -> getAppId();
			$app_secret = $this -> facebook -> getAppSecret();
			$redirect_uri = site_url('/facebook_auth/register');
			redirect("http://graph.facebook.com/oauth/access_token?
     				 client_id=$app_id&redirect_uri=$redirect_uri&
     				 client_secret=$app_secret&code=$authorization_code",'refresh');*/
		}
		
		public function register() {
			echo "Registration done!";
		}
		
		public function logged_in() {
			
		}
		
	}
?>
