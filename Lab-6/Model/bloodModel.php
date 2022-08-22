<?php 

		$dbuser = "root";
		$dbpass = "";
	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}


	
	
	function adddonar($donarid,$donarname, $age, $bloodgroup, $phone,$address){
		$conn = getConnection();
		$sql = "insert into blooddonar values('{$donarid}', '{$donarname}', '{$age}','{$bloodgroup}','{$phone}','{$address}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
?>
 