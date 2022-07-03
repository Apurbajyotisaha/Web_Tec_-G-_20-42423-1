
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
		<table border="1" width="90%">
			<tr>
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
				<td width="30%">
				<fieldset>
						<legend>PROFILE</legend>
						<table width="100%">
							<tr>
								<td width="25%">Name</td>
								<td><span>:</span><?= $_SESSION['user']['name']?></td>
								<td rowspan="3" width="100%" align="center"><img src="<?= $_SESSION['user']['profilePicPath'] ?>" height="200" width="200"></td>
							</tr>

							<tr>
								<td width="25%">Email</td>
								<td><span>:</span><?= $_SESSION['user']['email']?></td>
							</tr>

							<tr>
								<td width="25%">Gender</td>
								<td><span>:</span><?= $_SESSION['user']['gender']?></td>
							</tr>

							<tr>
								<td width="25%">DoB</td>
								<td><span>:</span><?= $_SESSION['user']['dob']?></td>
								<td align="center" width="100%"><a href="change_pp.php">Change</a></td>
							</tr>
						</table><hr>
						<a href="edit_profile.php">Edit Profile</a>
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