<?php
	
	/*Test cases for get_user*/
	
	//valid username
	$config['get_user'][] = array('username' => 'ilovecodes',
	                              'expected_result' => TRUE);
	//blank username
	$config['get_user'][] = array('username' => '',
	                              'expected_result' => FALSE);
	
	//invalid username
	$config['get_user'][] = array('username' => 'hahahahahaha',
	                              'expected_result' => FALSE);
								  
	/*Test cases for get_related_posts*/
	
	//valid username
	$config['get_related_posts'][] = array('username' => 'ilovecodes',
										   'expected_result' => TRUE);
	
	//invalid username
	$config['get_related_posts'][] = array('username' => 'iaminvalid',
										   'expected_result' => FALSE);
	
	//blank username
	$config['get_related_posts'][] = array('username' => '',
										   'expected_result' => FALSE);

	/*Test Cases for enable and disable*/
	
	//invalid id
	$config['toggle_access'][] = array('id' => 20,
									   'expected_result' => FALSE);
	
	//valid id
	$config['toggle_access'][] = array('id' => 11,
									   'expected_result' => TRUE);
	
	/*Test Cases for get_role*/
	
	//valid username
	$config['get_role'][] = array('username' => 'ilovecodes',
								  'expected_result' => 'admin');							  
	
	//blank username
	$config['get_role'][] = array('username' => '',
								  'expected_result' => '');
	
	//invalid username
	$config['get_role'][] = array('username' => 'hahahahahahahahaha',
								  'expected_result' => '');
	
	
	/* Test Cases for toggle_user_group method */
	
	//valid id and valid group title
	$config['toggle_user_group'][] = array('id' => 11, 
										   'group_title' => 'admin', 
										   'expected_result' => TRUE);
	
	//invalid id and valid group title
	$config['toggle_user_group'][] = array('id' => 20, 
													'group_title' => 'admin', 
													'expected_result' => FALSE);
	
	//valid id and invalid group title
	$config['toggle_user_group'][] = array('id' => 11, 
													'group_title' => 'invalid', 
													'expected_result' => FALSE);
	
	//invalid id and invalid group_title
	$config['toggle_user_group'][] = array('id' => 20, 
													'group_title' => 'invalid', 
													'expected_result' => FALSE);

	//valid id and blank group title
	$config['toggle_user_group'][] = array('id' => 11, 
											'group_title' => '', 
											'expected_result' => FALSE);

	//invalid id and blank group title
	$config['toggle_user_group'][] = array('id' => 20, 
													'group_title' => '', 
													'expected_result' => FALSE);
													
	
	/*Test Cases for set_user_theme*/
	
	//facebook disabled, valid user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										   'username' => 'ilovecodes',
										   'theme_id' => 2,
										   'expected_result' => TRUE);
	
	//facebook disabled, invalid user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										   'username' => 'iaminvalid',
										   'theme_id' => 2,
										   'expected_result' => FALSE);
	
	//facebook disabled, valid user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										   'username' => 'ilovecodes',
										   'theme_id' => 0,
										   'expected_result' => FALSE);
	
	//facebook disabled, invalid user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										   'username' => 'iaminvalid',
										   'theme_id' => 0,
										   'expected_result' => FALSE);
	
	//facebook enabled, valid user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										   'username' => 'ilovecodes',
										   'theme_id' => 3,
										   'expected_result' => TRUE);
	
	//facebook enabled, invalid user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										'username' => 'iaminvalid',
										'theme_id' => 3,
										'expected_result' => FALSE);
	
	//facebook enabled, valid user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										   'username' => 'ilovecodes',
										   'theme_id' => 0,
										   'expected_result' => FALSE);
	
	//facebook enabled, invalid user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										   'username' => 'iaminvalid',
										   'theme_id' => 0,
										   'expected_result' => FALSE);

	//facebook disabled, blank user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										'username' => '',
										'theme_id' => 2,
										'expected_result' => FALSE);
	
	//facebook disabled, blank user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'disabled',
										'username' => '',
										'theme_id' => 0,
										'expected_result' => FALSE);
	
	//facebook enabled, blank user, valid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										'username' => '',
										'theme_id' => 3,
										'expected_result' => FALSE);
	
	//facebook enabled, blank user, invalid theme
	$config['set_user_theme'][] = array('fb_enabled' => 'enabled',
										   'username' => '',
										   'theme_id' => 0,
										   'expected_result' => FALSE);
	/*Test Cases for get_user_theme*/
	
	//facebook disabled, valid user
	$config['get_user_theme'][] = array('fb_enabled' => 'disabled',
										'username' => 'ilovecodes',
										'expected_result' => 'kiuch');
	
	//facebook disabled, invalid user
	$config['get_user_theme'][] = array('fb_enabled' => 'disabled',
										'username' => 'iaminvalid',
										'expected_result' => 'nodame');
										
	//facebook enabled, valid user
	$config['get_user_theme'][] = array('fb_enabled' => 'enabled',
										'username' => 'ilovecodes',
										'expected_result' => 'facebook_nodame_pink');
	
	//facebook enabled invalid user
	$config['get_user_theme'][] = array('fb_enabled' => 'enabled',
										'username' => 'iaminvalid',
										'expected_result' => 'facebook_kiuch');

	//facebook disabled, blank user
	$config['get_user_theme'][] = array('fb_enabled' => 'disabled',
										'username' => '',
										'expected_result' => 'nodame');
	
	//facebook enabled, blank user
	$config['get_user_theme'][] = array('fb_enabled' => 'enabled',
										'username' => '',
										'expected_result' => 'facebook_kiuch');