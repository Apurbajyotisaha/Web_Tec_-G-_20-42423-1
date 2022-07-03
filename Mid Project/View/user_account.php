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
		<table border="1" width="50%">
			<tr>
				<td width="50%">
                <h4>Account For Medi_Team_Member</h4><hr><br>
					<ul style="list-style-type:disc;">
						<li><a href="">Dashboard</a></li>
						<li><a href="view_profile.php">View Profile</a></li>
						<li><a href="edit_profile.php">Edit Profile</a></li>
						<li><a href="change_pp.php">Change Profile Picture</a></li>
						<li><a href="change_pass.php">Change Password</a></li>
						<li><a href="provideMedicine.php">Provide Medicine</a></li>
						<li><a href="fund.php">Donate</a></li>
						<form method="POST" action="logout.php">
							<li><button type="submit" name="logout_btn">Log out</button></li>
						</form>
					</ul>
				</td>
				<td width="30%">
					<h2 align="center">Welcome </h2>
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