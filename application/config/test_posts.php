<?php
	$config['create_post'][] = array('save_success' => TRUE, 'fb_enabled' => TRUE,
									 'expected_result' => array('save_success' => TRUE,
									                            'fb_enabled' => TRUE));
	
	$config['create_post'][] = array('save_success' => FALSE, 'fb_enabled' => TRUE,
									 'expected_result' => array('save_success' => FALSE,
									                            'fb_enabled' => NULL));	
	
	$config['create_post'][] = array('save_success' => TRUE, 'fb_enabled' => FALSE,
									 'expected_result' => array('save_success' => TRUE,
									                            'fb_enabled' => NULL));	
	
	$config['update_post'][] = array('save_success' => TRUE, 
									 'expected_result' => array('save_success' => TRUE));
	
	$config['update_post'][] = array('save_success' => FALSE, 
									 'expected_result' => array('save_success' => FALSE));
									 
	$config['delete_post'][] = array('deletion_successful' => TRUE, 
									 'redirect' => TRUE,
									 'expected_result' => array('deletion_successful' => TRUE,
																'redirect' => TRUE));
	
	$config['delete_post'][] = array('deletion_successful' => TRUE, 
									 'redirect' => FALSE,
									 'expected_result' => array('deletion_successful' => TRUE,
																'redirect' => NULL));
																
	
	$config['delete_post'][] = array('deletion_successful' => FALSE, 
									 'redirect' => FALSE,
									 'expected_result' => array('deletion_successful' => NULL,
																'redirect' => NULL));
															
	$config['approve_post'][] = array('save_successful' => TRUE, 
									  'redirect' => TRUE,	
									  'expected_result' => array('save_successful' => TRUE,
																 'redirect' => TRUE));
	
	$config['approve_post'][] = array('save_successful' => FALSE, 
									  'redirect' => TRUE,
									  'expected_result' => array('save_successful' => NULL,
																 'redirect' => TRUE));
	
	$config['approve_post'][] = array('save_successful' => TRUE, 
									  'redirect' => FALSE,	
									  'expected_result' => array('save_successful' => TRUE,
															     'redirect' => NULL));
	
	$config['approve_post'][] = array('save_successful' => FALSE, 
									  'redirect' => FALSE,
									  'expected_result' => array('save_successful' => NULL,
																 'redirect' => NULL));
	
	$config['hide_post'][] = array('save_successful' => TRUE, 
									  'redirect' => FALSE,	
									  'expected_result' => array('save_successful' => TRUE,
															     'redirect' => NULL));
	
	$config['hide_post'][] = array('save_successful' => FALSE, 
									  'redirect' => FALSE,
									  'expected_result' => array('save_successful' => NULL,
																 'redirect' => NULL));
																 
	$config['do_post_action'][] = array('submit_value' => 'Display Selected',
										'expected_result' => array('display_selected' => TRUE,
																   'hide_selected' => NULL,
																   'delete_selected' => NULL));
	
	$config['do_post_action'][] = array('submit_value' => 'Hide Selected',
										'expected_result' => array('display_selected' => NULL,
																   'hide_selected' => TRUE,
																   'delete_selected' => NULL));
	
	$config['do_post_action'][] = array('submit_value' => 'Delete Selected',
										'expected_result' => array('display_selected' => NULL,
																   'hide_selected' => NULL,
																   'delete_selected' => TRUE));	
																   
	$config['post_not_empty'][]	= array('post_is_empty' => TRUE, 
	                                    'expected_result' => array('post_is_empty' => TRUE));	

	$config['post_not_empty'][]	= array('post_is_empty' => FALSE, 
	                                    'expected_result' => array('post_is_empty' => NULL));	
	
	