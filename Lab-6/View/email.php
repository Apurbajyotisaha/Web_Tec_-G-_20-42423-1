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
	<title>Email</title>
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
    	background-image: url("email.jpg");
		text-align: center;
		font-family: 'Montserrat';
		font-size: 40px;
		position: absolute;
		top: 15%;
		right: 0%;
		bottom: 0%;
		left: 0%;
		
    }
	.name{

		position: absolute;
		top: 15%;
		left: 50%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 18px;
        background: white;
        
	}
	.email{
		position: absolute;
		top: 25%;
		left: 50%;
		width: 25%;
		height: 28px;
        color:red ;
        font-size: 18px;
        background: white;
	}
	
	.message{
		position: absolute;
		top: 35%;
		left: 50%;
		width: 25%;
		height: 70px;
        color:red ;
        font-size: 18px;
        background: white;
	}
	.submit{
		position: absolute;
		top: 55%;
		left: 55%;
		width: 15%;
		height: 35px;
		border: 1px solid;
		background: red;
        font-size: 18px;
        color: whitesmoke;
        font-weight: 700;
        cursor: pointer;
        outline: none;
	}
	.error{
		position: absolute;
		top: 65%;
		left: 55%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
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
	<form method="POST">

		<input id="name" type="text"class="name" name="name" placeholder="name"><br>
		<input id="email" type="text"class="email" name="email" placeholder="email"><br>
		<input id="message" type="text"class="message" name="message" placeholder="message"><br>
		<input type="submit"class="submit" name="send" onclick="ajaxinsertdata()" value="send">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	<script type = "text/javascript">
   
    
      function ajaxinsertdata(){

           let name1 = document.getElementById('name').value;
            let email1 = document.getElementById('email').value;
            let message1 = document.getElementById('message').value;
           
           let json = {
           	'name' :name1,
           	'email' :email1,
           	'message' :message1
           };

           let data = JSON.stringify(json);

            if (name1 == '' || email1 == '' || message1 == '') {
                alert("Please Fill All Fields");
                } 
                else{
                  let xhttp = new XMLHttpRequest();
                  xhttp.open('POST', '../Controller/emailCheck.php', true);
	               xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	               xhttp.send('data='+data);

	               xhttp.onreadystatechange = function (){
	               	if(this.readyState == 4 && this.status == 200){
			
			               alert(this.responseText);
			
		               }
	               }

                }

      }
</script>
    </fieldset>
</body>
</html>