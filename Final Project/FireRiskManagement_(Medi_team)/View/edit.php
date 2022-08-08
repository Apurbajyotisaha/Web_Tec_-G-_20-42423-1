<?php 

	
	require('../Model/prescriptionModel.php');

	$id = $_REQUEST['id'];
	$user = getUserById($id);

	 $error = "";
	if(isset($_GET['msg'])){
		if($_GET['msg'] == 'error'){
			$error = "Fill all the fields.";
		}
	}
?>

<html>
<head>
	<title>Edit Prescription</title>
</head>
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
      .id{

		position: absolute;
		top: 10%;
		left: 40%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
        
	}
	.name{

		position: absolute;
		top: 15%;
		left: 40%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
		color:red;
        font-size: 15px;
        background: white;
        
	}
	.age{
		position: absolute;
		top: 22%;
		left: 40%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.medicine{
		position: absolute;
		top: 29%;
		left: 40%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.no_of_medicine{
		position: absolute;
		top: 36%;
		left: 40%;
		width: 25%;
		height: 28px;
		border-bottom: 2px solid ;
		color:red;
        font-size: 15px;
        background: white;
	}
	.image{
		position: absolute;
		top: 43%;
		left: 40%;
		width: 25%;
		height: 26px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.description{
		position: absolute;
		top: 50%;
		left: 40%;
		width: 25%;
		height: 70px;
		
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
	}
	.submit{
		position: absolute;
		top: 65%;
		left: 45%;
		width: 15%;
		height: 35px;
		border: 2px solid;
		background: red;
        font-size: 18px;
        color: white;
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
		color: red;
	}
	.data1{

		position: absolute;
		top: 10%;
		left: 37%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:black ;
       
	}
	.data2{

		position: absolute;
		top: 15%;
		left: 35%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:black ;
        
	}
	.data3{
		position: absolute;
		top: 22%;
		left: 36%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:black ;
	}
	.data4{
		position: absolute;
		top: 28%;
		left: 33%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:black ;
	}
	.data5{
		position: absolute;
		top: 36%;
		left: 27%;
		width: 25%;
		height: 28px;
		font-size: 25px;
		color:black ;
	}
	.data6{
		position: absolute;
		top: 53%;
		left: 31%;
		width: 25%;
		height: 26px;
		font-size: 25px;
		color:black ;
	}
	.data7{
		position: absolute;
		top: 42%;
		left: 35%;
		width: 25%;
		height: 26px;
		font-size: 25px;
		color:black ;
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

	<form method="POST" action="../Controller/editCheck.php">
		<table>
			<tr> 
				<td class="data1">ID: </td>
				<td><input type="text" class="id" name="id" value="<?=$user['id']?>"><br></td>
			</tr>
			<tr>
				<td class="data2">Name: </td>
				<td><input type="text"class="name" name="name" value="<?=$user['name']?>"><br></td>
			</tr>
			<tr>
				<td class="data3">Age: </td>
				<td><input type="text"class="age" name="age" value="<?=$user['age']?>"><br></td>
			
			</tr>
			<tr>
				<td class="data4">Medicine: </td>
				<td><input type="text"class="medicine" name="medicine"value="<?=$user['medicine']?>"><br></td>
			</tr>
			<tr>
				<td class="data5">No_Of_Medicine: </td>
				<td><input type="text"class="no_of_medicine" name="no_of_medicine" value="<?=$user['no_of_medicine']?>"><br></td>
			</tr>
			<tr>
				<td class="data6">Description: </td>
				<td><input type="text"class="description" name="description" value="<?=$user['description']?>"><br></td>
			</tr>
			<tr>
				<td class="data7">Photo: </td>
				<td><input type="file"class="image" name="photo"  value="<?=$user['photo']?>"><br></td>
			</tr>
		</table>
		
		
		
		<input type="submit"class="submit" name="update" value="update"><br>
		<div class="error"><?=$error?>
                        </div>

		
		
	</form>
</div>
</div>
<?php include 'footer.php';?>
</fieldset>
</body>
</html>