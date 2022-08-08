<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "invalid username/password";
		}
	}


?>
<html>
<head>
	<title>Login</title>
</head>
<style type="text/css">
	fieldset{
			
            background: #fefbd8;
            height: 95vh;
            margin-left: 80px;
		    margin-right: 78px;
			background-size: cover;
			background-position: center;
		}
        fieldset body{
		color:black;
		background-size: 300px;
		background-color: #fefbd8;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 30px;
		position: absolute;
		top: 8%;
		right: 8%;
		bottom: 8%;
		left: 8%;
		border-radius: 10px;
	}
        img{
                
                position: absolute;
                top: 2%;
                left: 15%;
            }
            ul{
			float: right;
			list-style-type: none;
			margin-top: 70px;
            margin-right: 150px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: red;
			padding: 5px 20px;
			border: 1px solid red;
			transition: 0.6s ease;
		}
		ul li a:hover{
			background-color: red;
			color: black;
		}
    



	.login{
		padding-top: 15px;
		border-bottom: 2px solid;
		position: absolute;
		top: 20%;
		left: 35%;
        font-family: 'Montserrat';
		font-size: 40px;
        color: red;
		
	}
	.name{
		position: absolute;
		top: 33%;
		left: 35%;
		width: 17%;
		height: 25px;
		
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background-color: whitesmoke ;

	}
	.password{
		position: absolute;
		top: 40%;
		left: 35%;
		width: 17%;
		height: 25px;
		border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background-color: whitesmoke ;

	}
	.button{
		position: absolute;
		top: 48%;
		left: 40%;
		width: 7%;
		height: 25px;
		border: 2px solid;
		background: red;
        font-size: 18px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
       
	}
	.signup{
		position: absolute;
		top: 53%;
		left: 37%;
        font-size: 20px;

	}
</style>
<script type = "text/javascript">
   
      function validate() {
      
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.username.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" || isNaN( document.myForm.password.value ) ||
            document.myForm.password.value.length != 6 ) {
            
            alert( "Please provide correct Password" );
            document.myForm.password.focus() ;
            return false;
         }

         return( true );
      }
</script>
<fieldset>
<body>
 
		<img src="Upload/fire_risk.png" align="left" width="130" height="100"> 
        <ul>
                <li><a href="Welcome.php"><b>Home</b></a></li>
                <li><a href="reg.php"><b>Registration</b></a></li>
            </ul>
	<div class="body">
	
	<form method="POST" action="../Controller/loginCheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
	
    <div class="login">Login<br></div>
		<div class="form">
			<input type="text"class="name" name="username" placeholder="name"><br>
			<input type="password"class="password" name="password" placeholder="password"><br></div>
			<div class="submit">
			<input type="submit"class="button" name="submit" value="Submit">
			<br></div>
			<div class="signup">
					<p>For Registration <a href="reg.php">Signup </a></p>
				
						<br>
						<?=$error?>
						</div>

		</div>
		
	</form>
	<?php include 'footer.php';?>
</body>
</fieldset>
</html>