<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
<style>
	fieldset {
  		background-color: #eeeeee;
		  margin-left: 80px;
		margin-right: 80px;
	}
		legend {
		background-color: gray;
		color: white;
        padding: 1px 10px;
		}
</style>

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
			<?php include 'header.php';?>
			</td>
	</tr>
		<tr  height="400">
			<td>
			
		<form>
		<fieldset>	
				<legend>FORGOT PASSWORD</legend>

				Enter email:
				<input type="text" name="email" value=" ">
				<hr>

				<input type="submit" name="submit" value="Submit">
			</fieldset>
			
	</form>
	
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