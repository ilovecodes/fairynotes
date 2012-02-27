<?php
	function dashed_to_url($dashed_url) {
		$url_string = str_replace('-','/',$dashed_url);
		return $url_string;
	}
?>
