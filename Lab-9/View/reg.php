<?php 

	$error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the blanks";
		}
	}


?>
<html>
<head>
	<title>Registration</title>
    
	<style type="text/css">
		*{
			margin: 1;
			padding: 1;
			font-family: Arial;
		}
		fieldset{
			
            background: #fefbd8;
            height: 95vh;
            margin-left: 80px;
		    margin-right: 78px;
			background-size: cover;
			background-position: center;
		}
        img{
                
                position: absolute;
                top: 2%;
                left: 10%;
            }
		h1{
            position: absolute;
                top: 10%;
                left: 20%;
       	color: red;
       }
        .form{
       	max-width: 1200px;
       	margin: auto;
       }
        .username{

		position: absolute;
		top: 16%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: transparent;
        
	}
	.password{

		position: absolute;
		top: 23%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
        
	}
	.firstname{

		position: absolute;
		top: 30%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
        
	}
	.lastname{

		position: absolute;
		top: 37%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
        
	}
	.gender{

		position: absolute;
		top: 44%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
        
	}
	.email{
		position: absolute;
		top: 51%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
	}
	.phone{
		position: absolute;
		top: 58%;
		left: 35%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
		
	}
	.submit{
		position: absolute;
		top: 68%;
		left: 41%;
		width: 6%;
		height: 33px;
		border: 1px solid;
		background: red;
        font-size: 18px;
        color: whitesmoke;
	}
    a{
		position: absolute;
		top: 68%;
		left:36%;
		width:4%;
		height: 30px;
		border: 1px solid;
        background: red;
        font-size: 18px;
        color: whitesmoke;
		
	}
	</style>
</head>
<body>
	<header><fieldset>
    <br>
        <br>
		<img src="Upload/fire_risk.png" align="left" width="130" height="100"> 
        
        <h1><u>Registration</u></h1>
	<script type="text/javascript">
      function validate() {
      
         if( document.myForm.username.value == "" ) {
            alert( "Please provide your username!" );
            document.myForm.username.focus() ;
            return false;
         }
		 if( document.myForm.password.value == "" || isNaN( document.myForm.password.value ) ||
            document.myForm.password.value.length != 6 ) {
            
            alert( "Please provide correct Password" );
            document.myForm.password.focus() ;
            return false;
         }
         if( document.myForm.firstname.value == "" ) {
            alert( "Please provide your firstname!" );
            document.myForm.firstname.focus() ;
            return false;
         }
         if( document.myForm.lastname.value == "" ) {
            alert( "Please provide your lastname!" );
            document.myForm.lastname.focus() ;
            return false;
         }
         if( document.myForm.gender.value == "" ) {
            alert( "Please provide your gender!" );
            document.myForm.gender.focus() ;
            return false;
         }
         if( document.myForm.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.email.focus() ;
            return false;
         }
          if( document.myForm.phone.value == "" ) {
            alert( "Please provide your phone!" );
            document.myForm.phone.focus() ;
            return false;
         }
         return( true );
      }
	</script>
        
    
	<div class="form">	
	<form method="POST" action="../Controller/regCheck.php"enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">
	
	    <input type="text" class="username" name="username" placeholder="username"><br>
	    <input type="password"class="password" name="password" placeholder="password"><br>
	    <input type="text" class="firstname" name="firstname" placeholder="firstname"><br>
	    <input type="text" class="lastname" name="lastname" placeholder="lastname"><br>
	    <input type="text" class="gender" name="gender" placeholder="gender"><br>
	    <input type="email" class="email" name="email" placeholder="email"><br>
	    <input type="text" class="phone" name="phone" placeholder="phone"><br>
        <a href="Welcome.php">Back</a>
        <input type="submit" class="submit" name="submit" value="Submit">
       
				<br>
						<?=$error?>

                            
		
	</form>
</div>
<?php include 'footer.php';?> 
</fieldset>
</header>	
</body>
</html>
