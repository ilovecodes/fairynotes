<?php

	define('ENVIRONMENT', 'development');
	
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
		break;

		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
	
	$system_path = '../system';
	
	$application_folder = '.';
	
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
	
	if (function_exists('realpath') AND @realpath($system_path) !== FALSE)
	{
		$system_path = realpath($system_path).'/';
	}
	
	// ensure there's a trailing slash
	$system_path = rtrim($system_path, '/').'/';

	// Is the sytsem path correct?
	if ( ! is_dir($system_path))
	{
		exit("Your system folder path does not appear to be set correctly. Please open the following file and correct this: ".SELF);	
	}
	
	// The PHP file extension
	define('EXT', '.php');
	define('BASEPATH', str_replace("\\", "/", $system_path));
	define('FCPATH', str_replace(SELF, '', __FILE__));
	define('SYSDIR', end(explode('/', trim(BASEPATH, '/'))));
	define('APPPATH', $application_folder.'/');
	
	
	define('VIEWPATH', APPPATH.'views/');
	echo "went to the index file!</br>";
	require_once BASEPATH.'core/CodeIgniter'.EXT; //ahhh. so diri diay niya gitawag ang controller. ^_^
	
	//end of installation/index.php