<?php
	// error_reporting(E_ALL);
	error_reporting(0);
	// date_default_timezone_set("Asia/Kolkata");
	
	// session_start();

	########################### BASE URL  	###########################

	/* -------------Server paths---------------------- */
	define('PROJECT_FOLDER_NAME','/');
	define('ROOT', $_SERVER['DOCUMENT_ROOT']. PROJECT_FOLDER_NAME) ;  // document path while upload on server
	define("HOST_NAME","https://" . $_SERVER['HTTP_HOST'].PROJECT_FOLDER_NAME);  // base url for front
	define('BASE_ADMIN_URL', HOST_NAME.'wowadmin/'); 
	/* -------------Local paths---------------------- */
	define('WEBSITE', 'WOWITSolutions');
?>