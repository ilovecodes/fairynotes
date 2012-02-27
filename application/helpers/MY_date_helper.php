<?php
	function display_time($timestamp, $part_to_be_displayed)
    {    	
    	
    	$time = explode(',', strtolower(timespan($timestamp, time())));
    	$displayed_time = "$time[0] ago";
    	/*foreach($time as $part) {
    		if(strpos($part, $part_to_be_displayed)) {
    			$displayed_time = $part;
    		}
    	}*/
    	return $displayed_time;
    	
    }
?>