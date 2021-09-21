<?php
	#################################################
	# This file is used to configuration of database# 
	# detail to use connectivity with database      #
	#################################################
	//Database connection configuration
	
	
$conn = mysqli_connect("localhost","root","","wowitsolutions");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }