
<!DOCTYPE html>
<html>
<head>
	<title>User_Account</title>

<style type="text/css">
		.red{
			color: #d41c0f;
			font-family: Perpetua;
		}</style>

</head>
<body style=" padding-top: 80px;">
    <table align="center"; border="1" width="50%">
		<tr height="100">
			<td align="right">
			<?php include 'header2.php';?>
			</td>
	</tr>
		<tr  height="400">
			<td align="center">
		<table border="1" width="60%">
			<tr width="60%">
				<td width="90%">
                <h4>Account For Medi_Team_Member</h4><hr><br>
					<ul style="list-style-type:disc;">
						<li><a href="user_account.php ">Dashboard</a></li>
						<li><a href="view_profile.php">View Profile</a></li>
						<li><a href="edit_profile.php">Edit Profile</a></li>
						<li><a href="change_pp.php">Change Profile Picture</a></li>
						<li><a href="change_pass.php">Change Password</a></li>
                        <li><a href="provideMedicine.php">Provide Medicine</a></li>
						<form method="POST" action="logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
					</ul>
				</td>
				<td width="90%">

                <?php  
                
                $Medicine_Name = $Number_of_Medicine = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

			$set = [
				'Medicine_Name' => $_POST['Medicine_Name'],
				'Number_of_Medicine' => $_POST['Number_of_Medicine']
			];

			if(!file_exists('medicine.json')){
				@file_put_contents('medicine.json', '');
			}

			$medicine = json_decode(file_get_contents('medicine.json'), true);

			foreach ($medicine as $key => $value) {
				if($value['Medicine_Name'] == $_POST['Medicine_Name'] || $value['Number_of_Medicine'] == $_POST['Number_of_Medicine'] ){
					$userExist = "medicine Already Exist!";
					break;
				}
			}

				$users[] = $set;
				file_put_contents('medicine.json', json_encode($users));
				header('Location: user_account.php');
			
	}
	?>          

<fieldset width="60%">
						<legend>Provide Medicine</legend>
						<form method="post" action="">
								
								<legend>Medicine_Name</legend>
								<input type="text" name="Medicine_Name" value="">
								<hr>

								<legend>Number_of_Medicine</legend>
								<input type="text" name="Number_of_Medicine" value="">
								<hr>

								<input type="submit" name="submit" value="Submit">

						</fieldset>
				</td>
			</tr>
		</table>

			</td>
		</tr>

	<tr height="50">
			
			<td align="center">
			<?php include 'footer.php';?>
			</td>
		</tr>
		</table>
</body>
</html>