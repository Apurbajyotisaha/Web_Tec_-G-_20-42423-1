<?php 

	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";
		$dbuser = "root";
		$dbpass = "";

		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}


	function login($username, $password){
		$conn = getConnection();
		$sql = "select * from mediteam where username='{$username}' and password='{$password}'";

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)){
			return true;
		}else{
			return false;
		}
	}

	
	function signup($username, $password, $firstname, $lastname,$gender,$email,$phone){
		$conn = getConnection();
		$sql = "insert into mediteam values('', '{$username}', '{$password}','{$firstname}','{$lastname}','{$gender}', '{$email}','{$phone}')";

		echo $sql;

		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUser(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from mediteam where username='{$username}'";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
	     
		    return $userData; 
	}

	function getUserById($id){
		$conn = getConnection();
		$sql = "SELECT * FROM users WHERE id=" .  $id;
        $result = mysqli_query($conn, $sql);

        $user_result = mysqli_fetch_assoc($result);
        return $user_result;
	}

	function updateUser($user){
		$conn = getConnection();
	}

?>
 