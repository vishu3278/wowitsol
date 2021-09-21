<?php
	
	$n_id = $_GET['n_id'];
	$qry = "DELETE FROM blog WHERE b_id = '".$n_id."'";
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
		    echo "<script> window.location.assign('" . BASE_ADMIN_URL . "home.php?page=blog'); </script>";
		    }
	  		else
		    {
		    header('Location: ' . BASE_ADMIN_URL . "home.php?page=blog");
		    }

?>	







































