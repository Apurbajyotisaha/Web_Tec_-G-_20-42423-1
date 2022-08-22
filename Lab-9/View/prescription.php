<?php 
	
	
    $error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the fields.";
		}
	}
?>

<html>
<head>
	<title>Prescription</title>
</head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style type="text/css">
	{
			margin: 0;
			padding: 0;
			
		}	
        fieldset{
			
            background: #fefbd8;
            height: 95vh;
            margin-left: 80px;
		    margin-right: 78px;
            margin-top: 12px;
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
		top: 10%;
		right: 8%;
		bottom: 8%;
		left: 8%;
	}
    img{
                
                position: absolute;
                top: 3%;
                left: 10%;
            }
            ul{
			float: right;
			list-style-type: none;
			margin-top: 50px;
            margin-right: 2px;
            margin-left: 250px;
		}
		ul li{
			display: inline-block;
		}
		ul li a{
			text-decoration: none;
			color: red;
			padding: 1px 4px;
			border: 1px solid red;
			transition: 0.4s ease;
		}
		ul li a:hover{
			background-color: red;
			color: black;
		}
    .form{
    	color:#de8621;
    	background-image: url("addprescriptionBackground.jpg");
    	background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 40px;
		position: absolute;
		top: 15%;
		right: 0%;
		bottom: 0%;
		left: 0%;
		
    }

.title{
       	position: absolute;
       	top: 25%;
       	left: 47%;
       	transform: translate(-50%,-50%);
       }
       .title h1{
       	color: red;
       	font-size: 35px ;
       }
	.name{

		position: absolute;
		top: 22%;
		left: 35%;
		width: 25%;
		height: 25px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.age{
		position: absolute;
		top: 27%;
		left: 35%;
		width: 25%;
		height: 25px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.medicine{
		position: absolute;
		top: 32%;
		left: 35%;
		width: 25%;
		height: 25px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.no_of_medicine{
		position: absolute;
		top: 37%;
		left: 35%;
		width: 25%;
		height: 25px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.image{
		position: absolute;
		top: 42%;
		left: 35%;
		width: 25%;
		height: 25px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.description{
		position: absolute;
		top: 47%;
		left: 35%;
		width: 25%;
		height: 50px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.submit{
		position: absolute;
		top: 58%;
		left: 44.2%;
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
	.error{
		position: absolute;
		top: 25%;
		left: 70%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}
	

	
</style>
<script type = "text/javascript">
   
      function validate() {
      
         if( document.myForm.name.value == "" ) {
            alert( "Please provide name!" );
            document.myForm.name.focus() ;
            return false;
         }
		 if( document.myForm.age.value == "" ) {
            alert( "Please provide age!" );
            document.myForm.age.focus() ;
            return false;
         }
         if( document.myForm.medicine.value == "" ) {
            alert( "Please provide medicine" );
            document.myForm.medicine.focus() ;
            return false;
         }
          if( document.myForm.no_of_medicine.value == "" ) {
            alert( "Please provide no_of_medicine!" );
            document.myForm.no_of_medicine.focus() ;
            return false;
         }
          if( document.myForm.image.value == "" ) {
            alert( "Please provide image!" );
            document.myForm.image.focus() ;
            return false;
         }
          if( document.myForm.description.value == "" ) {
            alert( "Please provide your description!" );
            document.myForm.description.focus() ;
            return false;
         }

         return( true );
      }
   
</script>
<body><fieldset>
<img src="Upload/fire_risk.png" align="left" width="130" height="100"> 
        <ul>
                <li><a  href="welcome2.php">HOME</a></li>
                <li><a href="prescription.php">PRESCRIPTION</a></li>
                <li><a href="updatePrescription.php">UPDATE_PRESCRIPTION</a></li>
                <li><a href="patientList.php">PATIENT_LIST</a></li>
                <li><a href="search.php">SEARCH_PATIENT_LIST</a></li>               
                <li> <a href="bloodDonar.php">BLOOD_DONATE</a></li>
                <li><a href="phone.php">PHONE</a></li>
                <li><a href="../Controller/logout.php">LOGOUT</a></li>
        </ul>
       
	   <div class="form">
	<form method="POST" action="../Controller/prescriptionCheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">

		<input type="text"class="name" name="name" placeholder="name"><br>
		<input type="text"class="age" name="age" placeholder="age"><br>
		<input type="text"class="medicine" name="medicine" placeholder="medicine"><br>
		<input type="text"class="no_of_medicine" name="no_of_medicine" placeholder="no_of_medicine"><br>
		<input type="file"class="image" name="image"><br>
		<input type="text"class="description" name="description" placeholder="description"><br>
		<input type="submit"class="submit" name="submit" value="Submit">
				<br>
				
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
    <div class="title">
			<h1> <u>Prescription</u> </h1>
		</div>
        <?php include 'footer.php';?>
	</fieldset>
</body>
</html>