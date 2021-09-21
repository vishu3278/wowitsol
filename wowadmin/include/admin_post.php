<?php
include_once('../../config.php'); 
 if(isset($_POST['loginbtn'])){
	 	$email=$_POST['adminemail'];
		$password=md5($_POST['adminpassword']);
	 	$q="SELECT * from users where email='".$email."' and password='".$password."'";
		if($result=mysqli_query($conn, $q)){
			
			$num=mysqli_num_rows($result);
			if($num==1){
				$row=mysqli_fetch_assoc($result);
			 	$_SESSION['siteadmin']['id']=$row['id'];
				$_SESSION['siteadmin']['username']=$row['username'];
				$_SESSION['siteadmin']['role']=$row['role'];
				if(isset($_POST['rme'])){
					setcookie("uid",$row['id'],time()+(86400 * 30), "/");
				}
					if (headers_sent())
                {
                echo "<script> window.location.assign('" . BASE_ADMIN_URL . "'); </script>";
                }
                else
                {
                header('Location: ' . BASE_ADMIN_URL . "");
                }
			}else{
			 	$_SESSION['error'] =  "Email OR Password is incorrect.";

			}
		}else{
			$_SESSION['error'] =   mysqli_error();
			
		}
			if (headers_sent())
                {
                echo "<script> window.location.assign('" . BASE_ADMIN_URL . "'); </script>";
                }
                else
                {
                header('Location: ' . BASE_ADMIN_URL . "");
                }
	}
?>	