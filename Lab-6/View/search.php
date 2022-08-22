<?php
session_start();
 $error = "";
    if(isset($_GET['msg'])){
        if($_GET['msg'] == 'error'){
            $error = "Fill all the fields.";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Search</title>
    <style>
     
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
    .name{
        position: absolute;
        top: 6%;
        left: 20%;
        width: 25%;
        height: 28px;
        color:black;
        font-size: 30px;

    }
    .search{

        position: absolute;
        top: 10%;
        left: 20%;
        width: 25%;
        height: 28px;
         color:black ;
        font-size: 10px;
        font-family: Georgia, serif;
        
    }
   
    
    .box{
       position: absolute;
        top: 22%;
        left: 20%;
        width: 25%;
        height: 28px;
        border-bottom: 2px solid ;
        color:red;
        font-size: 15px;
        background: white;
    }
    .search{
       position: absolute;
        top: 32%;
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
        left: 55%;
        width: 15%;
        height: 35px;
        color: whitesmoke;
    }
    #result{
        position: absolute;
        top: 40%;
        left: 22%;
        width: 40%;
        height: 20px;
       
        color: black;
        
       
    }
  
    

    </style>
  
 
</head>

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
    <form action="../Controller/searchCheck.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
         <div class="name"><p><u>Patient Search</u></p></div>
        <div class="search"><h4>SEARCH</h4></div>
             

        <input type="text"class="box" id="name" name="name" placeholder="name" >

        <br> <br>
        <input type="submit" class="search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Patient list</b></div>
        
        <div class="error"><?=$error?>
                        </div>

    </form>
    </div>
</div>
<script >
    var action = "../Controller/searchCheck.php";
     function Result(pform) {
         var xhttp = new XMLHttpRequest();
         xhttp.onload = function(){
         document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?name=" +pform.name.value);
      xhttp.send();
       }
              </script>

    </fieldset>
</body>
</html>