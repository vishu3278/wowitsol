<?php
include ('../../config.php');
header('Content-Type: application/json');

$handle = fopen('php://input','r');

$data = fgets($handle);

$fieldArray = json_decode($data,true);

$id = $fieldArray['id'];

$qry = "SELECT * FROM careers WHERE id = '".$id."'";

$sql = mysqli_query($conn, $qry);

if(mysqli_num_rows($sql) > 0 )
		{
			$result = mysqli_fetch_assoc($sql);
			$result = array('status'=>1, 'data'=>$result);
		}else{

			$result = array('status'=>0,'error'=>'mysqli_error');
		}				
	
echo json_encode($result);
?>