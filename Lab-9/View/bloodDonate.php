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
	<title>Blood Donate</title>
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
     
.donarid{
position: absolute;
top: 22%;
left: 30%;
width: 25%;
height: 28px;
border-bottom: 2px solid ;
color:red ;
font-size: 15px;
background: transparent;
border-radius: 8px;

}
	.donarname{

		position: absolute;
		top: 29%;
		left: 30%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red ;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
        
	}
	.age{
		position: absolute;
		top: 36%;
		left: 30%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.bloodgroup{
		position: absolute;
		top: 43%;
		left: 30%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.phone{
		position: absolute;
		top: 50%;
		left: 30%;
		width: 25%;
		height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	.address{
		position: absolute;
		top: 57%;
		left: 30%;
		width: 25%;
		height: 26px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: transparent;
        border-radius: 8px;
	}
	
	.submit{
		position: absolute;
		top: 63%;
		left: 35%;
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
		top: 70%;
		left: 20%;
		width: 15%;
		height: 35px;
		color: whitesmoke;
	}
	#h3{
		position: absolute;
		top: 55%;
		left: 45%;
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
	<form method="POST" >

		<input id="donarid" type="text"class="donarid" name="donarid" placeholder="Donar Id"><br>
		<input id="donarname" type="text"class="donarname" name="donarname" placeholder="Donar Name"><br>
        <input id="age" type="text"class="age" name="age" placeholder="Age"><br>
		<input id="bloodgroup" type="text"class="bloodgroup" name="bloodgroup" placeholder="Blood Group"><br>
		<input id="phone" type="text"class="phone" name="phone" placeholder="Phone no"><br>
		<input id="address" type="text"class="address" name="address" placeholder="Address"><br>
		
		<input type="submit"class="submit" name="submit" onclick="ajaxinsertdata()" value="Submit">
				<br>
						<div class="error"><?=$error?>
                        </div>
		
	</form>
	</div>
	
	</div> 
	<script>
   
      
      function ajaxinsertdata(){
      	    let donarid = document.getElementById('donarid').value;
            let donarname = document.getElementById('donarname').value;
            let age = document.getElementById('age').value;
            let bloodgroup = document.getElementById('bloodgroup').value;
            let phone = document.getElementById('phone').value;
            let address = document.getElementById('address').value;
          
           var dataString ='donarid1=' + donarid + '&donarname1=' + donarname + '&age1=' + age + '&bloodgroup1=' + bloodgroup + '&phone1=' + phone + '&address1=' + address; 
           console.log (dataString); 
           if (donarid == '' || donarname == '' || age == '' || bloodgroup == ''|| phone == ''|| address == '') {
                alert("Please Fill All Fields");
                } else {
                    
                    let http = new XMLHttpRequest();
                    http.open('POST', '../Controller/bloodDonateCheck.php', true);
                    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    http.send(dataString);
                    http.onreadystatechange = function(){
                        
                        if(this.readyState == 4 && this.status == 200){
                            alert(this.responseText);
                        }
                        }
                        }
                    }
</script>
<?php include 'footer.php';?>
</fieldset>
</body>
</html>