<?php 

	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome</title>
	<style type="text/css">
	*{
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
    
    
    
     .title{
       	position: absolute;
       	top: 53.5%;
       	left: 50%;
       	transform: translate(-50%,-50%);
       }
       .title h1{
       	color: red;
       	font-size: 50px ;
       }
	</style>
</head>
<body><fieldset>
<img src="Upload/fire_risk.png" align="left" width="130" height="100"> 
        <ul>
		<li><a  href="welcome2.php">HOME</a></li>
                <li><a href="prescription.php">PRESCRIPTION</a></li>
                <li><a href="updatePrescription.php">UPDATE_PRESCRIPTION</a></li>
                <li><a href="patientList.php">PATIENT_LIST</a></li>
                <li><a href="search.php">SEARCH_PATIENT_LIST</a></li>               
                <li> <a href="bloodDonate.php">BLOOD_DONATE</a></li>
                <li><a href="report.php">REPORT</a></li>
                <li><a href="phone.php">PHONE</a></li>
                <li><a href="email.php">EMAIL</a></li>
                <li><a href="../Controller/logout.php">LOGOUT</a></li>
        </ul>
	
	<div class="title">
			<h1> Welcome in Medi Team </h1>
		</div>
        <?php include 'footer.php';?>
</fieldset>

</body>
</html>