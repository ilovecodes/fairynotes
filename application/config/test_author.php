<?php
	
	/*Test Case for get_related_posts*/
	

	$config['get_posts'][] = array('username' => 'ilovecodes',
										   'expected_result' => TRUE);
	
	$config['get_posts'][] = array('username' => 'iaminvalid',
	                                       'expected_result' => FALSE);
										   
	$config['populate_using_fields'][] = array('first_name' => 'Angie',
											 'last_name' => 'Lee',
											 'expected_result' => TRUE);

	$config['populate_using_fields'][] = array('first_name' => '',
											 'last_name' => '',
											 'expected_result' => FALSE);											

	$config['get_author_full_name'][] = array('username' => 'ilovecodes',
											'expected_result' => 'Angie Lee');
				
	$config['get_author_full_name'][] = array('username' => '',
											'expected_result' => '');	

	$config['get_author_full_name'][] = array('username' => 'iaminvalid',
											'expected_result' => '');	
											