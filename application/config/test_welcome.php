<?php
	
	//logged in, name present, have posts
	$config['viewdashboard'][] = array('logged_in' => TRUE,
									   'no_posts' => FALSE,
									   'name_present' => TRUE,
									   'expected_result' => array('logged_in' => TRUE,
									                              'name_present' => TRUE,
																  'no_posts' => FALSE)
									  );
	
	//not logged in, name not present, have posts
	$config['viewdashboard'][] = array('logged_in' => FALSE,
									   'no_posts' => FALSE,
									   'name_present' => FALSE,
									   'expected_result' => array('logged_in' => FALSE,
																  'no_posts' => NULL,
																  'name_present' => NULL));
	
	//logged in, name not present, no posts
	$config['viewdashboard'][] = array('logged_in' => TRUE,
									   'no_posts' => TRUE,
									   'name_present' => FALSE,
									   'expected_result' => array('logged_in' => TRUE,
																  'no_posts' => TRUE,
																  'name_present' => FALSE));
	
	//logged in, name present, no posts
	$config['viewdashboard'][] = array('logged_in' => TRUE,
									   'no_posts' => TRUE,
									   'name_present' => TRUE,
									   'expected_result' => array('logged_in' => TRUE,
																  'no_posts' => TRUE,
																  'name_present' => TRUE));
																  
	$config['index'][] = array('logged_in' => TRUE, 'expected_result' => array('logged_in' => TRUE));
	
	$config['index'][] = array('logged_in' => FALSE, 'expected_result' => array('logged_in' => FALSE));
	
	