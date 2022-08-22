<?php 
$con = mysqli_connect('localhost', 'root', '', 'webtech');

	if($con){
		echo "Done";
	}else{
		echo "error";
	}
?>