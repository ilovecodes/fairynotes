<?php
	$config['edit_author'][] = array('no_name' => TRUE, 'expected_result' => array('no_name' => TRUE));
	$config['edit_author'][] = array('no_name' => FALSE, 'expected_result' => array('no_name' => NULL));
	
	$config['update_author'][] = array('author_saved' => TRUE, 'expected_result' => array('author_saved' => TRUE));
	$config['update_author'][] = array('author_saved' => FALSE, 'expected_result' => array('author_saved' => FALSE));
	
	$config['view_profile'][] = array('id_exists' => TRUE, 'fb_enabled' => TRUE, 
	                                 'expected_result' => array('id_exists' => TRUE,
																'fb_enabled' => TRUE));
	
	$config['view_profile'][] = array('id_exists' => FALSE, 'fb_enabled' => TRUE, 
	                                 'expected_result' => array('id_exists' => FALSE,
																'fb_enabled' => TRUE));	

	$config['view_profile'][] = array('id_exists' => FALSE, 'fb_enabled' => FALSE, 
	                                 'expected_result' => array('id_exists' => FALSE,
																'fb_enabled' => NULL));	

	$config['view_profile'][] = array('id_exists' => TRUE, 'fb_enabled' => FALSE, 
	                                 'expected_result' => array('id_exists' => TRUE,
																'fb_enabled' => NULL));																		
	$config['author_exists'][] = array('author_exists' => TRUE, 'expected_result' => array('author_exists' => NULL));
	$config['author_exists'][] = array('author_exists' => FALSE, 'expected_result' => array('author_exists' =>FALSE));
	