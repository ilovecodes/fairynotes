<?
	class Test extends CI_Controller {
		public function get_posts() {
			$post = new Post();
			foreach($post -> get_all_posts() as $a_post) {
				echo $a_post -> title.'<br/>';
				echo $a_post -> id.'<br/>';
				echo $a_post -> content.'<br/>';
				echo $a_post -> author -> get() -> first_name.'<br/>';
			}
		}
		
		public function get_displayed_posts() {
			$this -> load -> helper('date');
			$post = new Post();
			$posts = $post -> get_all_displayed_posts('date_created','desc');
			foreach($posts as $a_post) {
				echo '------------------------<br/>';
				echo $a_post -> title.'<br/>';
				echo $a_post -> id.'<br/>';
				echo $a_post -> content.'<br/>';
				echo $a_post -> author -> get() -> first_name.'<br/>';
				echo $a_post -> is_displayed.'<br/>';
				echo standard_date('DATE_COOKIE',$a_post -> date_created).'<br/>';
			}
		}
		
		public function get_hidden_posts() {
			$this -> load -> helper('date');
			$post = new Post();
			$posts = $post -> get_all_hidden_posts('date_created','desc');
			foreach($posts as $a_post) {
				echo '------------------------<br/>';
				echo $a_post -> title.'<br/>';
				echo $a_post -> id.'<br/>';
				echo $a_post -> content.'<br/>';
				echo $a_post -> author -> get() -> first_name.'<br/>';
				echo $a_post -> is_displayed.'<br/>';
				echo standard_date('DATE_COOKIE',$a_post -> date_created).'<br/>';
			}
		}
		
		public function get_formatted_posts() {
			$post = new Post();
			$posts = $post -> get_all_posts();
			$formatted_posts = $post -> format_posts($posts,true,'timespan');
			
			foreach($formatted_posts as $a_post) {
				print_r($a_post);
				echo '<br/><br/>';
			}
		}
		
		public function get_author_formatted_posts() 
		{
			$post = new Post();
			$posts = $post -> get_all_posts();
			$formatted_posts = $post -> format_posts_author($posts,false,'standard');
			
			foreach($formatted_posts as $a_post) {
				print_r($a_post);
				echo '<br/><br/>';
			}
		}
		
		public function get_author_full_name() {
			$author = new Author();
			$author -> first_name = 'Fairy';
			$author -> last_name = 'Tail';
			echo $author -> get_author_full_name();
		}
	
		public function test_posts_helper() {
			$this -> load -> helper('posts');
			$post = new Post();
			$posts = add_links_to_posts($post -> format_posts($post -> get_all_posts()));
			
		}
		
		public function show_post_form() {
			$this -> load -> helper('posts');
			$post = new Post();
			$form_fields = create_post_form($post,'');
			print_r($form_fields);
		}
		
		public function test_authority() {
			$current_user = current_user();
			
		}
		
		public function test_theme() {
			$this -> load -> helper('view');
			print('hello');
			var_dump(get_theme_name());
		}
		
		public function test_facebook() {
			$this -> load -> model('Facebook_user','FBuser');
			$this -> FBuser -> login();
		}
		
		public function test_user() {
			$this -> load -> model('Facebook_user','FBuser');
			$user = new User();
			$user -> where('id', 1) -> get();
			$user_data = $this -> FBuser -> get_profile_details($user);
			var_dump($user_data);
		}
		
	}
?>