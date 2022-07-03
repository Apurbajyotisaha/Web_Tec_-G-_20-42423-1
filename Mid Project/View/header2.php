<?php session_start(); 
	if(!isset($_SESSION['user']) && !isset($_COOKIE['user'])){
		header('Location: login.php');
	}
	if(!isset($_SESSION['user'])){
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['user']), true);
	}

?>
<html>
<head>
	<title>Header2</title>
</head>
<body>

		
<img src="uploaded_folder/fire_risk.png" align="left" width="100" height="70">
				
		<div class="navigation">
				<div class="profile">Logged in as <u><?= $_SESSION['user']['name']?><span> |</span></u>
				
				<div class="logout">
					<form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
					</form>
				</div>
				</div>
				</div>
</body>
</html>