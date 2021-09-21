<?php
include_once('../config.php'); 
setcookie("uid","",time()-60);
session_unset();
	if (headers_sent())
		{
		 echo "<script> window.location.assign('" . BASE_ADMIN_URL . "'); </script>";
		}
	  	else
		{
		 header('Location: ' . BASE_ADMIN_URL . "");
		}
?>
