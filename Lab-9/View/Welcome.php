
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fire Risk</title>

	<style type="text/css">
		*{
			margin: 2;
			padding: 2;
			font-family: Arial;
		}
		fieldset{
			
            background: #fefbd8;
            height: 95vh;
            margin-left: 80px;
		    margin-right: 80px;
            margin-top:3%;
		    margin-bottom: 3%;
			background-size: cover;
			background-position: center;
		}
		
       .main{
       	max-width: 1200px;
       	margin: auto;
       }
       .title{
       	position: absolute;
       	top: 60%;
       	left: 50%;
       	transform: translate(-50%,-50%);
       }
       .title h1{
       	color: red;
       	font-size: 36px ;
       }

       

	</style>
</head>
<body><fieldset>
	<header>
		<div class="main">
        <?php include 'header.php';?>
    </div>
	
		<div class="title">
			<h1>Welcome To Fire Risk</h1>
            <br><br><br><br>
            
        </div>           
	</header>
    
    <?php include 'footer.php';?> 
    </fieldset>

</body>
</html>