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
	<title>Report</title>
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
    	background-image: url("map.jpg"), url("report.jpg");
        background-position: right bottom, left top;
        background-repeat: no-repeat, repeat;
        background-size: 550px, 800px;
		text-align: center;
		font-family: 'Montserrat';
		font-size: 40px;
		position: absolute;
		top: 15%;
		right: 0%;
		bottom: 0%;
		left: 0%;
		
    }
    
    .id{

		position: absolute;
		top: 5%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.name{

		position: absolute;
		top: 12%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.phone{

		position: absolute;
		top: 19%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.email{

		position: absolute;
		top: 26%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.topic{

		position: absolute;
		top: 33%;
		left: 25%;
		width: 15%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: white;
        
	}
	.report{
		position: absolute;
		top: 40%;
		left: 25%;
		width: 30%;
		height: 80px;
        border-bottom: 2px solid ;
		color:red ;
        font-size: 15px;
        background: white;
	}
	.submit{
		position: absolute;
		top: 60%;
		left: 25%;
		width: 15%;
		height: 35px;
		border: 1px solid;
		background: red;
        font-size: 18px;
        color: white;
        font-weight: 700;
        cursor: pointer;
        outline: none;
	}
	.error{
		position: absolute;
		top: 63%;
		left: 35%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}

	
</style>
<script type = "text/javascript">
      function validate() {
      
         if( document.myForm.ReportersId.value == "" ) {
            alert( "Please provide your id!" );
            document.myForm.ReportersId.focus() ;
            return false;
         }
		 if( document.myForm.ReportersName.value == "" ) {
            alert( "Please provide your name!" );
            document.myForm.ReportersName.focus() ;
            return false;
         }
         if( document.myForm.ReportersPhoneNo.value == "" ) {
            alert( "Please provide your phoneNo!" );
            document.myForm.ReportersPhoneNo.focus() ;
            return false;
         }
         if( document.myForm.ReportersEmail.value == "" ) {
            alert( "Please provide your email!" );
            document.myForm.ReportersEmail.focus() ;
            return false;
         }
         if( document.myForm.ReportTopic.value == "" ) {
            alert( "Please provide your topic!" );
            document.myForm.ReportTopic.focus() ;
            return false;
         }
         if( document.myForm.Details.value == "" ) {
            alert( "Please provide your report!" );
            document.myForm.Details.focus() ;
            return false;
         }
         return( true );
      }
   
</script>
<body>
<fieldset>
<img src="Upload/fire_risk.png" align="left" width="130" height="100"> 
        <ul>
                <li><a  href="welcome2.php">HOME</a></li>
                <li><a href="prescription.php">PRESCRIPTION</a></li>
                <li><a href="updatePrescription.php">UPDATE_PRESCRIPTION</a></li>
                <li><a href="patientList.php">PATIENT_LIST</a></li>
                <li><a href="search.php">SEARCH_PATIENT_LIST</a></li>               
                <li> <a href="bloodDonate.php">BLOOD_DONATE</a></li>
                <li><a href="phone.php">PHONE</a></li>
                <li><a href="../Controller/logout.php">LOGOUT</a></li>
        </ul>
       
	   <div class="form">
	<form method="POST" action="../Controller/reportCheck.php" enctype="multipart/form-data" name = "myForm" onsubmit = "return(validate());">

		<input type="text"class="id" name="ReportersId" placeholder="reportersId"><br>
		<input type="text"class="name" name="ReportersName" placeholder="reportersName"><br>
		<input type="text"class="phone" name="ReportersPhoneNo" placeholder="reportersPhoneNo"><br>
		<input type="text"class="email" name="ReportersEmail" placeholder="reportersEmail"><br>
		<input type="text"class="topic" name="ReportTopic" placeholder="reportTopic"><br>
		<input type="text"class="report" name="Details" placeholder="details"><br>
		<input type="submit"class="submit" name="submit" value="submit">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	</fieldset>
</body>
</html>