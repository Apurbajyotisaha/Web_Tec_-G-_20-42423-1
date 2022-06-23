<?php
    
    $nameError = "";
    $name="";
     $emailError = "";
    $userEmail="";
    $unameError = "";
    $userName="";
    $passwordError="";
    $password="";
    $cPasswordError="";
    $confirmPassword="";


    if(isset($_REQUEST['submit']))
    {
        if ($_REQUEST['name']==null) {
            $nameError="Name is empty..";
        }
        else
        {
            $name=$_REQUEST['name'];
        }

    	if ($_REQUEST['email']==null) {
    		$emailError="Email is empty..";
    	}
    	else
    	{
    		$userEmail=$_REQUEST['email'];
    	}

        if ($_REQUEST['userName']==null) {
            $unameError="UserName is empty..";
        }
        else
        {
            $userName=$_REQUEST['userName'];
        }

        if ($_REQUEST['password']==null) {
            $passwordError="Password is empty..";
        }
        else
        {
            $password=$_REQUEST['password'];
        }

         
            if($_REQUEST['confirmPassword']==null){
                 
                 $cPasswordError="ConfirmPassword is empty..";
            }
            
            else{
                $confirmPassword=$_REQUEST['confirmPassword'];
            }
         
            
        
         

        
    
    }

 ?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
</head>
<body>
    <table border="1" width="50%">
        <tr height="70">
            <td align="right">
                <img src="company.png" align="left" width="100" height="70">
                <a href="">Home</a>&nbsp|
                <a href="">Login</a>&nbsp|
                <a  href="">Registration</a>
            </td>

        </tr>
        <tr height="100px">
            <td>
             <form method="POST" action="">
                <fieldset>
                    <legend>REGISTRATION</legend>
                    <h4>Name :<input type="text" name="name" value="<?=$name?>"><?=$nameError?></h4><hr>
                    <h4>Email :<input type="email" name="email" value="<?=$userEmail?>"><?=$emailError?></h4><hr>
                    <h4>User Name :<input type="text" name="userName" value="<?=$userName?>"><?=$unameError?></h4><hr>
                    <h4>Password :<input type="password" name="password" value="<?=$password?>"><?=$passwordError?></h4><hr>
                    <h4>Confirm Password :<input type="password" name="confirmPassword" value="<?=$confirmPassword?>"><?=$cPasswordError?></h4>
                    <hr>
                    <h4>Gender :<input type="radio" name="gender" value="">Male
                        <input type="radio" name="gender" value="">Female
                        <input type="radio" name="gender" value="">Other</h4><hr>
                    <h4>Date Of Birth :<input type="date" name="date" value=""></h4><hr>
                    <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">

                </fieldset>
             </form>
            </td>
        </tr>
        <tr height="20">
            
            <td align="center">
                <h3>Copyright @2017</h3>
            </td>
        </tr>
        
    </table>

</body>
</html>