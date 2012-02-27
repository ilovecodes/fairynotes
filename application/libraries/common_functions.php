<?php
	class Common_Functions {
		
		public function get_displayed_posts($use_timespan=false) {
			$post = new Post();
			$articles = $post -> format_posts($post -> get_all_posts(1,));
			return $articles;
		}
		
		public function get_all_posts($use_timespan=false) {
			$post = new Post();
			$articles = $this -> format_posts($post -> order_by('date_created','asc') 
			                                        -> get(), false, $use_timespan);
			return $articles;
		}
		
		public function get_posts_by_author() {
			$user = new User();
			$user -> get_by_username(username());
			$author = $user -> author -> get();
			$posts  = $this -> format_posts($author -> posts -> get(),true,false);
			return $posts;
		}
		
		/*note: must call date helper from within calling function*/
		private function put_links($posts) {
			foreach($posts as $individual_post) {
				$view_link = anchor('posts/view_post/'.$id.'/', 'view post');
				$edit_link = anchor('/posts/edit_post/'.$individual_post -> id.'/', 
					                'edit post');
				$delete_link = anchor('/posts/delete_post/'.$individual_post -> id.'/', 
					                    'delete post');
				$individual_post -> view_link = $view_link;
				$individual_post -> edit_link = $edit_link;
				$individual_post -> delete_link = $delete_link;
			}
			return $posts;
		}
		
		
	}
?>