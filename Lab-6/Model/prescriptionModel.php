<?php 
		$dbuser = "root";
		$dbpass = "";
	function getConnection(){
		$host = "localhost";
		$dbname= "webtech";

		$conn = mysqli_connect('localhost', 'root', '', 'webtech');
		return $conn;
	}
	function addprescription($name, $age, $medicine, $no_of_medicine,$destfile,$description){
		$conn = getConnection();
		$sql = "insert into prescriptiontable values('', '{$name}', '{$age}','{$medicine}','{$no_of_medicine}','{$destfile}', '{$description}')";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getAllUser(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from prescriptiontable where name='{$name}'";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
		    return $userData; 
	}
	function getUserById($id){
		$conn = getConnection();
		$sql = "select * from prescriptiontable where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}
	function editCheck($user){
		$conn = getConnection();
		$sql = "update prescriptiontable set name='{$user['name']}', age='{$user['age']}', medicine='{$user['medicine']}' , no_of_medicine='{$user['no_of_medicine']}', description='{$user['description']}', photo='{$user['photo']}'where id={$user['id']}";
		if(mysqli_query($conn, $sql)){
			return true;
		}else{
			return false;
		}
	}
	function getTable(){
		$conn = getConnection();
		$userData = array(); 
		$sql="select * from prescriptiontable ";
	    $result = mysqli_query($conn, $sql);
	    $user_result = mysqli_fetch_assoc($result); 
		    return $userData; 
	 }
	function searchUser($name){
    $conn=getConnection();
    $sql =$conn->prepare( "SELECT * FROM `prescriptiontable` WHERE name = ?");
    $sql->bind_param("s",$name);
    $sql->execute();
    $result=$sql->get_result();
    return $result->fetch_assoc();
}
function deleteprescription($id)
{
    $conn = getConnection();
    $sql = $conn->prepare("DELETE FROM prescriptiontable WHERE id=?");
    $sql->bind_param("i", $id);
    $respone = $sql->execute();
   $sql->close();
    $conn->close();
    return $respone;
}
?>