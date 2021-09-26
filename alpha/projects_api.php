<?php

header('Content-Type: application/json');

$con = mysqli_connect("localhost", "root", "", "wowitsolutions");

if(!$con){
	die('Could not connect: '.mysqli_error());
}

$result = mysqli_query($con, "SELECT * FROM projects WHERE show_home=1 AND active=1");

while($row = mysqli_fetch_assoc($result)){
	$output[]=$row;
}

echo json_encode($output, JSON_PRETTY_PRINT);

mysqli_close($con);

?>