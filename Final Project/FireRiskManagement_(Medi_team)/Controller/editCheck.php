<?php 
	
	require_once('../Model/prescriptionModel.php');

	if (isset($_REQUEST['update'])) {
	
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$age = $_REQUEST['age'];
	$medicine = $_REQUEST['medicine'];
	$no_of_medicine = $_REQUEST['no_of_medicine'];
	$description = $_REQUEST['description'];
	$photo = $_REQUEST['photo'];
	
	$user = ['id'=>$id, 'name'=>$name, 'age'=>$age, 'medicine'=> $medicine , 'no_of_medicine'=>$no_of_medicine , 'description'=>$description , 'photo'=>$photo ];

	$status =  editCheck($user);

	if($status){
		header('location: ../View/patientList.php');
	}else{
		header('location: ../View/edit.php?placename='.$name);
	}
 }
?>