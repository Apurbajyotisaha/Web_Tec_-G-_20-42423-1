<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Profile</title>
</head>
<body>
	<table border="1" width="50%">
		<tr height="70">
			<td colspan="2" align="right">
				<img src="company.png" align="left" width="100" height="70">
				<h4>Logged in as
				<a href="">Bob</a>&nbsp|
			    <a href="login.php">Logout</a>|</h4>
			    
			   
			</td>
		</tr>
		<tr height="200">
			<td width="300px"><h3>Account</h3><hr>
				<ul>
					<li><a href="dashboard.php">Dashboard</a></li>
					<li><a href="viewProfile.php">View Profile</a></li>
					<li><a href="editProfile.php">Edit Profile</a></li>
					<li><a href="profilePicture.php">Change Profile Picture</a></li>
					<li><a href="changePassword.php">Change Password</a></li>
					<li><a href="publicHome.php">Logout</a></li>
				</ul>
			</td>
			<td>
				 <form method="POST" action="">
             	<fieldset>
             		<legend>EDIT PROFILE</legend>
             		<h4>Name :<input type="text" name="name" value=""></h4><hr>
             		<h4>Email :<input type="email" name="email" value=""></h4><hr>
             		<h4>Gender :<input type="radio" name="gender" value="">Male
						<input type="radio" name="gender" value="">Female
						<input type="radio" name="gender" value="">Other</h4><hr>
					<h4>Date Of Birth :<input type="date" name="date" value=""></h4><hr>
					<input type="submit" name="submit" value="Submit">
				
             	</fieldset>
             </form>
			</td>
			
		</tr>
		<tr height="40">
			
			<td colspan="2" align="center">
				<h3>Copyright @2017</h3>
			</td>
		</tr>
		
	</table>
</body>
</html>