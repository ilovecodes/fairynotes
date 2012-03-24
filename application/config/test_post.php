<?php

	/*save post*/
	$config['save_post'][] = array('title' => 'sample post',
											   'content' => 'bla bla boo',
											   'author_id' => 5,
											   'expected_result' => TRUE);
	
	$config['save_post'][] = array('title' => '',
											   'content' => 'bla bla boo',
											   'author_id' => 5,
											   'expected_result' => FALSE);
	
	$config['save_post'][] = array('title' => 'sample_post',
											   'content' => '',
											   'author_id' => 5,
											   'expected_result' => FALSE);	
	
	$config['save_post'][] = array('title' => 'sample_post',
											   'content' => 'bla bla boo',
											   'author_id' => 0,
											   'expected_result' => FALSE);
	
	$config['save_post'][] = array('title' => '',
											   'content' => '',
											   'author_id' => 0,
											   'expected_result' => FALSE);			

											   
	/*update_post*/

	$config['update_post'][] = array('title' => 'sample1',
											   'content' => 'bla bla boo',
											   'author_id' => 5,
											   'expected_result' => TRUE);
	
	$config['update_post'][] = array('title' => '',
											   'content' => 'tralalala',
											   'author_id' => 5,
											   'expected_result' => FALSE);
	
	$config['update_post'][] = array('title' => 'sample3',
											   'content' => '',
											   'author_id' => 5,
											   'expected_result' => FALSE);	
	
	$config['update_post'][] = array('title' => 'sample4',
											   'content' => 'chu chu chu',
											   'author_id' => 0,
											   'expected_result' => FALSE);
	
	$config['update_post'][] = array('title' => '',
											   'content' => 'toink',
											   'author_id' => 0,
											   'expected_result' => FALSE);	
	
	/*get_all_posts*/
	$config['get_all_posts'] = array('expected_result' => TRUE);
	
	/*get_all_displayed_posts*/
	$config['get_all_displayed_posts'] = array('expected_result' => TRUE);
	$config['get_all_hidden_posts'] = array('expected_result' => TRUE);
	
	/*format_posts*/
	$config['format_posts'] = array('expected_result' => TRUE);
	
	$config['post_formatting'][] = array('id' => 0,
									 'expected_result' => FALSE);
	$config['post_formatting'][] = array('id' => 103,
									 'expected_result' => TRUE);
	
	