<?php 
	function load_edit_theme_form($fb_enabled, $submit_url) {
		$CI =& get_instance();
		$CI -> load -> helper('form');
		
		$form['open'] = form_open($submit_url);
		$options = '';
		$theme =   ($fb_enabled == 'enabled')? new Facebooktheme() : new Theme();
		$themes = $theme -> get_all_themes();
		
		
		$selected_theme = '';
		
		foreach($themes as $a_theme) {
			$options[$a_theme -> id] = $a_theme -> name;
			
			if($a_theme -> name == current_user() -> get_user_theme($fb_enabled)) {
				$selected_theme = $a_theme -> id;
			}
		}
		
		$form['dropdown'] = form_dropdown('theme', $options, $selected_theme);
		$form['submit'] = form_submit('submit', 'Set Theme');
		$form['close'] = form_close();
		
		return $form;
	}
	
	function load_edit_site_theme_form() {
	}
	
	
?>