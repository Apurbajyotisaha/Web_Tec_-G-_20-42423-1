<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style type="text/css">
		.red{
			color: #d41c0f;
			font-family: Perpetua;
		}
	</style>
</head>
<body style=" padding-top: 80px;">
    <table align="center"; border="1" width="50%">
		
		<tr height="300">
			<td>
                <?php  
                
                $Donar_Name = $Blood_group = "";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

			$set = [
				'Donar_Name' => $_POST['Donar_Name'],
				'Blood_group' => $_POST['Blood_group']
			];

			if(!file_exists('blood_donate.json')){
				@file_put_contents('blood_donate.json', '');
			}

			$donate = json_decode(file_get_contents('blood_donate.json'), true);

			foreach ($medicine as $key => $value) {
				if($value['Donar_Name'] == $_POST['Donar_Name'] || $value['Number_of_Medicine'] == $_POST['Number_of_Medicine'] ){
					$userExist = "Donar Already Exist!";
					break;
				}
			}

				$users[] = $set;
				file_put_contents('blood_donate.json', json_encode($users));
				header('Location: welcome.php');
			
	}
	?>          

<fieldset width="60%">
						<legend>Blood_Donate</legend>
						<form method="post" action="">
								
								<legend>Donar_Name</legend>
								<input type="text" name="Donar_Name" value="">
								<hr>

								<legend>Blood_group</legend>
								
                            <select name="Blood_group">
                                <option value="" default>Select</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </select>
								<hr>

								<input type="submit" name="submit" value="Submit">

						</fieldset>
                    </td>
		</tr>
		</table>
</body>
</html>