<?php
	
	function initialize_pagination($options) {
		$CI =& get_instance();
		$CI -> load -> library('pagination');
		$sliced_array = slice_array($options);
		$config['base_url'] = site_url($options['url']);
		$config['uri_segment'] = $options['uri_segment'];
		$config['total_rows'] = count($options['items']);
		$config['per_page'] = $options['per_page'];
		$CI -> pagination -> initialize($config);
	}
	
	function create_pagination_links($options) {
		$CI =& get_instance();
		initialize_pagination($options);
		return $CI -> pagination -> create_links();
	}
	
	function slice_array($options) {
		$sliced_array = array_slice($options['items'], $options['start'], 
		                            $options['per_page']);
		return $sliced_array;
	}
?>