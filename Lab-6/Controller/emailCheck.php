<?php 
	session_start();
    require('../Model/emailModel.php');

	

	$data = $_POST['data'];
	$json = json_decode($data);

	$name=$json->name;
	$email=$json->email;
	$message=$json->message;
	

	
	$status=addemail($name, $email, $message);
			 if($status){
			 	echo "Submit Successful";
    		}
    		else{
    			echo("Form not submitted");
    		}
    	


?>