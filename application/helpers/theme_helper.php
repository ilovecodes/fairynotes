<?php 
	function load_edit_theme_form() {
		$CI =& get_instance();
		$CI -> load -> helper('form');
		
		$form['open'] = form_open('themes/update_theme');
		$options = '';
		$theme =   (fb_enabled() == 'enabled')? new Facebooktheme() : new Theme();
		$themes = $theme -> get_all_themes();
		
		
		$selected_theme = '';
		
		foreach($themes as $a_theme) {
			$options[$a_theme -> id] = $a_theme -> name;
			
			if($a_theme -> is_selected == 1) {
				$selected_theme = $a_theme -> id;
			}
		}
		
		$form['dropdown'] = form_dropdown('theme', $options, $selected_theme);
		$form['submit'] = form_submit('submit', 'Set Theme');
		$form['close'] = form_close();
		
		return $form;
	}
?>