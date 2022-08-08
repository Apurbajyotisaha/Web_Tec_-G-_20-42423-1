<?php
     
   
   require('../Model/userModel.php');

    if(isset($_REQUEST['submit'])){
        
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];



      if($username != null && $password != null){

        $status = login($username, $password);
      	
       if($status){
        session_start();
                $_SESSION['status'] = 'true';
                setcookie('status', 'true', time()+3600, '/');
                header('location: ../View/welcome2.php');
            }else{
                header('location: ../View/login.php?msg=error');
            }
       }
    }

?>