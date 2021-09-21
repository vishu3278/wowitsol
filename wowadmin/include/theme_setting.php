<?php

include_once('../../config.php');

$id = $_SESSION['siteadmin']['id'];

   if(isset($_GET) && isset($_SESSION)){
  
	$box_layout = $_GET['box_layout'];
    $fixed_header = $_GET['fixed_header'];
    $fixed_sidebar = $_GET['fixed_sidebar'];
    $closed_sidebar = $_GET['closed_sidebar'];
    $header_style = $_GET['header_style'];
    $header_style_solid = $_GET['header_style_solid'];
    $header_style_gradients = $_GET['header_style_gradients'];
    $sidebar_style = $_GET['sidebar_style'];
    $sidebar_style_solid = $_GET['sidebar_style_solid'];
    $sidebar_style_gradients = $_GET['sidebar_style_gradients'];    

   		$qry = "SELECT * FROM theme_setting WHERE user_id='".$id."'"; 

   		$sql = mysqli_query($conn, $qry);

		if($myresult=$sql)
		  {
		 
				if(mysqli_num_rows($myresult)>0) {

					if ($header_style_solid != '') 
					  {
					   $sql1 = "UPDATE theme_setting SET header_style = 'SOLID', header_style_solid = '$header_style_solid' WHERE user_id='$id' ";
					  }
					elseif ($header_style_gradients != '')
					  {
					   $sql1 = "UPDATE theme_setting SET header_style = 'GRADIENTS', header_style_gradients = '$header_style_gradients' WHERE user_id='$id' ";
					  }
					elseif ($sidebar_style_solid != '')
					  {
					   $sql1 = "UPDATE theme_setting SET sidebar_style = 'SOLID', sidebar_style_solid = '$sidebar_style_solid' WHERE user_id='$id' ";
					  }
					elseif ($sidebar_style_gradients != '')
					  {
					   $sql1 = "UPDATE theme_setting SET sidebar_style = 'GRADIENTS', sidebar_style_gradients = '$sidebar_style_gradients' WHERE user_id='$id' ";
					  }
					elseif ($box_layout !='')
					  {
					  $sql1 = "UPDATE theme_setting SET box_layout = '$box_layout' WHERE user_id='$id' ";
					  }
					elseif ($fixed_header !='')
					  {
					   $sql1 = "UPDATE theme_setting SET fixed_header = '$fixed_header' WHERE user_id='$id' ";
					  }
					elseif ($closed_sidebar !='')
					  {
					   $sql1 = "UPDATE theme_setting SET closed_sidebar = '$closed_sidebar' WHERE user_id='$id' ";
					  }
					elseif ($fixed_sidebar !='')
					  {
					   $sql1 = "UPDATE theme_setting SET fixed_sidebar = '$fixed_sidebar' WHERE user_id='$id' ";
					  }
				}

				$query = mysqli_query($conn, $sql1);

				if($query)
				{
					echo $msg="Successfully Updated!!";
				}
				else {
					echo "Invalid user id";
				}
				
				
		}else {
			 $sql = "INSERT INTO theme_setting SET user_id = '".$id."', box_layout='".$box_layout."', fixed_header='".$fixed_header."', closed_sidebar='".$closed_sidebar."', header_style='".$header_style."', header_style_solid = '".$header_style_solid."', header_style_gradients = '".$."', sidebar_style = '".$sidebar_style."', sidebar_style_solid = '".$sidebar_style_solid."', sidebar_style_gradients = '".$sidebar_style_gradients."'";

			if(mysqli_query($conn, $sql)) {
				echo "Setting has been changed";
			}
		}

	
}
?>

