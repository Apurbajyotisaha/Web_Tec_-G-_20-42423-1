<?php
    
    session_start();
    require('../Model/userModel.php');

   

    if(isset($_REQUEST['submit'])){
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $gender=$_REQUEST['gender'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];

    	if($username !=null && $password !=null && $firstname !=null && $lastname !=null && $gender !=null && $email !=null && $phone !=null){

    		$status=signup($username, $password, $firstname, $lastname,$gender,$email,$phone);

    		

    		if($status){
    			header('location: ../View/login.php');
    		}
    		else{
    			echo("Form not submitted");
    		}
    	}
    	else{
    		header('location: ../View/reg.php?msg=error');
    	}
    }
?> 