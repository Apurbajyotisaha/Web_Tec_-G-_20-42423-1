<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

	function addemail($name, $email, $message){
		$conn = getConnection();
		$sql = "insert into emailtable values('', '{$name}', '{$email}','{$message}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
 