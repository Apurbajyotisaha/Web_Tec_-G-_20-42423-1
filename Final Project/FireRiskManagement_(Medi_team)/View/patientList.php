<?php

    ?> 

<html>
<head>
	<title>Patient List</title>
</head>
<body>
      

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
		text-align: center;
		font-family: 'Montserrat';
		font-size: 40px;
		position: absolute;
		top: 15%;
		right: 0%;
		bottom: 0%;
		left: 0%;
		
    }
	
	
	table {
           width: 80%;
		   left: 10%;
           border-collapse: collapse;
           position: absolute;
           top: 120px;
        }

        table, td, th {
           color: black;
           border:2px solid black;
           padding: 5px;
           background-color: yellow;
        }

        th {
        	text-align: left;
        }
        

	
</style>
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
	<form method="POST" action="../Controller/prescriptionCheck.php" enctype="multipart/form-data">
		<table>
			<tr>
				
				<td>Name</td>
				<td>Age</td>
				<td>Medicine</td>
				<td>No_Of_Medicine</td>
			    <td>Description</td>
			    			</tr>
			
			<?php 
			    require "../Model/prescriptionModel.php";
			    
			    
                $conn=getConnection();
                $sql="select * from prescriptiontable";
                $query = mysqli_query($conn, $sql);
                
                while($result = mysqli_fetch_array($query)){
                	?>
                	<tr>
                		
                		 <td><?php echo $result['name']; ?></td>
                         <td><?php echo $result['age'] ;?></td>
			             <td><?php echo $result['medicine'];?></td>
			             <td><?php echo $result['no_of_medicine'] ;?></td>
                         <td><?php echo $result["description"]; ?></td>
                         </tr>
                	<?php 
                      }
                	?>
                    
		</table>

	</form>
	</div>
	
	</div> 
                    </fieldset>
</body>
</html>
	
</body>
</html>