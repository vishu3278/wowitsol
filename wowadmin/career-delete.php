<?php
	
	$c_id = $_GET['c_id'];
	$qry = "DELETE FROM careers WHERE id = '".$c_id."'";
	$sql = mysqli_query($conn, $qry);
	
	if($sql)
	{
		$_SESSION['success'] = "Deleted succcessfully";	
		
	}
	else
	{
		$_SESSION['error'] = "error".mysqli_error(0);
	}
	
	if (headers_sent())
		    {
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL . "home.php?page=career'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL . "home.php?page=career");
		    }

?>	







































