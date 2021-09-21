<?php

	error_reporting(0);
	date_default_timezone_set("Asia/Kolkata");
	
	#################################################
	# This file is used to configuration of database# 
	# detail to use connectivity with database      #
	#################################################
	session_start();

	
	/* ----------Database connection configuration----------------- */
	//mysqli_connect('localhost','root','','wowitsolution') or die ('MySQL connect failed. ' . mysqli_error());
	
	define('DB_DATABASE','wowitsolutions');
	define('DB_USERNAME','root');
	define('DB_PASSWORD','');

	########################### BASE URL  	###########################

	/* -------------Server paths---------------------- */
	define('PROJECT_FOLDER_NAME','/wowitsolution/');
	define('ROOT', $_SERVER['DOCUMENT_ROOT']. PROJECT_FOLDER_NAME) ;  // document path while upload on server
	define("HOST_NAME","http://" . $_SERVER['HTTP_HOST'].PROJECT_FOLDER_NAME);  // base url for front
	define('BASE_ADMIN_URL', HOST_NAME.'wowadmin/'); 

	define('WEBSITE', 'WOWITSolutions');

?>