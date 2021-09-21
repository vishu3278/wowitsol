<?php
include ('../../config.php');

if (isset($_POST['c_id']) && $_POST['c_id'] > 0)
    {
		 	 $c_id = $_POST['c_id'];
			 $c_design = $_POST['c_design'];
      		 $c_exp=$_POST['c_exp'];
			 $c_skills = $_POST['c_skills'];
			 $c_description = $_POST['c_description'];
			 $c_responsibility = $_POST['c_responsibility'];
			 $c_requirements = $_POST['c_requirements'];
			 $c_date = date('Y-m-d', strtotime($_POST['c_date']));
			 $c_opening = $_POST['c_opening'];
			 $current_stage = $_POST['current_stage'];
			 
			if ($c_design && $c_exp && $c_skills  && $c_description && $c_date && $c_opening && $current_stage)
			{
				$qry = "SELECT * FROM careers WHERE  id = '".$c_id."' ORDER BY interveiw_date desc";
       			$sql = mysqli_query($conn, $qry);

				if (mysqli_num_rows($sql) > 0)
				{
					
				$qry = "UPDATE `careers` SET `designation`='$c_design',`skills`='$c_skills',`experience`='$c_exp', `description`='$c_description', `responsibility`='$c_responsibility', `requirements`='$c_requirements',`interveiw_date`='$c_date',`opening`='$c_opening',`status`='$current_stage' WHERE id = $c_id" ;
				
				$sql = mysqli_query($conn, $qry);
		
					 if ($sql == TRUE)
					{
						echo $_SESSION['success'] ="Career edited Successfully.";
					}
					else
					{
		                $_SESSION['error'] = mysqli_error();
					}
           
        		}
		else
			{
			$_SESSION['error'] = mysqli_error();
			}

   		 }
	else
		{
		$_SESSION['error'] = mysqli_error();
		}

}



  else
    {
          
		 	$c_id = $_POST['c_id'];
			$c_design = $_POST['c_design'];
			$c_exp=$_POST['c_exp'];
			$c_skills = $_POST['c_skills'];
		    $c_description = $_POST['c_description'];
			$c_responsibility = $_POST['c_responsibility'];
			$c_requirements = $_POST['c_requirements'];
			$c_date = date('Y-m-d', strtotime($_POST['c_date']));
			$c_opening = $_POST['c_opening'];
			$current_stage = $_POST['current_stage'];

			if ($c_design && $c_exp && $c_skills  && $c_description &&  $c_responsibility && $c_requirements && $c_date && $c_opening && $current_stage)
			{
			 	$qry  = "SELECT * FROM careers WHERE  id = '".$c_id."'";
       			
       			$sql= mysqli_query($conn, $qry);

				$qry1 = "INSERT INTO careers(designation,skills,experience,description,responsibility,requirements,interveiw_date,opening,status) VALUES ('".$c_design."','".$c_skills."','".$c_description."','".$c_responsibility."','".$c_requirements."','".$c_exp."','".$c_date."','".$c_opening."','".$current_stage."')";
					
					$sql1 = mysqli_query($conn, $qry1);	
					
						if($sql1)
						{
							$c_id = mysqli_insert_id();
							
							$_SESSION['success'] = 'career added successfully';
								
								
						}
						   else
								{
									$_SESSION['error'] = mysqli_error();
								} 
						
				
			
    }
	else
		{
			$_SESSION['error'] = 'Please fill required fields.';
		}
}	
	
if (headers_sent())
    {
    echo "<script> window.location.assign('" .BASE_ADMIN_URL."home.php?page=careeredit&c_id=$c_id'); </script>";
    }
  else
    {
    header('Location: ' . BASE_ADMIN_URL ."home.php?page=careeredit&c_id=$c_id");
    }

?>
