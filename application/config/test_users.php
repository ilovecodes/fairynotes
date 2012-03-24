<?php

	$config['manage'][] = array('own_account' => TRUE, 
								'is_user' => FALSE,
								'expected_result' => array('own_account' => TRUE,
														   'is_user' => NULL));
	
	$config['manage'][] = array('own_account' => FALSE, 
								'is_user' => TRUE,
								'expected_result' => array('own_account' => NULL,
														   'is_user' => TRUE));	
	
	$config['manage'][] = array('own_account' => FALSE, 
								'is_user' => FALSE,
								'expected_result' => array('own_account' => NULL,
														   'is_user' => NULL));		
	
	$config['delete_all'][] = array('is_user' => TRUE,
								  'expected_result' => array('is_user' => TRUE));
							
	$config['delete_all'][] = array('is_user' => FALSE,
								  'expected_result' => array('is_user' => FALSE));						