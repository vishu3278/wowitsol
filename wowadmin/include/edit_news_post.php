<?php 

require_once "../../config.php"; 





if($_POST['action'] == 'post-add'){

// print_r($_POST); die;

	

	$b_id = $_POST['b_id'] ;

	$title = $_POST['title'] ;

	$b_url_key = $_POST['b_url_key'];

	$description = $_POST['editor1'];

	$status = $_POST['b_status'];

	$b_featured_image = $_POST['b_old_image'];

	

	

	

	

	$created_date = date("Y-m-d : H:i:s", time());

	$modifieddate = date("Y-m-d : H:i:s", time());

	

	

	

	

	

	if(!empty($title) && !empty($status)  && !empty($description)   ){

		   

			if(isset($_FILES["b_featured_image"]))

			{

				$imagefolderpath = ROOT.'image/news/';

				$validextensions = array("jpeg", "jpg", "png", "JPG","PNG","JPEG");

				$random_string = chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) ;

				$temporary = explode(".", $_FILES["b_featured_image"]["name"]);

				$file_extension = end($temporary);

				if ((($_FILES["b_featured_image"]["type"] == "image/png") || ($_FILES["b_featured_image"]["type"] == "image/jpg") || ($_FILES["b_featured_image"]["type"] == "image/jpeg")

				) && in_array($file_extension, $validextensions)) {

				

					

					$filename = $random_string.time().'.'.$file_extension;

					$sourcePath = $_FILES['b_featured_image']['tmp_name']; // Storing source path of the file in a variable

					$targetPath = $imagefolderpath.$filename; // Target path where file is to be stored

					if(move_uploaded_file($sourcePath,$targetPath) ) {

					

						$b_featured_image = $filename;

					}

				

				

				}







			}			

			/* image upload end */

		

		

		

			    $qry = "UPDATE  news  SET  b_title= '".$title."',  b_description = '".addslashes($description)."',  b_featured_image = '".$b_featured_image."',  b_status = '".$status."',   b_edit_date = '".$modifieddate."' WHERE  b_id = '".$b_id."'";

				
				$sql = mysqli_query($conn, $qry);

				if($sql){

				if($status == 'publish') {

					$_SESSION['success'] = 'Your news has been edited successfully ';

				}else{

					$_SESSION['success'] = 'Your news has been draft ';

				}

				if(headers_sent() ) {

					echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=addnews&n_id=".$b_id."'); </script>";

				}else{

					header('Location: '.BASE_ADMIN_URL.'home.php?page=addnews&n_id='.$b_id.'');

				}

			}else{

				$_SESSION['error'] = mysqli_error();

				if(headers_sent() ) {

					echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=addnews&n_id=".$b_id."'); </script>";

				}else{

					header('Location: '.BASE_ADMIN_URL.'home.php?page=addnews&n_id='.$b_id.'');

				}



			}

					

	

		

	}













	else{



		$_SESSION['error'] = "Please fill required fields.";

		if(headers_sent() ) {

					echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=addnews&n_id=".$b_id."'); </script>";

				}else{

					header('Location: '.BASE_ADMIN_URL.'home.php?page=addnews&n_id='.$b_id.'');

				}

	}





	

}else{



	$_SESSION['error'] = "Invalid action.";

	if(headers_sent() ) {

					echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=addnews&n_id=".$b_id."'); </script>";

				}else{

					header('Location: '.BASE_ADMIN_URL.'home.php?page=addnews&n_id='.$b_id.'');

				}

}



?>